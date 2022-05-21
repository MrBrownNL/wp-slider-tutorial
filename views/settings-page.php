<div class="wrap">
	<h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    <?php
        $active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'main_options';
    ?>
    <h2 class="nav-tab-wrapper">
        <a href="?page=mv_slider_admin&tab=main_options" class="nav-tab <?php echo $active_tab === 'main_options' ? 'nav-tab-active' : '' ?>"><?php esc_html_e('Main options', 'mv-slider'); ?></a>
        <a href="?page=mv_slider_admin&tab=additional_options" class="nav-tab <?php echo $active_tab === 'additional_options' ? 'nav-tab-active' : '' ?>"><?php esc_html_e('Additional options', 'mv-slider'); ?></a>
    </h2>
    <form action="options.php" method="post">
        <?php
            settings_fields('mv_slider_group');

            if ($active_tab === 'main_options') {
                do_settings_sections('mv_slider_page_1');
            } else {
                do_settings_sections('mv_slider_page_2');
            }

            submit_button(esc_html__('Save Settings', 'mv-slider'));
        ?>
    </form>
</div>
