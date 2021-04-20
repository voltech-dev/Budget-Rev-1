<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use App\Models\Turnover;
use App\Models\Collection;
use App\Models\company;
use App\Models\division;
use App\Models\unit;
use Illuminate\Http\Request;

class SalesorderController extends Controller
{
  public function __construct(){
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
        return view('salesorder.sales_edit', [
            'sale' => Sale::find($id),
            
        ]);
    }
    public function sales_view($p){
    
        return view('salesorder.sales_view',[
            'sale'=>Sale::where(['Company_name'=>$p])->first(),
          
           
        ]);
      
    }
    public function salesupdate(Request $request, $id)
    {
        $sales = Sale::findorfail($id);
        $sales->Company_name = $request->input('company_name');
        $sales->division = $request->input('division');
        $sales->unit = $request->input('unit');
        $sales->financial_year = $request->input('financial_year');
        $sales->target_q1=$request->q1;
        $sales->target_q2=$request->q2;
        $sales->target_q3=$request->q3;
        $sales->target_q4=$request->q4;
        $sales->actual_q1=$request->aq1;
        $sales->actual_q2=$request->aq2;
        $sales->actual_q3=$request->aq3;
        $sales->actual_q4=$request->aq4;
        $sales->save();
        return redirect('/salesorderlist');
        
    }
    public function store(Request $request)
    {
        $sale=new Sale();
        $sale->Company_name=$request->input('company_name');
        $sale->unit=$request->input('unit');
        $sale->division=$request->input('division');
        $sale->financial_year=$request->input('financial_year');
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
    public function turnoverlist(){
        return view('turnover.turnoverlist');
    }
    public function turn_edit($id)
    {
        return view('turnover.turnover_edit', [
            'turn' => Turnover::find($id),
            
        ]);
    }
    public function turn_view($p){
    
        return view('turnover.turnover_view',[
            'turn'=>Turnover::where(['Company_name'=>$p])->first(),
          
           
        ]);
      
    }
    public function turnupdate(Request $request, $id)
    {
        $turn = Turnover::findorfail($id);
        $turn->Company_name = $request->input('company_name');
        $turn->division = $request->input('division');
        $turn->unit = $request->input('unit');
        $turn->financial_year = $request->input('financial_year');
        $turn->target_q1=$request->q1;
        $turn->target_q2=$request->q2;
        $turn->target_q3=$request->q3;
        $turn->target_q4=$request->q4;
        $turn->actual_q1=$request->aq1;
        $turn->actual_q2=$request->aq2;
        $turn->actual_q3=$request->aq3;
        $turn->actual_q4=$request->aq4;
        $turn->save();
        return redirect('/turnoverlist');
    }
    public function turnover_store(Request $request)
    {
        $turn=new Turnover();
        $turn->Company_name=$request->input('company_name');
        $turn->unit=$request->input('unit');
        $turn->division=$request->division;
        $turn->financial_year=$request->input('financial_year');
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
    public function collectionlist(){
        return view('collection.collectionlist');
    }
    public function collection_edit($id)
    {
        return view('collection.collection_edit', [
            'collect' => Collection::find($id),
            
        ]);
    }
    public function collection_view($p){
    
        return view('collection.collection_view',[
            'collect'=>Collection::where(['Company_name'=>$p])->first(),
          
           
        ]);
      
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
    public function collectionupdate(Request $request, $id)
    {
        $collection = Collection::findorfail($id);
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
        return redirect('/collectionlist');
        
    }
    public function companylist(){
        return view('company.companylist');
    }
    public function companycreate(){
        return view('company.companycreate');
    }
    public function company(Request $request){
        $company=new company();
        $company->company_code=$request->code;
        $company->company_name=$request->company_name;
        $company->contact=$request->contact;
        $company->company_status=$request->status;
        $company->address=$request->address;
        $company->save();
        return redirect('/companylist');
    }
    public function company_edit($id)
    {
        return view('company.company_edit', [
            'comp' => company::find($id),
            
        ]);
    }
    public function companyupdate(Request $request, $id)
    {
        $company = company::findorfail($id);
        $company->company_code=$request->code;
        $company->company_name=$request->company_name;
        $company->contact=$request->contact;
        $company->company_status=$request->status;
        $company->address=$request->address;
        $company->save();
        return redirect('/companylist');
        
    }
    public function company_view($p){
    
        return view('company.companyview',[
            'comp'=>company::where(['company_code'=>$p])->first(), 
        ]);
    }
    public function division_edit($id)
    {
        return view('division.divisionedit', [
            'div' => division::find($id),
            
        ]);
    }
    public function division_view($p){
    
        return view('division.divisionview',[
            'div'=>division::where(['division_name'=>$p])->first(), 
        ]);
    }
    public function division(){
        return view('division.division');
    }
    public function division_store(Request $request){
        $division=new division();
        $division->division_name=$request->division;
        $division->company_id=$request->input('company_name');
        $division->save();
        return redirect('/division');

    }
    public function viewdivision(){
        return view('company.viewdivision');
    }
    public function divisionlist(){
        return view('company.divisionlist');
    }
    public function unit(){
        return view('unit.unit');
    } 
    public function unitstore(Request $request){
        $unit=new unit();
        $unit->company_name=$request->company_name;
        $unit->division_name=$request->division;
        $unit->unit=$request->unit;
        $unit->save();
        return redirect('/division');
    }
    public function divisiondetails(Request $request){
        $post=$request->all();
        $json = array();
        $division = division::where(['company_id' => $post['company_name']])->get();
        foreach($division as $div){
           
            $json[$div->division_name] =$div->division_name;      
        }  
        echo json_encode($json);     
       
    }
}