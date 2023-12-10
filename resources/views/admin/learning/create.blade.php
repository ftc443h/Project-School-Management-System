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
                    <h5 class="text-uppercase mb-0 mt-0 page-title">Create Teacher</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="breadcrumb float-right p-0 mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item"><span>Create Learning</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="bi bi-exclude"> <span class="spanCreate"> Welcome To Learning</span></i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('learning.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="bi bi-person-fill-add col-form-label col-md-2 LabForm"> Learning Class</label>
                                <div class="col-md-10">
                                    <select name="learning_class" class="form-control" id="learning_class">
                                        <option class="">-- Please Select --</option>
                                        <option class="optins" value="Java">Java</option>
                                        <option class="optins" value="Python">Python</option>
                                        <option class="optins" value="C++">C++</option>
                                        <option class="optins" value="HTML & CSS">HTML & CSS</option>
                                        <option class="optins" value="JavaScript">JavaScript</option>
                                        <option class="optins" value="PHP">PHP</option>
                                        <option class="optins" value="Laravel">Laravel</option>
                                        <option class="optins" value="Network Engineer">Network Engineer</option>
                                        <option class="optins" value="Cyber Security">Cyber Security</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-house col-form-label col-md-2 LabForm"> Category Class</label>
                                <div class="col-md-10">
                                    <textarea class="form-control place" name="category_class" id="" cols="30" placeholder="Input Category Learning" rows="10"></textarea>
                                </div>
                            </div>
                            <a href="{{url('/learning')}}" class="btn btn-danger btp">Cancel</a>
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