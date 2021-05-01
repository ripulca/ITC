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
    <form method='put' action="{{ route('news.update', $news) }}"">
        @csrf
        <input type='text' name='title' value='{{$news->title}}'>
        <br><br>
        <input name='content' value='{{$news->content}}'>
        <br><br>
        Введите дату: <input type='date'>
        <br><br>
        <input type='submit'>
    </form>
</body>
</html>