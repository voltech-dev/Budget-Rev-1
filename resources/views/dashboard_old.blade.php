@extends('layouts.main')
@section('header')
<?php
use App\Models\unit;
use App\Models\financial_year;
$company=DB::table('br_company')
->get();
// echo $company;
$month=date('mm');
if(date('mm')>=4){
    $nextyear = date('Y')+1;  
    $currentfy = date('Y').'-'. $nextyear;      
 }
else{
    $prevyear = date('Y')-1;
    $currentfy = ($prevyear+1).'-'.$prevyear;
}
$financial_year = financial_year::all();

            $fin_year=financial_year::where('financial_year','=',$currentfy)->first();
            $fy_id=$fin_year->id;
           
            ?>

@endsection

@section('content')
<div class="container">

    <div class="form-group-row">
        <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
        <select name="fy" id="fy">
            @foreach($financial_year as $fy)
            @if($fy->financial_year == $currentfy)
            <option selected disabled value="{{$fy->id}}">{{$currentfy}}</option>
            @else
            <option value="{{$fy->id}}">{{$fy->financial_year}}</option>
            @endif
            @endforeach
        </select>
    </div>

    <div class="row">

        <div class="col-md-6" id="salesorder">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Salesorder</h3>
                </div>
                @foreach($company as $comp)
                <div class="card-header" >
                    {{$comp->company_name}}
                </div>
                <div class="table-responsive">
                    <div class="col-md-6" id="salestable">
                        <table class="table card-table table-vcenter text-nowrap" name="tab">

                            <thead>
                                <tr>
                                    <th>Unit</th>
                                    <th>FY</th>
                                    <th>Target</th>
                                    <th>Actual</th>
                                </tr>
                            </thead>
                            <?php 
                                    $unit = unit::where('company_id','=',$comp->id)->get();
                            ?>

                            @foreach($unit as $un)
                            <tbody>
                                <tr>
                                    <input type="hidden" value="{{$un->id}}" name="unit_id" id="unit_id">
                                    <td>{{$un->unit}}</td>
                                    <td>{{$currentfy}}</td>
                                    @if(App\Models\Sale::where(['unit_id'=>$un->id,'financial_year_id'=>$fy_id])->exists())
                                    <?php                                    
                                    $sales = App\Models\Sale::where(['unit_id'=>$un->id,'financial_year_id'=>$fy_id])->get();                                      
                                    ?>
                                    @foreach($sales as $sale)
                                    <td>{{$sale->granttotal_target }}</td>
                                    <td>{{$sale->granttotal_actual }}</td>
                                    @endforeach
                                    @else
                                    <td>0</td>
                                    <td>0</td>
                                    @endif

                                </tr>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                @endforeach


            </div>

        </div>
        @endsection
        @push('scripts')
        <script>
        $(document).ready(function() {
            $('#fy').change(function() {
             
                var fin_year = $('#fy').val();
                var unit_id = $('#unit_id').val();

                $.ajax({
                    type: 'GET',
                    url: "{{url('/financialyear')}}",
                    data:{
                        financial_year:fin_year
                    }
                    success: function(data) {
                    

                    }
                })
            });

        });
        </script>
        @endpush