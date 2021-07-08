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
    public function salesorder(Request $request){
        $post = $request->all();
        $unit = unit::where(['company_id' => $post['company_name']])->get();
        // echo $unit;
        foreach ($unit as $un) {
            echo '<option value="'.$un->id.'">'.$un->unit.'</option>';
        }
      


    }
}