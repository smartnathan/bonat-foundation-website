<?php

namespace App\Filament\Widgets;

use App\Models\Condolence;
use App\Models\ContactEnquiry;
use App\Models\Donation;
use App\Models\VolunteerApplication;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class DonationsOverviewChart extends ChartWidget
{
    protected static ?int $sort = 3;

    protected ?string $heading = 'Monthly Activity Overview';

    protected ?string $description = 'All form submissions tracked month-by-month.';

    public ?string $filter = '6';

    protected int|string|array $columnSpan = 'full';

    protected function getFilters(): ?array
    {
        return [
            '3' => 'Last 3 months',
            '6' => 'Last 6 months',
            '12' => 'Last 12 months',
        ];
    }

    protected function getData(): array
    {
        $months = (int) ($this->filter ?? 6);

        /** @var Collection<int, Carbon> $periods */
        $periods = collect(range($months - 1, 0))->map(fn ($i) => now()->subMonths($i));
        $labels = $periods->map(fn ($m) => $m->format('M Y'))->toArray();

        $countByMonth = fn (string $model): array => $periods->map(
            fn ($m) => $model::whereYear('created_at', $m->year)
                ->whereMonth('created_at', $m->month)
                ->count()
        )->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Tributes',
                    'data' => $countByMonth(Condolence::class),
                    'backgroundColor' => 'rgba(12, 36, 97, 0.8)',
                    'borderColor' => '#0C2461',
                    'borderWidth' => 1,
                ],
                [
                    'label' => 'Contact Enquiries',
                    'data' => $countByMonth(ContactEnquiry::class),
                    'backgroundColor' => 'rgba(212, 175, 55, 0.8)',
                    'borderColor' => '#D4AF37',
                    'borderWidth' => 1,
                ],
                [
                    'label' => 'Volunteer Applications',
                    'data' => $countByMonth(VolunteerApplication::class),
                    'backgroundColor' => 'rgba(16, 185, 129, 0.8)',
                    'borderColor' => '#10B981',
                    'borderWidth' => 1,
                ],
                [
                    'label' => 'Donations',
                    'data' => $countByMonth(Donation::class),
                    'backgroundColor' => 'rgba(139, 92, 246, 0.8)',
                    'borderColor' => '#8B5CF6',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
