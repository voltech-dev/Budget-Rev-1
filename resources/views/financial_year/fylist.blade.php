@extends('layouts.main')

@section('content')


<style>
td {
    align: center;
    font-size:14px;
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
                                <th>Financial Year</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="text-center">
<button onclick="location.href='{{ url('/fycreate/') }}'" style="text-center">
    Add Financial Year</button>
</div>

@endsection