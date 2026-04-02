<?php

namespace App\Filament\Resources\Donations\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Split;
use Filament\Schemas\Schema;

class DonationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Split::make([
                    Section::make('Donation Details')
                        ->icon('heroicon-o-banknotes')
                        ->components([
                            TextEntry::make('amount')
                                ->label('Amount (NGN)')
                                ->money('NGN')
                                ->size('xl')
                                ->weight('bold')
                                ->color('success'),

                            TextEntry::make('payment_status')
                                ->label('Payment Status')
                                ->badge()
                                ->color(fn (string $state): string => match ($state) {
                                    'completed' => 'success',
                                    'pending' => 'warning',
                                    'failed' => 'danger',
                                    default => 'gray',
                                }),

                            TextEntry::make('give_type')
                                ->label('Gift Type')
                                ->badge()
                                ->color('info'),

                            TextEntry::make('frequency')
                                ->label('Frequency')
                                ->placeholder('One-time')
                                ->badge(),

                            TextEntry::make('programme_type')
                                ->label('Programme / Fund')
                                ->placeholder('General Fund'),

                            TextEntry::make('payment_method')
                                ->label('Payment Method')
                                ->placeholder('—'),

                            TextEntry::make('payment_type')
                                ->label('Payment Type')
                                ->placeholder('—'),

                            TextEntry::make('payment_reference')
                                ->label('Reference')
                                ->copyable()
                                ->placeholder('—'),

                            TextEntry::make('payment_date')
                                ->label('Payment Date')
                                ->dateTime()
                                ->placeholder('Pending'),
                        ])
                        ->columns(2),

                    Section::make('Donor Details')
                        ->icon('heroicon-o-user-circle')
                        ->components([
                            TextEntry::make('donor_name')
                                ->label('Name')
                                ->placeholder('Anonymous')
                                ->weight('semibold'),

                            TextEntry::make('donor_email')
                                ->label('Email')
                                ->copyable()
                                ->placeholder('Not provided')
                                ->icon('heroicon-o-envelope'),

                            TextEntry::make('donor_phone')
                                ->label('Phone')
                                ->placeholder('Not provided')
                                ->icon('heroicon-o-phone'),

                            TextEntry::make('created_at')
                                ->label('Submitted')
                                ->since()
                                ->dateTimeTooltip(),
                        ])
                        ->grow(false),
                ])->from('lg'),

                Section::make('Transfer Receipt')
                    ->icon('heroicon-o-paper-clip')
                    ->components([
                        TextEntry::make('receipt_path')
                            ->label('Receipt File')
                            ->placeholder('No receipt uploaded')
                            ->formatStateUsing(fn (?string $state): string => $state ? basename($state) : '—')
                            ->url(fn (?string $state): ?string => $state ? route('admin.donation.receipt', ['path' => $state]) : null)
                            ->openUrlInNewTab(),

                        ImageEntry::make('receipt_path')
                            ->label('Preview')
                            ->disk('local')
                            ->visibility('public')
                            ->height(300)
                            ->hidden(fn ($record): bool => ! $record?->receipt_path || str_ends_with((string) $record->receipt_path, '.pdf')),
                    ])
                    ->hidden(fn ($record): bool => ! $record?->receipt_path)
                    ->columns(1),
            ]);
    }
}
