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
                <h6 class="card-title">Update CustomerType</h6>
                <form method="post" action="{{ route('customertype.update',$customer_types->customertypeid) }}">
                    @csrf

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">RoomType Name</label>
                                <input type="text" name="customertypename" id="roomtypename" class="form-control"
                                    autocomplete="off" placeholder="Enter Type" value="{{$customer_types->customertypename}}">
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->

                    <button type="submit" class="btn btn-primary submit">Update</button>
                    {{-- <button type="button" class="btn btn-info  btn-back" ><a href="{{route('customertype.index')}}">Back</a></button> --}}
                    <a href="{{ route('customertype.index') }}" class="btn btn-info">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
