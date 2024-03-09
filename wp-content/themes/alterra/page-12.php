<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alterra
 */

get_header();
?>
</head>
<div class="container-fluid">
    <div class="banner">
        <div class="logo" data-aos="fade-up">
            <h2 class="first-line">AL <span>✖️</span> TERRA</h2>
            <p class="second-line">
                <span>全て</span>
                <span>地球,テラバイト</span>
            </p>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="mission-and-business" data-aos="fade-up">
                <div class="left">
                    <div class="our-mission">
                        <h4 class="heading-title border-heading-title">OUR MISSION</h4>
                        <h4 class="title">グローバルリソースとITを駆使し、日本企業の真の躍進に貢献する</h4>
                        <p>
                            日本は、Made in
                            ⚪︎⚪︎で価値が付く数少ない国の一つです。日本企業が、日本国内だけでなく、
                        </p>
                        <p>
                            海外マーケットや海外人材などのグローバルリソースを活用することで、成長速度を指数関数的に伸ばすー助となるのが、私たちのミッションです。
                        </p>
                    </div>
                    <div class="our-business">
                        <h4 class="heading-title border-heading-title">OUR BUSINESS</h4>
                        <p>
                            <span
                                class="font-roboto">ALTERRA</span>は、ベトナムのリソースを活かした高レベル/低価格の開発力と、東南アジアを中心としたグローバルノウハウ、そして柔軟なマーケティングスキルを融合し、ビジネスの成功に伴走します。
                        </p>
                    </div>
                </div>
                <div class="right">
                    <div class="sticky-box">
                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/stickyimage.png"
                            alt="business-module" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="business-modules" data-aos="fade-up">
                <div class="item">
                    <div class="title">IT</div>
                    <div class="tag">「世界がここでつながる」</div>
                    <div class="text">グローバルに活躍するスタートアップを生</div>
                    <div class="text">み出します。</div>
                </div>
                <div class="item">
                    <div class="title">GLOBAL</div>
                    <div class="tag">「世界がここでつながる」</div>
                    <div class="text">グローバルに活躍するスタートアップを生</div>
                    <div class="text">み出します。</div>
                </div>
                <div class="item">
                    <div class="title">MARKETING</div>
                    <div class="tag">「世界がここでつながる」</div>
                    <div class="text">グローバルに活躍するスタートアップを生</div>
                    <div class="text">み出します。</div>
                </div>
            </div>
            <div class="our-service" data-aos="fade-up">
                <h4 class="heading-title border-heading-title">OUR SERVICE</h4>
                <div class="sub-title">高レベル、低価格なベトナムオフショア開発</div>
                <div class="service-grid">
                    <div class="item">
                        <div class="img">
                            <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/service1.jpg"
                                class="img-fluid" />
                        </div>
                        <div class="content">
                            <div class="title">オフショア開発（ラボ型）</div>
                            <div class="tags">
                                <p class="tag">ネイティブアプリ開発</p>
                                <p class="tag">HP制作</p>
                                <p class="tag">EC制作</p>
                                <p class="tag">システム開発</p>
                            </div>
                            <div class="text">
                                <span class="font-roboto">ALTERRA</span>
                                は、ベトナムのリソースを活かした高レベル/低価格の開発力と、東南アジアを中心としたグローバルノウハウ
                            </div>
                            <div class="text">
                                <span class="font-roboto">ALTERRA</span>
                                は、ベトナムのリソースを活かした高レベル/低価格の開発力と、東南アジアを中心としたグローバルノウハウ、そして柔軟なマーケティングスキルを融合し、ビジネスの成功に伴走します。
                            </div>
                            <div class="technoloy-list">
                                <div class="list-item">
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/ios.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/android.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/vue.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/react.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/flutter.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/laravel.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/rails.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/springboot.svg"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/mysql.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/sqlserver.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/redis.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/postgre.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/mongo.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/aws.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/nginx.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/dcoker.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/ggcloud.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                    <div class="list-item_item">
                                        <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/gitlab.png"
                                            alt="technology" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/service2.jpg"
                                class="img-fluid" />
                        </div>
                        <div class="content">
                            <div class="title">LINE構築、国内マーケティング</div>
                            <div class="text">
                                <span class="font-roboto">ALTERRA</span>
                                は、ベトナムのリソースを活かした高レベル/低価格の開発力と、東南アジアを中心としたグローバルノウ<span class="font-roboto">ALTERRA</span>
                                は、ベトナムのリソースを活かした高レベル/低価格の開発力と、東南アジアを中心としたグローバルノウハウ、そして柔軟なマーケティングスキルを融合し、ビジネスの成功に伴走します。
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/service3.jpg"
                                class="img-fluid" />
                        </div>
                        <div class="content">
                            <div class="title">海外市場調査、海外向けマーケティング</div>
                            <div class="text">
                                <span class="font-roboto">ALTERRA</span>
                                は、ベトナムのリソースを活かした高レベル/低価格の開発力と、東南アジアを中心としたグローバルノウ<span class="font-roboto">ALTERRA</span>
                                は、ベトナムのリソースを活かした高レベル/低価格の開発力と、東南アジアを中心としたグローバルノウハウ、そして柔軟なマーケティングスキルを融合し、ビジネスの成功に伴走します。
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="proof-country" data-aos="fade-up">
                <div class="title">実績のある国</div>
                <div class="grid-list">
                    <div class="item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/alterra-html/imgs/singapore.jpg)">
                        <span>Singapore</span>
                    </div>
                    <div class="item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/alterra-html/imgs/banten.jpg)">

                        <span>Banten</span>
                    </div>
                    <div class="item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/alterra-html/imgs/hanoi.jpg)">

                        <span>Hanoi</span>
                    </div>
                    <div class="item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/alterra-html/imgs/phnompenh.jpg)">

                        <span>Phnom Penh</span>
                    </div>
                    <div class="item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/alterra-html/imgs/tokyo.jpg)">

                        <span>Tokyo</span>
                    </div>
                    <div class="item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/alterra-html/imgs/bangkok.jpg)">

                        <span>Bangkok</span>
                    </div>
                    <div class="item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/alterra-html/imgs/jarkata.jpg)">

                        <span>Jakarta</span>
                    </div>
                    <div class="item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/alterra-html/imgs/hochiminh.jpg)">

                        <span>HoChiMinh City</span>
                    </div>
                    <div class="item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/alterra-html/imgs/taiwan.jpg)">
                        <span>Taiwan</span>
                    </div>
                    <div class="item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/alterra-html/imgs/shanghai.jpg)">
                        <span>Shanghai</span>
                    </div>
                </div>
            </div>
            <div class="cases swiper swiper-case" data-aos="fade-up">
                <div class="heading-title border-heading-title">CASES</div>
                <div class="grid-list swiper-wrapper">
                    <?php
                        $cases = get_posts(array(
                            'post_type'  => 'case',
                        ));

                    if ($cases) : ?>
                    <?php foreach ($cases as $case) :
                        setup_postdata($case);
                    ?>
                    <div class="item swiper-slide">
                        <div class="cover">
                            <img src="<?php echo esc_url(get_field('image', $case->ID)) ?>" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <div class="title">
                                <?php echo $case->post_title ?>
                            </div>
                            <div class="text">
                                <?php echo $case->post_content ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="members swiper swiper-member" data-aos="fade-up" id="swiper2">
                <div class="heading-title border-heading-title">MEMBER</div>
                <div class="grid-list swiper-wrapper">
                    <?php
                        $members = get_posts(array(
                            'post_type'  => 'member',
                        ));

                    if ($members) : ?>
                    <?php foreach ($members as $member) :
                        setup_postdata($member);
                    ?>
                    <div class="item swiper-slide">
                        <div class="profile-row">
                            <div class="avatar">
                                <?php if(get_field('avatar', $member->ID)): ?>
                                <img src="<?php echo esc_url(get_field('avatar', $member->ID)) ?>" alt="avatar"
                                    class="img-fluid" />
                                <?php endif; ?>
                            </div>
                            <div class="information">
                                <div class="position">
                                    <span><?php the_field('position', $member->ID) ?></span>
                                </div>
                                <div class="name">
                                    <span><?php the_field('name', $member->ID) ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <?php the_field('description', $member->ID) ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="news" data-aos="fade-up">
                <div class="heading-title border-heading-title">NEWS</div>
                <div class="grid-list">
                    <div class="item top-news__item-link">
                        <div class="created-at">
                            <span>⚫️︎</span>2024.01.10
                        </div>
                        <div class="content">
                            <div class="cover">
                                <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/news.jpg" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="main-content">
                                <div class="title">
                                    ALTERRAは、ベトナムのリソースを活かした高レベル/低価格の開発力と、東南アジアを中心としたグ
                                </div>
                                <div class="description">
                                    ALTERRAは、ベトナムのリソースを活かした高レベル/低価格の開発力と、東南アジアを中心としたグローバルノウハウ、そして柔軟なマーケティングスキルを融合し、ビジネ...
                                </div>
                            </div>
                            <div class="link">
                                <span class="top-news__item-icon">
                                    <span class="_icon">
                                        <svg width="67" height="75" viewBox="0 0 67 75" aria-hidden="true">
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M-0.003,34.088 L59.632,34.088 L59.632,41.541 L-0.003,41.541 L-0.003,34.088 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M29.814,0.917 L66.711,37.814 L61.440,43.085 L24.543,6.188 L29.814,0.917 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M66.711,37.814 L29.814,74.711 L24.543,69.440 L61.440,32.543 L66.711,37.814 Z">
                                            </path>
                                        </svg><svg width="67" height="75" viewBox="0 0 67 75" aria-hidden="true">
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M-0.003,34.088 L59.632,34.088 L59.632,41.541 L-0.003,41.541 L-0.003,34.088 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M29.814,0.917 L66.711,37.814 L61.440,43.085 L24.543,6.188 L29.814,0.917 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M66.711,37.814 L29.814,74.711 L24.543,69.440 L61.440,32.543 L66.711,37.814 Z">
                                            </path>
                                        </svg> </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item top-news__item-link">
                        <div class="created-at">
                            <span>⚫️︎</span>2024.01.10
                        </div>
                        <div class="content">
                            <div class="cover">
                                <img src="<?php bloginfo('template_directory'); ?>/alterra-html/imgs/news.jpg" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="main-content">
                                <div class="title">
                                    ALTERRAは、ベトナムのリソースを活かした高レベル/低価格の開発力と、東南アジアを中心としたグ
                                </div>
                                <div class="description">
                                    ALTERRAは、ベトナムのリソースを活かした高レベル/低価格の開発力と、東南アジアを中心としたグローバルノウハウ、そして柔軟なマーケティングスキルを融合し、ビジネ...
                                </div>
                            </div>
                            <div class="link">
                                <span class="top-news__item-icon">
                                    <span class="_icon">
                                        <svg width="67" height="75" viewBox="0 0 67 75" aria-hidden="true">
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M-0.003,34.088 L59.632,34.088 L59.632,41.541 L-0.003,41.541 L-0.003,34.088 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M29.814,0.917 L66.711,37.814 L61.440,43.085 L24.543,6.188 L29.814,0.917 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M66.711,37.814 L29.814,74.711 L24.543,69.440 L61.440,32.543 L66.711,37.814 Z">
                                            </path>
                                        </svg><svg width="67" height="75" viewBox="0 0 67 75" aria-hidden="true">
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M-0.003,34.088 L59.632,34.088 L59.632,41.541 L-0.003,41.541 L-0.003,34.088 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M29.814,0.917 L66.711,37.814 L61.440,43.085 L24.543,6.188 L29.814,0.917 Z">
                                            </path>
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M66.711,37.814 L29.814,74.711 L24.543,69.440 L61.440,32.543 L66.711,37.814 Z">
                                            </path>
                                        </svg>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- News-->
            <div class="about-us" data-aos="fade-up">
                <div class="heading-title border-heading-title">ABOUT US</div>
                <div class="content">
                    <div class="content__left">
                        <div class="item">
                            <div class="left">会社名</div>
                            <div class="right">株式会社ALTERRA</div>
                        </div>
                        <div class="item">
                            <div class="left">所在地</div>
                            <div class="right">
                                <p>東京都渋谷区道玄坂1丁目10番8号渋谷</p>
                                <p>道玄坂東急ビル2F−C</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="left">代表者</div>
                            <div class="right">阪口 瑛音</div>
                        </div>
                        <div class="item">
                            <div class="left">資本金</div>
                            <div class="right">2,000,000円</div>
                        </div>
                        <div class="item">
                            <div class="left">メール</div>
                            <div class="right">info@alterra.co.jp</div>
                        </div>
                        <div class="item">
                            <div class="left">Tel</div>
                            <div class="right">080-9421-8259</div>
                        </div>
                    </div>
                    <div class="content__right" data-aos="fade-up">
                        <?php echo do_shortcode( '[contact-form-7 id="2b28a9e" title="Contact Form Alterra"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer()?>