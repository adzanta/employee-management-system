<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EmployeeStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pegawai', Employee::count())
                ->description('Semua data pegawai terdaftar'),
        ];
    }
}
