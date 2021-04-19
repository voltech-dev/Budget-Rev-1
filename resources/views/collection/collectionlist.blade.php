@extends('layouts.main')

@section('content')

<?php
$collection =App\Models\Collection::get();
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
           <h3>Collection List</h3>
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