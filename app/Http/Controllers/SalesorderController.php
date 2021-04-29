<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Turnover;
use App\Models\Collection;
use App\Models\company;
use App\Models\division;
use App\Models\unit;
use App\Models\target;
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
    public function sales_edit($id)
    {
        $target=target::findorfail($id);
        $sale=Sale::where(['id'=>$target->sale_id])->first();
        return view('salesorder.sales_edit',['target'=>$target, 'sale'=>$sale]);
    }
    public function sales_view($id)
    {
        $target=target::findorfail($id);
        return view('salesorder.sales_view', [
            'sale' => Sale::where(['id' =>$target->sale_id])->first(),'target'=>$target
        ]);
    }
    public function salesupdate(Request $request, $id)
    {
        $target = target::findorfail($id);
        $target->month=$request->month;
        $target->amount=$request->amount;
        $target->save();
        return redirect('/salesturnover');
    }
    public function store(Request $request)
    {   
        $sale = new Sale();
        $sale->Company_name = $request->input('company_name');
        $sale->unit = $request->input('unit');
        $sale->division = $request->input('division');
        $sale->financial_year = $request->input('financial_year');
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
        $company->company_code = $request->code;
        $company->company_name = $request->company_name;
        $company->contact = $request->contact;
        $company->company_status = $request->status;
        $company->address = $request->address;
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
            'comp' => company::where(['company_code' => $p])->first(),
        ]);
    }
    public function division_edit($id)
    {
        return view('division.divisionedit', [
            'div' => division::find($id),

        ]);
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
        $division->save();
        return redirect('/division');
    }
    public function viewdivision()
    {
        return view('company.viewdivision');
    }
    public function divisionlist()
    {
        return view('company.divisionlist');
    }
    public function unit()
    {
        return view('unit.unit');
    }
    public function unitstore(Request $request)
    {
        $unit = new unit();
        $unit->company_name = $request->company_name;
        $unit->division_name = $request->division;
        $unit->unit = $request->unit;
        $unit->save();
        return redirect('/division');
    }
    public function divisiondetails(Request $request)
    {
        $post = $request->all();
        $json = array();
        $division = division::where(['company_id' => $post['company_name']])->get();
        foreach ($division as $div) {

            $json[$div->division_name] = $div->division_name;
        }
        echo json_encode($json);
    }
    public function salesturnover(){

$users = DB::table('sales')
            ->join('target', 'sales.id', '=', 'target.sale_id')
            ->select('sales.*', 'target.*')
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
   
