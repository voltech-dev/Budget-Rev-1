@extends('layouts.main')
@section('header')


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
                        <tbody><?php $i=0; $i++; ?>
                            @foreach($collection as $collection)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><a href="{{url('/collection_view/'.$collection->id.'/'.$collection->unit_id) }}">{{$collection->company->company_name}}
                                </td>
                                <td>{{$collection->unit->unit}}</td>
                                <td>{{$collection->year->financial_year}}</td>
                                <td>{{$collection->granttotal_target}}</td>
                                <td>{{$collection->granttotal_actual}}</td>
                                <td class="text-center"><a href="{{ url('/collection_edit/'.$collection->id.'/'.$collection->unit_id) }}"
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
    <button onclick="location.href='{{ url('/collection_entry/') }}'" style="text-center">
        Add Budget</button>
</div>

@endsection