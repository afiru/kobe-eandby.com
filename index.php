<?php $nowPage = "top";
require_once('config.php'); ?>
<?php include_once('include/common/header/header.php'); ?>
<!--コンテンツ-->
<header id="scroll_off" class="baseHeader">
    <div class="pc_only"><?php include_once('include/layouts/index/00_headerPc.php'); ?></div>
    <div class="sp_only"><?php include_once('include/layouts/index/01_headerSp.php'); ?></div>
</header>
<?php include_once('include/layouts/index/03_headerPcGnav.php'); ?>
<main class="indexMain">
    <?php include_once('include/layouts/index/04_fvTop.php'); ?>
    <?php include_once('include/layouts/index/05_fvBtm.php'); ?>

    <?php include_once('include/layouts/index/06_made.php'); ?>
    <?php include_once('include/layouts/index/07_kadai.php'); ?>
    <?php include_once('include/layouts/index/08_strong.php'); ?>
    <?php include_once('include/layouts/index/09_kyosan.php'); ?>

    <?php include_once('include/layouts/index/10_message.php'); ?>
    <?php include_once('include/layouts/index/11_value.php'); ?>
    <?php include_once('include/layouts/index/12_brief.php'); ?>

    <?php include_once('include/layouts/index/13_special.php'); ?>

    <?php include_once('include/layouts/index/14_business.php'); ?>


    <?php include_once('include/layouts/index/20_vision.php'); ?>
    <?php include_once('include/layouts/index/21_brandMessage.php'); ?>

    <?php include_once('include/layouts/index/22_company.php'); ?>
    <?php include_once('include/layouts/index/23_contact.php'); ?>
</main>
<?php include_once('include/layouts/index/24_footer.php'); ?>
<?php include_once('include/layouts/index/25_spFixedfooter.php'); ?>
<!--コンテンツ-->
<?php include_once('include/common/footer/footer.php'); ?>