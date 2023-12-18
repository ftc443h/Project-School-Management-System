@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
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
                        <span>Presence Teacher</span>
                        <h3>{{ $presensi_tCount }}</h3>
                    </div>
                    <span class="float-right"><img src="{{ asset('admin/assets/img/dash/dash-2.png') }}" width="80" alt=""></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <span class="float-left"><img src="{{ asset('admin/assets/img/dash/dash-6.png') }}" alt="" width="80"></span>
                    <div class="dash-widget-info text-right">
                        <span>Presence Student</span>
                        <h3>{{ $presensi_sCount }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="page-title mb-0">View Assigment Student</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>View Assigment Student</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card-box m-b-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="{{ route('presence_tc.index')}}">
                                    @empty($assigment_View->tbl_student->photo_student)
                                    <img class="avatar" src="{{url('admin/assets/img/profile/notprofileimages.png')}}" alt="">
                                    @else
                                    <img class="avatar" src="{{url('admin/assets/img/profile/')}}/{{$assigment_View->tbl_student->photo_student}}" alt="">
                                    @endempty
                                </a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 previewT">{{$assigment_View->tbl_student->name_student}}</h3>
                                        <h5 class="company-role m-t-0 m-b-0 rowViewT">Student</h5>
                                        <small class="text-muted">
                                            <label class="btn btn-sm btn-success mt-3">{{$assigment_View->file_assigment}}</label>
                                        </small>
                                        <div class="staff-id CodViewT">Code ID : {{$assigment_View->code_assigment}}</div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <span class="title">Gender :</span>
                                            <span class="text"><a href="">{{$assigment_View->tbl_student->gender_student}}</a></span>
                                        </li>
                                        <li>
                                            <span class="title">Phone : </span>
                                            <span class="text">{{$assigment_View->tbl_student->phone_student}}</span>
                                        </li>
                                        <li>
                                            <span class="title">Clock : </span>
                                            <span class="text">{{$assigment_View->clock_assigment}}</span>
                                        </li>
                                        <li>
                                            <span class="title">Address : </span>
                                            <span class="text">{{$assigment_View->tbl_student->address_student}}</span>
                                        </li>
                                    </ul>
                                    <a href="{{url('/assigment')}}" class="btn btn-danger btp">Cancel</a>
                                    @if(Auth::user()->role_users == 'teacher' || Auth::user()->role_users == 'admin')
                                    <a href="{{ route('assigment.edit', $assigment_View->id) }}" type="submit" name="proses" value="simpan" id="simpan" class="btn btn-primary btp">Edit</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.classroom.message')
</div>
@endsection