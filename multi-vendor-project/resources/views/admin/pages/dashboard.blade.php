@extends('admin.layout.master')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid py-4">
  <h4 class="fw-bold mb-4"><i class="fa-solid fa-gauge"></i> Admin  Dashboard Overview</h4>

  <!-- Stats Cards -->
  <div class="row g-3">
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm border-0 text-center p-3">
        <div class="card-body">
          <i class="fa-solid fa-store text-primary fs-2 mb-2"></i>
          <h6 class="fw-bold">Total Vendors</h6>
          <h4 class="text-dark fw-bolder">128</h4>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm border-0 text-center p-3">
        <div class="card-body">
          <i class="fa-solid fa-box text-success fs-2 mb-2"></i>
          <h6 class="fw-bold">Total Products</h6>
          <h4 class="text-dark fw-bolder">2,453</h4>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm border-0 text-center p-3">
        <div class="card-body">
          <i class="fa-solid fa-shopping-cart text-warning fs-2 mb-2"></i>
          <h6 class="fw-bold">Total Orders</h6>
          <h4 class="text-dark fw-bolder">1,209</h4>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm border-0 text-center p-3">
        <div class="card-body">
          <i class="fa-solid fa-dollar-sign text-danger fs-2 mb-2"></i>
          <h6 class="fw-bold">Total Revenue</h6>
          <h4 class="text-dark fw-bolder">$84,320</h4>
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
          <div id="barChart"></div>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-bold">
          <i class="fa-solid fa-chart-line me-2 text-success"></i>Revenue Growth
        </div>
        <div class="card-body">
          <div id="lineChart"></div>
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
                <th>Vendor</th>
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
                <td>Vendor A</td>
                <td>Wireless Headphones</td>
                <td><span class="badge bg-success">Completed</span></td>
                <td>2025-10-30</td>
                <td>$120</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Mary Smith</td>
                <td>Vendor B</td>
                <td>Bluetooth Speaker</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td>2025-10-29</td>
                <td>$75</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Ali Khan</td>
                <td>Vendor C</td>
                <td>Smart Watch</td>
                <td><span class="badge bg-danger">Cancelled</span></td>
                <td>2025-10-27</td>
                <td>$95</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Emma Brown</td>
                <td>Vendor D</td>
                <td>Gaming Mouse</td>
                <td><span class="badge bg-success">Completed</span></td>
                <td>2025-10-25</td>
                <td>$49</td>
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
  // Bar Chart
  var optionsBar = {
    chart: { type: 'bar', height: 300 },
    series: [{
      name: 'Orders',
      data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
    }],
    xaxis: {
      categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep']
    },
    colors: ['#0d6efd']
  };
  var barChart = new ApexCharts(document.querySelector("#barChart"), optionsBar);
  barChart.render();

  // Line Chart
  var optionsLine = {
    chart: { type: 'line', height: 300 },
    series: [{
      name: 'Revenue',
      data: [10000, 15000, 12000, 18000, 22000, 19000, 25000, 27000, 30000]
    }],
    xaxis: {
      categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep']
    },
    colors: ['#198754'],
    stroke: { width: 3, curve: 'smooth' },
    markers: { size: 4 }
  };
  var lineChart = new ApexCharts(document.querySelector("#lineChart"), optionsLine);
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