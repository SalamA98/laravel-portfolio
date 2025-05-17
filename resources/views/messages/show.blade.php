@extends('layout.admin-dashboard')
@section('title','Messages Details')

@section('content')

    <div class="container" style="margin-top: 75px"> 
        <h3 class="section-title">{{$message->name}}'s Message</h3>
        <div class="card  w-50" style="margin-top: 25px;">
            <div class="card-header">
                <strong> {{ $message->email }}</strong>
            </div>
            <div class="card-body">
            <p><strong>from:</strong> {{ $message->name }}</p>
            <p><strong>Content:</strong> {{ $message->content }}</p>
            <div class="text-center">
            <a href="{{ route('message.index') }}" class="btn btn-primary  mt-4 ml-4" style="float-right">Back to list</a></div>
            </div>
        </div>
    </div>
@endsection