<ul>
    @if(Auth::check())
    <li>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="subbmit">Выйти</button>
</form>
</li>
@else
<li><a href="{{ route('login') }}">Вход</a></li>
<li><a href="{{ route('registrate') }}">Регистрация</a></li>
@endauth
<ul>
    @if(Auth::check())
    <li>
        <form action="{{ route('learn.share') }}" method="POST">
            @csrf
            <input type="text" name="name" id="name" placeholder="Название">
            <input type="text" name="text" id="text" placeholder="Текст">
            <button type="subbmit">Отправить</button>
</form>
    @else
    <p>Для того, чтобы оставить свой рассказ, нужно авторизоваться или зарегистрироваться</p>
    @endauth
<ul>
    @foreach($learns as $learn)
    <li>
        <p>{{ $learn->name }}</p>
        <p>{{ $learn->text }}</p>
        <p>{{ $learn->created_at }}</p>
</li>
    @endforeach
</ul>
    {{ $learns->links()}}