<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
$path = 'https://nagano-cgc.or.jp/recruit_test/';
} else {
$path = 'https://nagano-cgc.or.jp/recruit/';
}
?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HXT77G1D74"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-HXT77G1D74');
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-30228181-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-30228181-1');
</script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title><?php if(!empty($title_3rd) ){ echo $title_3rd.' | '; } ?><?php if(!empty($title_2nd) ){ echo $title_2nd.' | '; } ?>採用サイト | 長野県信用保証協会</title>
<meta name="description" content="<?php if(!empty($description) ){ echo $description; } ?>" />
<meta name="robots" content="max-image-preview:large" />
<link rel="canonical" href="<?php echo $path; ?>" />
<meta property="og:locale" content="ja_JP" />
<meta property="og:site_name" content="<?php if(!empty($title_3rd) ){ echo $title_3rd.' | '; } ?><?php if(!empty($title_2nd) ){ echo $title_2nd.' | '; } ?>採用サイト | 長野県信用保証協会" />
<meta property="og:type" content="company" />
<meta property="og:title" content="<?php if(!empty($title_3rd) ){ echo $title_3rd.' | '; } ?><?php if(!empty($title_2nd) ){ echo $title_2nd.' | '; } ?>採用サイト | 長野県信用保証協会" />
<meta property="og:description" content="<?php if(!empty($description) ){ echo $description; } ?>" />
<meta property="og:url" content="<?php echo $path; ?><?php if(!empty($directory_2nd) ){ echo '/'.$directory_2nd; } ?><?php if(!empty($directory_3rd) ){ echo '/'.$directory_3rd; } ?>" />
<meta property="og:image" content="<?php echo $path; ?>assets/img/ogp.png" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php if(!empty($title_3rd) ){ echo $title_3rd.' | '; } ?><?php if(!empty($title_2nd) ){ echo $title_2nd.' | '; } ?>採用サイト | 長野県信用保証協会" />
<meta name="twitter:description" content="<?php if(!empty($description) ){ echo $description; } ?>" />
<meta name="twitter:image" content="<?php echo $path; ?>assets/img/ogp.png" />
<link rel='stylesheet' href='<?php echo $path; ?>assets/css/reset.css?ver=6.1.1' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo $path; ?>assets/css/style.css?ver=6.1.1' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo $path; ?>assets/css/swiper.min.css?ver=6.2' type='text/css' media='all' />
<link href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="<?php echo $path; ?>assets/js/intersection-observer.js"></script>