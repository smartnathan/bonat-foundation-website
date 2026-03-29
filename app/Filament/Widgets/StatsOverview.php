<?php

namespace App\Filament\Widgets;

use App\Models\Condolence;
use App\Models\ContactEnquiry;
use App\Models\Donation;
use App\Models\VolunteerApplication;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        $totalTributes = Condolence::count();
        $pendingTributes = Condolence::where('is_approved', false)->count();
        $approvedTributes = Condolence::where('is_approved', true)->count();
        $contactEnquiries = ContactEnquiry::count();
        $volunteers = VolunteerApplication::count();
        $donationCount = Donation::count();
        $totalDonated = (float) Donation::where('payment_status', 'completed')->sum('amount');

        $tributeSparkline = collect(range(6, 0))
            ->map(fn ($day) => Condolence::whereDate('created_at', now()->subDays($day))->count())
            ->toArray();

        $enquirySparkline = collect(range(6, 0))
            ->map(fn ($day) => ContactEnquiry::whereDate('created_at', now()->subDays($day))->count())
            ->toArray();

        return [
            Stat::make('Total Tributes', number_format($totalTributes))
                ->description('All submissions to the condolence wall')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->chart($tributeSparkline)
                ->color('primary'),

            Stat::make('Pending Approval', number_format($pendingTributes))
                ->description($pendingTributes > 0 ? 'Tributes awaiting review' : 'All tributes reviewed')
                ->descriptionIcon($pendingTributes > 0 ? 'heroicon-m-clock' : 'heroicon-m-check-circle')
                ->color($pendingTributes > 0 ? 'warning' : 'success'),

            Stat::make('Approved Tributes', number_format($approvedTributes))
                ->description('Published on the tribute wall')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),

            Stat::make('Contact Enquiries', number_format($contactEnquiries))
                ->description('Messages via the contact form')
                ->descriptionIcon('heroicon-m-envelope')
                ->chart($enquirySparkline)
                ->color('info'),

            Stat::make('Volunteer Applications', number_format($volunteers))
                ->description('People signed up to serve')
                ->descriptionIcon('heroicon-m-hand-raised')
                ->color('success'),

            Stat::make('Donations Recorded', number_format($donationCount))
                ->description('₦'.number_format($totalDonated, 2).' confirmed')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('primary'),
        ];
    }
}
