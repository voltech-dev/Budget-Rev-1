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

        <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm"><b>Company Name</b>:</label>
                <div class="col-md-3">{{$companyname}}</div>
                <label class="col-sm-3 col-form-label col-form-label-sm"><b>Financial Year</b>:</label>
                <div class="col-md-3">{{$financialyear}}</div>
                <label class="col-sm-3 col-form-label col-form-label-sm"><b>Region</b>:</label>
                <div class="col-md-3">{{$region}}</div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Unit</th>
                                            <th>Division</th>
                                            <th>Actual</th>
                                            <th>Month</th>
                                            <th>Target</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sales as $ss)
                                        <tr>
                                            <td>{{$ss->unit}}</td>
                                            <td>{{$ss->division}}</td>
                                            <td><input type="text" name="actual" id="actual" value="{{$ss->actual}}">
                                            </td>
                                            <td><select id="month" name="month" readonly>
                                                    <option selected>{{$ss->month}}</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                </select></td>
                                            <td>{{$ss->amount}}</td>
                                            <td><i class="far fa-edit mr-1"></i></td>

                                        </tr>
                                        @endforeach
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