<header>
    <h1>I post:</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@guest
    

    <h1>Login:</h1>
    <form action="{{ route('login')}}" method="POST">

        @method('POST')
        @csrf

        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Login">

    </form>

    <h1 class="register">Register:</h1>
    <form action="{{ route('register')}}" method="POST">

        @method('POST')
        @csrf

        <input type="text" name="name" placeholder="nome utente">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="password confirmation">
        <input type="submit" value="Register">

    </form>

@else   <h1>Hello {{Auth::user() -> name}}</h1>
        <a class="btn btn-secondary" href="{{route('logout')}}">LOGOUT</a>

@endguest
</header>