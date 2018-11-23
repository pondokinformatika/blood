<?php 
$url1 = request()->segment(1);
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('AdminLTE-2.4.4/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li>
          <a href="{{route('patients.index')}}">
            <i class="fa fa-hotel"></i> <span>Pasien</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li class=" {{ $url1 == 'provinsi' ? 'active' : '' }} ">
          <a href=" {{route('provinsi.index')}} ">
            <i class="fa fa-map-marker"></i> <span>Provinsi</span>
            <span class="pull-right-container" ></span>
          </a>
        </li>
        <li> 
          <a href="#">
            <i class="fa fa-plus-square"></i> <span>Pendonor</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
      </ul>
       
    </section>
    <!-- /.sidebar -->
  </aside>
