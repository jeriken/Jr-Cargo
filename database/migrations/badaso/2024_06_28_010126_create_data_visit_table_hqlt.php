<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatavisitTableHqlt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('data_visit', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('user_id')->unsigned();
			$table->timestamp('cust_date');
			$table->string('cust_kab', 255);
			$table->string('cust_kec', 255);
			$table->string('cust_kel', 255);
			$table->text('cust_alamat')->nullable(true);
			$table->string('cust_klas', 255);
			$table->string('usaha_bentuk', 255);
			$table->string('usaha_ekspedisi', 255)->nullable(true);
			$table->string('usaha_nama', 255);
			$table->string('usaha_kategori', 255);
			$table->string('pic_nama', 255);
			$table->string('pic_no', 255);
			$table->string('jual_scope', 255);
			$table->string('kemasan_klas', 255);
			$table->string('kemasan_jenis', 255);
			$table->string('barang_kategori', 255);
			$table->string('barang_tujuan', 255);
			$table->string('barang_tujuan_sering', 255);
			$table->string('barang_ukuran', 255);
			$table->string('barang_foto', 255);
			$table->string('kirim_model', 255);
			$table->string('kirim_ekspedisi', 255);
			$table->integer('kirim_estimasi');
			$table->text('layanan_keluhan')->nullable(true);
			$table->string('layanan_perbaikan', 255)->nullable(true);
			$table->string('bayar_metode', 255)->nullable(true);
			$table->tinyInteger('layanan_cod')->nullable(true);
			$table->string('layanan_cutoff', 255)->nullable(true);
			$table->string('layanan_libur', 255)->nullable(true);
			$table->string('layanan_khusus', 255)->nullable(true);
			$table->tinyInteger('partner_status');
			$table->string('partner_level', 255)->nullable(true);
			$table->timestamps();
        });

        Schema::table('data_visit', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('badaso_users')->onDelete('no action')->onUpdate('no action');
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_visit');
    }
}
