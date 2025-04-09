<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini halaman dashboard user</h1>
    <a href="{{ route('logout') }}"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
    class="hover:text-gray-300 flex items-center gap-2">
    Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>
</body>
</html>