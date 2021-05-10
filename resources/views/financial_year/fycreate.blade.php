@extends('layouts.main')
@section('header')
<?php

?>
<h3>Financial Year</h3>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@endif



<form action="{{url('/fystore')}}" method="POST">
    @csrf
    <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
            <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" name="fy" id="fy">
            </div>

        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <button type="submit" class="btn btn-outline-success btn-sm"><i data-feather="check"
                            class="mr-2"></i>Save</button>
                </div>
            </div>
        </div>


</form>

@endsection
@push('scripts')
<script>

</script>
@endpush