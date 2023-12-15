@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    @if(Auth::user()->role_users == 'student')
    @include('admin.dashboard.view_valuescore_admin')
    @else
    @include('admin.access_denied.access_denied_lessonscore')
    @endif
</div>
@endsection