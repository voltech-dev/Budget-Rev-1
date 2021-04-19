@extends('layouts.main')

@section('content')

<!-- Page Header -->

<!-- /Page Header -->

<div class="row">
    <div class="col-md-12">

        <form action="{{ url('/divupdate/'.$div->id) }}" method="POST">
            @csrf
            @csrf
            <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                    <div class="col-sm-3">
                        <select name="company_name" class="form-control form-control-sm" id="company_name">
                            <option selected disabled>--Select--</option>
                            @foreach($company as $comp)
                            <option value="{{$comp->id}}" selected disabled>{{$comp->company_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-sm-3 col-form-label col-form-label-sm">Division</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" name="division" id="division" value="{{$div->division_name}}" readonly>
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
</script>
@endpush