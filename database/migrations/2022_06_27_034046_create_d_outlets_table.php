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
        Schema::create('d_outlets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_outlet');
            $table->text('alamat_outlet');
            $table->string('no_telp')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('kategori', ['Home', 'Agent']);
            //$table->boolean('is admin)->default('false);
            $table->text('tentang_outlet');
            // $table->binary('image');
            $table->string('password');
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
        Schema::dropIfExists('d_outlets');
    }
};
