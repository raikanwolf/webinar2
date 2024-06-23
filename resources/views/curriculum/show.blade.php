@extends('layouts.app')

@section('title', 'Curriculum')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ $participant->name }}</div>
            <div class="card-body">
                <p><strong>Company:</strong> {{ $participant->company }}</p>
                <p><strong>Position:</strong> {{ $participant->position }}</p>
                <!-- Aquí puedes agregar más detalles del currículum -->
            </div>
        </div>
    </div>
</div>
@endsection
