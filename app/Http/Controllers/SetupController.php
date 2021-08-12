<?php

namespace App\Http\Controllers;
use App\Models\Userrights;
use App\Models\company;
use App\Models\division;
use App\Models\unit;
use App\Models\target;
use App\Models\financial_year;
use App\Models\User;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
      echo "hi";
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
        $unit = unit::where(['company_id' => $post['company_name']])->get();
        echo ' <option >----Select Unit----</option>';
        foreach ($unit as $un) {
            echo ' <option value="'.$un->id.'">'. $un->unit.'</option>';
        }
        ;
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
    public function user_division(Request $request){
        $post = $request->all();
        $division = division::where(['unit_id' => $post['user_unit']])->get();
       echo ' <option >----Select Division----</option>';
        foreach($division as $div){
           
            echo ' <option value="'.$div->id.'">'. $div->division_name.'</option>';
        }
       
    }
    public function user_store(Request $request){
        $request->validate([
            'company_name' => 'required',
            'unit' => "required",
            'email'=>"required|unique:users,email",
            'ecode'=>"required|unique:users,ecode",
            'password'=>"required",
            'contact'=>"required|unique:users,contact",
            'designation'=>"required|unique:users,designation",
            'name'=>"required",
        ],[
            'company_name.required' =>'* Company field cannot be empty.',
            'unit.required' => '* Unit cannot be empty',
            'email.required' =>'* Email id cannot be empty.',
            'ecode.required' => '* Ecode cannot be empty',
            'password.required' =>'* Password cannot be empty.',
            'contact.required' => '* Contact cannot be empty',
            'designation.required' =>'* Designation field cannot be empty.',
            'name.required' => '* Name field cannot be empty',
        ]);
        $post = $request->all();
        $user = new User();
        echo  $request->name;
        $user->password = Hash::make($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->company_id = $request->company_name;
        $user->division_id = $request->division;
        $user->unit_id = $request->unit;
        $user->role = $request->role;
        $user->ecode = $request->ecode;
        $user->designation = $request->designation;
        $user->contact = $request->contact;
        $user->save();
        return redirect('/userlist');
    }
    public function user_rights(){
        return view('user.user_rights');
    }
    public function user_ecode(Request $request){
        $post = $request->all();
        $user_division = User::where(['division_id' => $post['user_division']])->get();
        echo '<option>------Select Ecode---</option>';
        foreach($user_division as $division){
            $division->division_id;
            echo ' <option value="'.$division->ecode.'">'. $division->ecode.'</option>';
            
        }
    }
   
    public function user_rightssave(Request $request){
        $user_rights = new Userrights();
        $user_rights->company_id = $request->company_name;
        $user_rights->unit_id = $request->unit;
        $user_rights->division_id = $request->division;
        $user_rights->ecode = $request->ecode;
        $user = User::where(['ecode'=>$request->ecode])->first();
        $user_rights->user_id = $user->id;
        $dashboard_view = isset($request->dashboard_view[0]) ? 1 : 0;
        $user_rights->dashboard_view = $dashboard_view;
        $dashboard_edit = isset($request->dashboard_edit[0]) ? 1 : 0;
        $user_rights->dashboard_edit = $dashboard_edit;
        $dashboard_create = isset($request->dashboard_create[0]) ? 1 : 0;
        $user_rights->dashboard_create = $dashboard_create;
        

        $salesorder_view = isset($request->salesorder_view[0]) ? 1 : 0;
        $user_rights->salesorder_view = $salesorder_view;
        $salesorder_edit = isset($request->salesorder_edit[0]) ? 1 : 0;
        $user_rights->salesorder_edit = $salesorder_edit;
        $salesorder_create = isset($request->salesorder_create[0]) ? 1 : 0;
        $user_rights->salesorder_create = $salesorder_create;

        $turnover_view = isset($request->turnover_view[0]) ? 1 : 0;
        $user_rights->turnover_view = $turnover_view;
        $turnover_edit = isset($request->turnover_edit[0]) ? 1 : 0;
        $user_rights->turnover_edit = $turnover_edit;
        $turnover_create = isset($request->turnover_create[0]) ? 1 : 0;
        $user_rights->turnover_create = $turnover_create;

        $collection_view = isset($request->collection_view[0]) ? 1 : 0;
        $user_rights->collection_view = $collection_view;
        $collection_edit = isset($request->collection_edit[0]) ? 1 : 0;
        $user_rights->collection_edit = $collection_edit;
        $collection_create = isset($request->collection_create[0]) ? 1 : 0;
        $user_rights->collection_create = $collection_create;
      
        $user_rights->save();
        return redirect('/user_rights');

    
        //echo 'das_view'.$request->dashboard_view.'<br> das_edit-'.$request->dashboard_edit;
        exit;
      
    }
    
    ######### Other functions #####################

}