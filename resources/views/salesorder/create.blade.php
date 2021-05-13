@extends('layouts.main')
@section('header')
<?php
$company=DB::table('company')
->get();
$fin_year=DB::table('financial_year')
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
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/divisionstore')}}" method="POST">
                @csrf
                <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                        <div class="col-sm-3">
                            <select name="company_name" class="form-control form-control-sm" id="company_name">
                                <option selected disabled>--Select--</option>
                                @foreach($company as $comp)
                                <option value="{{$comp->id}}">{{$comp->company_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                        <div class="col-sm-3">
                            <select name="unit" class="form-control form-control-sm" id="unit">
                                <option selected disabled>--Select Unit--</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
                        <div class="col-md-3">
                            <select name="financial_year" class="form-control form-control-sm" id="financial_year">
                                <option selected disabled>--Select--</option>
                                @foreach($fin_year as $fy)
                                <option value="{{$fy->financial_year}}">{{$fy->financial_year}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-sm" id="add">Add</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">


                            <div class="table-responsive" id="tab">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Division</th>
                                            <th colspan="2">April</th>
                                            <th colspan="2">May</th>
                                            <th colspan="2">June</th>
                                            <th colspan="2">July</th>
                                            <th colspan="2">August</th>
                                            <th colspan="2">September</th>
                                            <th colspan="2">October</th>
                                            <th colspan="2">November</th>
                                            <th colspan="2">December</th>
                                            <th colspan="2">Jan</th>
                                            <th colspan="2">Feb</th>
                                            <th colspan="2">March</th>
                                            <th colspan="2">Target</th>
                                            <th colspan="2">Actual</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                            <td>Target</td>
                                            <td>Actual</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="div" name="div"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                            <td id="text" name="text"></td>
                                        </tr>
                                        <tr>
                                            <td id="total1" name="total1">Total</td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="text" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>
                                            <td id="total" name="total"></td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div><br>


                    <div class="form-group row">

                        <div class="col-sm-12">
                            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <button type="submit" class="btn btn-outline-success btn-sm"><i data-feather="check"
                                        class="mr-2"></i>Save</button>
                            </div>
                        </div>
                    </div>

            </form>
        </div>
    </div>
    <!-- </div>
    </div>-->
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $('#tab').hide();
})
$('#company_name').change(function(event) {
    var company_name = $('#company_name').val();
    $.ajax({
        type: "GET",
        url: "{{url('/companyid')}}",
        data: {
            company_name: company_name
        },
        dataType: 'json',
        success: function(data) {
            $('select[name="unit"]').empty();
            $.each(data, function(key, value) {
                $('select[name="unit"]').append('<option value="' + key + '">' + value +
                    '</option>');

            });
        },
    });
});
$('#add').click(function() {
    $('#tab').show();
    var unit = $('#unit').val();
    console.log(unit);
    $.ajax({
        type: "GET",
        url: "{{url('/divisionid')}}",
        data: {
            unit: unit
        },
        dataType: 'json',
        success: function(data) {
            console.log(data);
            $('td[name="div"]').empty();
            $.each(data, function(key, value) {
                $('td[name="div"]').append('<option value="' + key + '">' + value );
                $('td[name="text"]').append(
                    '<input type="text" style="width:60px" name="apr_target" id="apr_target" >'
                );
               
            });
            $('td[name="total"]').append(
                    '<input type="text" style="width:60px" name="total" id="total" >'
                );
            
        },
    });

});
$('#text').keyup(function(){
    var sum=0;
  $('#text').each(function(){
      
  });

});
</script>
@endpush