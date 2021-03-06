<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

{{-- Thêm phần quyên truy cập tại DASHBOARD --}}
@if(auth()->check())
  @if(auth()->user()->level=='inventor')
  
  <!-- Divider -->
 

  <!-- Nav Item - Charts -->
  <li class="nav-item mx-auto" style="color: white; ">
        <i class="fas fa-fw fa-user-lock"></i>
        <span >ADMIN</span>
  </li>
  <hr class="sidebar-divider my-0">

  <li class="nav-item">
      <a class="nav-link" href="{{route('file-manager')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Quản lý truyền thông</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-image"></i>
      <span>Banners</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Lựa chọn Banners</h6>
        <a class="collapse-item" href="{{route('banner.index')}}">Banners</a>
        <a class="collapse-item" href="{{route('banner.create')}}">Thêm Banner</a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
          Cửa hàng
      </div>

  <!-- Categories -->
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
        <i class="fas fa-sitemap"></i>
        <span>Hạng mục 1</span>
      </a>
      <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Lựa chọn hạng mục:</h6>
          <a class="collapse-item" href="{{route('category.index')}}">Hạng mục</a>
          <a class="collapse-item" href="{{route('category.create')}}">Thêm Hạng mục</a>
        </div>
      </div>
  </li>
  {{-- Products --}}
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
        <i class="fas fa-cubes"></i>
        <span>Sản phẩm</span>
      </a>
      <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Lựa chọn sản phẩm:</h6>
          <a class="collapse-item" href="{{route('product.index')}}">Sản phẩm</a>
          <a class="collapse-item" href="{{route('product.create')}}">Thêm Sản phẩm</a>
        </div>
      </div>
  </li>

  {{-- Brands --}}
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brandCollapse" aria-expanded="true" aria-controls="brandCollapse">
        <i class="fas fa-table"></i>
        <span>Thương hiệu</span>
      </a>
      <div id="brandCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Lựa chọn thương hiệu:</h6>
          <a class="collapse-item" href="{{route('brand.index')}}">Thương hiệu</a>
          <a class="collapse-item" href="{{route('brand.create')}}">Thêm Thương hiệu</a>
        </div>
      </div>
  </li>

  {{-- Shipping --}}
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shippingCollapse" aria-expanded="true" aria-controls="shippingCollapse">
        <i class="fas fa-truck"></i>
        <span>Vận chuyển</span>
      </a>
      <div id="shippingCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Lựa chọn vận chuyển:</h6>
          <a class="collapse-item" href="{{route('shipping.index')}}">Vận chuyển</a>
          <a class="collapse-item" href="{{route('shipping.create')}}">Thêm vận chuyển</a>
        </div>
      </div>
  </li>

  <!--Orders -->


  <!-- Reviews -->

  

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Bài viết
  </div>

  <!-- Posts -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCollapse" aria-expanded="true" aria-controls="postCollapse">
      <i class="fas fa-fw fa-folder"></i>
      <span>Bài viết</span>
    </a>
    <div id="postCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Lựa chọn bài viết:</h6>
        <a class="collapse-item" href="{{route('post.index')}}">Bài viết</a>
        <a class="collapse-item" href="{{route('post.create')}}">Thêm bài viết</a>
      </div>
    </div>
  </li>

   <!-- Category -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCategoryCollapse" aria-expanded="true" aria-controls="postCategoryCollapse">
        <i class="fas fa-sitemap fa-folder"></i>
        <span>Hạng mục 2</span>
      </a>
      <div id="postCategoryCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Lựa chọn hạng mục:</h6>
          <a class="collapse-item" href="{{route('post-category.index')}}">Hạng mục</a>
          <a class="collapse-item" href="{{route('post-category.create')}}">Thêm hạng mục</a>
        </div>
      </div>
    </li>

    <!-- Tags -->
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tagCollapse" aria-expanded="true" aria-controls="tagCollapse">
          <i class="fas fa-tags fa-folder"></i>
          <span>Tags</span>
      </a>
      <div id="tagCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Lựa chọn Tag:</h6>
          <a class="collapse-item" href="{{route('post-tag.index')}}">Tag</a>
          <a class="collapse-item" href="{{route('post-tag.create')}}">Thêm Tag</a>
          </div>
      </div>
  </li>

    <!-- Comments -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('comment.index')}}">
          <i class="fas fa-comments fa-chart-area"></i>
          <span>Bình luận</span>
      </a>
    </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
   <!-- Heading -->
  
   <!-- Users -->
  
   <!-- General settings -->
   

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
    
  
  @endif


  @if(auth()->user()->level=='superadmin')

  {{-- Super admin --}}
  <li class="nav-item mx-auto" style="color: white;">
    <i class="fas fa-fw fa-user-shield"></i>
    <span >SUPER ADMIN</span>
</li>

<hr class="sidebar-divider my-0">


    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-user-shield"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Quản trị</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Bảng điều khiển</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Banner
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('file-manager')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Quản lý truyền thông</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>Banners</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Lựa chọn Banners</h6>
          <a class="collapse-item" href="{{route('banner.index')}}">Banners</a>
          <a class="collapse-item" href="{{route('banner.create')}}">Thêm Banner</a>
        </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Cửa hàng
        </div>

    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
          <i class="fas fa-sitemap"></i>
          <span>Hạng mục 1</span>
        </a>
        <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lựa chọn danh  mục:</h6>
            <a class="collapse-item" href="{{route('category.index')}}">Danh mục mục</a>
            <a class="collapse-item" href="{{route('category.create')}}">Thêm Danh mục</a>
          </div>
        </div>
    </li>
    {{-- Products --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
          <i class="fas fa-cubes"></i>
          <span>Sản phẩm</span>
        </a>
        <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lựa chọn sản phẩm:</h6>
            <a class="collapse-item" href="{{route('product.index')}}">Sản phẩm</a>
            <a class="collapse-item" href="{{route('product.create')}}">Thêm Sản phẩm</a>
          </div>
        </div>
    </li>

    {{-- Brands --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brandCollapse" aria-expanded="true" aria-controls="brandCollapse">
          <i class="fas fa-table"></i>
          <span>Thương hiệu</span>
        </a>
        <div id="brandCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lựa chọn thương hiệu:</h6>
            <a class="collapse-item" href="{{route('brand.index')}}">Thương hiệu</a>
            <a class="collapse-item" href="{{route('brand.create')}}">Thêm Thương hiệu</a>
          </div>
        </div>
    </li>

    {{-- Shipping --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shippingCollapse" aria-expanded="true" aria-controls="shippingCollapse">
          <i class="fas fa-truck"></i>
          <span>Vận chuyển</span>
        </a>
        <div id="shippingCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lựa chọn vận chuyển:</h6>
            <a class="collapse-item" href="{{route('shipping.index')}}">Vận chuyển</a>
            <a class="collapse-item" href="{{route('shipping.create')}}">Thêm vận chuyển</a>
          </div>
        </div>
    </li>

    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('order.index')}}">
            <i class="fas fa-hammer fa-chart-area"></i>
            <span>Đặt hàng</span>
        </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('review.index')}}">
            <i class="fas fa-comments"></i>
            <span>Đánh giá</span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Bài viết
    </div>

    <!-- Posts -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCollapse" aria-expanded="true" aria-controls="postCollapse">
        <i class="fas fa-fw fa-folder"></i>
        <span>Bài viết</span>
      </a>
      <div id="postCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Lựa chọn bài viết:</h6>
          <a class="collapse-item" href="{{route('post.index')}}">Bài viết</a>
          <a class="collapse-item" href="{{route('post.create')}}">Thêm bài viết</a>
        </div>
      </div>
    </li>

     <!-- Category -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCategoryCollapse" aria-expanded="true" aria-controls="postCategoryCollapse">
          <i class="fas fa-sitemap fa-folder"></i>
          <span>Hạng mục 2</span>
        </a>
        <div id="postCategoryCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lựa chọn hạng mục:</h6>
            <a class="collapse-item" href="{{route('post-category.index')}}">Hạng mục</a>
            <a class="collapse-item" href="{{route('post-category.create')}}">Thêm hạng mục</a>
          </div>
        </div>
      </li>

      <!-- Tags -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tagCollapse" aria-expanded="true" aria-controls="tagCollapse">
            <i class="fas fa-tags fa-folder"></i>
            <span>Tags</span>
        </a>
        <div id="tagCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lựa chọn Tag:</h6>
            <a class="collapse-item" href="{{route('post-tag.index')}}">Tag</a>
            <a class="collapse-item" href="{{route('post-tag.create')}}">Thêm Tag</a>
            </div>
        </div>
    </li>

      <!-- Comments -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('comment.index')}}">
            <i class="fas fa-comments fa-chart-area"></i>
            <span>Bình luận</span>
        </a>
      </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
     <!-- Heading -->
    <div class="sidebar-heading">
        Cài đặt chung
    </div>
    <li class="nav-item">
      <a class="nav-link" href="{{route('coupon.index')}}">
          <i class="fas fa-table"></i>
          <span>Coupon</span></a>
    </li>
     <!-- Users -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>Người dùng</span></a>
    </li>
     <!-- General settings -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('settings')}}">
            <i class="fas fa-cog"></i>
            <span>Cài đặt</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

  @endif


@endif

    