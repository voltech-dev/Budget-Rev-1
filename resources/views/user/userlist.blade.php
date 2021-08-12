@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-center table-hover datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>SI</th>
                                    <th>Username</th>
                                    <th>User Designation</th>
                                    <th>Email ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0;
                                $i++; ?>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->designation }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div><br>
    <div class="text-center">
        <button onclick="location.href='{{ url('/usercreate/') }}'" style="text-center">
            Add User</button>
    </div>


@endsection
