<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a href="index.html">
               
            </a>
            <a href="index.html">
                <img src="{{asset('template/assets/img4Holdings.png')}}" class="img-fluid logo-small" alt="">
            </a>
        </div>
    </div>
    <div class="sidebar-inner slimscroll"  >
        <div id="sidebar-menu" class="sidebar-menu">

            <!-- Customers   <a href="{{url('journal/entry')}}"><i class="fe fe-book-open"></i> <span>Countries List</span></a>-->  
            <ul>
                <li>
                    <a href="{{url('list/country')}}"><i class="fe fe-book-open"></i> <span>Countries List</span></a>
                </li>
                <li>
                    <a href="{{url('/country/details')}}"><i class="fe fe-file-minus"></i> <span>Country Details</span></a>
                </li>
            </ul>
 
           

          

            <ul>
                <li class="menu-title"><span>Logout</span></li>
               
                <li>
                    <a href="{{url ('/login')}}"><i class="fa fa-power-off"></i> <span>Logout</span></a>
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
