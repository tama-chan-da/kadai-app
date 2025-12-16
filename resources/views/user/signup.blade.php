<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | 新規登録</title>
</head>
<!-- ログイン画面 -->

<body class="">
    <x-header></x-header>
    <div class="page singup-page">
        <form class="form" action="/signup" method="post">
            @csrf
            <div class="form-item email">
                <label for="email">Eメール</label>
                <input type="text" id="email" name="email" />
            </div>

            <div class="form-item password">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" />
            </div>

            <div class="form-item name">
                <label for="name">名前</label>
                <input type="name" id="name" name="name" />
            </div>

            <div class="singup-button">
                <button class="button-white" type="submit">登録完了</button>
            </div>
        </form>
    </div>
</body>

<script src="{{ asset('/js/app.js') }}"></script>
<style scoped>
    .singup-page {
        display: flex;
        justify-content: center;
    }

    .singup-page .title {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }

    .singup-page .form {
        width: 60vw;
    }

    .singup-page input {
        height: 30px;
        border-radius: 10px;
        background-color: lightgray;
    }

    .singup-page .form-item {
        display: flex;
        flex-direction: column;
        margin-top: 10px;
    }

    .singup-page .singup-button {
        text-align: center;
        margin-top: 10px;
    }

    .singup-page button {
        width: 50%;
        height: 30px;
        font-size: 18px;
    }

    .singup-page .error-message {
        margin-top: 5px;
        font-size: 10px;
    }
</style>

</html>