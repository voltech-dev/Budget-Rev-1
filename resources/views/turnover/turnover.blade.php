@extends('layouts.main')
@section('header')
<?php

$company = DB::table('company')
    ->get();
?>

<h3>Salesorder</h3>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@endif



<form action="{{url('/turnover')}}" method="POST">
    @csrf
    <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
            <div class="col-sm-3">
                <select id="company_name" class="form-control form-control-sm" name="company_name">
                    <option>--Select Company--</option>
                    @foreach($company as $comp)
                    <option value="{{$comp->company_name}}">{{$comp->company_name}}
                    </option>

                    @endforeach
                </select>
                <!-- <input type="text" class="form-control form-control-sm" name="company_name"
                                        id="company_name" placeholder="Enter Company Name"> -->
            </div>
            <label class="col-sm-3 col-form-label col-form-label-sm">Division</label>
            <div class="col-sm-3">
                <select id="division" class="form-control form-control-sm" name="division">
                    <option>--Select Division--</option>

                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-sm" name="unit" id="unit">
            </div>
            <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
            <div class="col-sm-3">
                <select name="financial_year" class="form-control form-control-sm" id="financial_year">
                    <option value="" selected disabled>select Financial year</option>
                    <option value="2020-2021">2020-2021</option>
                    <option value="2021-2022">2021-2022</option>
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025">2024-2025</option>
                    <option value="2025-2026">2025-2026</option>
                    <option value="2026-2027">2026-2027</option>
                    <option value="2027-2028">2027-2028</option>
                    <option value="2028-2029">2028-2029</option>
                    <option value="2029-2030">2029-2030</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label col-form-label-sm">Region</label>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-sm" name="region" id="region">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-3"><button type="button" class="btn btn-primary btn-sm" id="addtarget">Add
                    Target</button></div>
        </div>
        <div class="temp">
            <div class="form-group row" id="target">

            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        <a class="btn btn-outline-light btn-sm" href="">
                            <i data-feather="chevrons-left" class="mr-2"></i>Cancel</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                        <button type="submit" class="btn btn-outline-success btn-sm"><i data-feather="check"
                                class="mr-2"></i>Save</button>
                    </div>
                </div>
            </div>
</form>

@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $('#financial_year').select2();
    $('#country').select2();
    $('#clientname').select2();
    $('#myTable').DataTable({});

});
// Material Select Initialization
$(document).ready(function() {
    $('.mdb-select').materialSelect();
});
var $select1 = $('#division'),
    $select2 = $('#unit'),
    $options = $select2.find('option');

$select1.on('change', function() {
    $select2.html($options.filter('[value="' + this.value + '"]'));
}).trigger('change');
$('#company_name').change(function(event) {
    var company_name = $('#company_name').val();
    console.log(company_name);
    $.ajax({
        type: "GET",
        url: "{{url('/companyid')}}",
        data: {
            company_name: company_name
        },
        dataType: 'json',
        success: function(data) {
            $('select[name="division"]').empty();
            $.each(data, function(key, value) {
                $('select[name="division"]').append('<option value="' + key + '">' + value +
                    '</option>');
            });
        },
    });
});
$('#addtarget').click(function() {
    // var newel = $('.temp:last').clone();
    // console.log(newel);
    // $(newel).insertAfter(".temp:last");
    $('#target').append('<label class="col-sm-3 col-form-label col-form-label-sm">Month</label>' +
        ' <div class="col-sm-3"><select name="month[]" class="form-control form-control-sm" id="month"><option value="selectmonth">--Select Month--</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option><option value="January">January</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div>' +
        ' <label class="col-sm-3 col-form-label col-form-label-sm">Amount</label><div class="col-sm-3"><input type="text" class="form-control form-control-sm" name="amount[]"id="amount"></div>' +
        '<br>' + '<br>');
});
$('#month').change(function() {

    console.log('month');

});
</script>
@endpush