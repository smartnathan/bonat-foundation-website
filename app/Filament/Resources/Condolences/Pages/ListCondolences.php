<?php

namespace App\Filament\Resources\Condolences\Pages;

use App\Filament\Resources\Condolences\CondolenceResource;
use App\Models\Condolence;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListCondolences extends ListRecords
{
    protected static string $resource = CondolenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All')
                ->badge(Condolence::count()),
            'pending' => Tab::make('Pending Approval')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_approved', false))
                ->badge(Condolence::where('is_approved', false)->count())
                ->badgeColor('warning'),
            'approved' => Tab::make('Approved')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_approved', true))
                ->badge(Condolence::where('is_approved', true)->count())
                ->badgeColor('success'),
        ];
    }
}
