<?php

namespace App\Http\Controllers;

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

class CollectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   

    ################# Collection ###########################
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

    public function searchcollection(Request $request){
        $users = DB::table('collection')
        ->join('collection_target', 'collection.id', '=', 'collection_target.collection_id')
        ->select('collection.*', 'collection_target.*')
        ->where('collection.division', $request->collection)
        ->get();
        return view('collection.collectionlist',['users'=>$users]);
    }
    ################# Collection ###########################
    
 }