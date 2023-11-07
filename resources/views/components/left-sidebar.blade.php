@php($user = Auth::user())
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
            <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{ route('home') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                </li>
              
                <li class="dropdown">
                    <a href="{{ route('profile') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Profile</span>
                    </a>
                </li>
                @if ($user->role =='admin')
                <li class="dropdown">
                        <span class="micon dw dw-library"></span><span class="mtext">Students</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="basic-table.html">Add New Students</a></li>
                        <li><a href="datatable.html">Delete Students</a></li>
                        <li><a href="datatable.html">View Student List</a></li>

                    </ul>
                </li> 

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Manage Quiz</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="basic-table.html">Add New Quiz</a></li>
                        <li><a href="datatable.html">Delete Quiz</a></li>
                        <li><a href="datatable.html">View Quiz List</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Manage Forum</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="basic-table.html">Add New Forum</a></li>
                        <li><a href="datatable.html">Delete Forum</a></li>
                        <li><a href="datatable.html">Edit Forum Information</a></li>
                    </ul>
                </li>
                @endif

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Courses</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="basic-table.html">Module 1</a></li>
                        <li><a href="datatable.html">Module 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="calendar.html" class="dropdown-toggle">
                        <span class="micon dw dw-calendar1"></span><span class="mtext">Quizzes</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="basic-table.html">Module 1</a></li>
                        <li><a href="datatable.html">Module 2</a></li>
                        <li><a href="basic-table.html">Module 3</a></li>
                        <li><a href="datatable.html">Module 4</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-apartment"></span><span class="mtext">Forum</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-paint-brush"></span><span class="mtext">Community</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>