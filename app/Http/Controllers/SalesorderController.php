<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Turnover;
use App\Models\Collection;
use App\Models\company;
use App\Models\division;
use App\Models\unit;
use App\Models\sales_sub;
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
        return view('salesorder.sales_entry');
    }
    public function salesorderlist(){
       
                    $sales=Sale::all();  
                return view('salesorder.salesorderlist',['sales'=>$sales]);
            }
    public function sales_view($id,$unit)
{
    $company=company::all();
    $unit=unit::all();
    $sales=Sale::findorfail($id);     
    $sales_sub=sales_sub::where(['sale_id'=>$sales->id])->get();
    $financialyear=financial_year::where(['id'=>$sales->financial_year_id])->first();
    return view('salesorder.sales_view',['unit'=>$unit,'company'=>$company,'sales'=>$sales,'financialyear'=>$financialyear,'sales_sub'=>$sales_sub]);       
}  
public function sales_edit($id,$unit)
    {  
    $company=company::all();
    $unit=unit::all();
    $sales=Sale::findorfail($id);     


    $sales_sub=sales_sub::where(['sale_id'=>$sales->id])->get();
    $financialyear=financial_year::where(['id'=>$sales->financial_year_id])->first();
    return view('salesorder.sales_edit',['unit'=>$unit,'company'=>$company,'sales'=>$sales,'financialyear'=>$financialyear,'sales_sub'=>$sales_sub]);      
    }
    public function salesupdate(Request $request,$id)
    {  

        foreach($request->id as $sub=>$val){
            
            
            $target=sales_sub::where(['id'=>$val])->first();
            if(isset($request->apr_actual[$sub])){
                $target->apr_actual= $request->apr_actual[$sub];
            }

            if(isset($request->may_actual[$sub])){
                $target->may_actual=$request->may_actual[$sub];
            }
           

            if(isset($request->jun_actual[$sub])){
                $target->jun_actual=$request->jun_actual[$sub];
            }
            

            if(isset($request->jul_actual[$sub])){
                $target->jul_actual=$request->jul_actual[$sub];
            }
            

            if(isset($request->aug_actual[$sub])){
                $target->aug_actual=$request->aug_actual[$sub];
            }
            

            if(isset($request->sep_actual[$sub])){
                $target->sep_actual=$request->sep_actual[$sub];
            }
            if(isset($request->oct_actual[$sub])){
            $target->oct_actual=$request->oct_actual[$sub];
            }
            if(isset($request->nov_actual[$sub])){
            $target->nov_actual=$request->nov_actual[$sub];
            }
            if(isset($request->dec_actual[$sub])){
            $target->dec_actual=$request->dec_actual[$sub];
            }
            if(isset($request->jan_actual[$sub])){
            $target->jan_actual=$request->jan_actual[$sub];
            }
            if(isset($request->feb_actual[$sub])){
            $target->feb_actual=$request->feb_actual[$sub];
            }
            if(isset($request->mar_actual[$sub])){
            $target->mar_actual=$request->mar_actual[$sub];
            }
            if(isset($request->actualcol_total[$sub])){
            $target->actual_total=$request->actualcol_total[$sub];
            }
            // exit();
            $target->save();
        
             }  
        $sales=Sale::where(['id'=>$request->saleid])->first();   
        echo $sales;
        $sales->apractual_total=$request->apractualrow_total;
        $sales->mayactual_total=$request->mayactualrow_total;
        $sales->junactual_total=$request->junactualrow_total;
        $sales->julactual_total=$request->julactualrow_total;
        $sales->augactual_total=$request->augactualrow_total;
        $sales->sepactual_total=$request->sepactualrow_total;
        $sales->octactual_total=$request->octactualrow_total;
        $sales->novactual_total=$request->novactualrow_total;
        $sales->decactual_total=$request->decactualrow_total;
        $sales->janactual_total=$request->janactualrow_total;
        $sales->febactual_total=$request->febactualrow_total;
        $sales->maractual_total=$request->maractualrow_total;
        $sales->actual_total=$request->finalactual;
        $sales->granttotal_actual=$request->granttotal_actual;
        $sales->save();
        return redirect('/salesorderlist');  
}
public function store(Request $request)
{   
    $sale = new Sale();
    $sale->company_id = $request->company_name;
    $sale->unit_id = $request->unit;
    $str=$request->financial_year;
    $array=explode('-',$str,3);
    $test = $array[2];
    $sale->financial_year_id = $test;
    $sale->aprtarget_total=$request->aprtargetrow_total;
    $sale->maytarget_total=$request->maytargetrow_total;
    $sale->juntarget_total=$request->juntargetrow_total;
    $sale->jultarget_total=$request->jultargetrow_total;
    $sale->augtarget_total=$request->augtargetrow_total; 
    $sale->septarget_total=$request->septargetrow_total;
    $sale->octtarget_total=$request->octtargetrow_total;
    $sale->novtarget_total=$request->novtargetrow_total;
    $sale->dectarget_total=$request->dectargetrow_total;
    $sale->jantarget_total=$request->jantargetrow_total;
    $sale->febtarget_total=$request->febtargetrow_total;
    $sale->martarget_total=$request->martargetrow_total;
    $sale->target_total=$request->target_total;
    $sale->granttotal_target=$request->granttotal_target;
    $totalrow   =   $request->totalrow;
    #echo $totalrow;
    #exit; 
    if($sale->save()){  
            
        for($i=0;$i<$totalrow;$i++){
               
                $sales_sub = new sales_sub();
                $sales_sub->sale_id = $sale->id;
                $sales_sub->division_id=$request->div[$i];                   
                $sales_sub->apr_target = $request->apr_target[$i];
                $sales_sub->may_target = $request->may_target[$i];
                $sales_sub->jun_target = $request->jun_target[$i];
                $sales_sub->jul_target = $request->jul_target[$i];
                $sales_sub->aug_target = $request->aug_target[$i];
                $sales_sub->sep_target = $request->sep_target[$i];
                $sales_sub->oct_target = $request->oct_target[$i];
                $sales_sub->nov_target = $request->nov_target[$i];
                $sales_sub->dec_target = $request->dec_target[$i];
                $sales_sub->jan_target = $request->jan_target[$i];
                $sales_sub->feb_target = $request->feb_target[$i];
                $sales_sub->mar_target = $request->mar_target[$i];
                $sales_sub->target_total = $request->targetcol_total[$i];
     
                $sales_sub->save();
            }
            return redirect('/salesorderlist');
    } 
}
    public function saleslist(){
        return view('salesorder.salesorderlist');
    }
   
    
    public function companylist()
    {
        return view('company.companylist');
    }
    public function companycreate()
    {
        return view('company.companycreate');
    }
    public function company(Request $request)
    {
        $company = new company();
        $company->company_name = $request->company_name;
       
        $company->save();
        return redirect('/companylist');
    }
    public function company_edit($id)
    {
        return view('company.company_edit',[
            'comp' => company::find($id),
        ]);
    }
    public function companyupdate(Request $request, $id)
    {
        $company = company::findorfail($id);
        $company->company_code = $request->code;
        $company->company_name = $request->company_name;
        $company->contact = $request->contact;
        $company->company_status = $request->status;
        $company->address = $request->address;
        $company->save();
        return redirect('/companylist');
    }
    public function company_view($p)
    {

        return view('company.companyview', [
            'comp' => company::where(['company_name' => $p])->first(),
        ]);
    }
   
    public function division_edit($id,$division)
    {
                    $company=company::all();
                    $unit=unit::all();
                    $division=division::findorfail($id);                
                    return view('division.divisionedit',['unit'=>$unit,'company'=>$company,'division'=>$division]);
}  
public function divisionupdate(Request $request,$id){
      
    $division = division::where('id','=',$id)->first(); //   where(['id'=>$id]) this is best 
   $division->company_id =  $request->company_name;
   $division->unit_id = $request->unit;
   $division->division_name=$request->division;
   $division->save();
   return redirect('/divisionlist');
}
public function division_view($id,$division)
{
                $company=company::all();
                $unit=unit::all();
                $division=division::findorfail($id);                
                return view('division.divisionview',['unit'=>$unit,'company'=>$company,'division'=>$division]);
}  
    public function division()
    {
        return view('division.division');
    }
   
    public function division_store(Request $request)
    {
        $division = new division();
        $division->division_name = $request->division;
        $division->company_id = $request->input('company_name');
        $division->unit_id=$request->unit;
        $division->save();
        return redirect('/divisionlist');
    }
    public function viewdivision()
    {
        return view('company.viewdivision');
    }
    public function divisionlist()
    {
        $division = DB::table('company')
                    ->join('division', 'company.id', '=', 'division.company_id')
                    ->select('company.*', 'division.*')
                    ->get();
                   
                return view('division.divisionlist',['division'=>$division]);
            
    }
    public function unit()
    {
        return view('unit.unit');
    }
    public function unit_edit($id,$unit)
    {
            $company=company::all();
            $unit=unit::findorfail($id);
            return view('unit.unitedit',['unit'=>$unit,'company'=>$company]);
    }  
    public function unit_view($id,$unit)
    {
            $company=company::all();
            $unit=unit::findorfail($id);
            return view('unit.unitview',['unit'=>$unit,'company'=>$company]);
    }  
    public function unitupdate(Request $request,$id){
      
        $unit = unit::where('id','=',$id)->first(); //   where(['id'=>$id]) this is best 
       $unit->company_id =  $request->company_name;
       $unit->unit = $request->unit;
       $unit->save();
       return redirect('/unitlist');
    }

    public function unitlist(){
        $unit = DB::table('company')
                    ->join('unit', 'company.id', '=', 'unit.company_id')
                    ->select('company.*', 'unit.*')
                    ->get();
                   
                return view('unit.unitlist',['unit'=>$unit]);
            }
    
 
    public function unitstore(Request $request)
    {
        $unit = new unit();
        $unit->company_id = $request->company_name;
        $unit->unit = $request->unit;
        $unit->save();
        
    }

    //Userlist
    public function userlist(){
        return view('user.userlist');
    }
    public function usercreate(){
        return view('user.usercreate');
    }
    //Fylist
    public function fylist(){
        return view('financial_year.fylist');
    }
    public function fycreate(){
        return view('financial_year.fycreate');
    }
    public function fystore(Request $request){
        $financialyear=new financial_year;
        $financialyear->financial_year=$request->fy;
        $financialyear->save();
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
        $json['countrow'] = count($div);
        
        echo json_encode($json);
        exit();
        
    }
    public function checkfinancial_year(Request $request){
        $post = $request->all();
        $sale = Sale::where(['unit_id' => $post['unit_id'],'financial_year_id'=>$post['fin_year']])->first();
        
		
     if($sale){
         return 'found';
     }
     else{
         return 'not found';
     }
       
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
    public function searchturnover(Request $request){
        if($request->turn !=''){
            $users = DB::table('turnover')
        ->join('turnover_target', 'turnover.id', '=', 'turnover_target.turn_id')
        ->select('turnover.*', 'turnover_target.*')
        ->where('turnover.division', $request->turn)
        ->get();
    return view('turnover.turnoverlist',['users'=>$users]);
            
        }
    }
    public function searchcollection(Request $request){
        $users = DB::table('collection')
        ->join('collection_target', 'collection.id', '=', 'collection_target.collection_id')
        ->select('collection.*', 'collection_target.*')
        ->where('collection.division', $request->collection)
        ->get();
    return view('collection.collectionlist',['users'=>$users]);
            
        }
    }