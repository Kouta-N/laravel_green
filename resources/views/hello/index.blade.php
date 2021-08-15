<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Hello/Index</h1>
    <p>{!!$msg!!}</p>
    <ul>
        @foreach ($data as $item)
            <li>{!! $item !!}</li>
        @endforeach
    </ul>

    {{-- クエリパラメータ
    <h1>Hello/Index</h1>
    <p>{!!$msg!!}</p>
    <form action="/hello" method="GET">
        @csrf
        <div>NAME:<input type="text" name="name"></div>
        <div>MAIL:<input type="text" name="mail"></div>
        <div>TEL:<input type="text" name="tel"></div>
        <input type="submit">
    </form>
    <hr>
    <ol>
        @for ($i = 0; $i < count($keys); $i++)
            <li>{{ $keys[$i] }}:{{ $values[$i] }}</li>
        @endfor
    </ol> --}}

</body>
</html>
