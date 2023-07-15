@extends('layouts.app2')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Bookings</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ferry ID</th>
                                            <th>Customer ID</th>
                                            <th>Capacity Booked</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <td>{{ $booking->id }}</td>
                                                <td>{{ $booking->ferry_id }}</td>
                                                <td>{{ $booking->customer_id }}</td>
                                                <td>{{ $booking->CapacityBooked }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Add a button to go back to bookings -->
                            <a href="{{ route('useBooking') }}" class="btn btn-primary"style="display: inline-block; padding: 10px 10px; background-color: #337ab7; color: #fff; text-decoration: none; border-radius: 5px"> Go Back to Bookings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
