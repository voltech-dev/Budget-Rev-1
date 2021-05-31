<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Turnover;
use App\Models\Collection;
use App\Models\company;
use App\Models\division;
use App\Models\unit;
use App\Models\target;
use App\Models\financial_year;
use App\Models\turnover_target;
use App\Models\collection_target;
use DB;
use Illuminate\Http\Request;

class SalesorderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    ################# Sales ###########################
    public function salesorder()
    {        
        return view('salesorder.create',['division'=>$division]);
    }
    public function salesorderlist()
    {
        return view('salesorder.salesorderlist');
    }
    public function sales_edit($companyname,$region,$financialyear)
    {  
       $sales = DB::table('sales')
            ->join('target', 'sales.id', '=', 'target.sale_id')
            ->select('sales.*', 'target.*')
            ->where('sales.Company_name','=',$companyname)->where('sales.region','=',$region)->where('sales.financial_year','=',$financialyear)
            ->get();
            
        return view('salesorder.sales_edit', ['sales' => $sales,'companyname' => $companyname,'financialyear'=>$financialyear,'region'=>$region]);
        
    }
    public function sales_view($companyname,$region,$financialyear)
    {
       $sales = DB::table('sales')
            ->join('target', 'sales.id', '=', 'target.sale_id')
            ->select('sales.*', 'target.*')
            ->where('sales.Company_name','=',$companyname)->where('sales.region','=',$region)->where('sales.financial_year','=',$financialyear)
            ->get();
        return view('salesorder.sales_view', ['sales' => $sales,'companyname' => $companyname,'financialyear'=>$financialyear,'region'=>$region]);
    }
    public function salesupdate()
    {  
        echo 'hai';
    }
    // public function store(Request $request)
    // {   
    //     $sale = new Sale();
    //     $sale->Company_name = $request->input('company_name');
    //     $sale->unit = $request->input('unit');
    //     $sale->division = $request->input('division');
    //     $sale->financial_year = $request->input('financial_year');
    //     $sale->actual = $request->input('actual');

    //     $sale->region=$request->region;
    //     if($sale->save()){
    //         foreach($request->month as $key=>$val){
    //             $target = new target();
    //             $target->sale_id = $sale->id;
    //             $target->month = $request->month[$key];
    //             $target->amount = $request->amount[$key];
    //             $target->save();
    //             }
    //     } 
    //     return back();
    // }
    //Saleorder store
    public function store(Request $request)
    {   
        $sale = new Sale();
        $sale->Company_name = $request->input('company_name');
        $sale->unit = $request->input('unit');
        $sale->financial_year = $request->input('financial_year');
        if($sale->save()){
            foreach($request->apr_target as $key=>$val){
                $target = new target();
                $target->sale_id = $sale->id;
                $target->apr_target = $request->apr_target[$key];
                $target->may_target = $request->may_target[$key];
                $target->june_target = $request->june_target[$key];
                $target->july_target = $request->july_target[$key];
                $target->aug_target = $request->aug_target[$key];
                $target->sept_target = $request->sept_target[$key];
                $target->oct_target = $request->oct_target[$key];
                $target->nov_target = $request->nov_target[$key];
                $target->dec_target = $request->dec_target[$key];
                $target->jan_target = $request->jan_target[$key];
                $target->feb_target = $request->feb_target[$key];
                $target->march_target = $request->march_target[$key];
                $target->save();
                }
        } 
        
    }

    public function saleslist(){
        return view('salesorder.salesorderlist');
    }
    
    public function searchsales(Request $request){
         if($request->sales !=''){
             $users = DB::table('sales')
             ->join('target', 'sales.id', '=', 'target.sale_id')
             ->select('sales.*', 'target.*')
             ->where('sales.division', $request->sales)
             ->get();
             return view('salesturnover',['users'=>$users]);
             
         }
    }
    ################# Sales ###########################
    
}