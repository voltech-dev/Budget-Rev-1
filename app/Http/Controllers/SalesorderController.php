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
        $target=target::all();
        $financialyear=financial_year::all();
        $sales=Sale::findorfail($id);                
        return view('salesorder.sales_edit',['unit'=>$unit,'company'=>$company,'sales'=>$sales,'financialyear'=>$financialyear,'target'=>$target]);       
    }
   
    public function sales_view($id,$unit)
    
{
                $company=company::all();
                $unit=unit::all();
                $target=target::all();
                $financialyear=financial_year::all();
                $sales=Sale::findorfail($id);                
                return view('salesorder.sales_view',['unit'=>$unit,'company'=>$company,'sales'=>$sales,'financialyear'=>$financialyear,'target'=>$target]);
}  
    public function salesupdate()
    {  
        echo 'hai';
    }
    public function store(Request $request)
    {   
        $sale = new Sale();
        $sale->Company_name = $request->input('company_name');
        $sale->unit_id = $request->input('unit');
        $sale->financial_year = $request->input('financial_year');
        $sale->total_target=$request->total_target;
        if($sale->save()){
            foreach($request->apr_target as $key=>$val){
                $target = new target();
                $target->sale_id = $sale->id;
                $target->division=$request->div[$key];
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
    
    
    public function turnover()
    {
        return view('turnover.turnover');
    }
    public function turnoverlist()
    {
        $users = DB::table('turnover')
        ->join('turnover_target', 'turnover.id', '=', 'turnover_target.turn_id')
        ->select('turnover.*', 'turnover_target.*')
        ->get();
    return view('turnover.turnoverlist',['users'=>$users]);
}

public function turnover_store(Request $request)
{   
    $turn = new Turnover();
        $turn->Company_name = $request->input('company_name');
        $turn->unit = $request->input('unit');
        $turn->division = $request->input('division');
        $turn->financial_year = $request->input('financial_year');
        $turn->region=$request->region;
        if($turn->save()){
            foreach($request->month as $key=>$val){
                $target = new turnover_target();
                $target->turn_id = $turn->id;
                $target->month = $request->month[$key];
                $target->amount = $request->amount[$key];
                $target->save();
                }
        } 
        return view('turnover.turnoverlist');   
    }
  
public function turn_edit($id)
    {
        $target=turnover_target::findorfail($id);
        $turn=Turnover::where(['id'=>$target->turn_id])->first();
        return view('turnover.turnover_edit',['target'=>$target, 'turn'=>$turn]);
    }
    public function turn_view($id)
    {
        $target=turnover_target::findorfail($id);
        return view('turnover.turnover_view', [
            'turn' => Turnover::where(['id' =>$target->turn_id])->first(),'target'=>$target
        ]);
    }
   
    public function turnupdate(Request $request, $id)
    {
        $target = turnover_target::findorfail($id);
        $target->month=$request->month;
        $target->amount=$request->amount;
        $target->save();
        return redirect('/turnoverlist');
    }
    public function collection()
    {
        return view('collection.collection');
    }
    public function collectionlist()
    {
        $users = DB::table('collection')
        ->join('collection_target', 'collection.id', '=', 'collection_target.collection_id')
        ->select('collection.*', 'collection_target.*')
        ->get();
    return view('collection.collectionlist',['users'=>$users]);
}
public function collection_edit($id)
    {
        $target=collection_target::findorfail($id);
        $collection=Collection::where(['id'=>$target->collection_id])->first();
        return view('collection.collection_edit',['target'=>$target, 'collection'=>$collection]);
    }
    public function collection_view($id)
    {
        $target=collection_target::findorfail($id);
        return view('collection.collection_view', [
            'collection' => Collection::where(['id' =>$target->collection_id])->first(),'target'=>$target
        ]);
    }
    public function collectionupdate(Request $request, $id)
    {
        $target = collection_target::findorfail($id);
        $target->month=$request->month;
        $target->amount=$request->amount;
        $target->save();
        return redirect('/collectionlist');
    }
  
    public function collection_store(Request $request)
    {   
        $collection = new Collection();
            $collection->Company_name = $request->input('company_name');
            $collection->unit = $request->input('unit');
            $collection->division = $request->input('division');
            $collection->financial_year = $request->input('financial_year');
            $collection->region=$request->region;
            if($collection->save()){
                foreach($request->month as $key=>$val){
                    $target = new collection_target();
                    $target->collection_id = $collection->id;
                    $target->month = $request->month[$key];
                    $target->amount = $request->amount[$key];
                    $target->save();
                    }
            } 
            return view('turnover.turnoverlist');
      
       
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
        return redirect('/division');
    }
    public function viewdivision()
    {
        return view('company.viewdivision');
    }
    public function divisionlist()
    {
        return view('division.divisionlist');
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
    ################# Sales ###########################
    
}