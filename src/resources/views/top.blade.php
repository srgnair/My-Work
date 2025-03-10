<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="テキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <title>My Work</title>
</head>
<body>

<header>
    <h1 class="header__logo">
        <a href="#"><img src="{{ asset('images/logo.svg') }}" alt="My Work"></a>
    </h1>
    <nav>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Works</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">■</a></li>
            <!-- インスタのアイコン -->
        </ul>
    </nav>
</header>

<main>
    <div class="main-visual">
        <img src="{{ asset('images/mainvisual-pc.jpg') }}" alt="メインビジュアル">
    </div>

    <section class="about">
        <h2>About</h2>
        <p>Xxxxx Ashley</p>
        <dl>
            <dt class="about__visually-hidden">address:</dt>
            <dd>2th Floor xxxxx Building x-x-x Nishiazabu, Minato-ku, Tokyo 106-0031 Japan</dd>
            <dt>tel:</dt>
            <dd>000-0000-0000</dd>
            <dt>mail:</dt>
            <dd>xxx@xxxxxx.jp</dd>
        </dl>
        <p>プロフィールテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </section>

    <section class="works">
        <h2>Works</h2>
        <div class="work__images">
            <img src="{{ asset('images/works1.jpg') }}" alt="イメージ画像">
            <img src="{{ asset('images/works2.jpg') }}" alt="イメージ画像">
            <img src="{{ asset('images/works3.jpg') }}" alt="イメージ画像">
            <img src="{{ asset('images/works4.jpg') }}" alt="イメージ画像">
            <img src="{{ asset('images/works5.jpg') }}" alt="イメージ画像">
            <img src="{{ asset('images/works6.jpg') }}" alt="イメージ画像">
        </div>
    </section>

    <section class="news">
        <h2>News</h2>
        <dl>
            <dt>2020.XX.XX</dt>
            <dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.11』に掲載していただきました。</dd>
            <dt>2020.XX.XX</dt>
            <dd>ＸＸ月ＸＸ日から写真集「ＸＸＸＸＸＸＸ」の販売を開始します。</dd>
            <dt>2019.XX.XX</dt>
            <dd>【イベント開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
            <dt>2019.XX.XX</dt>
            <dd></dd>
            <dt>2019.XX.XX</dt>
            <dd>【個展開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
        </dl>
    </section>

    <section class="contact-form">
        <h2>Contact</h2>
        <form action="#">
            <div class="contact-form__group">
                <label for="name">NAME</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="contact-form__group">
                <label for="e-mail">E-mail</label>
                <input type="text" id="e-mail" name="e-mail" required>
            </div>
            <div class="contact-form__group">
                <label for="message">MESSAGE</label>
                <textarea name="message" id="message" required></textarea>
            </div>
            <button type="submit">送信</button>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2020 My Work</p>
</footer>

</body>
</html>