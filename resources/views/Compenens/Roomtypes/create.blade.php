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
                <h6 class="card-title">New RoomType</h6>
                <form method="post" action="{{ route('roomtype.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">RoomType Name</label>
                                <input type="text" name="roomtypename" id="roomtypename" class="form-control"
                                    placeholder="Enter RoomType">
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->

                    <button type="submit" class="btn btn-primary submit">Save</button>
                    <button type="button" class="btn btn-info  btn-back" ><a href="{{route('roomtype.index')}}">Back</a></button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
