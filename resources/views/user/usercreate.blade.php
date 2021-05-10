@extends('layouts.main')
@section('header')
<?php
$company = DB::table('company')
->get();
?>

<h3>User</h3>
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



<!-- <form action="{{url('/salesorder')}}" method="POST"> -->
@csrf
<div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
        <div class="col-sm-3">
            <select id="company_name" class="form-control form-control-sm" name="company_name">
                <option>--Select Company--</option>
                @foreach($company as $comp)
                <option value="{{$comp->company_name}}">{{$comp->company_name}}</option>
                @endforeach
            </select>

        </div>
        <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
        <div class="col-sm-3">
            <select id="unit" class="form-control form-control-sm" name="unit">
              
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label col-form-label-sm">Division</label>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" name="division" id="division">
        </div>
        <label class="col-sm-3 col-form-label col-form-label-sm">Name</label>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" name="name" id="name">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label col-form-label-sm">Designation</label>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" name="designation" id="designation">
        </div>
        <label class="col-sm-3 col-form-label col-form-label-sm">Email</label>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" name="email" id="email">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label col-form-label-sm">Password</label>
        <div class="col-sm-3">
            <input type="password" class="form-control form-control-sm" name="password" id="password">
        </div>
    </div>
    </form>

    @endsection
    @push('scripts')
    <script>
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
            console.log(data);
            $('select[name="unit"]').empty();
            $.each(data, function(key, value) {        
                $('select[name="unit"]').append('<option value="' +key + '">' + value +
                    '</option>');
            });
        },
    });
});    </script>
    @endpush