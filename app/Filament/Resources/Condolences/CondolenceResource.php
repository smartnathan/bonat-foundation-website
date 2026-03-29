<?php

namespace App\Filament\Resources\Condolences;

use App\Filament\Resources\Condolences\Pages\ListCondolences;
use App\Filament\Resources\Condolences\Pages\ViewCondolence;
use App\Filament\Resources\Condolences\Schemas\CondolenceInfolist;
use App\Filament\Resources\Condolences\Tables\CondolencesTable;
use App\Models\Condolence;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CondolenceResource extends Resource
{
    protected static ?string $model = Condolence::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBookOpen;

    protected static string|UnitEnum|null $navigationGroup = 'Memorial';

    protected static ?string $navigationLabel = 'Tributes';

    protected static ?int $navigationSort = 1;

    public static function infolist(Schema $schema): Schema
    {
        return CondolenceInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CondolencesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCondolences::route('/'),
            'view' => ViewCondolence::route('/{record}'),
        ];
    }
}
