@extends('layouts.main')
@section('header')


    <h3>Collection</h3>

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
<form action="{{url('/collectionupdate/'.$collection->id)}}" method="POST">
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
                                {{ ( $comp->id == $collection->company_id) ? 'selected' : '' }}>
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
                            <option value="{{ $un->id }}" {{ ( $un->id == $collection->unit_id) ? 'selected' : '' }}>
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
                            <option value="{{$financialyear->id}}">{{$financialyear->financial_year}}</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">


                        <div class="table table-bordered" id="tab" style="height:400px;overflow-x:auto;">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                    <tr>
                                        <th>Month</th>
                                        @foreach($collection_sub as $sub)
                                        <th style="text-align:center" colspan=2>{{$sub->division->division_name}}</th>
                                        @endforeach
                                        <th>Target</th>
                                        <th>Actual</th>

                                </thead>
                                <tbody>

                                    <tr>
                                        <td></td>
                                        @foreach($collection_sub as $sub)
                                        <th colspan=1 style="text-align:center">Target</th>
                                        <th colspan=1 style="text-align:center">Actual</th>
                                        @endforeach
                                        <th>Total Target</th>
                                        <th>Total Actual</th>
                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>Apr <?php echo $year[0]?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->apr_target}}" disabled>
                                        </td>
                                        @if(empty($sub->apr_actual) && !empty($sub->apr_target))
                                        <td><input type="text" style="width:80px;" id="apr_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> apr_actual" name="apr_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="apr_actual[]"
                                                value="{{$sub->apr_actual}}" disabled>
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->aprtarget_total}}" disabled>
                                        </td>
                                        <?php $totalrow=$i;?>
                                        @if(empty($collection->apractual_total) && !empty($collection->aprtarget_total))

                                        <td><input type="text" style="width:80px" name="apractualrow_total"
                                                id="apractualrow_total" readonly><input type="hidden" style="width:80px"
                                                name="totalrow" id="totalrow" value=<?php echo $totalrow;?>
                                                autocomplete="off"></td>



                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->apractual_total}}" disabled>
                                        </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>May <?php echo $year[0];?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->may_target}}" disabled>
                                        </td>
                                        @if(empty($sub->may_actual) && !empty($sub->may_target))
                                        <td><input type="text" style="width:80px;" id="may_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> may_actual" name="may_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="may_actual[]"
                                                value="{{$sub->may_actual}}" disabled>
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->maytarget_total}}" disabled>
                                        </td>
                                        @if(empty($collection->mayactual_total) && !empty($collection->maytarget_total))

                                        <td><input type="text" style="width:80px" name="mayactualrow_total"
                                                id="mayactualrow_total" readonly></td>



                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->mayactual_total}}" disabled>
                                        </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>Jun <?php echo $year[0];?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->jun_target}}" disabled>
                                        </td>
                                        @if(empty($sub->jun_actual) && !empty($sub->jun_target))
                                        <td><input type="text" style="width:80px;" id="jun_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> jun_actual" name="jun_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="jun_actual[]" disabled
                                                value="{{$sub->jun_actual}}">
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->juntarget_total}}" disabled>
                                        </td>
                                        @if(empty($collection->junactual_total) && !empty($collection->juntarget_total))

                                        <td><input type="text" style="width:80px" name="junactualrow_total"
                                                id="junactualrow_total" readonly></td>

                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->junactual_total}}" disabled>
                                        </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>Jul <?php echo $year[0];?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->jul_target}}" disabled>
                                        </td>
                                        @if(empty($sub->jul_actual) && !empty($sub->jul_target))
                                        <td><input type="text" style="width:80px;" id="jul_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> jul_actual" name="jul_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="jul_actual[]"
                                                value="{{$sub->jul_actual}}" disabled>
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->jultarget_total}}" disabled>
                                        </td>
                                        @if(empty($collection->julactual_total) && !empty($collection->jultarget_total))

                                        <td><input type="text" style="width:80px" name="julactualrow_total"
                                                id="julactualrow_total" readonly></td>
                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->julactual_total}}" disabled>
                                        </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>Aug <?php echo $year[0];?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->aug_target}}" disabled>
                                        </td>
                                        @if(empty($sub->aug_actual) && !empty($sub->aug_target))
                                        <td><input type="text" style="width:80px;" id="aug_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> aug_actual" name="aug_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="aug_actual[]"
                                                value="{{$sub->aug_actual}}" disabled>
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->augtarget_total}}" disabled>
                                        </td>
                                        <?php $totarow=$i;?>
                                        @if(empty($collection->augactual_total) && !empty($collection->augtarget_total))

                                        <td><input type="text" style="width:80px" name="augactualrow_total"
                                                id="augactualrow_total" readonly></td>
                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->augactual_total}}" disabled>
                                        </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>Sep <?php echo $year[0];?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->sep_target}}" disabled>
                                        </td>
                                        @if(empty($sub->sep_actual) && !empty($sub->sep_target))
                                        <td><input type="text" style="width:80px;" id="sep_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> sep_actual" name="sep_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="sep_actual[]"
                                                value="{{$sub->sep_actual}}" disabled>
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->septarget_total}}" disabled>
                                        </td>
                                        @if(empty($collection->sepactual_total) && !empty($collection->septarget_total))

                                        <td><input type="text" style="width:80px" name="sepactualrow_total"
                                                id="sepactualrow_total" readonly></td>
                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->sepactual_total}}" disabled>
                                        </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>Oct <?php echo $year[0];?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->oct_target}}" disabled>
                                        </td>
                                        @if(empty($sub->oct_actual) && !empty($sub->oct_target))
                                        <td><input type="text" style="width:80px;" id="oct_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> oct_actual" name="oct_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="oct_actual[]"
                                                value="{{$sub->oct_actual}}" disabled>
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->octtarget_total}}" disabled>
                                        </td>
                                        @if(empty($collection->octactual_total) && !empty($collection->octtarget_total))

                                        <td><input type="text" style="width:80px" name="octactualrow_total"
                                                id="octactualrow_total" readonly></td>
                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->octactual_total}}" disabled>
                                        </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>Nov <?php echo $year[0];?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->nov_target}}" disabled>
                                        </td>
                                        @if(empty($sub->nov_actual) && !empty($sub->nov_target))
                                        <td><input type="text" style="width:80px;" id="nov_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> nov_actual" name="nov_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="nov_actual[]"
                                                value="{{$sub->nov_actual}}" disabled>
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->novtarget_total}}" disabled>
                                        </td>
                                        @if(empty($collection->novactual_total) && !empty($collection->novtarget_total))

                                        <td><input type="text" style="width:80px" name="novactualrow_total"
                                                id="novactualrow_total" readonly></td>
                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->novactual_total}}" disabled>
                                        </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>Dec <?php echo $year[0];?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->dec_target}}" disabled>
                                        </td>
                                        @if(empty($sub->dec_actual) && !empty($sub->dec_target))
                                        <td><input type="text" style="width:80px;" id="dec_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> dec_actual" name="dec_actual[]"
                                                autocomplete="off" >
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="dec_actual[]"
                                                value="{{$sub->dec_actual}}" disabled>
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->dectarget_total}}" disabled>
                                        </td>
                                        @if(empty($collection->decactual_total) && !empty($collection->dectarget_total))

                                        <td><input type="text" style="width:80px" name="decactualrow_total"
                                                id="decactualrow_total" readonly></td>



                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->decactual_total}}" disabled>
                                        </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>Jan <?php echo $year[1];?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->jan_target}}" disabled>
                                        </td>
                                        @if(empty($sub->jan_actual) && !empty($sub->jan_target))
                                        <td><input type="text" style="width:80px;" id="jan_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> jan_actual" name="jan_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="jan_actual[]"
                                                value="{{$sub->jan_actual}}" disabled>
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->jantarget_total}}" disabled>
                                        </td>
                                        @if(empty($collection->janactual_total) && !empty($collection->jantarget_total))

                                        <td><input type="text" style="width:80px" name="janactualrow_total"
                                                id="janactualrow_total" readonly></td>



                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->janactual_total}}" disabled>
                                        </td>
                                        @endif

                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>Feb <?php echo $year[1];?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->feb_target}}" disabled>
                                        </td>
                                        @if(empty($sub->feb_actual) && !empty($sub->feb_target))
                                        <td><input type="text" style="width:80px;" id="feb_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> feb_actual" name="feb_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="feb_actual[]"
                                                value="{{$sub->feb_actual}}" disabled>
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->febtarget_total}}" disabled>
                                        </td>
                                        @if(empty($collection->febactual_total) && !empty($collection->febtarget_total))

                                        <td><input type="text" style="width:80px" name="febactualrow_total"
                                                id="febactualrow_total" readonly></td>
                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->febactual_total}}" disabled>
                                        </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <?php
                                        $str = $financialyear->financial_year;
                                        $year= explode('-',$str,2);
                                        ?>
                                        <th>Mar <?php echo $year[1];?></th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)
                                        <input type="hidden" value="{{$sub->collection_id}}" name="collectionid[]">
                                        <input type="hidden" value="{{$sub->id}}" name="id[]">
                                        <?php $i=$i+1;?>
                                        <td><input type="text" style="width:80px" value="{{$sub->mar_target}}" disabled>
                                        </td>
                                        @if(empty($sub->mar_actual) && !empty($sub->mar_target))
                                        <td><input type="text" style="width:80px;" id="mar_actual_<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?> mar_actual" name="mar_actual[]"
                                                autocomplete="off">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px;" name="mar_actual[]"
                                                value="{{$sub->mar_actual}}" disabled>
                                        </td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->martarget_total}}" disabled>
                                        </td>
                                        @if(empty($collection->maractual_total) && !empty($collection->martarget_total))

                                        <td><input type="text" style="width:80px" name="maractualrow_total"
                                                id="maractualrow_total" readonly></td>



                                        @else
                                        <td><input type="text" style="width:80px;"
                                                value="{{$collection->maractual_total}}" disabled>
                                        </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <?php $i=0;?>
                                        @foreach($collection_sub as $sub)

                                        <?php $i=$i+1; ?>
                                        <td><input type="text" style="width:80px" value="{{$sub->target_total}}"
                                                disabled></td>
                                        @if(empty($sub->actual_total) && !empty($sub->target_total))
                                        <td><input type="text" style="width:80px" name="actualcol_total[]"
                                                id="actualcol_total<?php echo $i;?>"
                                                class="actual actual_<?php echo $i;?>actualcol_total"></td>
                                        @else
                                        <td><input type="text" style="width:80px" value="{{$sub->actual_total}}"
                                                disabled></td>
                                        @endif
                                        @endforeach
                                        <td><input type="text" style="width:80px" value="{{$collection->target_total}}"
                                                disabled></td>
                                        @if(empty($collection->actual_total) && !empty($collection->target_total))
                                        <td><input type="text" style="width: 80px;" name="finalactual" id="finalactual">
                                        </td>
                                        @else
                                        <td><input type="text" style="width:80px" value="{{$collection->actual_total}}"
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
                                        value="{{$collection->granttotal_target}}" disabled>
                                </div>
                                <div class="col-sm-3">
                                    <label>Total Actual</label>
                                </div>
                                <div class="col-sm-3">
                                    @if(empty($collection->granttotal_actual) && !empty($collection->granttotal_target))
                                    <input type="text" name="granttotal_actual" id="granttotal_actual" readonly>
                                    @else
                                    <input type="text" value="{{$collection->granttotal_actual}}" disabled>
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
    var totaldiv = $("#totalrow").val();
    // console.log($(this).val());
    var actual_id = $(this).attr('id');
    var actualid_arr = actual_id.split('_');
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
    console.log(totalrow_actual);
    $("#actualcol_total" + cnt).val(parseFloat(totalrow_actual).toFixed(2));


    var apr_actual_row = 0;
    var may_actual_row = 0;
    var jun_actual_row = 0;
    var jul_actual_row = 0;
    var aug_actual_row = 0;
    var sep_actual_row = 0;
    var oct_actual_row = 0;
    var nov_actual_row = 0;
    var dec_actual_row = 0;
    var jan_actual_row = 0;
    var feb_actual_row = 0;
    var mar_actual_row = 0;
    for (var j = 1; j <= totaldiv; j++) {

        var apr_actual_rowval = $("#apr_actual_" + j).val();
        var may_actual_rowval = $("#may_actual_" + j).val();
        var jun_actual_rowval = $("#jun_actual_" + j).val();
        var jul_actual_rowval = $("#jul_actual_" + j).val();
        var aug_actual_rowval = $("#aug_actual_" + j).val();
        var sep_actual_rowval = $("#sep_actual_" + j).val();
        var oct_actual_rowval = $("#oct_actual_" + j).val();
        var nov_actual_rowval = $("#nov_actual_" + j).val();
        var dec_actual_rowval = $("#dec_actual_" + j).val();
        var jan_actual_rowval = $("#jan_actual_" + j).val();
        var feb_actual_rowval = $("#feb_actual_" + j).val();
        var mar_actual_rowval = $("#mar_actual_" + j).val();


        if (!isNaN(apr_actual_rowval) && apr_actual_rowval != '') {
            apr_actual_rowval = apr_actual_rowval;
        } else {
            apr_actual_rowval = 0;
        }


        if (!isNaN(may_actual_rowval) && may_actual_rowval != '') {
            may_actual_rowval = may_actual_rowval;
        } else {
            may_actual_rowval = 0;
        }

        if (!isNaN(jun_actual_rowval) && jun_actual_rowval != '') {
            jun_actual_rowval = jun_actual_rowval;
        } else {
            jun_actual_rowval = 0;
        }

        if (!isNaN(jul_actual_rowval) && jul_actual_rowval != '') {
            jul_actual_rowval = jul_actual_rowval;
        } else {
            jul_actual_rowval = 0;
        }

        if (!isNaN(aug_actual_rowval) && aug_actual_rowval != '') {
            aug_actual_rowval = aug_actual_rowval;
        } else {
            aug_actual_rowval = 0;
        }

        if (!isNaN(sep_actual_rowval) && sep_actual_rowval != '') {
            sep_actual_rowval = sep_actual_rowval;
        } else {
            sep_actual_rowval = 0;
        }

        if (!isNaN(oct_actual_rowval) && oct_actual_rowval != '') {
            oct_actual_rowval = oct_actual_rowval;
        } else {
            oct_actual_rowval = 0;
        }

        if (!isNaN(nov_actual_rowval) && nov_actual_rowval != '') {
            nov_actual_rowval = nov_actual_rowval;
        } else {
            nov_actual_rowval = 0;
        }

        if (!isNaN(dec_actual_rowval) && dec_actual_rowval != '') {
            dec_actual_rowval = dec_actual_rowval;
        } else {
            dec_actual_rowval = 0;
        }

        if (!isNaN(jan_actual_rowval) && jan_actual_rowval != '') {
            jan_actual_rowval = jan_actual_rowval;
        } else {
            jan_actual_rowval = 0;
        }

        if (!isNaN(feb_actual_rowval) && feb_actual_rowval != '') {
            feb_actual_rowval = feb_actual_rowval;
        } else {
            feb_actual_rowval = 0;
        }

        if (!isNaN(mar_actual_rowval) && mar_actual_rowval != '') {
            mar_actual_rowval = mar_actual_rowval;
        } else {
            mar_actual_rowval = 0;
        }

        apr_actual_row = (parseFloat(apr_actual_row) + parseFloat(apr_actual_rowval)).toFixed(2);
        may_actual_row = (parseFloat(may_actual_row) + parseFloat(may_actual_rowval)).toFixed(2);
        jun_actual_row = (parseFloat(jun_actual_row) + parseFloat(jun_actual_rowval)).toFixed(2);
        jul_actual_row = (parseFloat(jul_actual_row) + parseFloat(jul_actual_rowval)).toFixed(2);
        aug_actual_row = (parseFloat(aug_actual_row) + parseFloat(aug_actual_rowval)).toFixed(2);
        sep_actual_row = (parseFloat(sep_actual_row) + parseFloat(sep_actual_rowval)).toFixed(2);
        oct_actual_row = (parseFloat(oct_actual_row) + parseFloat(oct_actual_rowval)).toFixed(2);
        nov_actual_row = (parseFloat(nov_actual_row) + parseFloat(nov_actual_rowval)).toFixed(2);
        dec_actual_row = (parseFloat(dec_actual_row) + parseFloat(dec_actual_rowval)).toFixed(2);
        jan_actual_row = (parseFloat(jan_actual_row) + parseFloat(jan_actual_rowval)).toFixed(2);
        feb_actual_row = (parseFloat(feb_actual_row) + parseFloat(feb_actual_rowval)).toFixed(2);
        mar_actual_row = (parseFloat(mar_actual_row) + parseFloat(mar_actual_rowval)).toFixed(2);
        console.log(apr_actual_row);
    }
    $("#apractualrow_total").val((parseFloat(apr_actual_row)).toFixed(2));
    $("#mayactualrow_total").val((parseFloat(may_actual_row)).toFixed(2));
    $("#junactualrow_total").val((parseFloat(jun_actual_row)).toFixed(2));
    $("#julactualrow_total").val((parseFloat(jul_actual_row)).toFixed(2));
    $("#augactualrow_total").val((parseFloat(aug_actual_row)).toFixed(2));
    $("#sepactualrow_total").val((parseFloat(sep_actual_row)).toFixed(2));
    $("#octactualrow_total").val((parseFloat(oct_actual_row)).toFixed(2));
    $("#novactualrow_total").val((parseFloat(nov_actual_row)).toFixed(2));
    $("#decactualrow_total").val((parseFloat(dec_actual_row)).toFixed(2));
    $("#janactualrow_total").val((parseFloat(jan_actual_row)).toFixed(2));
    $("#febactualrow_total").val((parseFloat(feb_actual_row)).toFixed(2));
    $("#maractualrow_total").val((parseFloat(mar_actual_row)).toFixed(2));
    var finalactual = (parseFloat(apr_actual_row) + parseFloat(may_actual_row) + parseFloat(jun_actual_row) +
        parseFloat(jul_actual_row) + parseFloat(aug_actual_row) +
        parseFloat(sep_actual_row) + parseFloat(oct_actual_row) + parseFloat(nov_actual_row) + parseFloat(
            dec_actual_row) + parseFloat(jan_actual_row) + parseFloat(feb_actual_row) + parseFloat(
            mar_actual_row)).toFixed(2);
    $("#finalactual").val(finalactual);
    $('#granttotal_actual').val(finalactual);


});
</script>
@endpush