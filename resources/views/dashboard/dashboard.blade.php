<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .welcome {
            font-size: 2em;
            background: -webkit-linear-gradient(45deg, #ff6b6b, #f06595);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .form-group {
            margin-top: 20px;
        }
        .btn-custom {
            background-color: #9b59b6;
            color: white;
        }
        .btn-custom:hover {
            background-color: #8e44ad;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome">Welcome to the Website</div>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter something">
            </div>
            <button type="submit" class="btn btn-custom mt-3">Add</button>
        </form>
    </div>
</body>
</html>
