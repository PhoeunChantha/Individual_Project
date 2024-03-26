@extends('Compenens.Dashboard')
@section('content')
<div class="card">
    <div class="card-body">
        <h6 class="card-title">Customer Type list</h6>
        <div class="table-responsive">
            <table class="table table-hover">

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('customertype.create') }}" class="btn btn-success me-md-2" > Create</a>
                </div>
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Customer Type Name</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer_types as $item)
                        <tr>
                            <td>{{ $item->customertypeid }}</td>
                            <td>{{ $item->customertypename }}</td>
                            <td><button class="btn btn-primary "> <a  class="text-white"
                                href="{{route('customertype.edit', $item->customertypeid)}}">
                              Edit
                            </a> </button>
                            <form action="{{ route('customertype.destroy', $item->customertypeid) }}" method="POST"
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

@endsection
