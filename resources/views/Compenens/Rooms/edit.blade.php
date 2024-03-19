@extends('Compenens.Dashboard')
@section('content')
<div class="row">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <h6 class="card-title">New Room</h6>
                <form method="post" action="{{ route('room.update',$rooms->roomid) }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Room Number</label>
                                <input type="number" name="roomnumber" id="roomnumber" class="form-control"
                                    autocomplete="off"   value="{{$rooms->roomnumber}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Room Type</label>
                                <select name="roomtypeid" class="form-control" id="roomtypeid"  value="{{$rooms->roomtypeid}}">
                                    @foreach($room_types as $roomtype)
                                    <option value="{{ $roomtype->roomtypeid }}">
                                        {{ $roomtype->roomtypename }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Room Name</label>
                                <input type="text" name="roomname" id="roomname" class="form-control"
                                    autocomplete="off" value="{{$rooms->roomname}}">
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->

                    <button type="submit" class="btn btn-primary submit">update</button>
                    <button type="button" class="btn btn-info  btn-back" ><a href="{{route('room.index')}}">Back</a></button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
