<img src="https://image.rakuten.co.jp/brandacross/cabinet/20220106_2.jpg" width="350" style="margin-bottom:10px;">
	
	<?php if($_POST['add-wrapping-banner'] == "true"): ?>
<br><table border="0" cellspacing="0" cellpadding="0">
<tr valign="top">
<td nowrap><a href="https://item.rakuten.co.jp/brandacross/c/0000000251/"><img src="https://image.rakuten.co.jp/brandacross/cabinet/tag_wrapping.jpg" alt="ラッピング対応" width="100" height="21"></a></td>
</tr>
</table>
<?php endif; ?>
			
	<img src="https://www.rakuten.ne.jp/gold/brandacross/images/bar/itemspec-1.png" alt="商品説明"><br />
<table class="tblitemspec">

<tr>
<th>管理番号</th>
<td><?php echo $_POST['management-number']; ?></td>
</tr>
<tr>
<th>ブランド</th>
<td><?php echo $_POST['brand']; ?></td>
</tr>
<tr>
<th>商品名</th>
<td><?php echo $_POST['product-name']; ?></td>
</tr>
<?php if(!empty($_POST['line'])): ?>
<tr>
<th>ライン</th>
<td><?php echo nl2br($_POST['line']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['material'])): ?>
<tr>
<th>素材</th>
<td><?php echo nl2br($_POST['material']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['model-number'])): ?>
<tr>
<th>型番</th>
<td><?php echo nl2br($_POST['model-number']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['serial-number'])): ?>
<tr>
<th>製造番号</th>
<td><?php echo nl2br($_POST['serial-number']); ?></td>
</tr>
<?php endif; ?>
<?php if($_POST['country-of-manufacture'] !== ""): ?>
<tr>
<th>製造国</th>
<td><?php
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
<th>カラー</th>
<td><?php echo nl2br($_POST['color']); ?></td>
</tr>
<?php endif; ?>
<?php if($_POST['show-hermes-color-description'] == "true"): ?>
<tr>
<th>カラーに関して</th>
<td>エルメスのカラーに関して、実際の色味を表現出来ますよう、撮影・加工に尽力しておりますが、ご覧頂く環境によって異なる場合がございます。 必ずご希望のカラー名の確認をお願い致します。</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['shape'])): ?>
<tr>
<th>形状</th>
<td><?php echo nl2br($_POST['shape']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['sex'])): ?>
<tr>
<th>性別</th>
<td><?php echo nl2br($_POST['sex']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['price'])): ?>
<tr>
<th>参考定価</th>
<td><?php echo $_POST['price']; ?>円<br>※参考定価は各ブランド直営店にて新品で販売中もしくは過去に販売されていた価格です。</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['size'])): ?>
<tr>
<th>サイズ</th>
<td><?php echo nl2br($_POST['size']); ?><?php if($_POST['change-ring-size'] == "true"): ?>
<br><a href="https://item.rakuten.co.jp/brandacross/c/0000000166/"><font size="2">サイズ直し1サイズ無料詳しくはこちら</font></a>
<br>サイズ直しをした場合返品不可となります。
<?php endif; ?>

</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['weight'])): ?>
<tr>
<th>重量</th>
<td><?php echo nl2br($_POST['weight']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['feature'])): ?>
<tr>
<th>機能</th>
<td><?php echo nl2br($_POST['feature']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['containable-item'])): ?>
<tr>
<th>収納可能アイテム</th>
<td><?php echo nl2br($_POST['containable-item']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['accessory'])): ?>
<tr>
<th>付属品</th>
<td><?php echo nl2br($_POST['accessory']); ?>
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
<th>付属品</th>
<td>※チェーンは付属致しません。<br>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000260/">ネックレスチェーンはこちら</a>
</td>
</tr>
<?php elseif($_POST['add-chain'] == "true"): ?>
<tr>
<th>付属品</th>
<td>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000261/">ペンダントトップはこちら</a>
</td>
</tr>
<?php endif; ?>




<?php if(!empty($_POST['staff-comment'])): ?>
<tr>
<th>スタッフコメント</th>
<td><?php echo nl2br($_POST['staff-comment']); ?>
</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content'])): ?>
<tr>
<th><?php echo $_POST['free-text']; ?></th>
<td><?php echo nl2br($_POST['free-text-content']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content-2'])): ?>
<tr>
<th><?php echo $_POST['free-text-2']; ?></th>
<td><?php echo $_POST['free-text-content-2']; ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content-3'])): ?>
<tr>
<th><?php echo $_POST['free-text-3']; ?></th>
<td><?php echo $_POST['free-text-content-3']; ?></td>
</tr>
<?php endif; ?>

</table>
<br />
<img src="https://www.rakuten.ne.jp/gold/brandacross/images/bar/rank-1.png" alt="商品ランク">
<br />
<table class="tblitemrank">
<tr>
	<th style="font-size:24px;font-weight:bold;color:#bf0000;width:80px;"><?php echo $_POST['condition']; ?></th>
	<td>
<?php 
switch ($_POST['condition']) {
    case "N":
        echo "<b>新品</b><br>※金具部分など輸送・検品の際にどうしてもついてしまう僅かなスレ傷がある場合がございます。";
        break;
    case "S":
        echo "<b>未使用品（展示品またはアウトレット商品含む）</b><br>未使用品だが長期保管や展示により明確なダメージ等がある商品。アウトレット商品も含まれます。※詳細は下記説明をご覧ください";
        break;
    case "SA":
        echo "<b>新品同様品</b><br>細かなあまり目立たないダメージがある程度の新品同様に奇麗なUSED商品";
        break;
    case "A":
        echo "<b>中古品の中でも美品</b>";
        break;
    case "AB":
        echo "<b>若干の小傷又はシミがあるが全体的には状態が良い</b>";
        break;
    case "B":
        echo "<b>一般的な中古品で全体的に使用感がある</b>";
        break;
    case "BC":
        echo "<b>全体的に強い使用感がある</b>";
        break;
    case "C":
        echo "<b>強い使用感あり　劣化や大きい汚れなどがある</b>";
        break;
}
 ?></td></tr>
<?php if(!empty($_POST['outside'])): ?>
<tr>
<th>外側</th>
<td><?php echo nl2br($_POST['outside']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['inside'])): ?>
<tr>
<th>内側</th>
<td><?php echo nl2br($_POST['inside']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['special-note'])): ?>
<tr>
<th>特記</th>
<td><?php echo nl2br($_POST['special-note']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['syousai'])): ?>
<tr>
<th>詳細</th>
<td><?php echo nl2br($_POST['syousai']); ?></td>
</tr>
<?php endif; ?>
</table>
<br>
<table id="rankDesc">
	<tr>
		<th>N</th>
		<th>S</th>
		<th>SA</th>
		<th>A</th>
		<th>AB</th>
		<th>B</th>
		<th>BC</th>
		<th>C</th>
	</tr>
	<tr>
		<td<?php if($_POST['condition'] == "N"):?> bgcolor="#FFF766"<?php endif; ?>>新<br>品</td>
		<td<?php if($_POST['condition'] == "S"):?> bgcolor="#FFF766"<?php endif; ?>>未<br>使<br>用<br>品</td>
		<td<?php if($_POST['condition'] == "SA"):?> bgcolor="#FFF766"<?php endif; ?>>新<br>品<br>同<br>様<br>品</td>
		<td<?php if($_POST['condition'] == "A"):?> bgcolor="#FFF766"<?php endif; ?>>中<br>古<br>美<br>品</td>
		<td<?php if($_POST['condition'] == "AB"):?> bgcolor="#FFF766"<?php endif; ?>>中<br>古<br>良<br>品</td>
		<td<?php if($_POST['condition'] == "B"):?> bgcolor="#FFF766"<?php endif; ?>>中<br>古<br>品</td>
		<td<?php if($_POST['condition'] == "BC"):?> bgcolor="#FFF766"<?php endif; ?>>強<br>い<br>使<br>用<br>感</td>
		<td<?php if($_POST['condition'] == "C"):?> bgcolor="#FFF766"<?php endif; ?>>破<br>損<br>有</td>
	</tr>
</table>
<br>
<div class="monitoratten">※モニターの発色具合によって実際のものと色が異なる場合がございます。</div>
<br>
<div class="descBanner">
<?php if($_POST['show-yahoo-img'] != "true"): ?>
<?php if(!empty($_POST['start-number'])): ?>
<div>
<a href="https://item.rakuten.co.jp/brandacross/<?php echo $_POST['product-url']; ?>/#syousai" style="display:block;"><img src="https://www.rakuten.ne.jp/gold/brandacross/images/bar/gazou_link.gif?d=2014051900" alt="詳細画像はこちら"></a>
</div>
<?php endif; ?>
<?php endif; ?>
<?php if($_POST['return'] == "true"): ?>
<div>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000196/"><img src="https://image.rakuten.co.jp/brandacross/cabinet/hepin_ok_3.jpg" alt="返品対象商品"></a>
</div>
<?php else: ?>
<div>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/hepin_gai_2.jpg" alt="返品対象外">
</div>
<?php endif; ?>
<?php if($_POST['add-banner'] == "true"): ?>
<div>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/yokuzituhaisou.jpg" alt="翌日配送">
</div>
<?php endif; ?>
<?php if($_POST['business-days'] == "true"): ?>
<div>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/shipping.jpg" alt="2～3営業日以内に出荷致します。">
</div>
<?php endif; ?>

</div>
<style>

.descBanner div {
	margin-bottom:10px;
}

table.tblitemspec,table.tblitemrank{
	width:100%;
	border:solid 1px #ddd;
	font-size:12px;
	border-spacing:0px;
	border-collapse:collapse;
	color:#444;
	width:350px;
	background:#fff;
}

table.tblitemspec th,
table.tblitemspec td,
table.tblitemrank th,
table.tblitemrank td{
	padding:7px 10px;
	border-bottom:#dddddd solid 1px;
	line-height:1.5em;
}


table.tblitemspec th,
table.tblitemrank th{
	background:#EBE8D7;
	white-space:nowrap;
}

/*
table.tblitemrank tr:nth-child(even) td{
	background:#F9F8F2;
}
*/

.lossleader_item_name,
.lossleader_double_price_title,
.lossleader_double_price,
.lossleader_price1,
.lossleader_price2
{
	line-height:1.3em;
	font-size:12px;
}

.monitoratten{
	font-size:10px;
}

#rankDesc {
	width:350px;
	border-collapse:collapse;
}

#rankDesc th {
	background-color:#EBE8D7;
	font-weight:normal;
}

#rankDesc td ,#rankDesc th{
	text-align:center;
	border:solid 1px #dddddd;
	font-size:12px;
}

</style>
<?php if($_POST['add-banner'] == "true"): ?>
<iframe src="https://www.rakuten.ne.jp/gold/brandacross/iframe/shipping_date/index.html" width="352" height="190" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" hspace="0" vspace="0">専用ブラウザでご覧下さい</iframe>
<?php endif; ?>


<?php if($_POST['more-than-5'] == "true"): ?>
<iframe src="https://www.rakuten.ne.jp/gold/brandacross/orico/index.html" width="352" height="290" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" hspace="0" vspace="0">専用ブラウザでご覧下さい</iframe>
<?php endif; ?>
