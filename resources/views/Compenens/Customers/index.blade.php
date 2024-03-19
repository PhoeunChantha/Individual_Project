@extends('Compenens.Dashboard')
@section('content')
<div class="card">
    <div class="card-body">
        <h6 class="card-title">Customer list</h6>
        <div class="table-responsive">
            <div id="dataTableExample_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="dataTableExample"></label></div>

            <table class="table table-hover">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{route('customer.create')}}" class="btn btn-success me-md-2"> Create</a>
                </div>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Code</th>
                        <th>Customer TypeID</th>
                        <th>Customer Name</th>
                        <th>Sex</th>
                        <th>Date of Birth</th>
                        <th>Phone</th>
                        <th>Passport Number</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $item)
                    <tr>

                        <td>{{ $item->customerid }}</td>
                        <td>{{ $item->customercode }}</td>
                        <td>{{ $item->customertypeid }}</td>
                        <td>{{ $item->customername }}</td>
                        <td>{{ $item->sex }}</td>
                        <td>{{ $item->dob }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->passportnumber }}</td>
                        <td>{{ $item->country }}</td>



                        <td>

                            <button class="btn btn-success btn-sm"> <a  class="text-white"
                                href="{{route('customer.edit', $item->customerid)}}">
                              view
                            </a> </button>
                            <button class="btn btn-primary btn-sm"> <a  class="text-white"
                                    href="{{route('customer.edit', $item->customerid)}}">
                                  Edit
                                </a> </button>
                            <form action="{{ route('customer.destroy', $item->customerid) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const customerId = this.getAttribute('data-customer-id');
                const form = document.getElementById('deleteForm' + customerId);
                if (confirm('Are you sure you want to delete this item?')) {
                    form.submit();
                }
            });
        });
    });

</script>
@endsection
