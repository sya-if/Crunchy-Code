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

                <!-- Student Sidebar -->
                @if($user->role == 'student')

                    <!-- Home -->
                    <li class="dropdown">
                        <a href="j{{ route('home') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                        </a>
                    </li>

                    <!-- Profile -->
                    <li class="dropdown">
                        <a href="{{ route('profile') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-edit2"></span><span class="mtext">Profile</span>
                        </a>
                    </li>

                    <!-- Modules -->
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-edit2"></span><span class="mtext">Modules</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="basic-table.html">Module 1</a></li>
                            <li><a href="datatable.html">Module 2</a></li>  
                            <li><a href="datatable.html">Module 3</a></li>  
                            <li><a href="datatable.html">Module 4</a></li>    
                        </ul>
                    </li>

                    <!-- Quizzes -->
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-calendar1"></span><span class="mtext">Quizzes</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="basic-table.html">My Quizzes</a></li>
                            <li><a href="datatable.html">Add Quizzes</a></li>    
                        </ul>
                    </li>

                    <!-- Forum -->
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-calendar1"></span><span class="mtext">Forum</span>
                        </a>
                    </li>

                    <!-- Community -->
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-paint-brush"></span><span class="mtext">Community</span>
                        </a>
                    </li>


                @endif
                
                <!-- Admin Sidebar -->
                @if ($user->role =='admin')

                 <!-- Home -->
                 <li>
                    <a href="{{ route('home') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span>
                        <span class="mtext">Home</span>
                    </a>
                </li>

                 <!-- Profile -->
                 <li>
                    <a href="{{ route('profile') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Profile</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Manage Students</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('user.create') }}">Add New Students</a></li>
                        <li><a href="{{ route('user.index')}}">View Student List</a></li>

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

            
                
                
            </ul>
        </div>
    </div>
</div>