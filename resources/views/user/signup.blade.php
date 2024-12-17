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
        <form class="form" action="/users" method="post">
            @csrf
            <div class="form-item email">
                <label for="email">Email</label>
                <input type="text" id="email" name="new_email" />
            </div>
            <div class="form-item password">
                <label for="password">Password</label>
                <input type="password" id="password" name="new_password" />
            </div>
            <div class="login-button">
                <button class="button-white" type="submit">新規登録</button>
            </div>
        </form>
    </div>
</body>
<script src="{{ asset('/js/app.js') }}"></script>
<style scoped></style>

</html>