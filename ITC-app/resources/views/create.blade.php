<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method='post' action="{{route('news.store')}}">
        @csrf
        <input type='text' name='title' placeholder='Название новости'>
        <br><br>
        <input name='content' placeholder="Текст новости" >
        <br><br>
        Введите дату: <input type='date' name='date' >
        <br><br>
        <input type='submit'>
    </form>
</body>
</html>