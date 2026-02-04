<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg">

    <!-- ogp -->
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/common/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/common/apple-touch-icon.png">
    <!-- css -->
    <script>
        (function(d) {
            var config = {
                    kitId: 'jrf2osh',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content="3; url=<?php echo esc_url(home_url("/")); ?>">
    <?php endif; ?>
    <?php wp_head() ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKZJXW4T');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKZJXW4T"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="p-header">
        <div class="l-inner">
            <div class="p-header__content">
                <div class="p-header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__home">
                        <h1 class="p-header__logo-text">西東京市の遺産相続や不動産登記のことなら</h1>
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/header_logo.png" alt="さくら司法書士事務所" width="431" height="38">
                    </a>
                </div>
                <nav class="p-header__nav">
                    <div class="p-header__nav-top">
                        <p class="p-header__nav-text">[ 受付時間 ] 平日 9:00-18:00</p>
                        <a href="tel:0424693092" class="p-header__nav-btn">
                            <div class="p-header__nav-icon">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/header_tel.png" alt="" width="41" height="41">
                            </div>
                            <p class="p-header__nav-tel">042-469-3092</p>
                        </a>
                    </div>
                    <ul class="p-header__lists">
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__link">ホーム</a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/office')); ?>" class="p-header__link">事務所案内</a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/judicial')); ?>" class="p-header__link">司法書士紹介</a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/faq')); ?>" class="p-header__link">よくある質問</a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="p-header__link">所長のブログ</a>
                        </li>
                    </ul>
                </nav>
                <div class="p-header__sp-tel">
                    <a href="tel:0424693092" class="p-header__sp-tel-link">
                        <div class="p-header__nav-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/images/common/header_tel.png" alt="" width="41" height="41">
                        </div>
                    </a>
                </div>
                <button class="p-header__drawer p-drawer-icon">
                    <span class="p-drawer-icon__bars">
                        <span class="p-drawer-icon__bar1"></span>
                        <span class="p-drawer-icon__bar2"></span>
                        <span class="p-drawer-icon__bar3"></span>
                    </span>
                </button>
                <div class="p-header__drawer-content p-drawer-content">
                    <div class="p-drawer-content__items">
                        <ul class="p-drawer-content__lists">
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer-content__link">ホーム</a>
                            </li>
                            <li class="p-drawer-content__list p-drawer-content__list--accordion">
                                <details class="p-drawer-accordion js-drawer-details">
                                    <summary class="p-drawer-accordion__summary js-drawer-summary">
                                        <span>遺産相続</span>
                                        <span class="p-drawer-accordion__icon"></span>
                                    </summary>
                                    <div class="p-drawer-accordion__content js-drawer-content">
                                        <ul class="p-drawer-accordion__sub-lists">
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/succession')); ?>" class="p-drawer-accordion__sub-link">遺産相続</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/succession/belongingsafter/')); ?>" class="p-drawer-accordion__sub-link">遺産整理業務</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/succession/flow/')); ?>" class="p-drawer-accordion__sub-link">遺産整理業務の流れ</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/succession/houki/')); ?>" class="p-drawer-accordion__sub-link">相続放棄</a>
                                            </li>
                                        </ul>
                                    </div>
                                </details>
                            </li>
                            <li class="p-drawer-content__list p-drawer-content__list--accordion">
                                <details class="p-drawer-accordion js-drawer-details">
                                    <summary class="p-drawer-accordion__summary js-drawer-summary">
                                        <span>相続の知識</span>
                                        <span class="p-drawer-accordion__icon"></span>
                                    </summary>
                                    <div class="p-drawer-accordion__content js-drawer-content">
                                        <ul class="p-drawer-accordion__sub-lists">
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/knowledge')); ?>" class="p-drawer-accordion__sub-link">相続の基礎知識</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/knowledge/heir/')); ?>" class="p-drawer-accordion__sub-link">相続人となる者</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/knowledge/souzokubun/')); ?>" class="p-drawer-accordion__sub-link">法定相続分</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/knowledge/isanbunkatsu/')); ?>" class="p-drawer-accordion__sub-link">遺産分割</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/knowledge/necessity/')); ?>" class="p-drawer-accordion__sub-link">相続の必要書類</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/knowledge/tax/')); ?>" class="p-drawer-accordion__sub-link">相続税・贈与税</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/knowledge/tokubetu/')); ?>" class="p-drawer-accordion__sub-link">特別受益・生前贈与・寄与分</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/knowledge/mediate/')); ?>" class="p-drawer-accordion__sub-link">調停・審判・相続人不明</a>
                                            </li>
                                        </ul>
                                    </div>
                                </details>
                            </li>
                            <li class="p-drawer-content__list p-drawer-content__list--accordion">
                                <details class="p-drawer-accordion js-drawer-details">
                                    <summary class="p-drawer-accordion__summary js-drawer-summary">
                                        <span>遺言</span>
                                        <span class="p-drawer-accordion__icon"></span>
                                    </summary>
                                    <div class="p-drawer-accordion__content js-drawer-content">
                                        <ul class="p-drawer-accordion__sub-lists">
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/testament')); ?>" class="p-drawer-accordion__sub-link">遺言</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/testament/necessity/')); ?>" class="p-drawer-accordion__sub-link">遺言の必要性と相続</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/testament/bequeath/')); ?>" class="p-drawer-accordion__sub-link">遺贈とは</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/testament/autograph/')); ?>" class="p-drawer-accordion__sub-link">自筆証書・公正証書・秘密証書遺言</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/testament/executor/')); ?>" class="p-drawer-accordion__sub-link">遺言執行者</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/testament/white/')); ?>" class="p-drawer-accordion__sub-link">遺言書の書き方、作成の流れ</a>
                                            </li>

                                        </ul>
                                    </div>
                                </details>
                            </li>
                            <li class="p-drawer-content__list p-drawer-content__list--accordion">
                                <details class="p-drawer-accordion js-drawer-details">
                                    <summary class="p-drawer-accordion__summary js-drawer-summary">
                                        <span>不動産登記</span>
                                        <span class="p-drawer-accordion__icon"></span>
                                    </summary>
                                    <div class="p-drawer-accordion__content js-drawer-content">
                                        <ul class="p-drawer-accordion__sub-lists">
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/registration')); ?>" class="p-drawer-accordion__sub-link">不動産登記</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/registration/souzoku/')); ?>" class="p-drawer-accordion__sub-link">相続登記について</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/registration/zouyo/')); ?>" class="p-drawer-accordion__sub-link">贈与登記について</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/registration/zaisan/')); ?>" class="p-drawer-accordion__sub-link">離婚による財産分与登記</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/registration/syoyu/')); ?>" class="p-drawer-accordion__sub-link">売買による所有権移転登記</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/registration/massyou/')); ?>" class="p-drawer-accordion__sub-link">抵当権抹消登記</a>
                                            </li>

                                        </ul>
                                    </div>
                                </details>
                            </li>
                            <li class="p-drawer-content__list p-drawer-content__list--accordion">
                                <details class="p-drawer-accordion js-drawer-details">
                                    <summary class="p-drawer-accordion__summary js-drawer-summary">
                                        <span>成年後見</span>
                                        <span class="p-drawer-accordion__icon"></span>
                                    </summary>
                                    <div class="p-drawer-accordion__content js-drawer-content">
                                        <ul class="p-drawer-accordion__sub-lists">
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/guardian')); ?>" class="p-drawer-accordion__sub-link">成年後見</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/guardian/meyasu/')); ?>" class="p-drawer-accordion__sub-link">成年後見制度を利用する目安</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/guardian/whats/')); ?>" class="p-drawer-accordion__sub-link">法定後見とは</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/guardian/flow/')); ?>" class="p-drawer-accordion__sub-link">法定後見開始までの流れ</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/guardian/optional/')); ?>" class="p-drawer-accordion__sub-link">任意後見とは</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/guardian/katsuyou/')); ?>" class="p-drawer-accordion__sub-link">任意後見の活用</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/guardian/flow2/')); ?>" class="p-drawer-accordion__sub-link">任意後見手続きの流れ</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/guardian/center/')); ?>" class="p-drawer-accordion__sub-link">成年後見センター・リーガルサポート、関連制度</a>
                                            </li>
                                            <li class="p-drawer-accordion__sub-list">
                                                <a href="<?php echo esc_url(home_url('/guardian/gokai/')); ?>" class="p-drawer-accordion__sub-link">成年後見制度に対する誤解</a>
                                            </li>
                                        </ul>
                                    </div>
                                </details>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/others')); ?>" class="p-drawer-content__link">その他業務</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/fee')); ?>" class="p-drawer-content__link">料金表</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/office')); ?>" class="p-drawer-content__link">事務所案内</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/judicial')); ?>" class="p-drawer-content__link">司法書士紹介</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/faq')); ?>" class="p-drawer-content__link">よくある質問</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="p-drawer-content__link">所長のブログ</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="p-drawer-content__link">個人情報保護方針</a>
                            </li>
                        </ul>
                        <div class="p-drawer-content__footer">
                            <a href="tel:0424693092" class="p-drawer-content__contact">
                                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/drawer_tel.png" alt="" width="340" height="80">
                            </a>
                            <a href="<?php echo esc_url(home_url('/form')); ?>" class="p-drawer-content__contact">
                                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/drawer_mail.png" alt="" width="340" height="80">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="p-header__page-lists">
                <li class="p-header__page-list">
                    <a href="<?php echo esc_url(home_url('/succession')); ?>" class="p-header__page-link">
                        <div class="p-header__page-icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd" fill="rgb(238, 129, 157)"
                                    d="M17.073,17.071 L17.073,17.072 C13.172,20.972 6.858,20.972 2.958,17.072 L2.958,17.071 C2.670,16.781 2.412,16.479 2.170,16.169 L2.170,18.496 C2.170,18.921 1.827,19.265 1.403,19.265 C0.979,19.265 0.636,18.921 0.636,18.496 L0.636,14.414 C0.636,13.989 0.979,13.645 1.403,13.645 L5.474,13.645 C5.898,13.645 6.241,13.989 6.241,14.414 C6.241,14.838 5.898,15.183 5.474,15.183 L3.347,15.183 C3.560,15.460 3.788,15.728 4.042,15.983 C7.343,19.283 12.688,19.283 15.989,15.982 C17.630,14.336 18.453,12.185 18.453,10.035 C18.453,9.609 18.797,9.265 19.220,9.265 C19.644,9.265 19.988,9.609 19.988,10.035 C19.988,12.580 19.011,15.127 17.073,17.071 ZM8.453,13.915 L7.671,13.915 C6.787,13.915 6.109,13.158 6.109,12.274 L6.109,9.554 C6.109,9.057 6.325,8.580 6.703,8.266 L8.807,6.522 C9.516,5.935 10.514,5.935 11.223,6.522 L13.327,8.266 C13.706,8.580 13.921,9.057 13.921,9.554 L13.921,12.274 C13.921,13.158 13.244,13.915 12.358,13.915 L11.578,13.915 C11.146,13.915 10.797,13.564 10.797,13.132 L10.797,11.858 C10.797,11.361 10.424,11.001 10.015,11.001 C9.606,11.001 9.234,11.361 9.234,11.858 L9.234,13.132 C9.234,13.564 8.884,13.915 8.453,13.915 ZM18.648,6.352 L14.577,6.352 C14.153,6.352 13.810,6.007 13.810,5.582 C13.810,5.158 14.153,4.813 14.577,4.813 L16.684,4.813 C16.471,4.536 16.243,4.268 15.988,4.013 C12.688,0.713 7.343,0.713 4.042,4.013 C2.431,5.629 1.614,7.744 1.577,9.863 C1.569,10.288 1.220,10.626 0.797,10.618 C0.372,10.611 0.036,10.260 0.043,9.836 C0.087,7.339 1.050,4.838 2.958,2.926 L2.958,2.925 C6.858,-0.975 13.172,-0.975 17.073,2.925 L17.073,2.926 C17.369,3.222 17.633,3.533 17.880,3.852 L17.880,1.500 C17.880,1.075 18.224,0.731 18.648,0.731 C19.071,0.731 19.415,1.075 19.415,1.500 L19.415,5.582 C19.415,6.007 19.071,6.352 18.648,6.352 Z" />
                            </svg>
                        </div>
                        <p class="p-header__page-text">遺産相続</p>
                    </a>
                </li>

                <li class="p-header__page-list">
                    <a href="<?php echo esc_url(home_url('/knowledge')); ?>" class="p-header__page-link">
                        <div class="p-header__page-icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 20 17">
                                <path fill-rule="evenodd" fill="rgb(238, 129, 157)"
                                    d="M19.302,16.110 L12.066,16.110 C13.240,15.493 14.886,15.186 16.191,15.186 L16.976,15.186 C17.875,15.186 18.605,14.461 18.605,13.568 L18.605,2.706 L19.302,2.706 C19.687,2.706 19.1000,3.016 19.1000,3.399 L19.1000,15.417 C19.1000,15.800 19.687,16.110 19.302,16.110 ZM16.976,14.262 L16.191,14.262 C14.684,14.262 12.766,14.644 11.457,15.388 L10.698,15.819 L10.698,2.205 L10.764,2.166 C12.267,1.313 14.461,0.857 16.191,0.857 L16.976,0.857 C17.362,0.857 17.674,1.167 17.674,1.550 L17.674,13.568 C17.674,13.950 17.362,14.262 16.976,14.262 ZM3.808,14.262 L3.023,14.262 C2.638,14.262 2.325,13.950 2.325,13.568 L2.325,1.550 C2.325,1.167 2.638,0.857 3.023,0.857 L3.808,0.857 C5.538,0.857 7.733,1.313 9.235,2.166 L9.302,2.205 L9.302,15.819 L8.543,15.388 C7.233,14.644 5.316,14.262 3.808,14.262 ZM3.808,15.186 C5.113,15.186 6.760,15.493 7.934,16.110 L0.698,16.110 C0.312,16.110 -0.000,15.800 -0.000,15.417 L-0.000,3.399 C-0.000,3.016 0.312,2.706 0.698,2.706 L1.395,2.706 L1.395,13.568 C1.395,14.461 2.125,15.186 3.023,15.186 L3.808,15.186 Z" />
                            </svg>
                        </div>
                        <p class="p-header__page-text">相続の知識</p>
                    </a>
                </li>


                <li class="p-header__page-list">
                    <a href="<?php echo esc_url(home_url('/testament')); ?>" class="p-header__page-link">
                        <div class="p-header__page-icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 22 21">
                                <path fill-rule="evenodd" fill="rgb(238, 129, 157)"
                                    d="M20.838,17.877 L19.515,17.877 C19.172,17.877 18.895,17.602 18.895,17.262 L18.895,8.247 C18.895,7.907 19.172,7.632 19.515,7.632 L20.838,7.632 C21.180,7.632 21.458,7.907 21.458,8.247 L21.458,17.262 C21.458,17.602 21.180,17.877 20.838,17.877 ZM10.620,16.584 L9.934,16.244 L4.708,16.244 C3.908,16.244 3.261,15.602 3.261,14.810 C3.261,14.017 3.908,13.375 4.708,13.375 L9.801,13.375 C10.144,13.375 10.422,13.100 10.422,12.760 C10.422,12.421 10.144,12.146 9.801,12.146 L8.827,12.146 L12.108,6.511 L16.678,8.867 L17.655,8.867 L17.655,16.858 C16.634,17.261 15.509,17.473 14.421,17.473 C13.108,17.473 11.793,17.165 10.620,16.584 ZM12.283,3.753 L10.136,2.523 L11.169,0.748 C11.397,0.356 11.903,0.222 12.298,0.449 L13.014,0.858 C13.410,1.084 13.545,1.586 13.316,1.978 L12.283,3.753 ZM7.396,12.146 L4.708,12.146 C4.647,12.146 4.587,12.149 4.528,12.153 L9.515,3.588 L11.663,4.817 L7.396,12.146 ZM1.031,14.244 L1.029,14.243 C1.029,14.243 1.026,14.242 1.024,14.240 C0.334,13.846 0.091,12.975 0.478,12.285 L2.733,8.266 C3.044,7.713 3.468,7.231 3.979,6.851 L5.734,5.545 C6.131,5.251 6.635,5.152 7.108,5.263 L2.041,13.964 C1.837,14.314 1.385,14.445 1.031,14.244 ZM1.655,17.086 L2.297,15.984 C2.679,16.753 3.425,17.313 4.310,17.444 L3.803,18.314 C3.773,18.367 3.735,18.414 3.691,18.455 L1.820,20.203 C1.462,20.538 0.884,20.207 0.997,19.732 L1.589,17.252 C1.603,17.193 1.625,17.137 1.655,17.086 ZM9.642,17.473 C9.794,17.548 10.138,17.721 10.288,17.790 L10.288,17.883 C10.288,18.675 9.640,19.318 8.841,19.318 C8.042,19.318 7.394,18.675 7.394,17.883 C7.394,18.675 6.747,19.318 5.948,19.318 C5.539,19.318 5.170,19.149 4.907,18.879 L5.725,17.473 L9.642,17.473 Z" />
                            </svg>
                        </div>
                        <p class="p-header__page-text">遺言</p>
                    </a>
                </li>
                <li class="p-header__page-list">
                    <a href="<?php echo esc_url(home_url('/registration')); ?>" class="p-header__page-link">
                        <div class="p-header__page-icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 24 21">
                                <path fill-rule="evenodd" fill="rgb(238, 129, 157)"
                                    d="M22.292,11.846 L11.1000,3.913 L1.708,11.846 L0.060,9.700 L11.1000,0.499 L17.098,4.428 L17.098,2.757 L20.557,2.757 L20.557,7.094 L23.940,9.700 L22.292,11.846 ZM20.214,12.015 L20.214,20.497 L13.892,20.497 L13.892,14.282 L10.386,14.282 L10.386,20.497 L3.786,20.497 L3.786,12.015 L11.1000,5.684 L20.214,12.015 Z" />
                            </svg>
                        </div>
                        <p class="p-header__page-text">不動産登記</p>
                    </a>
                </li>
                <li class="p-header__page-list">
                    <a href="<?php echo esc_url(home_url('/guardian')); ?>" class="p-header__page-link">
                        <div class="p-header__page-icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 24 21">
                                <path fill-rule="evenodd" fill="rgb(238, 129, 157)"
                                    d="M23.259,12.276 C22.988,12.904 22.557,14.199 21.771,15.385 C21.205,16.238 19.072,18.488 16.942,19.202 C15.912,19.543 14.719,19.611 13.418,19.393 L10.031,18.807 C7.917,18.453 5.974,18.916 4.199,20.130 L3.657,20.498 L0.323,16.081 L0.811,15.658 C2.207,14.457 3.007,13.517 3.833,12.781 C4.809,11.922 5.532,11.322 6.060,10.913 C6.074,10.900 6.074,10.900 6.087,10.900 C6.887,10.276 7.727,10.034 8.499,10.041 C8.992,10.045 9.457,10.146 9.868,10.327 C12.145,11.349 15.478,11.513 16.955,11.854 C17.335,11.936 18.459,12.195 18.459,12.767 C18.459,13.449 16.847,14.131 13.242,14.131 L11.210,14.131 L11.210,15.494 L16.115,15.494 C17.660,15.494 19.169,14.731 20.050,13.449 C20.727,12.468 21.389,11.445 22.013,11.090 C22.406,10.872 22.934,10.722 23.246,11.008 C23.517,11.254 23.517,11.676 23.259,12.276 ZM18.383,8.756 C17.223,9.735 16.949,9.985 16.630,10.261 C16.195,9.884 16.069,9.766 15.080,8.922 C12.812,6.986 11.314,5.708 11.314,3.740 C11.314,1.921 12.641,0.497 14.337,0.497 C15.479,0.497 16.209,1.141 16.658,1.801 C17.133,1.143 17.889,0.497 19.027,0.497 C20.723,0.497 22.051,1.921 22.051,3.740 C22.051,5.658 20.512,6.958 18.383,8.756 Z" />
                            </svg>
                        </div>
                        <p class="p-header__page-text">成年後見</p>
                    </a>
                </li>
                <li class="p-header__page-list">
                    <a href="<?php echo esc_url(home_url('/others')); ?>" class="p-header__page-link">
                        <div class="p-header__page-icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 21 21">
                                <path fill-rule="evenodd" fill="rgb(238, 129, 157)"
                                    d="M18.140,8.824 L12.686,8.824 C11.807,8.824 11.095,8.111 11.095,7.232 L11.095,1.778 C11.095,0.899 11.807,0.188 12.686,0.188 L18.140,0.188 C19.019,0.188 19.731,0.899 19.731,1.778 L19.731,7.232 C19.731,8.111 19.019,8.824 18.140,8.824 ZM14.289,11.112 C14.910,10.491 15.916,10.491 16.538,11.112 L19.716,14.289 C20.337,14.911 20.337,15.918 19.716,16.539 L16.538,19.717 C15.917,20.338 14.910,20.338 14.289,19.717 L11.110,16.539 C10.490,15.918 10.490,14.911 11.110,14.289 L14.289,11.112 ZM7.232,19.732 L1.777,19.732 C0.898,19.732 0.186,19.020 0.186,18.142 L0.186,12.688 C0.186,11.809 0.898,11.096 1.777,11.096 L7.232,11.096 C8.110,11.096 8.823,11.809 8.823,12.688 L8.823,18.142 C8.823,19.020 8.110,19.732 7.232,19.732 ZM7.232,8.824 L1.777,8.824 C0.898,8.824 0.186,8.111 0.186,7.232 L0.186,1.778 C0.186,0.899 0.898,0.188 1.777,0.188 L7.232,0.188 C8.110,0.188 8.823,0.899 8.823,1.778 L8.823,7.232 C8.823,8.111 8.110,8.824 7.232,8.824 Z" />
                            </svg>
                        </div>
                        <p class="p-header__page-text">その他業務</p>
                    </a>
                </li>

                <li class="p-header__page-list">
                    <a href="<?php echo esc_url(home_url('/fee')); ?>" class="p-header__page-link">
                        <div class="p-header__page-icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 17 20">
                                <path fill-rule="evenodd" fill="rgb(238, 129, 157)"
                                    d="M14.555,-0.002 L2.414,-0.002 C1.143,-0.002 0.111,1.026 0.111,2.290 L0.111,17.707 C0.111,18.971 1.143,19.999 2.414,19.999 L14.555,19.999 C15.826,19.999 16.858,18.971 16.858,17.707 L16.858,2.290 C16.858,1.026 15.826,-0.002 14.555,-0.002 ZM6.625,15.599 C6.871,15.843 6.871,16.239 6.625,16.483 C6.503,16.605 6.343,16.665 6.182,16.665 C6.021,16.665 5.860,16.605 5.738,16.482 L5.135,15.883 L4.532,16.483 C4.410,16.605 4.249,16.665 4.088,16.665 C3.927,16.665 3.767,16.605 3.645,16.482 C3.399,16.238 3.399,15.842 3.645,15.598 L4.247,14.998 L3.644,14.398 C3.398,14.154 3.398,13.759 3.644,13.514 C3.889,13.270 4.287,13.270 4.532,13.514 L5.135,14.115 L5.738,13.514 C5.983,13.270 6.381,13.270 6.626,13.514 C6.872,13.759 6.872,14.154 6.626,14.398 L6.023,14.998 L6.625,15.599 ZM6.182,10.623 L5.763,10.623 L5.763,11.040 C5.763,11.385 5.482,11.665 5.135,11.665 C4.788,11.665 4.507,11.385 4.507,11.040 L4.507,10.623 L4.088,10.623 C3.742,10.623 3.460,10.344 3.460,9.998 C3.460,9.654 3.742,9.374 4.088,9.374 L4.507,9.374 L4.507,8.957 C4.507,8.612 4.788,8.332 5.135,8.332 C5.482,8.332 5.763,8.612 5.763,8.957 L5.763,9.374 L6.182,9.374 C6.528,9.374 6.810,9.654 6.810,9.998 C6.810,10.344 6.528,10.623 6.182,10.623 ZM12.881,16.665 L10.787,16.665 C10.441,16.665 10.159,16.385 10.159,16.040 C10.159,15.695 10.441,15.415 10.787,15.415 L12.881,15.415 C13.227,15.415 13.509,15.695 13.509,16.040 C13.509,16.385 13.227,16.665 12.881,16.665 ZM12.881,14.582 L10.787,14.582 C10.441,14.582 10.159,14.302 10.159,13.957 C10.159,13.612 10.441,13.332 10.787,13.332 L12.881,13.332 C13.227,13.332 13.509,13.612 13.509,13.957 C13.509,14.302 13.227,14.582 12.881,14.582 ZM12.881,10.832 L10.787,10.832 C10.441,10.832 10.159,10.552 10.159,10.207 C10.159,9.862 10.441,9.582 10.787,9.582 L12.881,9.582 C13.227,9.582 13.509,9.862 13.509,10.207 C13.509,10.552 13.227,10.832 12.881,10.832 ZM14.346,5.207 C14.346,6.011 13.689,6.665 12.881,6.665 L4.088,6.665 C3.280,6.665 2.623,6.011 2.623,5.207 L2.623,3.957 C2.623,3.153 3.280,2.499 4.088,2.499 L12.881,2.499 C13.689,2.499 14.346,3.153 14.346,3.957 L14.346,5.207 Z" />
                            </svg>
                        </div>
                        <p class="p-header__page-text">料金表</p>
                    </a>
                </li>

            </ul>
        </div>
    </header>
    <div class="p-floating">
        <a href="<?php echo esc_url(home_url('/form')); ?>" class="p-floating__link">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/floating_pc.png" alt="ご相談・お問い合わせ" width="69" height="240">
        </a>
    </div>