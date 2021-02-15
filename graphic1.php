<?php include 'include/header.php'?>

<style>
    .overlay{
        position:absolute;
        background:url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/footer_lodyas.png);
        -webkit-animation:100s scroll infinite linear;
        -moz-animation:100s scroll infinite linear;
        -o-animation:100s scroll infinite linear;
        -ms-animation:100s scroll infinite linear;
        animation:100s scroll infinite linear;
        top:0;
        left:0;
        width:100%;
        height:200px;
    }



    @-webkit-keyframes scroll{
        100%{
            background-position:0px -3000px;
        }
    }

    @-moz-keyframes scroll{
        100%{
            background-position:0px -3000px;
        }
    }

    @-o-keyframes scroll{
        100%{
            background-position:0px -3000px;
        }
    }

    @-ms-keyframes scroll{
        100%{
            background-position:0px -3000px;
        }
    }

    @keyframes scroll{
        100%{
            background-position:0px -3000px;
        }
    }


    .btn-wrap{
        margin:0 auto;
        width:200px;
        padding-top:50px;
    }
    hr{
        color: #6494c2;
        background: rgb(100, 148, 194) !important;
        height: 5px;
        width: 150px;
        border-top:0px;
    }

</style>
<style>

    .section {
        position: relative;
        display: block;
        margin: 0 auto;
        width: 100%;
        overflow: hidden;
        margin: 0;
    }
    @media (min-width: 40.625rem) {
        .section {
            height: 100vh;
        }
    }
    .section .section__inner {
        display: block;
        margin: 0 auto;
        max-width: 1000px;
        height: 100%;
    }

    .section--portfolio {
        color: #333;
        background: #fff;
        min-height: 300px;
        max-height: 70vh;
        border-bottom: 1px solid #ccc;
    }
    @media (min-width: 40.625rem) {
        .section--portfolio {
            max-height: 80vh;
        }
    }
    .section--portfolio + .section--portfolio {
        padding-top: 5vh;
    }
    .section--portfolio .portfolio-description {
        position: relative;
        z-index: 10;
        font-size: .875rem;
        padding: 5vw 1rem 0;
    }
    @media (min-width: 40.625rem) {
        .section--portfolio .portfolio-description {
            width: 35%;
            padding: 8vw 1rem 0;
        }
    }
    .section--portfolio .portfolio-description .pre {
        display: block;
        text-transform: uppercase;
        font-weight: bold;
        color: #333;
        margin: 0 0 1rem 0;
        letter-spacing: -.04em;
        font-size: .875rem;
    }
    .section--portfolio .portfolio-description .link {
        display: inline-block;
        letter-spacing: 1.4px;
        font-size: .75rem;
        color: #333;
        font-style: italic;
        margin: 1rem 0 0;
        border-bottom: 2px solid rgba(0, 0, 0, 0);
    }
    .section--portfolio .portfolio-description .link:hover {
        border-bottom: 2px solid;
    }
    .section--portfolio .portfolio-description a {
        font-family: "nimbus-sans", sans-serif;
    }
    .section--portfolio .portfolio-description p {
        color: #999999;
        line-height: 1.6;
        font-family: "ff-meta-serif-web-pro", serif;
    }
    .section--portfolio img {
        display: block;
        z-index: 1;
        width: 100%;
        height: auto;
        max-width: 1000px;
        transition: all .5s ease;
    }
    .section--portfolio img:hover {
        -webkit-transform: translateY(-1rem);
        transform: translateY(-1rem);
    }
    @media (min-width: 40.625rem) {
        .section--portfolio img {
            position: absolute;
            top: 5vh;
            right: 0;
            left: auto;
            bottom: 0;
            width: 85%;
        }
    }

    @media (min-width: 40.625rem) {
        .section--documenta .portfolio-description {
            margin: 0 0 0 auto;
        }
    }
    @media (min-width: 40.625rem) {
        .section--documenta img {
            right: auto;
            left: -10vw;
        }
    }
    @media (min-width: 54.375rem) {
        .section--documenta img {
            right: auto;
            left: 0;
        }
    }

    .section--gofreaks {
        background: url(http://i45.imgup.net/gofreaks_b18b3.jpg) no-repeat top center;
        background-size: cover;
        text-align: center;
    }
    @media (min-width: 40.625rem) {
        .section--gofreaks .portfolio-description {
            margin: 0 auto;
            width: 40%;
            padding-top: 5vh;
        }
    }
    .section--gofreaks .portfolio-description p {
        color: #515151;
    }
    .section--gofreaks img {
        position: relative;
        top: auto;
        left: auto;
        right: auto;
        bottom: 0;
        margin: 3vw auto 0;
    }
</style>

<div class="container-fluid">
    <div class="overlay">
        <h2 class="text-center" style="color:#eee;padding-top:70px;">التصميم الجرافيكي </h2>
    </div></div>

<div class="container-fluid" style="padding-top:230px;">

    <section class="section section--portfolio section--left" id="thepepperhill">

        <div class="section__inner">
            <div class="portfolio-description">
                <a class="pre" href=" " style="font-size: 24px;">The Pepper Hill</a>
                <p style="font-size: 20px;">Handpicked kampot pepper from Kambodscha. Design, frontend and Shopify integration.</p>
                <a href=" " class="link" style="font-size: 24px;">thepepperhill.com</a>
            </div>

            <img src="http://o31.imgup.net/ph3b9a.jpg" alt="The Pepper Hill">
        </div>
    </section>

    <section class="section section--portfolio section--documenta" id="documenta">

        <div class="section__inner">
            <div class="portfolio-description">
                <a class="pre" href=" " style="font-size: 24px;">SEO</a>
                <p style="font-size: 20px;">معناها تهيئة المواقع لمحركات البحث ومن أشهر محركات البحث جوجل و ياهو و بينج ( Google – Yahoo – Bing ) وغيرها من محركات البحث</p>
                <!--<a href=" " class="link" style="font-size: 24px;">thepepperhill.com</a>-->
            </div>

            <img src="http://r45.imgup.net/documentaeb23.jpg" alt="documenta-historie.de">
        </div>
    </section>

    <section class="section section--portfolio section--gofreaks" id="gofreaks">

        <div class="section__inner">
            <div class="portfolio-description">
                <a class="pre" href="#gofreaks">gofreaks</a>
                <p>Multigaming community. Concept, design, frontend and backend development.</p>
                <a href="http://gofreaks.eu" class="link">gofreaks.eu</a>
            </div>

            <img src="http://n46.imgup.net/gofreaksb76b.png" alt="gofreaks.eu">
        </div>
    </section>

</div>









<?php include 'include/footer.php'?>
