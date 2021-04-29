@extends('layouts.main')
@section('header')
<?php
$company=DB::table('company')
->get();
?>
<!-- begin::page-header -->
<div class="card-header">
    <h3>Salesorder</h3>
</div>
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">

        <nav aria-label="breadcrumb">

        </nav>
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
<div class="row">
    <div class="col-md-12">

        <form action="{{ url('/turnupdate/'.$target->id) }}" method="POST">
            @csrf
            <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                    <div class="col-sm-3">
                        <select id="company_name" class="form-control form-control-sm" name="company_name" disabled>

                            <option value="{{$turn->Company_name}}" selected readonly>{{$turn->Company_name}}
                            </option>
                            <option disabled>--Select Company--</option>

                        </select>

                    </div>
                    <label class="col-sm-3 col-form-label col-form-label-sm">Division</label>
                    <div class="col-sm-3">
                        <select id="division" class="form-control form-control-sm" name="division">

                            <option value="{{$turn->division}}" selected>{{$turn->division}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                    <div class="col-sm-3">
                        <select id="unit" class="form-control form-control-sm" name="unit" disabled="true">
                            <option value="{{$turn->unit}}" selected>{{$turn->unit}}</option>
                            <option disabled>Select Unit..</option>

                        </select>
                    </div>
                    <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
                    <div class="col-sm-3">
                        <select name="financial_year" class="form-control form-control-sm" id="financial_year"
                            disabled="true">
                            <option value="{{$turn->financial_year}}" selected>{{$turn->financial_year}}</option>
                            <option disabled>Select Financial Year</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Region</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" name="region" id="region"
                            value="{{$turn->region}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center table-hover datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Month</th>
                                                <th>Target</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <select id="month" name="month" readonly>
                                                        <option selected readonly>{{$target->month}}</option>

                                                    </select>
                                                </td>
                                                <td><input type="text" name="amount" id="amount"
                                                        value="{{$target->amount}}" readonly></td>


                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
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
    </div>
</div>
</div>
</div>
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
</script>
@endpush