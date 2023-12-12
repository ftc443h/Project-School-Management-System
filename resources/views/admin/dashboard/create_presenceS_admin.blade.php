@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h5 class="text-uppercase mb-0 mt-0 page-title">Create Presence Student</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="breadcrumb float-right p-0 mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item"><span>Create Presence Student</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="bi bi-exclude"> <span class="spanCreate"> Welcome To Presence Student</span></i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('presence_st.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row ">
                                <label class="bi bi-calendar3 col-form-label col-md-2 LabForm">
                                    Date Student</label>
                                <div class="col-md-10">
                                    <input type="datetime-local" value="{{ old('date_stud') }}" name="date_stud" class="form-control place @error ('date_stud') is-invalid @else is-valid @enderror" placeholder="Student Input">
                                    @error('date_stud')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-person-fill-add col-form-label col-md-2 LabForm"> Student</label>
                                <div class="col-md-10">
                                    <select name="tbl_student_id" class="form-control @error ('tbl_student_id') is-invalid @else is-valid @enderror" id="tbl_student_id">
                                        <option class="">-- Please Select --</option>
                                        @foreach($student_Crea as $students)
                                        <option class="optins" value="{{$students->id}}">{{$students->name_student}}</option>
                                        @endforeach
                                    </select>
                                    @error('tbl_student_id')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-pencil-square col-form-label col-md-2 LabForm"> Present</label>
                                <div class="col-md-10">
                                    <select name="status_stud" class="form-control @error ('status_stud') is-invalid @else is-valid @enderror" id="status_stud">
                                        <option class="{{ old('status_stud') }}">-- Please Select --</option>
                                        <option class="optins" value="Present">Present</option>
                                        <option class="optins" value="Not Present">Not Present</option>
                                        <option class="optins" value="Presence Permissions">Presence Permissions</option>
                                    </select>
                                    @error('status_stud')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <a href="{{url('/presence_st')}}" class="btn btn-danger btp">Cancel</a>
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