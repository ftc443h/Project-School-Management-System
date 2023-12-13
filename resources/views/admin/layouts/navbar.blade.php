<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <div class="header-left">
                <a class="logo">
                    <img src="{{ asset('admin/assets/img/logo1.png') }}" width="40" height="40" alt="">
                    <span class="text-uppercase">Preschool</span>
                </a>
            </div>
            <ul class="sidebar-ul" class="active">
                <li class="menu-title">Dashboard</li>
                <li class="submenu">
                <li>
                    <a href="{{ route('dashboard.index') }}"><img src="{{ asset('admin/assets/img/sidebar/icon-1.png') }}" alt="icon"><span>Dashboard</span></a>
                </li>
                </li>
                <li class="menu-title">Educational Foundation</li>
                <li class="submenu">
                    <a class="link-c"><img src="{{ asset('admin/assets/img/sidebar/icon-10.png') }}" alt="icon"><span>Teacher</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled" style="display: none;">
                        <li><a href="{{ route('teacher.index') }}"><span>All Teacher</span></a></li>
                        <li><a href="{{ route('teacher.create') }}"><span>Add Teacher</span></a></li>
                        <li><a href="{{ route('presence_tc.index') }}"><span>Presence Teacher</span></a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a class="link-c"><img src="{{ asset('admin/assets/img/sidebar/icon-2.png') }}" alt="icon"><span>Student</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled" style="display: none;">
                        <li><a href="{{ route('student.index') }}"><span>All Student</span></a></li>
                        <li><a href="{{ route('student.create') }}"><span>Add Student</span></a></li>
                        <li><a href="{{ route('presence_st.index') }}"><span>Presence Student</span></a></li>
                    </ul>
                </li>
                <li class="menu-title">Classroom Schedule</li>
                <li class="submenu">
                <li>
                    <a href="{{ route('classroom.index') }}"><img src="{{ asset('admin/assets/img/sidebar/icon-7.png') }}" alt="icon"><span>Classroom</span></a>
                </li>
                <li>
                    <a href="{{ route('lesson_value.index')}}"><img src="{{ asset('admin/assets/img/sidebar/icon-12.png') }}" alt="icon"><span>Lesson Value</span></a>
                </li>
                <li>
                    <a href="{{ route('learning.index') }}"><img src="{{ asset('admin/assets/img/sidebar/icon-19.png') }}" alt="icon"><span>Lesson</span></a>
                </li>
                </li>
            </ul>
        </div>
    </div>
</div>