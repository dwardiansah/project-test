<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class ApproverController extends Controller
{
    public function index()
    {
        if(Auth::user()->role != 'admin') {
            $bookings = Booking::approver(Auth::user()->id)
                ->where('status', ['approved_1', 'approved_2'])
                ->latest()
                ->get();
        } else {
            $bookings = Booking::with(['users', 'vehicle', 'driver', 'approver1', 'approver2'])
                ->where('status', ['approved_1', 'approved_2'])
                ->latest()
                ->get();
        }
        return view('approver.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        $booking->load(['users', 'vehicle', 'driver', 'approver1', 'approver2']);
        return view('approver.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $vehicles = Vehicle::all();
        $drivers = User::drivers();
        $approver1 = User::approvers();
        $approver2 = User::approvers();

        return view('approver.edit', compact('booking', 'vehicles', 'drivers', 'approver1', 'approver2'));
    }

    public function update(BookingRequest $request, Booking $booking)
    {
        $data = $request->validated();
        $booking->update($data);
        return redirect()->route('approver.index')->with('success', 'Booking updated');
    }

}
