@php($user = Auth::user())
<style>


.checkbox-wrapper-8 .tgl {
        display: none;
    }

    .checkbox-wrapper-8 .tgl,
    .checkbox-wrapper-8 .tgl:after,
    .checkbox-wrapper-8 .tgl:before,
    .checkbox-wrapper-8 .tgl *,
    .checkbox-wrapper-8 .tgl *:after,
    .checkbox-wrapper-8 .tgl *:before,
    .checkbox-wrapper-8 .tgl+.tgl-btn {
        box-sizing: border-box;
    }

    .checkbox-wrapper-8 .tgl::-moz-selection,
    .checkbox-wrapper-8 .tgl:after::-moz-selection,
    .checkbox-wrapper-8 .tgl:before::-moz-selection,
    .checkbox-wrapper-8 .tgl *::-moz-selection,
    .checkbox-wrapper-8 .tgl *:after::-moz-selection,
    .checkbox-wrapper-8 .tgl *:before::-moz-selection,
    .checkbox-wrapper-8 .tgl+.tgl-btn::-moz-selection,
    .checkbox-wrapper-8 .tgl::selection,
    .checkbox-wrapper-8 .tgl:after::selection,
    .checkbox-wrapper-8 .tgl:before::selection,
    .checkbox-wrapper-8 .tgl *::selection,
    .checkbox-wrapper-8 .tgl *:after::selection,
    .checkbox-wrapper-8 .tgl *:before::selection,
    .checkbox-wrapper-8 .tgl+.tgl-btn::selection {
        background: none;
    }

    .checkbox-wrapper-8 .tgl+.tgl-btn {
        outline: 0;
        display: block;
        width: 4em;
        height: 2em;
        position: relative;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .checkbox-wrapper-8 .tgl+.tgl-btn:after,
    .checkbox-wrapper-8 .tgl+.tgl-btn:before {
        position: relative;
        display: block;
        content: "";
        width: 50%;
        height: 100%;
    }

    .checkbox-wrapper-8 .tgl+.tgl-btn:after {
        left: 0;
    }

    .checkbox-wrapper-8 .tgl+.tgl-btn:before {
        display: none;
    }

    .checkbox-wrapper-8 .tgl:checked+.tgl-btn:after {
        left: 50%;
    }

    .checkbox-wrapper-8 .tgl-skewed+.tgl-btn {
        overflow: hidden;
        transform: skew(-10deg);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transition: all 0.2s ease;
        font-family: sans-serif;
        background: #888;
    }

    .checkbox-wrapper-8 .tgl-skewed+.tgl-btn:after,
    .checkbox-wrapper-8 .tgl-skewed+.tgl-btn:before {
        transform: skew(10deg);
        display: inline-block;
        transition: all 0.2s ease;
        width: 100%;
        text-align: center;
        position: absolute;
        line-height: 2em;
        font-weight: bold;
        color: #fff;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
    }

    .checkbox-wrapper-8 .tgl-skewed+.tgl-btn:after {
        left: 100%;
        content: attr(data-tg-on);
    }

    .checkbox-wrapper-8 .tgl-skewed+.tgl-btn:before {
        left: 0;
        content: attr(data-tg-off);
    }

    .checkbox-wrapper-8 .tgl-skewed+.tgl-btn:active {
        background: #888;
    }

    .checkbox-wrapper-8 .tgl-skewed+.tgl-btn:active:before {
        left: -10%;
    }

    .checkbox-wrapper-8 .tgl-skewed:checked+.tgl-btn {
        background: #86d993;
    }

    .checkbox-wrapper-8 .tgl-skewed:checked+.tgl-btn:before {
        left: -100%;
    }

    .checkbox-wrapper-8 .tgl-skewed:checked+.tgl-btn:after {
        left: 0;
    }

    .checkbox-wrapper-8 .tgl-skewed:checked+.tgl-btn:active:after {
        left: 10%;
    }    
    
</style>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('home')}}">
            <img src="../../../vendors/images/crunchy-code-logo.png" alt="" width="70" height="70" class="dark-logo">
            <img src="../../../vendors/images/wording-logo.png" alt="" width="600" class="dark-logo">
            <img src="../../../vendors/images/crunchy-code-logo.png" alt="" width="70" height="70" class="light-logo">
            <img src="../../../vendors/images/wording-logo.png" alt="" width="600" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                <!-- Music Toggle -->
                <div class="checkbox-wrapper-8" style="position:relative; left:-5px; margin-top:30px;">
                    <center>
                        <input type="checkbox" id="cb3-8" class="tgl tgl-skewed" onclick="playMusic('{{ asset('music/classical-piano.mp3') }}')">
                        <label for="cb3-8" data-tg-on="ON" data-tg-off="OFF" class="tgl-btn"></label>
                    </center>
                </div>

                <!-- Script for playing the music -->
                <script>
                    let audio;

                    function playMusic(encodedUrl) {
                    // Decode the URL before creating the Audio object
                    const url = decodeURIComponent(encodedUrl);
                    
                    if (!audio) {
                        audio = new Audio(url);
                    }

                    if (audio.paused) {
                        audio.play();
                    } else {
                        audio.pause();
                    }
                }

                </script>

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
                        <a href="{{ route('module') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-edit2"></span><span class="mtext">Modules</span>
                        </a>
                    </li>

                    <!-- Quizzes -->
                    <li>
                        <a href="{{ route('quiz') }}"class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-calendar1"></span><span class="mtext">Quizzes</span>
                        </a>
                    </li>

                    <!-- Forum -->
                    <li>
                        <a href="{{ route('discussion') }}" class="dropdown-toggle no-arrow">
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
                        <span class="micon dw dw-library"></span><span class="mtext">Manage Material</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('materials.create')}}">Add New Material</a></li>
                        <li><a href="{{route('materials.index')}}">View Material</a></li>

                    </ul>
                </li> 

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Manage Quiz</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('quizzes.create')}}">Add New Quiz</a></li>
                        <li><a href="{{route('quizzes.index')}}">View Quiz</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Manage Forum</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('forum.create')}}">Add New Forum</a></li>
                        <li><a href="{{route('forum.index')}}">View Forum </a></li>
                    </ul>
                </li>
                @endif

            
                
                
            </ul>
        </div>
    </div>
</div>