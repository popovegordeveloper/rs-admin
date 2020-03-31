<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Административная панель | Авторизация</title>
    <link rel="stylesheet" href="{{ mix('vendor.css', public_path('vendor/rs-admin/manifest.json') )  }}">
    <link rel="stylesheet" href="{{ mix('app.css', public_path('vendor/rs-admin/manifest.json') )  }}">
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
    <script src="{{ mix('vendor.js', public_path('vendor/rs-admin/manifest.json') ) }}"></script>
    <script src="{{ mix('app.js', public_path('vendor/rs-admin/manifest.json') ) }}"></script>
</body>
</html>
