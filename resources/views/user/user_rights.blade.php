@extends('layouts.main')
@section('header')
    <?php
    $company = DB::table('br_company')->get();
    $unit = DB::table('br_unit')->get();
    $role = Auth::user()->designation;
    echo $role;
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
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url('/userrights')}}" method="POST">
                            {{ @csrf_field() }}
                            <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                                    <div class="col-sm-3">
                                        <select name="company_name" class="form-control form-control-sm" id="company_name">
                                            <option selected disabled>--Select Company--</option>
                                            @foreach ($company as $comp)
                                                <option value="{{ $comp->id }}">{{ $comp->company_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                                    <div class="col-sm-3">
                                        <select name="unit" class="form-control form-control-sm" id="unit">
                                            {{-- <option selected disabled>--Select Unit--</option> --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Division</label>
                                    <div class="col-sm-3">
                                        <select name="division" class="form-control form-control-sm" id="division">
                                            {{-- <option selected disabled>--Select Division--</option> --}}
                                        </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Ecode</label>
                                    <div class="col-sm-3">
                                        <select name="ecode" class="form-control form-control-sm" id="ecode">
                                            {{-- <option selected disabled>--Select Division--</option> --}}
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-primary btn-sm" id="viewrights">Assign
                                            Rights</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="table table-bordered" id="rightstable">
                                            <table class="table table-bordered">
                                                <thead name="user_rights" id="user_rights" style="text-align:center">
                                                    <tr>
                                                        <th></th>
                                                        <th>VIEW</th>
                                                        <th>EDIT</th>
                                                        <th>CREATE</th>
                                                    </tr>
                                                </thead>

                                                <!-- Table content is from function add division-->
                                                <tbody>
                                                    <tr>
                                                        <th>Dashboard</th>
                                                        <td>
                                                            <center><input type="checkbox" class="form-check-input"
                                                                    id="dashboard_view" name="dashboard_view[]" value="dashboard_view"></center>
                                                        </td>
                                                        <td>
                                                            <center><input type="checkbox" class="form-check-input"
                                                                    id="dashboard_edit" name="dashboard_edit[]" value="dashboard_edit"></center>
                                                        </td>
                                                        <td>
                                                            <center><input type="checkbox" class="form-check-input"
                                                                    id="dashboard_create"  name="dashboard_create[]" value="dashboard_create">
                                                                <center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Salesorder</th>
                                                        <td>
                                                            <center><input type="checkbox" class="form-check-input"
                                                                    id="salesorder_view" name="salesorder_view[]" value="salesorder_view"></center>
                                                        </td>
                                                        <td>
                                                            <center><input type="checkbox" class="form-check-input"
                                                                    id="salesorder_edit" name="salesorder_edit[]" value="salesorder_edit"></center>
                                                        </td>
                                                        <td>
                                                            <center><input type="checkbox" class="form-check-input"
                                                                    id="salesorder_create" name="salesorder_create[]" value="salesorder_create">
                                                                <center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Turnover</th>
                                                        <td>
                                                            <center><input type="checkbox" class="form-check-input"
                                                                    id="turnover_view"  name="turnover_view[]" value="turnover_view"></center>
                                                        </td>
                                                        <td>
                                                            <center><input type="checkbox" class="form-check-input"
                                                                    id="turnover_edit" name="turnover_edit[]" value="turnover_edit"></center>
                                                        </td>
                                                        <td>
                                                            <center><input type="checkbox" class="form-check-input"
                                                                    id="turnover_create" name="turnover_create[]" value="turnover_create">
                                                                <center>
                                                        </td>
                                                    </tr>
                                                    <th>Collection</th>
                                                    <td>
                                                        <center><input type="checkbox" class="form-check-input"
                                                                id="collection_view" name="collection_view[]" value="collection_view"></center>
                                                    </td>
                                                    <td>
                                                        <center><input type="checkbox" class="form-check-input"
                                                                id="collection_edit" name="collection_edit[]" value="collection_edit"></center>
                                                    </td>
                                                    <td>
                                                        <center><input type="checkbox" class="form-check-input"
                                                                id="collection_create" name="collection_create[]" value="collection_create">
                                                            <center>
                                                    </td>
                                                </tbody>
                                            </table>

                                        </div>
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


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div>
                    </div>-->
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#rightstable').hide();

        });
        $('#company_name').change(function(event) {
            var company_name = $('#company_name').val();
            $.ajax({
                type: "GET",
                url: "{{ url('/companyid') }}",
                data: {
                    company_name: company_name
                },
                success: function(data) {
                    $('#unit').html(data);

                },

            });
        });
        $('#unit').change(function(event) {
            var unit = $('#unit').val();
            $.ajax({
                type: "GET",
                url: "{{ url('/user_division') }}",
                data: {
                    user_unit: unit
                },

                success: function(data) {
                    $('#division').html(data);


                }

            });

        });
        $('#division').change(function(event) {
            var division = $('#division').val();
            $.ajax({
                type: "GET",
                url: "{{ url('/userecode') }}",
                data: {
                    user_division: division
                },
                success: function(data) {

                    $('#ecode').html(data);

                }

            });
        });
        $('#viewrights').click(function() {
            $('#rightstable').show();
        });
    </script>
@endpush
