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
        Schema::create('d_kurirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kurir');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            // $table->enum('auth', ['Pelanggan', 'Kurir']);
            $table->enum('status', ['Active', 'Not Active'])->default('Active');
            $table->string('alamat');
            $table->string('no_telp')->nullable();
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
        Schema::dropIfExists('d_kurirs');
    }
};
