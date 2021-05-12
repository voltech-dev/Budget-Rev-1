@extends('layouts.main')
@section('header')
<?php
$sales=DB::table('sales')
->get();
?>
<!-- begin::page-header -->
<div class="card-header">
    <h3>Salesorder List</h3>
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
    <div class="col-sm-12">

        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>SI</th>
                                <th>Company</th>
                                <th>Unit</th>
                                <th>Financial Year</th>
                                <th>Target</th>
                                <th>Actual</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sales as $sale)
                            <tr>
                                <td>{{$sale->id}}</td>
                                <td><a href="{{url('/sales_view/'.$sale->Company_name)}}">{{$sale->Company_name}}</td>
                                <td></td>
                                <td>{{$sale->financial_year}}</td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <a href="{{ url('/sales_edit/'.$sale->id) }}"
                                        class="btn btn-sm btn-white text-success mr-2"><i
                                            class="far fa-edit mr-1"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="text-center">
    <button onclick="location.href='{{ url('/salesorder/') }}'" style="text-center">
        Add Budget</button>
</div>

@endsection