<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Turnover;
use App\Models\Collection;
use App\Models\company;
use App\Models\division;
use App\Models\unit;
use App\Models\sub_sales;
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
    public function salesorder()
    {
        return view('salesorder.create');
    }
    public function salesorderlist(){
        $sales = DB::table('sales')
                    ->join('company','sales.Company_name', '=', 'company.id')
                    ->join('unit','sales.unit_id','=','unit.id')
                    ->select('company.*', 'unit.*','sales.*')
                    ->get();
                   
                return view('salesorder.salesorderlist',['sales'=>$sales]);
    }
    public function sales_edit($id,$unit)
    {  
        $company=company::all();
        $unit=unit::all();
        $target=sub_sales::all();
        $financialyear=financial_year::all();
        $sales=Sale::findorfail($id);                
        return view('salesorder.sales_edit',['unit'=>$unit,'company'=>$company,'sales'=>$sales,'financialyear'=>$financialyear,'target'=>$target]);       
    }
   
    public function sales_view($id,$unit)
    {
                $company=company::all();
                $unit=unit::all();
                $target=sub_sales::all();
                $financialyear=financial_year::all();
                $sales=Sale::findorfail($id);                
                return view('salesorder.sales_view',['unit'=>$unit,'company'=>$company,'sales'=>$sales,'financialyear'=>$financialyear,'target'=>$target]);
    }  
    public function salesupdate(Request $request,$id)
    {  
        $sales=Sale::findorfail($id);
        $target=sub_sales::where(['sale_id'=>$sales->id])->first();
        foreach($request->may_actual as $key=>$val){
            $target->may_actual=$request->may_actual;
            $target->save();
        }
    }
    public function store(Request $request)
    {   
       # echo "hi";exit;
       #echo "<pre>";print_r($request);echo "</pre>";exit;
        $sale = new Sale();
        $sale->Company_name = $request->company_name;
        $sale->unit_id = $request->unit;
        $sale->financial_year_id = $request->financial_year;
        $sale->total_target=$request->total_target;
        $sale->aprtarget_total=$request->aprtarget_total;
        $sale->maytarget_total=$request->maytarget_total;
        $sale->juntarget_total=$request->juntarget_total;
        $sale->jultarget_total=$request->jultarget_total;
        $sale->augtarget_total=$request->augarget_total; 
        $sale->septarget_total=$request->separget_total;
        $sale->octtarget_total=$request->octtarget_total;
        $sale->novtarget_total=$request->novtarget_total;
        $sale->dectarget_total=$request->dectarget_total;
        $sale->jantarget_total=$request->jantarget_total;
        $sale->febtarget_total=$request->febtarget_total;
        $sale->martarget_total=$request->martarget_total;
        $sale->target_total=$request->divtarget_total;
        $sale->actual_total=$request->divactual_total;

        if($sale->save()){
            foreach($request->apr_target as $key=>$val){
                $target = new sales_sub();
                $target->sale_id = $sale->id;
                $target->division=$request->div[$key];
                $target->apr_target = $request->apr_target[$key];
                $target->may_target = $request->may_target[$key];
                $target->jun_target = $request->jun_target[$key];
                $target->jul_target = $request->jul_target[$key];
                $target->aug_target = $request->aug_target[$key];
                $target->sep_target = $request->sep_target[$key];
                $target->oct_target = $request->oct_target[$key];
                $target->nov_target = $request->nov_target[$key];
                $target->dec_target = $request->dec_target[$key];
                $target->jan_target = $request->jan_target[$key];
                $target->feb_target = $request->feb_target[$key];
                $target->mar_target = $request->mar_target[$key];
                $target->total_target=$request->divtarget_total[$key];
                $target->save();
                }
        } 
        
    }

    public function saleslist(){
        return view('salesorder.salesorderlist');
    }
    
    
    
    public function divisiondetails(Request $request)
    {
        $post = $request->all();
        $json = array();
        $division = unit::where(['company_id' => $post['company_name']])->get();
        foreach ($division as $div) {
            $json[$div->id] = $div->unit;
        }
        
        echo json_encode($json);
    }
    public function fetchdivision(Request $request)
    {
        $post = $request->all();
        $json = array();
        $div = division::where(['unit_id' => $post['unit']])->get();
        foreach ($div as $d) {
            $json[$d->id] = $d->division_name;
        }
        
        echo json_encode($json);
    }
    // public function saleslist(){

    //    return view('salesorder.salesorderlist');
    // }
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
    
}