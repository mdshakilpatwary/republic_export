  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      <li class="nav-heading">Pages Content</li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Header Info</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
 
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('header.info')}}" >
              <i class="bi bi-circle"></i><span>Add Banner</span>
            </a>
          </li>
          <li>
            <a href="{{route('header.info.manage')}}" class="">
              <i class="bi bi-circle"></i><span>Manage Banner</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Home page</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
 
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('home.industrial.element')}}" >
              <i class="bi bi-circle"></i><span>industrial Element</span>
            </a>
          </li>
          <li>
            <a href="{{route('home.client.element')}}" class="">
              <i class="bi bi-circle"></i><span>Client Element</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-3" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>About page</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
 
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('about.story')}}" >
              <i class="bi bi-circle"></i><span>About Story</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Components Nav -->


      <li class="nav-heading">Product Elements</li>

      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-4" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
 
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('product')}}" >
              <i class="bi bi-circle"></i><span>Add Product</span>
            </a>
          </li>
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('product.manage')}}" >
              <i class="bi bi-circle"></i><span>Manage Product</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-5" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Product Image</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-5" class="nav-content collapse " data-bs-parent="#sidebar-nav">
 
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('product.image.element')}}" >
              <i class="bi bi-circle"></i><span>Add Image</span>
            </a>
          </li>
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('product.manage.image.element')}}" >
              <i class="bi bi-circle"></i><span>Manage Image</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-6" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Product Spacifications</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-6" class="nav-content collapse " data-bs-parent="#sidebar-nav">
 
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('product.spacific.element')}}" >
              <i class="bi bi-circle"></i><span>Add Spacification</span>
            </a>
          </li>
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('product.manage.spacific.element')}}" >
              <i class="bi bi-circle"></i><span>Manage Spacification</span>
            </a>
          </li>
        </ul>
      </li>
      
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
    </ul>

  </aside>
  <!-- End Sidebar-->