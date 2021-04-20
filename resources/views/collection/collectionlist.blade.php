@extends('layouts.main')
@section('header')
<?php
$collection=DB::table('collection')
->get();
?>
<!-- begin::page-header -->
<div class="card-header">
<h3>Collection List</h3>
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

<!-- Page Header -->

<!-- /Page Header -->

<!-- Search Filter -->

<!-- /Search Filter -->

<div class="row">
    <div class="col-sm-12">

        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>SI</th>
                                <th>Company Name</th>
                                <th>Financial Year</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($collection as $collect)
                            <tr>
                                <td>{{$collect->id}}</td>
                                <td><a href="{{url('/collection_view/'.$collect->Company_name)}}">{{$collect->Company_name}}</td>
                                <td>{{$collect->financial_year}}</td>
                                <td class="text-center">
                                    <a href="{{ url('/collection_edit/'.$collect->id) }}"
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
<button onclick="location.href='{{ url('/collection/') }}'" style="text-center">
    Add Budget</button>
</div>

@endsection