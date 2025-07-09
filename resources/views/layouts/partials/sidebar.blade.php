<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
	<div class="sidebar-brand">
		<a href="{{ route('dashboard') }}" class="brand-link">
			<img
				src="{{ asset('adminlte/assets/img/AdminLTELogo.png') }}"
				alt="AdminLTE Logo"
				class="brand-image opacity-75 shadow"
			/>
			<span class="brand-text fw-light">TEST</span>
		</a>
	</div>
	<div class="sidebar-wrapper">
		<nav class="mt-2">
		<!--begin::Sidebar Menu-->
			<ul
				class="nav sidebar-menu flex-column"
				data-lte-toggle="treeview"
				role="navigation"
				aria-label="Main navigation"
				data-accordion="false"
				id="navigation"
			>
				<li class="nav-item">
				<a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
					<i class="nav-icon fas fa-desktop"></i>
					<p>Dashboard</p>
				</a>
				</li>
				@if(Auth::user()->role == 'admin')
					<li class="nav-item">
						<a href="{{ route('bookings.index') }}" class="nav-link {{ request()->routeIs('bookings.*') ? 'active' : '' }}">
						<i class="nav-icon fas fa-list"></i>
						<p>Booking</p>
						</a>
					</li>
				@endif
				<li class="nav-item">
				<a href="{{ route('approver.index') }}" class="nav-link {{ request()->routeIs('approver.*') ? 'active' : '' }}">
					<i class="nav-icon fas fa-list"></i>
					<p>Approver</p>
				</a>
				</li>
				@if(Auth::user()->role == 'admin')
					<li class="nav-header">MASTER DATA</li>
					<li class="nav-item">
						<a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
						<i class="nav-icon bi bi-box-arrow-in-right"></i>
						<p>User</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('vehicles.index') }}" class="nav-link {{ request()->routeIs('vehicles.*') ? 'active' : '' }}">
						<i class="nav-icon bi bi-box-arrow-in-right"></i>
						<p>Kendaraan</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('services.index') }}" class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}">
						<i class="nav-icon bi bi-box-arrow-in-right"></i>
						<p>History Service</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('fuelusages.index') }}" class="nav-link {{ request()->routeIs('fuelusages.*') ? 'active' : '' }}">
						<i class="nav-icon bi bi-box-arrow-in-right"></i>
						<p>Pemakaian Bahan Bakar</p>
						</a>
					</li>
					<li class="nav-header">REPORT</li>
					<li class="nav-item">
						<a href="{{ route('booking-reports.index') }}" class="nav-link {{ request()->routeIs('booking-reports.*') ? 'active' : '' }}">
						<i class="nav-icon bi bi-box-arrow-in-right"></i>
						<p>Booking</p>
						</a>
					</li>
				@endif
			</ul>
		</nav>
	</div>
</aside>