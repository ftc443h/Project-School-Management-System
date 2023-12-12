@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h5 class="text-uppercase mb-0 mt-0 page-title">Edit Student</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="breadcrumb float-right p-0 mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item"><span>Edit Student</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="bi bi-exclude"> <span class="spanCreate"> Welcome To Edit Student</span></i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('student.update', $student_edit->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row ">
                                <label for="photo_student" class="bi bi-file-image col-form-label col-md-2 LabForm"> Photo</label>
                                <div class="col-md-10">
                                    <input type="file" value="{{$student_edit->photo_student}}" name="photo_student" id="photo_student" class="form-control place @error ('photo_student') is-invalid @else is-valid @enderror">
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
                                    <input type="text" name="code_student" value="{{$student_edit->code_student}}" class="form-control place @error ('code_student') is-invalid @else is-valid @enderror" placeholder="Input student">
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
                                    <input type="text" name="name_student" value="{{$student_edit->name_student}}" class="form-control place @error ('name_student') is-invalid @else is-valid @enderror" placeholder="Input Name Student">
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
                                    <input type="date" value="{{$student_edit->birthday_student}}" name="birthday_student" class="form-control place @error ('birthday_student') is-invalid @else is-valid @enderror">
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
                                            <input type="radio" class="@error('gender_student') is-invalid @enderror" value="Male" {{ $student_edit->gender_student == "Male"?'checked': ''}} id="gender_student" name="gender_student"> Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="genderInPT">
                                            <input type="radio" class="@error('gender_student') is-invalid @enderror" value="Female" {{ $student_edit->gender_student == "Female"?'checked': ''}} id="gender_student" name="gender_student"> Female
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
                                    <input type="text" value="{{$student_edit->email_student}}" name="email_student" class="form-control place @error ('email_student') is-invalid @else is-valid @enderror" placeholder="Input E-Mail Invalid">
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
                                    <input type="text" value="{{$student_edit->phone_student}}" name="phone_student" class="form-control place @error ('phone_student') is-invalid @else is-valid @enderror" placeholder="Input No Telephone">
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
                                    <textarea class="form-control place @error ('address_student') is-invalid @else is-valid @enderror" name="address_student" id="" cols="30" placeholder="Input Address Invalid" rows="10">{{$student_edit->address_student}}</textarea>
                                    @error('address_student')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <a href="{{url('/student')}}" class="btn btn-danger btp">Cancel</a>
                            <button type="submit" name="proses" value="simpan" id="simpan" class="btn btn-primary btp">Edit</button>
                            <input type="hidden" name="id" value="{{$student_edit->id}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.classroom.message')
</div>
@endsection