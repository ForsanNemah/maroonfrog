<?php
/**
 * The main template file
 * Template Name: Home Page 
 */
get_header(); 
?>

<div class="main-slider overlape">
    <div id="full-slider-wrapper">
        <div id="layerslider" style="width:100%; height:696px;">
        
            <!-- Slide 1 -->
            <div class="ls-slide" data-ls="transition2d:30; timeshift:-1000; slidedelay: 6000;">
                <img itemprop="image" src="<?php bloginfo('template_url');?>/images/maroonfrog/slider004.jpg" class="ls-bg" alt="Slide background" />
                <span class="ls-slide" style="top:290px; left:48%; font-family:raleway; color:#ffffff; border-radius:3px; padding:12px 40px; background-color:#1c3f94; font-size:20px; font-weight:200;" 
                      data-ls="offsetyout:bottom; offsetyin:top; durationin:1300; delayin:500; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">
                      ALKAFAA is an approved stockiest / supplier for all major companies like SAUDI ARAMCO, SABIC, SCECO, MARAFIQ, MAADEN, SWCC and many others.
                </span>
            </div>

            <!-- Slide 2 -->
            <div class="ls-slide" data-ls="transition2d:35; timeshift:-1000; slidedelay: 9000;">
                <img itemprop="image" src="<?php bloginfo('template_url');?>/images/maroonfrog/slider001.jpg" class="ls-bg" alt="Slide background" />
                <div class="ls-slide" style="font-family:raleway; font-weight:700; font-size:40px; text-transform:uppercase; line-height:28px; color:#f58426; top:214px; left:100px;" 
                     data-ls="offsetxout:right; offsetxin:left; durationin:700; delayin:110; easingin:easeOutElastic; fadein:false; easingout:easeInBack; fadeout:false;">Together We Are</div>
                <div class="ls-slide" style="font-family:raleway; font-size:50px; color:#ffffff; font-weight:900; top:275px; left:100px;" 
                     data-ls="offsetxout:left; offsetxin:right; durationin:900; delayin:1000; easingin:easeOutExpo; fadein:false; easingout:easeInBack; fadeout:false;">"Together We<br /> Thrive"</div> 
                <div class="ls-slide" style="line-height:28px; font-family:raleway; font-size:20px; color:#ffffff; top:445px; left:100px;" 
                     data-ls="offsetxout:left; offsetxin:right; durationin:1300; delayin:1200; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">
                     ALKAFAA is a reliable supplier for full range of Carbon Steel, Stainless Steel Pipes, Fittings, Sheets & Valve.
                </div>
                <a href="/about-us" itemprop="url" class="ls-slide slide-icon theme-btn" style="padding:16px 45px; top:539px; left:100px;" 
                   data-ls="offsetxout:left; offsetyin:bottom; durationin:1500; delayin:1300; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">
                   More About Us
                </a>
            </div>

            <!-- Slide 3 -->
            <div class="ls-slide" data-ls="transition2d:40; timeshift:-1000; slidedelay: 6000;">
                <img itemprop="image" src="<?php bloginfo('template_url');?>/images/maroonfrog/slider002.jpg" class="ls-bg" alt="Slide background" />
                <img src="<?php bloginfo('template_url');?>/images/maroonfrog/logo-alkafaa-s.png" width="160" alt="" class="ls-slide" 
                     style="top:200px; left:50%;" data-ls="offsetyout:top; offsetyin:top; durationin:700; delayin:110; easingin:easeOutBack;" />
                <h4 class="ls-slide text-color" style="top:324px; left:50%; font-family:raleway; font-size:30px; font-weight:900; text-transform:uppercase; color:#f58426;"
                    data-ls="offsetxout:left; rotatexin:90deg; durationin:900; delayin:300; easingin:easeOutBack;">Established in 1982</h4>
                <span class="ls-slide" style="top:390px; left:50%; font-family:raleway; color:#ffffff; padding:12px 40px; background-color:#1c3f94; font-size:20px;"
                      data-ls="offsetyout:bottom; offsetyin:top; durationin:1300; delayin:500; easingin:easeOutBack;">"Backed by more than 4 decades of experience"</span>
            </div>

            <!-- Slide 4 -->
            <div class="ls-slide" data-ls="transition2d:30; timeshift:-1000; slidedelay: 6000;">
                <img itemprop="image" src="<?php bloginfo('template_url');?>/images/maroonfrog/slider003.jpg" class="ls-bg" alt="Slide background" />
                <div class="ls-slide" style="top:223px; left:50%; font-family:raleway; font-size:30px; color:#ffffff; text-shadow:-2px 4px 18px rgba(0,0,0,0.15);" 
                     data-ls="offsetyout:top; offsetyin:top; durationin:700; delayin:110;">ALKAFAA is referred as the</div>
                <h3 class="ls-slide text-color" style="top:260px; left:50%; font-family:raleway; font-size:30px; color:#ffffff; text-transform:uppercase;" 
                    data-ls="offsetyout:top; rotatexin:90deg; durationin:900; delayin:300;">"Leading Stockiest Company in Saudi Arabia"</h3>
                <strong class="ls-slide" style="top:345px; left:50%; background:#1c3f94; font-size:13px; padding:14px 25px;" 
                        data-ls="offsetyout:bottom; offsetyin:top; durationin:1300; delayin:500;">Fast & Secure Delivery</strong>
            </div>

        </div> <!-- End #layerslider -->
    </div> <!-- End #full-slider-wrapper -->

    <!-- Control Buttons -->
    <div class="container text-center" style="margin-top: 20px;">
        <div class="row justify-content-center">
            <div class="col-auto">
                <button id="slider-prev" class="theme-btn" style="margin: 5px;">Prev</button>
            </div>
            <div class="col-auto">
                <button id="slider-next" class="theme-btn" style="margin: 5px;">Next</button>
            </div>
        </div>
    </div>

</div> <!-- End .main-slider -->

<!-- باقي الصفحة تبعك هنا (الأقسام الأخرى: تحميل الكتالوج، روابط الخدمات، المنتجات، الأخبار... الخ) -->
<!-- انسخ بقية الصفحة كما هي من الكود السابق -->

<!-- ... -->

<!-- جافاسكريبت لتحريك السلايدر بالازرار -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof jQuery !== 'undefined' && typeof $('#layerslider').layerSlider === 'function') {
        $('#slider-prev').click(function() {
            $('#layerslider').layerSlider('prev');
        });
        $('#slider-next').click(function() {
            $('#layerslider').layerSlider('next');
        });
    }
});
</script>

<?php get_footer(); ?>
