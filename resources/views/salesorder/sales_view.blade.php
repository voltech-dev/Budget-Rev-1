@extends('layouts.main')
@section('header')
<?php
$company=DB::table('company')
->get();
?>
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
<form action="{{url('/salesorder')}}" method="POST">
    <div class="row">
        <div class="col-md-12">

            <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                    <div class="col-sm-3">
                        <select name="company_name" class="form-control form-control-sm" id="company_name" disabled>
                            <option selected>--Select Company--</option>
                            @foreach($company as $comp)
                            <option value="{{ $comp->id }}"
                                {{ ( $comp->id == $sales->Company_name) ? 'selected' : '' }}>
                                {{ $comp->company_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                    <div class="col-sm-3">
                        <select name="unit" class="form-control form-control-sm" id="unit" disabled>
                            <option selected>--Select Unit--</option>
                            @foreach($unit as $un)
                            <option value="{{ $un->id }}" {{ ( $un->id == $sales->unit_id) ? 'selected' : '' }}>
                                {{ $un->unit }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
                    <div class="col-md-3">
                        <select name="financial_year" class="form-control form-control-sm" id="financial_year" disabled>
                            <option selected>--Select--</option>
                            @foreach($financialyear as $fy)
                            <option value="{{$fy->id}}" {{($fy->financial_year==$sales->financial_year)?'selected':''}}>
                                {{$fy->financial_year}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">


                        <div class="table table-responsive" id="tab">
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
                                @foreach($target as $tg)
                                <tbody name='abc' id='abc'>

                                    <td> <input type="text" value="{{$tg->division}}" style="width:50px" readonly
                                            {{($tg->sale_id==$sales->id)}}>
                                    </td>
                                    <td><input type="text" value="{{$tg->apr_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}> </td>
                                    <td><input type="text" value="{{$tg->apr_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->may_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->may_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->june_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->june_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->july_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->july_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    </td>
                                    <td><input type="text" value="{{$tg->aug_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    </td>
                                    <td><input type="text" value="{{$tg->aug_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->sept_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->sept_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->oct_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->oct_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->nov_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->nov_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->dec_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->dec_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->jan_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->jan_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->feb_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->feb_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->march_target}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    <td><input type="text" value="{{$tg->march_actual}}" style="width:60px" readonly
                                            {{$tg->sale_id=$sales->id}}></td>
                                    @endforeach
                                </tbody>
                            </table>
                            
                            <hr>
                    
                            <div class="form-group row" id="finaltotal">
                                <div class="col-sm-3">
                                    <label>Total Target</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="total_target" id="total_target" value="{{$sales->total_target}}">
                                </div>
                                <div class="col-sm-3">
                                    <label>Total Actual</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="total_actual" id="total_actual" value="{{$sales->total_actual}}">
                                </div>
                               
                            </div>
                            


                        </div>
                    </div>
                </div><br>
            </div>
        </div>
</form>
@endsection
@push('scripts')
<script>

</script>
@endpush