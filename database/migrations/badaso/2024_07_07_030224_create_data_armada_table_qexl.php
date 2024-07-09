<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataarmadaTableQexl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('data_armada', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('user_id')->unsigned();
			$table->string('armada_unit', 255);
			$table->string('armada_jenis', 255);
			$table->string('armada_nomor', 255);
			$table->string('armada_km', 255)->nullable(true);
			$table->string('armada_outlet', 255);
			$table->integer('kondisi_bersih');
			$table->string('kondisi_bak', 255);
			$table->string('kondisi_kabin_ex', 255);
			$table->string('kondisi_kabin_in', 255);
			$table->string('lampu_rem', 255);
			$table->integer('lampu_sein');
			$table->string('lampu_hazard', 255);
			$table->string('lampu_reverse', 255);
			$table->string('lampu_kota', 255);
			$table->string('mesin_speedo', 255);
			$table->string('mesin_oli', 255);
			$table->string('mesin_accu', 255);
			$table->string('mesin_radiator', 255);
			$table->string('mesin_fanbelt', 255);
			$table->string('mesin_wipper', 255);
			$table->string('mesin_oli_rem', 255);
			$table->string('mesin_rem', 255);
			$table->string('mesin_idle', 255);
			$table->string('mesin_steering', 255);
			$table->string('roda_kondisi', 255);
			$table->string('roda_depan_kanan', 255);
			$table->string('roda_depan_kanan_tambal', 255);
			$table->string('roda_depan_kanan_suspensi', 255);
			$table->string('roda_depan_kiri', 255);
			$table->string('roda_depan_kiri_tambal', 255);
			$table->string('roda_depan_kiri_suspensi', 255);
			$table->string('roda_bel_kanan', 255);
			$table->string('roda_bel_kanan_tambal', 255);
			$table->string('roda_bel_kanan_suspensi', 255);
			$table->string('roda_bel_kiri', 255);
			$table->string('roda_bel_kiri_tambal', 255);
			$table->string('roda_bel_kiri_suspensi', 255);
			$table->string('foto_kendala', 255);
			$table->string('foto_kanan', 255);
			$table->string('foto_kiri', 255);
			$table->timestamp('date_service')->nullable(true);
			$table->text('layanan_keluhan');
			$table->text('layanan_perbaikan');
			$table->timestamps();
        });

        Schema::table('data_armada', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('badaso_users');
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
        Schema::dropIfExists('data_armada');
    }
}
