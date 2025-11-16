<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->ulid('id')->primary();
    
            // FIELD WAJIB
            $table->string('nik', 16)->unique();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('jabatan', ['Staff', 'Admin', 'Supervisor', 'Manager', 'Intern']);
            $table->enum('divisi', ['HRD', 'Finance', 'IT', 'Marketing', 'Operation', 'GA']);
            $table->date('tanggal_bergabung');
    
            // FIELD OPSIONAL
            $table->string('nomor_telepon')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->enum('status_karyawan', ['Aktif', 'Non-aktif', 'Resign', 'Cuti'])->nullable();
            $table->integer('gaji_pokok')->nullable();
    
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
