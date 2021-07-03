@extends('layouts.main')

@section('content')

<!-- Page Header -->

<!-- /Page Header -->

<div class="row">
    <div class="col-md-12">

        <form action="{{ url('/fyupdate/'.$finyear->id) }}" method="POST">
            @csrf
            <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
                    <div class="col-sm-3">

                        <input type="text" class="form-control form-control-sm" name="financial_year" id="financial_year" value="{{$finyear->financial_year}}">
                    </div>
                   
                </div>
              
               
            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        <a href="{{url('/fylist')}}" class="btn btn-outline-light btn-sm">
                            <i data-feather="chevrons-left" class="mr-2"></i>Cancel</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                        <button type="submit" class="btn btn-outline-success btn-sm"><i data-feather="check"
                                class="mr-2"></i>Save</button>
                    </div>
                </div>
            </div>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection
@push('scripts')
<script>

</script>
@endpush