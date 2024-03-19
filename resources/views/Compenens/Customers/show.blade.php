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
                <div class="list-group">
                    @foreach($customers as $customerid)
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $customer->customername }}</h5>
                            <small>{{ $customer->dob }}</small>
                        </div>
                        <p class="mb-1">Code: {{ $customer->customercode }}</p>
                        <p class="mb-1">Type ID: {{ $customer->customertypeid }}</p>
                        <p class="mb-1">Sex: {{ $customer->sex }}</p>
                        <p class="mb-1">Phone: {{ $customer->phone }}</p>
                        <p class="mb-1">Passport Number: {{ $customer->passportnumber }}</p>
                        <small>Country: {{ $customer->country }}</small>
                    </a>
                    @endforeach
                </div>

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
