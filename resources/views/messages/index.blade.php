@extends('layout.adminapp')

@section('title','messages')

@section('content')
    <section id="home" class="header">
        <div class="container">
            <table class="table">
                <h4 class="header-title"> Recieved Messages </h4>
                <thead>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>recieved at</th>
                </thead>
                <tbody>
                    @foreach ( $messages as $message  )
                        <tr>
                        <td>{{ $message->id }}</td>
                        <td><a href="{{route('messages.show',$message->id)}}"> {{$message->name }} </a></td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
<!--/admin/messages/{{$message->id}}!-->