<?php
/*
ヘッダーテンプレート
*/
?>
<?php
if (!isset($_SESSION['login_token']) || !isset($_SESSION['check_token'])) {
    $_SESSION['login_token'] = '';
    $_SESSION['check_token'] = '';
}
$this_url = $_SERVER['REQUEST_URI'];
//$this_url = home_url();
if (strstr($this_url, '/cms/member/login')) {
} else {
    if (strstr($this_url, '/cms/member')) {
        if (!isLogin($_SESSION['login_token'])) {
            header('location: /cms/member/login/');
            exit();
        }
    }
}

if (!isset($_SESSION['login_token2']) || !isset($_SESSION['check_token2'])) {
    $_SESSION['login_token2'] = '';
    $_SESSION['check_token2'] = '';
}
if (strstr($this_url, '/cms/member/honbu/login_h')) {
} else {
    if (strstr($this_url, '/cms/member/honbu')) {
        if (!isLogin($_SESSION['login_token2'])) {
            header('location: /cms/member/honbu/login_h/');
            exit();
        }
    }
}

global $tmpPath;
$tmpPath = get_template_directory_uri();
global $sitePath;
$sitePath = home_url();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <?php get_template_part('inc/ga'); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <?php if (is_page('simulation')) : ?>
        <script defer type='text/javascript' src='<?php bloginfo('template_url') ?>/assets/js/simulation.js' id='faq-js'></script>
    <?php endif; ?>
</head>

<body class="l-body">
    <header class="l-header">
        <div class="p-header">
            <figure class="p-header__logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="長野県信用保証協会">
                </a>
            </figure>

            <div class="p-header__inner p-header__pc">
                <div class="p-header__link">
                    <ul class="p-header__link-list">
                        <li class="p-header__link-item c-link--animation-ub"><a href="<?php echo home_url('/beginners'); ?>">はじめての方へ</a></li>
                        <li class="p-header__link-item c-link--animation-ub"><a href="<?php echo home_url('/simulation'); ?>">信用保証料シミュレーション</a></li>
                        <li class="p-header__link-item c-link--animation-ub"><a href="<?php echo home_url('/notice'); ?>">お知らせ</a></li>
                    </ul>
                    <div class="p-header__link-recruit"><a href="<?php echo home_url('/recruit'); ?>">採用情報</a></div>

                    <div class="p-header__link-key">
                        <a href="<?php echo home_url('/member/login'); ?>">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.952" height="17" viewBox="0 0 12.952 17">
                                    <path id="Icon_material-lock" data-name="Icon material-lock" d="M17.333,7.167h-.81V5.548a4.048,4.048,0,0,0-8.1,0V7.167h-.81A1.624,1.624,0,0,0,6,8.786v8.1A1.624,1.624,0,0,0,7.619,18.5h9.714a1.624,1.624,0,0,0,1.619-1.619v-8.1A1.624,1.624,0,0,0,17.333,7.167Zm-4.857,7.286A1.619,1.619,0,1,1,14.1,12.833,1.624,1.624,0,0,1,12.476,14.452Zm2.51-7.286H9.967V5.548a2.51,2.51,0,0,1,5.019,0Z" transform="translate(-6 -1.5)" fill="#fff" />
                                </svg>
                            </span>
                            金融機関のみなさまへ
                        </a>
                    </div>
                </div>
                <div class="p-header__nav-container">
                    <nav class="p-header__nav">
                        <ul class="p-header__nav-list">
                            <li class="p-header__nav-item c-link--animation-ub"><a href="<?php echo home_url('/about'); ?>">長野県信用保証協会について</a></li>
                            <li class="p-header__nav-item c-link--animation-ub"><a href="<?php echo home_url('/service'); ?>">借入相談</a></li>
                            <li class="p-header__nav-item c-link--animation-ub"><a href="<?php echo home_url('/founding'); ?>">創業相談</a></li>
                            <li class="p-header__nav-item c-link--animation-ub"><a href="<?php echo home_url('/consultation'); ?>">経営相談</a></li>
                            <li class="p-header__nav-item c-link--animation-ub"><a href="<?php echo home_url('/publicity'); ?>">広報・刊行物</a></li>
                            <span class="p-header__nav-border"></span>
                            <li class="p-header__nav-item c-link--animation-ub"><a href="<?php echo home_url('/contact'); ?>">ご相談窓口</a></li>
                        </ul>
                    </nav>
                    <form class="p-header__nav-search" method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>">
                        <input type="text" name="s" id="s" class="c-searchbox" placeholder="キーワードを入力">
                        <button class="p-header__nav-search--button">
                            <svg id="Icon_-_Search" data-name="Icon - Search" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <rect id="長方形_693" data-name="長方形 693" width="16" height="16" fill="none" />
                                <path id="パス_208" data-name="パス 208" d="M15.9,14.5l-3.3-3.3A6.847,6.847,0,0,0,14,7,6.957,6.957,0,0,0,7,0,6.957,6.957,0,0,0,0,7a6.957,6.957,0,0,0,7,7,6.847,6.847,0,0,0,4.2-1.4l3.3,3.3ZM2,7A4.951,4.951,0,0,1,7,2a4.951,4.951,0,0,1,5,5,4.951,4.951,0,0,1-5,5A4.951,4.951,0,0,1,2,7Z" fill="#00ad9b" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <div class=" p-header__inner p-header__sp">
                <button class="p-header__menu-button">
                </button>
                <div class="p-header__menu-design">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
            <div class="p-header__menu-outer">
                <div class="p-header__menu-container">
                    <figure class="p-header__logo">
                        <a href="./">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="長野県信用保証協会">
                        </a>
                    </figure>
                    <nav class="p-header__spNav">
                        <ul class="p-header__spNav-list">
                            <li class="p-header__spNav-item"><a href="<?php echo home_url('/about'); ?>">
                                    <p>長野県信用保証協会について</p><span class="c-arrow"></span>
                                </a></li>
                            <li class="p-header__spNav-item"><a href="<?php echo home_url('/service'); ?>">
                                    <p>借入相談</p><span class="c-arrow"></span>
                                </a></li>
                            <li class="p-header__spNav-item"><a href="<?php echo home_url('/founding'); ?>">
                                    <p>創業相談</p><span class="c-arrow"></span>
                                </a></li>
                            <li class="p-header__spNav-item"><a href="<?php echo home_url('/consultation'); ?>">
                                    <p>経営相談</p><span class="c-arrow"></span>
                                </a></li>
                            <li class="p-header__spNav-item"><a href="<?php echo home_url('/contact'); ?>">
                                    <p>ご相談窓口</p><span class="c-arrow"></span>
                                </a></li>
                            <li class="p-header__spNav-item"><a href="<?php echo home_url('/publicity'); ?>">
                                    <p>広報・刊行物</p><span class="c-arrow"></span>
                                </a></li>
                        </ul>
                        <div class="p-header__spNav-box">
                            <input type="text" name="" class="p-header__spNav-search c-searchbox" placeholder="キーワードを入力">
                            <button class="p-header__spNav-searchbutton">
                                <svg id="Icon_-_Search" data-name="Icon - Search" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <rect id="長方形_693" data-name="長方形 693" width="16" height="16" fill="none" />
                                    <path id="パス_208" data-name="パス 208" d="M15.9,14.5l-3.3-3.3A6.847,6.847,0,0,0,14,7,6.957,6.957,0,0,0,7,0,6.957,6.957,0,0,0,0,7a6.957,6.957,0,0,0,7,7,6.847,6.847,0,0,0,4.2-1.4l3.3,3.3ZM2,7A4.951,4.951,0,0,1,7,2a4.951,4.951,0,0,1,5,5,4.951,4.951,0,0,1-5,5A4.951,4.951,0,0,1,2,7Z" fill="#00ad9b" />
                                </svg>
                            </button>
                        </div>
                    </nav>
                    <div class="p-header__spNav-bottom">
                        <ul class="p-header__spLink-list">
                            <li class="p-header__spLink-item"><a href="<?php echo home_url('/about'); ?>">はじめての方へ</a></li>
                            <li class="p-header__spLink-item"><a href="<?php echo home_url('/simulation'); ?>">信用保証料シミュレーション</a></li>
                            <li class="p-header__spLink-item"><a href="<?php echo home_url('/notice'); ?>">お知らせ</a></li>
                        </ul>
                        <div class="p-header__link-recruit">
                            <a href="" target="_blank">採用情報</a>
                        </div>
                        <div class="p-header__link-key">
                            <a href="<?php echo home_url('/member/login'); ?>">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.952" height="17" viewBox="0 0 12.952 17">
                                        <path id="Icon_material-lock" data-name="Icon material-lock" d="M17.333,7.167h-.81V5.548a4.048,4.048,0,0,0-8.1,0V7.167h-.81A1.624,1.624,0,0,0,6,8.786v8.1A1.624,1.624,0,0,0,7.619,18.5h9.714a1.624,1.624,0,0,0,1.619-1.619v-8.1A1.624,1.624,0,0,0,17.333,7.167Zm-4.857,7.286A1.619,1.619,0,1,1,14.1,12.833,1.624,1.624,0,0,1,12.476,14.452Zm2.51-7.286H9.967V5.548a2.51,2.51,0,0,1,5.019,0Z" transform="translate(-6 -1.5)" fill="#fff" />
                                    </svg>
                                </span>
                                金融機関のみなさまへ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-header__foundation"></div>
        </div>
        <div class="p-header__shadow active"></div>
    </header>
    <main class="l-main">