@extends('layouts.app')

@section('title', 'Topics')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Webinar Topics</h1>
        @foreach ($participants as $participant)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">{{ $participant->name }} - {{ $participant->position }}</h2>
                    <p class="card-text">Company: {{ $participant->company }}</p>
                    <a href="{{ route('curriculum', $participant->id) }}" class="btn btn-info">Curriculum</a>
                    <h3 class="mt-3">Tasks</h3>
                    <ul class="list-group">
                        @foreach ($participant->tasks as $task)
                            <li class="list-group-item">{{ $task->name }} - {{ $task->description }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
