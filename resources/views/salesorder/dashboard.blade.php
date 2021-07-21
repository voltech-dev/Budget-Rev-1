@extends('layouts.main')
@section('header')
<?php
$sum=0;
?>
@endsection
@section('content')

    <form action="{{ url('/dashboard') }}" method="POST">
        {{ @csrf_field() }}
        <div class="form-group-row">
            <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>

            <select name="financialyear" id="fy">
                @foreach ($financialYear as $fy)
                    <option value="{{ $fy->financial_year }}" @if ($fy->financial_year == $SelectedYear) {{ 'selected' }} @endif>
                        {{ $fy->financial_year }}</option>
                @endforeach
            </select>

            <input id="btnSubmit" type="submit" value="Go" />
        </div>
    </form><br>
    @php
    $dispalyYear = App\Models\financial_year::where(['financial_year' => $SelectedYear])->first();

    @endphp
    <div class="row">
        <div class="col-4">
            <div class="card">

                @foreach ($model as $company)
                    @php
                        $units = App\Models\unit::Where(['company_id' => $company->id])->get();
                    @endphp
                    <div class="card-header">
                        <h3 class="card-title">Salesorder-{{ $company->company_name }}</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <tr>
                                <th>Unit</th>
                                <th>Target </th>
                                <th>Actual</th>
                            </tr>
                            @foreach ($units as $unit)
                                @php
                                    $sale = App\Models\Sale::where(['financial_year_id' => $dispalyYear->id, 'company_id' => $company->id, 'unit_id' => $unit->id])->first();
                                    
                                @endphp
                                <tr>
                                    <td>{{ $unit->unit }}</td>
                                    @if ($sale)
                                        <td>{{ $sale->granttotal_target }}</td>
                                        <td>{{ $sale->granttotal_actual }}</td>
                                        @php
                                        
                                            $sale = App\Models\Sale::where(['financial_year_id' => $dispalyYear->id, 'company_id' => $company->id, 'unit_id' => $unit->id])->get();
                                           
                                            foreach($sale as $s){
                                            
                                            $sum++;
                                            echo $sum;

                                            }
                                        @endphp
                                    @else
                                        <td>0</td>
                                        <td>0</td>

                                    @endif

                            @endforeach
                        </table>

                    </div>
                @endforeach

            </div>
        </div>
        <div class="col-4">
            <div class="card">
                @foreach ($model as $company)
                    @php
                        $units = App\Models\unit::Where(['company_id' => $company->id])->get();
                    @endphp
                    <div class="card-header">
                        <h3 class="card-title">Turnover-{{ $company->company_name }}</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <tr>
                                <th>Unit</th>
                                <th>Target </th>
                                <th>Actual</th>
                            </tr>
                            @foreach ($units as $unit)
                                @php
                                    $sale = App\Models\Turnover::Where(['financial_year_id' => $dispalyYear->id, 'company_id' => $company->id, 'unit_id' => $unit->id])->first();
                                @endphp
                                <tr>
                                    <td>{{ $unit->unit }}</td>
                                    @if ($sale)
                                        <td>{{ $sale->granttotal_target }}</td>
                                        <td>{{ $sale->granttotal_actual }}</td>

                                    @else
                                        <td>0</td>
                                        <td>0</td>
                                    @endif
                            @endforeach
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                @foreach ($model as $company)
                    @php
                        $units = App\Models\unit::Where(['company_id' => $company->id])->get();
                    @endphp
                    <div class="card-header">
                        <h3 class="card-title">Collection-{{ $company->company_name }}</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <tr>
                                <th>Unit</th>
                                <th>Target </th>
                                <th>Actual</th>
                            </tr>
                            @foreach ($units as $unit)
                                @php
                                    $sale = App\Models\Collection::Where(['financial_year_id' => $dispalyYear->id, 'company_id' => $company->id, 'unit_id' => $unit->id])->first();
                                    
                                @endphp
                                <tr>
                                    <td>{{ $unit->unit }}</td>
                                    @if ($sale)

                                        <td>{{ $sale->granttotal_target }}</td>
                                        <td>{{ $sale->granttotal_actual }}</td>
                                    @else
                                        <td>0</td>
                                        <td>0</td>
                                    @endif
                            @endforeach
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
