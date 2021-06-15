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
                            <option value="{{ $comp->id }}" {{ ( $comp->id == $turnover->company_id) ? 'selected' : '' }}>
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
                                
                                <tbody name='abc' id='abc'>
                                    <?php $i=0;$k=0;?>
                                    @foreach ($target as $tg)
                                    <?php $i=$i+1;?>
                                    <input type="hidden" value="{{$tg->turnover_id}}" name="turnid[]">
                                    <input type="hidden" value="{{$tg->id}}" name="id[]">

                                    <tr>
                                        <td>{{$tg->division->division_name}}</td>
                                        <td><input type="text" style="width:60px;" name="apr_target[]" value="{{$tg->apr_target}}" disabled>
                                        </td>
                                        @if(empty($tg->apr_actual) && !empty($tg->apr_target))
                                        <td><input type="text" style="width: 60px;" id="apr_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> apr_actual" name="apr_actual[]"
                                                autocomplete="off">
                                        </td> 
                                        @else
                                        <td><input type="text" style="width:60px;" name="apr_actual[]" value="{{$tg->apr_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;"name="may_target[]" value="{{$tg->may_target}}" disabled>
                                        </td>
                                        @if(empty($tg->may_actual) && !empty($tg->may_target))
                                        <td><input type="text" style="width: 60px;" id="may_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> may_actual" name="may_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" name="may_actual[]" value="{{$tg->may_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;" name="jun_target[]" value="{{$tg->jun_target}}" disabled>
                                        </td>
                                        @if(empty($tg->jun_actual) && !empty($tg->jun_target))
                                        <td><input type="text" style="width: 60px;" id="jun_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> jun_actual" name="jun_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;"name="jun_actual[]" value="{{$tg->jun_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;"name="jul_target[]" value="{{$tg->jul_target}}" disabled>
                                        </td>
                                        @if(empty($tg->jul_actual) && !empty($tg->jul_target))
                                        <td><input type="text" style="width: 60px;" id="jul_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> jul_actual" name="jul_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;"name="jul_actual[]" value="{{$tg->jul_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;"name="aug_target[]" value="{{$tg->aug_target}}" disabled>
                                        </td>
                                        @if(empty($tg->aug_actual) && !empty($tg->aug_target))
                                        <td><input type="text" style="width: 60px;" id="aug_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> aug_actual" name="aug_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" name="aug_actual[]" value="{{$tg->aug_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;" name="sep_target[]" value="{{$tg->sep_target}}" disabled>
                                        </td>
                                        @if(empty($tg->sep_actual) && !empty($tg->sep_target))
                                        <td><input type="text" style="width: 60px;" id="sep_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> sep_actual" name="sep_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" name="sep_actual[]" value="{{$tg->sep_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;" name="oct_target[]" value="{{$tg->oct_target}}" disabled>
                                        </td>
                                        @if(empty($tg->oct_actual) && !empty($tg->oct_target))
                                        <td><input type="text" style="width: 60px;" id="oct_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> oct_actual" name="oct_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;"name="oct_actual[]" value="{{$tg->oct_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;" name="nov_target[]" value="{{$tg->nov_target}}" disabled>
                                        </td>
                                        @if(empty($tg->nov_actual) && !empty($tg->nov_target))
                                        <td><input type="text" style="width: 60px;" id="nov_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> nov_actual" name="nov_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" name="nov_actual[]" value="{{$tg->nov_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;"  name="dec_target[]"value="{{$tg->dec_target}}" disabled>
                                        </td>
                                        @if(empty($tg->dec_actual) && !empty($tg->dec_target))
                                        <td><input type="text" style="width: 60px;" id="dec_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> dec_actual" name="dec_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;"  name="dec_actual[]" value="{{$tg->dec_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;" name="jan_target[]" value="{{$tg->jan_target}}" disabled>
                                        </td>
                                        @if(empty($tg->jan_actual) && !empty($tg->jan_target))
                                        <td><input type="text" style="width: 60px;" id="jan_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> jan_actual" name="jan_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" name="jan_actual[]"  value="{{$tg->jan_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;"  name="feb_target[]" value="{{$tg->feb_target}}" disabled>
                                        </td>
                                        @if(empty($tg->feb_actual) && !empty($tg->feb_target))
                                        <td><input type="text" style="width: 60px;" id="feb_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> feb_actual" name="feb_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;"name="feb_actual[]" value="{{$tg->feb_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;" name="mar_target[]" value="{{$tg->mar_target}}" disabled>
                                        </td>
                                        @if(empty($tg->mar_actual) && !empty($tg->mar_target))
                                        <td><input type="text" style="width: 60px;" id="mar_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> mar_actual" name="mar_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" name="mar_actual[]" value="{{$tg->mar_actual}}" disabled>
                                        </td>
                                        @endif
                                        <td><input type="text" style="width:60px;"name="target_total[]" value="{{$tg->target_total}}"
                                                disabled></td>
                                        @if(empty($tg->actual_total))
                                        <td><input type="text" style="width:60px;" id="actual_total_<?php echo $i;?>"
                                                name="actual_total[]"></td>
                                        @else
                                        <td><input type="text" style="width:60px;" name="actual_total" value="{{$tg->actual_total}}"
                                                disabled></td>
                                        @endif

                                    </tr>
                                    <?php $k=$k+1;?>
                                    @endforeach

                                    <?php $totalrow=$i;?>

                                    <tr>
                                        <td>Total</td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->aprtarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->apractual_total) && !empty($turnover->aprtarget_total))
                                        <td><input type="text" style="width:60px" name="apractual_total"
                                                id="apractual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">

                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->apractual_total}}"
                                                disabled></td>
                                        @endif

                                        <td><input type="text" style="width:60px" value="{{$turnover->maytarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->mayactual_total) && !empty($turnover->maytarget_total))
                                        <td><input type="text" style="width:60px" name="mayactual_total"
                                                id="mayactual_total">

                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->mayactual_total}}"
                                                disabled></td>
                                        @endif
                                        <td><input type="text" style="width:60px" value="{{$turnover->juntarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->junactual_total)&& !empty($turnover->juntarget_total))
                                        <td><input type="text" style="width:60px" name="junactual_total"
                                                id="junactual_total">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->junactual_total}}"
                                                disabled></td>
                                        @endif
                                        <td><input type="text" style="width:60px" value="{{$turnover->jultarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->julactual_total) && !empty($turnover->jultarget_total))
                                        <td><input type="text" style="width:60px" name="julactual_total"
                                                id="julactual_total">
                                            @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->julactual_total}}"
                                                disabled></td>
                                        @endif
                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$turnover->augtarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->augactual_total) && !empty($turnover->augtarget_total))
                                        <td><input type="text" style="width:60px" name="augactual_total"
                                                id="augactual_total"> </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->augactual_total}}"
                                                disabled></td>
                                        @endif
                                        <td><input type="text" style="width:60px" value="{{$turnover->septarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->sepactual_total) && !empty($turnover->septarget_total))
                                        <td><input type="text" style="width:60px" name="sepactual_total"
                                                id="sepactual_total">

                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->sepactual_total}}"
                                                disabled></td>
                                        @endif
                                        <td><input type="text" style="width:60px" value="{{$turnover->octtarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->octactual_total) && !empty($turnover->octtarget_total))
                                        <td><input type="text" style="width:60px" name="octactual_total"
                                                id="octactual_total">

                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->octactual_total}}"
                                                disabled></td>
                                        @endif
                                        <td><input type="text" style="width:60px" value="{{$turnover->novtarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->novactual_total) && !empty($turnover->novtarget_total))
                                        <td><input type="text" style="width:60px" name="novactual_total"
                                                id="novactual_total">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->novactual_total}}"
                                                disabled></td>
                                        @endif
                                        <td><input type="text" style="width:60px" value="{{$turnover->dectarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->decactual_total) && !empty($turnover->dectarget_total))
                                        <td><input type="text" style="width:60px" name="decactual_total"
                                                id="decactual_total">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->decactual_total}}"
                                                disabled></td>
                                        @endif
                                        <td><input type="text" style="width:60px" value="{{$turnover->jantarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->janactual_total) && !empty($turnover->jantarget_total))
                                        <td><input type="text" style="width:60px" name="janactual_total"
                                                id="janactual_total">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->janactual_total}}"
                                                disabled></td>
                                        @endif
                                        <td><input type="text" style="width:60px" value="{{$turnover->febtarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->febactual_total) && !empty($turnover->febtarget_total))
                                        <td><input type="text" style="width:60px" name="febactual_total"
                                                id="febactual_total">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->febactual_total}}"
                                                disabled></td>
                                        @endif
                                        <td><input type="text" style="width:60px" value="{{$turnover->martarget_total}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->maractual_total) && !empty($turnover->martarget_total))
                                        <td><input type="text" style="width:60px" name="maractual_total"
                                                id="maractual_total">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->maractual_total}}"
                                                disabled></td>
                                        @endif
                                        <td><input type="text" style="width:60px" value="{{$turnover->granttotal_target}}"
                                                disabled>
                                        </td>
                                        @if(empty($turnover->actual_total))
                                        <td><input type="text" style="width:60px" id="total_actual" name="total_actual">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:60px;" value="{{$turnover->actual_total}}"
                                                disabled></td>
                                        @endif


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
                                    @if(empty($turnover->granttotal_actual))
                                    <input type="text" name="granttotal_actual" id="finalactual">
                                    @else
                                    <td><input type="text" value="{{$turnover->granttotal_actual}}" disabled></td>
                                    @endif
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
$(document).on('keyup', '.actual', function() {
    var totalrow = $("#totalrow").val();
    //##################### Division Row ########################
    var actual_id = $(this).attr('id');
    //alert(target_id);
    var actualid_arr = actual_id.split('_');
    //alert(targetid_arr[2]);
    var cnt = actualid_arr[2];
    var apr_actual = $("#apr_actual_" + cnt).val();
    var may_actual = $("#may_actual_" + cnt).val();
    var jun_actual = $("#jun_actual_" + cnt).val();
    var jul_actual = $("#jul_actual_" + cnt).val();
    var aug_actual = $("#aug_actual_" + cnt).val();
    var sep_actual = $("#sep_actual_" + cnt).val();
    var oct_actual = $("#oct_actual_" + cnt).val();
    var nov_actual = $("#nov_actual_" + cnt).val();
    var dec_actual = $("#dec_actual_" + cnt).val();
    var jan_actual = $("#jan_actual_" + cnt).val();
    var feb_actual = $("#feb_actual_" + cnt).val();
    var mar_actual = $("#mar_actual_" + cnt).val();

    if (!isNaN(apr_actual) && apr_actual != '') {
        apr_actual = apr_actual;
    } else {
        apr_actual = 0;
    }


    if (!isNaN(may_actual) && may_actual != '') {
        may_actual = may_actual;
    } else {
        may_actual = 0;
    }

    if (!isNaN(jun_actual) && jun_actual != '') {
        jun_actual = jun_actual;
    } else {
        jun_actual = 0;
    }

    if (!isNaN(jul_actual) && jul_actual != '') {
        jul_actual = jul_actual;
    } else {
        jul_actual = 0;
    }

    if (!isNaN(aug_actual) && aug_actual != '') {
        aug_actual = aug_actual;
    } else {
        aug_actual = 0;
    }

    if (!isNaN(sep_actual) && sep_actual != '') {
        sep_actual = sep_actual;
    } else {
        sep_actual = 0;
    }

    if (!isNaN(oct_actual) && oct_actual != '') {
        oct_actual = oct_actual;
    } else {
        oct_actual = 0;
    }

    if (!isNaN(nov_actual) && nov_actual != '') {
        nov_actual = nov_actual;
    } else {
        nov_actual = 0;
    }

    if (!isNaN(dec_actual) && dec_actual != '') {
        dec_actual = dec_actual;
    } else {
        dec_actual = 0;
    }

    if (!isNaN(jan_actual) && jan_actual != '') {
        jan_actual = jan_actual;
    } else {
        jan_actual = 0;
    }

    if (!isNaN(feb_actual) && feb_actual != '') {
        feb_actual = feb_actual;
    } else {
        feb_actual = 0;
    }

    if (!isNaN(mar_actual) && mar_actual != '') {
        mar_actual = mar_actual;
    } else {
        mar_actual = 0;
    }

    var totalrow_actual = (parseFloat(apr_actual) + parseFloat(may_actual) + parseFloat(jun_actual) +
        parseFloat(jul_actual) + parseFloat(aug_actual) + parseFloat(sep_actual) + parseFloat(oct_actual) +
        parseFloat(nov_actual) + parseFloat(dec_actual) + parseFloat(jan_actual) + parseFloat(feb_actual) +
        parseFloat(mar_actual)).toFixed(2);
    $("#actual_total_" + cnt).val(parseFloat(totalrow_actual).toFixed(2));

    //##################### Division Column ########################
    var apr_actual_clm = 0;
    var may_actual_clm = 0;
    var jun_actual_clm = 0;
    var jul_actual_clm = 0;
    var aug_actual_clm = 0;
    var sep_actual_clm = 0;
    var oct_actual_clm = 0;
    var nov_actual_clm = 0;
    var dec_actual_clm = 0;
    var jan_actual_clm = 0;
    var feb_actual_clm = 0;
    var mar_actual_clm = 0;


    for (var j = 1; j <= totalrow; j++) {

        var apr_actual_clmnval = $("#apr_actual_" + j).val();
        var may_actual_clmnval = $("#may_actual_" + j).val();
        var jun_actual_clmnval = $("#jun_actual_" + j).val();
        var jul_actual_clmnval = $("#jul_actual_" + j).val();
        var aug_actual_clmnval = $("#aug_actual_" + j).val();
        var sep_actual_clmnval = $("#sep_actual_" + j).val();
        var oct_actual_clmnval = $("#oct_actual_" + j).val();
        var nov_actual_clmnval = $("#nov_actual_" + j).val();
        var dec_actual_clmnval = $("#dec_actual_" + j).val();
        var jan_actual_clmnval = $("#jan_actual_" + j).val();
        var feb_actual_clmnval = $("#feb_actual_" + j).val();
        var mar_actual_clmnval = $("#mar_actual_" + j).val();


        if (!isNaN(apr_actual_clmnval) && apr_actual_clmnval != '') {
            apr_actual_clmnval = apr_actual_clmnval;
        } else {
            apr_actual_clmnval = 0;
        }


        if (!isNaN(may_actual_clmnval) && may_actual_clmnval != '') {
            may_actual_clmnval = may_actual_clmnval;
        } else {
            may_actual_clmnval = 0;
        }

        if (!isNaN(jun_actual_clmnval) && jun_actual_clmnval != '') {
            jun_actual_clmnval = jun_actual_clmnval;
        } else {
            jun_actual_clmnval = 0;
        }

        if (!isNaN(jul_actual_clmnval) && jul_actual_clmnval != '') {
            jul_actual_clmnval = jul_actual_clmnval;
        } else {
            jul_actual_clmnval = 0;
        }

        if (!isNaN(aug_actual_clmnval) && aug_actual_clmnval != '') {
            aug_actual_clmnval = aug_actual_clmnval;
        } else {
            aug_actual_clmnval = 0;
        }

        if (!isNaN(sep_actual_clmnval) && sep_actual_clmnval != '') {
            sep_actual_clmnval = sep_actual_clmnval;
        } else {
            sep_actual_clmnval = 0;
        }

        if (!isNaN(oct_actual_clmnval) && oct_actual_clmnval != '') {
            oct_actual_clmnval = oct_actual_clmnval;
        } else {
            oct_actual_clmnval = 0;
        }

        if (!isNaN(nov_actual_clmnval) && nov_actual_clmnval != '') {
            nov_actual_clmnval = nov_actual_clmnval;
        } else {
            nov_actual_clmnval = 0;
        }

        if (!isNaN(dec_actual_clmnval) && dec_actual_clmnval != '') {
            dec_actual_clmnval = dec_actual_clmnval;
        } else {
            dec_actual_clmnval = 0;
        }

        if (!isNaN(jan_actual_clmnval) && jan_actual_clmnval != '') {
            jan_actual_clmnval = jan_actual_clmnval;
        } else {
            jan_actual_clmnval = 0;
        }

        if (!isNaN(feb_actual_clmnval) && feb_actual_clmnval != '') {
            feb_actual_clmnval = feb_actual_clmnval;
        } else {
            feb_actual_clmnval = 0;
        }

        if (!isNaN(mar_actual_clmnval) && mar_actual_clmnval != '') {
            mar_actual_clmnval = mar_actual_clmnval;
        } else {
            mar_actual_clmnval = 0;
        }

        apr_actual_clm = (parseFloat(apr_actual_clm) + parseFloat(apr_actual_clmnval)).toFixed(2);
        may_actual_clm = (parseFloat(may_actual_clm) + parseFloat(may_actual_clmnval)).toFixed(2);
        jun_actual_clm = (parseFloat(jun_actual_clm) + parseFloat(jun_actual_clmnval)).toFixed(2);
        jul_actual_clm = (parseFloat(jul_actual_clm) + parseFloat(jul_actual_clmnval)).toFixed(2);
        aug_actual_clm = (parseFloat(aug_actual_clm) + parseFloat(aug_actual_clmnval)).toFixed(2);
        sep_actual_clm = (parseFloat(sep_actual_clm) + parseFloat(sep_actual_clmnval)).toFixed(2);
        oct_actual_clm = (parseFloat(oct_actual_clm) + parseFloat(oct_actual_clmnval)).toFixed(2);
        nov_actual_clm = (parseFloat(nov_actual_clm) + parseFloat(nov_actual_clmnval)).toFixed(2);
        dec_actual_clm = (parseFloat(dec_actual_clm) + parseFloat(dec_actual_clmnval)).toFixed(2);
        jan_actual_clm = (parseFloat(jan_actual_clm) + parseFloat(jan_actual_clmnval)).toFixed(2);
        feb_actual_clm = (parseFloat(feb_actual_clm) + parseFloat(feb_actual_clmnval)).toFixed(2);
        mar_actual_clm = (parseFloat(mar_actual_clm) + parseFloat(mar_actual_clmnval)).toFixed(2);
    }


    $("#apractual_total").val((parseFloat(apr_actual_clm)).toFixed(2));
    $("#mayactual_total").val((parseFloat(may_actual_clm)).toFixed(2));
    $("#junactual_total").val((parseFloat(jun_actual_clm)).toFixed(2));
    $("#julactual_total").val((parseFloat(jul_actual_clm)).toFixed(2));
    $("#augactual_total").val((parseFloat(aug_actual_clm)).toFixed(2));
    $("#sepactual_total").val((parseFloat(sep_actual_clm)).toFixed(2));
    $("#octactual_total").val((parseFloat(oct_actual_clm)).toFixed(2));
    $("#novactual_total").val((parseFloat(nov_actual_clm)).toFixed(2));
    $("#decactual_total").val((parseFloat(dec_actual_clm)).toFixed(2));
    $("#janactual_total").val((parseFloat(jan_actual_clm)).toFixed(2));
    $("#febactual_total").val((parseFloat(feb_actual_clm)).toFixed(2));
    $("#maractual_total").val((parseFloat(mar_actual_clm)).toFixed(2));


    var finalactual = (parseFloat(apr_actual_clm) + parseFloat(may_actual_clm) + parseFloat(jun_actual_clm) +
        parseFloat(jul_actual_clm) + parseFloat(aug_actual_clm) +
        parseFloat(sep_actual_clm) + parseFloat(oct_actual_clm) + parseFloat(nov_actual_clm) + parseFloat(
            dec_actual_clm) + parseFloat(jan_actual_clm) + parseFloat(feb_actual_clm) + parseFloat(
            mar_actual_clm)).toFixed(2);
    $("#finalactual").val(finalactual);
    $("#total_actual").val(finalactual);

});

$('#unit').change(function() {
    $('#tab').hide();
    $('#sub_sales tr').remove();
});
</script>
@endpush