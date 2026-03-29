<?php

namespace App\Filament\Resources\Condolences\Tables;

use App\Models\Condolence;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class CondolencesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('semibold'),

                TextColumn::make('affiliation')
                    ->badge()
                    ->color('info')
                    ->placeholder('—')
                    ->searchable(),

                TextColumn::make('message')
                    ->limit(80)
                    ->wrap(),

                IconColumn::make('photo_path')
                    ->label('Photo')
                    ->boolean()
                    ->state(fn (Condolence $record): bool => filled($record->photo_path))
                    ->trueIcon('heroicon-o-photo')
                    ->trueColor('success')
                    ->falseIcon('heroicon-o-minus')
                    ->falseColor('gray'),

                IconColumn::make('is_approved')
                    ->label('Approved')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-clock')
                    ->trueColor('success')
                    ->falseColor('warning'),

                TextColumn::make('created_at')
                    ->label('Submitted')
                    ->since()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                TernaryFilter::make('is_approved')
                    ->label('Approval Status')
                    ->trueLabel('Approved only')
                    ->falseLabel('Pending only')
                    ->native(false),

                SelectFilter::make('affiliation')
                    ->options([
                        'ECWA Women\'s Fellowship' => 'ECWA Women\'s Fellowship',
                        'EMS/Missionary' => 'EMS/Missionary',
                        'Student/Alumnus' => 'Student/Alumnus',
                        'New Convert' => 'New Convert',
                        'Friend/Family' => 'Friend/Family',
                        'Other' => 'Other',
                    ]),
            ])
            ->recordActions([
                ViewAction::make(),
                Action::make('approve')
                    ->label('Approve')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->action(fn (Condolence $record) => $record->update(['is_approved' => true]))
                    ->hidden(fn (Condolence $record): bool => $record->is_approved),
                Action::make('unapprove')
                    ->label('Unapprove')
                    ->icon('heroicon-o-x-circle')
                    ->color('warning')
                    ->action(fn (Condolence $record) => $record->update(['is_approved' => false]))
                    ->visible(fn (Condolence $record): bool => $record->is_approved),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
