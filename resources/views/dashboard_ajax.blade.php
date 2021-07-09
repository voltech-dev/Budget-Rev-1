@extends('layouts.main')
@section('header')
<!-- <?php
$company=DB::table('br_company')
->get();
?> -->
@endsection

@section('content')
<div class="container">

        <div class="col-ms-12">
            <div class="form-group-row">
               {{$unit}}
            </div>
  
</div>
<br>

    @endsection
    