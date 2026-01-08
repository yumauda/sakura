<footer class="p-footer">
    <div class="l-inner">
        <div class="p-footer__content">
            <div class="p-footer__left">
                <div class="p-footer__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-footer__home">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/footer_logo.png" media="(min-width: 768px)" width="1238" height="570" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_logo_sp.png" alt="さくら司法書士事務所" width="355" height="227">
                        </picture>
                    </a>
                </div>
                <div class="p-footer__address">
                    <p class="p-footer__address-text">
                        〒188-0011 <br class="u-mobile">東京都西東京市田無町5-2-17-304 <a href="https://maps.app.goo.gl/LYeEyak4zKD49ThFA" target="_blank" rel="noopener noreferrer">[地図]</a><br>
                        平日 9:00-18:00（休日:土日祝）<br>
                        代表司法書士：志村 理<br>
                        東京司法書士会所属 第3974号
                    </p>
                </div>
                <div class="p-footer__small">
                    <small>© 2025 さくら司法書士事務所.</small>
                </div>

            </div>
            <div class="p-footer__right">
                <ul class="p-footer__lists">
                    <li class="p-footer__list">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-footer__link">ホーム</a>
                    </li>
                    <li class="p-footer__list">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-footer__link">法務サポート</a>
                        <ul class="p-footer__subLists">
                            <li class="p-footer__subList">
                                <a href="<?php echo esc_url(home_url('/succession')); ?>" class="p-footer__subLink">遺産相続</a>
                            </li>
                            <li class="p-footer__subList">
                                <a href="<?php echo esc_url(home_url('/knowledge')); ?>" class="p-footer__subLink">相続の知識</a>
                            </li>
                            <li class="p-footer__subList">
                                <a href="<?php echo esc_url(home_url('/testament')); ?>" class="p-footer__subLink">遺言</a>
                            </li>
                            <li class="p-footer__subList">
                                <a href="<?php echo esc_url(home_url('/registration')); ?>" class="p-footer__subLink">不動産登記</a>
                            </li>
                            <li class="p-footer__subList">
                                <a href="<?php echo esc_url(home_url('/guardian')); ?>" class="p-footer__subLink">成年後見</a>
                            </li>
                            <li class="p-footer__subList">
                                <a href="<?php echo esc_url(home_url('/others')); ?>" class="p-footer__subLink">その他業務</a>
                            </li>
                        </ul>
                    </li>
                    <li class="p-footer__list">
                        <a href="<?php echo esc_url(home_url('/fee')); ?>" class="p-footer__link">料金表</a>
                        <a href="<?php echo esc_url(home_url('/office')); ?>" class="p-footer__link">事務所案内</a>
                        <a href="<?php echo esc_url(home_url('/judicial')); ?>" class="p-footer__link">司法書士紹介</a>
                        <a href="<?php echo esc_url(home_url('/faq')); ?>" class="p-footer__link">よくある質問</a>
                    </li>
                    <li class="p-footer__list">
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="p-footer__link">所長ブログ</a></a>
                        <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="p-footer__link">個人情報保護方針</a>
                        <a href="<?php echo esc_url(home_url('/form')); ?>" class="p-footer__link">お問い合わせ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="p-footer__contact-sp">
        <a href="<?php echo esc_url(home_url('/form')); ?>" class="p-footer__contact-link">
            <div class="p-footer__contact-link-icon">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/mail_sp.png" alt="" width="16" height="12">
            </div>
            <p class="p-footer__contact-link-text">ご相談・お問い合わせ</p>
        </a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>