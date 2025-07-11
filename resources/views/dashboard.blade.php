@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
      
<div class="row">
    <!--begin::Col-->
    <div class="col-lg-4 col-sm-12">
    <div class="small-box text-bg-primary">
        <div class="inner">
        <h3>150</h3>
        <p>Kendaraan</p>
        </div>
        <svg
        class="small-box-icon"
        fill="currentColor"
        viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true"
        >
        <path
            d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
        ></path>
        </svg>
        <a
        href="{{ route('vehicles.index') }}"
        class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
        >
        More info <i class="bi bi-link-45deg"></i>
        </a>
    </div>
    <!--end::Small Box Widget 1-->
    </div>
    <!--end::Col-->
    <div class="col-lg-4 col-sm-12">
    <!--begin::Small Box Widget 2-->
    <div class="small-box text-bg-success">
        <div class="inner">
        <h3>53</h3>
        <p>Driver</p>
        </div>
        <svg
        class="small-box-icon"
        fill="currentColor"
        viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true"
        >
        <path
            d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"
        ></path>
        </svg>
        <a
        href="{{ route('users.index') }}"
        class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
        >
        More info <i class="bi bi-link-45deg"></i>
        </a>
    </div>
    <!--end::Small Box Widget 2-->
    </div>
    <!--end::Col-->
    <div class="col-lg-4 col-sm-12">
    <!--begin::Small Box Widget 3-->
    <div class="small-box text-bg-warning">
        <div class="inner">
        <h3>44</h3>
        <p>Booking</p>
        </div>
        <svg
        class="small-box-icon"
        fill="currentColor"
        viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true"
        >
        <path
            d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"
        ></path>
        </svg>
        <a
        href="{{ route('bookings.index') }}"
        class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
        >
        More info <i class="bi bi-link-45deg"></i>
        </a>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header"><h3 class="card-title">Booking</h3></div>
        <div class="card-body"><div id="revenue-chart"></div></div>
    </div>
    </div>
</div>
</div>
      
@endsection

@section('scriptsjs')
<script>
    // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
    // IT'S ALL JUST JUNK FOR DEMO
    // ++++++++++++++++++++++++++++++++++++++++++

    const sales_chart_options = {
      series: [
        {
          name: 'Digital Goods',
          data: [28, 48, 40, 19, 86, 27, 90],
        },
        {
          name: 'Electronics',
          data: [65, 59, 80, 81, 56, 55, 40],
        },
      ],
      chart: {
        height: 300,
        type: 'area',
        toolbar: {
          show: false,
        },
      },
      legend: {
        show: false,
      },
      colors: ['#0d6efd', '#20c997'],
      dataLabels: {
        enabled: false,
      },
      stroke: {
        curve: 'smooth',
      },
      xaxis: {
        type: 'datetime',
        categories: [
          '2023-01-01',
          '2023-02-01',
          '2023-03-01',
          '2023-04-01',
          '2023-05-01',
          '2023-06-01',
          '2023-07-01',
        ],
      },
      tooltip: {
        x: {
          format: 'MMMM yyyy',
        },
      },
    };

    const sales_chart = new ApexCharts(
      document.querySelector('#revenue-chart'),
      sales_chart_options,
    );
    sales_chart.render();
  </script>
  @endsection