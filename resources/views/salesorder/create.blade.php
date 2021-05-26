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
                                <option selected disabled>--Select--</option>
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
                                <option value="{{$fy->financial_year}}">{{$fy->financial_year}}</option>
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
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Division</th>
                                            <th colspan="2">April</th>
                                            <th colspan="2">May</th>
                                            <th colspan="2">June</th>
                                            <th colspan="2">July</th>
                                            <th colspan="2">August</th>
                                            <th colspan="2">September</th>
                                            <th colspan="2">October</th>
                                            <th colspan="2">November</th>
                                            <th colspan="2">December</th>
                                            <th colspan="2">Jan</th>
                                            <th colspan="2">Feb</th>
                                            <th colspan="2">March</th>

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

                                        </tr>
                                    </thead>
                                    <tbody name='abc' id='abc'>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-sm" id="get_total">Get Total</button>
                        </div>
                    </div>
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
            $.each(data, function(key, value) {
                $('tbody[name="abc"]').append('<tr>' + '<td id="div" name="div">' + '<option value="' + key +
                    '">' + value + '</td>' + '<td class="apt">' +
                    '<input type="text" style="width:60px" name="apr_target[]" id="apr_target" class="apr_target">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="apr_actual[]" id="apr_actual" class="apr_actual" disabled>' +
                    '</td>' + '<td class="may">' +
                    '<input type="text" style="width:60px" name="may_target[]" id="may_target" class="may_target" >' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="may_actual[]" id="may_actual" class="may_actual" disabled>' +
                    '</td>' + '<td class="june">' +
                    '<input type="text" style="width:60px" name="june_target[]" id="june_target" class="june_target">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="june_actual[]" id="june_actual" class="june_actual" disabled>' +
                    '</td>' + '<td class="july">' +
                    '<input type="text" style="width:60px" name="july_target[]" id="july_target" class="july_target">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="july_actual[]" id="july_actual" class="july_actual" disabled>' +
                    '</td>' + '<td class="aug">' +
                    '<input type="text" style="width:60px" name="aug_target[]" id="aug_target" class="aug_target">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="aug_actual[]" id="aug_actual" class="aug_actual" disabled>' +
                    '</td>' + '<td class="sept">' +
                    '<input type="text" style="width:60px" name="sept_target[]" id="sept_target" class="sept_target">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="sept_actual[]" id="sept_actual" class="sept_actual" disabled>' +
                    '</td>' + '<td class="oct">' +
                    '<input type="text" style="width:60px" name="oct_target[]" id="oct_target" class="oct_target">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="oct_actual[]" id="oct_actual" class="oct_actual" disabled>' +
                    '</td>' + '<td class="nov">' +
                    '<input type="text" style="width:60px" name="nov_target[]" id="nov_target" class="nov_target">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="nov_actual[]" id="nov_actual" class="nov_actual" disabled>' +
                    '</td>' + '<td class="dec">' +
                    '<input type="text" style="width:60px" name="dec_target[]" id="dec_target" class="dec_target">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="dec_actual[]" id="dec_actual" class="dec_actual" disabled>' +
                    '</td>' + '<td class="jan">' +
                    '<input type="text" style="width:60px" name="jan_target[]" id="jan_target" class="jan_target">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="jan_actual[]" id="jan_actual" class="jan_actual" disabled>' +
                    '</td>' + '<td class="feb">' +
                    '<input type="text" style="width:60px" name="feb_target[]" id="feb_target" class="feb_target">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="feb_actual[]" id="feb_actual" class="feb_actual" disabled>' +
                    '</td>' + '<td class="march">' +
                    '<input type="text" style="width:60px" name="march_target[]" id="march_target" class="march_target">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:60px" name="march_actual[]" id="march_actual" class="march_actual" disabled>' +
                    '</td>' + '</tr>');
            });
            $('tbody[name="abc"]').append(
                '<tr>' + '<td>' + 'Total' + '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="aprtarget_total" id="aprtarget_total" >' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="apractual_total" id="apractual_total" disabled>' +
                '<td>' +
                '<input type="text" style="width:60px" name="maytarget_total" id="maytarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="mayactual_total" id="mayactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="junetarget_total" id="junetarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="juneactual_total" id="juneactual_total" disabled>' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="julytarget_total" id="julytarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="julyactual_total" id="julyactual_total" disabled>' +
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
                '<input type="text" style="width:60px" name="marchtarget_total" id="marchtarget_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:60px" name="marchactual_total" id="marchactual_total" disabled>' +
                '</td>' + '</tr>'
            );
        },
    });
    $('#finaltotal').show();
    $('#get_total').show();
});
var sum = 0;
//April
$(document).on('keyup', '.apt', function() {
    var sum = 0;
    $('.apr_target').each(function() {
        sum += Number($(this).val());
        $('#aprtarget_total').val(sum);
        console.log(sum);
    });
});
//May
$(document).on('keyup', '.may', function() {
    var sum = 0;
    $('.may_target').each(function() {
        sum += Number($(this).val());
        $('#maytarget_total').val(sum);
        console.log(sum);
    });
});
//June
$(document).on('keyup', '.june', function() {
    var sum = 0;
    $('.june_target').each(function() {
        sum += Number($(this).val());
        $('#junetarget_total').val(sum);
        console.log(sum);
    });
});
//July
$(document).on('keyup', '.july', function() {
    var sum = 0;
    $('.july_target').each(function() {
        sum += Number($(this).val());
        $('#julytarget_total').val(sum);
        console.log(sum);
    });
});
//August
$(document).on('keyup', '.aug', function() {
    var sum = 0;
    $('.aug_target').each(function() {
        sum += Number($(this).val());
        $('#augtarget_total').val(sum);
        console.log(sum);
    });
});
//September
$(document).on('keyup', '.sept', function() {
    var sum = 0;
    $('.sept_target').each(function() {
        sum += Number($(this).val());
        $('#septarget_total').val(sum);
        console.log(sum);
    });
});
//October
$(document).on('keyup', '.oct', function() {
    var sum = 0;
    $('.oct_target').each(function() {
        sum += Number($(this).val());
        $('#octtarget_total').val(sum);
        console.log(sum);
    });
});
//November
$(document).on('keyup', '.nov', function() {
    var sum = 0;
    $('.nov_target').each(function() {
        sum += Number($(this).val());
        $('#novtarget_total').val(sum);
        console.log(sum);
    });
});
//December
$(document).on('keyup', '.dec', function() {
    var sum = 0;
    $('.dec_target').each(function() {
        sum += Number($(this).val());
        $('#dectarget_total').val(sum);
        console.log(sum);
    });
});
//January
$(document).on('keyup', '.jan', function() {
    var sum = 0;
    $('.jan_target').each(function() {
        sum += Number($(this).val());
        $('#jantarget_total').val(sum);
        console.log(sum);
    });
});
//Feb
$(document).on('keyup', '.feb', function() {
    var sum = 0;
    $('.feb_target').each(function() {
        sum += Number($(this).val());
        $('#febtarget_total').val(sum);
        console.log(sum);
    });
});
//March
$(document).on('keyup', '.march', function() {
    var sum = 0;
    $('.march_target').each(function() {
        sum += Number($(this).val());
        $('#marchtarget_total').val(sum);
       
    });
});
$('#get_total').click(function(){
    $('#total_target').val(Number($('#apr_target').val()) + Number($('#may_target').val()) +
                Number($('#june_target').val()) + Number($('#july_target').val()) + Number($(
                    '#aug_target').val()) + Number($('#sept_target').val()) + Number($(
                    '#oct_target').val()) + Number($('#nov_target').val()) + Number($('#dec_target')
                    .val()) + Number($('#jan_target').val()) + Number($('#feb_target').val()) +
                Number($(
                    '#march_target').val()));
});
</script>
@endpush