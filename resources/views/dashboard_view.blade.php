@php

@endphp
@extends('layouts.main')
@section('header')
@endsection
@section('content')
    @php
    @endphp
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
                                @php
                                    $total_target = 0;
                                    $total_actual = 0;
                                @endphp
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
                                                
                                                $sale = App\Models\Sale::where(['financial_year_id' => $dispalyYear->id, 'company_id' => $company->id, 'unit_id' => $unit->id])->first();
                                                $total_target += $sale->granttotal_target;
                                                $total_actual += $sale->granttotal_actual;
                                                
                                            @endphp
                                        @else
                                            <td>0</td>
                                            <td>0</td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                            <h6 style="text-align:left;float:left;">Target Total:{{ $total_target }}</h5>
                                <h6 style="text-align:right;float:right;">Actual Total:{{ $total_actual }}</h2>
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
                            @php
                                $total_turnover_target = 0;
                                $total_turnover_actual = 0;
                                
                            @endphp
                            @foreach ($units as $unit)
                                @php
                                    $turnover = App\Models\Turnover::Where(['financial_year_id' => $dispalyYear->id, 'company_id' => $company->id, 'unit_id' => $unit->id])->first();
                                @endphp
                                <tr>
                                    <td>{{ $unit->unit }}</td>
                                    @if ($turnover)
                                        <td>{{ $turnover->granttotal_target }}</td>
                                        <td>{{ $turnover->granttotal_actual }}</td>
                                        @php
                                            $turnover = App\Models\Turnover::Where(['financial_year_id' => $dispalyYear->id, 'company_id' => $company->id, 'unit_id' => $unit->id])->first();
                                            $total_turnover_target += $turnover->granttotal_target;
                                            $total_turnover_actual += $turnover->granttotal_actual;
                                        @endphp
                                    @else
                                        <td>0</td>
                                        <td>0</td>
                                    @endif
                            @endforeach
                        </table>
                        <h6 style="text-align:left;float:left;">Target Total:{{ $total_turnover_target }}</h5>
                            <h6 style="text-align:right;float:right;">Actual Total:{{ $total_turnover_actual }}</h2>

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
                            @php
                                $total_collection_target = 0;
                                $total_collection_actual = 0;
                            @endphp
                            @foreach ($units as $unit)
                                @php
                                    $collection = App\Models\Collection::Where(['financial_year_id' => $dispalyYear->id, 'company_id' => $company->id, 'unit_id' => $unit->id])->first();
                                    
                                @endphp
                                <tr>
                                    <td>{{ $unit->unit }}</td>
                                    @if ($collection)
                                        <td>{{ $collection->granttotal_target }}</td>
                                        <td>{{ $collection->granttotal_actual }}</td>
                                        @php
                                            $collection = App\Models\Collection::Where(['financial_year_id' => $dispalyYear->id, 'company_id' => $company->id, 'unit_id' => $unit->id])->first();
                                            $total_turnover_target += $collection->granttotal_target;
                                            $total_turnover_actual += $collection->granttotal_actual;
                                        @endphp
                                    @else
                                        <td>0</td>
                                        <td>0</td>
                                    @endif
                            @endforeach
                        </table>
                        <h6 style="text-align:left;float:left;">Target Total:{{ $total_collection_target }}</h5>
                            <h6 style="text-align:right;float:right;">Actual Total:{{ $total_collection_actual }}</h2>

                    </div>
                @endforeach
            </div>
        </div>
    @endsection
