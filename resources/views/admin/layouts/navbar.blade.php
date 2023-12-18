<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <div class="header-left">
                <a class="logo">
                    <img src="{{ asset('admin/assets/img/logo1.png') }}" width="40" height="40" alt="">
                    <span class="text-uppercase">Preschool</span>
                </a>
            </div>
            <ul class="sidebar-ul">
                <li class="menu-title">Dashboard</li>
                <li class="submenu">
                <li class="nav-item {{ ($active === 'dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dashboard.index') }}"><img src="{{ asset('admin/assets/img/sidebar/icon-1.png') }}" alt="icon"><span>Dashboard</span></a>
                </li>
                </li>
                <li class="menu-title">Educational Foundation</li>
                <li class="submenu">
                    <a class="link-c {{ ($active === 'teacher') ? 'active' : '' }}"><img src="{{ asset('admin/assets/img/sidebar/icon-10.png') }}" alt="icon"><span>Teacher</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled" style="display: none;">
                        <li><a href="{{ route('teacher.index') }}"><span>All Teacher</span></a></li>
                        <li><a href="{{ route('teacher.create') }}"><span>Add Teacher</span></a></li>
                        <li><a href="{{ route('presence_tc.index') }}"><span>Presence Teacher</span></a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a class="link-c {{ ($active === 'student') ? 'active' : '' }}"><img src="{{ asset('admin/assets/img/sidebar/icon-2.png') }}" alt="icon"><span>Student</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled" style="display: none;">
                        <li><a href="{{ route('student.index') }}"><span>All Student</span></a></li>
                        <li><a href="{{ route('student.create') }}"><span>Add Student</span></a></li>
                        <li><a href="{{ route('presence_st.index') }}"><span>Presence Student</span></a></li>
                    </ul>
                </li>
                <li class="menu-title">Classroom Schedule</li>
                <li class="submenu">
                <li class="{{ ($active === 'classroom') ? 'active' : '' }}">
                    <a href="{{ route('classroom.index') }}"><img src="{{ asset('admin/assets/img/sidebar/icon-7.png') }}" alt="icon"><span>Classroom</span></a>
                </li>
                <li class="{{ ($active === 'lesson') ? 'active' : '' }}">
                    <a href="{{ route('lesson_value.index')}}"><img src="{{ asset('admin/assets/img/sidebar/icon-12.png') }}" alt="icon"><span>Lesson Score</span></a>
                </li>
                <li class="{{ ($active === 'learning') ? 'active' : '' }}">
                    <a href="{{ route('learning.index') }}"><img src="{{ asset('admin/assets/img/sidebar/icon-19.png') }}" alt="icon"><span>Lesson</span></a>
                </li>
                </li>
                <li class="menu-title">Daily Tasks</li>
                <li class="submenu">
                <li class="{{ ($active === 'assigment') ? 'active' : '' }}">
                    <a href="{{ route('assigment.index') }}"><img src="{{ asset('admin/assets/img/sidebar/icon-4.png') }}" alt="icon"><span>Assignment</span></a>
                </li>
                <li class="menu-title">Pages</li>
                <li class="submenu">
                <li class="{{ ($active === 'user') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}"><img src="{{ asset('admin/assets/img/sidebar/icon-4.png') }}" alt="icon"><span>Profile</span></a>
                </li>
                <li>
                    <a href="{{ url('/') }}"><img src="{{ asset('admin/assets/img/sidebar/icon-15.png') }}" alt="icon"><span>Pages</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>