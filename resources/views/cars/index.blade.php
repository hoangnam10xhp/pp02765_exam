<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="height: 100vh">
    <div class="d-flex justify-content-center align-items-center" style="height: 80%; padding-top: 56px;">
        <div class="card w-75">
            <div class="card-body">
                <h2 class="card-title">Danh sách Cars</h2>
                <a href="/cars/create" class="btn btn-primary mb-3">Create Cars New</a>
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Car Model</th>
                            <th>Manufacturer</th>
                            <th>Price</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cars as $cars)
                            <tr>
                                <td>{{ $cars->id }}</td>
                                <td>{{ $cars->car_model }}</td>
                                <td>{{ $cars->manufacturer }}</td>
                                <td>{{ $cars->price }}</td>
                                <td>{{ $cars->year }}</td>
                                <td>
                                    <a href="/cars/update/{{ $cars->id }}" class="btn btn-warning btn-sm">Sửa</a>
                                    <a onclick="return confirm('Bạn có đồng ý xóa không?')" href="/cars/delete/{{ $cars->id }}" class="btn btn-danger btn-sm">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+H6fG9X1Y8dE0LHeq6OW/LeJ/pc35" crossorigin="anonymous"></script>
</body>

</html>
