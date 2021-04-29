@extends('layouts.main')
@section('header')

<!-- begin::page-header -->
<div class="card-header">
    <h3>Salesorder</h3>
</div>
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">

        <nav aria-label="breadcrumb">

        </nav>
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
<!-- Page Header -->

<!-- /Page Header -->

<div class="row">
    <div class="col-md-12">

        <form action="{{ url('/turnupdate/'.$target->id) }}" method="POST">
            @csrf
            <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                    <div class="col-sm-3">
                        <select id="company_name" class="form-control form-control-sm" name="company_name" readonly>

                            <option value="{{$turn->Company_name}}" selected readonly>{{$turn->Company_name}}
                            </option>
                            <option disabled>--Select Company--</option>

                        </select>

                    </div>
                    <label class="col-sm-3 col-form-label col-form-label-sm">Division</label>
                    <div class="col-sm-3">
                        <select id="division" class="form-control form-control-sm" name="division" readonly>

                            <option value="{{$turn->division}}" selected>{{$turn->division}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" name="unit" id="unit"
                            value="{{$turn->unit}}" readonly>
                    </div>
                    <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
                    <div class="col-sm-3">
                        <select name="financial_year" class="form-control form-control-sm" id="financial_year" readonly>
                            <option value="{{$turn->financial_year}}" selected>{{$turn->financial_year}}</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Region</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" name="region" id="region"
                            value="{{$turn->region}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <h4>Target</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center table-hover datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Month</th>
                                                <th>Target</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <select id="month" name="month" readonly>
                                                        <option selected>{{$target->month}}</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="December">December</option>
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" name="amount" id="amount"
                                                        value="{{$target->amount}}"></td>


                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>



            </div>


            <div class="form-group row">
                <div class="col-sm-6">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        <a class="btn btn-outline-light btn-sm" href="">
                            <i data-feather="chevrons-left" class="mr-2"></i>Cancel</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                        <button type="submit" class="btn btn-outline-success btn-sm"><i data-feather="check"
                                class="mr-2"></i>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $('#financial_year').select2();
    $('#country').select2();
    $('#clientname').select2();
    $('#myTable').DataTable({});
});
// Material Select Initialization
$(document).ready(function() {
    $('.mdb-select').materialSelect();
});
var $select1 = $('#division'),
    $select2 = $('#unit'),
    $options = $select2.find('option');

$select1.on('change', function() {
    $select2.html($options.filter('[value="' + this.value + '"]'));
}).trigger('change');
$('#company_name').change(function(event) {
    var company_name = $('#company_name').val();
    console.log(company_name);
    $.ajax({
        type: "GET",
        url: "{{url('/companyid')}}",
        data: {
            company_name: company_name
        },
        dataType: 'json',
        success: function(data) {
            $('select[name="division"]').empty();
            $.each(data, function(key, value) {
                $('select[name="division"]').append('<option value="' + key + '"+'
                    selected '>') + value + '</option>';

            });
        },
    });
});
</script>
@endpush