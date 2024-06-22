@extends('layouts.app')

@section('content')
    <h1>{{ $participant->name }}</h1>
    <p>{{ $participant->company }}</p>
    <p>{{ $participant->position }}</p>
    <h3>Tasks</h3>
    <ul>
        @foreach ($participant->tasks as $task)
            <li>{{ $task->name }} - {{ $task->description }}</li>
        @endforeach
    </ul>
    <!-- Aquí puedes agregar más detalles del currículum -->
@endsection
