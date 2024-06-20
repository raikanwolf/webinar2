<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" required autofocus>
    </div>
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required>
    </div>
    <div>
        <label for="company">Company</label>
        <input id="company" type="text" name="company" required>
    </div>
    <div>
        <label for="position">Position</label>
        <input id="position" type="text" name="position" required>
    </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>
