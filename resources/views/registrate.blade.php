<a href="{{ route('login') }}">Зарегистрироваться</a>
<h3>Вход</h3>
<form action="{{ route('registrate')" method="POST">
    @csrf
        <input type="text" name="name" placeholder="Имя" required><br>
        <input type="email" name="email" placeholder="Почта" required><br>
        <input type="password" name="password" placeholder="Пароль" required><br>
        <input type="password" name="password_confirmation" placeholder="Подтвердите пароль" required><br>
        <button type="subbmit">Зарегистрироваться</button>
</form>