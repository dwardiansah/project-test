<div class="form-group mb-3">
    <label for="vehicle_id">Kendaraan</label>
    <select name="vehicle_id" class="form-control" required>
        @foreach ($vehicles as $index => $vehicle)
            <option value="{{ $vehicle->id }}" {{ old('vehicle_id', $vehicle->id) == $booking->vehicle_id ? 'selected' : '' }}>{{ $vehicle->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="driver_id">Driver</label>
    <select name="driver_id" class="form-control" required>
        @foreach ($drivers as $index => $driver)
            <option value="{{ $driver->id }}" {{ old('driver_id', $driver->id) == $booking->driver_id ? 'selected' : '' }}>{{ $driver->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="approver1_id">Approver 1</label>
    <select name="approver1_id" class="form-control" required>
        @foreach ($approver1 as $index => $user1)
            <option value="{{ $user1->id }}" {{ old('approver1_id', $user1->id) == $booking->approver1_id ? 'selected' : '' }}>{{ $user1->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="approver2_id">Approver 2</label>
    <select name="approver2_id" class="form-control" required>
        @foreach ($approver2 as $index => $user2)
            <option value="{{ $user2->id }}" {{ old('approver2_id', $user2->id) == $booking->approver2_id ? 'selected' : '' }}>{{ $user2->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="start_time">Start</label>
    <input type="date" name="start_time" value="{{ old('start_time', $booking->start_time) }}" class="form-control">
</div>

<div class="form-group mb-3">
    <label for="end_time">End</label>
    <input type="date" name="end_time" value="{{ old('end_time', $booking->end_time) }}" class="form-control">
</div>

<div class="form-group mb-3">
    <label for="status">Status</label>
    <select name="status" class="form-control" required>
        @if (!isset($booking->id))
            <option value="created" {{ old('status', $booking->status) == 'created' ? 'selected' : '' }}>Created</option>
        @endif
        <option value="approved_1" {{ old('status', $booking->status) == 'approved_1' ? 'selected' : '' }}>Approved 1</option>
        <option value="approved_2" {{ old('status', $booking->status) == 'approved_2' ? 'selected' : '' }}>Approved 2</option>
        <option value="rejected" {{ old('status', $booking->status) == 'rejected' ? 'selected' : '' }}>Rejected</option>
        <option value="done" {{ old('status', $booking->status) == 'done' ? 'selected' : '' }}>Done</option>
        <option value="cancelled" {{ old('status', $booking->status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
    </select>
</div>
