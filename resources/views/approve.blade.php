@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3><strong>Todays Approved Bookings</strong></h3>
            <ul class="list-group"></ul>
            @foreach($approvings as $approved)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-10">
                            <h3><strong>{{ $approved->name }}</strong></h3>
                            <h6><strong>{{ $approved->phone_number }}</strong></h6>
                            <p>{{ $approved->to_from }}</p>
                            <p>{{ $approved->departure_time }}</p>
                            <p>Seat Number: {{ $approved->seat_number }}</p>
                        </div>
                        <div class="col-xs-2">
                            <form method="POST" action="/api/v1/booking/{{$approved->id}}" class="pull-right">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="is_approves" value="0">
                                <button type="submit" class="btn btn-danger">Cancel Booking</button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </div>
    </div>
</div>
@endsection
