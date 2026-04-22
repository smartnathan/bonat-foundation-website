<?php

namespace App\Filament\Resources\Condolences;

use App\Filament\Resources\Condolences\Pages\CreateCondolence;
use App\Filament\Resources\Condolences\Pages\EditCondolence;
use App\Filament\Resources\Condolences\Pages\ListCondolences;
use App\Filament\Resources\Condolences\Schemas\CondolenceForm;
use App\Filament\Resources\Condolences\Tables\CondolencesTable;
use App\Models\Condolence;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CondolenceResource extends Resource
{
    protected static ?string $model = Condolence::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBookOpen;

    protected static ?string $navigationLabel = 'Tributes';

    protected static ?string $pluralModelLabel = 'Tributes';

    protected static ?string $modelLabel = 'Tribute';

    public static function form(Schema $schema): Schema
    {
        return CondolenceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CondolencesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCondolences::route('/'),
            'create' => CreateCondolence::route('/create'),
            'edit' => EditCondolence::route('/{record}/edit'),
        ];
    }
}
