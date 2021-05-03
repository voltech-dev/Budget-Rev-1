<div class="row">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Month</th>
                                <th>Target</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <select id="month" name="month" readonly>
                                        <option selected>{{$target->month}}</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                    </select>
                                </td>
                                <td><input type="text" name="amount" id="amount" value="{{$target->amount}}"></td>


                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><br>