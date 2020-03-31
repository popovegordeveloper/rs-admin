<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Административная панель | Авторизация</title>
    <link rel="stylesheet" href="{{ mix('vendor.css', 'vendor/rs-admin' )  }}">
    <link rel="stylesheet" href="{{ mix('app.css', 'vendor/rs-admin' )  }}">
</head>
<body>
    <div id="root">
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <input type="email" name="email">
            <input type="password" name="password">
            <button>Войти</button>
        </form>
    </div>
    <script src="{{ mix('vendor.js', 'vendor/rs-admin' ) }}"></script>
    <script src="{{ mix('app.js', 'vendor/rs-admin' ) }}"></script>
</body>
</html>
