@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="row">
    <div class="col-md-6">
        <h3>Unit List</h3>
    </div>
    <!-- <div class="col-md-6" style=text-right>
        <form action="{{url('/unitstore')}}" method="POST" role="search">
            @csrf

            <div class="input-group">
                <input type="text" class="form-control" name="sales" placeholder="Search">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default" style="border: 1px solid #dee2e6">
                        <i class="fas fa-search"></i>
                    </button>
                </span>

            </div>
        </form>
    </div> -->
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
                                <th>Company Name</th>
                                <th>Unit</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody><?php $i=0; $i++; ?>
                            @foreach($users as $sale)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><a
                                        href="{{url('/sales_view/'.$sale->Company_name.'/'.$sale->region.'/'.$sale->financial_year)}}">{{$sale->Company_name}}</a>
                                </td>
                                <td>{{$sale->financial_year}}</td>
                                
                                <td>{{$sale->region}}</td>
                                <td> <a href="{{ url('/sales_edit/'.$sale->Company_name.'/'.$sale->region.'/'.$sale->financial_year) }}"
                                        class="btn btn-sm btn-white text-success mr-2"><i
                                            class="far fa-edit mr-1"></i></a></td>

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