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

    // >ID Transaksi</th>
    // <th>Tanggal Transaksi</th>
    // <th>Customer</th>
    // <th>No_Telpon</th>
    // <th>Status Order</th>
    // <th>Status Pembayaran</th>
    // <th>Jenis Pembayaran</th>
    // <th>Jenis Laundry</th>
    // <th>Total</th>
    // <th>Aksi</th>
    public function up()
    {
        Schema::create('d_transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_transaksi');
            $table->string('customer');
            $table->string('no_telp')->nullable();
            $table->text('alamat_customer');
            $table->enum('status_order', ['Done', 'Delivery', 'Process'])->default('Done');
            $table->enum('status_pembayaran', ['Cash', 'GoPay', 'Bank'])->default('Cash');
            $table->enum('jenis_laundry', ['Cuci', 'Setrika', 'Cuci/Setrika'])->default('Cuci/Setrika');
            $table->enum('jenis_paket', ['Satuan', 'Kiloan'])->default('Kiloan');
            $table->enum('pengiriman', ['Kurir', 'Ambil Sendiri'])->default('Kurir');
            $table->string('total')->nullable();
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
        Schema::dropIfExists('d_transaksis');
    }
};
