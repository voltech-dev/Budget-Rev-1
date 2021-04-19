@extends('layouts.main')

@section('content')

<?php
$sales =App\Models\Sale::get();
?>
<style>
td {
    align: center;
    font-size:14px;
}
.text-center {
  text-align: center;
}
</style>
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">

         <nav aria-label="breadcrumb">
           <h3>Salesorder List</h3>
        </nav>
    </div>
</div>
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
                            @foreach($sales as $sale)
                            <tr>
                                <td>{{$sale->id}}</td>
                                <td><a href="{{url('/sales_view/'.$sale->Company_name)}}">{{$sale->Company_name}}</td>
                                <td>{{$sale->financial_year}}</td>
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