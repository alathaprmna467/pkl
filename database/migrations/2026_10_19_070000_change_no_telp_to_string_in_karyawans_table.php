<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('karyawans', function (Blueprint $table) {
            $table->string('no_telp', 20)->change();
        });
    }

    public function down(): void
    {
        // Keep the string column to preserve phone numbers and leading zeroes.
    }
};
