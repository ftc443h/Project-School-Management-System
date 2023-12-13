@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    @if(Auth::user()->role_users == 'admin')
    @include('admin.dashboard.create_learning_admin')
    @else
    @include('admin.access_denied.access_denied_classroom')
    @endif
</div>
@endsection