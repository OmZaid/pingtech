<?php include 'include/header.php'?>

<style>
    *{
        padding: 0;
        margin: 0;
    }
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
    img {
        display: block;
        height: 400px;
        margin-right: 10px;
    }

    .c-carousel {
        width: 100%;
        position: relative;
        margin-top: 30px;
    }
    .c-carousel__arrow {
        width: 30px;
        height: 30px;
        position: absolute;
        top: 50%;
        z-index: 1;
        -webkit-transform: translateY(-50%) rotate(45deg);
        transform: translateY(-50%) rotate(45deg);
        background-color: white;
    }
    .c-carousel__arrow--left {
        left: 15px;
    }
    .c-carousel__arrow--right {
        right: 15px;
    }
    .c-carousel__slides {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin: 0;
        padding: 0;
        list-style: none;
        will-change: transform;
    }
</style>
<script>
    'use strict';

    var carousel = function carousel(options) {

        var _carousel = {

            paused: false,

            stopped: false,

            options: {
                speed: 3000,
                acceleration: 5,
                reverse: false,
                selector: '.c-carousel',
                slidesSelector: '.c-carousel__slides',
                leftArrowSelector: '.c-carousel__arrow--left',
                rightArrowSelector: '.c-carousel__arrow--right'
            },

            init: function init() {
                var options = arguments.length <= 0 || arguments[0] === undefined ? {} : arguments[0];

                // Copy options to this.options
                for (var prop in options) {
                    if (!options.hasOwnProperty(prop)) break;
                    this.options[prop] = options[prop];
                }

                // Cache nodes
                var carousel = document.querySelector(options.selector || this.options.selector);
                var slides = this._slides = carousel.querySelector(this.options.slidesSelector);
                this._leftArrow = carousel.querySelector(this.options.leftArrowSelector);
                this._rightArrow = carousel.querySelector(this.options.rightArrowSelector);

                // Multiply speed value by the number of slides
                this.options.speed = this.options.speed * slides.children.length;

                // Set slides container width
                this.width = slides.offsetWidth;

                // Repeat elements
                slides.innerHTML = slides.innerHTML + slides.innerHTML + slides.innerHTML;

                this._registerEvents();
                this._animate();
            },
            _registerEvents: function _registerEvents() {
                var _this = this;

                var speed = this.options.speed;
                var reverse = this.options.reverse;

                this._rightArrow.addEventListener('mouseover', function () {
                    _this.options.speed = speed / _this.options.acceleration;
                    _this.options.reverse = false;
                });
                this._rightArrow.addEventListener('mouseleave', function () {
                    _this.options.speed = speed;
                    _this.options.reverse = reverse;
                });
                this._leftArrow.addEventListener('mouseover', function () {
                    _this.options.speed = speed / _this.options.acceleration;
                    _this.options.reverse = true;
                });
                this._leftArrow.addEventListener('mouseleave', function () {
                    _this.options.speed = speed;
                    _this.options.reverse = reverse;
                });

                // Pause when cursor is over carousel
                this._slides.addEventListener('mouseover', this.pause.bind(this));
                this._slides.addEventListener('mouseleave', this.start.bind(this));

                // Pause when cursor is over carousel
                window.addEventListener('resize', function () {
                    _this.width = _this._slides.offsetWidth;
                });
            },
            pause: function pause() {
                this.paused = true;
            },
            start: function start() {
                this.paused = false;
            },
            stop: function stop() {
                this.stopped = true;
            },
            _animate: function _animate() {
                var _this2 = this;

                var slides = this._slides;
                var oneThird = slides.lastElementChild.getBoundingClientRect().right / 3;
                var framesCount = 0;
                var step = 0;
                var posX = 0;

                var animate = function animate() {
                    if (!_this2.paused) {

                        framesCount = _this2.options.speed * 60 / 1000;
                        step = oneThird / framesCount;

                        posX += _this2.options.reverse ? step : -step;

                        slides.style.transform = 'translateX(' + posX + 'px)';

                        if (_this2.options.reverse) {
                            if (posX >= _this2.width - oneThird) {
                                posX = _this2.width - oneThird * 2;
                            }
                        } else {
                            if (Math.abs(posX) >= oneThird * 2) {
                                posX = -oneThird;
                            }
                        }
                    }
                    !_this2.stopped && requestAnimationFrame(animate);
                };
                animate();
            }
        };

        _carousel.init(options);

        return _carousel;
    };

    window.onload = function () {
        return carousel({
            selector: '.c-carousel'
        });
    };
</script>
<style>
    body {
        background: #ffffff;
        overflow: hidden;
    }

    .mk {
        max-width:100%;
        position: relative;
        margin: 0 auto;
        padding-top: 100px;
        padding-left:100px;

    }
    .mk img {
        width: 100%;
        max-width: 850px;
        position: absolute;
        transition: 1s cubic-bezier(0.5, 0.5, 0, 1);
    }
    .mk img:nth-child(1) {
        transform: translateY(15%);
        animation: land-1 2s;
    }
    .mk img:nth-child(3) {
        transform: translateY(-15%);
        animation: land-2 2s;
    }
    .mk:hover img:nth-child(1) {
        transform: translateY(30%);
    }
    .mk:hover img:nth-child(3) {
        transform: translateY(-30%);
    }

    @keyframes land-1 {
        from {
            transform: translateY(30%);
        }
        to {
            transform: translateY(15%);
        }
    }
    @keyframes land-2 {
        from {
            transform: translateY(-30%);
        }
        to {
            transform: translateY(-15%);
        }
    }


</style>


<style>
    #amintion {
        width: 100%;
        padding:10px 0;
    }
    .text {
        margin-top:1%;
        text-align: center;
        display: block;
        overflow: hidden;
    }
    .text h1 {
        color: #6494c2;
        font-size: 30px;
        margin-bottom: 1%;
        font-weight: 400;
    }
    .text h2 {
        color: #212844;
        font-size: 30px;
        word-spacing: 5px;
        margin-bottom: 5px;
    }
    .text a {
        background: #6494c2;
        color: white;
        font-size: 16px;
        padding: 12px 43px;
        margin-top: 10px;
        display: inline-block;
        border-radius: 6px;
        font-weight: 400;
    }
    /************************box-section***************************************/
    #box {
        margin-bottom: 50px;
        display: block;
        overflow: hidden;
    }
    .box-1 {
        overflow: hidden;
        display: block;
        box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.6);
        text-align: center;
        margin-top: 100px;
        height:450px;
    }
    /* .box-1 h4 {
         margin-top: 21px;
         font-size: 22px;
         word-spacing: 8px;
     }*/
    .Read.more {
        background: #4e87c2;
        padding:1px 0px;
        color: white !important;
        margin-top: 10px;
        display: block;
        font-size: 18px;
        cursor: pointer;
    }
    /*************************************SECTION-NAME*******************************************/
    #name {
        display: block;
        overflow: hidden;
        text-align: center;
        margin-top: 50px;
    }
    #name h1 {
        color: red;
        font-size: 48px;
        font-weight: 600;
    }
</style>
<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };
</script>
<style>
    #text,
    #shadow {
        position: absolute;
        margin: 0;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size:3em;
        letter-spacing: 10px;
        font-family: Bad Script;
        color: #fff;
    }

    #text {
        color: #333
    }

    #shadow {
        text-shadow: 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 70px #228DFF, 0 0 80px #228DFF, 0 0 100px #228DFF, 0 0 150px #228DFF;
    }

    #glow {
        animation: neon1 linear infinite 2s;
        will-change: opacity;
    }

    #blink {
        animation: blink linear infinite 2s;
    }


    @keyframes neon1 {
        20% {
            opacity: 1;
        }
        80% {
            opacity: 0.6;
        }
    }


    @keyframes blink {
        70% {
            opacity: 1;
        }
        79% {
            opacity: 0;
        }
        81% {
            opacity: 1;
        }
        82% {
            opacity: 0;
        }
        83% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        92.5% {
            opacity: 1;
        }
    }

</style>
<style>

    .section {
        position: relative;
        display: block;
        padding: 0;
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

    }
    @media (min-width: 40.625rem) {
        .section--portfolio .portfolio-description {
            width: 20%;



        }
    }
    .section--portfolio .portfolio-description .pre {
        display: block;

        font-weight: bold;
        color: #333;

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

    }
    .section--portfolio .portfolio-description p {
        color: #212844;
        line-height: 1.6;

    }
    .section--portfolio img {
        display: block;
        z-index: 1;
        width: 100%;
        height: auto;
        max-width:850px;
        transition: all .5s ease;
    }
    .section--portfolio img:hover {
        -webkit-transform: translateY(-1rem);
        transform: translateY(-1rem);
    }
    @media (min-width: 40.625rem) {
        .section--portfolio img {
            position: absolute;
            top: 1vh;
            right: 0;
            left: auto;
            bottom: 0;
            width: 80%;
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
    img:hover {
        -webkit-transform: translateY(-1rem);
        transform: translateY(-1rem);
    }
</style>
<style>


    #about::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.92);
        z-index: 9;
    }

    #about .container {
        position: relative;
        z-index: 10;

    }
    #canvas {
        background: #3498db;
        width: 100%;
        height: 400px;
    }
</style>
<style>
    #menu1 {

        list-style: none;
        margin: 10px 0 0 0; padding: 25px 10px;
        border-top: 4px double #AAA;
        border-bottom: 4px double #AAA;
        position: relative;
        text-align: center;
    }
    #menu1 li {
        display: inline-block;
        width: 173px;
        margin: 0 10px;
        position: relative;
        -webkit-transform: skewy(-3deg);
        -webkit-backface-visibility: hidden;
        -webkit-transition: 200ms all;
    }
    #menu1 li a {
        text-transform: uppercase;
        font-family: 'Squada One', cursive;
        font-weight: 800;
        display: block;
        background: #FFF;
        padding: 2px 10px;
        color: #333;
        font-size: 25px;
        text-align: center;
        text-decoration: none;
        position: relative;
        z-index: 1;
        text-shadow:
                1px 1px 0px #FFF,
                2px 2px 0px #999,
                3px 3px 0px #FFF;
        background-image: -webkit-linear-gradient(top, transparent 0%, rgba(0,0,0,.05) 100%);
        -webkit-transition: 1s all;
        background-image: -webkit-linear-gradient(left top,
        transparent 0%, transparent 25%,
        rgba(0,0,0,.15) 25%, rgba(0,0,0,.15) 50%,
        transparent 50%, transparent 75%,
        rgba(0,0,0,.15) 75%);
        background-size: 4px 4px;
        box-shadow:
                0 0 0 1px rgba(0,0,0,.4) inset,
                0 0 20px -5px rgba(0,0,0,.4),
                0 0 0px 3px #FFF inset;

    }
    #menu1 li:hover {
        width: 203px;
        margin: 0 -5px;
    }
    #menu1 a:hover {
        color: #4e87c2;
    }
    #menu1 li:after,
    #menu1 li:before {
        content: '';
        position: absolute;
        width: 50px;
        height: 100%;
        background: #BBB;
        -webkit-transform: skewY(8deg);
        x-index: -3;
        border-radius: 4px;
    }
    #menu1 li:after {
        background-image: -webkit-linear-gradient(left, transparent 0%, rgba(0,0,0,.4) 100%);
        right: 0;
        top: -4px;
    }
    #menu1 li:before {
        left: 0;
        bottom: -4px;
        background-image: -webkit-linear-gradient(right, transparent 0%, rgba(0,0,0,.4) 100%);
    }
</style>



<div class="container-fluid">
    <div class="overlay">
        <h2 id="glow" class="text-center" style="color:#eee;padding-top:70px;">التصميم الجرافيكي </h2>
    </div>
</div>
<!--<center style="padding-top: 200px;height: 400px;">
    <canvas id="canvas" width="1000" height="400">
    </canvas>
</center>-->

<section id="amintion" style="background: #eee url(https://subtlepatterns.com/patterns/extra_clean_paper.png); overflow: hidden;
padding-top: 200px;">
    <div class="container-fluid">
        <ul class="" id="menu1" style=" ">
            <li><a href="/"><span>Home</span></a></li>
            <li><a href="/"><span>Tutorials</span></a></li>
            <li><a href="/"><span>Articles</span></a></li>
            <li><a href="/"><span>About </span></a></li>
            <li><a href="/"><span>Contact</span></a></li>
            <li><a href="/"><span>Contact</span></a></li>
            <br>

        </ul>
        <section class="section section--portfolio section--left" id="thepepperhill">
            <div class="section__inner">
                <div class="portfolio-description">
                    <a class="pre" href=" " style="font-size: 22px;">Graphic  Design</a>
                    <p class=" wow wow bounceInLeft" data-wow-duration="1s" style="font-size: 20px;max-width:100%">Branding Identity</p>
                    <p class=" wow wow bounceInLeft" data-wow-duration="1s" style="font-size: 20px;max-width: 100%">Brochure,Flyer
                        Stand Up Roll,Poster,Forms ,Cards,Social Media Posts,Social Media Covers,Catalog</p>

                </div>
                <img src="photo/homepage_header.jpg" alt="The Pepper Hill">
            </div>
        </section>

        <div class="col-md-12 row" style="max-width: 100%;">
            <div class=" col-md-6  col-xs-12  wow wow bounceInLeft" ">
            <img src="photo/services_branding_design_big_idea.jpg" alt="The Pepper Hill" style="" class="img-responsive">
        </div>
        <div class=" col-md-6" style="direction: rtl;">
            <br><br>
            <h3 class=" neon wow wow bounceInLeft" data-wow-duration="3s" style="display: inline-block;">

                ماهي الهوية البصرية؟

            </h3>
            <br>
            <p class="  wow  wow bounceInRight" data-wow-duration="4s" style="font-size: 16px;direction: rtl">
                الهوية البصرية هدفها فرض انطباع عام ينعكس على الجمهور من الداخل والخارج للتفاعل مع كل إنتاجات المؤسسة من مواد دعائية إلى نشرات وكتيبات وفرض الهدف التسويقي والتوجيهات من خلال هذا الشعار إلى جانب الحفاظ على كينونة الشركة ومتابعة كل أدوات التواصل
            </p>
            <p class="wow wow bounceInLeft" data-wow-duration="3s"  style="font-size: 16px;direction: rtl">
                الهوية البصرية هي عبارة عن عدة أدوات تتميز بنمط معين في التصميم، يقوم على أساسها تصميم شعار المشروع أو الشركة،ويكون ذلك باستخدام: ألوان موحدة، والشعار، والكلمة الشعارية، وبطاقة الأعمال، وورق مروس، ومجلد للملفات، ومظروف بمختلف مقاساته،  وفلاير، وغلاف اسطوانات بالإضافة إلى التصاميم الإلكترونية لغلاف حساباتك على فيسبوك وتويتر و يوتيوب و غيرها
            </p>
        </div>


    </div>
    <div class="col-md-12 row" style="max-width: 100%;">
        <br><br>
        <div class=" col-md-6" style="direction: rtl;">
            <h3 class=" neon wow wow bounceInLeft" data-wow-duration="3s" style="display: inline-block;">

                ماهو الشعار؟

            </h3>
            <br>
            <p class="  wow  wow fadeIn" data-wow-duration="4s" style="font-size: 16px;direction: rtl">
                أول ما يتم البدء به في المرحلة الأولى من تصميم الهوية البصرية هو تصميم شعار قوي وجذاب، وتأتي المرحلة التالية في جعل كل ما له صلة بالجهة أو المؤسسة منسجمًا ومتناسقاً مع هذا الشعار من حيث الألوان والرمزية            </p>
            <p class="wow wow fadeInRight" data-wow-duration="3s"  style="font-size: 16px;direction: rtl">
                الشعار هو الصورة البصرية الإيضاحية الرمزية لشخص ما أو شركة أو مؤسسة أو منتج محدد والذي يتم التعرف عليه من خلاله، ويمكن أن يكون الشعار عبارة عن رمز أو رسم تعبيري أو اسم أو حروف مختصرة.
                ,,, من أهم مميزات الشعار الناجح هي مدى قوة وسرعة انطباعه في ذهن المتلقي وسهولة حفظه وتذكره والمقدرة على تمييزه بسهولة وسط العديد من الصور البصرية الأخرى. مثل شعار شركة «آبل العالمية» – تفاحة ينقصها جزء (التكنولوجيا لم تكتمل بعد)
            </p>
            <h3 class=" neon wow wow fadeInLeft" data-wow-duration="3s" style="display: inline-block;font-size: 18px;">

                باختصار يعتبر الشعار أهم عنصر في الهوية التجارية.

            </h3>
        </div>
        <div class=" col-md-6  col-xs-12 wow wow bounceInLeft" style="height:400px;max-height:400px;">
            <img src="photo/features-logos-7c0299c6d9.png" class="img-responsive">
        </div>
    </div>
    <div class="col-md-12 row" style="max-width: 100%;">
        <div class=" col-md-4 col-xs-12  wow wow fadeIn" style="height:400px;max-height:400px;">
            <img src="photo/rollup-banner-2-500x500.png" alt="The Pepper Hill" class="img-responsive">
        </div>

        <div class=" col-md-8" style="direction: rtl;">
            <br>
            <h3 class=" neon wow wow fadeIn" data-wow-duration="3s" style="display: inline-block;">

                ماهو ستاند رول أب؟

            </h3>
            <br>
            <p class="  wow  wow fadeIn" data-wow-duration="4s" style="font-size: 16px;direction: rtl">
                هو عبارة عن بنر اعلاني او يافطة يمكن طيها وسهلة النقل لها مقاس ثابت شكلها عامودي يتم استخدمها في المعارض والمؤتمرات
            </p>
            <p class="wow wow fadeIn" data-wow-duration="3s"  style="font-size: 16px;direction: rtl">
                رول اب ستاند مصنوع من الالومنيوم يستخدم لعرض الرسالة الاعلانية لجميع خدمات أو منتجات الشركات أو يمكن استخدامه خلال حدث أو مناسبة معينة و تتناول الرسالة الاعلانية تصميم يشمل بعض الصور و بعض النصوص و تاريخ المناسبة كما يستخدم الرول اب في المعارض و المؤتمرات و في الشركات و المكاتب ويتم طباعة الرول اب ان دور أو أوت دور و يتميز بخفة وزنه وتختلف مقاسات ال رول اب ستاند  من مقاسات صغيرة إلى مقاسات كبيرة معظمها لها مقاس ثابت في الارتفاع و 2 متر و لكن تزداد في العرض
            </p>
        </div>


    </div>
    <div class="col-md-12 row" style="max-width: 100%;">
        <br>
        <div class=" col-md-6" style="direction: rtl;">

            <h3 class=" neon wow wow bounceInLeft" data-wow-duration="3s" style="display: inline-block;padding-top: 50px;">
                ماهو الفلاير؟
            </h3>
            <br>
            <p class="  wow  wow bounceInLeft" data-wow-duration="4s" style="font-size: 16px;direction: rtl">
                هو عبارة عن ورقة A4 مقسم الى اجزاء اما 3 اجزاء أو جزئين يكون فيها نصوص وصور تعرف بنشاط المؤسسة واعمالها ومنتجاتها
            </p>
            <p class="wow wow bounceInLeft" data-wow-duration="3s"  style="font-size: 16px;direction: rtl">
                لازالت المطبوعات الورقية وخاصة الفلاير و البرشور لها تأثير كبير فى التسويق والمبيعات لذلك تقدم شركة بينغ تك خدمة طباعة الفلاير للشركات بكميات كبيرة وكميات قليلة أيضا على حسب الطلب وبجودة طباعة عالية تناسب احتياجات الشركات الكبرى والمحال التجارية التى دائما ما تعتمد فى جزء كبيرة من اعمالها فى التسويق و الدعاية من خلال الفلاير و تمتاز الشركة أيضا بسرعة تنفيذ الطلبات و كثيرا ما يتم تسليم الطلب فى نفس اليوم لاننا نعلم مدى أهمية تلك المطبوعات فى التسويق ويمكنك معرفة أسعار طباعة الفلاير من خلال الاتصال على الأرقام الموجودة على الموقع أو من خلال إرسال المواصفات المطلوبة على الايميل الخاص بالشركة لتسعير طلبك فى دقائق . مع امكانية طباعة بروفات للاطلاع على جودة المطبوعات .
            </p>

        </div>
        <div class=" col-md-6  col-xs-12 wow wow bounceInRight">
            <br>
            <img src="photo/education-brochure-design.png" class="img-responsive">
        </div>

    </div>
    <div class="col-md-12 row" style="max-width: 100%;">
        <br>

        <div class=" col-md-6  col-xs-12 wow wow bounceInRight">
            <br>
            <video width="600" height="400" controls  autoplay loop style="width: 100%;height: auto">
                <source src="photo/xactly.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

        </div>
        <div class=" col-md-6" style="direction: rtl;">

            <h3 class=" neon wow wow bounceInLeft" data-wow-duration="3s" style="display: inline-block;padding-top: 50px;">
                ماذا أيضاً؟
            </h3>
            <br>
            <p class="  wow  wow bounceInLeft" data-wow-duration="4s" style="font-size: 16px;direction: rtl">
                من المعروف أن اعلانات الطرق نراها في أعلى المباني والواجهات وفي الطرقات
                والشوارع  الرئيسة  وتم تصميم تلك الاعلانات وطباعتها و تركيبها من قبل شركات
                أو وكالات الدعاية والاعلان و أيضاً تصميم وطباعة ولصق الاعلانات على باصات
                النقل العام
            </p>
            <p class="wow wow bounceInLeft" data-wow-duration="3s"  style="font-size: 16px;direction: rtl">
                إذاً باختصار:
                <br>
                تصميم ( design ) هو عملية تكوين الفكرة والابتكار بمعنى أنه يتم جمع عناصرمن البيئة ووضعها في تكوين معين ليكون الناتج إعطاء شئ له وظيفة أو مدلول معين
                والتصميم لا غنى عنه للشركات و الأفراد ولذلك تقوم شركات و وكالات الدعاية والاعلان (Advertising agency agencies) بتقديم خدمات التصميم
            </p>

        </div>
    </div>


    <div class="container-fluid col-md-12 row"  style="width:100%;max-width: 100%;height:550px;
     background: #ffffff url() center no-repeat;background-size: cover;">

        <!--<p id="text" > </p>
           <p   id="shadow" style="color: black;padding-left:400px;width:20%;max-width: 20%;" >
            <span id="glow">&nbsp;PING</span><span id="blink">&nbsp;TECH</span>
        </p>-->


        <div class="mk wow wow bounceInLeft" style="height:500px;max-height:500px;width:100%;max-width:100%">
            <img src="https://asistapl.github.io/assets/exporia/mk/mkp-2.png"/>
            <img src="https://asistapl.github.io/assets/exporia/mk/mkp-3.png"/>
            <img src="https://asistapl.github.io/assets/exporia/mk/mkp-1.png"/>
        </div>


    </div>


</section>
<section>
    <h2 class="text-center wow wow ZoomIn" style="padding-bottom: 50px;">
        نماذج من أعمالنا
    </h2>
    <div class="c-carousel ">
        <div class="c-carousel__arrow c-carousel__arrow--left"></div>
        <div class="c-carousel__arrow c-carousel__arrow--right"></div>
        <ul class="c-carousel__slides">
            <li><img src="photo/cold-winter.png"/></li>
            <li><img src="photo/education.png"/></li>
            <li><img src="photo/member.png"/></li>
            <li><img src="photo/11.png"/></li>
            <li><img src="photo/post8.png"/></li>
            <li><img src="photo/postt7.png"/></li>
            <li><img src="photo/حملات.png"/></li>
            <li><img src="photo/حملة%20افطار%20صائم.png"/></li>
            <li><img src="photo/رمضان.png"/></li>
            <li><img src="photo/women-day.jpg"/></li>
            <li><img src="photo/نشر-خطوات.jpg"/></li>
            <li><img src="photo/eid.jpg"/></li>
            <li><img src="photo/khair.jpg"/></li>
        </ul>
        <br><br><br>
    </div>
</section>






<script>
    /*
 * Start Config Vars
 */

    var yPosMax = 175;
    var yPosMin = 125;
    var yPosStart = 150;
    var xPosStart = -50;
    var yPosChangeMultiplier = 60;
    var xPosChangeMin = 125;
    var xPosChangeMultiplier = 25;
    var yControlMultiplier = 20;
    var yControlMin = 40;

    /*
     * End Config Vars
     */

    canvas = document.getElementById('canvas');
    context = canvas.getContext('2d');
    context.fillStyle = '#ecf0f1';
    var xPos = xPosStart;
    var yPos = yPosStart;
    context.beginPath();
    context.moveTo(xPos, yPos);
    while (xPos < canvas.width) {
        lastX = xPos;
        xPos += Math.floor(Math.random() * xPosChangeMultiplier + xPosChangeMin);
        yPos += Math.floor(Math.random() * yPosChangeMultiplier - yPosChangeMultiplier/2);
        while (yPos < yPosMin) {
            yPos += Math.floor(Math.random() * yPosChangeMultiplier/2);
        }
        while (yPos > yPosMax) {
            yPos -= Math.floor(Math.random() * yPosChangeMultiplier/2);
        }
        controlX = (lastX + xPos)/2;
        controlY = yPos-Math.floor(Math.random() * yControlMultiplier + yControlMin);
        context.quadraticCurveTo(controlX,controlY,xPos,yPos);
    }
    context.lineTo(canvas.width,yPos);
    context.lineTo(canvas.width,canvas.height);
    context.lineTo(0,canvas.height);
    context.fill();

</script>
<script>
    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    ctx.font = '  18px Arial';
    ctx.textAlign = 'center';
    ctx. textBaseline = 'middle';
    ctx.fillStyle = 'black';  // a color name or by using rgb/rgba/hex values
    ctx.fillText('التصميم الجرافيكي', 150, 50); // text and position
</script>
<?php include 'include/footer.php'?>
