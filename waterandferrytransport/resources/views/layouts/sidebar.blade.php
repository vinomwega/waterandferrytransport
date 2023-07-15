<div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Welcome Admin
                    </a>
                </div>
                <ul class="nav">
                    <!--How to make a button/item active-->
                    <li  class="nav-item active">
                        <a class="nav-link" href="{{route('admin')}}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <!--end of how to make a button active-->
                    <li class="nav-item active" onclick="">
                        <a class="nav-link" href="{{route('admin.about')}}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Bookings</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('admin.homeFerry')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Ferry List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('admin.availF')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Available Ferries</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('admin.AdmPay')}}">
                            <i class="nc-icon nc-atom"></i>
                            <p>Payments</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('admin.AdnDate')}}">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Date</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('admin.about')}}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                   <!-- <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>-->
                </ul>
            </div>
                
        <div class="sidebar-background" style="background-image: url(../assets/img/sidebar-5.jpg) "></div></div>