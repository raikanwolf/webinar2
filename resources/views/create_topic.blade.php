@extends('layouts.app')

@section('title', 'Create Topic')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Topic</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('topics.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Topic Name</label>
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" class="form-control" name="description" rows="3" required></textarea>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
