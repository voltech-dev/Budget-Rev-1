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
                                    @foreach($target as $tg)
                                    <?php $i=$i+1;$k=$k+1;?>
                                    <input type="hidden" name="id[]" value="{{$tg->id}}">
                                    <tr> 
                                      
                                        <td>{{$tg->division->division_name}}</td>

                                        <td><input type="text" value="{{$tg->apr_target}}" style="width:60px" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="apr_actual[]"
                                                id="apr_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> apr_actual">
                                        </td>
                                        <td><input type="text" value="{{$tg->may_target}}" style="width:60px" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="may_actual[]"
                                                id="may_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> may_actual">
                                        </td>
                                        <td><input type="text" value="{{$tg->jun_target}}" style="width:60px" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="jun_actual[]"
                                                id="jun_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> jun_actual">
                                        </td>
                                        <td><input type="text" value="{{$tg->jul_target}}" style="width:60px" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="jul_actual[]"
                                                id="jul_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> jul_actual">
                                        </td>
                                        </td>
                                        <td><input type="text" value="{{$tg->aug_target}}" style="width:60px" disabled>
                                        </td>
                                        </td>
                                        <td><input type="text" style="width:60px" name="aug_actual[]"
                                                id="aug_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> aug_actual">
                                        </td>
                                        <td><input type="text" value="{{$tg->sep_target}}" style="width:60px" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="sep_actual[]"
                                                id="sep_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> sep_actual">
                                        </td>
                                        <td><input type="text" value="{{$tg->oct_target}}" style="width:60px" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="oct_actual[]"
                                                id="oct_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> oct_actual">
                                        </td>
                                        <td><input type="text" value="{{$tg->nov_target}}" style="width:60px" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="nov_actual[]"
                                                id="nov_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> nov_actual">
                                        </td>
                                        <td><input type="text" value="{{$tg->dec_target}}" style="width:60px" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="dec_actual[]"
                                                id="dec_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> dec_actual">
                                        </td>
                                        <td><input type="text" value="{{$tg->jan_target}}" style="width:60px" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="jan_actual[]"
                                                id="jan_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> jan_actual">
                                        </td>
                                        <td><input type="text" value="{{$tg->feb_target}}" style="width:60px" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="feb_actual[]"
                                                id="feb_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> feb_actual">
                                        </td>
                                        <td><input type="text" value="{{$tg->mar_target}}" style="width:60px" disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="mar_actual[]"
                                                id="mar_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> mar_actual">
                                        </td>
                                        <td><input type="text" value="{{$tg->target_total}}" style="width:60px"
                                                disabled></td>
                                        <td><input type="text" value="" style="width:60px" name="actual_total[]"
                                                id="actual_total_<?php echo $i;?>"></td>


                                        @endforeach
                                    </tr>
                                    <?php $totalrow=$i;?>
                                    <tr>
                                        <td>Total</td>
                                        <td><input type="text" style="width:60px" value="{{$sales->aprtarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="apractual_total"
                                                id="apractual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">

                                        </td>

                                        <td><input type="text" style="width:60px" value="{{$sales->maytarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="mayactual_total"
                                                id="mayactual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$sales->juntarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="junactual_total"
                                                id="junactual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">
                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$sales->jultarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="julactual_total"
                                                id="julactual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">

                                        </td>

                                        <td><input type="text" style="width:60px" value="{{$sales->augtarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="augactual_total"
                                                id="augactual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">
                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$sales->septarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="sepactual_total"
                                                id="sepactual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$sales->octtarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="octactual_total"
                                                id="octactual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$sales->novtarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="novactual_total"
                                                id="novactual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$sales->dectarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="decactual_total"
                                                id="decactual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$sales->jantarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="janactual_total"
                                                id="janactual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$sales->febtarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="febactual_total"
                                                id="febactual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$sales->martarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" name="maractual_total"
                                                id="maractual_total"><input type="hidden" style="width:60px"
                                                name="totalrow" id="totalrow" value="<?php echo $i;?>">

                                        </td>
                                        <td><input type="text" style="width:60px" value="{{$sales->divtarget_total}}"
                                                disabled>
                                        </td>
                                        <td><input type="text" style="width:60px" id="total_actual">
                                        </td>

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
                                        value="{{$sales->target_total}}" disabled>
                                </div>
                                <div class="col-sm-3">
                                    <label>Total Actual</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="total_actual" id="finalactual"
                                    >
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