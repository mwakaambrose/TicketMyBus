@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3><strong>Dashboard - Lists Of All Todays Booking Requests</strong></h3>
            <ul class="list-group"></ul>
            @foreach($bookings as $booking)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-10">
                            <h3><strong>{{ $booking->name }}</strong></h3>
                            <h6><strong>Tel: {{ $booking->phone_number }}</strong></h6>
                            <p>Travel: {{ $booking->to_from }}</p>
                            <p>Time: {{ $booking->departure_time }}</p>
                            <p>Booking Date: {{ $booking->created_at }}</p>
                        </div>
                        {{-- <div class="col-xs-2">
                            <form method="POST" action="/api/v1/booking/{{ $booking->id }}" class="pull-right">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <input type="hidden" name="is_approves" value="1">
                                <button type="submit" class="btn btn-success">Approve</button>
                            </form>
                        </div> --}}
                    </div>
                </li>
            @endforeach
        </div>
    </div>
</div>
@endsection
