<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataVisit;
use App\Models\DataArmada;
use Uasoft\Badaso\Helpers\ApiResponse;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $data['customer'] = DataVisit::selectRaw("cust_klas, count(*) as total")->groupBy('cust_klas')->get();
            $data['bentuk'] = DataVisit::selectRaw("usaha_bentuk, count(*) as total")->groupBy('usaha_bentuk')->get();
            $data['kategori'] = DataVisit::selectRaw("usaha_kategori, count(*) as total")->groupBy('usaha_kategori')->get();
            $data['penjualan'] = DataVisit::selectRaw("jual_scope, count(*) as total")->groupBy('jual_scope')->get();
            $data['pengiriman'] = DataVisit::selectRaw("kirim_model, count(*) as total")->groupBy('kirim_model')->get();
            $data['partner'] = DataVisit::selectRaw("partner_status, count(*) as total")->groupBy('partner_status')->get();
            $data['armada'] = DataArmada::where('status', '=', '0')->get();
            return ApiResponse::onlyEntity($data);
        } catch (Exception $e) {
            return ApiResponse::failed($e);
        }
    }
}
