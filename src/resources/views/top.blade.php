<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="テキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <script src="https://kit.fontawesome.com/ada21263c2.js" crossorigin="anonymous"></script>
    <title>My Work</title>
</head>
<body>

<header>
    <h1 class="header__logo">
        <a href="#"><img src="{{ asset('images/logo.svg') }}" alt="My Work"></a>
    </h1>
    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#works">Works</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="main-visual">
    <picture>
        <source media="(max-width: 600px)" srcset="{{ asset('images/mainvisual-sp.jpg') }}">
        <img src="{{ asset('images/mainvisual-pc.jpg') }}" alt="メインビジュアル">
    </picture>
    </div>

    <section class="about" id="about">
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

    <section class="works" id="works">
        <h2>Works</h2>
        <div class="work__images">
            <ul>
                <li><img src="{{ asset('images/works1.jpg') }}" alt="イメージ画像"></li>
                <li><img src="{{ asset('images/works2.jpg') }}" alt="イメージ画像"></li>
                <li><img src="{{ asset('images/works3.jpg') }}" alt="イメージ画像"></li>
                <li><img src="{{ asset('images/works4.jpg') }}" alt="イメージ画像"></li>
                <li><img src="{{ asset('images/works5.jpg') }}" alt="イメージ画像"></li>
                <li><img src="{{ asset('images/works6.jpg') }}" alt="イメージ画像"></li>
            </ul>
        </div>
    </section>

    <section class="news" id="news">
        <h2>News</h2>
        <dl>
            <div class="news__item">
                <dt>2020.XX.XX</dt>
                <dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.11』に掲載していただきました。</dd>
            </div>
            <div class="news__item">
                <dt>2020.XX.XX</dt>
                <dd>ＸＸ月ＸＸ日から写真集「ＸＸＸＸＸＸＸ」の販売を開始します。</dd>
            </div>
            <div class="news__item">
                <dt>2019.XX.XX</dt>
                <dd>【イベント開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
            </div>
            <div class="news__item">
                <dt>2019.XX.XX</dt>
                <dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.10』に掲載していただきました。</dd>
            </div>
            <div class="news__item">
                <dt>2019.XX.XX</dt>
                <dd>【個展開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
            </div>
        </dl>
    </section>

    <section class="contact-form" id="contact">
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
            <div class="contact-form__button">
                <button type="submit">送信</button>
            </div>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2020 My Work</p>
</footer>

</body>
</html>