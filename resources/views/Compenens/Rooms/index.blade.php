@extends('Compenens.Dashboard')
@section('content')
{{-- <div class="card">
    <div class="card-body">
        <h6 class="card-title">Room list</h6>
        <div class="table-responsive">
            <table class="table table-hover">

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('room.create') }}" class="btn btn-success me-md-2"> Create</a>
</div>
<thead>
    <tr>
        <th>ID</th>
        <th>Room Number</th>
        <th>Room Type ID</th>
        <th>Room Name</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($rooms as $item)
    <tr>
        <td>{{ $item->roomid }}</td>
        <td>{{ $item->roomnumber }}</td>
        <td>{{ $item->roomtypeid }}</td>
        <td>{{ $item->roomname }}</td>
        <td><button class="btn btn-primary btn-sm"> <a class="text-white" href="{{route('room.edit', $item->roomid)}}">
                    Edit
                </a> </button>
            <form action="{{ route('room.destroy', $item->roomid) }}" method="POST" class="d-inline">
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
</div> --}}





<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">RoomType list</h6>
                <div class="table-responsive">
                    <table class="table table-hover">
                        {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('roomtype.create') }}" class="btn btn-success me-md-2 " > Create</a>
                        </div> --}}
                        <thead>
                            <tr>
                              <th>ID</th>
                              <th>Customer Type Name</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($customer_types as $item)
                                <tr>
                                    <td>{{ $item->customertypeid }}</td>
                                    <td>{{ $item->customertypename }}</td>
                                    <td><button class="btn btn-primary btn-sm"> <a  class="text-white"
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

                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Room list</h6>
                <div class="table-responsive">
                    <table class="table table-hover">

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('room.create') }}" class="btn btn-success me-md-2 "> Create</a>
                        </div>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Room Number</th>
                                <th>Room Type ID</th>
                                <th>Room Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $item)
                            <tr>
                                <td>{{ $item->roomid }}</td>
                                <td>{{ $item->roomnumber }}</td>
                                <td>{{ $item->roomtypeid }}</td>
                                <td>{{ $item->roomname }}</td>
                                <td><button class="btn btn-primary btn-sm"> <a class="text-white"
                                            href="{{route('room.edit', $item->roomid)}}">
                                            Edit
                                        </a> </button>
                                    <form action="{{ route('room.destroy', $item->roomid) }}" method="POST"
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
    </div>
</div>










@endsection
