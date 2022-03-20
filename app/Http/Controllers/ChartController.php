<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ligacg;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use Carbon\Carbon;

class ChartController extends Controller
{   
    public function index()
    {

        $ligacg = DB::table('ligacg')
            ->select('circle_group', 'jenis_taging', 'point')
            ->get();


        // $ligacg = Ligacg::all();

        $data = [];

        foreach($ligacg as $row){
            $data['label'][] = $row->circle_group; 
            $data['data']  = (int) $row->point;
        }

        $data['chart_data'] = json_encode($data);
        return view('dashboard.index', $data);
    }
}
