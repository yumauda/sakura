/**
 * 郵便番号から住所を自動入力
 * zipcloud APIを使用
 */
(function($) {
  'use strict';

  // Contact Form 7のフォームが読み込まれた後に実行
  $(document).ready(function() {

    // 郵便番号フィールドの変更を監視
    // Contact Form 7のフィールド名に応じて調整してください
    // 例: [text your-zip] の場合は input[name="your-zip"]
    const zipInputSelector = 'input[name="your-zip"], input[name="zip"], input[name="postal-code"]';
    const addressInputSelector = 'input[name="your-address"], input[name="address"], textarea[name="your-address"], textarea[name="address"]';

    $(document).on('blur change', zipInputSelector, function() {
      const $zipInput = $(this);
      let zipcode = $zipInput.val();

      // ハイフンを削除
      zipcode = zipcode.replace(/-/g, '');

      // 7桁の数字かチェック
      if (!/^\d{7}$/.test(zipcode)) {
        return;
      }

      // zipcloud APIで住所を取得
      $.ajax({
        url: 'https://zipcloud.ibsnet.co.jp/api/search',
        type: 'GET',
        dataType: 'jsonp',
        data: {
          zipcode: zipcode
        },
        success: function(response) {
          if (response.status === 200 && response.results) {
            const result = response.results[0];

            // 都道府県 + 市区町村 + 町域を結合
            const address = result.address1 + result.address2 + result.address3;

            // 住所フィールドに自動入力
            const $addressInput = $(addressInputSelector);
            if ($addressInput.length > 0) {
              $addressInput.val(address);

              // フォーカスを住所フィールドに移動（任意）
              // $addressInput.focus();
            }
          } else {
            console.log('郵便番号が見つかりませんでした');
          }
        },
        error: function() {
          console.log('住所の取得に失敗しました');
        }
      });
    });

  });

})(jQuery);
