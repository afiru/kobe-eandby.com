<!DOCTYPE html>
<html>

<head>
  <?php
  $title          = "E&by｜ビジネスでのお困りごとを「いいあんばい」で解決へ。世界で闘うためのメンター、実践型事業・経営支援";
  $keyword        = "岡本裕之,E&by,メンター,コンサル,グローバル戦略, 海外展開, 非常勤顧問,経営者支援,個人インポーター,イーアンドバイ,事業開発, 経営支援, 商品企画, マーケティング戦略, 組織運営, 人材育成, 農業ビジネス, 環境事業, 教育事業, ビジネスマッチング, 越境ビジネス, 世界";
  $description    = "世界で闘いたいあなた、頑張っているのに結果が出なくて困っている経営者の皆様。60カ国以上の現場で、ブランドも看板もないところから“通れる道”だけを見つけてきた実践知で一緒に、いいあんばいを探します。";
  $thumbs         = "img/thumbs.png";
  $metaThumbs     = "img/metathumbs.png";
  $favicon        = "img/favicon.png";
  ?>
  <meta charset="UTF-8">
  <meta content="text/css" http-equiv="Content-Style-Type" />
  <meta content="text/javascript" http-equiv="Content-Script-Type" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta http-equiv="expires" content="86400">
  <meta http-equiv="Content-Language" content="ja">
  <meta name="Robots" content="max-image-preview:large">
  <meta name="Author" content="">
  <meta name="copyright" content="" />
  <title><?php echo $title; ?></title>
  <meta name="keywords" content="<?php echo $keyword; ?>" />
  <meta name="description" content="<?php echo $description; ?>" />
  <meta name="thumbnail" content="<?php echo $metaThumbs; ?>" />
  <!--
  <PageMap>
    <DataObject type="thumbnail">
      <Attribute name="src" value="<?php echo $metaThumbs; ?>"/>
      <Attribute name="width" value="100"/>
      <Attribute name="height" value="100"/>
    </DataObject>
  </PageMap>
-->
  <link rel="icon" href="<?php echo $favicon; ?>" sizes="32x32" />
  <link rel="icon" href="<?php echo $favicon; ?>" sizes="192x192" />
  <link rel="apple-touch-icon" href="<?php echo $favicon; ?>" />
  <meta name="msapplication-TileImage" content="<?php echo $favicon; ?>" />
  <link rel="canonical" href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:Url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
  <meta property="og:site_name" content="<?php echo $title; ?>" />
  <meta property="og:image" content="<?php echo $thumbs; ?>" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="<?php echo $title; ?>" />
  <meta name="twitter:description" content="<?php echo $description; ?>" />
  <meta name="twitter:image" content="<?php echo $thumbs; ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <!-- =========================
     Preconnect（必要最小限）
========================= -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://ajax.googleapis.com">
  <link rel="preconnect" href="https://cdn.jsdelivr.net">

  <!-- =========================
     Google Fonts（使用ウェイトのみ）
========================= -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- =========================
     CSS
========================= -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="/css/common.css?v=1.0.3">

  <!-- =========================
     JavaScript（順序保証 + 非ブロッキング）
========================= -->

  <!-- jQuery（CDN + フォールバック） -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
  <script>
    window.addEventListener('DOMContentLoaded', function() {
      if (typeof jQuery === 'undefined') {
        var script = document.createElement('script');
        script.src = '/js/jquery-3.7.1.min.js';
        document.head.appendChild(script);
      }
    });
  </script>

  <!-- Swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js" defer></script>

  <!-- Lenis（初期表示後に読み込み + 初期化） -->
  <script>
    window.addEventListener('load', function() {

      var script = document.createElement('script');
      script.src = 'https://unpkg.com/lenis@1.2.3/dist/lenis.min.js';

      script.onload = function() {

        const lenis = new Lenis();

        function raf(time) {
          lenis.raf(time);
          requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);

      };

      document.body.appendChild(script);

    });
  </script>

  <!-- 自作JS -->
  <script src="/js/config.js?v=1.0.3" defer></script>
  <script src="/js/bxsliderSetting.js?v=1.0.3" defer></script>
</head>

<body id="body" class="body">
  <div class="wap" id="pagetop">