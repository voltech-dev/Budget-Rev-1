<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use App\Models\Dtssp;

class SalesorderController extends Controller
{
    // public function __construct()
    // {
    //    $this->middleware('auth');
    // }
    public function salesorder()
    {
        return view('salesorder.create');
    }
    public function index(Request $request)
    {
        $enquiry = Bmsenquiry::latest()->paginate(10);
      //  return view('businessms.index',['products'=>$products]);
        return view('businessms.index',['enquiry'=>$enquiry])
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('businessms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $request->validate([
            'tenderno' => 'required',
            'enquiryreceiveddate' => 'required',
            'projectname' => 'required',
            'clientname' => 'required',
            'contactperson' => 'required',
            'contact_mobile' => 'required',
            'mailid' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'endclient' => 'required',
            'scopeofactivities' => 'required',
            // 'anyothercustomerdetails' => 'required',
            'enquiryduedate' => 'required',
            'projectdetails' => 'required',
        ]);
        $bms = new Bmsenquiry;
        $bms->tenderno = $request->tenderno;
        $bms->enquiryreceiveddate = $request->enquiryreceiveddate;
        $bms->projectname = $request->projectname;
        $bms->projecttitle = $request->projectname;
        $bms->clientname = $request->clientname;
        $bms->contactperson = $request->contactperson;
        $bms->contact_mobile = $request->contact_mobile;
        $bms->mailid = $request->mailid;
        $bms->country = $request->country;
        $bms->city = $request->city;
        $bms->address = $request->address;
        $bms->endclient = $request->endclient;
        $bms->scopeofactivities = $request->scopeofactivities;
        $bms->anyothercustomerdetails = $request->anyothercustomerdetails;
        $bms->enquiryduedate = $request->enquiryduedate;
        $bms->projectdetails = $request->projectdetails;
        $bms->status = $request->status;
        $bms->save();
        //Bmsenquiry::create($request->all());     
        return redirect()->route('businessms.index')
                        ->with('success','Enquiry created successfully.');
    }
    public function enquirycreate()
    {
        return view('businessms.enquirycreate');
    }public function enquirystore(Request $request)
    {
             $request->validate([            
                'tenderno' => 'required',
                'enquiryreceiveddate' => 'required',
                'projectname' => 'required',
                'clientname' => 'required',
                'contactperson' => 'required',
                'contact_mobile' => 'required',
                'mailid' => 'required',
                'country' => 'required',
                'city' => 'required',
                'address' => 'required',
                'endclient' => 'required',
                'scopeofactivities' => 'required',
                'anyothercustomerdetails' => 'required',
                'enquiryduedate' => 'required',
                'projectdetails' => 'required',
        ]);


        Bmsenquiry::create($request->all());
     
        return redirect()->route('businessms.index')
                        ->with('success','Enquiry created successfully.');
    }
    public function show(Bmsenquiry $bmsenquiry,$product)
    {
       $bmsenquiry = Bmsenquiry::findorFail($product);
        return view('businessms.show',['bmsenquiry'=>$bmsenquiry]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bmsenquiry  $bmsenquiry
     * @return \Illuminate\Http\Response
     */
    public function edits(Bmsenquiry $bmsenquiry,$id)
    {
        $bmsenquiry = Bmsenquiry::findorFail($id);
        return view('businessms.edit',['bmsenquiry'=>$bmsenquiry]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bmsenquiry  $bmsenquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $bms = Bmsenquiry::findorFail($id);
       // $bms = new Bmsenquiry;
        $bms->tenderno = $request->tenderno;
        $bms->enquiryreceiveddate = $request->enquiryreceiveddate;
        $bms->projectname = $request->projectname;
        $bms->projecttitle = $request->projectname;
        $bms->clientname = $request->clientname;
        $bms->contactperson = $request->contactperson;
        $bms->contact_mobile = $request->contact_mobile;
        $bms->mailid = $request->mailid;
        $bms->country = $request->country;
        $bms->city = $request->city;
        $bms->address = $request->address;
        $bms->endclient = $request->endclient;
        $bms->scopeofactivities = $request->scopeofactivities;
        $bms->anyothercustomerdetails = $request->anyothercustomerdetails;
        $bms->enquiryduedate = $request->enquiryduedate;
        $bms->projectdetails = $request->projectdetails;
        $bms->status = $request->status;
        $bms->save();
        //$bmsenquiry1->update($request->all());
      //  return view('businessms.index');
      //  return redirect('businessms.index')->with('success','Client Name deleted successfully');
        return redirect()->route('businessms.index')
                        ->with('success','Enquiry updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bmsenquiry  $bmsenquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bmsenquiry = Bmsenquiry::findorFail($id);
        $bmsenquiry->delete();
    
        return redirect()->route('businessms.index')
                        ->with('success','Enquiry deleted successfully');
    }
    public function enquirydate(Request $request)
    {
        $post = $request->all();
        //$request = Request::all();   
        $date = Bmsenquiry::where(['tenderno' => $post['bu']])->first();
       // echo '<input value="'.$date->enquiryreceiveddate.'"/>';
        //echo json_encode(['data' => $date->enquiryreceiveddate]);
        echo $date->enquiryreceiveddate;
      //  $html = view('projectsms.pms_projectcreationform')->with(compact('cities'))->render();
       // return response()->json(['success' => true, 'html' => $cities]);
       /*foreach($date as $value){
        echo '<option value="'.$value->description.'">'.$value->description.'</option>';
   }*/

       // echo json_encode(['lod' => $lod]);
      /*  $post = $request->all();
       // $hh = $_POST['q'];
        //$pp = DB::table('lods')->where(['type' => $post['type']])->first();
        $pp = Lod::where(['type' => $post['type']])->first();
        $description = $pp->description;
        echo json_encode(['lod' => $description]);
       // return redirect(['q'=>$pp])->back();*/
    }
}