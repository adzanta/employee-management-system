<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('nik')
                ->label('NIK')
                ->required()
                ->rules(['digits_between:8,16'])
                ->maxLength(16)
                ->validationMessages([
                    'required'        => 'NIK wajib diisi.',
                    'digits_between'  => 'NIK harus terdiri dari 8 sampai 16 digit.',
                    'max'             => 'NIK maksimal 16 digit.',
                ]),

            TextInput::make('nama_lengkap')
                ->label('Nama Lengkap')
                ->required()
                ->validationMessages([
                    'required' => 'Nama lengkap wajib diisi.',
                ]),

            TextInput::make('email')
                ->label('Alamat Email')
                ->email()
                ->required()
                ->unique(ignoreRecord: true)
                ->validationMessages([
                    'required' => 'Email wajib diisi.',
                    'email'    => 'Format email tidak valid.',
                    'unique'   => 'Email sudah terdaftar.',
                ]),

            Select::make('jenis_kelamin')
                ->label('Jenis Kelamin')
                ->options([
                    'Laki-laki' => 'Laki-laki',
                    'Perempuan' => 'Perempuan',
                ])
                ->required()
                ->validationMessages([
                    'required' => 'Jenis kelamin wajib dipilih.',
                ]),

            Select::make('jabatan')
                ->label('Jabatan')
                ->options([
                    'Staff'      => 'Staff',
                    'Admin'      => 'Admin',
                    'Supervisor' => 'Supervisor',
                    'Manager'    => 'Manager',
                    'Intern'     => 'Intern',
                ])
                ->required()
                ->validationMessages([
                    'required' => 'Jabatan wajib dipilih.',
                ]),

            Select::make('divisi')
                ->label('Divisi')
                ->options([
                    'HRD'       => 'HRD',
                    'Finance'   => 'Finance',
                    'IT'        => 'IT',
                    'Marketing' => 'Marketing',
                    'Operation' => 'Operation',
                    'GA'        => 'GA',
                ])
                ->required()
                ->validationMessages([
                    'required' => 'Divisi wajib dipilih.',
                ]),

            DatePicker::make('tanggal_bergabung')
                ->label('Tanggal Bergabung')
                ->required()
                ->validationMessages([
                    'required' => 'Tanggal bergabung wajib diisi.',
                ]),

        
            TextInput::make('nomor_telepon')
                ->label('Nomor Telepon')
                ->placeholder('Contoh: 081234567890')
                ->rules(['digits_between:10,13'])
                ->minLength(10)
                ->maxLength(13)
                ->validationMessages([
                    'digits_between' => 'Nomor telepon harus 10 hingga 13 digit.',
                    'min'            => 'Nomor telepon minimal 10 digit.',
                    'max'            => 'Nomor telepon maksimal 13 digit.',
                ]),

            DatePicker::make('tanggal_lahir')
                ->label('Tanggal Lahir'),

            Textarea::make('alamat')
                ->label('Alamat')
                ->columnSpanFull(),

            Select::make('status_karyawan')
                ->label('Status Karyawan')
                ->options([
                    'Aktif'     => 'Aktif',
                    'Non-aktif' => 'Non-aktif',
                    'Resign'    => 'Resign',
                    'Cuti'      => 'Cuti',
                ]),

            
            TextInput::make('gaji_pokok')
                ->label('Gaji Pokok')
                ->numeric(),
        ]);
    }
}
