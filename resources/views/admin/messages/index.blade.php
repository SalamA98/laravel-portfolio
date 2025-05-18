@extends('layout.admin-dashboard')

@section('title','messages')

@section('content')
    <section id="home" class="header">
        <div class="container">
            <table class="table table-bordered ">
                <h4 class="header-title"> Recieved Messages </h4>
                <thead class="table-dark" >
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>recieved at</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ( $messages as $message  )
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td> {{$message->name }} </td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->created_at }}</td>
                        <td>
                            <a href="{{ route('messages.show', $message->id) }}" class="btn btn-sm btn-success">view</a>
                            <form action="{{ route('messages.destroy', $message->id) }}" method="POST" style="display:inline;"  onsubmit="return confirm('Are you sure you want to delete this certificate?');"> 
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
{{--/admin/messages/{{$message->id}}!-->--}}