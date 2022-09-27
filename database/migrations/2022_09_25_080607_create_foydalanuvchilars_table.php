<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foydalanuvchilars', function (Blueprint $table) {
            $table->id();
            $table->string('ism');
            $table->string('sharif');
            $table->string('familya');
            $table->date('sana');
            $table->string('tel_raqam');
            $table->string('qosh_tel_raqam');
            $table->date('tamomlagan_sanasi');
            $table->string('diplom_raqami');
            $table->string('fakultet');
            $table->string('talim_shakli');
            $table->string('mamlakat');
            $table->string('viloyat');
            $table->string('manzil');
            $table->string('fuqaroligi');
            $table->string('millati');
            $table->string('pasport_raqami');
            $table->string('pasport_rasm');
            $table->string('tamomlagani');
            $table->string('tamomlagan_nomi');
            $table->string('tamomlagan_manzil');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foydalanuvchilars');
    }
};
