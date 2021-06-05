@extends('layouts.main')
@section('header')
<?php
$company=DB::table('company')
->get();
$fin_year=DB::table('financial_year')
->get();

?>
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">

    </div>
</div>
<!-- end::page-header -->
@endsection
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container-fluid">
    <!-- <div class="row">
        <div class="col-md-12">-->
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/salesorder')}}" method="POST">
                @csrf
                <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                        <div class="col-sm-3">
                            <select name="company_name" class="form-control form-control-sm" id="company_name">
                                <option selected>--Select Company--</option>
                                @foreach($company as $comp)
                                <option value="{{$comp->id}}">{{$comp->company_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                        <div class="col-sm-3">
                            <select name="unit" class="form-control form-control-sm" id="unit">
                                <option selected disabled>--Select Unit--</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
                        <div class="col-md-3">
                            <select name="financial_year" class="form-control form-control-sm" id="financial_year">
                                <option selected disabled>--Select--</option>
                                @foreach($fin_year as $fy)
                                <option value="{{$fy->id}}">{{$fy->financial_year}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-sm" id="add">Add</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">


                            <div class="table table-responsive" id="tab">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Division</th>
                                            <th colspan="2" style="text-align:center">April</th>
                                            <th colspan="2" style="text-align:center">May</th>
                                            <th colspan="2" style="text-align:center">June</th>
                                            <th colspan="2" style="text-align:center">July</th>
                                            <th colspan="2" style="text-align:center">August</th>
                                            <th colspan="2" style="text-align:center">September</th>
                                            <th colspan="2" style="text-align:center">October</th>
                                            <th colspan="2" style="text-align:center">November</th>
                                            <th colspan="2" style="text-align:center">December</th>
                                            <th colspan="2" style="text-align:center">Jan</th>
                                            <th colspan="2" style="text-align:center">Feb</th>
                                            <th colspan="2" style="text-align:center">March</th>
                                            <th>Target</th>
                                            <th>Actual</th>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Total Target</td>
                                            <td>Total Actual</td>


                                        </tr>
                                    </thead>
                                    <tbody name='sub_sales' id='sub_sales'>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div><br>
                    <div class="form-group row" id="finaltotal">
                        <div class="col-sm-3">
                            <label>Total Target</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="total_target" id="total_target">
                        </div>
                        <div class="col-sm-3">
                            <label>Total Actual</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="total_actual" id="total_actual">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <!-- <button type="button" class="btn btn-primary btn-sm" id="tot">Total</button> -->
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-sm-12">
                            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <button type="submit" class="btn btn-outline-success btn-sm"><i data-feather="check"
                                        class="mr-2"></i>Save</button>
                            </div>
                        </div>
                    </div>

            </form>
        </div>
    </div>
    <!-- </div>
    </div>-->
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $('#tab').hide();
    $('#finaltotal').hide();
    $('#get_total').hide();
})
$('#company_name').change(function(event) {
    var company_name = $('#company_name').val();
    $.ajax({
        type: "GET",
        url: "{{url('/companyid')}}",
        data: {
            company_name: company_name
        },
        dataType: 'json',
        success: function(data) {
            $('select[name="unit"]').empty();
            $.each(data, function(key, value) {
                $('select[name="unit"]').append('<option value="' + key + '">' + value +
                    '</option>');

            });
        },
    });

});
$('#add').click(function() {
    $('#tab').show();
    var unit = $('#unit').val();
    $.ajax({
        type: "GET",
        url: "{{url('/divisionid')}}",
        data: {
            unit: unit
        },
        dataType: 'json',
        success: function(data) {
            
            
            var i = 0;
            var k = 0;
            $.each(data, function(key, value) {
                alert("key: "+key);
                i = i + 1;
                $('tbody[name="sub_sales"]').append('<tr class="newrow">' +
                    '<td>' +
                    '<input type="hidden"  style="width:60px" name="div[]" id="div_' + i + '" value="' +
                    key +
                    '">' + value + '</td>' + 

                    '<td class="apt">' +
                    '<input type="text" style="width:60px" name="apr_target[]" id="apr_target_' + i + '" class="target target_' + i + ' apr_target" value="">' +
                    '</td>' + 
                    '<td>' +
                    '<input type="text" style="width:60px" name="apr_actual[]" id="apractual" class="apr_actual" disabled>' +
                    '</td>' + 
                    
                    '<td class="may">' +
                    '<input type="text" style="width:60px" name="may_target[]" id="may_target_' + i + '" class="target target_' + i + '" value="" >' +
                    '</td>' +
                    '<td>' +
                    '<input type="text" style="width:60px" name="may_actual[]" id="may_actual" class="may_actual" disabled>' +
                    '</td>' + 
                    
                    '<td class="june">' +
                    '<input type="text" style="width:60px" name="jun_target[]" id="jun_target_' + i + '" class="target target_' + i + '" value="">' +
                    '</td>' + 
                    '<td>' +
                    '<input type="text" style="width:60px" name="jun_actual[]" id="jun_actual" class="june_actual" disabled>' +
                    '</td>' + 
                    
                    '<td class="july">' +
                    '<input type="text" style="width:60px" name="jul_target[]" id="jul_target_' + i + '" class="target july_target_' + i + '" value="">' +
                    '</td>' + 
                    '<td>' +
                    '<input type="text" style="width:60px" name="jul_actual[]" id="jul_actual" class="july_actual" disabled>' +
                    '</td>' + 
                    
                    '<td class="aug">' +
                    '<input type="text" style="width:60px" name="aug_target[]" id="aug_target_' + i + '" class="target target_' + i + '" value="">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="aug_actual[]" id="aug_actual" class="aug_actual" disabled>' +
                    '</td>' + 
                    
                    '<td class="sept">' +
                    '<input type="text" style="width:60px" name="sep_target[]" id="sep_target_' + i + '" class="target target_' + i + '" value="">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="sep_actual[]" id="sep_actual" class="sept_actual" disabled>' +
                    '</td>' + 
                    
                    '<td class="oct">' +
                    '<input type="text" style="width:60px" name="oct_target[]" id="oct_target_' + i + '" class="target target_' + i + '" value="">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="oct_actual[]" id="oct_actual" class="oct_actual" disabled>' +
                    '</td>' + 
                    
                    '<td class="nov">' +
                    '<input type="text" style="width:60px" name="nov_target[]" id="nov_target_' + i + '" class="target target_' + i + '" value="">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="nov_actual[]" id="nov_actual" class="nov_actual" disabled>' +
                    '</td>' + 
                    
                    '<td class="dec">' +
                    '<input type="text" style="width:60px" name="dec_target[]" id="dec_target_' + i + '" class="target target_' + i + '" value="">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="dec_actual[]" id="dec_actual" class="dec_actual" disabled>' +
                    '</td>' + 
                    
                    '<td class="jan">' +
                    '<input type="text" style="width:60px" name="jan_target[]" id="jan_target_' + i + '" class="target target_' + i + '" value="">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="jan_actual[]" id="jan_actual" class="jan_actual" disabled>' +
                    '</td>' + 
                    
                    '<td class="feb">' +
                    '<input type="text" style="width:60px" name="feb_target[]" id="feb_target_' + i + '" class="target target_' + i + '" value="">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="feb_actual[]" id="feb_actual" class="feb_actual" disabled>' +
                    '</td>' + 
                    
                    '<td class="march">' +
                    '<input type="text" style="width:60px" name="mar_target[]" id="mar_target_' + i + '" class="target target_' + i + '" value="">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="mar_actual[]" id="mar_actual" class="march_actual" disabled>' +
                    '</td>' + 
                    
                    '<td>' +
                    '<input type="text" name="divtarget_total[]" id="divtarget_total_'+ i + '"style="width:60px">' +
                    '</td>' + '<td>' +
                    '<input type="text" name="divactual_total[]" style="width:60px">' +
                    '</td>' +
                    '</tr>');

                    k = k + 1;

            });
            var totalrow = i;
            
            $('tbody[name="sub_sales"]').append(
                '<tr>' + '<td>' + 'Total' + '</td>' + '<td>' +
                
                '<input type="text" style="width:60px" name="aprtarget_total" id="aprtarget_total" ><input type="hidden" style="width:60px" name="totalrow" id="totalrow" value="' + totalrow +'">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="apractual_total" id="apractual_total" disabled>' +
                '<td>' +
                '<input type="text" style="width:60px" name="maytarget_total" id="maytarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="mayactual_total" id="mayactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="juntarget_total" id="juntarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="junactual_total" id="junactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="jultarget_total" id="jultarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="julactual_total" id="julactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="augtarget_total" id="augtarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="augactual_total" id="augactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="septarget_total" id="septarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="sepactual_total" id="sepactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="octtarget_total" id="octtarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="octactual_total" id="octactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="novtarget_total" id="novtarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="novactual_total" id="novactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="dectarget_total" id="dectarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="decactual_total" id="decactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="jantarget_total" id="jantarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="janactual_total" id="janactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="febtarget_total" id="febtarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="febactual_total" id="febactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="martarget_total" id="martarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="maractual_total" id="maractual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="finaltarget" id="finaltarget" >' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="finalactual" id="finalactual">' +
                '</td>' + '</tr>'
            );
        },
    });
    $('#finaltotal').show();
    $('#get_total').show();
    $('#sub_sales').each(function() {})
});
var sum = 0;


$(document).on('keyup','.target',function(){
    var totalrow = $("#totalrow").val();
    //##################### Division Row ########################
    var target_id = $(this).attr('id');
    //alert(target_id);
    var targetid_arr    =   target_id.split('_');
    //alert(targetid_arr[2]);
    var cnt = targetid_arr[2];
    var apr_target = $("#apr_target_"+cnt).val();
    var may_target = $("#may_target_"+cnt).val();
    var jun_target = $("#jun_target_"+cnt).val();
    var jul_target = $("#jul_target_"+cnt).val();
    var aug_target = $("#aug_target_"+cnt).val();
    var sep_target = $("#sep_target_"+cnt).val();
    var oct_target = $("#oct_target_"+cnt).val();
    var nov_target = $("#nov_target_"+cnt).val();
    var dec_target = $("#dec_target_"+cnt).val();
    var jan_target = $("#jan_target_"+cnt).val();
    var feb_target = $("#feb_target_"+cnt).val();
    var mar_target = $("#mar_target_"+cnt).val();
    
    if(!isNaN(apr_target) && apr_target != ''){
        apr_target  =   apr_target;
    }else{
        apr_target  =   0;
    }
    

    if(!isNaN(may_target) && may_target != ''){
        may_target  =   may_target;
    }else{
        may_target  =   0;
    }
    
    if(!isNaN(jun_target) && jun_target != ''){
        jun_target  =   jun_target;
    }else{
        jun_target  =   0;
    }

    if(!isNaN(jul_target) && jul_target != ''){
        jul_target  =   jul_target;
    }else{
        jul_target  =   0;
    }

    if(!isNaN(aug_target) && aug_target != ''){
        aug_target  =   aug_target;
    }else{
        aug_target  =   0;
    }

    if(!isNaN(sep_target) && sep_target != ''){
        sep_target  =   sep_target;
    }else{
        sep_target  =   0;
    }

    if(!isNaN(oct_target) && oct_target != ''){
        oct_target  =   oct_target;
    }else{
        oct_target  =   0;
    }

    if(!isNaN(nov_target) && nov_target != ''){
        nov_target  =   nov_target;
    }else{
        nov_target  =   0;
    }

    if(!isNaN(dec_target) && dec_target != ''){
        dec_target  =   dec_target;
    }else{
        dec_target  =   0;
    }

    if(!isNaN(jan_target) && jan_target != ''){
        jan_target  =   jan_target;
    }else{
        jan_target  =   0;
    }

    if(!isNaN(feb_target) && feb_target != ''){
        feb_target  =   feb_target;
    }else{
        feb_target  =   0;
    }

    if(!isNaN(mar_target) && mar_target != ''){
        mar_target  =   mar_target;
    }else{
        mar_target  =   0;
    }

    var totalrow_target = (parseFloat(apr_target) + parseFloat(may_target) + parseFloat(jun_target) + parseFloat(jul_target) + parseFloat(aug_target) + parseFloat(sep_target) + parseFloat(oct_target) +
                          parseFloat(nov_target) + parseFloat(dec_target) + parseFloat(jan_target) + parseFloat(feb_target) + parseFloat(mar_target)).toFixed(2);
    $("#divtarget_total_"+cnt).val(parseFloat(totalrow_target).toFixed(2));

    //##################### Division Column ########################
    var apr_target_clm = 0;
    var may_target_clm = 0;
    var jun_target_clm = 0;
    var jul_target_clm = 0;
    var aug_target_clm = 0;
    var sep_target_clm = 0;
    var oct_target_clm = 0;
    var nov_target_clm = 0;
    var dec_target_clm = 0;
    var jan_target_clm = 0;
    var feb_target_clm = 0;
    var mar_target_clm = 0;

    
    for(var j=1; j<= totalrow; j++){

        var apr_target_clmnval = $("#apr_target_"+j).val();
        var may_target_clmnval = $("#may_target_"+j).val();
        var jun_target_clmnval = $("#jun_target_"+j).val();
        var jul_target_clmnval = $("#jul_target_"+j).val();
        var aug_target_clmnval = $("#aug_target_"+j).val();
        var sep_target_clmnval = $("#sep_target_"+j).val();
        var oct_target_clmnval = $("#oct_target_"+j).val();
        var nov_target_clmnval = $("#nov_target_"+j).val();
        var dec_target_clmnval = $("#dec_target_"+j).val();
        var jan_target_clmnval = $("#jan_target_"+j).val();
        var feb_target_clmnval = $("#feb_target_"+j).val();
        var mar_target_clmnval = $("#mar_target_"+j).val();


        if(!isNaN(apr_target_clmnval) && apr_target_clmnval != ''){
            apr_target_clmnval  =   apr_target_clmnval;
        }else{
            apr_target_clmnval  =   0;
        }
        

        if(!isNaN(may_target_clmnval) && may_target_clmnval != ''){
            may_target_clmnval  =   may_target_clmnval;
        }else{
            may_target_clmnval  =   0;
        }
        
        if(!isNaN(jun_target_clmnval) && jun_target_clmnval != ''){
            jun_target_clmnval  =   jun_target_clmnval;
        }else{
            jun_target_clmnval  =   0;
        }

        if(!isNaN(jul_target_clmnval) && jul_target_clmnval != ''){
            jul_target_clmnval  =   jul_target_clmnval;
        }else{
            jul_target_clmnval  =   0;
        }

        if(!isNaN(aug_target_clmnval) && aug_target_clmnval != ''){
            aug_target_clmnval  =   aug_target_clmnval;
        }else{
            aug_target_clmnval  =   0;
        }

        if(!isNaN(sep_target_clmnval) && sep_target_clmnval != ''){
            sep_target_clmnval  =   _clmnval;
        }else{
            sep_target_clmnval  =   0;
        }

        if(!isNaN(oct_target_clmnval) && oct_target_clmnval != ''){
            oct_target_clmnval  =   oct_target_clmnval;
        }else{
            oct_target_clmnval  =   0;
        }

        if(!isNaN(nov_target_clmnval) && nov_target_clmnval != ''){
            nov_target_clmnval  =   nov_target_clmnval;
        }else{
            nov_target_clmnval  =   0;
        }

        if(!isNaN(dec_target_clmnval) && dec_target_clmnval != ''){
            dec_target_clmnval  =   dec_target_clmnval;
        }else{
            dec_target_clmnval  =   0;
        }

        if(!isNaN(jan_target_clmnval) && jan_target_clmnval != ''){
            jan_target_clmnval  =   jan_target_clmnval;
        }else{
            jan_target_clmnval  =   0;
        }

        if(!isNaN(feb_target_clmnval) && feb_target_clmnval != ''){
            feb_target_clmnval  =   feb_target_clmnval;
        }else{
            feb_target_clmnval  =   0;
        }

        if(!isNaN(mar_target_clmnval) && mar_target_clmnval != ''){
            mar_target_clmnval  =   mar_target_clmnval;
        }else{
            mar_target_clmnval  =   0;
        }

        apr_target_clm  = (parseFloat(apr_target_clm)  + parseFloat(apr_target_clmnval)).toFixed(2);
        may_target_clm  = (parseFloat(may_target_clm) + parseFloat(may_target_clmnval)).toFixed(2);
        jun_target_clm  = (parseFloat(jun_target_clm) + parseFloat(jun_target_clmnval)).toFixed(2);
        jul_target_clm  = (parseFloat(jul_target_clm) + parseFloat(jul_target_clmnval)).toFixed(2);
        aug_target_clm  = (parseFloat(aug_target_clm) + parseFloat(aug_target_clmnval)).toFixed(2);
        sep_target_clm  = (parseFloat(sep_target_clm) + parseFloat(sep_target_clmnval)).toFixed(2);
        oct_target_clm  = (parseFloat(oct_target_clm) + parseFloat(oct_target_clmnval)).toFixed(2);
        nov_target_clm  = (parseFloat(nov_target_clm) + parseFloat(nov_target_clmnval)).toFixed(2);
        dec_target_clm  = (parseFloat(dec_target_clm) + parseFloat(dec_target_clmnval)).toFixed(2);
        jan_target_clm  = (parseFloat(jan_target_clm) + parseFloat(jan_target_clmnval)).toFixed(2);
        feb_target_clm  = (parseFloat(feb_target_clm) + parseFloat(feb_target_clmnval)).toFixed(2);
        mar_target_clm  = (parseFloat(mar_target_clm) + parseFloat(mar_target_clmnval)).toFixed(2);        
    }

    $("#aprtarget_total").val((parseFloat(apr_target_clm)).toFixed(2));
    $("#maytarget_total").val((parseFloat(may_target_clm)).toFixed(2));
    $("#juntarget_total").val((parseFloat(jun_target_clm)).toFixed(2));
    $("#jultarget_total").val((parseFloat(jul_target_clm)).toFixed(2));
    $("#augtarget_total").val((parseFloat(aug_target_clm)).toFixed(2));
    $("#septarget_total").val((parseFloat(sep_target_clm)).toFixed(2));
    $("#octtarget_total").val((parseFloat(oct_target_clm)).toFixed(2));
    $("#novtarget_total").val((parseFloat(nov_target_clm)).toFixed(2));
    $("#dectarget_total").val((parseFloat(dec_target_clm)).toFixed(2));
    $("#jantarget_total").val((parseFloat(jan_target_clm)).toFixed(2));
    $("#febtarget_total").val((parseFloat(feb_target_clm)).toFixed(2));
    $("#martarget_total").val((parseFloat(mar_target_clm)).toFixed(2));

    var finaltarget =   (parseFloat(apr_target_clm) + parseFloat(may_target_clm) + parseFloat(jun_target_clm) + parseFloat(jul_target_clm) + parseFloat(aug_target_clm) +
                        parseFloat(sep_target_clm) + parseFloat(oct_target_clm) + parseFloat(nov_target_clm) + parseFloat(dec_target_clm) + parseFloat(jan_target_clm) + parseFloat(feb_target_clm) + parseFloat(mar_target_clm)).toFixed(2);
    $("#finaltarget").val(finaltarget);
    $("#total_target").val(finaltarget);
    
});

$('#unit').change(function() {
    $('#tab').hide();
});

</script>
@endpush