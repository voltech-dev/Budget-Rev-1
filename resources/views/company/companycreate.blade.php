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

                            </div>


                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                    <a href="{{url('/companylist')}}" class="btn btn-outline-light btn-sm">
                                        Cancel</a>
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