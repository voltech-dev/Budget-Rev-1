@extends('layouts.main')

@section('content')
<?php
$company=DB::table('company')
->get();
?>

<!-- Page Header -->

<!-- /Page Header -->

<div class="row">
    <div class="col-md-12">

        <form action="{{ url('/collectionupdate/'.$collect->id) }}" method="POST">
            @csrf
            <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                    <div class="col-sm-3">
                    <select id="company_name" class="form-control form-control-sm" name="company_name">
                                        <option>--Select Company--</option>
                                    @foreach($company as $comp)
                                        <option value="{{$comp->company_name}}">{{$comp->company_name}}
                                        </option>

                                        @endforeach
                                    </select>
                        <!-- <input type="text" class="form-control form-control-sm" name="company_name"
                                        id="company_name" placeholder="Enter Company Name"> -->
                    </div>
                    <label class="col-sm-3 col-form-label col-form-label-sm">Division</label>
                    <div class="col-sm-3">
                        <select id="division" class="form-control form-control-sm" name="division">
                            <option>--Select Division--</option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                    <div class="col-sm-3">
                        <select id="unit" class="form-control form-control-sm" name="unit">
                            <option value="{{$collect->unit}}" selected>{{$collect->unit}}</option>
                            <option disabled>Select Unit..</option>
                            <option id=" div" name="div" disabled>Unit</option>
                            <option id="div1" name="div1" value=1>A</option>
                            <option id="div2" name="div2" value=1>B</option>
                            <option id="div1" name="div1" value=2>C</option>
                            <option id="div2" name="div2" value=2>D</option>
                        </select>
                    </div>
                    <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
                    <div class="col-sm-3">
                        <select name="financial_year" class="form-control form-control-sm" id="financial_year">
                            <option value="{{$collect->financial_year}}" selected>{{$collect->financial_year}}</option>
                            <option disabled>Select Financial Year</option>
                            <option value="2020-2021">2020-2021</option>
                            <option value="2021-2022">2021-2022</option>
                            <option value="2022-2023">2022-2023</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2024-2025">2024-2025</option>
                            <option value="2025-2026">2025-2026</option>
                            <option value="2026-2027">2026-2027</option>
                            <option value="2027-2028">2027-2028</option>
                            <option value="2028-2029">2028-2029</option>
                            <option value="2029-2030">2029-2030</option>
                        </select>
                    </div>
                </div>
            </div>
            <div data-label="End Client" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                <label class="col-form-label col-form-label-sm">Target</label>
                <div class="form-group row">
                    <div class="form-group  col-sm-3">
                        <label class="col-form-label col-form-label-sm">Q1</label>
                        <input type="text" class="form-control form-control-sm" name="q1" id="q1"
                            placeholder="Enter Q1 Value" value="{{$collect->target_q1}}">
                    </div>
                    <div class="form-group  col-sm-3">
                        <label class="col-form-label col-form-label-sm">Q2</label>
                        <input type="text" class="form-control form-control-sm" name="q2" id="q2"
                            placeholder="Enter Q2 Value" value="{{$collect->target_q2}}">
                    </div>
                    <div class="form-group  col-sm-3">
                        <label class="col-form-label col-form-label-sm">Q3</label>
                        <input type="text" class="form-control form-control-sm" name="q3" id="q3"
                            placeholder="Enter Q3 Value" value="{{$collect->target_q3}}">
                    </div>
                    <div class="form-group  col-sm-3">
                        <label class="col-form-label col-form-label-sm">Q4</label>
                        <input type="text" class="form-control form-control-sm" name="q4" id="q4"
                            placeholder="Enter Q4 Value" value="{{$collect->target_q4}}">
                    </div>
                </div>
            </div>
            <div data-label="End Client" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                <label class="col-form-label col-form-label-sm">Actual</label>
                <div class="form-group row">
                    <div class="form-group  col-sm-3">
                        <label class="col-form-label col-form-label-sm">Q1</label>
                        <input type="text" class="form-control form-control-sm" name="aq1" id="aq1"
                            placeholder="Enter Q1 Value" value="{{$collect->actual_q1}}">
                    </div>
                    <div class="form-group  col-sm-3">
                        <label class="col-form-label col-form-label-sm">Q2</label>
                        <input type="text" class="form-control form-control-sm" name="aq2" id="aq2"
                            placeholder="Enter Q2 Value" value="{{$collect->actual_q2}}">
                    </div>
                    <div class="form-group  col-sm-3">
                        <label class="col-form-label col-form-label-sm">Q3</label>
                        <input type="text" class="form-control form-control-sm" name="aq3" id="aq3"
                            placeholder="Enter Q3 Value" value="{{$collect->actual_q3}}">
                    </div>
                    <div class="form-group  col-sm-3">
                        <label class="col-form-label col-form-label-sm">Q4</label>
                        <input type="text" class="form-control form-control-sm" name="aq4" id="aq4"
                            placeholder="Enter Q4 Value" value="{{$collect->actual_q4}}">
                    </div>
                </div>
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
                $('select[name="division"]').append('<option value="' + key + '">' + value +
                    '</option>');
            });
        },
    });
});
</script>
@endpush