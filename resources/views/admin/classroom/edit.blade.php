@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h5 class="text-uppercase mb-0 mt-0 page-title">Edit Classroom</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="breadcrumb float-right p-0 mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item"><span>Edit Classroom</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="bi bi-exclude"> <span class="spanCreate"> Welcome To Edit Classroom</span></i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('classroom.update', $classroom_edit->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row ">
                                <label class="bi bi-building-fill-add col-form-label col-md-2 LabForm"> Classroom</label>
                                <div class="col-md-10">
                                    <input type="text" name="offline_classroom" value="{{$classroom_edit->offline_classroom}}" class="form-control place" placeholder="Classroom Input">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-share-fill col-form-label col-md-2 LabForm"> Link Online</label>
                                <div class="col-md-10">
                                    <input type="text" name="online_classroom" value="{{$classroom_edit->online_classroom}}" class="form-control place" placeholder="Meet Link Input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-person-fill-add col-form-label col-md-2 LabForm"> Teacher</label>
                                <div class="col-md-10">
                                    <select name="tbl_teacher_id" class="form-control">
                                        <option class="optins">-- Please Select --</option>
                                        @foreach($teacher_edit as $TCH)
                                        @php $opti_teacher = ($TCH->id == $classroom_edit->tbl_teacher_id) ? 'selected' : ''; @endphp
                                        <option class="optins" value="{{ $TCH->id }}" {{$opti_teacher}}>{{$TCH->name_teacher}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-person-fill-add col-form-label col-md-2 LabForm"> Student</label>
                                <div class="col-md-10">
                                    <select name="tbl_student_id" class="form-control">
                                        <option class="optins">-- Please Select --</option>
                                        @foreach($student_edit as $STD)
                                        @php $opti_student = ($STD->id == $classroom_edit->tbl_student_id) ? 'selected' : ''; @endphp
                                        <option class="optins" value="{{ $STD->id }}" {{$opti_student}}>{{$STD->name_student}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-book-half col-form-label col-md-2 LabForm"> Learning</label>
                                <div class="col-md-10">
                                    <select name="tbl_learning_id" class="form-control">
                                        <option class="">-- Please Select --</option>
                                        @foreach($learning_edit as $LMS)
                                        @php $opti_LMS = ($LMS->id == $classroom_edit->tbl_learning_id) ? 'selected' : ''; @endphp
                                        <option class="optins" value="{{$LMS->id}}" {{$opti_LMS}}>{{$LMS->learning_class}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-people-fill col-form-label col-md-2 LabForm"> Users</label>
                                <div class="col-md-10">
                                    <select name="users_id" class="form-control">
                                        <option class="optins">-- Please Select --</option>
                                        @foreach($users_edit as $USR)
                                        @php $opti_users = ($USR->id == $classroom_edit->users_id) ? 'selected' : ''; @endphp
                                        <option class="optins" value="{{ $USR->id }}" {{$opti_users}}>{{$USR->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-clock-fill col-form-label col-md-2 LabForm"> Clock Start</label>
                                <div class="col-md-10">
                                    <input type="time" name="clock_start" value="{{$classroom_edit->clock_start}}" class="form-control place">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-clock-fill col-form-label col-md-2 LabForm"> Clock End</label>
                                <div class="col-md-10">
                                    <input type="time" name="clock_end" value="{{$classroom_edit->clock_end}}" class="form-control place" placeholder="Meet Link Input">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-calendar3 col-form-label col-md-2 LabForm"> Date Start</label>
                                <div class="col-md-10">
                                    <input type="date" name="date_start" value="{{$classroom_edit->date_start}}" class="form-control place" placeholder="Meet Link Input">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-calendar3 col-form-label col-md-2 LabForm"> Date End</label>
                                <div class="col-md-10">
                                    <input type="date" name="date_end" value="{{$classroom_edit->date_end}}" class="form-control place" placeholder="Meet Link Input">
                                </div>
                            </div>
                            <a href="{{ url('/classroom')}}" class="btn btn-danger btp">Cancel</a>
                            <button type="submit" name="proses" value="simpan" id="simpan" class="btn btn-primary btp">Edit</button>
                            <input type="hidden" name="id" value="{{$classroom_edit->id}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.classroom.message')
</div>
@endsection