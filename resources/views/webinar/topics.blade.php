<h1>Webinar Topics</h1>
@foreach ($participants as $participant)
    <div>
        <h2>{{ $participant->name }} - {{ $participant->position }}</h2>
        <p>Company: {{ $participant->company }}</p>
        <a href="{{ route('curriculum', $participant->id) }}">Curriculum</a>
        <h3>Tasks</h3>
        <ul>
            @foreach ($participant->tasks as $task)
                <li>{{ $task->name }} - {{ $task->description }}</li>
            @endforeach
        </ul>
    </div>
@endforeach
