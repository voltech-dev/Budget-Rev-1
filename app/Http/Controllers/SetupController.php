<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\division;
use App\Models\unit;
use App\Models\target;
use App\Models\financial_year;
use DB;
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
        #$division->unit_id=$request->unit;
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
        return view('unit.unitlist',['unit'=>$unit]);
      
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
    public function fystore(Request $request){
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