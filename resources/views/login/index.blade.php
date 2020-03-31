@php
    $manifest = json_decode(file_get_contents(public_path('vendor/rs-admin/manifest.json')), true)
@endphp

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Административная панель | Авторизация</title>
    <link rel="stylesheet" href="{{ $manifest["app.css"] }}">
</head>
<body>
    <div id="root">
        <auth />
    </div>
    <script src="{{ $manifest['vendors.js'] }}"></script>
    <script src="{{ $manifest['app.js'] }}"></script>
</body>
</html>
