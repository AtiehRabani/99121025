<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Fridges</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .card-info {
            padding: 20px;
        }

        .card-info h2 {
            font-size: 22px;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .card-info p {
            font-size: 16px;
            margin: 0;
        }

        .card-info .price {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 10px;
        }

        .compare-btn {
            margin-top: 30px;
            text-align: center;
        }

        .compare-btn a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .compare-btn a:hover {
            background-color: #0062cc;
        }
    </style>
</head>
<body>
    <a href="/fridges/create3">Add Fridge</a>
    <h1>Our Available Fridges:</h1>
    <div>
        @foreach($fridges as $fridge)
        <div class="card">
            <div>
                <div>
                    <img src="{{asset('storage/images/'. $fridge->image)}}" style="width: 25%; height: auto; object-fit: cover;">
                </div>
                    <div class="card-info">
                        <h2>Type: {{$fridge->type}}</h2>
                        <p>{{$fridge->size}}</p>
                        <p>{{$fridge->color}}</p>
                        <p class="price">{{$fridge->price}}</p>
                        <p>{{$fridge->brand}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div><br><br>
    <div class="compare-btn">
        <a href="/fridges/compare">Compare</a>
    </div>
</body>
</html>