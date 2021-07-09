@extends('layouts.main')
@section('header')
<?php
$company=DB::table('br_company')
->get();
?>
@endsection

@section('content')
<div class="container">
        <div class="col-ms-12">
            <div class="form-group-row">
                <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                <select name="company" id="company">
                    <option selected disabled>--Select Company--</option>
                    @foreach($company as $comp)
                    <option value="{{$comp->id}}">{{$comp->company_name}}</option>
                    @endforeach
                </select>
            </div>
  
</div>
<br>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Salesorder</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap" id="tab">
                    <thead>
                        <tr>
                            <th>Unit</th>
                            <th>FY</th>
                            <th>Target</th>
                            <th>Actual</th>
                        </tr>
                    </thead>
                    <tbody name="salesdata" id="salesdata">

                    </tbody>
                </table>
            </div>
            <!-- table-responsive -->
        </div>
    </div>
    @endsection
    @push('scripts')
    <script>
    $('#company').change(function() {
        var currentYear = (new Date).getFullYear()
        var currentfy = currentYear + '-' + (currentYear + 1);

        var company = $('#company').val();
        // alert(company);
        $.ajax({
            type: 'GET',
            url: "{{url('/getsalesorderdata')}}",
            data: {
                company_name: company
            },
            datatype: 'json',
            success: function(data) {
                alert(data);
                 $("#salesdata").html(data);

                // data = JSON.parse(data);
                // console.log(data);
                // $.each(data, function(key, value) {
                //     $('tbody[name="sales"]').append('<tr>' + '<td>' + value + '</td>' +
                //         '<td>' + currentfy + '</td>' + '</tr>');


                // });
            }

        });
    });
    </script>
    @endpush