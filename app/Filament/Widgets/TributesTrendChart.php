<?php

namespace App\Filament\Widgets;

use App\Models\Condolence;
use Filament\Widgets\ChartWidget;

class TributesTrendChart extends ChartWidget
{
    protected static ?int $sort = 2;

    protected ?string $heading = 'Tribute Submissions';

    protected ?string $description = 'Submitted vs approved tributes over time.';

    public ?string $filter = '30';

    protected int|string|array $columnSpan = 'full';

    protected function getFilters(): ?array
    {
        return [
            '7' => 'Last 7 days',
            '30' => 'Last 30 days',
            '90' => 'Last 90 days',
        ];
    }

    protected function getData(): array
    {
        $days = (int) ($this->filter ?? 30);
        $start = now()->subDays($days - 1)->startOfDay();

        $allTributes = Condolence::where('created_at', '>=', $start)->get();

        $submitted = $allTributes
            ->groupBy(fn ($row) => $row->created_at->format('d M'))
            ->map->count();

        $approved = $allTributes
            ->where('is_approved', true)
            ->groupBy(fn ($row) => $row->created_at->format('d M'))
            ->map->count();

        $labels = [];
        $submittedData = [];
        $approvedData = [];

        for ($i = $days - 1; $i >= 0; $i--) {
            $label = now()->subDays($i)->format('d M');
            $labels[] = $label;
            $submittedData[] = $submitted[$label] ?? 0;
            $approvedData[] = $approved[$label] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Submitted',
                    'data' => $submittedData,
                    'borderColor' => '#0C2461',
                    'backgroundColor' => 'rgba(12, 36, 97, 0.08)',
                    'fill' => true,
                    'tension' => 0.4,
                    'pointRadius' => $days <= 30 ? 3 : 1,
                ],
                [
                    'label' => 'Approved',
                    'data' => $approvedData,
                    'borderColor' => '#D4AF37',
                    'backgroundColor' => 'rgba(212, 175, 55, 0.08)',
                    'fill' => true,
                    'tension' => 0.4,
                    'pointRadius' => $days <= 30 ? 3 : 1,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
