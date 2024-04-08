  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item" style="background:{{ Route::is('dashboard')? '#f6f9ff' : ' none !important' }} ; ">
        <a class="nav-link {{ Route::is('dashboard')? 'active' : '' }}" href="{{route('dashboard')}}" style="color:{{ Route::is('dashboard')? '' : 'inherit' }} ;">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      <li class="nav-heading">Pages Content</li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-1" data-bs-toggle="collapse" href="#" style="background:{{ Route::is('header.info*') || Route::is('header.info.manage*')||Route::is('header.info.edit*')? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-menu-button-wide-fill"></i><span>Header Info</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-1" class="nav-content collapse {{ Route::is('header.info*') || Route::is('header.info.manage*')||Route::is('header.info.edit*')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('header.info')}}" class="{{ Route::is('header.info')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add Banner</span>
            </a>
          </li>
          <li>
            <a href="{{route('header.info.manage')}}" class="{{ Route::is('header.info.manage')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage Banner</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-2" data-bs-toggle="collapse" href="#" style="background:{{ Route::is('home.industrial.element*') || Route::is('home.client.element*')? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-house-add"></i><span>Home page</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-2" class="nav-content collapse {{ Route::is('home.industrial.element*') || Route::is('home.client.element*')? 'show' : '' }}  " data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('home.industrial.element')}}" class="{{ Route::is('home.industrial.element')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Industrial Element</span>
            </a>
          </li>
          <li>
            <a href="{{route('home.client.element')}}" class="{{ Route::is('home.client.element')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Client Element</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-3" data-bs-toggle="collapse" href="#" style="background:{{ Route::is('about.story*')? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-postcard"></i><span>About page</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-3" class="nav-content collapse {{ Route::is('about.story*')? 'show' : '' }}" data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('about.story')}}" class="{{ Route::is('about.story')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>About Story</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-8" data-bs-toggle="collapse" href="#" style="background:{{ Route::is('career*') || Route::is('career.manage*') ||Route::is('career.edit*')? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-wallet-fill"></i><span>Career page</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-8" class="nav-content collapse {{ Route::is('career*') || Route::is('career.manage*') ||Route::is('career.edit*')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('career')}}" class="{{ Route::is('career')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add Career</span>
            </a>
          </li>
          <li>
            <a href="{{route('career.manage')}}"  class="{{ Route::is('career.manage')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage Career</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-9" data-bs-toggle="collapse" href="#" style="background:{{  Route::is('expertise.element*') || Route::is('expertise.element.manage*') ||Route::is('expertise.element.edit*')? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-bounding-box"></i><span>Expertise page</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-9" class="nav-content collapse {{ Route::is('expertise.element*') || Route::is('expertise.element.manage*') ||Route::is('expertise.element.edit*')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('expertise.element')}}" class="{{ Route::is('expertise.element')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Expertise Add</span>
            </a>
          </li>
          <li>
            <a href="{{route('expertise.element.manage')}}"  class="{{ Route::is('expertise.element.manage')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Expertise Manage</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-10" data-bs-toggle="collapse" href="#" style="background:{{  Route::is('csr.common*') || Route::is('csr.raw_material*') ||Route::is('csr.pre_production*')||Route::is('csr.production*')? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-card-heading"></i><span>Csr page</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-10" class="nav-content collapse {{ Route::is('csr.common*') || Route::is('csr.pre_production*') ||Route::is('csr.raw_material*')||Route::is('csr.production*')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('csr.common')}}" class="{{ Route::is('csr.common')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Csr Common Element</span>
            </a>
          </li>
          <li>
            <a href="{{route('csr.raw_material')}}" class="{{ Route::is('csr.raw_material')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Csr Raw Material</span>
            </a>
          </li>
          <li>
            <a href="{{route('csr.pre_production')}}" class="{{ Route::is('csr.pre_production')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Csr Pre-Production</span>
            </a>
          </li>
          <li>
            <a href="{{route('csr.production')}}" class="{{ Route::is('csr.production')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Csr Production</span>
            </a>
          </li>
          
        </ul>
      </li>
      <!-- End Components Nav -->


      <li class="nav-heading">Product Elements</li>

      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-4" data-bs-toggle="collapse" href="#" style="background: {{ Route::is('product') || Route::is('product.manage')||Route::is('product.edit')? '#f6f9ff' : '' }} ;">
          <i class="bi bi-box2-fill"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-4" class="nav-content collapse {{ Route::is('product') || Route::is('product.manage')||Route::is('product.edit')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('product')}}" class="{{ Route::is('product')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add Product</span>
            </a>
          </li>
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('product.manage')}}" class="{{ Route::is('product.manage')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage Product</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-5" data-bs-toggle="collapse" href="#" style="background:{{ Route::is('product.image.element') || Route::is('product.manage.image.element')? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-images"></i><span>Product Image</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-5" class="nav-content collapse {{ Route::is('product.image.element') || Route::is('product.manage.image.element')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('product.image.element')}}" class="{{ Route::is('product.image.element')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add Image</span>
            </a>
          </li>
          <li>
            <a href="{{route('product.manage.image.element')}}" class="{{ Route::is('product.manage.image.element')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage Image</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-6" data-bs-toggle="collapse" href="#" style="background:{{ Route::is('product.spacific.element*') || Route::is('product.manage.spacific.element*') ||Route::is('product.spacific.edit*')? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-ui-radios"></i><span>Product Spacifications</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-6" class="nav-content collapse {{ Route::is('product.spacific.element*') || Route::is('product.manage.spacific.element*') ||Route::is('product.spacific.edit*')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('product.spacific.element')}}" class="{{ Route::is('product.spacific.element')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add Spacification</span>
            </a>
          </li>
          <li>
            <a href="{{route('product.manage.spacific.element')}}" class="{{ Route::is('product.manage.spacific.element')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage Spacification</span>
            </a>
          </li>
        </ul>
      </li>
      
    <!-- End Profile Page Nav -->
    <li class="nav-heading">Nave-Item</li>

      <li class="nav-item" style="background:{{ Route::is('menu.create')? '#f6f9ff' : ' none !important' }} ; ">
        <a class="nav-link {{ Route::is('menu.create')? 'active' : '' }}" href="{{route('menu.create')}}" style="color:{{ Route::is('menu.create')? '' : 'inherit' }} ;">
          <i class="bi bi-segmented-nav"></i>
          <span>Menu-Bar</span>
        </a>
      </li>
      
    </ul>

  </aside>
  <!-- End Sidebar-->