<?php include 'include/header.php'?>
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
    .relative {
        position: relative;

    }
    .animated-circle,
    .static-circle {
        transition: all .5s ease!important;

    }
</style>

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
    header {
        position: relative;
        background-color: black;
        height: 70vh;
        min-height: 25rem;
        width: 100%;
        overflow: hidden;
        display: contents;
    }

    header video {
        position: absolute;
        top: 60%;
        left:30%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: 0;
        -ms-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    }

    header .container {
        position: relative;
        z-index: 2;
    }

    header .overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: black;
        opacity: 0.5;
        z-index: 1;
    }

    @media (pointer: coarse) and (hover: none) {
        header {
            background: url('http://sandbox.thewikies.com/vfe-generator/images/big-buck-bunny_poster.jpg') black no-repeat center center scroll;
        }
        header video {
            display: none;
        }
    }
</style>
<style>
    table, iframe, video {
        width: 100%;

    }


    td {
        background-color: #6494c2;
        width: 50%;
        vertical-align: top;
    }

</style>


<div class="container-fluid"><div class="overlay">
        <h2 class="text-center" style="color:#eee;padding-top:70px;">تركيب الشبكات اللاسلكية</h2>
    </div></div>
<div class="container-fluid">

</div>

<div class="container-fluid" style="padding-top:230px;height: auto;">

   <!-- <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://player.vimeo.com/external/203806147.hd.mp4?s=46acd9c5088ddc34c23a8f33a32b5a791e437c80&profile_id=119" type="video/mp4" >
        </video>
        <div class="container h-100">
            <div class="d-flex text-center h-100">
                <div class="my-auto w-100 text-white">
                    <h1 class="display-3">Video Header</h1>
                    <h2>With HTML5 Video and Bootstrap 4</h2>
                </div>
            </div>
        </div>
    </header>-->
    <div class="row col-md-12 text-center">
        <br>
        <div class="col-md-6 wow slideInDown">
<p style="display:inline-block;direction: rtl;line-height: 30px;"  >
    شركة بينغ تك متخصصة في تركيب وصيانة الشبكات اللاسلكية والسيرفرات Mikrotik - Ubiquiti - Cisco – Windows Server  لدينا خبرة واسعة بمنتجات مايكروسوفت وسيسكو وأنظمة الإنترنت العالمية لعمل الدعم الفني لكافة الشبكات والأجهزة. تعمل شركة بينغ تك على تصميم الشبكات و تنفيذ الشبكات و صيانة شبكات الكمبيوتر، والإنترنت والإتصالات للشركات والمؤسسات الصغيرة والمتوسطة والكبيرة بكل دقة وعناية وتقدم لعملائها أفضل الخدمات بالإضافة إلى ذلك تقوم الشركة بإدارة الشبكات وتقديم الدعم الفني على مدار الساعة ضمن إيام الأسبوع السبعة، والتركيز على الصيانة الوقائية لمنع وتقليل حدوث الأعطال بشكل كبير.



    تعتمد الأعمال التجارية على البنية التحتية للشبكة ولذلك تهدف صيانة الشبكات لعمل الدراسة الوافية ومعرفة كل الأهداف والمتطلبات التشغيلية والإدارية ومن ثم تقوم بوضع التصاميم المناسبة للشبكة لضمان كفاءة وسرعة وحماية للشبكات من أي اختلالات أو أعطال مما قد يؤدي إلى توقف إنتاجية الشركة. فلدى شركتنا خبرة كاملة في أعمال وتطوير الشبكات الصغيرة والمتوسطة والكبيرة.
    تقوم الشركة بتوريد جميع الأجهزة الخاصة بأعمال الشبكات والكمبيوترات وأدوات الشبكات
    وتأسيس الشبكات و إعدادها لجميع الفئات العقارية ( منازل - مدارس - جامعات - مطاعم - فنادق - مجمعات سكنية - شركات بكافة أصنافها - مستشفيات - مجمعات صحية )
    قم بالإتصال بنا لـ تركيب الشبكات بالسرعة التى ترغب بها.
</p>
        </div>
        <div class="col-md-6">
           <img src="img/net/4.jpg" style="display: inline-block" class="img-responsive"/>
        </div>
    </div>

</div>
<br><br><br>
<div class="c-carousel">
    <div class="c-carousel__arrow c-carousel__arrow--left"></div>
    <div class="c-carousel__arrow c-carousel__arrow--right"></div>
    <ul class="c-carousel__slides">
        <li><img src="img/net/1.png"/></li>
        <li><img src="img/net/2.jpg"/></li>
        <li><img src="img/net/3.jpg"/></li>
        <li><img src="img/net/4.jpg"/></li>
        <li><img src="img/net/5.jpg"/></li>
        <li><img src="img/net/7.jpg"/></li>
    </ul>
</div>
<div class="container">

</div>
<br><br><br><br><br>
<table>
    <tr>
        <td>
            <p style="direction: rtl;color:#fff;padding:15px 15px 15px 15px;">توفر منتجات airMAX® ac زمن استجابة محسّنًا ، ومناعة للضوضاء ، وقابلية للتوسعة ، بالإضافة إلى زيادة أداء الإنتاجية بشكل كبير.</p>
            <video autoplay muted loop poster="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAABCAQAAAB9cObUAAAAC0lEQVR42mNkIAAAAEIAAgMZgEoAAAAASUVORK5CYII=">
                <source src="img/net/1.mp4" type="video/mp4">
            </video>
        </td>
        <td>
            <p style="direction: rtl;color:#fff;padding:15px 15px 15px 15px;">تم تصميم هوائي هوائيات airMAX® ac لمنع التداخل والتشويش بفضل انخفاض هوامشه الجانبية بحيث تزيد منطقة التغطية .</p>
            <video autoplay muted playsinline loop poster="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAABCAQAAAB9cObUAAAAC0lEQVR42mNkIAAAAEIAAgMZgEoAAAAASUVORK5CYII=">
                <source src="img/net/2.mp4" type="video/mp4">
            </video>
        </td>
    </tr>
    <tr>
        <td>
            <p style="direction: rtl;color:#fff;padding:15px 15px 15px 15px;">تم إثبات تقنية airMAX® من Ubiquiti في جميع أنحاء العالم ، مما يدل على الأداء المتميز في البيئات الخارجية. يتيح بروتوكول TDMA airMAX قابلية  للتوسع  في الشبكات المتعددة.</p>
            <video autoplay muted loop poster="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAABCAQAAAB9cObUAAAAC0lEQVR42mNkIAAAAEIAAgMZgEoAAAAASUVORK5CYII=">
                <source src="img/net/4.mp4" type="video/mp4">
            </video>
        </td>
        <td>
            <p style="direction: rtl;color:#fff;padding:15px 15px 15px 15px;">تعمل أجهزة الراديو Rocket ™ بسلاسة مع هوائيات AirMAX® و RocketDish ™ و Omni و Yagi لهواتف PtP و PtMP. يحتوي كل هوائي airMAX على نظام  مدمج ، لذلك لا توجد أدوات للتثبيت.  </p>
            <video autoplay muted playsinline loop poster="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAABCAQAAAB9cObUAAAAC0lEQVR42mNkIAAAAEIAAgMZgEoAAAAASUVORK5CYII=">
                <source src="img/net/3.mp4" type="video/mp4">
            </video>
        </td>

    </tr>
</table>

<?php include 'include/footer.php'?>
