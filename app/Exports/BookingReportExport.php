<?php

namespace App\Exports;

use App\Models\Booking;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BookingReportExport implements FromView
{
    protected $start;
    protected $end;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function view(): View
    {
        $bookings = Booking::with(['users', 'vehicle', 'driver', 'approver1', 'approver2'])
            ->whereBetween('start_time', [$this->start, $this->end])
            ->orderBy('start_time')
            ->get();
        
        return view('exports.booking_report', [
            'bookings' => $bookings,
            'start' => $this->start,
            'end' => $this->end,
        ]);
    }
}
