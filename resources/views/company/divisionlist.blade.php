@extends('layouts.main')

@section('content')

<?php
$company =App\Models\company::get();
?>
<style>
td {
    align: center;
    font-size: 14px;
}

.text-center {
    text-align: center;
}
</style>

<!-- Page Header -->

<!-- /Page Header -->

<!-- Search Filter -->

<!-- /Search Filter -->

<div class="row">
    <div class="col-sm-12">

        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>SI</th>
                                <th>Division</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($company as $comp)
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                   
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="text-center">
    <button onclick="location.href='{{ url('/companycreate/') }}'" style="text-center">
        Add Company</button>
</div>

@endsection