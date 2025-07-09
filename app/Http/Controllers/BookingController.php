<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['users', 'vehicle', 'driver', 'approver1', 'approver2'])->latest()->get();
        return view('booking.index', compact('bookings'));
    }

    public function create()
    {
        $vehicles = Vehicle::all();
        $drivers = User::drivers();
        $approver1 = User::approvers();
        $approver2 = User::approvers();

        return view('booking.create', compact('vehicles', 'drivers', 'approver1', 'approver2'));
    }

    public function store(BookingRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        // dd($data);
        Booking::create($data);
        return redirect()->route('bookings.index')->with('success', 'Booking created');
    }

    public function show(Booking $booking)
    {
        $booking->load(['users', 'vehicle', 'driver', 'approver1', 'approver2']);
        return view('booking.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $vehicles = Vehicle::all();
        $drivers = User::drivers();
        $approver1 = User::approvers();
        $approver2 = User::approvers();

        return view('booking.edit', compact('booking', 'vehicles', 'drivers', 'approver1', 'approver2'));
    }

    public function update(BookingRequest $request, Booking $booking)
    {
        $data = $request->validated();
        $booking->update($data);
        return redirect()->route('bookings.index')->with('success', 'Booking updated');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted');
    }
}
