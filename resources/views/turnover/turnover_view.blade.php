@extends('layouts.main')
@section('header')

<!-- begin::page-header -->
<div class="card-header">
    <h3>Turnover</h3>
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
<form action="{{url('/turnoverupdate/'.$turnover->id)}}" method="POST">
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
                            <option value="{{ $comp->id }}"
                                {{ ( $comp->id == $turnover->company_id) ? 'selected' : '' }}>
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
                            <option value="{{ $un->id }}" {{ ( $un->id == $turnover->unit_id) ? 'selected' : '' }}>
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
                            <option value="{{$fy->id}}" {{($fy->id==$turnover->financial_year_id)?'selected':''}}>
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
                                        <th>Division</th>
                                        <th colspan="2" style="text-align:center">April</th>
                                        <th colspan="2" style="text-align:center">May</th>
                                        <th colspan="2" style="text-align:center">June</th>
                                        <th colspan="2" style="text-align:center">July</th>
                                        <th colspan="2" style="text-align:center">August</th>
                                        <th colspan="2" style="text-align:center">September</th>
                                        <th colspan="2" style="text-align:center">October</th>
                                        <th colspan="2" style="text-align:center">November</th>
                                        <th colspan="2" style="text-align:center">December</th>
                                        <th colspan="2" style="text-align:center">Jan</th>
                                        <th colspan="2" style="text-align:center">Feb</th>
                                        <th colspan="2" style="text-align:center">March</th>
                                        <th>Target</th>
                                        <th>Actual</th>
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
                                        <td>Total Target</td>
                                        <td>Total Actual</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($target as $tg)
                                    <input type="hidden" value="{{$tg->turnover_id}}" name="turnid[]">
                                    <input type="hidden" value="{{$tg->id}}" name="id[]">
                                    <tr>

                                        <td>{{$tg->division->division_name}}</td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->apr_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width: 60px;" value="{{$tg->apr_actual}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->may_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width: 60px;" value="{{$tg->may_actual}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->jun_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width: 60px;" value="{{$tg->jun_actual}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->jul_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width: 60px;" value="{{$tg->jul_actual}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->aug_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width: 60px;" value="{{$tg->aug_actual}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->sep_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->sep_actual}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->oct_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->oct_actual}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->nov_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->nov_actual}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->dec_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->dec_actual}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->jan_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->jan_actual}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->feb_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->feb_actual}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->mar_target}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->mar_actual}}" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->target_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px;" value="{{$tg->actual_total}}"
                                                disabled>
                                        </td>

                                    </tr>
                                    @endforeach


                                    <tr>
                                        <td>Total</td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->aprtarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px"
                                                value="{{$turnover->apractual_total}}"disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->maytarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px"
                                                value="{{$turnover->mayactual_total}}"disabled>

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->juntarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px"
                                                value="{{$turnover->junactual_total}}"disabled>

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->jultarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px"
                                                value="{{$turnover->julactual_total}}"disabled>

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->augtarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px"
                                                value="{{$turnover->augactual_total}}"disabled>

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->septarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px"
                                                value="{{$turnover->sepactual_total}}"disabled>

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->octtarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px"
                                                value="{{$turnover->octactual_total}}"disabled>

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->novtarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px"
                                                value="{{$turnover->novactual_total}}"disabled>

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->dectarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px"
                                                value="{{$turnover->decactual_total}}"disabled>

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->jantarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px"
                                                value="{{$turnover->janactual_total}}"disabled>

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->febtarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->febactual_total}}"
                                                disabled>

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->martarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->maractual_total}}"
                                                disabled>

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->target_total}}"
                                                disabled>
                                        <td><input type="text" style="width:60px" value="{{$turnover->actual_total}}"
                                                disabled>
                                    </tr>
                                </tbody>

                            </table>

                            <hr>

                            <div class="form-group row" id="finaltotal">
                                <div class="col-sm-3">
                                    <label>Total Target</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="total_target" id="total_target"
                                        value="{{$turnover->granttotal_target}}" disabled>
                                </div>
                                <div class="col-sm-3">
                                    <label>Total Actual</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" value="{{$turnover->granttotal_actual}}" disabled>
                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                        <button type="submit" class="btn btn-outline-success btn-sm"><i
                                                data-feather="check" class="mr-2"></i>Save</button>
                                    </div>
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