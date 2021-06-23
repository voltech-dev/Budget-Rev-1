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
<form action="{{url('/salesupdate/'.$sales->id)}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">

            <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                    <div class="col-sm-3">
                        <select name="company_name" class="form-control form-control-sm" id="company_name" disabled>
                            <option selected>--Select Company--</option>
                            @foreach($company as $comp)
                            <option value="{{ $comp->id }}" {{ ( $comp->id == $sales->company_id) ? 'selected' : '' }}>
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
                            <option value="{{$fy->id}}" {{($fy->id==$sales->financial_year_id)?'selected':''}}>
                                {{$fy->financial_year}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">


                        <div class="table table-responsive" id="tab">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                    <tr>
                                        <th>Month</th>
                                        @foreach($sales_sub as $sub)
                                        <th style="text-align:center" colspan=2>{{$sub->division->division_name}}</th>
                                        @endforeach
                                        <th>Target</th>
                                        <th>Actual</th>

                                </thead>
                                <tbody>

                                    <tr>
                                        <td></td>
                                        @foreach($sales_sub as $sub)
                                        <th colspan=1 style="text-align:center">Target</th>
                                        <th colspan=1 style="text-align:center">Actual</th>
                                        @endforeach
                                        <th>Total Target</th>
                                        <th>Total Actual</th>
                                    </tr>
                                    <tr>
                                        <th>Apr</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->apr_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->apr_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->aprtarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>May</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->may_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->may_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->maytarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Jun</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->jun_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->jun_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->juntarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Jul</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->jul_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->jul_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->jultarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Aug</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->aug_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->aug_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->augtarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Sep</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->sep_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->sep_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->septarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Oct</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->oct_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->oct_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->octtarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Nov</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->nov_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->nov_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->novtarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Dec</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->dec_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->dec_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->dectarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Jan</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->jan_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->jan_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->jantarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Feb</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->feb_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->feb_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->febtarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Mar</th>
                                        @foreach($sales_sub as $sub)
                                        <td><input type="text" style="width:80px" value="{{$sub->mar_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:80px" value="{{$sub->mar_actual}}" disabled>
                                        </td>
                                        @endforeach
                                        <td><input type="text" style="width:80px;" value="{{$sales->martarget_total}}"
                                                disabled>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <th>Total</th>
                                    @foreach($sales_sub as $sub)
                                    <td><input type="text" style="width:80px" value="{{$sub->target_total}}" disabled></td>
                                    <td><input type="text" style="width:80px" value="{{$sub->actual_total}}" disabled></td>
                                    @endforeach
                                    <td><input type="text" style="width:80px" value="{{$sales->target_total}}" disabled></td>
                                    <td><input type="text" style="width:80px" value="{{$sales->actual_total}}" disabled></td>
                                    </tr>



                                </tbody>

                            </table>

                            <hr>

                            <!-- <div class="form-group row" id="finaltotal">
                                <div class="col-sm-3">
                                    <label>Total Target</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="total_target" id="total_target"
                                        value="{{$sales->granttotal_target}}" disabled>
                                </div>
                                <div class="col-sm-3">
                                    <label>Total Actual</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" value="{{$sales->granttotal_actual}}" disabled>
                                </div>

                            </div> -->



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