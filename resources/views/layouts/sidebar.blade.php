@php
    $active = request()->segments()[1];
@endphp
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

  <!-- Sidebar content -->
  <div class="sidebar-content">

    <!-- Sidebar header -->
    <div class="sidebar-section">
      <div class="sidebar-section-body d-flex justify-content-center">
        <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

        <div>
          <button class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex"
            type="button">
            <i class="ph-arrows-left-right"></i>
          </button>

          <button class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none"
            type="button">
            <i class="ph-x"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- /sidebar header -->

    <!-- Main navigation -->
    <div class="sidebar-section">
      <ul class="nav nav-sidebar"
        data-nav-type="accordion">

        <li class="nav-item-header">
          <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
          <i class="ph-dots-three sidebar-resize-show"></i>
        </li>
        <li class="nav-item nav-item-submenu {{ $active == 'user' ? 'nav-item-expanded nav-item-open' : '' }}">
          <a class="nav-link"
            href="#">
            <i class="ph-user"></i>
            <span>User</span>
          </a>
          <ul class="nav-group-sub collapse {{ $active == 'user' ? 'show' : '' }}">
            <li class="nav-item"><a class="nav-link"
                href="{{ route('user.index') }}">All</a></li>
            <li class="nav-item"><a class="nav-link"
                href="{{ route('user.create') }}">Create</a></li>
          </ul>
        </li>
        <li class="nav-item nav-item-submenu {{ $active == 'companies' ? 'nav-item-expanded nav-item-open' : '' }}">
          <a class="nav-link"
            href="#">
            <i class="ph-buildings"></i>
            <span>Companies</span>
          </a>
          <ul class="nav-group-sub collapse {{ $active == 'companies' ? 'show' : '' }}">
            <li class="nav-item"><a class="nav-link"
                href="{{ route('city.index') }}">City </a></li>
            <li class="nav-item"><a class="nav-link"
                href="{{ route('business-category.index') }}">Business Category</a></li>
            <li class="nav-item"><a class="nav-link"
                href="{{ route('company.index') }}">Company</a></li>
          </ul>
        </li>

        <li class="nav-item nav-item-submenu {{ $active == 'product' || $active == 'category_product' || $active == 'type_product' ? 'nav-item-expanded nav-item-open' : '' }}">
          <a class="nav-link"
            href="#">
            <i class="ph-bookmark-simple"></i>
            <span>Product</span>
          </a>
          <ul class="nav-group-sub collapse {{ $active == 'product' || $active == 'category_product' || $active == 'type_product' ? 'show' : '' }}">
            <li class="nav-item"><a class="nav-link"
                href="{{route('category_product.index')}}">Category Product</a></li>
            <li class="nav-item"><a class="nav-link"
                href="{{route('type_product.index')}}">Type Product</a></li>
            <li class="nav-item"><a class="nav-link"
                href="{{route('product.index')}}">Product</a></li>
          </ul>
        </li>

        <!-- Start Contest Sidebar -->
        <li class="nav-item nav-item-submenu {{ $active == 'contest' ? 'nav-item-expanded nav-item-open' : '' }}">
          <a class="nav-link" href="#"><i class="ph-medal"></i>
            <span>Setting Contest</span>
          </a>
          <ul class="nav-group-sub collapse {{ $active == 'contest' ? 'show' : '' }}">
            <li class="nav-item"><a class="nav-link" href="{{route('contest.create')}}">Create</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('contest.index')}}">Progress Contest</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('contest.archive')}}">Archive Contest</a></li>
          </ul>
        </li>
        <!-- End Contest Sidebar -->

        <!-- Start Catalog Sidebar -->
        <li class="nav-item nav-item-submenu {{ $active == 'catalog' ? 'nav-item-expanded nav-item-open' : '' }}">
          <a class="nav-link" href="#"><i class="ph-medal"></i>
            <span>Setting Catalog</span>
          </a>
          <ul class="nav-group-sub collapse {{ $active == 'catalog' ? 'show' : '' }}">
            <li class="nav-item"><a class="nav-link" href="{{route('catalog.create')}}">Create</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('catalog.index')}}">All</a></li>
          </ul>
        </li>
        <!-- End Catalog Sidebar -->

      </ul>
    </div>
    <!-- /main navigation -->

  </div>
  <!-- /sidebar content -->

</div>
