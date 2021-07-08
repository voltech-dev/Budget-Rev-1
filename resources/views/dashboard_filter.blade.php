@extends('layouts.main')

@section('header')
<?php
$financialyear=DB::table('br_financial_year')
->get();

?>
@endsection

@section('content')
<div style="float:right">
    <form action="{{url('/search_salesfinyear')}}" method="POST" role="search">
        @csrf
        <div class="input-group">

            <select name="fy" onchange="this.form.submit()">
                <option>--Select FY--</option>
                @foreach($financialyear as $fy)
                <option value="{{$fy->id}}">{{$fy->financial_year}}</option>
                @endforeach
            </select>
            <!-- <span class="input-group-btn">
                <button type="submit" class="btn btn-default" style="border: 1px solid #dee2e6">
                    <i class="fas fa-search"></i>
                </button>
            </span> -->

        </div>
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
            ?> <tbody id="tab">
                @foreach($sales as $sale)
                <tr>
                    <td>{{$sale->unit}}</td>
                    <td>{{$sale->financial_year}}</td>
                    <td>{{$sale->granttotal_target}}</td>
                    <td>{{$sale->granttotal_actual}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- </div> -->
</div>

@endsection
@push('scripts')
<script>
// $('#fy').change(function() {

//     var financial_year = $('#fy').val();
//     $.ajax({
//         type: "GET",
//         url: "{{url('/finyear')}}",
//         data: {
//             fin_year: financial_year
//         },
//         success: function(data) {


//         }
//     });

// });
</script>
@endpush