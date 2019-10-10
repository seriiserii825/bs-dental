<div class="footer">
    <div class="row">
        <div class="footer__content">
            <div class="footer__item">
                <h5><?php echo carbon_get_theme_option('crb_footer_menu_title' . get_lang()); ?></h5>

				<?php wp_nav_menu([
					'theme_location' => 'footer-menu',
					'menu' => '',
					'container' => '',
					'container_class' => '',
					'container_id' => '',
					'menu_class' => 'list-links',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth' => 0,
					'walker' => '',]); ?>

            </div>
            <div class="footer__item">
                <div class="map">
                    <?php echo do_shortcode('[yamap center="46.9524,28.7706" height="22rem" controls="" zoom="15" type="yandex#map" mobiledrag="0"][yaplacemark  coord="46.9524,28.7706" icon="islands#dotIcon" color="#1e98ff"][/yamap]'); ?>
                </div>
            </div>
            <div class="footer__item">
                <h5><?php echo esc_html__('Contact Us', 'bs-dental') ?></h5>

                <ul class="footer-contacts-list">
                    <li>
                        <p>
                            <span class="footer-contacts-list__title"><?php echo esc_html__('Address', 'bs-dental') ?> : </span>
                            <span><?php echo carbon_get_theme_option('crb_address' . get_lang()); ?></span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span class="footer-contacts-list__title"><?php echo esc_html__('Phone', 'bs-dental') ?> : </span>
                            <span >
                            <a href="tel:<?php echo clear_phone(carbon_get_theme_option('crb_phone')) ?>"><?php echo carbon_get_theme_option('crb_phone') ?></a>
                            <a href="tel:<?php echo clear_phone(carbon_get_theme_option('crb_phone2')) ?>"><?php echo carbon_get_theme_option('crb_phone2') ?></a>
                            <a href="tel:<?php echo clear_phone(carbon_get_theme_option('crb_phone3')) ?>"><?php echo carbon_get_theme_option('crb_phone3') ?></a>
                        </span>
                        </p>
                    </li>

                    <li>
                        <p>
                            <span class="footer-contacts-list__title">Email :</span>
                            <span><a href="mailto:<?php echo carbon_get_theme_option('crb_email'); ?>"><?php echo carbon_get_theme_option('crb_email'); ?></a></span>
                        </p>

                    </li>
                </ul>
<!--                <h5>--><?php //echo esc_html__('Opening Hours', 'bs-dental') ?><!--</h5>-->

                <ul class="list-work-times">
		            <?php $footer_hours = carbon_get_theme_option('crb_footer_hours'); ?>
		            <?php foreach ($footer_hours as $item): ?>
                        <li>
                            <p>
                                <span><?php echo $item['days' . get_lang()]; ?></span>

                                <span><?php echo $item['hours']; ?></span>
                            </p>
                        </li>
		            <?php endforeach; ?>

                </ul><!-- /.list-work-times -->

            </div>
        </div>
    </div><!-- /.row -->

    <div class="row">
        <p class="copyright"><?php echo carbon_get_theme_option('crb_footer_copyright_text'.get_lang()); ?></p>
        <!-- /.copyright -->
    </div><!-- /.row -->
</div><!-- /.wrapper -->
<?php wp_footer(); ?>
</body>
</html>
