@extends('layouts.main')
@section('header')
<?php
$company=DB::table('company')
->get();
$fin_year=DB::table('financial_year')
->get();

?>
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">

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
<div class="container-fluid">
    <!-- <div class="row">
        <div class="col-md-12">-->
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/turnoverstore')}}" method="POST">
                @csrf
                <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                        <div class="col-sm-3">
                            <select name="company_name" class="form-control form-control-sm" id="company_name">
                                <option selected>--Select Company--</option>
                                @foreach($company as $comp)
                                <option value="{{$comp->id}}">{{$comp->company_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                        <div class="col-sm-3">
                            <select name="unit" class="form-control form-control-sm" id="unit">
                                <option selected disabled>--Select Unit--</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
                        <div class="col-md-3">
                            <select name="financial_year" class="form-control form-control-sm" class="financial_year"
                                id="financial_year">
                                <option selected disabled>--Select--</option>
                                @foreach($fin_year as $fy)
                                <option value="{{$fy->financial_year}}-{{$fy->id}}">{{$fy->financial_year}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-sm" id="add">Add</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table table-bordered" id="tab" style="height:400px;overflow-x:auto;">
                                <table class="table table-bordered">
                                    <thead class="thead-light col-auto" name="division" id="division"
                                        style="text-align:center">

                                    </thead>
                                    <tbody name='sub_sales' id='sub_sales'>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div><br>
                    <div class="form-group row" id="finaltotal">
                        <div class="col-sm-3">
                            <label>Total Target</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="granttotal_target" id="granttotal_target">
                        </div>
                        <div class="col-sm-3">
                            <label>Total Actual</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="granttotal_actual" id="granttotal_actual" disabled>
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
        </div>
    </div>
    <!-- </div>
    </div>-->
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $('#tab').hide();
    $('#finaltotal').hide();
    $('#get_total').hide();

});
//Fetch unit of the company on select of company 
$('#company_name').change(function(event) {
    var company_name = $('#company_name').val();
    $.ajax({
        type: "GET",
        url: "{{url('/companyid')}}",
        data: {
            company_name: company_name
        },
        dataType: 'json',
        success: function(data) {
            $('select[name="unit"]').empty();
            $.each(data, function(key, value) {
                $('select[name="unit"]').append('<option value="' + key + '">' + value +
                    '</option>');

            });
        },
    });

});

//Alert user if same financial year already entered for the unit
$('#add').click(function() {
    $('#finaltotal').show();

    var unit = $('#unit').val();
    var financialyear = $('#financial_year').val();
    var mystr = financialyear.split('-');
    var op = mystr[2];

    var yearflag = 0;
    $.ajax({
        type: "GET",
        url: "{{url('/turnover_financial_year')}}",
        data: {
            fin_year: op,
            unit_id: unit
        },

        success: function(data) {
            if (data == 'found') {
                alert('Financial Year already entered for this unit');
            } else {
                add_division();
            }
        }
    });



});
//Append table on click of add button
function add_division() {
    $('#tab').show();
    var unit = $('#unit').val();
    var financialyear = $('#financial_year').val();
    var mystr = financialyear.split('-');
    var op = mystr[0];
    var op1 = mystr[1];
    var year1 = op.slice(-2);
    // var year2=op1.slice(-2);

    $.ajax({
        type: "GET",
        url: "{{url('/fetchdivision')}}",
        data: {
            unit: unit
        },
        dataType: 'json',
        success: function(data) {
            var i = 0;
            var k = 0;
            console.log(data);
            // $('thead[name="division"]').append('<tr>' + '<th>' + 'Month' + '</th>' + '<th>'++'</th>' +
            //     '</tr>')
            $('thead[name="division"]').append('<th colspan=1>' + 'MONTH' + '</th>');
            $('tbody[name="sub_sales"]').append('<tr id="target">' + '<td>' + '</td>' + '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="apr">' + '<th>' + 'Apr' + ' ' + op + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="may">' + '<th>' + 'May' + ' ' + op + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="jun">' + '<th>' + 'Jun' + ' ' + op + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="jul">' + '<th>' + 'Jul' + ' ' + op + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="aug">' + '<th>' + 'Aug' + ' ' + op + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="sep">' + '<th>' + 'Sep' + ' ' + op + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="oct">' + '<th>' + 'Oct' + ' ' + op + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="nov">' + '<th>' + 'Nov' + ' ' + op + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="dec">' + '<th>' + 'Dec' + ' ' + op + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="jan">' + '<th>' + 'Jan' + ' ' + op1 + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="feb">' + '<th>' + 'Feb' + ' ' + op1 + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="mar">' + '<th>' + 'Mar' + ' ' + op1 + '</th>' +
                '</tr>');
            $('tbody[name="sub_sales"]').append('<tr id="total">' + '<th>' + 'Total' + '</th>' + '</tr>');
            var i = 0;
            var k = 0;
            $.each(data, function(key, value) {
                i = i + 1;

                $('thead[name="division"]').append('<th colspan="2" style=text-align:center>' +
                    value + '</th>' +
                    '<input type="hidden" name="div[]" id="div_' +
                    i + '" value="' +
                    key +
                    '">' + value);
                $('#target').append('<th colspan=1 style="text-align:center">' + 'Target' +
                    '</th>' + '<th colspan=1>' + 'Actual' + '</th>');

                $('#apr').append('<td colspan=1>' +
                    '<input type="text" style="width:100px" name="apr_target[]" id="apr_target_' +
                    i + '" class="target target_' + i +
                    ' apr_target"  autocomplete="off">' +
                    '</td>' + '<td colspan=1>' +
                    '<input type="text" style="width:100px" name="apr_actual" disabled id="apr_actual">' +
                    '</td>');
                $('#may').append('<td colspan=1>' +
                    '<input type="text" style="width:100px" name="may_target[]" id="may_target_' +
                    i + '" class="target target_' + i +
                    ' may_target"  autocomplete="off">' +
                    '</td>' + '<td colspan=1>' +
                    '<input type="text" style="width:100px" name="may_actual" id="may_actual" disabled >' +
                    '</td>');
                $('#jun').append('<td>' +
                    '<input type="text" style="width:100px" name="jun_target[]" id="jun_target_' +
                    i + '" class="target target_' + i +
                    ' jun_target" autocomplete="off">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:100px" name="jun_actual" id="jun_actual" disabled >' +
                    '</td>');
                $('#jul').append('<td>' +
                    '<input type="text" style="width:100px" name="jul_target[]" id="jul_target_' +
                    i + '" class="target target_' + i +
                    ' jul_target"   autocomplete="off">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:100px" name="jul_actual" id="jul_actual" disabled >' +
                    '</td>');
                $('#aug').append('<td>' +
                    '<input type="text" style="width:100px" name="aug_target[]" id="aug_target_' +
                    i + '" class="target target_' + i +
                    ' aug_target"  autocomplete="off">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:100px" name="aug_actual" id="aug_actual" disabled >' +
                    '</td>');
                $('#sep').append('<td>' +
                    '<input type="text" style="width:100px" name="sep_target[]" id="sep_target_' +
                    i + '" class="target target_' + i +
                    ' sep_target"   autocomplete="off">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:100px" name="sep_actual" id="sep_actual" disabled >' +
                    '</td>');
                $('#oct').append('<td>' +
                    '<input type="text" style="width:100px" name="oct_target[]" id="oct_target_' +
                    i + '" class="target target_' + i +
                    ' oct_target"  autocomplete="off">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:100px" name="oct_actual" id="oct_actual" disabled >' +
                    '</td>');
                $('#nov').append('<td>' +
                    '<input type="text" style="width:100px" name="nov_target[]" id="nov_target_' +
                    i + '" class="target target_' + i +
                    ' nov_target"  autocomplete="off">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:100px" name="nov_actual" id="nov_actual" disabled >' +
                    '</td>');
                $('#dec').append('<td>' +
                    '<input type="text" style="width:100px" name="dec_target[]" id="dec_target_' +
                    i + '" class="target target_' + i +
                    ' dec_target"  autocomplete="off">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:100px" name="dec_actual" id="dec_actual" disabled >' +
                    '</td>');
                $('#jan').append('<td>' +
                    '<input type="text" style="width:100px" name="jan_target[]" id="jan_target_' +
                    i + '" class="target target_' + i +
                    ' jan_target"  autocomplete="off">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:100px" name="jan_actual" id="jan_actual" disabled >' +
                    '</td>');
                $('#feb').append('<td>' +
                    '<input type="text" style="width:100px" name="feb_target[]" id="feb_target_' +
                    i + '" class="target target_' + i +
                    ' feb_target"  autocomplete="off">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:100px" name="feb_actual" id="feb_actual" disabled >' +
                    '</td>');
                $('#mar').append('<td>' +
                    '<input type="text" style="width:100px" name="mar_target[]" id="mar_target_' +
                    i + '" class="target target_' + i +
                    ' mar_target"  autocomplete="off">' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:100px" name="mar_actual" id="mar_actual" disabled >' +
                    '</td>');
                $('#total').append('<td>' +
                    '<input type="text" style="width:100px" name="targetcol_total[]" id="targetcol_total' +
                    i + '" class="target target_' + i +
                    'targetcol_total" >' +
                    '</td>' + '<td>' +
                    '<input type="text" style="width:100px" name="actualcol_total" disabled >' +
                    '</td>');



            });
            //Append total row
            var totalrow = i;
            $('thead[name="division"]').append('<th>' + 'Target' + '</th>' + '<th>' + 'Actual' + '</th>');
            $('#target').append('<th>' + 'Total Target' + '</th>' + '<th>' + 'Total Actual' + '</th>');
            $('#apr').append('<td>' +
                '<input type="text" style="width:100px" name="aprtargetrow_total" id="aprtargetrow_total"><input type="hidden" style="width:60px" name="totalrow" id="totalrow" value="' +
                totalrow + '">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="apractualrow_total" id="apractualrow_total" disabled >' +
                '</td>');
            $('#may').append('<td>' +
                '<input type="text" style="width:100px" name="maytargetrow_total" id="maytargetrow_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="mayactualrow_total" id="mayactualrow_total" disabled >' +
                '</td>');
            $('#jun').append('<td>' +
                '<input type="text" style="width:100px" name="juntargetrow_total" id="juntargetrow_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="junactualrow_total" id="junactualrow_total" disabled >' +
                '</td>');
            $('#jul').append('<td>' +
                '<input type="text" style="width:100px" name="jultargetrow_total" id="jultargetrow_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="julactualrow_total" id="julactualrow_total" disabled >' +
                '</td>');
            $('#aug').append('<td>' +
                '<input type="text" style="width:100px" name="augtargetrow_total" id="augtargetrow_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="augactualrow_total" id="augactualrow_total" disabled >' +
                '</td>');
            $('#sep').append('<td>' +
                '<input type="text" style="width:100px" name="septargetrow_total" id="septargetrow_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="sepactualrow_total" id="sepactualrow_total" disabled >' +
                '</td>');
            $('#oct').append('<td>' +
                '<input type="text" style="width:100px" name="octtargetrow_total" id="octtargetrow_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="octactualrow_total" id="octactualrow_total" disabled >' +
                '</td>');
            $('#nov').append('<td>' +
                '<input type="text" style="width:100px" name="novtargetrow_total" id="novtargetrow_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="novactualrow_total" id="novactualrow_total" disabled >' +
                '</td>');
            $('#dec').append('<td>' +
                '<input type="text" style="width:100px" name="dectargetrow_total" id="dectargetrow_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="decactualrow_total" id="decactualrow_total" disabled >' +
                '</td>');
            $('#jan').append('<td>' +
                '<input type="text" style="width:100px" name="jantargetrow_total" id="jantargetrow_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="janactualrow_total" id="janactualrow_total" disabled >' +
                '</td>');
            $('#feb').append('<td>' +
                '<input type="text" style="width:100px" name="febtargetrow_total" id="febtargetrow_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="febactualrow_total" id="febactualrow_total" disabled >' +
                '</td>');
            $('#mar').append('<td>' +
                '<input type="text" style="width:100px" name="martargetrow_total" id="martargetrow_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="maractualrow_total" id="maractualrow_total" disabled >' +
                '</td>');
            $('#total').append('<td>' +
                '<input type="text" style="width:100px" name="target_total" id="target_total">' +
                '</td>' + '<td>' +
                '<input type="text" style="width:100px" name="actual_total" disabled >' +
                '</td>')



        },
    });

};;
$(document).on('keyup', '.target', function() {
    var totaldiv = $("#totalrow").val();
    // console.log($(this).val());
    //Column wise target total begins
    var target_id = $(this).attr('id');
    var targetid_arr = target_id.split('_');
    var cnt = targetid_arr[2];
    var apr_target = $("#apr_target_" + cnt).val();
    var may_target = $("#may_target_" + cnt).val();
    var jun_target = $("#jun_target_" + cnt).val();
    var jul_target = $("#jul_target_" + cnt).val();
    var aug_target = $("#aug_target_" + cnt).val();
    var sep_target = $("#sep_target_" + cnt).val();
    var oct_target = $("#oct_target_" + cnt).val();
    var nov_target = $("#nov_target_" + cnt).val();
    var dec_target = $("#dec_target_" + cnt).val();
    var jan_target = $("#jan_target_" + cnt).val();
    var feb_target = $("#feb_target_" + cnt).val();
    var mar_target = $("#mar_target_" + cnt).val();
    if (!isNaN(apr_target) && apr_target != '') {
        apr_target = apr_target;
    } else {
        apr_target = 0;
    }


    if (!isNaN(may_target) && may_target != '') {
        may_target = may_target;
    } else {
        may_target = 0;
    }

    if (!isNaN(jun_target) && jun_target != '') {
        jun_target = jun_target;
    } else {
        jun_target = 0;
    }

    if (!isNaN(jul_target) && jul_target != '') {
        jul_target = jul_target;
    } else {
        jul_target = 0;
    }

    if (!isNaN(aug_target) && aug_target != '') {
        aug_target = aug_target;
    } else {
        aug_target = 0;
    }

    if (!isNaN(sep_target) && sep_target != '') {
        sep_target = sep_target;
    } else {
        sep_target = 0;
    }

    if (!isNaN(oct_target) && oct_target != '') {
        oct_target = oct_target;
    } else {
        oct_target = 0;
    }

    if (!isNaN(nov_target) && nov_target != '') {
        nov_target = nov_target;
    } else {
        nov_target = 0;
    }

    if (!isNaN(dec_target) && dec_target != '') {
        dec_target = dec_target;
    } else {
        dec_target = 0;
    }

    if (!isNaN(jan_target) && jan_target != '') {
        jan_target = jan_target;
    } else {
        jan_target = 0;
    }

    if (!isNaN(feb_target) && feb_target != '') {
        feb_target = feb_target;
    } else {
        feb_target = 0;
    }

    if (!isNaN(mar_target) && mar_target != '') {
        mar_target = mar_target;
    } else {
        mar_target = 0;
    }
    var totalrow_target = (parseFloat(apr_target) + parseFloat(may_target) + parseFloat(jun_target) +
        parseFloat(jul_target) + parseFloat(aug_target) + parseFloat(sep_target) + parseFloat(oct_target) +
        parseFloat(nov_target) + parseFloat(dec_target) + parseFloat(jan_target) + parseFloat(feb_target) +
        parseFloat(mar_target)).toFixed(2);
    console.log(totalrow_target);
    $("#targetcol_total" + cnt).val(parseFloat(totalrow_target).toFixed(2));
    //column wise target total ends here

    //Row wise target total begins
    var apr_target_row = 0;
    var may_target_row = 0;
    var jun_target_row = 0;
    var jul_target_row = 0;
    var aug_target_row = 0;
    var sep_target_row = 0;
    var oct_target_row = 0;
    var nov_target_row = 0;
    var dec_target_row = 0;
    var jan_target_row = 0;
    var feb_target_row = 0;
    var mar_target_row = 0;
    for (var j = 1; j <= totaldiv; j++) {

        var apr_target_rowval = $("#apr_target_" + j).val();
        var may_target_rowval = $("#may_target_" + j).val();
        var jun_target_rowval = $("#jun_target_" + j).val();
        var jul_target_rowval = $("#jul_target_" + j).val();
        var aug_target_rowval = $("#aug_target_" + j).val();
        var sep_target_rowval = $("#sep_target_" + j).val();
        var oct_target_rowval = $("#oct_target_" + j).val();
        var nov_target_rowval = $("#nov_target_" + j).val();
        var dec_target_rowval = $("#dec_target_" + j).val();
        var jan_target_rowval = $("#jan_target_" + j).val();
        var feb_target_rowval = $("#feb_target_" + j).val();
        var mar_target_rowval = $("#mar_target_" + j).val();


        if (!isNaN(apr_target_rowval) && apr_target_rowval != '') {
            apr_target_rowval = apr_target_rowval;
        } else {
            apr_target_rowval = 0;
        }


        if (!isNaN(may_target_rowval) && may_target_rowval != '') {
            may_target_rowval = may_target_rowval;
        } else {
            may_target_rowval = 0;
        }

        if (!isNaN(jun_target_rowval) && jun_target_rowval != '') {
            jun_target_rowval = jun_target_rowval;
        } else {
            jun_target_rowval = 0;
        }

        if (!isNaN(jul_target_rowval) && jul_target_rowval != '') {
            jul_target_rowval = jul_target_rowval;
        } else {
            jul_target_rowval = 0;
        }

        if (!isNaN(aug_target_rowval) && aug_target_rowval != '') {
            aug_target_rowval = aug_target_rowval;
        } else {
            aug_target_rowval = 0;
        }

        if (!isNaN(sep_target_rowval) && sep_target_rowval != '') {
            sep_target_rowval = sep_target_rowval;
        } else {
            sep_target_rowval = 0;
        }

        if (!isNaN(oct_target_rowval) && oct_target_rowval != '') {
            oct_target_rowval = oct_target_rowval;
        } else {
            oct_target_rowval = 0;
        }

        if (!isNaN(nov_target_rowval) && nov_target_rowval != '') {
            nov_target_rowval = nov_target_rowval;
        } else {
            nov_target_rowval = 0;
        }

        if (!isNaN(dec_target_rowval) && dec_target_rowval != '') {
            dec_target_rowval = dec_target_rowval;
        } else {
            dec_target_rowval = 0;
        }

        if (!isNaN(jan_target_rowval) && jan_target_rowval != '') {
            jan_target_rowval = jan_target_rowval;
        } else {
            jan_target_rowval = 0;
        }

        if (!isNaN(feb_target_rowval) && feb_target_rowval != '') {
            feb_target_rowval = feb_target_rowval;
        } else {
            feb_target_rowval = 0;
        }

        if (!isNaN(mar_target_rowval) && mar_target_rowval != '') {
            mar_target_rowval = mar_target_rowval;
        } else {
            mar_target_rowval = 0;
        }

        apr_target_row = (parseFloat(apr_target_row) + parseFloat(apr_target_rowval)).toFixed(2);
        may_target_row = (parseFloat(may_target_row) + parseFloat(may_target_rowval)).toFixed(2);
        jun_target_row = (parseFloat(jun_target_row) + parseFloat(jun_target_rowval)).toFixed(2);
        jul_target_row = (parseFloat(jul_target_row) + parseFloat(jul_target_rowval)).toFixed(2);
        aug_target_row = (parseFloat(aug_target_row) + parseFloat(aug_target_rowval)).toFixed(2);
        sep_target_row = (parseFloat(sep_target_row) + parseFloat(sep_target_rowval)).toFixed(2);
        oct_target_row = (parseFloat(oct_target_row) + parseFloat(oct_target_rowval)).toFixed(2);
        nov_target_row = (parseFloat(nov_target_row) + parseFloat(nov_target_rowval)).toFixed(2);
        dec_target_row = (parseFloat(dec_target_row) + parseFloat(dec_target_rowval)).toFixed(2);
        jan_target_row = (parseFloat(jan_target_row) + parseFloat(jan_target_rowval)).toFixed(2);
        feb_target_row = (parseFloat(feb_target_row) + parseFloat(feb_target_rowval)).toFixed(2);
        mar_target_row = (parseFloat(mar_target_row) + parseFloat(mar_target_rowval)).toFixed(2);
        console.log(apr_target_row);
    }
    $("#aprtargetrow_total").val((parseFloat(apr_target_row)).toFixed(2));
    $("#maytargetrow_total").val((parseFloat(may_target_row)).toFixed(2));
    $("#juntargetrow_total").val((parseFloat(jun_target_row)).toFixed(2));
    $("#jultargetrow_total").val((parseFloat(jul_target_row)).toFixed(2));
    $("#augtargetrow_total").val((parseFloat(aug_target_row)).toFixed(2));
    $("#septargetrow_total").val((parseFloat(sep_target_row)).toFixed(2));
    $("#octtargetrow_total").val((parseFloat(oct_target_row)).toFixed(2));
    $("#novtargetrow_total").val((parseFloat(nov_target_row)).toFixed(2));
    $("#dectargetrow_total").val((parseFloat(dec_target_row)).toFixed(2));
    $("#jantargetrow_total").val((parseFloat(jan_target_row)).toFixed(2));
    $("#febtargetrow_total").val((parseFloat(feb_target_row)).toFixed(2));
    $("#martargetrow_total").val((parseFloat(mar_target_row)).toFixed(2));
    var finaltarget = (parseFloat(apr_target_row) + parseFloat(may_target_row) + parseFloat(jun_target_row) +
        parseFloat(jul_target_row) + parseFloat(aug_target_row) +
        parseFloat(sep_target_row) + parseFloat(oct_target_row) + parseFloat(nov_target_row) + parseFloat(
            dec_target_row) + parseFloat(jan_target_row) + parseFloat(feb_target_row) + parseFloat(
            mar_target_row)).toFixed(2);
    //Row wise target total ends
    $("#target_total").val(finaltarget);
    $('#granttotal_target').val(finaltarget);


});
//Remove table content on change of unit
$('#unit').change(function() {
    $('#tab').hide();
    $('#division th').remove();
    $('#sub_sales tr').remove();
});
//Remove table content on change of financial year
$('#financial_year').change(function() {
    $('#tab').hide();
    $('#division th').remove();
    $('#sub_sales tr').remove();
})
</script>
@endpush