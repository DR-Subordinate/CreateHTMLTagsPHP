<!DOCTYPE html>
<html>
  <head>
    <title>タグ作成ツール</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .ms-gothic {
        font-family: "MS Gothic", "ＭＳ ゴシック", "Yu Gothic", "Meiryo", sans-serif;
      }
    </style>
  </head>
  <body>
    <div class="grid grid-cols-1 md:grid-cols-2 mt-6 m-3">
      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">PC用商品説明文</h1>
          <button onclick="copyToClipboard('pc-product-description', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="pc-product-description" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/pc-product-description.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">PC用販売説明文</h1>
          <button onclick="copyToClipboard('pc-sale-description', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="pc-sale-description" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/pc-sale-description.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">スマホ用商品説明文</h1>
          <button onclick="copyToClipboard('sp-product-description', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="sp-product-description" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/sp-product-description.php'); ?></textarea>
      </section>

      <div class="lg:mx-auto mt-6">
      </div>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">スマホ画像HTML用</h1>
          <button onclick="copyToClipboard('sp-img-html', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="sp-img-html" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/sp-img-html.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">PC画像HTML用</h1>
          <button onclick="copyToClipboard('pc-img-html', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="pc-img-html" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/pc-img-html.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">ラクマ公式用タグ</h1>
          <button onclick="copyToClipboard('rakuma', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="rakuma" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/rakuma.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">ヤフー商品説明</h1>
          <button onclick="copyToClipboard('yahoo-product-description', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="yahoo-product-description" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo-product-description.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">ヤフショ＆ヤフオク用説明文(フリースペース1)</h1>
          <button onclick="copyToClipboard('yahoo-shopping-freespace-1', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="yahoo-shopping-freespace-1" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo-shopping-freespace-1.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">ヤフショフリースペース2</h1>
          <button onclick="copyToClipboard('yahoo-shopping-freespace-2', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="yahoo-shopping-freespace-2" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo-shopping-freespace-2.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">ヤフショフリースペース3</h1>
          <button onclick="copyToClipboard('yahoo-shopping-freespace-3', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="yahoo-shopping-freespace-3" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo-shopping-freespace-3.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">Yahoo!ショッピング スマホ用説明文</h1>
          <button onclick="copyToClipboard('yahoo-shopping-sp-description', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="yahoo-shopping-sp-description" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo-shopping-sp-description.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">Yahoo!用タグ</h1>
          <button onclick="copyToClipboard('yahoo', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="yahoo" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">ヤフオク画像用</h1>
          <button onclick="copyToClipboard('yahoo-auctions-img', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="yahoo-auctions-img" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo-auctions-img.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <div class="flex items-center gap-2 mb-2">
          <h1 class="font-bold">BASE用</h1>
          <button onclick="copyToClipboard('base', this)" class="px-2 py-1 text-sm bg-yellow-500 text-white rounded hover:bg-yellow-600">コピー</button>
        </div>
        <textarea name="base" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/base.php'); ?></textarea>
      </section>
    </div>
  </body>
  <script>
    function copyToClipboard(textareaName, button) {
      // Reset all other buttons first
      const allButtons = document.querySelectorAll("button");
      allButtons.forEach((btn) => {
        if (btn !== button) {
          btn.textContent = "コピー";
          btn.classList.remove("bg-green-500", "hover:bg-green-600");
          btn.classList.add("bg-yellow-500", "hover:bg-yellow-600");
        }
      });

      // Get the textarea element
      const textarea = document.querySelector(`textarea[name="${textareaName}"]`);

      // Select the text and copy it
      textarea.select();

      // Copy the text
      navigator.clipboard.writeText(textarea.value).then(() => {
        // Change button text to "コピーしました"
        button.textContent = "コピーしました";
        button.classList.remove("bg-yellow-500", "hover:bg-yellow-600");
        button.classList.add("bg-green-500", "hover:bg-green-600");
      }).catch((err) => {
        console.error("Failed to copy text: ", err);
      });
    }
  </script>
</html>

