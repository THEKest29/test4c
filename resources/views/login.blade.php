<a href="{{ route('registrate') }}">Зарегистрироваться</a>
<h3>Вход</h3>
<form action="{{ route('login')" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Почта" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <button type="subbmit">Войти</button>
</form>