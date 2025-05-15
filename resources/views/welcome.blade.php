@extends('layout.app')

@section('content')
    @include('sections.header')
    @include('sections.about')

    @include('sections.portfolio')
    @include('sections.hireMe')
    @include('sections.volunteering')
    {{--@include('sections.testomonials')--}}
    {{--@include('sections.blog')--}}
    @include('sections.services')
    @include('sections.contact')
@endsection