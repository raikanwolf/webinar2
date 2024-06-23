@extends('layouts.app')

@section('title', 'Topics')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Topics</div>
                <div class="card-body">
                    @foreach($topics as $topic)
                        <div class="mb-4">
                            <h4>{{ $topic->name }}</h4>
                            <p>{{ $topic->description }}</p>
                            <small>By: {{ $topic->user->name }}</small>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
