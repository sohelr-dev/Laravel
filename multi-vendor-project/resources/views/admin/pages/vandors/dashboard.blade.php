@extends('admin.layout.master')
@section('title', 'Vendor Dashbord')
@section('content')
<div class="container-fluid py-4">
  <h4 class="fw-bold mb-4"><i class="fa-solid fa-store"></i> Vendor Dashboard</h4>

  <!-- Vendor Stats Cards -->
  <div class="row g-3">
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm border-0 text-center p-3">
        <div class="card-body">
          <i class="fa-solid fa-box text-primary fs-2 mb-2"></i>
          <h6 class="fw-bold">My Products</h6>
          <h4 class="text-dark fw-bolder">120</h4>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm border-0 text-center p-3">
        <div class="card-body">
          <i class="fa-solid fa-shopping-cart text-success fs-2 mb-2"></i>
          <h6 class="fw-bold">My Orders</h6>
          <h4 class="text-dark fw-bolder">320</h4>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm border-0 text-center p-3">
        <div class="card-body">
          <i class="fa-solid fa-clock text-warning fs-2 mb-2"></i>
          <h6 class="fw-bold">Pending Orders</h6>
          <h4 class="text-dark fw-bolder">15</h4>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm border-0 text-center p-3">
        <div class="card-body">
          <i class="fa-solid fa-dollar-sign text-danger fs-2 mb-2"></i>
          <h6 class="fw-bold">Earnings</h6>
          <h4 class="text-dark fw-bolder">$12,450</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- Charts -->
  <div class="row mt-4 g-4">
    <div class="col-lg-6">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-bold">
          <i class="fa-solid fa-chart-column me-2 text-primary"></i>Sales Overview
        </div>
        <div class="card-body">
          <div id="vendorBarChart"></div>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-bold">
          <i class="fa-solid fa-chart-line me-2 text-success"></i>Revenue Growth
        </div>
        <div class="card-body">
          <div id="vendorLineChart"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Recent Orders Table -->
  <div class="row mt-4">
    <div class="col-12">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-bold">
          <i class="fa-solid fa-table me-2 text-info"></i>Recent Orders
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped align-middle">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Status</th>
                <th>Date</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Wireless Headphones</td>
                <td><span class="badge bg-success">Completed</span></td>
                <td>2025-10-30</td>
                <td>$120</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Mary Smith</td>
                <td>Bluetooth Speaker</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td>2025-10-29</td>
                <td>$75</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Ali Khan</td>
                <td>Smart Watch</td>
                <td><span class="badge bg-success">Completed</span></td>
                <td>2025-10-27</td>
                <td>$95</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  // Vendor Bar Chart
  var optionsBar = {
    chart: { type: 'bar', height: 300 },
    series: [{
      name: 'Orders',
      data: [10, 20, 15, 30, 25, 40, 50, 60, 70]
    }],
    xaxis: {
      categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep']
    },
    colors: ['#0d6efd']
  };
  var barChart = new ApexCharts(document.querySelector("#vendorBarChart"), optionsBar);
  barChart.render();

  // Vendor Line Chart
  var optionsLine = {
    chart: { type: 'line', height: 300 },
    series: [{
      name: 'Revenue',
      data: [2000, 2500, 1800, 3000, 4000, 3500, 5000, 5500, 6000]
    }],
    xaxis: {
      categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep']
    },
    colors: ['#198754'],
    stroke: { width: 3, curve: 'smooth' },
    markers: { size: 4 }
  };
  var lineChart = new ApexCharts(document.querySelector("#vendorLineChart"), optionsLine);
  lineChart.render();
</script>
@endsection

@section('styles')
<style>
.card {
  border-radius: 12px;
  transition: all 0.3s ease;
}
.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}
.card-header {
  border-bottom: 1px solid #f0f0f0;
}
</style>
@endsection