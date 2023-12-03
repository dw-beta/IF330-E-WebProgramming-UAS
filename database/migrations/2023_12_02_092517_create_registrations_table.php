<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('TahunAjaran');
            $table->string('NamaLengkap');
            $table->string('JenisKelamin');
            $table->string('Tempat_TanggalLahir');
            $table->string('Status');
            $table->string('AnakKe');
            $table->string('JumlahSaudara');
            $table->string('Hobi');
            $table->string('CitaCita');
            $table->string('Email');
            $table->string('Alamat');
            $table->string('Nomor');
            $table->string('NamaAyah');
            $table->string('NamaIbu');
            $table->string('filepembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
}
