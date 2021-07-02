@extends('layouts.main')

@section('content')
<?php
$fy =App\Models\financial_year::get();
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

<div class="row">
    <div class="col-sm-12">

        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>SI</th>
                                <th>Financial Year</th>
                                <th>Actions</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody><?php $i=0; $i++; ?>
                            @foreach($fy as $financialyears)
                           
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$financialyears->financial_year}}</td>  
                                <td> <a href="{{ url('/fy_edit/'.$financialyears->id) }}"
                                        class="btn btn-sm btn-white text-success mr-2"><i
                                            class="fas fa-edit mr-1"></i></a><a
                                        href="{{ url('/finyear_destroy/'.$financialyears->id) }}"
                                        class="btn btn-sm btn-white text-success mr-2"><i
                                            class="far fa-trash-alt"></i></a>
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
<button onclick="location.href='{{ url('/fycreate/') }}'" style="text-center">
    Add Financial Year</button>
</div>

@endsection