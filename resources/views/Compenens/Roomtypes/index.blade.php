@extends('Compenens.Dashboard')
@section('content')


<div class="card">
    <div class="card-body">
        <h6 class="card-title">RoomType list</h6>
        <div class="table-responsive">
            <table class="table table-hover">

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('roomtype.create') }}" class="btn btn-success me-md-2" > Create</a>
                </div>
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>RoomType Name</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($room_types as $item)
                        <tr>
                            <td>{{ $item->roomtypeid }}</td>
                            <td>{{ $item->roomtypename }}</td>
                            <td><button class="btn btn-primary btn-sm"> <a  class="text-white"
                                href="{{route('roomtype.edit', $item->roomtypeid)}}">
                              Edit
                            </a> </button>
                            <form action="{{ route('roomtype.destroy', $item->roomtypeid) }}" method="POST"
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
