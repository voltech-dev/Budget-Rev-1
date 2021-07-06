@extends('layouts.main')
@section('header')


<!-- begin::page-header -->
<h3>Salesorder List</h3>
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
<!-- Data table css -->
<div class="row">
    <div class="col-sm-12">

        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="example2">
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
                            <!-- Fetch values from sales table in db -->
                            @foreach($sales as $sale)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><a href="{{url('/sales_view/'.$sale->id.'/'.$sale->unit_id) }}">{{$sale->company->company_name}}
                                </td>
                                <td>{{$sale->unit->unit}}</td>
                                <td>{{$sale->year->financial_year}}</td>
                                <td>{{$sale->granttotal_target}}</td>
                                <td>{{$sale->granttotal_actual}}</td>
                                <td class="text-center">
                                    <a href="{{ url('/sales_edit/'.$sale->id.'/'.$sale->unit_id) }}"
                                        class="btn btn-sm btn-white text-success mr-2"><i
                                            class="far fa-edit mr-1"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            <!-- End of fetch values from sales table -->
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