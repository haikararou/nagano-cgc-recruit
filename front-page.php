<?php

/**
 * トップページのテンプレート
 */
/*
Template Name: トップページのテンプレート
 */
get_header(); ?>

<section class="l-wrapper--top">
    <div class="p-top-head">
        <div class="p-top-head__img">
            <img src="<?php bloginfo('template_url') ?>/assets/img/top.jpg" alt="">
            <div class="p-top-head__bunner">
                <a href="http://nagano-cgc-orjp.check-xbiz.jp/cms/notice/notice4301/">
                    <p>新型コロナウイルス感染症の<br class="c-br--tab-r">
                        影響を受けている皆さまへ</p>
                </a>
            </div>
            <p class="p-top-head__text">
                明日を拓く一歩を、<br>
                いつも力強くサポート。
            </p>
        </div>

        <div class="p-top-head__box">
            <div class="p-top-head__inner">
                <figure class="p-top-head__usapokun">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/usapokun.png" alt="ウサポくん 長野県信用保証協会イメージキャラクター">
                </figure>
                <div class="p-top-head__item-container">
                    <div class="p-top-head__item p-top-head__item--01">
                        <p class="p-top-head__item-number">01</p>
                        <div class="p-top-head__item-right">
                            <div class="p-top-head__item-inner">
                                <p>創業相談</p>
                                <a class="c-button p-top-head__more" href="<?php echo home_url('/founding'); ?>">
                                    <p>詳しく<br class="c-br--640">見る</p>
                                </a>
                            </div>
                            <p class="p-top-head__item-text">
                                これから事業を開始する方や<br>
                                事業を始めて間もない方を応援しています。
                            </p>
                        </div>
                    </div>
                    <div class="p-top-head__item p-top-head__item--02">
                        <p class="p-top-head__item-number">02</p>
                        <div class="p-top-head__item-right">
                            <div class="p-top-head__item-inner">
                                <p>経営相談</p>
                                <a class="c-button p-top-head__more" href="<?php echo home_url('/consultation'); ?>">
                                    <p>詳しく<br class="c-br--640">見る</p>
                                </a>
                            </div>
                            <p class="p-top-head__item-text">
                                中小企業の皆さまの良きパートナーとして、<br class="c-br--lap">
                                経営支援サービスを実施しています。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="p-top-head__notice">
                <div class="p-top-head__notice-head">ご注意ください</div>
                <div class="p-top-head__ticker-container">
                    <ul>
                        <li class="p-top-head__ticker-item"><a href="#">当協会のメールアドレスを偽装した詐欺メールについて</a></li>
                    </ul>
                </div>
            </div> -->
            <?php
            $args = array(
                'post_type' => 'notice',
                'posts_per_page' => 5,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cate_notice',
                        'terms' => 'important',
                        'field' => 'slug',
                    ),
                ),
                'meta_query' => [
                    [
                        'key' => 'top_important',
                        'value' => '1',
                        'compare' => '='
                    ],
                ],
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) {
                echo '<div class="p-top-head__notice">';
                echo '<div class="p-top-head__notice-head">ご注意ください</div>';
                echo '<div class="p-top-head__ticker-container">';
                echo '<ul>';
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $url = get_the_permalink();
                    $title = get_the_title();
                    $date = get_post_time('Y.m.d');
                    echo '<li class="p-top-head__ticker-item">';
                    echo '<a href="' . $url . '" class="link">' . $title . '</a>';
                    echo '</li>';
                }
                echo '</ul>';
                echo '</div>';
                echo '</div>';
            }
            wp_reset_postdata();
            ?>





        </div>
    </div>
    <article class="p-top-service">
        <h2>借入相談</h2>
        <ul class=" p-top-service__container">
            <li class="p-top-service__item">
                <a class="c-link--animation-service" href="#">
                    <p class="p-top-service__lead">これから創業される事業者さま、創業間もない事業者さま</p>
                    <p class="p-top-service__link c-link--animation-ub">創業関連保証</p>
                    <div class="p-top-service__check">
                        <p>無担保による借入</p>
                        <p>保証料率0.8％以下</p>
                    </div>
                </a>
            </li>
            <li class="p-top-service__item">
                <a class="c-link--animation-service" href="#">
                    <p class="p-top-service__lead">反復継続的かつ安定的な資金調達をしたい事業者さま</p>
                    <p class="p-top-service__link c-link--animation-ub">事業者カードローン保証</p>
                    <div class="p-top-service__check">
                        <p>借入都度の申込手続き不要</p>
                        <p>保証期間２年で更新も可</p>
                    </div>
                </a>
            </li>
            <li class="p-top-service__item">
                <a class="c-link--animation-service" href="#">
                    <p class="p-top-service__lead">金融機関とともに経営向上に取り組む事業者さま</p>
                    <p class="p-top-service__link c-link--animation-ub">伴走支援型特別保証</p>
                    <div class="p-top-service__check">
                        <p>金融機関の継続的な伴走支援</p>
                        <p>据置期間最大５年間</p>
                    </div>
                </a>
            </li>
            <li class="p-top-service__item">
                <a class="c-link--animation-service" href="#">
                    <p class="p-top-service__lead">事業承継をお考えの事業者さま、事業承継後間もない事業者さま</p>
                    <p class="p-top-service__link c-link--animation-ub">事業承継特別保証</p>
                    <div class="p-top-service__check">
                        <p>経営者保証不要</p>
                        <p>専門家による確認で保証料引き下げ</p>
                    </div>
                </a>
            </li>
            <li class="p-top-service__item">
                <a class="c-link--animation-service" href="#">
                    <p class="p-top-service__lead">小規模企業者の皆さま</p>
                    <p class="p-top-service__link c-link--animation-ub">小口零細企業保証</p>
                    <div class="p-top-service__check">
                        <p>原則 無担保・無保証人による借入</p>
                        <p>保証限度額2,000万円以内</p>
                    </div>
                </a>
            </li>
            <li class="p-top-service__item">
                <a class="c-link--animation-service" href="#">
                    <p class="p-top-service__lead">経営発達に積極的に取り組む事業者さま</p>
                    <p class="p-top-service__link c-link--animation-ub">経営発達応援保証「みらいのチカラ」</p>
                    <div class="p-top-service__check">
                        <p>運転10年、設備15年の借入可</p>
                        <p>保証料率0.2%引き下げ</p>
                    </div>
                </a>
            </li>
            <li class="p-top-service__item">
                <a class="c-link--animation-service" href="#">
                    <p class="p-top-service__lead">事業再生計画に従って事業再生に取り組む事業者さま</p>
                    <p class="p-top-service__link c-link--animation-ub">経営改善サポート保証</p>
                    <div class="p-top-service__check">
                        <p>最長15年の借入</p>
                        <p>保証料率1.0%以下</p>
                    </div>
                </a>
            </li>
            <li class="p-top-service__item">
                <a class="c-link--animation-service" href="#">
                    <p class="p-top-service__lead">災害・不況などにより経営の安定に支障が生じている事業者さま</p>
                    <p class="p-top-service__link c-link--animation-ub">セーフティネット保証 </p>
                    <div class="p-top-service__check">
                        <p>別枠で利用可能</p>
                        <p>保証料率0.8%以下</p>
                    </div>
                </a>
            </li>
        </ul>
        <div class="p-usapokun-voice p-usapokun-voice--top">
            <div class="p-usapokun-voice__container p-usapokun-voice--top__container">
                <div class="p-usapokun-voice__inner">
                    <p>この他にも様々なニーズに応じた保証制度があります。詳しくは保証協会窓口までお問い合わせください。</p>
                </div>
            </div>
            <figure class="p-usapokun-voice--top__img"><img src="<?php bloginfo('template_url') ?>/assets/img/usapokun2.png" alt="長野県信用保証協会イメージキャラクター ウサポくん"></figure>
        </div>
    </article>
    <article class="p-top-news p-news">
        <h2>お知らせ</h2>
        <div class="p-top-news__tab-outer p-news__tab-outer">
            <ul class="p-news__tab-container">
                <li class="p-news__tab-item c-link--animation-op p-tag--all"><button>すべて</button></li>
                <li class="p-news__tab-item c-link--animation-op p-tag--news"><button>ニュース</button></li>
                <li class="p-news__tab-item c-link--animation-op p-tag--hosho"><button>保証制度</button></li>
                <li class="p-news__tab-item c-link--animation-op p-tag--important"><button>重要なお知らせ</button></li>
            </ul>
        </div>
        <div class="p-top-news__list p-top-news__list--all p-news__list active">

            <?php //すべて
            query_posts(
                array(
                    'posts_per_page' => 5,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'cate_notice',
                            'terms' => array('news', 'hosho', 'recruit', 'important'),
                            'field' => 'slug',
                        ),
                    )
                )
            );
            echo '<div>';
            if (have_posts()) :
                while (have_posts()) :    the_post();
                    if ($terms = get_the_terms($post->ID, 'cate_notice')) {
                        foreach ($terms as $term) {
                            $term_slug = $term->slug;
                            $termName = str_replace('(金融)', '', ($term->name));
            ?>

                            <dl class="p-news__card">
                                <dt class="p-news__date c-link--animation-notice-date"><a href="<?php the_permalink(); ?>"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></a></dt>
                                <dd class="p-news__tag p-tag--<?php echo esc_html($term_slug); ?> p-tag__mini c-link--animation-op p-tag__mini--<?php echo esc_html($term_slug); ?>"><?php $terms = get_the_terms($post->ID, 'cate_notice');
                                                                                                                                                                                        if ($terms) {
                                                                                                                                                                                            echo $terms[0]->name;
                                                                                                                                                                                        } ?></dd>
                                <dd class="p-news__item"><a class="c-link--animation-ub" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                            </dl>
                            </a>
            <?php
                        }
                    }
                endwhile;
                echo '</div>';
            elseif (!have_posts()) : echo '<p>現在お知らせはございません。</p>';
            endif;
            wp_reset_query();
            ?>
        </div>

        <div class="p-top-news__list p-top-news__list--news p-news__list">
            <?php //ニュース
            query_posts(
                array(
                    'posts_per_page' => 5,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'cate_notice',
                            'terms' => 'news',
                            'field' => 'slug',
                        ),
                    )
                )
            );
            echo '<div>';
            if (have_posts()) :
                while (have_posts()) :    the_post();
                    if ($terms = get_the_terms($post->ID, 'cate_notice')) {
                        foreach ($terms as $term) {
                            $term_slug = $term->slug;
                            $termName = str_replace('(金融)', '', ($term->name));
            ?>
                            <a href="<?php the_permalink(); ?>">
                                <dl class="p-news__card">
                                    <dt class="p-news__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></dt>
                                    <dd class="p-news__tag p-tag--<?php echo esc_html($term_slug); ?> p-tag__mini p-tag__mini--<?php echo esc_html($term_slug); ?>"><?php $terms = get_the_terms($post->ID, 'cate_notice');
                                                                                                                                                                    if ($terms) {
                                                                                                                                                                        echo $terms[0]->name;
                                                                                                                                                                    } ?></dd>
                                    <dd class="p-news__item c-link--animation-ub"><?php the_title(); ?></dd>
                                </dl>
                            </a>
            <?php
                        }
                    }
                endwhile;
                echo '</div>';
            elseif (!have_posts()) : echo '<p>現在お知らせはございません。</p>';
            endif;
            wp_reset_query();
            ?>
        </div>

        <div class="p-top-news__list p-top-news__list--hosho p-news__list">
            <?php //保証制度
            query_posts(
                array(
                    'posts_per_page' => 5,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'cate_notice',
                            'terms' => 'hosho',
                            'field' => 'slug',
                        ),
                    )
                )
            );
            echo '<div>';
            if (have_posts()) :
                while (have_posts()) :    the_post();
                    if ($terms = get_the_terms($post->ID, 'cate_notice')) {
                        foreach ($terms as $term) {
                            $term_slug = $term->slug;
                            $termName = str_replace('(金融)', '', ($term->name));
            ?>
                            <a href="<?php the_permalink(); ?>">
                                <dl class="p-news__card">
                                    <dt class="p-news__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></dt>
                                    <dd class="p-news__tag p-tag--<?php echo esc_html($term_slug); ?> p-tag__mini p-tag__mini--<?php echo esc_html($term_slug); ?>"><?php $terms = get_the_terms($post->ID, 'cate_notice');
                                                                                                                                                                    if ($terms) {
                                                                                                                                                                        echo $terms[0]->name;
                                                                                                                                                                    } ?></dd>
                                    <dd class="p-news__item c-link--animation-ub"><?php the_title(); ?></dd>
                                </dl>
                            </a>
            <?php
                        }
                    }
                endwhile;
                echo '</div>';
            elseif (!have_posts()) : echo '<p>現在お知らせはございません。</p>';
            endif;
            wp_reset_query();
            ?>
        </div>

        <div class="p-top-news__list p-top-news__list--important p-news__list">
            <?php //重要なお知らせ
            query_posts(
                array(
                    'posts_per_page' => 5,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'cate_notice',
                            'terms' => 'important',
                            'field' => 'slug',
                        ),
                    )
                )
            );
            echo '<div>';
            if (have_posts()) :
                while (have_posts()) :    the_post();
                    if ($terms = get_the_terms($post->ID, 'cate_notice')) {
                        foreach ($terms as $term) {
                            $term_slug = $term->slug;
                            $termName = str_replace('(金融)', '', ($term->name));
            ?>
                            <a href="<?php the_permalink(); ?>">
                                <dl class="p-news__card">
                                    <dt class="p-news__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></dt>
                                    <dd class="p-news__tag p-tag--<?php echo esc_html($term_slug); ?> p-tag__mini p-tag__mini--<?php echo esc_html($term_slug); ?>"><?php $terms = get_the_terms($post->ID, 'cate_notice');
                                                                                                                                                                    if ($terms) {
                                                                                                                                                                        echo $terms[0]->name;
                                                                                                                                                                    } ?></dd>
                                    <dd class="p-news__item c-link--animation-ub"><?php the_title(); ?></dd>
                                </dl>
                            </a>
            <?php
                        }
                    }
                endwhile;
                echo '</div>';
            elseif (!have_posts()) : echo '<p>現在お知らせはございません。</p>';
            endif;
            wp_reset_query();
            ?>
        </div>
        <a class="p-top-news__more c-button" href="<?php echo home_url('/notice'); ?>">
            <p>一覧を見る</p>
        </a>
    </article>
    <article class="p-top-ymb">
        <div class="p-top-ymb__head c-text">
            <h2>信州夢追人<br>
                出演者に聞く</h2>
            <p class="c-text">新時代を切り拓き、夢に向かって邁進する経営者の活躍を紹介しています。<br class="c-br--lap-r">
                このページでは、歴代の出演者の方々のご紹介をしています。<br class="c-br--lap-r">
                放送された番組へのリンクもございますので、ぜひご視聴ください。</p>
        </div>
        <div class="p-top-ymb__btn-box">
            <button class="p-top-ymb__left"></button>
            <button class="p-top-ymb__right"></button>
        </div>
        <article class="p-top-ymb__container">
            <div class="p-top-ymb__list p-ymb-archive__list">
                <?php
                $args = array(
                    'post_type' => 'yumeoibito',
                    'posts_per_page' => 10,
                );
                $my_query = new WP_Query($args);
                while ($my_query->have_posts()) : $my_query->the_post();
                    $mainImage = get_field('yume_main_image'); //メイン画像
                    $times = get_field('yume_times'); //放送回数
                    $company = get_field('yume_company'); //企業名
                    $name = get_field('yume_name'); //名前
                    $work = get_field('yume_work'); //職業
                ?>
                    <article class="p-top-ymb__card p-ymb-archive__card">
                        <a class="c-link--animation-ymb" href="<?php the_permalink(); ?>">
                            <figure class="p-top-ymb__card-img p-ymb-archive__card-img c-figure--w3h2">
                                <img src="<?php echo $mainImage; ?>" alt="">
                                <figcaption class="p-ymb-archive__card-number"><?php echo $times; ?></figcaption>
                            </figure>
                            <div class="p-top-ymb__card-text p-ymb-archive__card-text">
                                <p class="p-ymb-archive__card-shopname"><?php echo $company; ?></p>
                                <p class="p-ymb-archive__card-name c-link--animation-ymb__name"><?php echo $name; ?><span><?php echo $work; ?></span></p>
                            </div>
                        </a>
                        <?php
                        // 投稿に紐づくタームの一覧をタクソノミーのラベルと一緒に表示
                        $post_object = get_post($post->ID); // 投稿オブジェクトを取得
                        $post_type   = $post_object->post_type; // 投稿のポストタイプを取得
                        $taxonomies  = get_object_taxonomies($post_type, 'objects'); // 投稿タイプに関連したすべてのタクソノミーを取得
                        ?>
                        <?php if (!empty($taxonomies)) : ?>
                            <ul class="p-ymb-archive__tag-list">
                                <?php foreach ($taxonomies as $taxonomy_slug => $taxonomy) : ?>
                                    <?php $terms = get_the_terms($post->ID, $taxonomy_slug); ?>
                                    <?php if (!empty($terms)) : ?>
                                        <?php foreach ($terms as $term) : ?>
                                            <li class="p-ymb-archive__tag <?php echo esc_attr($term->taxonomy); ?>"><a href="<?php echo get_term_link($term); ?>"><?php echo esc_html($term->name); ?></a></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                    </article>
                <?php endwhile; ?>
                <article class="p-top-ymb__card p-ymb-archive__card p-top-ymb__card-more">
                    <a href="<?php echo home_url('/yumeoibito'); ?>">
                        <div class="p-top-ymb__card-img p-ymb-archive__card-img p-top-ymb__card-img-more">
                            <p>MORE</p>
                        </div>
                    </a>
                </article>
            </div>
        </article>
        <a class="c-button p-top-ymb__more" href="<?php echo home_url('/yumeoibito'); ?>">
            <p>一覧を見る</p>
        </a>
    </article>
    <article class="p-top-banner">
        <figure><a class="c-link--animation-op" href="<?php echo home_url('/recruit'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/bunner-recruit.png" alt=""></a></figure>
        <figure><a class="c-link--animation-op" href="<?php echo home_url('/publicity'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/bunner-publicity.png" alt=""></a></figure>
    </article>
</section>

<?php get_footer(); ?>