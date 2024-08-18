<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Real Estate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="height: 100vh">
    <div class="d-flex justify-content-center align-items-center" style="height: 80%; padding-top: 56px;">
        <div class="card w-75">
            <div class="card-body">
                <h2 class="card-title">Chỉnh sửa Bất Động Sản</h2>
                <form action="/cars/update/{{ $data->id }}" method="POST">
                    @csrf
                    @method('POST')
                    <a type="button" class="btn btn-primary" href="/cars/">Trang chủ</a>
                    <div class="mb-3">
                        <label for="car_model" class="form-label">Car Model</label>
                        <input type="text" class="form-control" id="car_model" name="car_model" value="{{ $data->car_model }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="manufacturer" class="form-label">Manufacturer</label>
                        <textarea class="form-control" id="manufacturer" name="manufacturer" required>{{ $data->manufacturer }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $data->price }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Year</label>
                        <input type="number" class="form-control" id="year" name="year" value="{{ $data->year }}" required>
                    </div>
                    <button type="submit" onclick="return confirm('Bạn có đồng ý sửa không?')" class="btn btn-primary">Sửa</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+H6fG9X1Y8dE0LHeq6OW/LeJ/pc35" crossorigin="anonymous"></script>
</body>

</html>
