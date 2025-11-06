<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title')</title>
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
          integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
     @yield('styles')
</head>

<body>

     {{-- sidebar start --}}
     <div class="d-flex">
          <input type="checkbox" id="sidebar-toggle" class="d-none">
          <label for="sidebar-toggle" class="bg-layer"></label>

          <div id="sidebar">
               <span class="fs-2 d-md-none" id="close-btn">
                    <label for="sidebar-toggle">
                         <i class="fas fa-chevron-left text-light"></i>
                    </label>
               </span>

               <h4 class="text-center">Admin Panel</h4>
               <div class="text-center mb-4">
                    <img src="{{ asset('assets/img/sohel.jpg') }}" width="80" height="80" class="rounded-circle"
                         alt="Profile">
                    <h5 class="mt-2 mb-0">Super Admin</h5>
                    <small class="text-light">Administrator</small>
               </div>

               <nav class="navbar sidebar-menu">
                    <ul class="nav flex-column">

                         {{-- Dashboard --}}
                         <li class="nav-item">
                              <a href="{{ route('admin.dashboard') }}"
                                   class="nav-link text-light link-navbar {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                                   <i class="fa-solid fa-grip me-2 fa-lg"></i> Dashboard
                              </a>
                         </li>

                         {{-- Users --}}
                         <li>
                              <a class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse" href="#usersMenu"
                                   role="button" aria-expanded="false" aria-controls="usersMenu">
                                   <i class="fas fa-users me-2 fa-lg"></i> Users
                              </a>
                              <div class="collapse {{ request()->routeIs('users.*','vendor.*','vendors.*','delivery.*') ? 'show' : '' }}"
                                   id="usersMenu" data-bs-parent=".sidebar-menu">
                                   <ul class="list-unstyled ps-4">
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('users.index') ? 'active' : '' }}">
                                                  <i class="fas fa-user me-2"></i> All Users</a></li>
                                        <li><a href="{{ route('vendor.dashboard') }}"
                                                  class="nav-link text-white {{ request()->routeIs('vendor.dashboard') ? 'active' : '' }}">
                                                  <i class="fas fa-store me-2"></i> Vendors</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('vendors.pending') ? 'active' : '' }}">
                                                  <i class="fas fa-user-clock me-2"></i> Vendor Requests</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('delivery.index') ? 'active' : '' }}">
                                                  <i class="fas fa-truck me-2"></i> Delivery Staff</a></li>
                                   </ul>
                              </div>
                         </li>

                         {{-- Products --}}
                         <li>
                              <a class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse"
                                   href="#productsMenu" role="button" aria-expanded="false"
                                   aria-controls="productsMenu">
                                   <i class="fas fa-boxes-stacked me-2 fa-lg"></i> Products
                              </a>
                              <div class="collapse {{ request()->routeIs('products.*','categories.*','subcategories.*','brands.*') ? 'show' : '' }}"
                                   id="productsMenu" data-bs-parent=".sidebar-menu">
                                   <ul class="list-unstyled ps-4">
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('products.index') ? 'active' : '' }}">
                                                  <i class="fas fa-box me-2"></i> All Products</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('products.create') ? 'active' : '' }}">
                                                  <i class="fas fa-plus me-2"></i> Add Product</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('categories.index') ? 'active' : '' }}">
                                                  <i class="fas fa-tags me-2"></i> Categories</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('subcategories.index') ? 'active' : '' }}">
                                                  <i class="fas fa-tag me-2"></i> Subcategories</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('brands.index') ? 'active' : '' }}">
                                                  <i class="fas fa-copyright me-2"></i> Brands</a></li>
                                   </ul>
                              </div>
                         </li>

                         {{-- Orders --}}
                         <li>
                              <a class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse"
                                   href="#ordersMenu" role="button" aria-expanded="false" aria-controls="ordersMenu">
                                   <i class="fas fa-shopping-cart me-2 fa-lg"></i> Orders
                              </a>
                              <div class="collapse {{ request()->routeIs('orders.*') ? 'show' : '' }}" id="ordersMenu"
                                   data-bs-parent=".sidebar-menu">
                                   <ul class="list-unstyled ps-4">
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('orders.index') ? 'active' : '' }}">
                                                  <i class="fas fa-list me-2"></i> All Orders</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('orders.pending') ? 'active' : '' }}">
                                                  <i class="fas fa-hourglass-half me-2"></i> Pending Orders</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('orders.completed') ? 'active' : '' }}">
                                                  <i class="fas fa-check me-2"></i> Completed Orders</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('orders.refunds') ? 'active' : '' }}">
                                                  <i class="fas fa-undo me-2"></i> Refunds</a></li>
                                   </ul>
                              </div>
                         </li>

                         {{-- Finance --}}
                         <li>
                              <a class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse"
                                   href="#financeMenu" role="button" aria-expanded="false" aria-controls="financeMenu">
                                   <i class="fas fa-wallet me-2 fa-lg"></i> Finance
                              </a>
                              <div class="collapse {{ request()->routeIs('payments.*','commissions.*','payouts.*') ? 'show' : '' }}"
                                   id="financeMenu" data-bs-parent=".sidebar-menu">
                                   <ul class="list-unstyled ps-4">
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('payments.index') ? 'active' : '' }}">
                                                  <i class="fas fa-money-bill me-2"></i> Payments</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('commissions.index') ? 'active' : '' }}">
                                                  <i class="fas fa-percentage me-2"></i> Commissions</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('payouts.index') ? 'active' : '' }}">
                                                  <i class="fas fa-hand-holding-usd me-2"></i> Payouts</a></li>
                                   </ul>
                              </div>
                         </li>

                         {{-- Marketing --}}
                         <li>
                              <a class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse"
                                   href="#marketingMenu" role="button" aria-expanded="false"
                                   aria-controls="marketingMenu">
                                   <i class="fas fa-bullhorn me-2 fa-lg"></i> Marketing
                              </a>
                              <div class="collapse {{ request()->routeIs('coupons.*') ? 'show' : '' }}"
                                   id="marketingMenu" data-bs-parent=".sidebar-menu">
                                   <ul class="list-unstyled ps-4">
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('coupons.index') ? 'active' : '' }}">
                                                  <i class="fas fa-ticket me-2"></i> Coupons</a></li>
                                   </ul>
                              </div>
                         </li>

                         {{-- Reviews --}}
                         <li class="nav-item">
                              <a href="#"
                                   class="nav-link text-light {{ request()->routeIs('reviews.index') ? 'active' : '' }}">
                                   <i class="fas fa-star me-2 fa-lg"></i> Reviews
                              </a>
                         </li>

                         {{-- Reports --}}
                         <li>
                              <a class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse"
                                   href="#reportsMenu" role="button" aria-expanded="false" aria-controls="reportsMenu">
                                   <i class="fas fa-chart-bar me-2 fa-lg"></i> Reports
                              </a>
                              <div class="collapse {{ request()->routeIs('reports.*') ? 'show' : '' }}" id="reportsMenu"
                                   data-bs-parent=".sidebar-menu">
                                   <ul class="list-unstyled ps-4">
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('reports.sales') ? 'active' : '' }}">
                                                  <i class="fas fa-file-invoice-dollar me-2"></i> Sales Report</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('reports.vendors') ? 'active' : '' }}">
                                                  <i class="fas fa-store me-2"></i> Vendor Report</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('reports.products') ? 'active' : '' }}">
                                                  <i class="fas fa-box me-2"></i> Product Report</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('reports.payments') ? 'active' : '' }}">
                                                  <i class="fas fa-receipt me-2"></i> Payment Report</a></li>
                                   </ul>
                              </div>
                         </li>

                         {{-- Settings --}}
                         <li>
                              <a class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse"
                                   href="#settingsMenu" role="button" aria-expanded="false"
                                   aria-controls="settingsMenu">
                                   <i class="fas fa-cog me-2 fa-lg"></i> Settings
                              </a>
                              <div class="collapse {{ request()->routeIs('settings.*') ? 'show' : '' }}"
                                   id="settingsMenu" data-bs-parent=".sidebar-menu">
                                   <ul class="list-unstyled ps-4">
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('settings.site') ? 'active' : '' }}">
                                                  <i class="fas fa-sliders-h me-2"></i> Site Settings</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('settings.notification') ? 'active' : '' }}">
                                                  <i class="fas fa-bell me-2"></i> Notification</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('settings.shipping') ? 'active' : '' }}">
                                                  <i class="fas fa-shipping-fast me-2"></i> Shipping Zones</a></li>
                                        <li><a href="#"
                                                  class="nav-link text-white {{ request()->routeIs('settings.tax') ? 'active' : '' }}">
                                                  <i class="fas fa-percent me-2"></i> Taxes</a></li>
                                   </ul>
                              </div>
                         </li>

                         {{-- Profile & Logout --}}
                         <li class="nav-item">
                              <a href="#"
                                   class="nav-link text-light {{ request()->routeIs('profile') ? 'active' : '' }}">
                                   <i class="fas fa-user-circle me-2 fa-lg"></i> Profile
                              </a>
                         </li>
                         <li class="nav-item">
                              <a href="#"
                                   class="nav-link text-light {{ request()->routeIs('logout') ? 'active' : '' }}">
                                   <i class="fas fa-sign-out-alt me-2 fa-lg"></i> Logout
                              </a>
                         </li>

                    </ul>
               </nav>
          </div>

          {{-- sidebar end --}}

          <div class="main w-100">
               {{-- topbar start --}}
               <nav class="navbar topbar-bg bg-opacity-10 p-2">
                    <div class="container-fluid d-flex align-items-center flex-nowrap">

                         {{-- Sidebar toggle for mobile --}}
                         <label for="sidebar-toggle" class="cursor-pointer d-md-none me-2">
                              <i class="fa-solid fa-bars-staggered fa-fade fa-lg"></i>
                         </label>

                         {{-- Search Bar --}}
                         <div class=" me-3">
                              <form class="d-flex" role="search" action="#" method="GET">
                                   <input class="form-control form-control-md me-2" type="search" name="q"
                                        placeholder="Search" aria-label="Search">
                                   <button class="btn btn-sm btn-outline-light" type="submit">Search</button>
                              </form>
                         </div>

                         {{-- Notifications & Profile --}}
                         <div class="d-flex flex-row">

                              {{-- Notifications Dropdown --}}
                              <div class="dropdown mt-2 me-sm-4">
                                   <a href="#" class="text-dark position-relative" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-bell fa-lg text-light"></i>
                                        <span
                                             class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                             3
                                        </span>
                                   </a>
                                   <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                             <span class="dropdown-item-text fw-bold">Notifications</span>
                                        </li>
                                        <li>
                                             <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">New comment on your post</a></li>
                                        <li><a class="dropdown-item" href="#">New follower</a></li>
                                        <li><a class="dropdown-item" href="#">System update available</a></li>
                                   </ul>
                              </div>

                              {{-- Theme Toggle Button 🌙☀️ --}}
                              <button id="theme-toggle" class="btn btn-outline-light ms-2 me-3 btn-sm ">
                                   <i id="theme-icon" class="fas fa-moon"></i>
                              </button>

                              {{-- Profile Dropdown --}}
                              <div class="dropdown">
                                   <a href="#" class="dropdown-toggle d-flex align-items-center" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/sohel.jpg') }}" width="36" height="36"
                                             class="rounded-circle" alt="Profile">
                                        <span class="ms-2 d-none text-light d-sm-inline fw-semibold">SOHEL RANA</span>
                                   </a>
                                   <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li>
                                             <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Logout</a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>
               </nav>
               {{-- topbar end --}}
               <div class="content p-4">
                    @yield('content')
               </div>


               {{-- footer --}}
               @extends("admin.layout.footer")


          </div>
     </div>



     @yield('scripts')
     <script>
          const toggleBtn = document.getElementById('theme-toggle');
          const themeIcon = document.getElementById('theme-icon');

          toggleBtn.addEventListener('click', () => {
               document.body.classList.toggle('dark-mode');
               const darkMode = document.body.classList.contains('dark-mode');
               themeIcon.classList = darkMode ? 'fas fa-sun' : 'fas fa-moon';
               toggleBtn.classList.toggle('btn-outline-light');
               toggleBtn.classList.toggle('btn-outline-dark');
          });
     </script>

     <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
</body>

</html>