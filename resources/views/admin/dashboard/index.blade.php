@extends('admin.layouts.index')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="page-title mb-0">
                        Dashboard
                        <label class="btn btn-sm btn-success" style="margin-top: 7px; font-weight: bold; text-transform: uppercase; font-size: 12px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                        @if(empty(Auth::user()->role_users))
                        {{''}}
                        @else
                        {{Auth::user()->role_users}}
                        @endif
                        </label>
                    </h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
        </div>

        @if(Auth::user()->role_users == 'student' || Auth::user()->role_users == 'teacher')
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                        @if(empty(Auth::user()->photo))
                        <img class="img-fluid" src="{{ url('admin/assets/img/profile/notprofileimages.png') }}" alt="">
                        @else
                        <img class="img-fluid" src="{{ url('admin/assets/img/users/') }}/{{Auth::user()->photo}}" alt="">
                        @endif
                </div>
                <div class="col-md-8 cls">
                    <h4 class="klass">
                        Welcome Back 
                        <span style="color: #00A9FF; font-size: 17px; font-weight: bold;">
                        @if(empty(Auth::user()->name))
                        @else
                        {{Auth::user()->name}}!
                        @endif
                        </span>
                    </h4>
                    <p class="Prgk img-fluid">
                        Pellentesque habitant morbi tristique senectus et
                        netus et malesuada fames ac turpis egestas. Vestibulum
                        tortor quam, feugiat vitae, ultricies eget, tempor sit amet,
                        ante. Donec eu libero sit amet quam egestas semper. Aenean
                        ultricies mi vitae est. Mauris placerat eleifend leo.
                        Pellentesque habitant morbi tristique senectus et
                        netus et malesuada fames ac turpis egestas. Vestibulum
                        tortor quam, feugiat vitae, ultricies eget, tempor sit amet,
                        ante. Donec eu libero sit amet quam egestas semper. Aenean
                        ultricies mi vitae est. Mauris placerat eleifend leo.
                    </p>
                </div>
            </div>
        </div>
        @endif

        @if(Auth::user()->role_users == 'admin')
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <span class="float-left"><img src="{{ asset('admin/assets/img/dash/dash-1.png') }}" alt="" width="80"></span>
                    <div class="dash-widget-info text-right">
                        <span>Students</span>
                        <h3>{{ $studentCount }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <div class="dash-widget-info text-left d-inline-block">
                        <span>Teachers</span>
                        <h3>{{ $teacherCount }}</h3>
                    </div>
                    <span class="float-right"><img src="{{ asset('admin/assets/img/dash/dash-5.png') }}" width="80" alt=""></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <div class="dash-widget-info text-left d-inline-block">
                        <span>Classroom</span>
                        <h3>{{ $classroomCount }}</h3>
                    </div>
                    <span class="float-right"><img src="{{ asset('admin/assets/img/dash/dash-2.png') }}" width="80" alt=""></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <span class="float-left"><img src="{{ asset('admin/assets/img/dash/dash-6.png') }}" alt="" width="80"></span>
                    <div class="dash-widget-info text-right">
                        <span>Lesson</span>
                        <h3>{{ $learningCount }}</h3>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if(Auth::user()->role_users == 'student' || Auth::user()->role_users == 'admin' || Auth::user()->role_users == 'teacher')
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="page-title">
                                    Calendar
                                </div>
                            </div>
                            <div class="col text-right">
                                <div class=" mt-sm-0 mt-2">
                                    <button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">Action</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item">Another action</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="calendar" class=" overflow-hidden"></div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @include('admin.layouts.message')
    </div>
</div>
@endsection