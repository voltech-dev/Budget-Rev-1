<?php

namespace App\Http\Controllers;


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

class TurnoverController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     ################# Turnover ###########################
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
     ################# Turnover ###########################
}