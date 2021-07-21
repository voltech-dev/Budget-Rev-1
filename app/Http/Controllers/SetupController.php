<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\division;
use App\Models\unit;
use App\Models\target;
use App\Models\financial_year;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    ######### Company #####################
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
        $request->validate([
            'company_name' => "required|unique:company,company_name"
        ]);
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
        
        $request->validate([
            'company_name' => "required|unique:company,company_name,$id"
        ]);
       
        $company = company::findorfail($id);
        $company->company_name = $request->company_name;
        $company->save();
        return redirect('/companylist');
    }
    public function company_destroy($id) {
        DB::delete('delete from company where id = ?',[$id]);
        return redirect('/companylist');
     }
    public function company_view($p)
    {
        return view('company.companyview', [
            'comp' => company::where(['company_name' => $p])->first(),
        ]);
    }
   ######### Company #####################

   ######### Division #####################
    public function division_edit($id,$division)
    {
                    $company=company::all();
                    $unit=unit::all();
                    $division=division::findorfail($id);                
                    return view('division.divisionedit',['unit'=>$unit,'company'=>$company,'division'=>$division]);
    }  
    public function divisionupdate(Request $request,$id){
        $request->validate([
            'company_name' => 'required',
            'unit'=> 'required',
            'division' => "required|unique:division,division_name,$id"
        ],[
            'company_name.required' => '* Company field cannot be empty.',
            'unit.required' => '* Unit field cannot be empty.',
            'division.required' => '* Division field cannot be empty.',
        ]);
    $division = division::findorfail($id); //   where(['id'=>$id]) this is best 
    $division->company_id =  $request->company_name;
    $division->unit_id = $request->unit;
    $division->division_name=$request->division;
    $division->save();
    return redirect('/divisionlist');
    }
    public function division_destroy($id) {
        DB::delete('delete from division where id = ?',[$id]);
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
        $request->validate([
            'company_name' => 'required',
            'unit'=> 'required',
            'division' => "required|unique:br_division,division_name"
        ],[
            'company_name.required' => '* Company field cannot be empty.',
            'unit.required' => '* Unit field cannot be empty.',
            'division.required' => '* Division field cannot be empty.',
        ]);
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

        $division = division::all();   
        return view('division.divisionlist',['division'=>$division]);
    
       
    }

    ######### Division #####################

    ######### Unit #####################
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
    public function unit_destroy($id) {
        DB::delete('delete from unit where id = ?',[$id]);
        return redirect('/unitlist');
     }
    public function unit_view($id,$unit)
    {
            $company=company::all();
            $unit=unit::findorfail($id);
            return view('unit.unitview',['unit'=>$unit,'company'=>$company]);
    }  
    public function unitupdate(Request $request,$id){
        $request->validate([
            'company_name' => 'required',
            'unit' => "required|unique:br_unit,unit,$id"
        ],[
            'company_name.required' =>'* Company field cannot be empty.',
            'unit.required' => '* Unit field cannot be empty',
        ]);
        $unit = unit::where('id','=',$id)->first(); //   where(['id'=>$id]) this is best 
       $unit->company_id =  $request->company_name;
       $unit->unit = $request->unit;
       $unit->save();
       return redirect('/unitlist');
    }
    public function unitlist(){
        $unit = unit::all();   
        return view('unit.unitlist',['unit'=>$unit]);
    }
    public function unitstore(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'unit' => "required|unique:br_unit,unit"
        ],[
            'company_name.required' =>'* Company field cannot be empty.',
            'unit.required' => '* Unit field cannot be empty',
        ]);
        $unit = new unit();
        $unit->company_id = $request->company_name;
        $unit->unit = $request->unit;
        $unit->save();
        return redirect('/unitlist');      
    }
    //Userlist
    public function userlist(){
        return view('user.userlist');
    }
    public function usercreate(){
        return view('user.usercreate');
    }
    ######### Unit #####################

    ######### FY #####################
    //Fylist
    public function fylist(){
        $financialyear=new financial_year();
        #echo "<pre>";print_r($financialyear);echo "</pre>";
        #exit;
        return view('financial_year.fylist',['financialyear'=> $financialyear]);
    }
    public function fycreate(){
        return view('financial_year.fycreate');
    }
    public function finyear_destroy($id) {
        DB::delete('delete from financial_year where id = ?',[$id]);
        return redirect('/fylist');
     }
     public function finyear_edit($id)
     {
         return view('financial_year.fyedit',[
             'finyear' => financial_year::find($id),
         ]);
     }
     public function finyear_update(Request $request, $id)
    {
        $request->validate([
            'fy' => "required|unique:financial_year,financial_year,$id"
        ]);
        $finyear = financial_year::findorfail($id);
        $finyear->financial_year = $request->financial_year;
        $finyear->save();
        return redirect('/fylist');
    }
    public function fystore(Request $request){
        $request->validate([
            'fy' => "required|unique:br_financial_year,financial_year"
        ]);
        $financialyear=new financial_year();
        $financialyear->financial_year=$request->fy;
        $financialyear->save();
        return view('financial_year.fylist',['financialyear'=> $financialyear]);
    }
    ######### FY #####################

    ######### Other functions #####################
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
    ######### Other functions #####################

}