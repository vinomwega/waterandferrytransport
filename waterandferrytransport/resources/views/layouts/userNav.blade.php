<div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Welcome
            </a>
        </div>
        <ul class="nav" id="sidebar">
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('userdash') ? 'active' : '' }}" href="{{ route('userdash') }}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ Request::routeIs('useBooking') ? 'active' : '' }}" href="{{ route('useBooking') }}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Booking</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('viewBooking') ? 'active' : '' }}" href="{{ route('viewBooking') }}">
                    <i class="nc-icon nc-notes"></i>
                    <p>View Bookings</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('payment') ? 'active' : '' }}" href="{{ route('payment') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Payment</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('date') ? 'active' : '' }}" href="{{ route('date') }}">
                    <i class="nc-icon nc-atom"></i>
                    <p>Date</p>
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
    var sidebar = document.querySelector('.sidebar');
    var navLinks = sidebar.querySelectorAll('.nav-link');

    navLinks.forEach(function(navLink) {
        navLink.addEventListener('click', function() {
            navLinks.forEach(function(link) {
                link.classList.remove('active');
            });

            this.classList.add('active');
        });
    });
</script>
