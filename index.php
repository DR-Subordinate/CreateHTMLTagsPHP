<!DOCTYPE html>
<html>
  <head>
    <title>タグ作成ツール</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="w-[500px] m-3 border border-black">
      <div class="px-1 bg-slate-300">
        <span class="inline-block py-2 font-bold">N</span>
        <span>新品※製造・輸送・検品の際にどうしてもついてしまう僅かなスレ・押し跡・ほつれ等がある場合がございます。</span>
      </div>
      <div class="px-1">
        <span class="inline-block py-2 font-bold">S</span>
        <span>未使用品（展示品またはアウトレット商品含む）​ 未使用品だが長期保管や展示により明確なダメージ等がある商品。アウトレット商品も含まれます。​</span>
      </div>
      <div class="px-1 bg-slate-300">
        <span class="inline-block py-2 font-bold">SA</span>
        <span>超美品 細かなあまり目立たないダメージがある程度の新品同様に奇麗なUSED商品</span>
      </div>
      <div class="px-1">
        <span class="inline-block py-2 font-bold">A</span>
        <span>中古美品 多少の使用感・ダメージ等はあるが、比較的奇麗な商品</span>
      </div>
      <div class="px-1 bg-slate-300">
        <span class="inline-block py-2 font-bold">AB</span>
        <span>中古良品 使用感・多少のキズや汚れ等があるが、全体的には状態が良い商品</span>
      </div>
      <div class="px-1">
        <span class="inline-block py-2 font-bold">B</span>
        <span>中古品 日常的な使用感・一見してキズや汚れが目立つが、使用には差支えのない状態の商品</span>
      </div>
      <div class="px-1 bg-slate-300">
        <span class="inline-block py-2 font-bold">BC</span>
        <span>全体的に強い使用感がある</span>
      </div>
      <div class="px-1">
        <span class="inline-block py-2 font-bold">C</span>
        <span>強い使用感あり　劣化や大きい汚れなどがある</span>
      </div>
    </div>

    <form action="tag.php" method="POST" name="tag-form">

      <div class="md:flex">
        <div class="w-[500px] mt-6 m-3">
          <div class="border border-black">
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">詳細画像URL1</p>
              <input type="text" name="product-url" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">詳細画像URL2</p>
              <input type="text" name="img-url" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">動画URL</p>
              <input type="text" name="video-url" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">管理番号</p>
              <input type="text" name="management-number" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">ブランド</p>
              <input type="text" name="brand" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">商品名</p>
              <input type="text" name="product-name" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">ライン</p>
              <textarea name="line" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">素材</p>
              <textarea name="material" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">型番</p>
              <textarea name="model-number" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">製造番号</p>
              <textarea name="serial-number" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">製造国</p>
              <select name="country-of-manufacture" class="border border-black" style="margin-bottom: 8px;">
                <option value="" selected>選択してください</option>
                <option value="France-or-Spain-or-Italy">フランス、スペイン、イタリアのいずれか</option>
                <option value="France">フランス</option>
                <option value="Spain">スペイン</option>
                <option value="Italy">イタリア</option>
                <option value="Other">その他</option>
              </select>
              <textarea name="other-text" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">カラー</p>
              <textarea name="color" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">形状</p>
              <textarea name="shape" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">性別</p>
              <textarea name="sex" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">参考定価</p>
              <input type="text" name="price" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">サイズ</p>
              <textarea name="size" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">重量</p>
              <textarea name="weight" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">機能</p>
              <textarea name="feature" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">収納可能アイテム	</p>
              <textarea name="containable-item" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">付属品</p>
              <textarea name="accessory" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">状態</p>
              <select name="condition" class="border border-black">
                <option value="" selected>選択してください</option>
                <option value="N">N</option>
                <option value="S">S</option>
                <option value="SA">SA</option>
                <option value="A">A</option>
                <option value="AB">AB</option>
                <option value="B">B</option>
                <option value="BC">BC</option>
                <option value="C">C</option>
                <option value="N　エルメス食器">N エルメス食器</option>
                <option value="N　バカラ">N バカラ</option>
              </select>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">外側<label class="ml-28 font-normal">ダメージ無し案内を追加<input type="checkbox" name="no-damage-outside"></label></p>
              <textarea name="outside" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">内側<label class="ml-28 font-normal">ダメージ無し案内を追加<input type="checkbox" name="no-damage-inside"></label></p>
              <textarea name="inside" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">特記<label class="ml-7 font-normal">純正箱ダメージ案内<input type="checkbox" name="original-box-damage"></label><label class="ml-7 font-normal">エルメス食器<input type="checkbox" name="hermes-dishes"></label><label class="ml-7 font-normal">バカラ<input type="checkbox" name="baccarat"></label></p>
              <textarea name="special-note" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">スタッフコメント</p>
              <textarea name="staff-comment" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black">
              <input type="text" name="free-text" class="mb-1 border border-black">
              <textarea name="free-text-content" cols="40" rows="2" class="border border-black"></textarea>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <input type="text" name="free-text-2" class="mb-1 border border-black">
              <input type="text" name="free-text-content-2" size="40" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <input type="text" name="free-text-3" class="mb-1 border border-black">
              <input type="text" name="free-text-content-3" size="40" class="border border-black">
            </div>
            <div class="p-1 border-black bg-slate-300">
              <p class="font-bold">関連ワード</p>
              <textarea name="related-word" cols="40" rows="2" class="border border-black"></textarea>
            </div>
          </div>
        </div>

        <div>
          <div class="w-[500px] mt-6 m-3 border border-black">
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">返品</p>
              <label>
                <input type="radio" name="return" value="true" checked>
                <span class="mr-6">対象</span>
              </label>
              <label>
                <input type="radio" name="return" value="false">
                <span>対象外</span>
              </label>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">翌日配送</p>
              <label>
                <input type="radio" name="add-banner" value="true" checked>
                <span class="mr-6">バナー追加</span>
              </label>
              <label>
                <input type="radio" name="add-banner" value="false">
                <span>なし</span>
              </label>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">発送日</p>
              <label>
                <input type="radio" name="business-days" value="true">
                <span class="mr-6">2～3営業日</span>
              </label>
              <label>
                <input type="radio" name="business-days" value="false" checked>
                <span>なし</span>
              </label>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">ルイヴィトン</p>
              <label>
                <input type="radio" name="add-word" value="true">
                <span class="mr-6">ワード追加</span>
              </label>
              <label>
                <input type="radio" name="add-word" value="false" checked>
                <span>なし</span>
              </label>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">リングサイズ直し</p>
              <label>
                <input type="radio" name="change-ring-size" value="true">
                <span class="mr-6">追加</span>
              </label>
              <label>
                <input type="radio" name="change-ring-size" value="false" checked>
                <span>なし</span>
              </label>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">トップのみ</p>
              <label>
                <input type="radio" name="add-top" value="true">
                <span class="mr-6">追加</span>
              </label>
              <label>
                <input type="radio" name="add-top" value="false" checked>
                <span>なし</span>
              </label>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">チェーンのみ</p>
              <label>
                <input type="radio" name="add-chain" value="true">
                <span class="mr-6">追加</span>
              </label>
              <label>
                <input type="radio" name="add-chain" value="false" checked>
                <span>なし</span>
              </label>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">オリコ対象</p>
              <label>
                <input type="radio" name="more-than-5" value="true">
                <span class="mr-6">5万以上</span>
              </label>
              <label>
                <input type="radio" name="more-than-5" value="false" checked>
                <span>5万以下</span>
              </label>
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">新品注意事項</p>
              <label>
                <input type="radio" name="not-used" value="true">
                <span class="mr-6">新品・未使用</span>
              </label>
              <label>
                <input type="radio" name="not-used" value="false" checked>
                <span>中古</span>
              </label>
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">ラッピングバナー</p>
              <label>
                <input type="radio" name="add-wrapping-banner" value="true">
                <span class="mr-6">追加</span>
              </label>
              <label>
                <input type="radio" name="add-wrapping-banner" value="false" checked>
                <span>なし</span>
              </label>
            </div>
            <div class="p-1 bg-slate-300">
              <p class="font-bold">エルメスカラー説明</p>
              <label>
                <input type="radio" name="show-hermes-color-description" value="true">
                <span class="mr-6">表示</span>
              </label>
              <label>
                <input type="radio" name="show-hermes-color-description" value="false" checked>
                <span>なし</span>
              </label>
            </div>
          </div>

          <section class="w-[500px] mt-6 m-3 border border-black">
            <h1 class="p-1 border-b border-black text-xl font-bold">商品画像</h1>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">管理番号</p>
              <input type="text" name="img-management-number" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">キャビネット番号</p>
              <input type="text" name="cabinet-number" class="border border-black">
            </div>
            <div class="p-1 border-b border-black bg-slate-300">
              <p class="font-bold">追加画像開始番号</p>
              <input type="text" name="start-number" class="border border-black">
            </div>
            <div class="p-1 border-b border-black">
              <p class="font-bold">追加画像終了番号</p>
              <input type="text" name="end-number" class="border border-black">
            </div>
            <div class="p-1 bg-slate-300">
              <p class="font-bold">ヤフーのみ</p>
              <label>
                <input type="checkbox" name="show-yahoo-img" value="true">
                <span>表示する</span>
              </label>
            </div>
          </section>

          <section class="w-[500px] mt-6 m-3 border border-black">
            <h1 class="p-1 border-b border-black text-xl font-bold">楽天商品詳細下リンクボタン(スマホ)</h1>
            <div class="py-10 px-1 border-b border-black bg-slate-300">
              <p class="font-bold">ブランドカテゴリ【自動】</p>
              <select name="brand-category" class="border border-black mr-5">
                <option value="エルメス">エルメス</option>
                <option value="シャネル">シャネル</option>
                <option value="ルイヴィトン">ルイヴィトン</option>
                <option value="ボッテガヴェネタ">ボッテガヴェネタ</option>
                <option value="カルティエ">カルティエ</option>
                <option value="プラダ">プラダ</option>
                <option value="セリーヌ">セリーヌ</option>
                <option value="グッチ">グッチ</option>
                <option value="フェンディ">フェンディ</option>
                <option value="クロエ">クロエ</option>
                <option value="ロエベ">ロエベ</option>
                <option value="バレンシアガ">バレンシアガ</option>
                <option value="ミュウミュウ">ミュウミュウ</option>
                <option value="トリーバーチ">トリーバーチ</option>
                <option value="ブルガリ">ブルガリ</option>
                <option value="コーチ">コーチ</option>
                <option value="フェラガモ">フェラガモ</option>
                <option value="ティファニー">ティファニー</option>
                <option value="バーバリー">バーバリー</option>
                <option value="ディオール">ディオール</option>
                <option value="エムシーエム">エムシーエム</option>
                <option value="ロレックス">ロレックス</option>
                <input type="button" value="消す" id="brand-category-btn" class="px-2 border border-black rounded-md bg-slate-100 cursor-pointer active:shadow-xl">
              </select>
            </div>
            <div class="py-10 px-1 border-b border-black">
              <p class="font-bold">ブランドカテゴリURL</p>
              <input type="text" name="brand-category-url" value="https://item.rakuten.co.jp/brandacross/c/0000000100/" size="50" class="border border-black">
            </div>
            <div class="py-10 px-1 border-b border-black bg-slate-300">
              <p class="font-bold">アイテムカテゴリ【自動】</p>
              <select name="item-category" class="border border-black mr-5">
                <option value="バッグ">バッグ</option>
                <option value="財布">財布</option>
                <option value="小物">小物</option>
                <option value="ジュエリー">ジュエリー</option>
                <option value="時計">時計</option>
                <option value="アパレル">アパレル</option>
                <option value="お酒">お酒</option>
                <option value="アクセサリー">アクセサリー</option>
                <input type="button" value="消す" id="item-category-btn" class="px-2 border border-black rounded-md bg-slate-100 cursor-pointer active:shadow-xl">
              </select>
            </div>
            <div class="py-10 px-1 border-b border-black">
              <p class="font-bold">カテゴリNo</p>
              <input type="text" name="category-number" value="1" class="border border-black">
            </div>
            <div class="py-10 px-1 bg-slate-300">
              <p class="font-bold">アイテムカテゴリURL</p>
              <input type="text" name="item-category-url" value="https://item.rakuten.co.jp/brandacross/c/0000000143/" size="50" class="border border-black">
            </div>
          </section>

          <section class="w-[500px] mt-6 m-3 border border-black">
            <h1 class="p-1 border-b border-black text-xl font-bold">関連商品選択(PC)</h1>
            <div class="p-1 bg-slate-300">
              <p class="font-bold">カテゴリ</p>
              <select name="product-category" class="border border-black">
                <option value="hermes">エルメス</option>
                <option value="louis-vuitton">ヴィトン</option>
                <option value="chanel">シャネル</option>
                <option value="bag">バッグ</option>
                <option value="wallet">財布</option>
                <option value="jewelry">ジュエリー</option>
                <option value="watch">時計</option>
                <option value="none">無し</option>
              </select>
            </div>
          </section>
        </div>
      </div>

      <div class="w-[500px] mt-6 m-3">
        <input type="submit" value="タグ作成" class="px-2 border border-black rounded-md bg-slate-100 cursor-pointer active:shadow-xl">
      </div>

    </form>

    <script>
      const brandCategory = document.querySelector('[name="brand-category"]');
      const brandCategoryURL = document.querySelector('[name="brand-category-url"]');
      const brandCategoryBtn = document.querySelector("#brand-category-btn");
      brandCategory.addEventListener("change", () => {
        switch (brandCategory.value) {
          case "エルメス":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000100/"
            break;
          case "シャネル":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000101/";
            break;
          case "ルイヴィトン":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000102/";
            break;
          case "ボッテガヴェネタ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000103/";
            break;
          case "カルティエ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000104/";
            break;
          case "プラダ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000105/";
            break;
          case "セリーヌ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000106/";
            break;
          case "グッチ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000107/";
            break;
          case "フェンディ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000108/";
            break;
          case "クロエ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000109/";
            break;
          case "ロエベ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000199/";
            break;
          case "バレンシアガ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000197/";
            break;
          case "ミュウミュウ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000112/";
            break;
          case "トリーバーチ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000113/";
            break;
          case "ブルガリ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000114/";
            break;
          case "コーチ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000115/";
            break;
          case "フェラガモ":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000116/";
            break;
          case "ティファニー":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000117/";
            break;
          case "バーバリー":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000198/";
            break;
          case "ディオール":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000119/";
            break;
          case "エムシーエム":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000120/";
            break;
          case "ロレックス":
            brandCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000121/";
            break;
        }
      });
      brandCategoryBtn.addEventListener("click", () => {
        brandCategoryURL.value = "";
      });

      const itemCategory = document.querySelector('[name="item-category"]');
      const categoryNumber = document.querySelector('[name="category-number"]');
      const itemCategoryURL = document.querySelector('[name="item-category-url"]');
      const itemCategoryBtn = document.querySelector("#item-category-btn");

      itemCategory.addEventListener("change", () => {
        switch (itemCategory.value) {
          case "バッグ":
            categoryNumber.value = "1";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000143/";
            break;
          case "財布":
            categoryNumber.value = "2";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000144/";
            break;
          case "小物":
            categoryNumber.value = "3";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000222/";
            break;
          case "ジュエリー":
            categoryNumber.value = "4";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000146/";
            break;
          case "時計":
            categoryNumber.value = "5";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000145/";
            break;
          case "アパレル":
            categoryNumber.value = "6";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000147/";
            break;
          case "お酒":
            categoryNumber.value = "7";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000242/";
            break;
          case "アクセサリー":
            categoryNumber.value = "8";
            itemCategoryURL.value = "https://item.rakuten.co.jp/brandacross/c/0000000146/";
            break;
        }
      });
      itemCategoryBtn.addEventListener("click", () => {
        categoryNumber.value = "";
        itemCategoryURL.value = "";
      });

      function appendText(targetTextarea, text) {
        if (!targetTextarea.value.includes(text)) {
          targetTextarea.value += targetTextarea.value.trim() === "" ? text : "\n" + text;
        }
      }

      function removeText(targetTextarea, text) {
        targetTextarea.value = targetTextarea.value
          .replace("\n" + text, "")
          .replace(text, "");
        }

      const noDamageOutsideCheckbox = document.querySelector('input[name="no-damage-outside"]');
      const outsideTextarea = document.querySelector('textarea[name="outside"]');
      const noDamageOutsideText = "特記すべき目立つダメージ無し。";
      noDamageOutsideCheckbox.addEventListener("change", e => {
        if (e.target.checked) {
          appendText(outsideTextarea, noDamageOutsideText);
        } else {
          removeText(outsideTextarea, noDamageOutsideText);
        }
      });

      const noDamageInsideCheckbox = document.querySelector('input[name="no-damage-inside"]');
      const insideTextarea = document.querySelector('textarea[name="inside"]');
      const noDamageInsideText = "特記すべき目立つダメージ無し。";
      noDamageInsideCheckbox.addEventListener("change", e => {
        if (e.target.checked) {
          appendText(insideTextarea, noDamageInsideText);
        } else {
          removeText(insideTextarea, noDamageInsideText);
        }
      });

      const originalBoxDamageCheckbox = document.querySelector('input[name="original-box-damage"]');
      const specialNoteTextarea = document.querySelector('textarea[name="special-note"]');
      const originalBoxDamageText = "※純正箱には入荷過程による汚れや擦れ等のダメージがある場合がございます。予めご了承ください。";
      originalBoxDamageCheckbox.addEventListener("change", e => {
        if (e.target.checked) {
          appendText(specialNoteTextarea, originalBoxDamageText);
        } else {
          removeText(specialNoteTextarea, originalBoxDamageText);
        }
      });

      const hermesDishesCheckbox = document.querySelector('input[name="hermes-dishes"]');
      const hermesDishesText = `※底面接地部分は製法上擦れやすくなっており、僅かなクスミがある場合ございます。

※食器洗浄機、乾燥機のご使用はお勧めしません。電子レンジやオーブン、トースター対応ではありません。

※純正箱に入荷過程による凹みや僅かな擦れ・小汚れ等がある場合がございます。`;
      hermesDishesCheckbox.addEventListener("change", e => {
        if (e.target.checked) {
          appendText(specialNoteTextarea, hermesDishesText);
        } else {
          removeText(specialNoteTextarea, hermesDishesText);
        }
      });

      const baccaratCheckbox = document.querySelector('input[name="baccarat"]');
      const baccaratText = "※純正箱には入荷過程に伴う、若干の凹みやスレ・傷等がある場合がございます。";
      baccaratCheckbox.addEventListener("change", e => {
        if (e.target.checked) {
          appendText(specialNoteTextarea, baccaratText);
        } else {
          removeText(specialNoteTextarea, baccaratText);
        }
      });
    </script>
  </body>
</html>
