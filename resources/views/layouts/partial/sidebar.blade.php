    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('frontend/img/sidebar-1.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Pastry Emporium
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{Request::is('admin/dashboard*') ? 'active': ''}}">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          
          
          <li class="{{Request::is('admin/slider*') ? 'active': ''}}">
            <a class="nav-link" href="{{route('slider.index')}}">
              <i class="material-icons">fastfood</i>
              <p>Fast Foods</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/inventory*') ? 'active':'' }}">
            <a class="nav-link" href="{{ route('inventory.index') }}">
              <i class="material-icons">store</i>
              <p>Inventory</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/cake*') ? 'active':'' }}">
            <a class="nav-link" href="{{route('cake.index')}}">
              <i class="material-icons">cake</i>
              <p>Cakes</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/sweet*') ? 'active':'' }}">
            <a class="nav-link" href="{{route('sweet.index')}}">
              <i class="material-icons">kitchen</i>
              <p>Chocolates & Sweets</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">insert_emoticon</i>
              <p>Customer</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
