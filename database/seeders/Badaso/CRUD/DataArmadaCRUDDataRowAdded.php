<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class DataArmadaCRUDDataRowAdded extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        \DB::beginTransaction();

        try {

            $data_type = Badaso::model('DataType')::where('name', 'data_armada')->first();

            \DB::table('badaso_data_rows')->insert(array (
                0 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'id',
                    'type' => 'number',
                    'display_name' => 'Id',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 1,
                ),
                1 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'user_id',
                    'type' => 'relation',
                    'display_name' => 'Karyawan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => '{"relation_type":"belongs_to","destination_table":"badaso_users","destination_table_column":"id","destination_table_display_column":"name"}',
                    'order' => 2,
                ),
                2 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'armada_unit',
                    'type' => 'select',
                    'display_name' => 'Unit Armada',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Carry",
"value": "Carry"
},
{
"label": "L300",
"value": "L300"
},
{
"label": "CDD",
"value": "CDD"
},
{
"label": "Grandmax",
"value": "Grandmax"
}
]
}',
                    'relation' => NULL,
                    'order' => 3,
                ),
                3 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'armada_jenis',
                    'type' => 'select',
                    'display_name' => 'Jenis Unit',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Bak Terbuka",
"value": "Bak Terbuka"
},
{
"label": "Box",
"value": "Box"
}
]
}',
                    'relation' => NULL,
                    'order' => 4,
                ),
                4 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'armada_nomor',
                    'type' => 'select',
                    'display_name' => 'Nomor Polisi',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "AB 8273 AA",
"value": "AB 8273 AA"
},
{
"label": "AA 1997 QH",
"value": "AA 1997 QH"
},
{
"label": "B 9065 NRO",
"value": "B 9065 NRO"
},
{
"label": "AA 8547 AB",
"value": "AA 8547 AB"
},
{
"label": "AD 1910 RH",
"value": "AD 1910 RH"
},
{
"label": "AB 8258 AA",
"value": "AB 8258 AA"
}
]
}',
                    'relation' => NULL,
                    'order' => 5,
                ),
                5 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'armada_km',
                    'type' => 'number',
                    'display_name' => 'ODO METER / KM',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 6,
                ),
                6 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'armada_outlet',
                    'type' => 'select',
                    'display_name' => 'Outlet',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "SOC99G",
"value": "SOC99G"
},
{
"label": "KLT03H",
"value": "KLT03H"
},
{
"label": "KLT08H",
"value": "KLT08H"
},
{
"label": "KLT00D",
"value": "KLT00D"
},
{
"label": "JOG04H",
"value": "JOG04H"
},
{
"label": "UNIT MIDDLE TRIP",
"value": "UNIT MIDDLE TRIP"
}
]
}',
                    'relation' => NULL,
                    'order' => 7,
                ),
                7 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'kondisi_bersih',
                    'type' => 'select',
                    'display_name' => 'Kebersihan Unit',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Bersih",
"value": "1"
},
{
"label": "Buruk",
"value": "0"
}
]
}',
                    'relation' => NULL,
                    'order' => 8,
                ),
                8 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'kondisi_bak',
                    'type' => 'text',
                    'display_name' => 'Kondisi Box/Bak',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 9,
                ),
                9 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'kondisi_kabin_ex',
                    'type' => 'text',
                    'display_name' => 'Kondisi Exterior Cabin',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 10,
                ),
                10 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'kondisi_kabin_in',
                    'type' => 'select',
                    'display_name' => 'Kondisi Interior Cabin',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Bersih",
"value": "Bersih"
},
{
"label": "Buruk",
"value": "Buruk"
}
]
}',
                    'relation' => NULL,
                    'order' => 11,
                ),
                11 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'lampu_rem',
                    'type' => 'select',
                    'display_name' => 'Lampu Pengereman/Stoplamp',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Berfungsi baik",
"value": "Berfungsi baik"
},
{
"label": "Tidak Berfungsi",
"value": "Tidak Berfungsi"
}
]
}',
                    'relation' => NULL,
                    'order' => 12,
                ),
                12 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'lampu_sein',
                    'type' => 'select',
                    'display_name' => 'Lampu Sein',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Kanan Mati",
"value": "3"
},
{
"label": "Kiri Mati",
"value": "2"
},
{
"label": "Berfungsi Semua",
"value": "1"
},
{
"label": "Tidak Berfungsi Semua",
"value": "0"
}
]
}',
                    'relation' => NULL,
                    'order' => 13,
                ),
                13 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'lampu_hazard',
                    'type' => 'select',
                    'display_name' => 'Lampu Hazard',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Berfungsi Baik",
"value": "Berfungsi Baik"
},
{
"label": "Tidak Berfungsi",
"value": "Tidak Berfungsi"
}
]
}',
                    'relation' => NULL,
                    'order' => 14,
                ),
                14 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'lampu_reverse',
                    'type' => 'select',
                    'display_name' => 'Lampu Reverse/Mundur',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Berfungsi Baik",
"value": "Berfungsi Baik"
},
{
"label": "Tidak Berfungsi",
"value": "Tidak Berfungsi"
}
]
}',
                    'relation' => NULL,
                    'order' => 15,
                ),
                15 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'lampu_kota',
                    'type' => 'select',
                    'display_name' => 'Lampu Clearence/Lampu Kota',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Berfungsi Baik",
"value": "Berfungsi Baik"
},
{
"label": "Tidak Berfungsi",
"value": "Tidak Berfungsi"
}
]
}',
                    'relation' => NULL,
                    'order' => 16,
                ),
                16 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'mesin_speedo',
                    'type' => 'select',
                    'display_name' => 'Speedometer',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Pandom tidak berfungsi",
"value": "Pandom tidak berfungsi"
},
{
"label": "Lampu Speedometer tidak berfungsi",
"value": "Lampu Speedometer tidak berfungsi"
},
{
"label": "Pandom berfungsi, Lampu Speedometer tidak berfungsi",
"value": "Pandom berfungsi, Lampu Speedometer tidak berfungsi"
},
{
"label": "Pandom tidak berfungsi, Lampu Speedometer berfungsi",
"value": "Pandom tidak berfungsi, Lampu Speedometer berfungsi"
},
{
"label": "Tidak Berfungsi Semua",
"value": "Tidak Berfungsi Semua"
},
{
"label": "Berfungsi Semua",
"value": "Berfungsi Semua"
}
]
}',
                    'relation' => NULL,
                    'order' => 17,
                ),
                17 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'mesin_oli',
                    'type' => 'text',
                    'display_name' => 'Oli Mesin',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 18,
                ),
                18 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'mesin_accu',
                    'type' => 'text',
                    'display_name' => 'Accu',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 19,
                ),
                19 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'mesin_radiator',
                    'type' => 'text',
                    'display_name' => 'Radiator',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 20,
                ),
                20 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'mesin_fanbelt',
                    'type' => 'text',
                    'display_name' => 'Fanbelt',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 21,
                ),
                21 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'mesin_wipper',
                    'type' => 'text',
                    'display_name' => 'Wipper',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 22,
                ),
                22 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'mesin_oli_rem',
                    'type' => 'text',
                    'display_name' => 'Oli Hidrolis/Minyak Rem',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 23,
                ),
                23 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'mesin_rem',
                    'type' => 'text',
                    'display_name' => 'Brake/Rem',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 24,
                ),
                24 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'mesin_idle',
                    'type' => 'text',
                    'display_name' => 'Engine Idle',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 25,
                ),
                25 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'mesin_steering',
                    'type' => 'text',
                    'display_name' => 'Steering',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 26,
                ),
                26 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_kondisi',
                    'type' => 'select',
                    'display_name' => 'Kondisi Roda',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Baik",
"value": "Baik"
},
{
"label": "Buruk",
"value": "Buruk"
}
]
}',
                    'relation' => NULL,
                    'order' => 27,
                ),
                27 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_depan_kanan',
                    'type' => 'select',
                    'display_name' => 'Ban Depan Kanan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Tekanan Angin Kurang",
"value": "Tekanan Angin Kurang"
},
{
"label": "Aus",
"value": "Aus"
},
{
"label": "Aus Tidak Merata",
"value": "Aus Tidak Merata"
},
{
"label": "Kawat Terlihat",
"value": "Kawat Terlihat"
},
{
"label": "Masih Baik",
"value": "Masih Baik"
}
]
}',
                    'relation' => NULL,
                    'order' => 28,
                ),
                28 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_depan_kanan_tambal',
                    'type' => 'select',
                    'display_name' => 'Jumlah Tambalan Ban Depan Kanan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Belum ada",
"value": "Belum ada"
},
{
"label": "Kurang dari 3",
"value": "Kurang dari 3"
},
{
"label": "Lebih dari 3",
"value": "Lebih dari 3"
}
]
}',
                    'relation' => NULL,
                    'order' => 29,
                ),
                29 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_depan_kanan_suspensi',
                    'type' => 'text',
                    'display_name' => 'Suspensi Depan Kanan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 30,
                ),
                30 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_depan_kiri',
                    'type' => 'select',
                    'display_name' => 'Ban Depan Kiri',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Tekanan Angin Kurang",
"value": "Tekanan Angin Kurang"
},
{
"label": "Aus",
"value": "Aus"
},
{
"label": "Aus Tidak Merata",
"value": "Aus Tidak Merata"
},
{
"label": "Kawat Terlihat",
"value": "Kawat Terlihat"
},
{
"label": "Masih Baik",
"value": "Masih Baik"
}
]
}',
                    'relation' => NULL,
                    'order' => 31,
                ),
                31 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_depan_kiri_tambal',
                    'type' => 'select',
                    'display_name' => 'Jumlah Tambalan Ban Depan Kiri',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Belum ada",
"value": "Belum ada"
},
{
"label": "Kurang dari 3",
"value": "Kurang dari 3"
},
{
"label": "Lebih dari 3",
"value": "Lebih dari 3"
}
]
}',
                    'relation' => NULL,
                    'order' => 32,
                ),
                32 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_depan_kiri_suspensi',
                    'type' => 'text',
                    'display_name' => 'Suspensi Depan Kiri',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 33,
                ),
                33 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_bel_kanan',
                    'type' => 'select',
                    'display_name' => 'Ban Belakang Kanan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Tekanan Angin Kurang",
"value": "Tekanan Angin Kurang"
},
{
"label": "Aus",
"value": "Aus"
},
{
"label": "Aus Tidak Merata",
"value": "Aus Tidak Merata"
},
{
"label": "Kawat Terlihat",
"value": "Kawat Terlihat"
},
{
"label": "Masih Baik",
"value": "Masih Baik"
}
]
}',
                    'relation' => NULL,
                    'order' => 34,
                ),
                34 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_bel_kanan_tambal',
                    'type' => 'select',
                    'display_name' => 'Jumlah Tambalan Ban Belakang Kanan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Belum ada",
"value": "Belum ada"
},
{
"label": "Kurang dari 3",
"value": "Kurang dari 3"
},
{
"label": "Lebih dari 3",
"value": "Lebih dari 3"
}
]
}',
                    'relation' => NULL,
                    'order' => 35,
                ),
                35 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_bel_kanan_suspensi',
                    'type' => 'text',
                    'display_name' => 'Suspensi Belakang Kanan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 36,
                ),
                36 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_bel_kiri',
                    'type' => 'select',
                    'display_name' => 'Ban Belakang Kiri',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Tekanan Angin Kurang",
"value": "Tekanan Angin Kurang"
},
{
"label": "Aus",
"value": "Aus"
},
{
"label": "Aus Tidak Merata",
"value": "Aus Tidak Merata"
},
{
"label": "Kawat Terlihat",
"value": "Kawat Terlihat"
},
{
"label": "Masih Baik",
"value": "Masih Baik"
}
]
}',
                    'relation' => NULL,
                    'order' => 37,
                ),
                37 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_bel_kiri_tambal',
                    'type' => 'select',
                    'display_name' => 'Jumlah Tambalan Ban Belakang Kiri',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Belum ada",
"value": "Belum ada"
},
{
"label": "Kurang dari 3",
"value": "Kurang dari 3"
},
{
"label": "Lebih dari 3",
"value": "Lebih dari 3"
}
]
}',
                    'relation' => NULL,
                    'order' => 38,
                ),
                38 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'roda_bel_kiri_suspensi',
                    'type' => 'text',
                    'display_name' => 'Suspensi Belakang Kiri',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 39,
                ),
                39 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'foto_kendala',
                    'type' => 'upload_image',
                    'display_name' => 'Foto Kendala Unit',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 40,
                ),
                40 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'foto_kanan',
                    'type' => 'upload_image',
                    'display_name' => 'Foto Unit Tampak Depan & Samping Kanan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 41,
                ),
                41 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'foto_kiri',
                    'type' => 'upload_image',
                    'display_name' => 'Foto Unit Tampak Belakang & Samping Kiri',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 42,
                ),
                42 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'date_service',
                    'type' => 'datetime',
                    'display_name' => 'Rencana Service',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 43,
                ),
                43 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'layanan_keluhan',
                    'type' => 'textarea',
                    'display_name' => 'Perbaikan Layanan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 44,
                ),
                44 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'layanan_perbaikan',
                    'type' => 'textarea',
                    'display_name' => 'Keluhan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 45,
                ),
                45 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'created_at',
                    'type' => 'datetime',
                    'display_name' => 'Created At',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 46,
                ),
                46 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'updated_at',
                    'type' => 'datetime',
                    'display_name' => 'Updated At',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 47,
                ),
            ));

            \DB::commit();
        } catch(Exception $e) {
            \DB::rollBack();

            throw new Exception('exception occur ' . $e);
        }
    }
}

