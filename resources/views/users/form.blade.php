<div class="form_group mb-3">
    <label for="name">Nama</label>
    <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
</div>

<div class="form_group mb-3">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
</div>

<div class="form_group mb-3">
    <label for="role">Role</label>
    <select name="role" class="form-control" required>
        <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="approver" {{ old('role', $user->role) == 'approver' ? 'selected' : '' }}>Approver</option>
        <option value="driver" {{ old('role', $user->role) == 'driver' ? 'selected' : '' }}>Driver</option>
    </select>
</div>

@if (!isset($user->id))
    <div class="form_group mb-3">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
@endif
