<?php

namespace App\Filament\Resources\Donations\Tables;

use App\Models\Donation;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class DonationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('donor_name')
                    ->label('Donor')
                    ->placeholder('Anonymous')
                    ->searchable()
                    ->weight('semibold'),

                TextColumn::make('amount')
                    ->label('Amount')
                    ->money('NGN')
                    ->sortable(),

                TextColumn::make('programme_type')
                    ->label('Fund')
                    ->placeholder('General')
                    ->badge()
                    ->color('info'),

                TextColumn::make('give_type')
                    ->label('Type')
                    ->badge()
                    ->color('gray'),

                TextColumn::make('payment_status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (Donation $record): string => match ($record->payment_status) {
                        'completed' => 'success',
                        'pending' => 'warning',
                        'failed' => 'danger',
                        default => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->label('Date')
                    ->since()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('payment_status')
                    ->options(['pending' => 'Pending', 'completed' => 'Completed', 'failed' => 'Failed']),
                SelectFilter::make('give_type')
                    ->options(['one-time' => 'One-Time', 'legacy' => 'Legacy (Recurring)']),
            ])
            ->recordActions([ViewAction::make()])
            ->toolbarActions([
                BulkActionGroup::make([DeleteBulkAction::make()]),
            ]);
    }
}
