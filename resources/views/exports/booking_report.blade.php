<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Vehicle</th>
            <th>Driver</th>
            <th>Approver 1</th>
            <th>Approver 2</th>
            <th>Start</th>
            <th>End</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->users->name ?? '-' }}</td>
                <td>{{ $booking->vehicle->name ?? '-' }}</td>
                <td>{{ $booking->driver->name ?? '-' }}</td>
                <td>{{ $booking->approver1->name ?? '-' }}</td>
                <td>{{ $booking->approver2->name ?? '-' }}</td>
                <td>{{ $booking->start_time }}</td>
                <td>{{ $booking->end_time }}</td>
                <td>{{ $booking->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
