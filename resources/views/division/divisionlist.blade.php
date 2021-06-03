@extends('layouts.main')

@section('content')

<style>
td {
    align: center;
    font-size: 14px;
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
                                <th>Company</th>
                                <th>Division</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php  $i=0; $i++; ?>
                            @foreach($division as $div)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$div->company_name}}</td>
                                <td><a href="{{url('/divisionview/'.$div->id.'/'.$div->division_name)}}">{{$div->division_name}}</td>
                                <td><a href="{{ url('/divisionedit/'.$div->id.'/'.$div->division_name) }}" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i></a></td>
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
    <button onclick="location.href='{{ url('/division/') }}'" style="text-center">
        Add Division</button>
</div>

@endsection