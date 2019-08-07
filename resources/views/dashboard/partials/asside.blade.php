
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active" ><a href="{{ route('index.index') }}"><i class="fa fa-dashboard"></i> <span>Home Page</span></a></li> 
        <li><a href=""><i class="fa fa-users"></i> <span>Users</span></a></li>
        <li><a href="{{route('categories.index')}}"><i class="fa fa-users"></i> <span>Categories</span></a></li>
        <li><a href="{{route('products.index')}}"><i class="fa fa-users"></i> <span>Products</span></a></li>
        <li><a href="{{route('brands.index')}}"><i class="fa fa-users"></i> <span>Brands</span></a></li>
        <li><a href=""><i class="fa fa-users"></i> <span>Orders</span></a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>