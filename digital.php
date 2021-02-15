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
<div class="container-fluid"><div class="overlay">
        <h2 class="text-center" style="color:#eee;padding-top:70px;">التسويق الالكتروني</h2>
    </div></div>

<style>
    .section {
        width: 100%;
        position: relative;
    }
    .section .left, .section .middle, .section .right {
        width: 100%;
        display: block;
        color: #fff;
        box-sizing: border-box;
        left: 0;
        padding: 30px;
        text-align: center;
        overflow: hidden;
        -moz-transition: 0.3s ease-in-out all;
        -o-transition: 0.3s ease-in-out all;
        -webkit-transition: 0.3s ease-in-out all;
        transition: 0.3s ease-in-out all;
    }
    @media (min-width: 480px) {
        .section .left .content, .section .middle .content, .section .right .content {
            position: relative;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
    }
    @media (min-width: 480px) {
        .section .left, .section .middle, .section .right {
            width: 50%;
            font-size: 0.9em;
            padding: 10px;
            left: 0;
            float: left;
            position: absolute;
        }
    }
    @media (min-width: 768px) {
        .section .left, .section .middle, .section .right {
            width: 33.33333%;
            left: 33.33%;
            padding: 10px;
        }
    }
    @media (min-width: 992px) {
        .section .left, .section .middle, .section .right {
            padding: 30px;
            font-size: 1em;
        }
    }
    .section.animate .left {
        left: 0;
    }
    @media (min-width: 480px) {
        .section.animate .left {
            left: 50%;
        }
    }
    @media (min-width: 768px) {
        .section.animate .left {
            left: 0;
        }
    }
    .section.animate .right {
        left: 0;
    }
    @media (min-width: 480px) {
        .section.animate .right {
            left: 50%;
        }
    }
    @media (min-width: 768px) {
        .section.animate .right {
            left: 66.66%;
        }
    }
    .section .title {
        background: #4e87c2;
    }
    .section .title h2 {
        margin-top: 0;
    }
    .section .title p {
        line-height: 1.55em;
        margin-bottom: 0.75em;
    }
    .section .title .btn-primary {
        color: #fff;
        background: #4e87c2;
        padding: 10px;
        text-decoration: none;
        border-radius: 3px;
        display: inline-block;
        -moz-transition: 0.3s ease-in-out all;
        -o-transition: 0.3s ease-in-out all;
        -webkit-transition: 0.3s ease-in-out all;
        transition: 0.3s ease-in-out all;
    }
    .section .title .btn-primary:hover {
        background: #4e87c2;
    }
    .section .tiles {
        padding: 0;
        background: #fff;
        clear: both;
        display: none;
        float: none;
    }
    .section .tiles img {
        width: 50%;
        float: left;
        height: auto;
        opacity: 0.7;
        -moz-transition: 0.3s ease-in-out all;
        -o-transition: 0.3s ease-in-out all;
        -webkit-transition: 0.3s ease-in-out all;
        transition: 0.3s ease-in-out all;
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -o-filter: grayscale(100%);
    }
    .section .tiles img:hover {
        opacity: 1;
        -webkit-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
        -o-filter: grayscale(0%);
    }
    @media (min-width: 768px) {
        .section .tiles {
            display: block;
        }
    }
    .section .middle {
        background: #ffffff;
        z-index: 2;
        padding: 0;
    }
    .section .middle img {
        width: 100%;
        height: auto;
        display: block;
    }

    @-webkit-keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            -webkit-transform: translateY(0);
        }
        40% {
            -webkit-transform: translateY(-20px);
        }
        60% {
            -webkit-transform: translateY(-10px);
        }
    }
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-20px);
        }
        60% {
            transform: translateY(-10px);
        }
    }
</style>


<div class="container-fluid" style="padding-top:230px;height: auto;">
    <div class="row col-md-12 text-center" id="amintion">
        <br>
        <div class="col-md-6">
            <h3 align="right" class="wow slideInDown">ماهو التسويق الالكتروني؟</h3>
            <p style="display:inline-block;direction: rtl;line-height: 30px;" class="wow slideInDown"  >
                هو معاملة تجارية قائمة على أطراف التبادل إلكترونياً بدلاً من الاتصال المادي المباشر و تتم عملية بيع و شراء السلع
                أو المنتجات و الخدمات عبر شبكة الانترنت – مع التطور التكنولوجي و ازدياد عدد مستخدمي الانترنت أصبح التسويق
                الالكتروني له أهمية كبيرة بالنسبة لكثير من الشركات و أصحاب الأنشطة التجارية فأصبح العملاء يحددون المعلومات
                والعروض التي يحتاجونها ويرغبون فيها و الأسعار التي تناسبهم
            </p>
            <img src="photo/marketting/social.png" style="display: inline-block" class="img-responsive wow wow bounceInLeft" data-wow-duration="1s"/>
        </div>
        <div class="col-md-6">
            <img src="photo/marketting/m1.jpg" style="display: inline-block" class="img-responsive wow wow bounceInRight" data-wow-duration="2s"/>
        </div>
    </div>


    </div>
<div class="section animate">
    <div class="middle">
        <img src="photo/marketting/internet-marketing-.png" class="" />
    </div>
    <div class="left title">
        <div class="content">
            <h4>ينقسم التسويق الالكتروني إلى قسمين</h4>
            <p class="wow wow bounceInLeft" data-wow-duration="1s">SEO</p>
            <p class="wow wow bounceInRight" data-wow-duration="2s">القسم الأول هو  تهيئة المواقع لمحركات البحث .</p><br>
            <p class="wow wow bounceInLeft" data-wow-duration="3s">SEM</p>
            <p class="wow wow bounceInRight" data-wow-duration="4s">القسم الثاني و هو التسويق في محركات البحث .</p><br>
        </div>
    </div>
    <div class="right tiles">
        <br><br><br>
        <img src="photo/marketting/1.png" />
        <img src="photo/marketting/2.png" />
        <img src="photo/marketting/3.png" />
        <img src="photo/marketting/services_marketing_design_big_idea.jpg" />
    </div>
</div>

<div class="section animate wow wow bounceInRight" data-wow-duration="2s">
    <div class="middle">
        <br><br><br><br><br>
        <img src="photo/marketting/SEM_and_SEO.png" />
    </div>
    <div class="right title">
        <div class="content">
            <h2>SEO</h2>
            <p style="font-size: 12px;">معناها تهيئة المواقع لمحركات البحث ومن أشهر محركات البحث جوجل و ياهو و بينج ( Google – Yahoo – Bing ) وغيرها من محركات البحث , فعندما يريد أي مستخدم للانترنت البحث عن إجابة سؤال يريد أن يسأله أو البحث عن كورسات أو دورات للتعلم أو البحث عن منتج أو خدمة أو عنوان فإنه يتجه مباشرةً إلى محركات البحث و التي أشهرها محرك البحث جوجل ( Google ) ويكتب فيه ما يريد الاستفسار عنه ليقوم بعد ذلك محرك البحث بإظهار مجموعة من الصفحات تحتوي على العديد من النتائج المختلفة ولكن أغلب المستخدمين لا يتفحصون إلا الصفحات الأولى من النتائج وخاصة الصفحة الأولى لذلك يتنافس العديد من الشركات أو من يقوم بتقديم خدمة أو منتج للظهور في الصفحة الأولى فتجد أن من يظهر في أول ثلاث نتائج يأخذ نصيب الأسد من الزوار و مستخدمي الانترنت</p>
        </div>
    </div>

    <div class="left tiles">
        <br><br><br>
        <img src="photo/marketting/SEO-1.png" />
        <br>
        <img src="photo/marketting/seo-1-1.png" />

    </div>

</div>
<div class="section animate wow wow bounceInUp" data-wow-duration="2s">
    <div class="middle">
        <img src="photo/marketting/SEM-1.png" class="" />
    </div>
    <div class="left title">
        <div class="content">
            <p class="wow wow bounceInLeft" data-wow-duration="1s" style="font-size: 12px;">
                وهو تسويق في محركات البحث و هو ما تم شرحه أو توضيحه من خلال قسم الحملات الاعلانية حيث يتم عمل اعلانات
                على جوجل ادوردز و مواقع التواصل الاجتماعي ( السوشيال ميديا ) كاعلانات الفيس بوك ( Facebook advertising )
                أو اعلانات انستقرام أو انستجرام ( instagram advertising) و غيرها من مواقع السوشيال ميديا و نجد أن هناك بعض المصطلحات التي أصبحت شائعة عند التسويق بأنشطة SEM  في التسويق الالكتروني وهي ( PPC ) أو (pay per click ) الدفع مقابل النقرة  حيث يقوم المعلن بالدفع مقابل أي نقرة على الاعلان من قبل الزائر أو من شاهد الاعلان  و مصطلح أخر )
                ( CPM ) أو هو التكلفة لكل ألف ظهور و يقوم المعلن بالدفع مقابل كل مرة تظهر فيها اعلاناتهم  وتظهر الاعلانات على شكل اعلانات نصية أو اعلانات مصورة و يعتبر جوجل ادورد   ( Google Adwords ) من أشهر المنصات الاعلانية
            </p>

        </div>
    </div>
    <div class="right tiles">
        <br><br><br>

        <img src="photo/marketting/SEM1.png" style="height: 300px;width:400px;" />
    </div>
</div>
<style>
    #timeline {
        padding-top: 5%;
    }
    .timeline {
        height: 100%;
        position: relative;
    }
    .timeline canvas {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
    }
    .timeline figcaption {

        text-transform: uppercase;
        -webkit-text-stroke: 0.25px;
    }
    .timeline h2 {

        padding-bottom: 100px;
        color: #b2cde9;
    }
    .timeline h6 {
        color: #0090F5;


    }
    .timeline p,
    .timeline ol {


        padding: 3px 0 20px 0;
        color: #575757;
        text-align: justify;
        width: 70%;
    }
    .timeline ol {
        list-style: disc;
        margin-top: -20px;
        padding-left: 40px;
    }
    .timeline figure {
        float: right;
        width: 100%;
    }
    .timeline article {
        position: relative;
        width: 38%;
        overflow: hidden;
        margin-bottom: 100px;
    }
    .timeline article:first-of-type {
        float: left;
        text-align: right;
    }
    .timeline article:first-of-type p,
    .timeline article:first-of-type figure {
        float: right;
    }
    .timeline article:last-of-type {
        float: right;
    }
    .timeline article:last-of-type h2 {
        color: #c6e0aa;
    }
    .timeline article:last-of-type h6,
    .timeline article:last-of-type a {
        color: #40aa00;
    }
    .timeline article:last-of-type a:hover {
        color: #95D40D;
    }

</style>


<section id="timeline">

    <div class="timeline">
        <canvas id="cvs3"></canvas>

        <article dir="rtl">
            <h2>مميزات SEM</h2>
            <figure>
                <figcaption>أولاً</figcaption>
                <h6></h6>
                <p>
                    نتائجها سريعة بمجرد  ظهور الاعلان في محركات البحث حيث يتم استهداف كلمات معينة عند الترويج لمنتج أو خدمة ماأو لموقع و عندما يقوم مستخدم الانترنت بكتابة تلك الكلمات في محرك البحث جوجل يظهر له الاعلان     </p>
            </figure>
            <figure>
                <figcaption>
ثانياً
                </figcaption>
                <h6></h6>
                <p>
                    تستهدف جمهور معين فعند انشاء اعلان على الفيس بوك أو اتستقرام يتم تحديد الجمهور من حيث أعمارهم و اهتماماتهم و أماكنهم و دولهم
                </p>
            </figure>
            <figure>
                <figcaption>ثالثاً </figcaption>
                <h6> </h6>
                <p>
                    لا يتم الخصم من ميزانية الحملة إلا عندما يقوم المستخدم بالنقر على الاعلان وبالتالي هو أقل تكلفة من وسائل الاعلان الأخرى مثل الجرائد
                    أو التلفزيون أو الراديو أو غيرها من الاعلانات
                </p>
            </figure>
            <figure>
                <figcaption>رابعاً </figcaption>
                <h6> </h6>
                <p>
                    تم حساب نتائج الحملة بكل دقة من حيث عدد النقرات على الاعلان ونسبة الوصول للجمهور المستهدف
                </p>
            </figure>
        </article>

        <article class="text-center " style="direction: rtl">
            <h2>مميزات SEO</h2>
            <figure>
                <figcaption>أولاً</figcaption>
                <h6> </h6>
                <p>


           يعد من أهم الأدوات التسويقية التي تسهم في ظهور صفحات الموقع في صدارة محركات البحث وهي تقوم بزيادة نتائج رهيبة جداً في البحث بشكل مجاني.
            </figure>
            <figure>
                <figcaption>ثانياً</figcaption>
                <h6>  </h6>
                <p>
                    المنافسة على المستوى المحلي والعالمي عن طريق استخدام الكلمات المفتاحية المستهدفة.
                </p>
            </figure>
            <figure>
                <figcaption>ثالثاً</figcaption>
                <h6> </h6>
                <p>
                    سهولة تحويل الزائر الى عميل بطرق اسرع لأنك وصلت بشكل أكبر للزوار المستهدفين على المستوى المحلى والعالمي
                </p>
            </figure>
        </article>
        <br style="clear:both" />
    </div>

</section>
<section>
    <div class="container">
        <h3 class="text-center">Digital Marketting Concept In Picture !!</h3><br>
        <img src="photo/marketting/digital-marketing-nishta-coimbatore.gif" class="img-responsive">
    </div>
</section>







<br><br><br><br><br>

<script>
    function Timeline(cvs) {

        var self = this,
            paused = true,
            rafid = 0,
            mouse = { x: 0, y: 0 },
            canvas = cvs,
            ctx = null;

        self.lines = [];

        self.isOK = false;
        self.options = {
            speed: 0.1,
            density: 8,
            radius: 600,
        };
        self.targets = [
            [29, 32, 48, 68],
            [29, 33, 38]
        ];
        self.dotColors = [
            ['#13669b', 'rgba(19, 102, 155, 0.3)', 'rgba(19, 102, 155, 0.08)'],
            ['#7dd317', 'rgba(113, 222, 15, 0.3)', 'rgba(91, 164, 22, 0.12)'],
        ];

        self.isPaused = function () {
            return paused;
        };

        function InitDots() {
            var tl = $('.timeline');
            var top = tl.find('h2').outerHeight();

            self.lines[0].dots = [];
            var y = top;
            tl.find('article:first figure').each(function () {

                self.lines[0].dots.push([$(this).outerWidth() + 20, y + 20]);

                y += $(this).outerHeight();
            });

            self.lines[1].dots = [];
            var y = top;
            tl.find('article:last figure').each(function () {

                self.lines[1].dots.push([canvas.width - $(this).outerWidth() - 20, y + 20]);

                y += $(this).outerHeight();
            });
        }

        function OnResize() {
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;

            var wasPaused = paused;
            self.toggle(false);
            // Init lines
            self.lines[0].reset(canvas.offsetWidth / 2 - 15);
            self.lines[1].reset(canvas.offsetWidth / 2 + 15);

            InitDots();

            self.toggle(!wasPaused);
        }

        function init() {
            var result = false;
            try {
                result = !!(canvas.getContext && (ctx = canvas.getContext('2d')));

                self.lines[0] = new Line(0, canvas.offsetHeight - 100, '#4789a3', self.options, mouse);
                self.lines[1] = new Line(0, canvas.offsetHeight - 100, '#a0d59c', self.options, mouse);

            } catch (e) {
                return false;
            }

            $(canvas).mousemove(function (e) {

                if (e.offsetX) {
                    mouse.x = e.offsetX;
                    mouse.y = e.offsetY;
                }
                else if (e.layerX) {
                    mouse.x = e.layerX;
                    mouse.y = e.layerY;
                }
                else {
                    mouse.x = e.pageX - $(canvas).offset().left;
                    mouse.y = e.pageY - $(canvas).offset().top;
                }
            });

            $(window).resize(OnResize);

            OnResize();

            return result;
        }

        function Line(y, height, color, options, mouse) {
            var self = this;

            self.color = color;
            self.options = options;
            self.mouse = mouse;
            self.height = height;
            self.dots = [];
            self.y = y;

            self.points = [];

            self.reset = function (x, f) {
                self.points = [];
                for (var y = self.y; y < self.height; y += self.options.density)
                    self.points.push(new Point(x, y, self.color));
            }

            self.update = function () {
                for (var i = 0; i < self.points.length; i++)
                    self.points[i].update(self.mouse, self.options);
            }

            function Point(x, y) {
                this.y = y;
                this.x = x;
                this.base = { x: x, y: y };

                this.update = function (mouse, options) {
                    var dx = this.x - mouse.x,
                        dy = this.y - mouse.y,
                        alpha = Math.atan2(dx, dy),
                        alpha = (alpha > 0 ? alpha : 2 * Math.PI + alpha),
                        d = options.radius / Math.sqrt(dx * dx + dy * dy);

                    this.y += Math.cos(alpha) * d + (this.base.y - this.y) * options.speed;
                    this.x += Math.sin(alpha) * d + (this.base.x - this.x) * options.speed;
                }
            }
        }

        function drawCircle(p, r, color) {
            ctx.fillStyle = color;
            ctx.beginPath();
            ctx.arc(p.x, p.y, r, 0, 2 * Math.PI, true);
            ctx.closePath();
            ctx.fill();
        }

        function drawLine(p1, p2) {
            ctx.beginPath();
            ctx.moveTo(p1.x, p1.y);
            ctx.lineTo(p2.x, p2.y);
            ctx.stroke();
            ctx.closePath();
        }

        function redraw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            for (var i = 0; i < 2; i++) {
                var points = self.lines[i].points;

                ctx.beginPath();
                ctx.lineWidth = 2;
                ctx.strokeStyle = self.lines[i].color;
                ctx.moveTo(points[15].x, points[15].y);

                for (var j = 15; j < points.length - 2; j++) {
                    var point = points[j];

                    var xc = (points[j + 1].x + point.x) / 2;
                    var yc = (points[j + 1].y + point.y) / 2;


                    ctx.quadraticCurveTo(point.x, point.y, xc, yc);
                }
                ctx.stroke();
                ctx.closePath();


                // Dots
                ctx.lineWidth = 1.2;
                ctx.strokeStyle = self.dotColors[i][2];
                for (var j = 0; j < self.lines[i].dots.length; j++) {
                    var dot = self.lines[i].dots[j],
                        id = self.targets[i][j];
                    dot2 = [
                        (self.lines[i].points[id].x + self.lines[i].points[id + 1].x) / 2,
                        (self.lines[i].points[id].y + self.lines[i].points[id + 1].y) / 2,
                    ];

                    var p1 = { x: dot[0], y: dot[1] };
                    var p2 = { x: dot2[0], y: dot2[1] };


                    drawLine(p1, p2);
                    drawCircle(p1, 3, self.dotColors[i][0]);

                    drawCircle(p2, 11, self.dotColors[i][1]);
                    drawCircle(p2, 5.5, self.dotColors[i][0]);
                }
            }
        }

        function animate() {
            rafid = requestAnimationFrame(animate);

            self.lines[0].update();
            self.lines[1].update();

            redraw();
        }

        self.toggle = function (run) {
            if (!self.isOK) return false;

            if (run === undefined)
                self.toggle(!paused);

            else if (!!run && paused) {
                paused = false;
                animate();
            }
            else if (!!!run) {
                paused = true;
                cancelAnimationFrame(rafid);
            }
            return true;
        }


        self.isOK = init();
    }
    new Timeline($('#cvs3').get(0)).toggle(true);
</script>
<script>
    $(document).ready(function(){

        var $sm = 480;
        var $md = 768;

        function resizeThis() {
            $imgH = $('.middle img').width();
            if ($(window).width() >= $sm) {
                $('.left,.right,.section').css('height', $imgH);
            } else {
                $('.left,.right,.section').css('height', 'auto');
            }
        }

        resizeThis();

        $(window).resize(function(){
            resizeThis();
        });

        $(window).scroll(function() {
            $('.section').each(function(){
                var $elementPos = $(this).offset().top;
                var $scrollPos = $(window).scrollTop();

                var $sectionH = $(this).height();
                var $h = $(window).height();
                var $sectionVert = (($h/2)-($sectionH/4));


                if (($elementPos - $sectionVert) <= $scrollPos && ($elementPos - $sectionVert) + $sectionH > $scrollPos) {
                    $(this).addClass('animate');
                } else {
                    $(this).removeClass('animate');
                }
            });
        });

        $('.btn-primary').click(function(){
            alert('I lied');
        });
    });

    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
<?php include 'include/footer.php'?>
