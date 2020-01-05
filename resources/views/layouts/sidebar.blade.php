  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{ asset('/img/Logo_New.png') }}" alt="Vannarin Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Vannarin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ Auth::user()->name }} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/home" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                หน้าหลัก
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bell"></i>
              <p>
                การแจ้งเตือน
                <span class="right badge badge-danger">ใหม่</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-seedling"></i>
              <p>
                เลือกชนิดพืช 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-stream"></i>
              <p>
                แผนการปฏิบัติ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                แบบบันทึก
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                ข้อมูลพืช-สัตว์
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview {{ (request()->is('water')) ? 'menu-open' : '' }} {{ (request()->is('waterstatus')) ? 'menu-open' : '' }}">
            <a href="/water" class="nav-link {{ (request()->is('water')) ? 'active' : '' }} {{ (request()->is('waterstatus')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tint"></i>
              <p>
                ระบบให้น้ำอัตโนมัติ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/water" class="nav-link {{ (request()->is('water')) ? 'active' : '' }}">
                  <i class="fas fa-tools nav-icon"></i>
                  <p>ติดตั้งระบบ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/waterstatus" class="nav-link {{ (request()->is('waterstatus')) ? 'active' : '' }}">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>หน้าแสดงผล</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                ข้อมูลส่วนตัว
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                ตั้งค่า
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="dropdown-item nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i> 
               ออกจากระบบ
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
             </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>