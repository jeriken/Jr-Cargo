<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class DataVisitCRUDDataRowAdded extends Seeder
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

            $data_type = Badaso::model('DataType')::where('name', 'data_visit')->first();

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
                    'display_name' => 'User Id',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 1,
                    'delete' => 0,
                    'details' => '{}',
                    'relation' => '{"relation_type":"belongs_to","destination_table":"badaso_users","destination_table_column":"id","destination_table_display_column":"name"}',
                    'order' => 2,
                ),
                2 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'cust_date',
                    'type' => 'date',
                    'display_name' => 'Tanggal Kunjungan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 3,
                ),
                3 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'cust_kab',
                    'type' => 'text',
                    'display_name' => 'Kab Lokasi Customer',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 4,
                ),
                4 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'cust_kec',
                    'type' => 'text',
                    'display_name' => 'Kec Lokasi Customer',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 5,
                ),
                5 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'cust_kel',
                    'type' => 'text',
                    'display_name' => 'Keluarahan Lokasi Customer',
                    'required' => 1,
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
                    'field' => 'cust_alamat',
                    'type' => 'textarea',
                    'display_name' => 'Detail Lokasi Customer',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 7,
                ),
                7 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'cust_klas',
                    'type' => 'select',
                    'display_name' => 'Klasifikasi Customer',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Cust. Baru Visit 1",
"value": "Cust. Baru Visit 1"
},
{
"label": "Cust. Baru Visit 2",
"value": "Cust. Baru Visit 2"
},
{
"label": "Cust. Baru Visit 3",
"value": "Cust. Baru Visit 3"
},
{
"label": "Cust. Lama Aktif",
"value": "Cust. Lama Aktif"
},
{
"label": "Cust. Lama Tidak Aktif <30 Hari",
"value": "Cust. Lama Tidak Aktif <30 Hari"
},
{
"label": "Cust. Lama Tidak Aktif <60 Hari",
"value": "Cust. Lama Tidak Aktif <60 Hari"
},
{
"label": "Cust. Lama Tidak Aktif >60 Hari",
"value": "Cust. Lama Tidak Aktif >60 Hari"
}
]
}',
                    'relation' => NULL,
                    'order' => 8,
                ),
                8 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'usaha_bentuk',
                    'type' => 'select',
                    'display_name' => 'Bentuk Badan Usaha',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Perorangan",
"value": "Perorangan"
},
{
"label": "Instansi",
"value": "Instansi"
},
{
"label": "CV",
"value": "CV"
},
{
"label": "PT",
"value": "PT"
},
{
"label": "Koperasi",
"value": "Koperasi"
},
{
"label": "Rumah Sakit",
"value": "Rumah Sakit"
},
{
"label": "UMKM",
"value": "UMKM"
},
{
"label": "Agen BANK",
"value": "Agen BANK"
},
{
"label": "Agen Ekspedisi",
"value": "Agen Ekspedisi"
}
]
}',
                    'relation' => NULL,
                    'order' => 9,
                ),
                9 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'usaha_ekspedisi',
                    'type' => 'text',
                    'display_name' => 'Agen Bank/Ekspedisi',
                    'required' => 0,
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
                    'field' => 'usaha_nama',
                    'type' => 'text',
                    'display_name' => 'Nama Badan/Toko/Usaha',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 11,
                ),
                11 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'usaha_kategori',
                    'type' => 'select',
                    'display_name' => 'Kategori Usaha',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Produsen",
"value": "Produsen"
},
{
"label": "Distributor",
"value": "Distributor"
},
{
"label": "Retail",
"value": "Retail"
}
]
}',
                    'relation' => NULL,
                    'order' => 12,
                ),
                12 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'pic_nama',
                    'type' => 'text',
                    'display_name' => 'Nama PIC Cust. Ditemui',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 13,
                ),
                13 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'pic_no',
                    'type' => 'text',
                    'display_name' => 'No. WA/Telp PIC Cust. Ditemui',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 14,
                ),
                14 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'jual_scope',
                    'type' => 'select',
                    'display_name' => 'Scope Penjualan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "e-Commerce",
"value": "e-Commerce"
},
{
"label": "Reguler",
"value": "Reguler"
},
{
"label": "via Web",
"value": "via Web"
},
{
"label": "Semuanya",
"value": "Semuanya"
},
{
"label": "Lain-Lain",
"value": "Lain-Lain"
}
]
}',
                    'relation' => NULL,
                    'order' => 15,
                ),
                15 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'kemasan_klas',
                    'type' => 'select',
                    'display_name' => 'Klasifikasi Pengemasan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Original Pabrik",
"value": "Original Pabrik"
},
{
"label": "Kemasan Manual",
"value": "Kemasan Manual"
},
{
"label": "Campuran",
"value": "Campuran"
}
]
}',
                    'relation' => NULL,
                    'order' => 16,
                ),
                16 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'kemasan_jenis',
                    'type' => 'text',
                    'display_name' => 'Jenis Pengemasan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 17,
                ),
                17 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'barang_kategori',
                    'type' => 'text',
                    'display_name' => 'Kategori Barang',
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
                    'field' => 'barang_tujuan',
                    'type' => 'select',
                    'display_name' => 'Tujuan Lokasi Distribusi Barang',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Jawa",
"value": "Jawa"
},
{
"label": "Bali",
"value": "Bali"
},
{
"label": "Nusa Tenggara",
"value": "Nusa Tenggara"
},
{
"label": "Kalimantan",
"value": "Kalimantan"
},
{
"label": "Papua",
"value": "Papua"
},
{
"label": "Sulawesi",
"value": "Sulawesi"
},
{
"label": "Sumatera",
"value": "Sumatera"
}
]
}',
                    'relation' => NULL,
                    'order' => 19,
                ),
                19 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'barang_tujuan_sering',
                    'type' => 'text',
                    'display_name' => 'Tujuan Lokasi Distribusi Barang paling Sering/Banyak',
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
                    'field' => 'barang_ukuran',
                    'type' => 'select',
                    'display_name' => 'Variasi Ukuran Kemasan',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Kiloan",
"value": "Kiloan"
},
{
"label": "Koli",
"value": "Koli"
},
{
"label": "Unit",
"value": "Unit"
},
{
"label": "Lain-Lain",
"value": "Lain-Lain"
}
]
}',
                    'relation' => NULL,
                    'order' => 21,
                ),
                21 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'barang_foto',
                    'type' => 'upload_image',
                    'display_name' => 'Foto Produk setelah Dikemas',
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
                    'field' => 'kirim_model',
                    'type' => 'text',
                    'display_name' => 'Permintaan Model Pengiriman',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Retail KG",
"value": "Retail KG"
},
{
"label": "Small Cargo",
"value": "Small Cargo"
},
{
"label": "Partai Truck",
"value": "Partai Truck"
},
{
"label": "Full Truck",
"value": "Full Truck"
},
{
"label": "Sesuai Permintaan",
"value": "Sesuai Permintaan"
}
]
}',
                    'relation' => NULL,
                    'order' => 23,
                ),
                23 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'kirim_ekspedisi',
                    'type' => 'text',
                    'display_name' => 'Jasa Ekspedisi yang Telah Dipakai',
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
                    'field' => 'kirim_estimasi',
                    'type' => 'number',
                    'display_name' => 'Estimasi Pengiriman',
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
                    'field' => 'layanan_keluhan',
                    'type' => 'textarea',
                    'display_name' => 'Keluhan Layanan',
                    'required' => 0,
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
                    'field' => 'layanan_perbaikan',
                    'type' => 'text',
                    'display_name' => 'Harapan Perbaikan Layanan',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 27,
                ),
                27 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'bayar_metode',
                    'type' => 'select',
                    'display_name' => 'Metode Pembayaran',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "TUNAI",
"value": "TUNAI"
},
{
"label": "DFOD",
"value": "DFOD"
},
{
"label": "DCOD",
"value": "DCOD"
},
{
"label": "COD",
"value": "COD"
},
{
"label": "Mingguan",
"value": "Mingguan"
},
{
"label": "Bulanan",
"value": "Bulanan"
}
]
}',
                    'relation' => NULL,
                    'order' => 28,
                ),
                28 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'layanan_cod',
                    'type' => 'select',
                    'display_name' => 'Apakah Menghendaki Layanan COD dan DFOD?',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Ya",
"value": "1"
},
{
"label": "Tidak",
"value": "0"
}
]
}',
                    'relation' => NULL,
                    'order' => 29,
                ),
                29 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'layanan_cutoff',
                    'type' => 'time',
                    'display_name' => 'Permintaan Cut Off Pick Up Barang',
                    'required' => 0,
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
                    'field' => 'layanan_libur',
                    'type' => 'text',
                    'display_name' => 'Hari Libur Pick Up Barang',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 31,
                ),
                31 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'layanan_khusus',
                    'type' => 'text',
                    'display_name' => 'Apakah Ada Permintaan Khusus?',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 32,
                ),
                32 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'partner_status',
                    'type' => 'select',
                    'display_name' => 'Apakah Tertarik Menjadi Partner?',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Ya",
"value": "1"
},
{
"label": "Tidak",
"value": "0"
}
]
}',
                    'relation' => NULL,
                    'order' => 33,
                ),
                33 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'partner_level',
                    'type' => 'select',
                    'display_name' => 'Level Apa?',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "SP/Agen",
"value": "SP/Agen"
},
{
"label": "Bussinness Partner",
"value": "Bussinness Partner"
}
]
}',
                    'relation' => NULL,
                    'order' => 34,
                ),
                34 => 
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
                    'order' => 35,
                ),
                35 => 
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
                    'order' => 36,
                ),
            ));

            \DB::commit();
        } catch(Exception $e) {
            \DB::rollBack();

            throw new Exception('exception occur ' . $e);
        }
    }
}

