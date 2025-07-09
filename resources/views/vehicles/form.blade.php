<div class="form-group mb-3">
    <label for="name">Nama</label>
    <input type="text" name="name" value="{{ old('name', $vehicle->name) }}" class="form-control" required>
</div>

<div class="form-group mb-3">
    <label for="type">Jenis</label>
    <select name="type" class="form-control" required>
        <option value="angkutan_barang" {{ old('type', $vehicle->type) == 'angkutan_barang' ? 'selected' : '' }}>Angkutan Barang</option>
        <option value="angkutan_orang" {{ old('type', $vehicle->type) == 'angkutan_orang' ? 'selected' : '' }}>Angkutan Orang</option>
    </select>
</div>

<div class="form-group mb-3">
    <label for="ownership">Kepemilikan</label>
    <select name="ownership" class="form-control" required>
        <option value="company" {{ old('ownership', $vehicle->ownership) == 'company' ? 'selected' : '' }}>Company</option>
        <option value="rental" {{ old('ownership', $vehicle->ownership) == 'rental' ? 'selected' : '' }}>Rental</option>
    </select>
</div>


<div class="form-group mb-3">
    <label for="fuel_type">Bahan Bakar</label>
    <select name="fuel_type" class="form-control" required>
        <option value="pertalite" {{ old('fuel_type', $vehicle->fuel_type) == 'pertalite' ? 'selected' : '' }}>Pertalite</option>
        <option value="pertamax" {{ old('fuel_type', $vehicle->fuel_type) == 'pertamax' ? 'selected' : '' }}>Pertamax</option>
        <option value="solar" {{ old('fuel_type', $vehicle->fuel_type) == 'solar' ? 'selected' : '' }}>Solar</option>
    </select>
</div>

<div class="form-group mb-3">
    <label for="plate_number">Nopol</label>
    <input type="plate_number" name="plate_number" value="{{ old('plate_number', $vehicle->plate_number) }}" class="form-control" required>
</div>
