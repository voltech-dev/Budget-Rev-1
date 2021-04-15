@extends('layouts.main')

@section('content')

<?php
$turnover =App\Models\Turnover::get();
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
                            @foreach($turnover as $turn)
                            <tr>
                                <td>{{$turn->id}}</td>
                                <td><a href="{{url('/turn_view/'.$turn->Company_name)}}">{{$turn->Company_name}}</td>
                                <td>{{$turn->division}}</td>
                                <td>{{$turn->unit}}</td>
                                <td class="text-center">
                                <a href="{{ url('/turn_edit/'.$turn->id) }}"
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
<button onclick="location.href='{{ url('/turnover/') }}'" style="text-center">
    Add Turnover</button>
</div>

@endsection