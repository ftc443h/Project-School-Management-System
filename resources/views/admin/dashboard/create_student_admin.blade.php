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
                        <span>Learning</span>
                        <h3>{{ $learningCount }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="page-title mb-0">Create Student</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>Create Student</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="bi bi-exclude"> <span class="spanCreate"> Welcome To Student</span></i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row ">
                                <label class="bi bi-file-image col-form-label col-md-2 LabForm"> Photo</label>
                                <div class="col-md-10">
                                    <input type="file" value="{{old('photo_student')}}" name="photo_student" class="form-control place @error ('photo_student') is-invalid @else is-valid @enderror">
                                    @error('photo_student')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-building-fill-add col-form-label col-md-2 LabForm"> ID</label>
                                <div class="col-md-10">
                                    <input type="text" value="{{old('code_student')}}" name="code_student" class="form-control place @error ('code_student') is-invalid @else is-valid @enderror" placeholder="Input ID Student">
                                    @error('code_student')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-person-plus-fill col-form-label col-md-2 LabForm"> Student</label>
                                <div class="col-md-10">
                                    <input type="text" value="{{old('name_student')}}" name="name_student" class="form-control place @error ('name_student') is-invalid @else is-valid @enderror" placeholder="Input Name Student">
                                    @error('name_student')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-calendar3 col-form-label col-md-2 LabForm"> Birth</label>
                                <div class="col-md-10">
                                    <input type="date" value="{{old('birthday_student')}}" name="birthday_student" class="form-control place @error ('birthday_student') is-invalid @else is-valid @enderror">
                                    @error('birthday_student')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-gender-ambiguous col-form-label col-md-2 LabForm"> Gender</label>
                                <div class="col-md-10">
                                    <div class="radio">
                                        <label class="genderInPT">
                                            <input type="radio" class="@error('gender_student') is-invalid @enderror" value="Male" id="gender_student" name="gender_student"> Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="genderInPT">
                                            <input type="radio" class="@error('gender_student') is-invalid @enderror" value="Female" id="gender_student" name="gender_student"> Female
                                            @error('gender_student')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-envelope-plus col-form-label col-md-2 LabForm"> E-Mail</label>
                                <div class="col-md-10">
                                    <input type="text" value="{{old('email_student')}}" name="email_student" class="form-control place @error ('email_student') is-invalid @else is-valid @enderror" placeholder="Input E-Mail Invalid">
                                    @error('email_student')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-phone-flip col-form-label col-md-2 LabForm"> Telephone</label>
                                <div class="col-md-10">
                                    <input type="text" value="{{old('phone_student')}}" name="phone_student" class="form-control place @error ('phone_student') is-invalid @else is-valid @enderror" placeholder="Input No Telephone">
                                    @error('phone_student')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-house col-form-label col-md-2 LabForm"> Address</label>
                                <div class="col-md-10">
                                    <textarea class="form-control place @error ('address_student') is-invalid @else is-valid @enderror" name="address_student" cols="30" placeholder="Input Address Invalid" rows="10">{{old('address_student')}}</textarea>
                                </div>
                                @error('address_student')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <a href="{{url('/student')}}" class="btn btn-danger btp">Cancel</a>
                            <button type="submit" name="proses" value="simpan" id="simpan" class="btn btn-primary btp">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.classroom.message')
</div>
@endsection