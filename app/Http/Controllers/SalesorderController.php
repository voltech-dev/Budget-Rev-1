<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Turnover;
use App\Models\Collection;
use Illuminate\Http\Request;

class SalesorderController extends Controller
{
  
    public function salesorder()
    {
        return view('salesorder.create');
    }
    public function store(Request $request)
    {
        $sale=new Sale();
        $sale->Company_name=$request->company_name;
        $sale->unit=$request->unit;
        $sale->division=$request->division;
        $sale->financial_year=$request->financial_year;
        $sale->target_q1=$request->q1;
        $sale->target_q2=$request->q2;
        $sale->target_q3=$request->q3;
        $sale->target_q4=$request->q4;
        $sale->actual_q1=$request->aq1;
        $sale->actual_q2=$request->aq2;
        $sale->actual_q3=$request->aq3;
        $sale->actual_q4=$request->aq4;
        $sale->save();
        return back();
    }
    public function turnover(){
        return view('turnover.turnover');
    }
    public function turnover_store(Request $request)
    {
        $turn=new Turnover();
        $turn->Company_name=$request->company_name;
        $turn->unit=$request->unit;
        $turn->division=$request->division;
        $turn->financial_year=$request->financial_year;
        $turn->target_q1=$request->q1;
        $turn->target_q2=$request->q2;
        $turn->target_q3=$request->q3;
        $turn->target_q4=$request->q4;
        $turn->actual_q1=$request->aq1;
        $turn->actual_q2=$request->aq2;
        $turn->actual_q3=$request->aq3;
        $turn->actual_q4=$request->aq4;
        $turn->save();
        return back();
    }
    public function collection(){
        return view('collection.collection');
    }
    public function collection_store(Request $request)
    {
        $collection=new Collection();
        $collection->Company_name=$request->company_name;
        $collection->unit=$request->unit;
        $collection->division=$request->division;
        $collection->financial_year=$request->financial_year;
        $collection->target_q1=$request->q1;
        $collection->target_q2=$request->q2;
        $collection->target_q3=$request->q3;
        $collection->target_q4=$request->q4;
        $collection->actual_q1=$request->aq1;
        $collection->actual_q2=$request->aq2;
        $collection->actual_q3=$request->aq3;
        $collection->actual_q4=$request->aq4;
        $collection->save();
        return back();
    }
}