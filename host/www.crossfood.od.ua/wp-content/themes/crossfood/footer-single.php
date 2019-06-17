<section id="forms">


    <?php $posts = get_posts("category_name=forms&orderby=date&numberposts=1"); ?>
    <?php if ($posts) : ?>
        <?php foreach ($posts as $post) : setup_postdata($post); ?>

            <?php the_content(); ?>

        <?php endforeach; else: ?>

      <p><?php _e('“We believe that every human being deserves love, respect, and a chance to live a dignified life.”'); ?></p>

        <?php
        wp_reset_postdata();
    endif; ?>

</section>

<footer class="footer">
  <div class="wrapper footer_position">
    <div class="footer-content">

      <div class="tagline-block footer-tagline-block">

          <?php if (!is_front_page()) { ?>
        <a href="/">
            <?php } ?>
          <div class="tagline-block__img-cont footer-tagline-block__img-cont">
            <svg width="139px" height="86px" viewBox="0 0 139 86" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <title>Crossfood logo</title>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="crossfood-logo+text" fill-rule="nonzero">
                  <g id="logo-main" transform="translate(9.000000, 0.000000)">
                    <path
                         d="M63.9,4.3 C66.1,6.4 66.3,9.9 64.2,12.1 C62.1,14.3 58.6,14.5 56.4,12.4 C54.2,10.3 52.8,1.5 52.8,1.5 C52.8,1.5 61.6,2.2 63.9,4.3 L63.9,4.3 Z"
                         id="Path" fill="#65B22E"></path>
                    <path
                         d="M60.1,15.4 C58.4,15.4 56.7,14.8 55.3,13.5 C52.8,11.2 51.5,3.3 51.3,1.7 C51.2,1.2 51.4,0.8 51.7,0.5 C52,0.1 52.5,-8.8817842e-16 52.9,-8.8817842e-16 C54.5,0.1 62.4,0.8 64.9,3.2 C66.3,4.5 67.1,6.2 67.1,8.1 C67.2,10 66.5,11.8 65.2,13.2 C63.9,14.6 62,15.4 60.1,15.4 Z M54.6,3.2 C55.2,6.5 56.3,10.3 57.4,11.3 C59,12.8 61.6,12.7 63.1,11.1 C63.8,10.3 64.2,9.3 64.2,8.2 C64.2,7.1 63.7,6.1 62.9,5.4 C61.8,4.4 57.9,3.6 54.6,3.2 L54.6,3.2 Z"
                         id="Shape" fill="#100C08"></path>
                    <path
                         d="M64.4,33.9 L64.4,32.4 C64.4,31 65.5,29.9 66.9,29.9 L83.3,29.9 C82.3,12.6 62.4,15.5 61,23.7 C59.5,15.6 39.7,12.7 38.7,29.9 L38.7,30.1 C38.6,32.3 38.8,34.5 39.4,36.5 C41.9,45.8 50.9,52.6 61,52.6 C71.1,52.6 80.1,45.8 82.6,36.5 L67,36.5 C65.6,36.4 64.4,35.3 64.4,33.9 Z"
                         id="Path" fill="#65B22E"></path>
                    <path
                         d="M61,54 C50.3,54 40.6,46.8 37.9,36.8 C37.3,34.6 37,32.3 37.2,29.9 L37.2,29.7 C37.8,19.8 44.1,16 49.9,15.6 C54.5,15.3 58.8,17.2 61.1,20.1 C63.3,17.2 67.7,15.4 72.3,15.6 C78,15.9 84.4,19.8 85,29.7 C85,30.1 84.9,30.5 84.6,30.8 C84.3,31.1 83.9,31.3 83.5,31.3 L67,31.3 C66.4,31.3 66,31.8 66,32.3 L66,33.8 C66,34.4 66.5,34.8 67,34.8 L82.7,34.8 C83.2,34.8 83.6,35 83.9,35.4 C84.2,35.8 84.3,36.3 84.2,36.7 C81.4,46.8 71.7,54 61,54 Z M50.8,18.7 L50.1,18.7 C44.3,19 40.6,23.3 40.2,30 L40.2,30.2 C40.1,32.2 40.3,34.2 40.8,36.1 C43.2,44.8 51.7,51.1 61,51.1 C69.6,51.1 77.6,45.7 80.6,38 L67,38 C64.8,38 63,36.2 63,34 L63,32.5 C63,30.3 64.8,28.5 67,28.5 L81.7,28.5 C80.8,22.7 77.3,19.1 72,18.8 C67.4,18.5 63.1,20.9 62.5,24 C62.4,24.7 61.8,25.2 61,25.2 C60.2,25.2 59.7,24.7 59.5,24 C59,21 55.1,18.7 50.8,18.7 Z M8.6,37.9 L4,37.9 C1.8,37.9 0,36.1 0,33.9 L0,32.4 C0,30.2 1.8,28.4 4,28.4 L8.6,28.4 C9.4,28.4 10.1,29.1 10.1,29.9 L10.1,36.5 C10.1,37.3 9.4,37.9 8.6,37.9 Z M4,31.4 C3.4,31.4 3,31.9 3,32.4 L3,33.9 C3,34.5 3.5,34.9 4,34.9 L7.1,34.9 L7.1,31.3 L4,31.3 L4,31.4 Z"
                         id="Shape" fill="#100C08"></path>
                    <path
                         d="M39.4,37.9 L29.1,37.9 C28.3,37.9 27.6,37.2 27.6,36.4 L27.6,29.8 C27.6,29 28.3,28.3 29.1,28.3 L38.7,28.3 C39.1,28.3 39.5,28.5 39.8,28.8 C40.1,29.1 40.2,29.5 40.2,29.9 L40.2,30.1 C40.1,32.1 40.3,34.1 40.8,36 C40.9,36.5 40.8,36.9 40.5,37.3 C40.3,37.7 39.8,37.9 39.4,37.9 L39.4,37.9 Z M30.6,34.9 L37.5,34.9 C37.3,33.7 37.2,32.5 37.2,31.3 L30.6,31.3 L30.6,34.9 L30.6,34.9 Z M18.9,37.9 C18.1,37.9 17.4,37.2 17.4,36.4 L17.4,29.8 C17.4,29 18.1,28.3 18.9,28.3 C19.7,28.3 20.4,29 20.4,29.8 L20.4,36.4 C20.3,37.3 19.7,37.9 18.9,37.9 Z"
                         id="Shape" fill="#100C08"></path>
                    <path
                         d="M26.6,54 L21.4,54 C19.2,54 17.4,52.2 17.4,50 L17.4,16.4 C17.4,14.2 19.2,12.4 21.4,12.4 L26.6,12.4 C28.8,12.4 30.6,14.2 30.6,16.4 L30.6,50 C30.6,52.2 28.8,54 26.6,54 Z M21.4,15.3 C20.8,15.3 20.4,15.8 20.4,16.3 L20.4,50 C20.4,50.6 20.9,51 21.4,51 L26.6,51 C27.2,51 27.6,50.5 27.6,50 L27.6,16.4 C27.6,15.8 27.1,15.4 26.6,15.4 L21.4,15.4 L21.4,15.3 Z"
                         id="Shape" fill="#100C08"></path>
                    <path
                         d="M16.3,46.7 L11.1,46.7 C8.9,46.7 7.1,44.9 7.1,42.7 L7.1,23.6 C7.1,21.4 8.9,19.6 11.1,19.6 L16.3,19.6 C18.5,19.6 20.3,21.4 20.3,23.6 L20.3,42.7 C20.3,44.9 18.5,46.7 16.3,46.7 Z M11.1,22.6 C10.5,22.6 10.1,23.1 10.1,23.6 L10.1,42.7 C10.1,43.3 10.6,43.7 11.1,43.7 L16.3,43.7 C16.9,43.7 17.3,43.2 17.3,42.7 L17.3,23.6 C17.3,23 16.8,22.6 16.3,22.6 L11.1,22.6 Z M92.9,37.9 L67,37.9 C64.8,37.9 63,36.1 63,33.9 L63,32.4 C63,30.2 64.8,28.4 67,28.4 L92.9,28.4 C93.7,28.4 94.4,29.1 94.4,29.9 L94.4,36.5 C94.4,37.3 93.7,37.9 92.9,37.9 Z M67,31.4 C66.4,31.4 66,31.9 66,32.4 L66,33.9 C66,34.5 66.5,34.9 67,34.9 L91.5,34.9 L91.5,31.3 L67,31.3 L67,31.4 Z"
                         id="Shape" fill="#100C08"></path>
                    <path
                         d="M100.6,54 L95.4,54 C93.2,54 91.4,52.2 91.4,50 L91.4,16.4 C91.4,14.2 93.2,12.4 95.4,12.4 L100.6,12.4 C102.8,12.4 104.6,14.2 104.6,16.4 L104.6,50 C104.6,52.2 102.8,54 100.6,54 Z M95.4,15.3 C94.8,15.3 94.4,15.8 94.4,16.3 L94.4,50 C94.4,50.6 94.9,51 95.4,51 L100.6,51 C101.2,51 101.6,50.5 101.6,50 L101.6,16.4 C101.6,15.8 101.1,15.4 100.6,15.4 L95.4,15.4 L95.4,15.3 Z M118,37.9 L113.4,37.9 C112.6,37.9 111.9,37.2 111.9,36.4 L111.9,29.8 C111.9,29 112.6,28.3 113.4,28.3 L118,28.3 C120.2,28.3 122,30.1 122,32.3 L122,33.8 C122,36.1 120.2,37.9 118,37.9 Z M114.9,34.9 L118,34.9 C118.6,34.9 119,34.4 119,33.9 L119,32.4 C119,31.8 118.5,31.4 118,31.4 L114.9,31.4 L114.9,34.9 Z"
                         id="Shape" fill="#100C08"></path>
                    <path
                         d="M110.9,46.7 L105.7,46.7 C103.5,46.7 101.7,44.9 101.7,42.7 L101.7,23.6 C101.7,21.4 103.5,19.6 105.7,19.6 L110.9,19.6 C113.1,19.6 114.9,21.4 114.9,23.6 L114.9,42.7 C114.9,44.9 113.1,46.7 110.9,46.7 Z M105.7,22.6 C105.1,22.6 104.7,23.1 104.7,23.6 L104.7,42.7 C104.7,43.3 105.2,43.7 105.7,43.7 L110.9,43.7 C111.5,43.7 111.9,43.2 111.9,42.7 L111.9,23.6 C111.9,23 111.4,22.6 110.9,22.6 L105.7,22.6 Z"
                         id="Shape" fill="#100C08"></path>
                  </g>
                  <g id="text" transform="translate(0.000000, 63.000000)" fill="#1C1C1C">
                    <path
                         d="M11.1985385,15.0937671 L11.2140068,14.8602941 L14.989672,14.8602941 L14.9684004,15.1299538 C14.7859627,17.4427164 14.0898925,19.3849849 13.0369863,20.4411432 C11.8322595,21.6495911 10.1279103,22.25 7.91894515,22.25 C5.60161561,22.25 3.83646587,21.4885955 2.6080951,19.9540626 C1.36799994,18.4048832 0.75,16.1827425 0.75,13.2941176 L0.75,9.69117647 C0.75,6.81349333 1.38880616,4.59784957 2.67095633,3.04913118 C3.94287087,1.51277649 5.70624247,0.75 7.97713295,0.75 C10.2111427,0.75 11.9008144,1.37200182 13.0517388,2.62500045 C14.1216724,3.78982519 14.7647389,5.43189949 14.9840137,7.54775895 L15.0125929,7.82352941 L11.2321531,7.82352941 L11.2187958,7.58766457 C11.1441568,6.2696817 10.9048346,5.35246532 10.4987595,4.80039789 C10.0284888,4.16105525 9.19151152,3.83823529 7.97713295,3.83823529 C6.74152074,3.83823529 5.85234488,4.28957814 5.33224124,5.17483004 C4.83436849,6.02224343 4.57134044,7.38215479 4.54141225,9.28627168 L4.54135063,13.3382353 C4.54135063,15.5291052 4.7871459,17.0128816 5.28177675,17.8479914 C5.79718688,18.7181838 6.68330869,19.1617647 7.91894515,19.1617647 C9.131864,19.1617647 9.96907699,18.8506134 10.4445067,18.2334486 C10.8252145,17.7392442 11.0990843,16.5948909 11.1985385,15.0937671 Z M20.633964,14.1323529 L20.633964,21.9558824 L16.8571603,21.9558824 L16.8571603,1.04411765 L23.4296804,1.04411765 C25.5042237,1.04411765 27.1016442,1.57984724 28.2242761,2.65823496 C29.344447,3.73425864 29.9003719,5.26769261 29.9003719,7.26470588 C29.9003719,10.0138101 28.9272015,11.9231968 26.9595188,13.0167746 L26.7631924,13.1258868 L30.5002974,21.9558824 L26.3617323,21.9558824 L23.1759499,14.1323529 L20.633964,14.1323529 Z M20.633964,11.0294118 L23.3133048,11.0294118 C24.2477,11.0294118 24.9602813,10.7051636 25.4340778,10.0683474 C25.8928196,9.45176571 26.1235682,8.6354657 26.1235682,7.61764706 C26.1235682,5.32687248 25.1856694,4.14705882 23.3860396,4.14705882 L20.633964,4.14705882 L20.633964,11.0294118 Z M46.4584986,13.4264706 C46.4584986,16.2352288 45.8082565,18.4126234 44.5028455,19.9562121 C43.2066715,21.4888787 41.4108789,22.25 39.1004322,22.25 C36.7987478,22.25 34.9998644,21.4954606 33.6891356,19.9763865 C32.3697728,18.4473061 31.7031424,16.2972588 31.6841771,13.525989 L31.6841771,9.86764706 C31.6841771,6.98860496 32.337911,4.74382006 33.6499104,3.13599857 C34.9509093,1.5416578 36.7524295,0.75 39.0713383,0.75 C41.3526789,0.75 43.1404318,1.52794562 44.4510906,3.09425922 C45.7719208,4.67272817 46.4395125,6.89774175 46.4584986,9.76801415 L46.4584986,13.4264706 Z M42.6671371,9.83823529 C42.6671371,7.85419763 42.384494,6.38439674 41.8190443,5.40446393 C41.2314199,4.38610215 40.3054502,3.86764706 39.0713383,3.86764706 C37.8481785,3.86764706 36.9283387,4.36746203 36.3402349,5.34949666 C35.7739405,6.29511335 35.4809551,7.70922764 35.4609925,9.61241352 L35.4609925,13.4264706 C35.4609925,15.3553443 35.7499212,16.7705506 36.3279813,17.6983751 C36.9262516,18.6586383 37.8591125,19.1470588 39.1004322,19.1470588 C40.3026064,19.1470588 41.2112391,18.6686429 41.7998718,17.7282296 C42.3681506,16.8203342 42.6571388,15.4395074 42.6671371,13.5614826 L42.6671371,9.83823529 Z M61.1905199,6.60230795 L61.2068308,6.86764706 L57.4438493,6.86764706 L57.4268457,6.63594427 C57.3659338,5.80592 57.1419435,5.15421349 56.7558691,4.67419872 C56.2866769,4.09084175 55.6080783,3.79411765 54.7354185,3.79411765 C53.9173301,3.79411765 53.2713447,4.04596799 52.807158,4.54250859 C52.3469831,5.03475769 52.1142655,5.69424976 52.1142655,6.51470588 C52.1142655,7.16803769 52.3719442,7.76226874 52.8838762,8.28518464 C53.3728287,8.7846281 54.2158104,9.29181922 55.4235429,9.8126428 C57.4670029,10.5602887 58.9381011,11.4627977 59.8475131,12.5298126 C60.7453169,13.5832075 61.1915631,14.9239571 61.1915631,16.5588235 C61.1915631,18.3481892 60.6358269,19.737904 59.5147638,20.7400882 C58.3865141,21.748697 56.8478328,22.25 54.895435,22.25 C53.5677002,22.25 52.3599539,21.9750517 51.2696459,21.4239417 C50.186904,20.876656 49.3419888,20.0957467 48.730977,19.0772699 C48.1953232,18.184405 47.89479,17.1490709 47.8280659,15.9700075 L47.8131189,15.7058824 L51.6050104,15.7058824 L51.6179722,15.9421901 C51.6758974,16.9982311 51.9292474,17.7819103 52.3774717,18.3090106 C52.9008092,18.9244421 53.7389522,19.2352941 54.895435,19.2352941 C56.5271615,19.2352941 57.3856655,18.3248053 57.3856655,16.5882353 C57.3856655,15.6452509 57.139338,14.9276344 56.6515137,14.4344804 C56.1859122,13.9637921 55.3650946,13.4862781 54.1675794,12.9918622 C52.077886,12.1910476 50.5789364,11.2603778 49.6742959,10.1981963 C48.7816361,9.15008175 48.3374618,7.91577767 48.3374618,6.48529412 C48.3374618,4.75484228 48.9382278,3.37491574 50.1492552,2.32890186 C51.3699923,1.27450137 52.9205121,0.75 54.8081533,0.75 C56.0651379,0.75 57.1833672,1.01628569 58.1654122,1.55049277 C59.141235,2.08131511 59.8895358,2.82828468 60.4144716,3.79570252 C60.8685149,4.63247054 61.12691,5.56753401 61.1905199,6.60230795 Z M75.9884545,6.60230795 L76.0047655,6.86764706 L72.241784,6.86764706 L72.2247803,6.63594427 C72.1638684,5.80592 71.9398782,5.15421349 71.5538038,4.67419872 C71.0846116,4.09084175 70.406013,3.79411765 69.5333532,3.79411765 C68.7152647,3.79411765 68.0692794,4.04596799 67.6050927,4.54250859 C67.1449178,5.03475769 66.9122001,5.69424976 66.9122001,6.51470588 C66.9122001,7.16803769 67.1698789,7.76226874 67.6818108,8.28518464 C68.1707634,8.7846281 69.013745,9.29181922 70.2214775,9.8126428 C72.2649376,10.5602887 73.7360358,11.4627977 74.6454478,12.5298126 C75.5432515,13.5832075 75.9894977,14.9239571 75.9894977,16.5588235 C75.9894977,18.3481892 75.4337616,19.737904 74.3126985,20.7400882 C73.1844488,21.748697 71.6457674,22.25 69.6933697,22.25 C68.3656349,22.25 67.1578886,21.9750517 66.0675806,21.4239417 C64.9848387,20.876656 64.1399234,20.0957467 63.5289117,19.0772699 C62.9932578,18.184405 62.6927247,17.1490709 62.6260006,15.9700075 L62.6110535,15.7058824 L66.4029451,15.7058824 L66.4159069,15.9421901 C66.4738321,16.9982311 66.727182,17.7819103 67.1754063,18.3090106 C67.6987438,18.9244421 68.5368868,19.2352941 69.6933697,19.2352941 C71.3250962,19.2352941 72.1836002,18.3248053 72.1836002,16.5882353 C72.1836002,15.6452509 71.9372727,14.9276344 71.4494484,14.4344804 C70.9838469,13.9637921 70.1630292,13.4862781 68.9655141,12.9918622 C66.8758207,12.1910476 65.376871,11.2603778 64.4722306,10.1981963 C63.5795707,9.15008175 63.1353965,7.91577767 63.1353965,6.48529412 C63.1353965,4.75484228 63.7361624,3.37491574 64.9471899,2.32890186 C66.167927,1.27450137 67.7184467,0.75 69.6060879,0.75 C70.8630726,0.75 71.9813019,1.01628569 72.9633469,1.55049277 C73.9391697,2.08131511 74.6874705,2.82828468 75.2124063,3.79570252 C75.6664495,4.63247054 75.9248446,5.56753401 75.9884545,6.60230795 Z M88.4231289,10.1323529 L88.4231289,13.2205882 L81.7751721,13.2205882 L81.7751721,21.9558824 L77.9983685,21.9558824 L77.9983685,1.04411765 L89.2232112,1.04411765 L89.2232112,4.14705882 L81.7751721,4.14705882 L81.7751721,10.1323529 L88.4231289,10.1323529 Z M105.322923,13.4264706 C105.322923,16.2352288 104.672681,18.4126234 103.36727,19.9562121 C102.071096,21.4888787 100.275303,22.25 97.9648566,22.25 C95.6631723,22.25 93.8642889,21.4954606 92.55356,19.9763865 C91.2341973,18.4473061 90.5675668,16.2972588 90.5486016,13.525989 L90.5486016,9.86764706 C90.5486016,6.98860496 91.2023355,4.74382006 92.5143348,3.13599857 C93.8153338,1.5416578 95.6168539,0.75 97.9357627,0.75 C100.217103,0.75 102.004856,1.52794562 103.315515,3.09425922 C104.636345,4.67272817 105.303937,6.89774175 105.322923,9.76801415 L105.322923,13.4264706 Z M101.531562,9.83823529 C101.531562,7.85419763 101.248918,6.38439674 100.683469,5.40446393 C100.095844,4.38610215 99.1698746,3.86764706 97.9357627,3.86764706 C96.7126029,3.86764706 95.7927632,4.36746203 95.2046594,5.34949666 C94.6383649,6.29511335 94.3453796,7.70922764 94.325417,9.61241352 L94.325417,13.4264706 C94.325417,15.3553443 94.6143456,16.7705506 95.1924057,17.6983751 C95.7906761,18.6586383 96.7235369,19.1470588 97.9648566,19.1470588 C99.1670309,19.1470588 100.075664,18.6686429 100.664296,17.7282296 C101.232575,16.8203342 101.521563,15.4395074 101.531562,13.5614826 L101.531562,9.83823529 Z M122.310182,13.4264706 C122.310182,16.2352288 121.65994,18.4126234 120.354529,19.9562121 C119.058355,21.4888787 117.262562,22.25 114.952115,22.25 C112.650431,22.25 110.851548,21.4954606 109.540819,19.9763865 C108.221456,18.4473061 107.554825,16.2972588 107.53586,13.525989 L107.53586,9.86764706 C107.53586,6.98860496 108.189594,4.74382006 109.501593,3.13599857 C110.802592,1.5416578 112.604113,0.75 114.923021,0.75 C117.204362,0.75 118.992115,1.52794562 120.302774,3.09425922 C121.623604,4.67272817 122.291196,6.89774175 122.310182,9.76801415 L122.310182,13.4264706 Z M118.51882,9.83823529 C118.51882,7.85419763 118.236177,6.38439674 117.670727,5.40446393 C117.083103,4.38610215 116.157133,3.86764706 114.923021,3.86764706 C113.699862,3.86764706 112.780022,4.36746203 112.191918,5.34949666 C111.625624,6.29511335 111.332638,7.70922764 111.312676,9.61241352 L111.312676,13.4264706 C111.312676,15.3553443 111.601604,16.7705506 112.179664,17.6983751 C112.777935,18.6586383 113.710796,19.1470588 114.952115,19.1470588 C116.15429,19.1470588 117.062922,18.6686429 117.651555,17.7282296 C118.219834,16.8203342 118.508822,15.4395074 118.51882,13.5614826 L118.51882,9.83823529 Z M129.999721,21.9558824 L124.765521,21.9558824 L124.765521,1.04411765 L130.116097,1.04411765 C132.517846,1.04411765 134.423486,1.8086078 135.845915,3.34623883 C137.27356,4.88950794 137.998543,7.00905643 138.026964,9.71114372 L138.026964,13.1764706 C138.026964,15.924137 137.316287,18.0751363 135.888778,19.632547 C134.466334,21.1844309 132.507134,21.9558824 129.999721,21.9558824 Z M128.542324,18.8676471 L130.072456,18.8676471 C131.58358,18.8676471 132.652267,18.4524405 133.282157,17.629944 C133.897926,16.8258863 134.219951,15.4785364 134.250133,13.5519261 L134.250133,9.82352941 C134.250133,7.75598257 133.959388,6.32958523 133.375724,5.49628229 C132.777346,4.64197209 131.769124,4.18887091 130.363565,4.14727648 L128.792324,4.14705882 L128.542324,4.14705882 L128.542324,18.8676471 Z"
                         id="Shape"></path>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <!--          <div class="tagline-block__img-cont footer-tagline-block__img-cont"-->
          <!--               data-bg-src="//crossfood.od.ua/wp-content/themes/crossfood/src/img/dsg/logo-main.svg"></div>-->
          <!--          <div class="footer-tagline-block__header-cont">-->
          <!--            <h3 class="footer-tagline-block__header">--><?php //bloginfo("name"); ?><!--</h3>-->
          <!--          </div>-->
          <div class="tagline-block__text-cont footer-tagline-block__text-cont">
            <p class="tagline-block__text footer-tagline-block__text">
                <?php $post = get_post($post_id = 222);
                echo $post->post_content; ?>
            </p>
          </div>
            <?php if (!is_front_page()) { ?>
        </a>
      <?php } ?>
      </div>

      <div class="contact-block footer-contact-block">
        <div class="footer-contact-block__text-cont">
          <p class="contact-block__text footer-contact-block__text">
              <?php $post = get_post($post_id = 230);
              echo $post->post_content; ?>
          </p>
        </div>
        <div class="footer-contact-block__link-cont">
            <?php $post = get_post($post_id = 224);
            echo $post->post_content; ?>
        </div>
        <div class="footer-contact-block__tel-cont">
            <?php $post = get_post($post_id = 233);
            echo $post->post_content; ?>
        </div>
        <div class="footer-contact-block__btn-cont">
          <button data-meta-node data-target="form_1" data-action="activate"
                  class="button button_bordered-dark footer-button-btn">
            Написать нам
            <!--            Связаться с нами-->
          </button>
        </div>

      </div>
    </div>
  </div>
</footer>


<link rel="stylesheet" href="//crossfood.od.ua/wp-content/themes/crossfood/src/css/fonts.css">

<!-- Facebook Pixel Code -->
<script>
  !function (f, b, e, v, n, t, s) {
    if(f.fbq) return;
    n = f.fbq = function () {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments);
    };
    if(!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s);
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '250533495468251');
  fbq('track', 'PageView');
  fbq('track', 'ViewContent');
  fbq('track', 'InitiateCheckout');
  fbq('track', 'Purchase', {value : '0.00', currency : 'USD'});
  fbq('track', 'Lead');
</script>
<noscript>
  <img height="1" width="1"
       src="https://www.facebook.com/tr?id=250533495468251&ev=PageView
	&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-97004051-1"></script>-->
<!--<script>-->
<!--  window.dataLayer = window.dataLayer || [];-->
<!---->
<!--  function gtag() {-->
<!--    dataLayer.push(arguments);-->
<!--  }-->
<!---->
<!--  gtag('js', new Date());-->
<!---->
<!--  gtag('config', 'UA-97004051-1');-->
<!--</script>-->


<!-- Yandex.Metrika counter -->
<!--<script type="text/javascript">-->
<!--  (function (d, w, c) {-->
<!--    (w[c] = w[c] || []).push(function () {-->
<!--      try {-->
<!--        w.yaCounter44057639 = new Ya.Metrika({-->
<!--          id : 44057639,-->
<!--          clickmap : true,-->
<!--          trackLinks : true,-->
<!--          accurateTrackBounce : true,-->
<!--          webvisor : true,-->
<!--          trackHash : true-->
<!--        });-->
<!--      } catch (e) {-->
<!--      }-->
<!--    });-->
<!---->
<!--    var n = d.getElementsByTagName('script')[0],-->
<!--      s = d.createElement('script'),-->
<!--      f = function () {-->
<!--        n.parentNode.insertBefore(s, n);-->
<!--      };-->
<!--    s.type = 'text/javascript';-->
<!--    s.async = true;-->
<!--    s.src = 'https://mc.yandex.ru/metrika/watch.js';-->
<!---->
<!--    if(w.opera == '[object Opera]') {-->
<!--      d.addEventListener('DOMContentLoaded', f, false);-->
<!--    } else {-->
<!--      f();-->
<!--    }-->
<!--  })(document, window, 'yandex_metrika_callbacks');-->
<!--</script>-->
<!--<noscript>-->
<!--  <div><img src="https://mc.yandex.ru/watch/44057639" style="position:absolute; left:-9999px;" alt=""/></div>-->
<!--</noscript>-->
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>
</body>
</html>