<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use App\Models\company;
use App\Models\division;
use App\Models\unit;
use App\Models\sales_sub;
use App\Models\financial_year;
use DB;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function getsalesorderdata(Request $request){
        $post = $request->all();    
        $unit= unit::where('company_id','=',$post['company_name'])->get();
        $month=date('mm');
        if(date('mm')>=4){
            $nextyear = date('Y')+1;  
            $currentfy = date('Y').'-'. $nextyear;      
         }
        else{
            $prevyear = date('Y')-1;
            $currentfy = ($prevyear+1).'-'.$prevyear;
        
            
        }

        foreach($unit as $units){
            
        ?>
<tr>
    <td><?php echo $units->unit; ?></td>
    <td><?php  echo $currentfy;?></td>
    <td></td>
    <td></td>
</tr>

<?php 
        }

        // json_encode($unit);
        //return view('dashboard_ajax',['unit'=>$unit,'financial_year'=>$financial_year]);
    }
    public function dashboard_ajax(){
        return view('dashboard_ajax');
    }
}

   