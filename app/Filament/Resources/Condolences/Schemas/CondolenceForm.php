<?php

namespace App\Filament\Resources\Condolences\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CondolenceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Select::make('affiliation')
                    ->options([
                        'Family' => 'Family',
                        'ECWA' => 'ECWA',
                        'SIM / EMS' => 'SIM / EMS',
                        'ECWA Seminary (JETS)' => 'ECWA Seminary (JETS)',
                        'ECWA Women Fellowship' => 'ECWA Women Fellowship',
                        'Friends & Colleagues' => 'Friends & Colleagues',
                        'Well-Wisher' => 'Well-Wisher',
                    ])
                    ->searchable()
                    ->placeholder('Select affiliation'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->maxLength(255),
                Textarea::make('message')
                    ->required()
                    ->rows(4)
                    ->maxLength(1000)
                    ->columnSpanFull(),
                FileUpload::make('photo_path')
                    ->label('Photo (optional)')
                    ->image()
                    ->visibility('public')
                    ->directory('condolence-photos')
                    ->maxSize(5120),
                Toggle::make('is_approved')
                    ->label('Publish on website')
                    ->default(true),
            ]);
    }
}
