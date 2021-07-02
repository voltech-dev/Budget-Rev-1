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
    $str=$request->financial_year;
    $array=explode('-',$str,3);
    $test = $array[2];
    $collection->financial_year_id = $test;
    $collection->aprtarget_total=$request->aprtargetrow_total;
    $collection->maytarget_total=$request->maytargetrow_total;
    $collection->juntarget_total=$request->juntargetrow_total;
    $collection->jultarget_total=$request->jultargetrow_total;
    $collection->augtarget_total=$request->augtargetrow_total; 
    $collection->septarget_total=$request->septargetrow_total;
    $collection->octtarget_total=$request->octtargetrow_total;
    $collection->novtarget_total=$request->novtargetrow_total;
    $collection->dectarget_total=$request->dectargetrow_total;
    $collection->jantarget_total=$request->jantargetrow_total;
    $collection->febtarget_total=$request->febtargetrow_total;
    $collection->martarget_total=$request->martargetrow_total;
    $collection->target_total=$request->target_total;
    $collection->granttotal_target=$request->granttotal_target;
    $totalrow   =   $request->totalrow;
    #echo $totalrow;
    #exit; 
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
                $collection_sub->target_total = $request->targetcol_total[$i];
     
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
    $collection_sub=collection_sub::where(['collection_id'=>$collection->id])->get();
    $financialyear=financial_year::where(['id'=>$collection->financial_year_id])->first();
    return view('collection.collection_edit',['unit'=>$unit,'company'=>$company,'collection'=>$collection,'financialyear'=>$financialyear,'collection_sub'=>$collection_sub]);       
} 
public function collectionupdate(Request $request,$id)
    {  
        
        foreach($request->id as $sub=>$val){
            
            
            $target=collection_sub::where(['id'=>$val])->first();
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
        $collection=Collection::where(['id'=>$request->collectionid])->first();   
        
        $collection->apractual_total=$request->apractualrow_total;
        $collection->mayactual_total=$request->mayactualrow_total;
        $collection->junactual_total=$request->junactualrow_total;
        $collection->julactual_total=$request->julactualrow_total;
        $collection->augactual_total=$request->augactualrow_total;
        $collection->sepactual_total=$request->sepactualrow_total;
        $collection->octactual_total=$request->octactualrow_total;
        $collection->novactual_total=$request->novactualrow_total;
        $collection->decactual_total=$request->decactualrow_total;
        $collection->janactual_total=$request->janactualrow_total;
        $collection->febactual_total=$request->febactualrow_total;
        $collection->maractual_total=$request->maractualrow_total;
        $collection->actual_total=$request->finalactual;
        $collection->granttotal_actual=$request->granttotal_actual;
        $collection->save();
        return redirect('/collectionlist');  
        
   
}
public function checkfinancial_year(Request $request){
    $post = $request->all();
    $collection = Collection::where(['unit_id' => $post['unit_id'],'financial_year_id'=>$post['fin_year']])->exists();
 if($collection){
     return 'found';
 }
 else{
     return 'not found';
 }
   
}


 
}