@include('header')
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
        background: hsl(218, 30%, 40%);
    }

    .paginate {
        display: flex;
        justify-content: center;
        font-size: 20px;
    }
</style>


<body>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
                <th>Single</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data2 as $data)
                <tr>


                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->age }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->email }}</td>
                    {{--  <td>{{ $data->password }}</td>  --}}
                    <td><input type= "password" readonly value="{{ $data->password }}"></td>
                    <td>
                        <a href="{{ route('updateData', $data->id) }}"><button type="button"
                                class="btn btn-success">Update</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('deleteData', $data->id) }}"><button type="button"
                                class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                    <th>
                        <a href="{{ route('singlePge', $data->id) }}"><button type="button"
                                class="btn btn-primary">Single</button> </a>
                    </th>

                </tr>
            @endforeach


        </tbody>
    </table>
    <div class="paginate">
        {{ $data2->links() }}
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
