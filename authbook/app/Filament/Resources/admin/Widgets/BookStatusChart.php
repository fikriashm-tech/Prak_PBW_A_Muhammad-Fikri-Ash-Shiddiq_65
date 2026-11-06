<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use Filament\Widgets\ChartWidget;

class BookStatusChart extends ChartWidget
{
    protected static ?string $heading = 'Available vs Borrowed Books';
    
    // Biar posisinya ada di bawah deretan kotak angka
    protected static ?int $sort = 2; 

    protected function getData(): array
    {
        $available = Book::where('status', 'available')->count();
        $borrowed = Book::where('status', 'borrowed')->count();

        return [
            'datasets' => [
                [
                    'label' => 'Total Books',
                    'data' => [$available, $borrowed],
                    'backgroundColor' => ['#10b981', '#f59e0b'], // Warna hijau dan kuning dari Tailwind
                ],
            ],
            'labels' => ['Available', 'Borrowed'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}