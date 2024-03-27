<?php 
    $header_links = get_field("header_links", "options");
    $header_button = get_field("header_button", "options");
?>

<header>
    <div class="header-container">
        <div class="logo-container">
            <div class="logo-wrap">
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_field("logo", "options"); ?>" alt=""></a>
            </div>
        </div>
        <div class="header-links-container">
            <div class="header-wrap">
                <?php foreach($header_links as $link){ ?>
                    <a href="<?php echo $link['link']['url'] ?>" class="link"><?php echo $link['link']['title']; ?></a>
                <?php } ?>
            </div>
        </div>
        <div class="header-button">
            <div class="header-button-wrap">
                <a href="<?php echo $header_button['url']; ?>"><?php echo $header_button['title']; ?></a>
            </div>
        </div>
    </div>
</header>