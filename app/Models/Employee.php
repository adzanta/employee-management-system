<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids; 

class Employee extends Model
{
    use HasFactory, HasUlids; 

    protected $table = 'employees';

    protected $primaryKey = 'id';

    public $incrementing = false; 
    protected $keyType = 'string';

    protected $fillable = [
        'nik',
        'nama_lengkap',
        'email',
        'jenis_kelamin',
        'jabatan',
        'divisi',
        'tanggal_bergabung',
        'nomor_telepon',
        'tanggal_lahir',
        'alamat',
        'status_karyawan',
        'gaji_pokok',
    ];
}
