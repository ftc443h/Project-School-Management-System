@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">

    @if(Auth::user()->role_users == 'admin')
    @include('admin.dashboard.classroom_admin')
    @else
    <div class="content container-fluid">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="mt-3">{{ $message }}</p>
        </div>
        @endif

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
                    <span class="float-left"><img src="{{ asset('admin/assets/img/dash/dash-2.png') }}" alt="" width="80"></span>
                    <div class="dash-widget-info text-right">
                        <span>Classroom</span>
                        <h3>{{ $classroomCount }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <span class="float-left"><img src="{{ asset('admin/assets/img/dash/dash-6.png') }}" alt="" width="80"></span>
                    <div class="dash-widget-info text-right">
                        <span>Learning</span>
                        <h3>{{ $learningCount }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="page-title mb-0">Classroom</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>Classroom</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    @if(Auth::user()->role_users != 'student')
                    
                    @else
                    <div class="weppr-class container-fluid">
                        <a class="text-center PDF" href="{{ url('/surat_perizinan') }}" title="Permit Letter"><i class="bi bi-file-earmark-pdf"></i></a>
                    </div>
                    @endif
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">

                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Student</th>
                                    <th class="text-center">Class Offline</th>
                                    <th class="text-center">Class Online</th>
                                    <th class="text-center">Teacher</th>
                                    <th class="text-center">Learning</th>
                                    <th class="text-center">Clock Start</th>
                                    <th class="text-center">Clock End</th>
                                    <th class="text-center">Date Start</th>
                                    <th class="text-center">Date End</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($classroom as $class)
                                <tr>
                                    <td class="text-center">{{$no}}</td>
                                    <td class="text-center">{{$class->student}}</td>
                                    <td class="text-center">{{$class->offline_classroom}}</td>
                                    <td class="text-center">{{$class->online_classroom}}</td>
                                    <td class="text-center">{{$class->teacher}}</td>
                                    <td class="text-center">{{$class->learning}}</td>
                                    <td class="text-center">{{$class->clock_start}}</td>
                                    <td class="text-center">{{$class->clock_end}}</td>
                                    <td class="text-center">{{$class->date_start}}</td>
                                    <td class="text-center">{{$class->date_end}}</td>
                                    @php
                                    if(now()->lessThan($class->clock_start)){
                                    $status = 'Will Start';
                                    $bg_color = 'bg-warning';
                                    }elseif(now()->between($class->clock_start, $class->clock_end, $class->date_end)){
                                    $status = 'Underway';
                                    $bg_color = 'bg-success';
                                    }else{
                                    $status = 'Has Ended';
                                    $bg_color = 'bg-danger';
                                    }
                                    @endphp
                                    <td class="text-center">
                                        <span class="badge text-center text-white {{$bg_color}} rounded-3 fw-semibold">{{$status}}</span>
                                    </td>
                                </tr>
                                @php $no++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Row-->
    </div>
    @endif
</div>
@endsection