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
    public function turnoverlist(){
        $turnover=Turnover::all();
        return view('turnover.turnoverlist',['turnover'=>$turnover]);
    }
    ##########Store###########
    public function turnoverstore(Request $request)
{   
    $turnover = new Turnover();
    $turnover->company_id = $request->company_name;
    $turnover->unit_id = $request->unit;
    $turnover->financial_year_id = $request->financial_year;
    $turnover->aprtarget_total=$request->aprtarget_total;
    $turnover->maytarget_total=$request->maytarget_total;
    $turnover->juntarget_total=$request->juntarget_total;
    $turnover->jultarget_total=$request->jultarget_total;
    $turnover->augtarget_total=$request->augtarget_total; 
    $turnover->septarget_total=$request->septarget_total;
    $turnover->octtarget_total=$request->octtarget_total;
    $turnover->novtarget_total=$request->novtarget_total;
    $turnover->dectarget_total=$request->dectarget_total;
    $turnover->jantarget_total=$request->jantarget_total;
    $turnover->febtarget_total=$request->febtarget_total;
    $turnover->martarget_total=$request->martarget_total;
    $turnover->target_total=$request->finaltarget;
    $turnover->actual_total=$request->finalactual;
    $turnover->granttotal_target=$request->granttotal_target;
    $totalrow   =   $request->totalrow; 
    if($turnover->save()){  
            
        for($i=0;$i<$totalrow;$i++){
                $turnover_sub = new turnover_sub();
                $turnover_sub->turnover_id = $turnover->id;
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
                $turnover_sub->target_total = $request->divtarget_total[$i];
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
    $target=turnover_sub::where(['turnover_id'=>$turnover->id])->get();
    $financialyear=financial_year::all();
    return view('turnover.turnover_view',['unit'=>$unit,'company'=>$company,'turnover'=>$turnover,'financialyear'=>$financialyear,'target'=>$target]);       
}  
public function turnover_edit($id,$unit)
    {  
        $company=company::all();
        $unit=unit::all();
        $turnover=Turnover::findorfail($id);     
        $target=turnover_sub::where(['turnover_id'=>$turnover->id])->get();
        $financialyear=financial_year::all();
        return view('turnover.turnover_edit',['unit'=>$unit,'company'=>$company,'turnover'=>$turnover,'financialyear'=>$financialyear,'target'=>$target]);       
    }
    public function turnoverupdate(Request $request,$id)
    {  
        
        foreach($request->id as $tg=>$val){
            $target=turnover_sub::where(['id'=>$val])->first();
            $target->apr_actual= $request->apr_actual[$tg];
            $target->may_actual=$request->may_actual[$tg];
            $target->jun_actual=$request->jun_actual[$tg];
            $target->jul_actual=$request->jul_actual[$tg];
            $target->aug_actual=$request->aug_actual[$tg];
            $target->sep_actual=$request->sep_actual[$tg];
            $target->oct_actual=$request->oct_actual[$tg];
            $target->nov_actual=$request->nov_actual[$tg];
            $target->dec_actual=$request->dec_actual[$tg];
            $target->jan_actual=$request->jan_actual[$tg];
            $target->feb_actual=$request->feb_actual[$tg];
            $target->mar_actual=$request->mar_actual[$tg];
            $target->actual_total=$request->actual_total[$tg];
            $target->save();
                   }  
        $turnover=Turnover::where(['id'=>$request->turnid])->first();   
        $turnover->apractual_total=$request->apractual_total;
        $turnover->mayactual_total=$request->mayactual_total;
        $turnover->junactual_total=$request->junactual_total;
        $turnover->julactual_total=$request->julactual_total;
        $turnover->augactual_total=$request->augactual_total;
        $turnover->sepactual_total=$request->sepactual_total;
        $turnover->octactual_total=$request->octactual_total;
        $turnover->novactual_total=$request->novactual_total;
        $turnover->decactual_total=$request->decactual_total;
        $turnover->janactual_total=$request->janactual_total;
        $turnover->febactual_total=$request->febactual_total;
        $turnover->maractual_total=$request->maractual_total;
        $turnover->actual_total=$request->total_actual;
        $turnover->granttotal_actual=$request->granttotal_actual;
        $turnover->save();
        return redirect('/turnoverlist');
   
        
}
public function checkfinancial_year(Request $request){
    $post = $request->all();
  
    $turnover = Turnover::where(['unit_id' => $post['unit_id'],'financial_year_id'=>$post['fin_year']])->exists();
if($turnover){
    return 'yes';
}
   
}
    
}