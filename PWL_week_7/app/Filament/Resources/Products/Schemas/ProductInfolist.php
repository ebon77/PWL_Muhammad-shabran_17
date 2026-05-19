<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\IconEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Tabs')
                    ->tabs([
                        // 4. Tab dengan icon berbeda tiap tab
                        Tab::make('Product Info')
                            ->icon('heroicon-m-information-circle')
                            ->schema([
                                TextEntry::make('name')
                                    ->label('Product Name')
                                    ->weight('bold')
                                    ->color('primary'),
                                TextEntry::make('id')
                                    ->label('Product ID'),
                                TextEntry::make('sku')
                                    ->label('Product SKU')
                                    ->badge()
                                    ->color('warning'),
                                TextEntry::make('description')
                                    ->label('Product Description'),
                                TextEntry::make('created_at')
                                    ->label('Product Creation Date')
                                    ->date('d M Y')
                                    ->color('info'),
                            ]),

                        
                        Tab::make('Pricing & Stocks')
                            ->icon('heroicon-m-currency-dollar')
                            ->badge(fn ($record): string => $record->stock)
                            ->badgeColor(fn ($record): string => match (true) {
                                $record->stock <= 0  => 'danger',
                                $record->stock <= 10 => 'warning',
                                $record->stock <= 50 => 'info',
                                default              => 'success',
                            })
                            ->schema([
                                TextEntry::make('price')
                                    ->label('Product Price')
                                    ->weight('bold')
                                    ->color('primary')
                                    ->icon('heroicon-s-currency-dollar')
                                    ->formatStateUsing(fn ($state): string => 'Rp ' . number_format((float)$state, 0, ',', '.')),

                                
                                TextEntry::make('stock')
                                    ->label('Product Stock')
                                    ->badge()
                                    ->color(fn ($state): string => match (true) {
                                        $state <= 0   => 'danger',
                                        $state <= 10  => 'warning',
                                        $state <= 50  => 'info',
                                        default       => 'success',
                                    })
                                    ->formatStateUsing(fn ($state): string => match (true) {
                                        $state <= 0   => "Out of Stock (0)",
                                        $state <= 10  => "Low Stock ({$state})",
                                        $state <= 50  => "Limited ({$state})",
                                        default       => "In Stock ({$state})",
                                    }),
                            ]),


                        Tab::make('Image and Status')
                            ->icon('heroicon-m-photo')
                            ->schema([
                                ImageEntry::make('image')
                                    ->label('Product Image')
                                    ->disk('public'),
                                IconEntry::make('is_active')
                                    ->label('Is Active?')
                                    ->boolean(),
                                IconEntry::make('is_featured')
                                    ->label('Is Featured?')
                                    ->boolean(),
                            ]),
                    ])
                    ->columnSpanFull(),
                    
            ]);
    }
}