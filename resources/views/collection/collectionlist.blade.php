@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="row">
    <div class="col-md-6">
        <h3>Collection List</h3>
    </div>
    <div class="col-md-6" style=text-right>
        <form action="{{url('/searchcollection')}}" method="POST" role="search">
            @csrf

            <div class="input-group">
                <input type="text" class="form-control" name="collection" placeholder="Search">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default" style="border: 1px solid #dee2e6">
                        <i class="fas fa-search"></i>
                    </button>
                </span>

            </div>
        </form>
    </div>
</div>



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
                                <th>FY</th>
                                <th>Unit</th>
                                <th>Division</th>
                                <th>Region</th>
                                <th>Month</th>
                                <th>Target</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $collection)
                            <tr>
                                <td>{{$collection->id}}</td>
                                <td><a href="{{url('/collection_view/'.$collection->id)}}">{{$collection->financial_year}}</td>
                                <td>{{$collection->unit}}</td>
                                <td>{{$collection->division}}</td>
                                <td>{{$collection->region}}</td>
                                <td>{{$collection->month}}</td>
                                <td>{{$collection->amount}}</td>
                                <td> <a href="{{ url('/collection_edit/'.$collection->id) }}"
                                        class="btn btn-sm btn-white text-success mr-2"><i
                                            class="far fa-edit mr-1"></i></a></td>
                                <td> </td>

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