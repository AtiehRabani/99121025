<!DOCTYPE html>
<html>
<head>
    <title>Price Comparison</title>
    <style>
        .card {
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Price Comparison</h1>
    <div class="card">
        <div>
            <img src="{{ asset('storage/images/'.$cheapest->namePicture) }}" style="width: 25%; height: auto; object-fit: cover;">
        </div>
        <div style="padding:10px">
            <div>Type: {{ $cheapest->type }}</div>
            <div>Color: {{ $cheapest->color }}</div>
            <div>Price: {{ $cheapest->price }}</div>
            <div>brand: {{ $cheapest->brand }}</div>
        </div>
    </div>
</body>
</html>