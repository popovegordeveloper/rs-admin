<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Административная панель | Авторизация</title>
</head>
<body>
<form action="{{ route('admin.login') }}" method="POST">
    @csrf
    <input type="email" name="email">
    <input type="password" name="password">
    <button>Войти</button>
</form>
</body>
</html>
