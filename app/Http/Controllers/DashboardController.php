<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use App\Models\company;
use App\Models\division;
use App\Models\unit;
use App\Models\sales_sub;
use App\Models\financial_year;
use DB;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
  public function sales_financialyear(Request $request){

      $financial_year = $request->fy;
      $data = $request->all();
    
      // return view('dashboard',['data'=>$data]);
      return view('dashboard_ajax',['financial_year'=>$financial_year]);
  }
  
}

   