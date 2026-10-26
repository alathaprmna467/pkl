<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('Id_Trans')->unique();
            $table->date('Date');
            $table->text('Notes')->nullable();
            $table->string('Id_Karyawan');
            $table->decimal('Berat', 8, 2);
            $table->string('Id_Pelanggan');
            $table->string('Id_Jenis');
            $table->decimal('Tarif', 12, 2);
            $table->decimal('Total', 12, 2);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
