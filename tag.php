<!DOCTYPE html>
<html>
  <head>
    <title>タグ作成ツール</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <style>
      .ms-gothic {
        font-family: "MS Gothic", "ＭＳ ゴシック", "Yu Gothic", "Meiryo", sans-serif;
      }
    </style>
  </head>
  <body>
    <div class="grid grid-cols-1 md:grid-cols-2 mt-6 m-3">
      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">PC用商品説明文</h1>
        <textarea name="pc-product-description" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/pc-product-description.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">PC用販売説明文</h1>
        <textarea name="pc-sale-description" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/pc-sale-description.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">スマホ用商品説明文</h1>
        <textarea name="sp-product-description" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/sp-product-description.php'); ?></textarea>
      </section>

      <div class="lg:mx-auto mt-6">
      </div>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">スマホ画像HTML用</h1>
        <textarea name="sp-img-html" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/sp-img-html.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">PC画像HTML用</h1>
        <textarea name="pc-img-html" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/pc-img-html.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">ラクマ公式用タグ</h1>
        <textarea name="rakuma" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/rakuma.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">ヤフショ＆ヤフオク用説明文(フリースペース1)</h1>
        <textarea name="yahoo-shopping-freespace-1" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo-shopping-freespace-1.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">ヤフショフリースペース2</h1>
        <textarea name="yahoo-shopping-freespace-2" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo-shopping-freespace-2.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">ヤフショフリースペース3</h1>
        <textarea name="yahoo-shopping-freespace-3" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo-shopping-freespace-3.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">Yahoo!ショッピング スマホ用説明文</h1>
        <textarea name="yahoo-shopping-sp-description" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo-shopping-sp-description.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">Yahoo!用タグ</h1>
        <textarea name="yahoo" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">ヤフオク画像用</h1>
        <textarea name="yahoo-auctions-img" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/yahoo-auctions-img.php'); ?></textarea>
      </section>

      <section class="lg:mx-auto mt-6">
        <h1 class="font-bold">BASE用</h1>
        <textarea name="base" cols="48" rows="8" class="border border-black ms-gothic"><?php include('tags/base.php'); ?></textarea>
      </section>
    </div>
  </body>
</html>

