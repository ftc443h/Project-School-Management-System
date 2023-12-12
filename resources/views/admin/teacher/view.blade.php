@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h5 class="text-uppercase mb-0 mt-0 page-title">View Teacher</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="breadcrumb float-right p-0 mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item"><span>View Teacher</span></li>
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
                                                    @empty($teacher_view->photo_teacher)
                                                    <img class="text-center" src="{{url('admin/assets/img/profile/notprofileimages.png')}}" alt="" width="15%" style="width: 70px; height: 95px; margin-top: -25px;">
                                                    @else
                                                    <img class="text-center" src="{{url('admin/assets/img/profile/')}}/{{$teacher_view->photo_teacher}}" alt="" width="15%" style="width: 70px; height: 95px; margin-top: -25px;">
                                                    @endempty
                                                </div>
                                                <div class="aboutprofile-name">
                                                    <h5 class="text-center mt-2 nme-teacher">{{$teacher_view->name_teacher}}</h5>
                                                    <p class="text-center nme-teacher">Teacher</p>
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
                                            <li class="list-group-item newpAB"><b>ID</b><a href="#" class="float-right cdo">{{$teacher_view->code_teacher}}</a></li>
                                            <li class="list-group-item newpAB"><b>Gender</b><a href="#" class="float-right gnd">{{$teacher_view->gender_teacher}}</a></li>
                                            <li class="list-group-item newpAB"><b>birthday</b><a href="#" class="float-right birtd">{{$teacher_view->birthday_teacher}}</a></li>
                                            <li class="list-group-item newpAB"><b>E-Mail</b><a href="#" class="float-right emil">{{$teacher_view->email_teacher}}</a></li>
                                            <li class="list-group-item newpAB"><b>Address</b><a href="#" class="float-right addr">{{$teacher_view->address_teacher}}</a></li>
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
                                                            <p class="text-muted nwpTex">{{$teacher_view->name_teacher}}</p>
                                                        </div>
                                                        <div class="col-md-3 col-6 nwpTex"> <strong class="nwpTex">Telephone</strong>
                                                            <p class="text-muted nwpTex">{{$teacher_view->phone_teacher}}</p>
                                                        </div>
                                                        <div class="col-md-3 col-6 nwpTex"> <strong class="nwpTex">E-Mail</strong>
                                                            <p class="text-muted nwpTex"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82efebe1eae3e7eef4e0f7f6f6e3f0f1c2e7fae3eff2eee7ace1edef">{{$teacher_view->email_teacher}}</a>
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
                                                    <a class="btn btn-warning text-white edit-prof">Edit</a>
                                                    <a href="{{url('/teacher')}}" class="btn btn-danger text-white back-prof">Back</a>
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