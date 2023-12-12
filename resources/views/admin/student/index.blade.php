@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    @if(Auth::user()->role_users != 'teacher')
    @include('admin.dashboard.student_admin')
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
                        <span>Teacher</span>
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
                    <div class="dash-widget-info d-inline-block text-left">
                        <span>Learning</span>
                        <h3>{{ $learningCount }}</h3>
                    </div>
                    <span class="float-right"><img src="{{ asset('admin/assets/img/dash/dash-6.png') }}" alt="" width="80"></span>
                </div>
            </div>
        </div>
        
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h5 class="text-uppercase mb-0 mt-0 page-title">Data Student</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="breadcrumb float-right p-0 mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Student</a></li>
                        <li class="breadcrumb-item"><span>Data Student</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
                <div class="card mb-4">

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Photo</th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Birthday</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone Number</th>
                                    <th class="text-center">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($student as $students)
                                <tr>
                                    <td class="text-center">{{ $no }}</td>
                                    <td class="text-center">
                                        @empty($students->photo_student)
                                        <img src="{{url('admin/assets/img/profile/notprofileimages.png')}}" alt="" width="15%" style="width: 50px;">
                                        @else
                                        <img src="{{url('admin/assets/img/profile/')}}/{{$students->photo_student}}" alt="" width="15%" style="width: 40px;">
                                        @endempty
                                    </td>
                                    <td class="text-center">{{ $students->code_student }}</td>
                                    <td class="text-center">{{ $students->name_student }}</td>
                                    <td class="text-center">{{ $students->birthday_student }}</td>
                                    <td class="text-center">{{ $students->gender_student}}</td>
                                    <td class="text-center">{{ $students->email_student }}</td>
                                    <td class="text-center">{{ $students->phone_student }}</td>
                                    <td class="text-center">{{ $students->address_student }}</td>
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