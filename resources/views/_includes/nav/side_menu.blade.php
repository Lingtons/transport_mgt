<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">

        <h3>Management</h3>
        <ul class="nav side-menu">
            <li><a href="{{route('manage.dashboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a><i class="fa fa-edit"></i> Management <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{route('transits.index')}}">Manage Transits</a></li>
                  <li><a href="{{route('bookings.index')}}">Manage Booking</a></li>
                  <li><a href="{{route('inventories.index')}}">Manage Inventories</a></li>
                  @role('superadmin|admin')
                  <li><a href="{{route('items.index')}}">Manage Items</a></li>
                  <li><a href="{{route('users.index')}}">Manage Users</a></li>
                  <li><a href="{{route('financial_reports')}}">Financial Report</a></li>
                  <li><a href="{{route('inventory_reports')}}">Inventory Report</a></li>
                  @endrole
                </ul>
            </li>

        </ul>
    </div>

</div>