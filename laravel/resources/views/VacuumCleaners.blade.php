<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacuum Cleaners</title>

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
            border: 1.5px solid black;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-content h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-content p {
            margin-bottom: 10px;
            font-size: 16px;
            line-height: 1.5;
        }

        .card-content .price {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-content button {
            display: block;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .card-content button:hover {
            background-color: #0062cc;
        }
    </style>
</head>
<body>
    <a href="/vacuum-cleaners/create1">Add New Vacuum Cleaner</a>
    <h1>Our Available Vacuum Cleaners:</h1>
    <div>
        @foreach($vacuumCleaners as $vacuumCleaner)
        <div class="card">
            <div>
                <img src="{{asset('storage/images/'. $vacuumCleaner->namePicture)}}" alt="{{$vacuumCleaner->type}}">
            </div>
            <div class="card-content">
                <h2>{{$vacuumCleaner->type}}</h2>
                <p>Size: {{$vacuumCleaner->size}}</p>
                <p>Color: {{$vacuumCleaner->color}}</p>
                <p class="price">Price: {{$vacuumCleaner->price}}</p>
                <p>{{$vacuumCleaner->brand}}</p>
                <button>Compare</button>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>