<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDatavisitTableLwpx extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('data_visit', function (Blueprint $table) {
            $table->string('barang_tujuan_sering', 255)->nullable(true)->charset('')->collation('')->change();
			$table->string('barang_foto', 255)->nullable(true)->charset('')->collation('')->change();
			$table->string('kirim_ekspedisi', 255)->nullable(true)->charset('')->collation('')->change();
			$table->string('kirim_estimasi', 255)->charset('')->collation('')->change();
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

        Schema::table('data_visit', function (Blueprint $table) {
            $table->string('barang_tujuan_sering', 255)->nullable(false)->charset('')->collation('')->change();
			$table->string('barang_foto', 255)->nullable(false)->charset('')->collation('')->change();
			$table->string('kirim_ekspedisi', 255)->nullable(false)->charset('')->collation('')->change();
			$table->integer('kirim_estimasi')->charset('')->collation('')->change();
        });
    }
}
