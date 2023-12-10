@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h5 class="text-uppercase mb-0 mt-0 page-title">View Presence Student</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="breadcrumb float-right p-0 mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item"><span>View Presence Student</span></li>
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
                                                    @empty($presensist_view->tbl_student->photo_student)
                                                    <img src="{{url('admin/assets/img/profile/notprofileimages.png')}}" alt="" width="15%" style="width: 50px;">
                                                    @else
                                                    <img src="{{url('admin/assets/img/profile/')}}/{{$presensist_view->tbl_student->photo_student}}" alt="" width="15%" style="width: 40px;">
                                                    @endempty
                                                </div>
                                                <div class="aboutprofile-name">
                                                    <h5 class="text-center mt-2 nme-teacher">
                                                        {{$presensist_view->name_student}}
                                                    </h5>
                                                    <p class="text-center nme-teacher">Student</p>
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
                                        <p class="text-justify pr-About">Hello I am Michael V. Buttars .Lorem Ipsum is
                                            simply dummy text
                                            of the printing and typesetting industry. Lorem Ipsum has been
                                            the</p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item newpAB"><b>Student</b><a href="#" class="float-right cdo">{{$presensist_view->tbl_student->name_student}}</a>
                                            </li>
                                            <li class="list-group-item newpAB"><b>Date</b><a href="#" class="float-right gnd">{{$presensist_view->date_stud}}</a></li>
                                            <li class="list-group-item newpAB"><b>Status</b><a href="#" class="float-right birtd">{{$presensist_view->status_stud}}</a></li>
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
                                                            <p class="text-muted nwpTex">
                                                                {{$presensist_view->tbl_student->name_student}}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 col-6 nwpTex"> <strong class="nwpTex">Date</strong>
                                                            <p class="text-muted nwpTex">{{$presensist_view->date_stud}}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 col-6 nwpTex"> <strong class="nwpTex">Status</strong>
                                                            <p class="text-muted nwpTex"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82efebe1eae3e7eef4e0f7f6f6e3f0f1c2e7fae3eff2eee7ace1edef">{{$presensist_view->status_stud}}</a>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 col-6 nwpTex">
                                                            <strong nwpTex>Location</strong>
                                                            <p class="text-muted nwpTex">Indonesia</p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <p class="text-justify newrtw">Lorem Ipsum is simply dummy text of
                                                        the printing and
                                                        typesetting industry. Lorem Ipsum has been the Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit. Quos eligendi, eaque ullam nesciunt ducimus
                                                        itaque qui laudantium iure,
                                                        nobis nihil aut ea modi suscipit repudiandae molestiae ut
                                                        voluptate illo repellendus.</p>
                                                    <p class="text-justify newrtw">Lorem Ipsum is simply dummy text of
                                                        the printing and
                                                        typesetting industry. Lorem Ipsum has been the Lorem, ipsum
                                                        dolor sit amet consectetur
                                                        adipisicing elit. Qui eaque quisquam magni, corporis porro
                                                        cupiditate. Laboriosam, repudiandae
                                                        ut? Porro provident voluptate pariatur dolore hic delectus
                                                        soluta iste, suscipit asperiores inventore?</p>
                                                    <p class="text-justify newrtw">Lorem Ipsum is simply dummy text of
                                                        the printing and
                                                        typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap
                                                        into electronic typesetting, remaining essentially
                                                        unchanged.</p>
                                                    <a class="btn btn-warning text-white edit-prof">Edit</a>
                                                    <a href="{{url('/presence_tc')}}" class="btn btn-danger text-white back-prof">Back</a>
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