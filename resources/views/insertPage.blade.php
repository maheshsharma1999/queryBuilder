@include('header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<style>
    /* public/css/form.css */

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .form {
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    textarea.form-control {
        height: 100px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .btn-primary {
        background-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    body {
        background: #3585;
    }
</style>

<body>

    <div class="container">
        <h2>Form Page</h2>
        <form class="container" method="POST" action="{{ url('/insertData') }}" class="form">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Age</label>
                <input type="text" name="age" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <input type="text" name="gender" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control" required>
            </div>
            {{--  <div class="form-group">
                <label for="">Upload Image</label>
                <input type="file" name="password" id="" class="form-control" required>
            </div>  --}}
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" id="" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
