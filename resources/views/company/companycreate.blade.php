@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">

        <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">BMS</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Enquiry List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav> -->
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
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('/company')}}" method="POST">
                        @csrf
                        <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                                <div class="col-sm-3">

                                    <input type="text" class="form-control form-control-sm" name="company_name"
                                        id="company_name">
                                </div>
                                <label class="col-sm-3 col-form-label col-form-label-sm">Code</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" name="code"
                                        id="code">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Contact</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" name="contact"
                                        id="contact">
                                </div>
                                <label class="col-sm-3 col-form-label col-form-label-sm">Status</label>
                                <div class="col-sm-3">
                                    <select name="status" class="form-control form-control-sm" id="status">
                                        <option value="" selected disabled>select status</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Address</label>
                                <div class="col-sm-3">
                                    <textarea class="form-control mb-4" placeholder="Address" rows=3 id="address" name="address"></textarea>
                                </div>

                            </div>
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
    <!-- </div>
    </div>-->
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
var $select1 = $('#division'),
    $select2 = $('#unit'),
    $options = $select2.find('option');

$select1.on('change', function() {
    $select2.html($options.filter('[value="' + this.value + '"]'));
}).trigger('change');
</script>
@endpush