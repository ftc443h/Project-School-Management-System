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
                <div class="col-md-6">
                    <h3 class="page-title mb-0">View Student</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>View Student</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="aboutprofile-sidebar">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="aboutprofile">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="aboutprofile-pic text-center">
                                                    @empty($student_view->photo_student)
                                                    <img src="{{url('admin/assets/img/profile/notprofileimages.png')}}" alt="" width="15%" style="width: 70px; height: 95px; margin-top: -25px;">
                                                    @else
                                                    <img src="{{url('admin/assets/img/profile/')}}/{{$student_view->photo_student}}" alt="" width="15%" style="width: 70px; height: 95px; margin-top: -25px;">
                                                    @endempty
                                                </div>
                                                <div class="aboutprofile-name">
                                                    <h5 class="text-center mt-2 nme-student">{{$student_view->name_student}}</h5>
                                                    <p class="text-center nme-student">Student</p>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item fllw"><b>Followers</b><a href="#" class="float-right">1000</a></li>
                                                    <li class="list-group-item fllw"><b>Following</b><a href="#" class="float-right">700</a></li>
                                                    <li class="list-group-item fllw"><b>Friends</b><a href="#" class="float-right">5000</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="aboutme-profile">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="page-title abo-jdl">About Me</h4>
                                    </div>
                                    <div class="card-body text-justify">
                                        <p class="text-justify pr-About">Hello I am Michael V. Buttars .Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry. Lorem Ipsum has been
                                            the</p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item newpAB"><b>ID</b><a href="#" class="float-right cdo">{{$student_view->code_student}}</a></li>
                                            <li class="list-group-item newpAB"><b>Gender</b><a href="#" class="float-right gnd">{{$student_view->gender_student}}</a></li>
                                            <li class="list-group-item newpAB"><b>birthday</b><a href="#" class="float-right birtd">{{$student_view->birthday_student}}</a></li>
                                            <li class="list-group-item newpAB"><b>E-Mail</b><a href="#" class="float-right emil">{{$student_view->email_student}}</a></li>
                                            <li class="list-group-item newpAB"><b>Address</b><a href="#" class="float-right addr">{{$student_view->address_student}}</a></li>
                                        </ul>
                                        <div class="aboutme-start">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-4">
                                                    <div class="aboutme-starttitle text-uppercase newfllw">
                                                        37
                                                    </div>
                                                    <div class="aboutme-startname text-uppercase newfllw">
                                                        Papers
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-4">
                                                    <div class="aboutme-starttitle text-uppercase newfllw">
                                                        52
                                                    </div>
                                                    <div class="aboutme-startname text-uppercase newfllw">
                                                        Seminors
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-4">
                                                    <div class="aboutme-starttitle text-uppercase newfllw">
                                                        50
                                                    </div>
                                                    <div class="aboutme-startname text-uppercase newfllw">
                                                        Articles
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">

                                            <div class="card-header">
                                                <h4 class="page-title newtitle">About Me</h4>
                                            </div>

                                            <div class="card-body">
                                                <div id="biography" class="biography">
                                                    <div class="row">
                                                        <div class="col-md-3 col-6 nwpTex"> <strong class="nwpTex">Full
                                                                Name</strong>
                                                            <p class="text-muted nwpTex">{{$student_view->name_student}}</p>
                                                        </div>
                                                        <div class="col-md-3 col-6 nwpTex"> <strong class="nwpTex">Telephone</strong>
                                                            <p class="text-muted nwpTex">{{$student_view->phone_student}}</p>
                                                        </div>
                                                        <div class="col-md-3 col-6 nwpTex"> <strong class="nwpTex">E-Mail</strong>
                                                            <p class="text-muted nwpTex"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82efebe1eae3e7eef4e0f7f6f6e3f0f1c2e7fae3eff2eee7ace1edef">{{$student_view->email_student}}</a>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 col-6 nwpTex">
                                                            <strong nwpTex>Location</strong>
                                                            <p class="text-muted nwpTex">Indonesia</p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <p class="text-justify newrtw">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Quos eligendi, eaque ullam nesciunt ducimus itaque qui laudantium iure,
                                                        nobis nihil aut ea modi suscipit repudiandae molestiae ut voluptate illo repellendus.</p>
                                                    <p class="text-justify newrtw">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the Lorem, ipsum dolor sit amet consectetur
                                                        adipisicing elit. Qui eaque quisquam magni, corporis porro cupiditate. Laboriosam, repudiandae
                                                        ut? Porro provident voluptate pariatur dolore hic delectus soluta iste, suscipit asperiores inventore?</p>
                                                    <p class="text-justify newrtw">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap
                                                        into electronic typesetting, remaining essentially
                                                        unchanged.</p>
                                                    @if(Auth::user()->role_users == 'teacher' || Auth::user()->role_users == 'admin')
                                                    <a href="{{ route('student.edit', $student_view->id) }}" class="btn btn-warning text-white edit-prof">Edit</a>
                                                    @endif
                                                    <a href="{{url('/student')}}" class="btn btn-danger text-white back-prof">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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