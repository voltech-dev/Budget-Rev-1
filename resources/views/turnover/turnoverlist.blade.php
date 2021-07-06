@extends('layouts.main')
@section('header')


<!-- begin::page-header -->
<h3>Turnover List</h3>
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
                            <!-- Fetch values from turnover table -->
                            @foreach($turnover as $turn)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><a href="{{url('/turnover_view/'.$turn->id.'/'.$turn->unit_id)}}">{{$turn->company->company_name}}
                                </td>
                                <td>{{$turn->unit->unit}}</td>
                                <td>{{$turn->year->financial_year}}</td>
                                <td>{{$turn->granttotal_target}}</td>
                                <td>{{$turn->granttotal_actual}}</td>
                                <td class="text-center">
                                    <a href="{{ url('/turnover_edit/'.$turn->id.'/'.$turn->unit_id) }}"
                                        class="btn btn-sm btn-white text-success mr-2"><i
                                            class="far fa-edit mr-1"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Endof fetch values turnover table -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="text-center">
    <button onclick="location.href='{{ url('/turnover_entry/') }}'" style="text-center">
        Add Budget</button>
</div>

@endsection