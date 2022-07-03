@extends('admin.app.index')

@section('admin_content')
    @switch($route)
        {{-- // Template --}}
        @case('template.dashboard')
            @include('admin.app.template.dashboard')
        @break
        @case('template.404')
            @include('admin.app.template.404')
        @break
        @case('template.buttons')
            @include('admin.app.template.buttons')
        @break
        @case('template.cards')
            @include('admin.app.template.cards')
        @break
        @case('template.charts')
            @include('admin.app.template.charts')
        @break
        @case('template.forgot-password')
            @include('admin.app.template.forgot-password')
        @break
        @case('template.login')
            @include('admin.app.template.login')
        @break
        @case('template.register')
            @include('admin.app.template.register')
        @break
        @case('template.tables')
            @include('admin.app.template.tables')
        @break
        @case('template.utilities-animation')
            @include('admin.app.template.utilities-animation')
        @break
        @case('template.utilities-border')
            @include('admin.app.template.utilities-border')
        @break
        @case('template.utilities-color')
            @include('admin.app.template.utilities-color')
        @break
        @case('template.utilities-other')
            @include('admin.app.template.utilities-other')
        @break

        @default
            @include('admin.app.template.dashboard')
    @endswitch
@endsection