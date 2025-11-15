<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestEmployees extends TableWidget
{
    protected static ?string $heading = 'Pegawai Terbaru';

    public function table(Table $table): Table
    {
    return $table
        ->query(fn (): Builder => Employee::query()->latest()->limit(5))
        ->columns([
            Tables\Columns\TextColumn::make('nama_lengkap')
                ->label('Nama')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('jabatan')
                ->label('Jabatan')
                ->sortable(),

            Tables\Columns\TextColumn::make('divisi')
                ->label('Divisi')
                ->sortable(),

            Tables\Columns\TextColumn::make('tanggal_bergabung')
                ->label('Tanggal Bergabung')
                ->date()
                ->sortable(),
        ])
        ->paginated(false)
        ->recordActions([])
        ->headerActions([])
        ->filters([]);
    }

}
