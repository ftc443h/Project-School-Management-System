@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h5 class="text-uppercase mb-0 mt-0 page-title">Edit Presence Teacher</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="breadcrumb float-right p-0 mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item"><span>Edit Presence Teacher</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="bi bi-exclude"> <span class="spanCreate"> Welcome To Edit Teacher</span></i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('presence_tc.update', $presence_Tedit->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row ">
                                <label class="bi bi-calendar3 col-form-label col-md-2 LabForm"> Date presence</label>
                                <div class="col-md-10">
                                    <input type="datetime-local" name="date_teac" value="{{$presence_Tedit->date_teac}}" class="form-control place @error ('date_teac') is-invalid @else is-valid @enderror">
                                    @error('date_teac')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-person-fill-add col-form-label col-md-2 LabForm"> Teacher</label>
                                <div class="col-md-10">
                                    <select name="tbl_teacher_id" class="form-control @error ('tbl_teacher_id') is-invalid @else is-valid @enderror">
                                        <option class="optins">-- Please Select --</option>
                                        @foreach($teacher_Edt as $prencTC)
                                        @php $opti_teacher = ($prencTC->id == $presence_Tedit->tbl_teacher_id) ? 'selected' : ''; @endphp
                                        <option class="optins" value="{{ $prencTC->id }}" {{$opti_teacher}}>{{$prencTC->name_teacher}}</option>
                                        @endforeach
                                    </select>
                                    @error('tbl_teacher_id')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-pencil-square col-form-label col-md-2 LabForm"> Present</label>
                                <div class="col-md-10">
                                    <select name="status_teac" class="form-control @error ('status_teac') is-invalid @else is-valid @enderror" id="status_teac">
                                        <option class="optins" value="Present" {{ $presence_Tedit->status_teac == "Present" ? 'selected': ''}}>Present</option>
                                        <option class="optins" value="Not Present" {{ $presence_Tedit->status_teac == "Not Present" ? 'selected': ''}}>Not Present</option>
                                        <option class="optins" value="Presence Permissions" {{ $presence_Tedit->status_teac == "Presence Permissions" ? 'selected': ''}}>Presence Permissions</option>
                                    </select>
                                    @error('status_teac')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <a href="{{url('/presence_tc')}}" class="btn btn-danger btp">Cancel</a>
                            <button type="submit" name="proses" value="simpan" id="simpan" class="btn btn-primary btp">Edit</button>
                            <input type="hidden" name="id" value="{{$presence_Tedit->id}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.classroom.message')
</div>
@endsection