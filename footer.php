<?php
/*
フッターテンプレート
*/
?>
</main>
<footer class="l-footer">
    <div class="p-footer">
        <div class="p-footer__inner-banner">
            <ul class="p-footer__banner">
                <li class="p-footer__banner-item"><a class="c-link--animation-op" href="https://k-sindan.smrj.go.jp/" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/img/banner-jikoshindan.png" alt="経営自己診断システム"></a></li>
                <li class="p-footer__banner-item"><a class="c-link--animation-op" href="https://www.chusho.meti.go.jp/kinyu/shikinguri/hosho/jisseki.htm" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/img/banner-hoshoujisseki.png" alt="保証実績の公表（中小企業庁ホームページ）"></a></li>
                <li class="p-footer__banner-item"><a class="c-link--animation-op" href="https://www.chusho.meti.go.jp/kinyu/keieihosyou/index.htm" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/img/banner-katsuyoujisseki.png" alt="活用実績の公表（中小企業庁ホームページ）"></a></li>
            </ul>
        </div>
        <div class="p-footer__inner-list">
            <ul class="p-footer__list">
                <li class="p-footer__list-item"><a class="c-link--animation-ub" href="<?php echo home_url('/about'); ?>">長野県信用保証協会について<span class="c-arrow"></span></a></li>
                <li class="p-footer__list-item"><a class="c-link--animation-ub" href="<?php echo home_url('/service'); ?>">借入相談<span class="c-arrow"></span></a></li>
                <li class="p-footer__list-item"><a class="c-link--animation-ub" href="<?php echo home_url('/founding'); ?>">創業相談<span class="c-arrow"></span></a></li>
                <li class="p-footer__list-item"><a class="c-link--animation-ub" href="<?php echo home_url('/consultation'); ?>">経営相談<span class="c-arrow"></span></a></li>
                <li class="p-footer__list-item"><a class="c-link--animation-ub" href="<?php echo home_url('/publicity'); ?>">広報・刊行物<span class="c-arrow"></span></a></li>
                <li class="p-footer__list-item"><a class="c-link--animation-ub" href="<?php echo home_url('/contact'); ?>">ご相談窓口<span class="c-arrow"></span></a></li>
            </ul>
        </div>
        <div class="p-footer__inner-logo">
            <figure class="p-footer__logo">
                <img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="長野県信用保証協会">
            </figure>
        </div>
        <div class="p-footer__inner-office">
            <ul class="p-footer__office">
                <li class="p-footer__office-item">
                    <p>本店営業部</p>
                    <span>〒380-0838 長野市南長野県町597-5<br>
                        TEL.026-234-7271 FAX.026-234-9630</span>
                </li>
                <li class="p-footer__office-item">
                    <p>松本営業部
                    </p>
                    <span>〒390-0852 松本市島立976-1<br>
                        TEL.0263-47-1533 FAX.0263-47-4209</span>
                </li>
                <li class="p-footer__office-item">
                    <p>上田支店</p>
                    <span>〒386-0025 上田市天神3-4-8<br>
                        TEL.0268-22-5914 FAX.0268-22-5927</span>
                </li>
                <li class="p-footer__office-item">
                    <p>飯田支店</p>
                    <span>〒395-0084 飯田市鈴加町2-19<br>
                        TEL.0265-52-1522 FAX.0265-52-1524</span>
                </li>
                <li class="p-footer__office-item">
                    <p>諏訪支店</p>
                    <span>〒392-0022 諏訪市高島1-12-18<br>
                        TEL.0266-52-1946 FAX.0266-52-1987</span>
                </li>
                <li class="p-footer__office-item">
                    <p>佐久支店</p>
                    <span>〒385-0027 佐久市佐久平駅北19-5<br>
                        TEL.0267-68-8484 FAX.0267-68-8485</span>
                </li>

                <li class="p-footer__office-item">
                    <p>伊那支店</p>
                    <span>〒396-0015 伊那市中央4634-1<br>
                        TEL.0265-72-6148 FAX.0265-72-6150</span>
                </li>
                <li class="p-footer__office-item">
                    <p>中野支店</p>
                    <span>〒383-0025 中野市三好町2-1-58<br>
                        TEL.0269-22-4528 FAX.0269-22-5442</span>
                </li>

            </ul>
        </div>
        <div class="p-footer__inner-link">
            <ul class="p-footer__link">
                <li class="p-footer__link-item c-link--animation-ub"><a href="<?php echo home_url('/link'); ?>">リンク集</a></li>
                <li class="p-footer__link-item c-link--animation-ub"><a href="<?php echo home_url('/privacy'); ?>">個人情報保護について</a></li>
                <li class="p-footer__link-item c-link--animation-ub"><a href="<?php echo home_url('/security'); ?>">情報セキュリティについて</a></li>
                <li class="p-footer__link-item c-link--animation-ub"><a href="<?php echo home_url('/use'); ?>">当サイトご利用にあたって</a></li>
                <li class="p-footer__link-item c-link--animation-ub"><a href="<?php echo home_url('/sitemap'); ?>">サイトマップ</a></li>
            </ul>
        </div>
        <div class="p-footer__inner-bottom">
            <div class="p-footer__bottom">
                <small>&copy; 2023 CREDIT GUARANTEE CORPORATION OF NAGANO-KEN.<br class="c-br--tab">
                    All rights reserved.</small>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<?php if (is_page('faq')) : ?>
<script defer type='text/javascript' src='<?php bloginfo('template_url') ?>/assets/js/faq.js' id='faq-js'></script>
<?php endif; ?>
<?php if (is_page('member')) : ?>
<script defer type='text/javascript' src='<?php bloginfo('template_url') ?>/assets/js/member.js' id='member-js'></script>
<?php endif; ?>
</body>

</html>