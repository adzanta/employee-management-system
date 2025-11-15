<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use Filament\Widgets\ChartWidget;

class EmployeesChart extends ChartWidget
{
    protected ?string $heading = 'Pegawai per Divisi';

    protected function getData(): array
    {
        $divisions = ['HRD', 'Finance', 'IT', 'Marketing', 'Operation', 'GA'];
        
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Pegawai',
                    'data' => array_map(fn($d) => Employee::where('divisi', $d)->count(), $divisions),
                ]
            ],
            'labels' => $divisions,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
{
    return [
        'scales' => [
            'y' => [
                'beginAtZero' => true,
                'ticks' => [
                    'stepSize' => 1,
                ],
            ],
        ],
    ];
}

}
