<?php

namespace App\Filament\Resources\Condolences\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CondolenceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Tribute Details')
                    ->icon('heroicon-o-chat-bubble-left-ellipsis')
                    ->components([
                        TextEntry::make('name')
                            ->label('Full Name')
                            ->weight('bold')
                            ->size('lg'),

                        TextEntry::make('affiliation')
                            ->label('Affiliation')
                            ->badge()
                            ->color('info')
                            ->placeholder('—'),

                        TextEntry::make('message')
                            ->label('Tribute Message')
                            ->columnSpanFull()
                            ->prose(),
                    ])
                    ->columnSpanFull()
                    ->columns(2),

                Section::make('Submission Info')
                    ->icon('heroicon-o-information-circle')
                    ->components([
                        TextEntry::make('email')
                            ->label('Email (Private)')
                            ->copyable()
                            ->placeholder('Not provided')
                            ->icon('heroicon-o-envelope'),

                        IconEntry::make('is_approved')
                            ->label('Status')
                            ->boolean()
                            ->trueIcon('heroicon-o-check-circle')
                            ->falseIcon('heroicon-o-clock')
                            ->trueColor('success')
                            ->falseColor('warning'),

                        TextEntry::make('created_at')
                            ->label('Submitted')
                            ->since()
                            ->dateTimeTooltip(),

                        ImageEntry::make('photo_path')
                            ->label('Submitted Photo')
                            ->disk('public')
                            ->height(200)
                            ->placeholder('No photo submitted')
                            ->columnSpanFull()
                            ->visibility('public'),
                    ])->columnSpanFull()->columns(3),
            ]);
    }
}
