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
    public function salesorder()
    {
        return view('salesorder.create');
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
    public function store(Request $request)
    {   
        $sale = new Sale();
        $sale->Company_name = $request->input('company_name');
        $sale->unit = $request->input('unit');
        $sale->division = $request->input('division');
        $sale->financial_year = $request->input('financial_year');
        $sale->actual = $request->input('actual');

        $sale->region=$request->region;
        if($sale->save()){
            foreach($request->month as $key=>$val){
                $target = new target();
                $target->sale_id = $sale->id;
                $target->month = $request->month[$key];
                $target->amount = $request->amount[$key];
                $target->save();
                }
        } 
        return back();
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

    public function division_view($p)
    {
        return view('division.divisionview', [
            'div' => division::where(['division_name' => $p])->first(),
        ]);
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
    
    public function salesturnover(){

$users = DB::table('sales')
            ->join('target', 'sales.id', '=', 'target.sale_id')
            ->select('sales.*', 'target.*')
            ->groupBy('sales.financial_year','sales.region','sales.Company_name')
            ->get();
        return view('salesturnover',['users'=>$users]);
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