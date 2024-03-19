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
                <h6 class="card-title">Edit Customer</h6>
                <form method="post" action="{{ route('customer.update',$customers->customerid) }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">CODE</label>
                                <input type="text" name="customercode" id="customercode" class="form-control"
                                    placeholder="Enter code" value="{{ $customers->customercode }}">
                            </div>
                        </div><!-- Col -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">CUSTOMER TYPE</label>
                                <select name="customertypeid" class="form-control" id="customertypeid"
                                    value="{{ $customers->customertypeid }}">
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
                                    placeholder="Enter Name" value="{{ $customers->customername }}">
                            </div>
                        </div><!-- Col -->
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">SEX</label>
                                <select class="form-select form-select-md mb-3" name="sex" id="sex"
                                    value="{{ $customers->sex }}">
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
                                <input type="text" class="form-control" id="customerDob" name="dob"
                                    value="{{ $customers->dob }}">
                                <span class="input-group-text input-group-addon bg-transparent border-primary"><i
                                        data-feather="calendar" class="text-primary"></i></span>
                            </div>

                        </div>
                        <!-- Col -->
                    </div><!-- Row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Enter phone number" value="{{ $customers->phone }}">
                            </div>
                        </div><!-- Col -->
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">PASSPORTNUMBER</label>
                                <input type="text" name="passportnumber" id="passportnumber" class="form-control"
                                    placeholder="Enter passport" value="{{ $customers->passportnumber }}">
                            </div>

                        </div><!-- Col -->
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">COUNTRY</label>
                                <input type="text" name="country" id="country" class="form-control"
                                    placeholder="Enter Country" value="{{ $customers->country }}">
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->
                    <button type="submit" class="btn btn-primary submit">Update</button>
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
