<?php

namespace App\Http\Controllers;
use App\Models\Ferry;
use App\Models\Customer;
use Illuminate\Http\Request;


use App\Models\Booking as bookingmodel;

class booking extends Controller
{
    //


public function storeBooking(Request $request)
{
    $validatedData = $request->validate([
        'ferry_id' => ['required', 'exists:ferry,id'],
        'customer_id' => ['required', 'exists:customer,id'],
        'capacity_booked' => ['required'],
    ]);

    $booking = bookingmodel::create([
        'Ferry_Id' => $validatedData['ferry_id'],
        'Customer_Id' => $validatedData['customer_id'],
        'CapacityBooked' => $validatedData['capacity_booked'],
    ]);

    // Additional logic for ticket generation, payment processing, etc.

    return redirect()->route('booking.show', $booking->id);
}

public function index()
{
    $bookings = bookingmodel::all();
    return view('booking.index', compact('bookings'));
}

public function create()
{
    $ferry = Ferry::all();
    $customer = Customer::all();
    return view('booking.create', compact('ferry', 'customer'));
}

public function show($id)
{
   // $booking = bookingmodel::with('ferry', 'customer')->find($id);
    $booking = bookingmodel::findOrFail($id);
    return view('booking.show', compact('booking'));
    
}

/*public function show($id)
{
    $booking = bookingmodel::find($id);
    return view('booking.show', compact('booking'));
}
*/

}
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booking extends Controller
{
    //
}

*/