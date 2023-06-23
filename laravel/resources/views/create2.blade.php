<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Fridge</title>

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

        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
        }

        .form-container label {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        .form-container input[type=text],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .form-container input[type=file] {
            margin-bottom: 20px;
        }

        .form-container textarea {
            height: 150px;
        }

        .form-container input[type=submit] {
            display: block;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container input[type=submit]:hover {
            background-color: #0062cc;
        }
    </style>
</head>
<body>
    <h1>Add New Fridge</h1>
    <div class="form-container">
        <form action="/fridges" method="post" enctype="multipart/form-data">
            @csrf
            <label for="picture">Choose Your Picture:</label>
            <input type="file" name="picture" id="picture">

            <label for="type">Type:</label>
            <input type="text" name="type" id="type">

            <label for="size">Size:</label>
            <input type="text" name="size" id="size">

            <label for="color">Color:</label>
            <input type="text" name="color" id="color">

            <label for="price">Price:</label>
            <input type="text" name="price" id="price">

            <label for="brand">brand:</label>
            <textarea name="brand" id="brand"></textarea>

            <input type="submit" name="submit" value="Save">
        </form>
    </div>
</body>
</html>