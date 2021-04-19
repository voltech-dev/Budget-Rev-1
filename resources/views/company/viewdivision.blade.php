@extends('layouts.main')
@section('header')
<?php
$company=DB::table('company')
->get();
?>
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">

    </div>
</div>
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
<div class="container-fluid">
    <!-- <div class="row">
        <div class="col-md-12">-->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('/divisionstore')}}" method="POST">
                        @csrf
                        <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                                <div class="col-sm-3">
                                    <select name="company_name" class="form-control form-control-sm" id="company_name">
                                        @foreach($company as $comp)
                                        <option value="{{$comp->company_name}}" selected>{{$comp->company_name}}
                                        </option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                        <button type="button" id="view" class="btn btn-primary btn-sm">View</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="table">
                                <div class="col-sm-12">
                                    <div class="card card-table">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-center table-hover datatable">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Division</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="division" name="division">
                                                        <tr>
                                                            <!-- <td>D1</td> -->
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- </div>
    </div>-->
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $('#table').hide();

});
$('#view').click(function() {
    $('#table').show();
});
$('#company_name').change(function(event) {
    var company_name = $('#company_name').val();
    console.log(company_name);
    $.ajax({
        type: "GET",
        url: "{{url('/compdivision')}}",
        data: {
            company_name: company_name
        },
        dataType: 'json',
        success: function(data) {
            $('tbody[name="division"]').empty();
            $.each(data, function(key, value) {
                $('tbody[name="division"]').append('<tr>'+'<td>'+'<a href="{{url('/divisionview/'.$div->division_name)}}">' + value + '</td>' +'<td class="text-center">'+'<a href="" class="btn btn-sm btn-white text-success mr-2">' +'<i class="far fa-edit mr-1">'+'</i>'+'</a>'+'</td >'+'</tr>');

            });
        },
    });
});
</script>
@endpush