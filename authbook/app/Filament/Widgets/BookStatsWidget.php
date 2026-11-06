<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use App\Models\Author;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]) // Angka acak buat ngebentuk grafik naik turun
                ->color('primary'),
            Stat::make('Total Authors', Author::count())
                ->chart([2, 4, 6, 4, 8, 10, 5])
                ->color('info'),
            Stat::make('Available Books', Book::where('status', 'available')->count())
                ->chart([1, 3, 5, 10, 15, 20, 29]) // Grafik seolah-olah naik
                ->color('success'),
            Stat::make('Borrowed Books', Book::where('status', 'borrowed')->count())
                ->chart([20, 15, 10, 5, 15, 18, 21])
                ->color('warning'),
        ];
    }
}