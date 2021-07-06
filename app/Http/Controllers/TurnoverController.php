<?php

namespace App\Http\Controllers;

use App\Models\Turnover;
use App\Models\company;
use App\Models\division;
use App\Models\unit;
use App\Models\turnover_sub;
use App\Models\financial_year;
use DB;
use Illuminate\Http\Request;

class TurnoverController extends Controller
{
    public function __construct()
{
        $this->middleware('auth');
}
    ###########Entry Page########
    public function turnover_entry()
{
        return view('turnover.turnover_entry');
}
    #######Listview#########
    public function turnoverlist()
{
        $turnover=Turnover::all();
        return view('turnover.turnoverlist',['turnover'=>$turnover]);
}
    ##########Store###########
    public function turnoverstore(Request $request)
{   
    $turnover = new Turnover();
    $turnover->company_id = $request->company_name;
    $turnover->unit_id = $request->unit;
    $str=$request->financial_year;
    $array=explode('-',$str,3);
    $test = $array[2];
    $turnover->financial_year_id = $test;
    $turnover->aprtarget_total=$request->aprtargetrow_total;
    $turnover->maytarget_total=$request->maytargetrow_total;
    $turnover->juntarget_total=$request->juntargetrow_total;
    $turnover->jultarget_total=$request->jultargetrow_total;
    $turnover->augtarget_total=$request->augtargetrow_total; 
    $turnover->septarget_total=$request->septargetrow_total;
    $turnover->octtarget_total=$request->octtargetrow_total;
    $turnover->novtarget_total=$request->novtargetrow_total;
    $turnover->dectarget_total=$request->dectargetrow_total;
    $turnover->jantarget_total=$request->jantargetrow_total;
    $turnover->febtarget_total=$request->febtargetrow_total;
    $turnover->martarget_total=$request->martargetrow_total;
    $turnover->target_total=$request->target_total;
    $turnover->granttotal_target=$request->granttotal_target;
    $totalrow   =   $request->totalrow;
    #echo $totalrow;
    #exit; 
    if($turnover->save()){  
            
        for($i=0;$i<$totalrow;$i++){
               
                $turnover_sub = new turnover_sub();
                $turnover_sub->turn_id = $turnover->id;
                $turnover_sub->division_id=$request->div[$i];                   
                $turnover_sub->apr_target = $request->apr_target[$i];
                $turnover_sub->may_target = $request->may_target[$i];
                $turnover_sub->jun_target = $request->jun_target[$i];
                $turnover_sub->jul_target = $request->jul_target[$i];
                $turnover_sub->aug_target = $request->aug_target[$i];
                $turnover_sub->sep_target = $request->sep_target[$i];
                $turnover_sub->oct_target = $request->oct_target[$i];
                $turnover_sub->nov_target = $request->nov_target[$i];
                $turnover_sub->dec_target = $request->dec_target[$i];
                $turnover_sub->jan_target = $request->jan_target[$i];
                $turnover_sub->feb_target = $request->feb_target[$i];
                $turnover_sub->mar_target = $request->mar_target[$i];
                $turnover_sub->target_total = $request->targetcol_total[$i];
     
                $turnover_sub->save();
            }
            return redirect('/turnoverlist');
    } 
    
}

public function turnover_view($id,$unit)
{
    $company=company::all();
    $unit=unit::all();
    $turnover=Turnover::findorfail($id);     
    $target=turnover_sub::where(['turn_id'=>$turnover->id])->get();
    $financialyear=financial_year::all();
    return view('turnover.turnover_view',['unit'=>$unit,'company'=>$company,'turnover'=>$turnover,'financialyear'=>$financialyear,'target'=>$target]);       
}  
public function turnover_edit($id,$unit)
{  
        $company=company::all();
        $unit=unit::all();
        $turnover=Turnover::findorfail($id);     
        $turnover_sub=turnover_sub::where(['turn_id'=>$turnover->id])->get();
        $financialyear=financial_year::where(['id'=>$turnover->financial_year_id])->first();
        return view('turnover.turnover_edit',['unit'=>$unit,'company'=>$company,'turnover'=>$turnover,'financialyear'=>$financialyear,'turnover_sub'=>$turnover_sub]);       
}
    public function turnoverupdate(Request $request,$id)
{  
        
        foreach($request->id as $sub=>$val){
            
            
            $target=turnover_sub::where(['id'=>$val])->first();
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
        $turnover=Turnover::where(['id'=>$request->turnid])->first();   
        
        $turnover->apractual_total=$request->apractualrow_total;
        $turnover->mayactual_total=$request->mayactualrow_total;
        $turnover->junactual_total=$request->junactualrow_total;
        $turnover->julactual_total=$request->julactualrow_total;
        $turnover->augactual_total=$request->augactualrow_total;
        $turnover->sepactual_total=$request->sepactualrow_total;
        $turnover->octactual_total=$request->octactualrow_total;
        $turnover->novactual_total=$request->novactualrow_total;
        $turnover->decactual_total=$request->decactualrow_total;
        $turnover->janactual_total=$request->janactualrow_total;
        $turnover->febactual_total=$request->febactualrow_total;
        $turnover->maractual_total=$request->maractualrow_total;
        $turnover->actual_total=$request->finalactual;
        $turnover->granttotal_actual=$request->granttotal_actual;
        $turnover->save();
        return redirect('/turnoverlist');  
        
}
public function checkfinancial_year(Request $request)
{
    $post = $request->all();
    $collection = Turnover::where(['unit_id' => $post['unit_id'],'financial_year_id'=>$post['fin_year']])->first();
 if($collection){
     return 'found';
 }
 else{
     return 'not found';
 }
}
}