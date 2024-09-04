<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Вход</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Вход</h2>
        <!-- Форма входа -->
    <!--   <form action="{{ route('login') }}" method="post"> -->
<form action="{{ route('login') }}" method="post" class="mt-3">
    @csrf

    <!-- Поле для почты -->
    <div class="form-group">
        <label for="email">Почта:</label>
        <input type="email" class="form-control" id="email" name="email" required>
        @if($errors->has('email'))
            <div class="text-danger">{{ $errors->first('email') }}</div>
        @endif
    </div>

    <!-- Поле для пароля -->
    <div class="form-group">
        <label for="password">Пароль:</label>
        <input type="password" class="form-control" id="password" name="password" required>
        @if($errors->has('password'))
            <div class="text-danger">{{ $errors->first('password') }}</div>
        @endif
    </div>

    <!-- Кнопка отправки -->
    <button type="submit" class="btn btn-primary btn-block">Войти</button>
</form>


    </div>
</body>
</html>
