<!-- booking/show.blade.php -->

@extends('layouts.app2')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Booking Details') }}</div>

                    <div class="card-body">
                    @if ($booking)
                            <h5>Booking ID: {{ $booking->id }}</h5>
                            <p>Ferry ID: {{ $booking->ferry_id }}</p>
                            <p>Customer ID: {{ $booking->customer_id }}</p>
                            <p>Capacity Booked: {{ $booking->CapacityBooked }}</p>


                          <!-- Button to go back to booking index -->
                          <a href="{{ route('useBooking') }}"style="display: inline-block; padding: 10px 10px; background-color: #337ab7; color: #fff; text-decoration: none; border-radius: 5px;">
                            <i class="fa fa-arrow-left"></i> Back to Bookings

                            </a>
                        @else
                            <p>No booking found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
