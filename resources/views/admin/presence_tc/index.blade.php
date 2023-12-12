@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    @if(Auth::user()->role_users != 'student')
    @include('admin.dashboard.presence_teacher_admin')
    @else
    @include('admin.access_denied.access_denied_presenceT')
    @endif
</div>
@endsection