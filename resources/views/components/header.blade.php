<!-- Get level of access -->
@php($user = Auth::user())

<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
    </div>
    
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        {{-- <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                    <i class="icon-copy dw dw-notification"></i>
                    <span class="badge notification-active"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        @foreach($headerContacts as $contact)
                            @if(Auth::user()->id == $contact->user_id)
                                <ul>
                                    <li>{{$contact->reply}}</li>
                                </ul>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="{{ asset ('uploads/users/'.$user->photo)}}"  alt="profile picture">
                    </span>
                    <span class="user-name">{{ old('name' , $user->nickname )}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="{{url('settings')}}"><i class="dw dw-settings2"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="dw dw-help"></i> Help</a>
                    <a class="dropdown-item" href="{{ route('logout')}}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="dw dw-logout"></i> Log Out</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    
    </div>
</div>

