@extends('layouts.main')

@section('content')

<!-- Page Header -->

<!-- /Page Header -->

<div class="row">
    <div class="col-md-12">

        <form action="{{ url('/companyupdate/'.$comp->id) }}" method="POST">
            @csrf
            <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                    <div class="col-sm-3">

                        <input type="text" class="form-control form-control-sm" name="company_name" id="company_name"
                            value="{{$comp->company_name}}" readonly>
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

@endpush