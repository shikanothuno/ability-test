<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="wiewport" content="width=device-width,initial-scale=1.0">
        <title>FashionablyLate</title>
        <link rel="stylesheet" href="{{asset("css/sanitize.css")}}">
        <link rel="stylesheet" href="{{asset("css/thanks.css")}}">
    </head>
    <body>
        <main>
            <div class="thanks_ja">お問い合わせありがとうございました</div>
            <div class="thanks_en">Thank you</div>
            <button class="home__button" type="button" onclick="location.href={{route('index')}}">HOME</button>
        </main>
    </body>
</html>
