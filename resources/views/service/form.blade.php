<div class="form-group mb-3">
    <label for="vehicle_id">Kendaraan</label>
    <select name="vehicle_id" class="form-control" required>
        @foreach ($vehicles as $index => $vehicle)
            <option value="{{ $vehicle->id }}" {{ old('vehicle_id', $vehicle->id) == $service->vehicle_id ? 'selected' : '' }}>{{ $vehicle->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="user_id">Driver</label>
    <select name="user_id" class="form-control" required>
        @foreach ($drivers as $index => $driver)
            <option value="{{ $driver->id }}" {{ old('user_id', $driver->id) == $service->user_id ? 'selected' : '' }}>{{ $driver->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="date">Tanggal</label>
    <input type="date" name="date" value="{{ old('date', $service->date) }}" class="form-control" required>
</div>

<div class="form-group mb-3">
    <label for="odometer">Odometer</label>
    <input type="text" name="odometer" value="{{ old('odometer', $service->odometer) }}" class="form-control">
</div>

<div class="form-group mb-3">
    <label for="description">Deskripsi</label>
    <input type="text" name="description" value="{{ old('description', $service->description) }}" class="form-control">
</div>