<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BookingReportExport;

class BookingReportController extends Controller
{
    public function index()
    {
        return view('booking_report.index');
    }

    public function export(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
        ]);

        return Excel::download(
            new BookingReportExport($request->start_date, $request->end_date),
            'booking-report_' . now()->format('Ymd_His') . '.xlsx'
        );
    }
}
