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
                                <th>Division</th>
                                <th>Unit</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($collection as $collect)
                            <tr>
                                <td>{{$collect->id}}</td>
                                <td><a href="{{url('/collection_view/'.$collect->Company_name)}}">{{$collect->Company_name}}</td>
                                <td>{{$collect->division}}</td>
                                <td>{{$collect->unit}}</td>
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
    Add Collection</button>
</div>

@endsection