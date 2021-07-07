@extends('layouts.main')

@section('header')
<?php
$financialyear=DB::table('br_financial_year')
->get();

?>
@endsection

@section('content')
<div style="float:right">
    <form>
        @csrf
        <select name="fy" id="fy">
            <option selected>--Select FY--</option>
            @foreach($financialyear as $fy)
            <option value="{{$fy->id}}">{{$fy->financial_year}}</option>
            @endforeach
        </select>
    </form>
</div>
<div class="container">
    <!-- <div class="col-md-4"> -->
    <div class="table-responsive">
        <table class="table card-table ">
            <thead>
                <th>Unit</th>
                <th>FY</th>
                <th>Target</th>
                <th>Actual</th>
            </thead>

            <?php
            $year = date('Y');
            ?>
            @foreach($sales as $sale)

            <tr>
                <td>{{$sale->unit->unit}}</td>
                <td> <?php echo $year."-".($year+1);?></td>
                <td>{{$sale->granttotal_target}}</td>
                <td>{{$sale->granttotal_actual}}</td>
            </tr>
            @endforeach

        </table>
    </div>
    <!-- </div> -->
</div>

@endsection
@push('scripts')
<script>
$('#fy').change(function() {
    var financial_year = $('#fy').val();
    $.ajax({
        type: "GET",
        url: "{{url('/finyear')}}",
        data: {
            fin_year: financial_year
        },
        datatype:'json',
        success: function(data) {
            $.each(data, function(key, value) {
              
            });

        }
    });

});
</script>
@endpush