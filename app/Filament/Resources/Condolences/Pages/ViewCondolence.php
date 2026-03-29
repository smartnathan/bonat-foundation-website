<?php

namespace App\Filament\Resources\Condolences\Pages;

use App\Filament\Resources\Condolences\CondolenceResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCondolence extends ViewRecord
{
    protected static string $resource = CondolenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('approve')
                ->label('Approve Tribute')
                ->icon('heroicon-o-check-circle')
                ->color('success')
                ->requiresConfirmation()
                ->modalHeading('Approve this tribute?')
                ->modalDescription('This will make the tribute visible on the public tribute wall.')
                ->action(fn () => $this->record->update(['is_approved' => true]))
                ->hidden(fn () => $this->record->is_approved),

            Action::make('unapprove')
                ->label('Unapprove')
                ->icon('heroicon-o-x-circle')
                ->color('warning')
                ->action(fn () => $this->record->update(['is_approved' => false]))
                ->visible(fn () => $this->record->is_approved),

            DeleteAction::make(),
        ];
    }
}
