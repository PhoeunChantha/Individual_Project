@extends('Compenens.Dashboard')
@section('content')
<div class="row">
    <div class="col-md-12 stretch-card ">
        <div class="card  ">
            <div class="card-body ">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <h6 class="card-title">New Customer</h6>
                <form method="post" action="{{ route('customer.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">CODE</label>
                                <input type="text" name="customercode" id="customercode" class="form-control"
                                    autocomplete="off" placeholder="Enter code">
                            </div>
                        </div><!-- Col -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">CUSTOMER TYPE</label>
                                <select name="customertypeid" class="form-control" id="customertypeid">
                                    @foreach($customer_types as $customertype)
                                    <option value="{{ $customertype->customertypeid }}">
                                        {{ $customertype->customertypename }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">CUSTOMER NAME</label>
                                <input type="text" name="customername" id="customername" class="form-control"
                                    autocomplete="off" placeholder="Enter Name">
                            </div>
                        </div><!-- Col -->
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">SEX</label>
                                <select class="form-select form-select-md mb-3" name="sex" id="sex" autocomplete="off">
                                    <option selected>select sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div><!-- Col -->
                        <div class="col-sm-4">
                            <label for="customerDob" class="form-label">Date of Birth</label>
                            <div class="input-group flatpickr" id="flatpickr-dob">
                                <input type="text" class="form-control" id="customerDob" name="dob">
                                <span class="input-group-text input-group-addon bg-transparent border-primary"><i
                                        data-feather="calendar" class="text-primary"></i></span>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" autocomplete="off"
                                    placeholder="Enter phone number">
                            </div>
                        </div><!-- Col -->
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">PASSPORTNUMBER</label>
                                <input type="text" name="passportnumber" id="passportnumber" class="form-control"
                                    autocomplete="off" placeholder="Enter passport">
                            </div>

                        </div><!-- Col -->
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">COUNTRY</label>
                                <input type="text" name="country" id="country" class="form-control" autocomplete="off"
                                    placeholder="Enter Country">
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->
                    <button type="submit" class="btn btn-primary submit">Save</button>
                    <button type="button" class="btn btn-info  btn-back" ><a href="{{route('customer.index')}}">Back</a></button>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        console.log('Initializing Flatpickr...');
        flatpickr("#customerDob", {
            dateFormat: "Y-m-d",
        });
        console.log('Flatpickr initialized.');
    });

</script>
@endsection