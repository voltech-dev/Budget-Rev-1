<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\company;
use App\Models\division;
use App\Models\unit;
use App\Models\collection_sub;
use App\Models\financial_year;
use DB;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    ###########Entry Page########
    public function collection_entry()
    {
        return view('collection.collection_entry');
    }
    #######Listview#########
    public function collectionlist(){
        $collection=Collection::all();
        return view('collection.collectionlist',['collection'=>$collection]);
    }
    ##########Store###########
    public function collectionstore(Request $request)
{   
    $collection = new Collection();
    $collection->company_id = $request->company_name;
    $collection->unit_id = $request->unit;
    $collection->financial_year_id = $request->financial_year;
    $collection->aprtarget_total=$request->aprtarget_total;
    $collection->maytarget_total=$request->maytarget_total;
    $collection->juntarget_total=$request->juntarget_total;
    $collection->jultarget_total=$request->jultarget_total;
    $collection->augtarget_total=$request->augtarget_total; 
    $collection->septarget_total=$request->septarget_total;
    $collection->octtarget_total=$request->octtarget_total;
    $collection->novtarget_total=$request->novtarget_total;
    $collection->dectarget_total=$request->dectarget_total;
    $collection->jantarget_total=$request->jantarget_total;
    $collection->febtarget_total=$request->febtarget_total;
    $collection->martarget_total=$request->martarget_total;
    $collection->target_total=$request->finaltarget;
    $collection->actual_total=$request->finalactual;
    $collection->granttotal_target=$request->granttotal_target;
    $totalrow   =   $request->totalrow; 
    if($collection->save()){  
            
        for($i=0;$i<$totalrow;$i++){
                $collection_sub = new collection_sub();
                $collection_sub->collection_id = $collection->id;
                $collection_sub->division_id=$request->div[$i];                   
                $collection_sub->apr_target = $request->apr_target[$i];
                $collection_sub->may_target = $request->may_target[$i];
                $collection_sub->jun_target = $request->jun_target[$i];
                $collection_sub->jul_target = $request->jul_target[$i];
                $collection_sub->aug_target = $request->aug_target[$i];
                $collection_sub->sep_target = $request->sep_target[$i];
                $collection_sub->oct_target = $request->oct_target[$i];
                $collection_sub->nov_target = $request->nov_target[$i];
                $collection_sub->dec_target = $request->dec_target[$i];
                $collection_sub->jan_target = $request->jan_target[$i];
                $collection_sub->feb_target = $request->feb_target[$i];
                $collection_sub->mar_target = $request->mar_target[$i];
                $collection_sub->target_total = $request->divtarget_total[$i];
                $collection_sub->save();
            }
            return redirect('/collectionlist');

    }     
}
public function collection_view($id,$unit)
{
    $company=company::all();
    $unit=unit::all();
    $collection=Collection::findorfail($id);     
    $target=collection_sub::where(['collection_id'=>$collection->id])->get();
    $financialyear=financial_year::all();
    return view('collection.collection_view',['unit'=>$unit,'company'=>$company,'collection'=>$collection,'financialyear'=>$financialyear,'target'=>$target]);       
}
public function collection_edit($id,$unit)
{
    $company=company::all();
    $unit=unit::all();
    $collection=Collection::findorfail($id);     
    $target=collection_sub::where(['collection_id'=>$collection->id])->get();
    $financialyear=financial_year::all();
    return view('collection.collection_edit',['unit'=>$unit,'company'=>$company,'collection'=>$collection,'financialyear'=>$financialyear,'target'=>$target]);       
} 
public function collectionupdate(Request $request,$id)
    {  
        
        foreach($request->id as $tg=>$val){
            $target=collection_sub::where(['id'=>$val])->first();
            if(isset($request->apr_actual[$tg])){

            $target->apr_actual= $request->apr_actual[$tg];
            }
            if(isset($request->may_actual[$tg])){

            $target->may_actual=$request->may_actual[$tg];
            }
            if(isset($request->jun_actual[$tg])){

            $target->jun_actual=$request->jun_actual[$tg];
            }
            if(isset($request->jul_actual[$tg])){

            $target->jul_actual=$request->jul_actual[$tg];
            }
            if(isset($request->aug_actual[$tg])){

            $target->aug_actual=$request->aug_actual[$tg];
            }
            if(isset($request->sep_actual[$tg])){

            $target->sep_actual=$request->sep_actual[$tg];
            }
            if(isset($request->oct_actual[$tg])){

            $target->oct_actual=$request->oct_actual[$tg];
            }
            if(isset($request->nov_actual[$tg])){

            $target->nov_actual=$request->nov_actual[$tg];
            }
            if(isset($request->dec_actual[$tg])){

            $target->dec_actual=$request->dec_actual[$tg];
            }
            if(isset($request->jan_actual[$tg])){

            $target->jan_actual=$request->jan_actual[$tg];
            }
            if(isset($request->feb_actual[$tg])){

            $target->feb_actual=$request->feb_actual[$tg];
            }
            if(isset($request->mar_actual[$tg])){

            $target->mar_actual=$request->mar_actual[$tg];
            }
            if(isset($request->actual_total[$tg])){

            $target->actual_total=$request->actual_total[$tg];
            }
            $target->save();
            
                   }  
        $collection=Collection::where(['id'=>$request->collectionid])->first();   
        $collection->apractual_total=$request->apractual_total;
        $collection->mayactual_total=$request->mayactual_total;
        $collection->junactual_total=$request->junactual_total;
        $collection->julactual_total=$request->julactual_total;
        $collection->augactual_total=$request->augactual_total;
        $collection->sepactual_total=$request->sepactual_total;
        $collection->octactual_total=$request->octactual_total;
        $collection->novactual_total=$request->novactual_total;
        $collection->decactual_total=$request->decactual_total;
        $collection->janactual_total=$request->janactual_total;
        $collection->febactual_total=$request->febactual_total;
        $collection->maractual_total=$request->maractual_total;
        $collection->actual_total=$request->total_actual;
        $collection->granttotal_actual=$request->granttotal_actual;
        $collection->save();
        return redirect('/collectionlist');
   
}
public function checkfinancial_year(Request $request){
    $post = $request->all();
  
    $collection = Collection::where(['unit_id' => $post['unit_id'],'financial_year_id'=>$post['fin_year']])->exists();
if($collection){
    return 'yes';
}
   
}


 
}