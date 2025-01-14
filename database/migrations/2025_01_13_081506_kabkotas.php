<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPSTORM_META\type;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kabkotas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alt_name');
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('jumlah_puskesmas');
            $table->integer('jumlah_klinik');
            $table->integer('jumlah_rumahsakit');
            $table->integer('jumlah_tk');
            $table->integer('jumlah_sd');
            $table->integer('jumlah_smp');
            $table->integer('jumlah_sma');
            $table->integer('jumlah_smk');
            $table->integer('jumlah_perguruan_tinggi');
            $table->string('type');
            $table->longText('polygon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kabkotas');
    }
};
