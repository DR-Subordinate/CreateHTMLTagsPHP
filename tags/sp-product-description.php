<?php if($_POST['show-yahoo-img'] != "true"): ?>
<?php if(!empty($_POST['start-number'])): ?>

<a href="https://www.rakuten.ne.jp/gold/brandacross/item_pict/<?php echo $_POST['product-url']; ?>.html" target="_blank"><img src="https://image.rakuten.co.jp/brandacross/cabinet/pict_link.jpg" width="100%"></a>
<br>
<?php endif; ?>
<?php endif; ?>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/20220107_300_7.jpg" width="100%"><br>
	
		<?php if($_POST['add-wrapping-banner'] == "true"): ?>
<br><table border="0" cellspacing="0" cellpadding="0">
<tr valign="top">
<td><a href="https://item.rakuten.co.jp/brandacross/c/0000000251/"><img src="https://image.rakuten.co.jp/brandacross/cabinet/tag_wrapping.jpg" alt="ラッピング対応" width="100" height="21"></a></td>
</tr>
</table>
<?php endif; ?>
			
<font size="2">
<table width="100%" cellspacing="1" cellpadding="3" bgcolor="#333333">
<tr>
<td bgcolor="#EEE" width="20%"><b>管理番号</b></td>
<td bgcolor="#FFF"><?php echo $_POST['management-number']; ?></td>
</tr>
<tr>
<td bgcolor="#EEE"><b>ブランド</b></td>
<td bgcolor="#FFF"><?php echo $_POST['brand']; ?></td>
</tr>
<tr>
<td bgcolor="#EEE"><b>商品名</b></td>
<td bgcolor="#FFF"><?php echo $_POST['product-name']; ?></td>
</tr>
<?php if(!empty($_POST['line'])): ?>
<tr>
<td bgcolor="#EEE"><b>ライン</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['line']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['material'])): ?>
<tr>
<td bgcolor="#EEE"><b>素材</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['material']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['model-number'])): ?>
<tr>
<td bgcolor="#EEE"><b>型番</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['model-number']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['serial-number'])): ?>
<tr>
<td bgcolor="#EEE"><b>製造番号</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['serial-number']); ?></td>
</tr>
<?php endif; ?>
<?php if($_POST['country-of-manufacture'] !== ""): ?>
<tr>
<td bgcolor="#EEE"><b>製造国</b></td>
<td bgcolor="#FFF"><?php
switch ($_POST['country-of-manufacture']) {
    case "France-or-Spain-or-Italy":
        echo "フランス、スペイン、イタリアのいずれか";
        break;
    case "France":
        echo "フランス";
        break;
    case "Spain":
        echo "スペイン";
        break;
    case "Italy":
        echo "イタリア";
        break;
    case "Other":
        echo "{$_POST['other-text']}";
        break;
}
 ?>
</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['color'])): ?>
<tr>
<td bgcolor="#EEE"><b>カラー</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['color']); ?></td>
</tr>
<?php endif; ?>
<?php if($_POST['show-hermes-color-description'] == "true"): ?>
<tr>
<td bgcolor="#EEE"><b>カラーに関して</b></td>
<td bgcolor="#FFF">エルメスのカラーに関して、実際の色味を表現出来ますよう、撮影・加工に尽力しておりますが、ご覧頂く環境によって異なる場合がございます。 必ずご希望のカラー名の確認をお願い致します。</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['shape'])): ?>
<tr>
<td bgcolor="#EEE"><b>形状</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['shape']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['sex'])): ?>
<tr>
<td bgcolor="#EEE"><b>性別</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['sex']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['price'])): ?>
<tr>
<td bgcolor="#EEE"><b>参考定価</b></td>
<td bgcolor="#FFF"><?php echo $_POST['price']; ?>円<br>※参考定価は各ブランド直営店にて新品で販売中もしくは過去に販売されていた価格です。</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['size'])): ?>
<tr>
<td bgcolor="#EEE"><b>サイズ</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['size']); ?><?php if($_POST['change-ring-size'] == "true"): ?>
<br><a href="https://item.rakuten.co.jp/brandacross/c/0000000166/">サイズ直し1サイズ無料詳しくはこちら</a>
<br>サイズ直しをした場合返品不可となります。
<?php endif; ?>
</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['weight'])): ?>
<tr>
<td bgcolor="#EEE"><b>重量</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['weight']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['feature'])): ?>
<tr>
<td bgcolor="#EEE"><b>機能</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['feature']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['containable-item'])): ?>
<tr>
<td bgcolor="#EEE"><b>収納可能アイテム</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['containable-item']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['accessory'])): ?>
<tr>
<td bgcolor="#EEE"><b>付属品</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['accessory']); ?>
<?php if($_POST['add-top'] == "true"): ?>
<br>※チェーンは付属致しません。<br>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000260/">ネックレスチェーンはこちら</a>
<?php endif; ?>
<?php if($_POST['add-chain'] == "true"): ?>
<br>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000261/">ペンダントトップはこちら</a>
<?php endif; ?>
<br><br>写真・説明欄に表記されている付属品以外は付属しておりません。
</td>
</tr>
<?php elseif($_POST['add-top'] == "true"): ?>
<tr>
<td bgcolor="#EEE"><b>付属品</b></td>
<td bgcolor="#FFF">
<?php if($_POST['add-top'] == "true"): ?>
※チェーンは付属致しません。<br>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000260/">ネックレスチェーンはこちら</a>
<?php endif; ?>
</td>
</tr>
<?php elseif($_POST['add-chain'] == "true"): ?>
<tr>
<td bgcolor="#EEE"><b>付属品</b></td>
<td bgcolor="#FFF">
<a href="https://item.rakuten.co.jp/brandacross/c/0000000261/">ペンダントトップはこちら</a>
</td>
</tr>
<?php endif; ?>




<?php if(!empty($_POST['staff-comment'])): ?>
<tr>
<td bgcolor="#EEE"><b>スタッフコメント</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['staff-comment']); ?>
</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content'])): ?>
<tr>
<td bgcolor="#EEE"><b><?php echo $_POST['free-text']; ?></b></td>
<td bgcolor="#FFF"><?php echo $_POST['free-text-content']; ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content-2'])): ?>
<tr>
<td bgcolor="#EEE"><b><?php echo $_POST['free-text-2']; ?></b></td>
<td bgcolor="#FFF"><?php echo $_POST['free-text-content-2']; ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content-3'])): ?>
<tr>
<td bgcolor="#EEE"><b><?php echo $_POST['free-text-3']; ?></b></td>
<td bgcolor="#FFF"><?php echo $_POST['free-text-content-3']; ?></td>
</tr>
<?php endif; ?>

</table>
</font>
<br>
<table border="1" cellspacing="0" cellpadding="7" width="100%" bordercolor="#999">
<tr>
<td colspan="2" bgcolor="#EEE"><center>■ 状態 ■</center></td>
</tr>
<tr>
<td colspan="2" bgcolor="#fff">
<table border="1" cellspacing="0" cellpadding="7" width="100%" bordercolor="#999">
	<td align="center" width="11%"<?php if($_POST['condition'] == "N"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>N</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "S"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>S</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "SA"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>SA</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "A"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>A</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "AB"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>AB</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "B"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>B</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "BC"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>BC</td>
	<td align="center" width="11%"<?php if($_POST['condition'] == "C"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>C</td>
</table>
</td>
</tr>
<?php
$conditionText = $_POST['condition'];
if ($_POST['condition'] === "N　エルメス食器" || $_POST['condition'] === "N　バカラ") {
    $conditionText = "N";
  }
?>
<tr>
<td bgcolor="#EEE" width="80"><center><font size="7" color="#F00"><?php echo $conditionText; ?></font></center></td>
<td>
<font size="2">
<?php 

switch ($_POST['condition']) {
    case "N":
        echo '<b>新品</b><br><font size="1">※製造・輸送・検品の際にどうしてもついてしまう僅かなスレ・押し跡・ほつれ等がある場合がございます。</font>';
        break;
    case "S":
        echo '<b>未使用品（展示品またはアウトレット商品含む）</b><br><font size="1">未使用品だが長期保管や展示により明確なダメージ等がある商品。アウトレット商品も含まれます。</font>';
        break;
    case "SA":
        echo '<b>超美品</b><br><font size="1">細かなあまり目立たないダメージがある程度の新品同様に奇麗なUSED商品</font>';
        break;
    case "A":
        echo '<b>中古美品</b><br><font size="1">多少の使用感・ダメージ等はあるが、比較的奇麗な商品</font>';
        break;
    case "AB":
        echo '<b>中古良品</b><br><font size="1">使用感・多少のキズや汚れ等があるが、全体的には状態が良い商品</font>';
        break;
    case "B":
        echo '<b>中古品</b><br><font size="1">日常的な使用感・一見してキズや汚れが目立つが、使用には差支えのない状態の商品</font>';
        break;
    case "BC":
        echo "<b>全体的に強い使用感がある</b>";
        break;
    case "C":
        echo "<b>強い使用感あり　劣化や大きい汚れなどがある</b>";
        break;
    case "N　エルメス食器":
        echo '<b>新品</b><br><font size="1">※リモージュ焼きの製法上、ピンホール（小さな凹み）や光にかざすと見える程度の傷、濃淡差、色飛び（抜け）が生じる場合がございます。</font>';
        break;
    case "N　バカラ":
        echo '<b>新品</b><br><font size="1">※クリスタルガラスの特性・製法上、僅かな凹凸等がある場合がございます。</font>';
        break;
}
 ?>
</font>

	</td>
</tr>
<?php if(!empty($_POST['outside'])): ?>
<tr>
<td bgcolor="#EEE"><b>外側</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['outside']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['inside'])): ?>
<tr>
<td bgcolor="#EEE"><b>内側</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['inside']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['special-note'])): ?>
<tr>
<td bgcolor="#EEE"><b>特記</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['special-note']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['syousai'])): ?>
<tr>
<td bgcolor="#EEE"><b>詳細</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['syousai']); ?></td>
</tr>
<?php endif; ?>
</table>
<br>

<?php if($_POST['return'] == "true"): ?>
<a href="https://www.rakuten.ne.jp/gold/brandacross/tokusetu/anshin.html"><img src="https://image.rakuten.co.jp/brandacross/cabinet/hepin_ok_sp.jpg" width="100%"></a><br>
<?php else: ?>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/hepin_gai_sp_2.jpg"width="100%"><br>
<?php endif; ?>
<?php if($_POST['add-banner'] == "true"): ?>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/yokuzituhaisou.jpg"width="100%"><br>
<?php endif; ?>
<?php if($_POST['business-days'] == "true"): ?>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/150608_shipping.jpg"width="100%" alt="2～3営業日以内に出荷致します。"><br>
<?php endif; ?>


<?php if(!empty($_POST['brand-category-url'])): ?>
<table border="1" cellspacing="0" cellpadding="3" width="100%" bordercolor="#999">
<tr>
<td colspan="2" bgcolor="#EEE"><center>■ 関連商品 ■</center></td>
</tr>
<tr>
<td>
<a href="<?php echo strip_tags($_POST['brand-category-url'] , '<br><font>'); ?>"><img src="https://image.rakuten.co.jp/brandacross/cabinet/item_etc_link.jpg" width="100%"></a>
</td>
<td>
<a href="<?php echo strip_tags($_POST['item-category-url'] , '<br><font>'); ?>"><img src="https://image.rakuten.co.jp/brandacross/cabinet/item_link_<?php echo $_POST['category-number'] ;?>.jpg" width="100%"></a>
</td>
</tr>
</table>
<br>
<?php endif; ?>

<a href="https://www.rakuten.ne.jp/gold/brandacross/index_sp.html" target="_blank"><img src="https://image.rakuten.co.jp/brandacross/cabinet/top_banner.jpg"width="100%"></a>
<br>

<img src="https://image.rakuten.co.jp/brandacross/cabinet/sp_contact_top.jpg" width="100%">
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="50%" align="left"><a href="https://ask.step.rakuten.co.jp/rms/mall/pa/ask/vc?__event=PA02_000_001&ask_text=%be%a6%c9%ca%a4%cb%b4%d8%a4%b9%a4%eb%bc%c1%cc%e4&shopurl=https://www.rakuten.co.jp/brandacross/&shop_bid=300229&shop_name=ACROSS&myshop=0"><img src="https://image.rakuten.co.jp/brandacross/cabinet/sp_contact_mail.jpg" width="99%"></a></td>
<td width="50%" align="right"><a href="tel:0120858881"><img src="https://image.rakuten.co.jp/brandacross/cabinet/sp_contact_tel.jpg" width="99%"></a></td>
</tr>
</table>
<?php if($_POST['more-than-5'] == "true"): ?>
	<br>
<a href="https://www.rakuten.ne.jp/gold/brandacross/orico/index_orico_sp.html" target="_blank"><img src="https://image.rakuten.co.jp/brandacross/cabinet/orico1.jpg" width="99%"></a>
	<?php endif; ?>
	
	<br>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/gekkann_1.jpg" width="100%">
	
<br>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="50%" align="left"><a href="https://www.rakuten.ne.jp/gold/brandacross/iframe/question/index.html" target="_top"><img src="https://image.rakuten.co.jp/brandacross/cabinet/question_sp_img.jpg" width="100%"></a></td>
<td width="50%" align="right"><a href="https://www.rakuten.ne.jp/gold/brandacross/iframe/size_guide/index.html" target="_top"><img src="https://image.rakuten.co.jp/brandacross/cabinet/sizeguide_sp_img.jpg" width="100%"></a></td>
</tr>

</table>
	<?php if($_POST['not-used'] == "true"): ?>
<br><img src="https://image.rakuten.co.jp/brandacross/cabinet/newitem_notes.jpg" width="100%">
<?php endif; ?>
	
