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
                        <span>Lesson</span>
                        <h3>{{ $learningCount }}</h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="page-title mb-0">Create Teacher</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>Create Teacher</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="bi bi-exclude"> <span class="spanCreate"> Welcome To Teacher</span></i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('teacher.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row ">
                                <label class="bi bi-file-image col-form-label col-md-2 LabForm"> Photo</label>
                                <div class="col-md-10">
                                    <input type="file" value="{{old('photo_teacher')}}" name="photo_teacher" class="form-control place @error ('photo_teacher') is-invalid @else is-valid @enderror">
                                    @error('photo_teacher')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-building-fill-add col-form-label col-md-2 LabForm"> ID</label>
                                <div class="col-md-10">
                                    <input type="text" name="code_teacher" value="{{old('code_teacher')}}" class="form-control place @error ('code_teacher') is-invalid @else is-valid @enderror" placeholder="Input ID teacher">
                                    @error('code_teacher')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-person-plus-fill col-form-label col-md-2 LabForm"> Teacher</label>
                                <div class="col-md-10">
                                    <input type="text" name="name_teacher" value="{{old('name_teacher')}}" class="form-control place @error ('name_teacher') is-invalid @else is-valid @enderror" placeholder="Input Name Teacher">
                                    @error('name_teacher')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-calendar3 col-form-label col-md-2 LabForm"> Birth</label>
                                <div class="col-md-10">
                                    <input type="date" name="birthday_teacher" value="{{old('birthday_teacher')}}" class="form-control place @error ('birthday_teacher') is-invalid @else is-valid @enderror">
                                    @error('birthday_teacher')
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
                                            <input type="radio" class="@error('gender_teacher') is-invalid @enderror" value="Male" id="gender_teacher" name="gender_teacher"> Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="genderInPT">
                                            <input type="radio" class="@error('gender_teacher') is-invalid @enderror" value="Female" id="gender_teacher" name="gender_teacher"> Female
                                            @error('gender_teacher')
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
                                    <input type="text" name="email_teacher" value="{{old('email_teacher')}}" class="form-control place @error ('email_teacher') is-invalid @else is-valid @enderror" placeholder="Input E-Mail Invalid">
                                    @error('email_teacher')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-phone-flip col-form-label col-md-2 LabForm"> Telephone</label>
                                <div class="col-md-10">
                                    <input type="text" name="phone_teacher" value="{{old('phone_teacher')}}" class="form-control place @error ('phone_teacher') is-invalid @else is-valid @enderror" placeholder="Input No Telephone">
                                    @error('phone_teacher')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-house col-form-label col-md-2 LabForm"> Address</label>
                                <div class="col-md-10">
                                    <textarea class="form-control place @error ('address_teacher') is-invalid @else is-valid @enderror" name="address_teacher" id="" cols="30" placeholder="Input Address Invalid" rows="10">{{old('address_teacher')}}</textarea>
                                </div>
                                @error('address_teacher')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <a href="{{url('/teacher')}}" class="btn btn-danger btp">Cancel</a>
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