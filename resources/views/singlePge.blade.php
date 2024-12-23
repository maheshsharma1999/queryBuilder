<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
    body {
        background: hsl(331, 24%, 42%);
        text-align: center;
        font-size: 3vw;
        border: 8px solid red;
    }
</style>

<body>


    @foreach ($data2 as $data)
        <p>Name :- {{ $data->name }}</p>
        <p>Age :- {{ $data->age }}</p>
        <p>Gender :- {{ $data->gender }}</p>
        <p>Email :- {{ $data->email }}</p>
        <p>Passwors :- {{ $data->password }}</p>
    @endforeach
    <a href="{{ url('viewData') }}"><button type="submit" class="btn btn-primary">Back</button></a>

</body>

</html>
