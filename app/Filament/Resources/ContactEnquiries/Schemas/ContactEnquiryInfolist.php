<?php

namespace App\Filament\Resources\ContactEnquiries\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactEnquiryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Message')
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->components([
                        TextEntry::make('name')
                            ->label('Full Name')
                            ->weight('bold')
                            ->size('lg'),

                        TextEntry::make('subject')
                            ->label('Subject')
                            ->badge()
                            ->color('info'),

                        TextEntry::make('message')
                            ->label('Message')
                            ->columnSpanFull()
                            ->prose(),
                    ])->columnSpanFull()
                    ->columns(2),

                Section::make('Contact Details')
                    ->icon('heroicon-o-user-circle')
                    ->components([
                        TextEntry::make('email')
                            ->label('Email')
                            ->copyable()
                            ->icon('heroicon-o-envelope'),

                        TextEntry::make('phone')
                            ->label('Phone')
                            ->placeholder('Not provided')
                            ->icon('heroicon-o-phone'),

                        TextEntry::make('created_at')
                            ->label('Received')
                            ->since()
                            ->dateTimeTooltip(),
                    ])->columns(3)->columnSpanFull(),
            ]);
    }
}
