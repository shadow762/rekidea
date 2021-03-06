<?php

//** Header */
?>
<?php
wp_head();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <title><?php echo wp_get_document_title();?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>
<body>
  <?php
    $query = new WP_Query(array (
            'category_name'=>'common',
            'post_per_page'=>-1
    ));
    while ($query->have_posts()) {
        $query->the_post();
    }
  ?>
     <header>
         <div class="header">
             <div class="container-flex">
                <div class="header__logo">
                    <a href="/"><img src="<?= get_template_directory_uri()?>/img/logo_rekidea.png" alt="Рекидея лого"></a>
                </div>
                <div class="header__search-bar">
                    <form class="" action="">
                        <input id="title-search-input" type="text" placeholder="Найти лучшее для вашей рекламы..."
                               class="header__search-input">
                        <button class="header__search-btn" type="submit"></button>
                    </form>
                </div>
                <div class="header__phone-wrapper">
                    <img class="logo" src="<?= get_template_directory_uri()?>/img/phone-logo.png" alt="">

                    <a href="#">+7 (495) 369-20-79</a>
                    <img class="arrow" src="<?= get_template_directory_uri()?>/img/phone-arrow.png" alt="">
                </div>
                <div class="header__email-wrapper">
                    <? the_field('email', get_the_ID());?>
                </div>
                <div class="header__address-wrapper">
                    <? the_field('address', get_the_ID());?>
                </div>
            </div>
         </div>
         <div class="nav-wrapper">
             <nav class="container-flex">
                 <a href="#">Каталог рекламы</a>
                 <a href="#">Акции</a>
                 <a href="#">Услуги</a>
                 <a href="#">Цены</a>
                 <a href="#">Портфолио</a>
                 <a href="#">Оплата и доставка</a>
                 <a href="#">Статьи</a>
             </nav>
         </div>
     </header>