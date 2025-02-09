<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    <title>Thanks</title>
</head>

<body>
    <div class="thanks__content">
        <h2 class="thanks__content-item">お問い合わせありがとうございました</h2>
    </div>
    <form class="thanks-form" action="/" method="get">
        @csrf
        <div class="thanks-form__button">
            <button class="thanks-form__button-home">HOME</button>
        </div>
    </form>
</body>

</html>
