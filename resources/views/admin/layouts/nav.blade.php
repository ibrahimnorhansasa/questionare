  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('images/azhar.jpeg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"> جامعه الازهر</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  الفرق الدراسيه
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('class.create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>انشاء الفرقه الدراسيه </p>
                  </a>
                </li>
                     <li class="nav-item">
                  <a href="{{route('class.index')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>عرض الفرقه الدراسيه </p>
                  </a>
                </li>
           
              </ul>
            </li>
               <li class="nav-item has-treeview">
              <a href="#" class="nav-link  ">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  المواد
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('subject.create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>انشاء مواد </p>
                  </a>
                </li>
                   <li class="nav-item">
                  <a href="{{route('subject.index')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p> عرض المواد </p>
                  </a>
                </li>
                
              </ul>
            </li>
                  
   <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  الدكتور
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('doctor.create')}}" class="nav-link ">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p> انشاء دكتور</p>
                  </a>
                </li>
                     <li class="nav-item">
                  <a href="{{route('doctor.index')}}" class="nav-link ">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p> عرض الدكاتره </p>
                  </a>
                </li>
             
              </ul>
            </li>
      <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  الاسئله
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('category.index')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>انشاء اسئله </p>
                  </a>
                </li>
              
                
              </ul>
            </li>
               
                    <li class="nav-item has-treeview">
              <a href="#" class="nav-link ">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  عرض نتائج الاستبيان
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('show/user')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p> الطلاب </p>
                  </a>
                </li>
                     <li class="nav-item">
                  <a href="{{url('/show/subject')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>المواد </p>
                  </a>
                </li>
           
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>