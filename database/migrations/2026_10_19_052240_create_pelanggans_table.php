<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pelanggan')->unique();
            $table->string('Nama_Pelanggan');
            $table->number('No_Telp', 20);
            $table->text('Alamat');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
