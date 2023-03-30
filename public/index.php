<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>DANA Auction</title>
</head>
<body>
    <div id="popUp">
        <span></span>
        <p>Thanks for joining us</p>
    </div>

    <section class="intro">
        <div class="flex-container-intro">
            <figure>
                <video playsinline autoplay muted no-controls preload="metadata" class="intro-preview" id="videoPlayer">
                </video>
            </figure>
            <!-- <img src="img/intro-preview.jpg" alt="" class="intro-preview"> -->
            <div class="intro-block__text">
                <img src="img/svg/intro-logo.svg" alt="" class="inro-logo-img">
                <p class="intro__title-bottom">where art meets impact</p>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <h2 class="main__title">Welcome to Dana,<br>NFT CHARITY auction!</h2>
            <p class="main__subtitle">In a world full of ever-evolving bad and good, shape the world around you. Ignite your passion for art. Use it as a force to make the world a better place. Unlock a world of giving through artistic expression.</p>
            <form class="main-btn-group" action="/send.php" method="post" id="formMale">
                <input type="email" name="mail" class="mail-input" placeholder="Enter your email" required>
                <input type="submit" value="join" class="mail-button">
            </form>
            <!-- Thanks for joining us -->
        </div>
        <img src="img/main.png" alt="" class="main-bottom-img">
    </main>

    <section class="invest">
        <div class="invest-top">
            <p class="invest-top__subtitle-head invest-top__subtitle">Invest in ART<br>and<br>Make a Difference</p>
            <p class="invest-top__subtitle-body invest-top__subtitle">with Dana NFT Auction</p>
        </div>

        <div class="invest-bottom">
            <p class="invest-bottom__title">Ready to make an impact? Join the cathartic movement of Dana, where renown artists come together to create beautiful pieces for a cause. With secure NFTs and blockchain technology, your donations can go further than ever before!<br><br>You'll be able to control their path and ensure it goes toward tangible change in our world.</br><br>All from one place with just one goal: To show us how even small acts of kindness have power enough to tackle global problems.</p>
        </div>
    </section>

    <footer>
        <div class="min-block"></div>
        <div class="center-block"></div>
        <div class="min-block"></div>

        <div class="center--block"></div>
        <div class="center-center-block"><p class="footer__title">Stand united through<br>creative expression,<br>join us for making<br>the world<br>much better.</p></div>
        <div class="center--block"></div>

        <div class="min-block">

            <div class="footer-img">
                <a href="https://www.instagram.com/dana.auction/" class="footer-link">
                    <img src="img/svg/inst.svg" alt="" class="footer-ico">
                </a>
                <a href="https://twitter.com/dana_auction" class="footer-link">
                    <img src="img/svg/twit.svg" alt="" class="footer-ico">
                </a>
            </div>

        </div>
        <div class="center-block"></div>
        <div class="min-block"><p class="footer-info">(C) 2023 Dana Auction</p></div>
    </footer>

    <script src="app.js"></script>
</body>
</html>