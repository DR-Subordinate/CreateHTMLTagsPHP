<?php if(!empty($_POST['img-url'])): ?>
<BR><BR><CENTER>
<a href="https://shopping.yahoo.co.jp/stores/wrap/bouncer.html?dest_path=https://brandacross.xsrv.jp/syousaigazou/<?php echo $_POST['img-url']; ?>.html" target="_blank">
<font size="6">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788753.jpg" border="0" width="100%"></a>
</font>
</a>
<br>
<?php endif; ?>

	<?php if($_POST['add-wrapping-banner'] == "true"): ?>
<a href="https://store.shopping.yahoo.co.jp/brand-across/wrapping.html"><img src="https://shopping.c.yimg.jp/lib/brand-across/tag_wrapping.jpg" alt="ラッピング対応" width="100%"></a><br>
<?php endif; ?>
		
<img src="https://shopping.c.yimg.jp/lib/brand-across/title_item_1.jpg" alt="Itemspec" style="vertical-align: bottom" width="100%">
<table cellspacing="1" cellpadding="8" border="0" width="100%">

<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;border:#dddddd solid 1px;">管理番号</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo $_POST['management-number']; ?></td>
</tr>

<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">ブランド</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo $_POST['brand']; ?></td>
</tr>

<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">商品名</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo $_POST['product-name']; ?></td>
</tr>

<?php if(!empty($_POST['line'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">ライン</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['line']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['material'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">素材</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['material']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['model-number'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">型番</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['model-number']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['serial-number'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">製造番号</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['serial-number']); ?></td>
</tr>
<?php endif; ?>
	
<?php if($_POST['show-country-of-manufacture'] == "true"): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">製造国</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;">フランス・スペイン・イタリアのいずれか<br>(※まれにUSAもございます)</td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['color'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">カラー</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['color']); ?></td>
</tr>
<?php endif; ?>
	
<?php if($_POST['show-hermes-color-description'] == "true"): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">カラーに関して</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;">エルメスのカラーに関して、実際の色味を表現出来ますよう、撮影・加工に尽力しておりますが、ご覧頂く環境によって異なる場合がございます。 必ずご希望のカラー名の確認をお願い致します。</td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['shape'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">形状</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['shape']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['sex'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">性別</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['sex']); ?></td>
</tr>
<?php endif; ?>


<?php if(!empty($_POST['price'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">参考定価</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['price']); ?>円<br>※参考定価は各ブランド直営店にて新品で販売中もしくは過去に販売されていた価格です。</td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['size'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">サイズ</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['size']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['weight'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">重量</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['weight']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['feature'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">機能</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['feature']); ?></td>
</tr>
<?php endif; ?>
	
<?php if(!empty($_POST['containable-item'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">収納可能アイテム</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['containable-item']); ?></td>
</tr>
<?php endif; ?>


<?php if(!empty($_POST['accessory'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">付属品</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['accessory']); ?>
<?php if($_POST['add-top'] == "true"): ?>
<br>※チェーンは付属致しません。<br>
<?php endif; ?>
</td>
</tr>
<?php elseif($_POST['add-top'] == "true"): ?>
<tr>
<th>付属品</th>
<td>※チェーンは付属致しません。<br>
</td>
</tr>
<?php elseif($_POST['add-chain'] == "true"): ?>
<tr>
<th>付属品</th>
<td>
</td>
</tr>
<?php endif; ?>



<?php if(!empty($_POST['staff-comment'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">スタッフコメント</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['staff-comment']); ?>
</td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['free-text-content'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;"><?php echo $_POST['free-text']; ?></th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['free-text-content']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['free-text-content-2'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;"><?php echo $_POST['free-text-2']; ?></th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['free-text-content-2']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['free-text-content-3'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;"><?php echo $_POST['free-text-3']; ?></th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;"><?php echo nl2br($_POST['free-text-content-3']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['accessory'])): ?>
<tr>
<th width="20%" bgcolor="#EBE8D7" align="center" style="padding:8px; border:#dddddd solid 1px; vertical-align: middle;">付属品について</th>
<td width="80%" bgcolor="#ffffff" align="left" style="padding:8px; border:#dddddd solid 1px;">写真に掲載のないもの、商品説明に表記されている付属品以外は付属しておりません。<br>商品説明・写真にてご確認の上、ご不明点がございましたらお気軽にお問い合わせ下さいませ。<br>
</td>
</tr>

</td>
</tr>
<?php endif; ?>

</table>
	 <br>
<br />
<img src="https://shopping.c.yimg.jp/lib/brand-across/title_item_2.jpg" alt="商品ランク" width="100%">
<br />
<table class="tblitemrank">
<tr>
	<th style="font-size:24px;font-weight:bold;color:#bf0000;width:80px;" ><?php echo $_POST['condition']; ?></th>
	<td>
<?php 
switch ($_POST['condition']) {
    case "N":
        echo "新品、未使用品  製造から2年以内の商品";
        break;
    case "NS":
        echo "新品、未使用品 製造から2年以上経過、又は製造年が不明な商品";
        break;
    case "S":
        echo "新品同様品";
        break;
    case "A":
        echo "数回使用程度の美品";
        break;
    case "AB":
        echo "若干の小傷又はシミがあるが全体的には状態が良い";
        break;
    case "B":
        echo "一般的な中古品で全体的に使用感がある";
        break;
    case "BC":
        echo "全体的に強い使用感がある";
        break;
    case "C":
        echo "強い使用感あり　劣化や大きい汚れなどがある";
        break;
    case "D":
        echo "欠品、故障有り";
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
<table id="rankDesc" width="100%" style="border-collapse:collapse;">
	<tr>
		<th style="background-color:#EBE8D7;font-weight:normal;text-align:center;border-width:1px;border-style:solid;border-color:#dddddd;font-size:12px;" >N</th>
		<th style="background-color:#EBE8D7;font-weight:normal;text-align:center;border-width:1px;border-style:solid;border-color:#dddddd;font-size:12px;" >NS</th>
		<th style="background-color:#EBE8D7;font-weight:normal;text-align:center;border-width:1px;border-style:solid;border-color:#dddddd;font-size:12px;" >S</th>
		<th style="background-color:#EBE8D7;font-weight:normal;text-align:center;border-width:1px;border-style:solid;border-color:#dddddd;font-size:12px;" >A</th>
		<th style="background-color:#EBE8D7;font-weight:normal;text-align:center;border-width:1px;border-style:solid;border-color:#dddddd;font-size:12px;" >AB</th>
		<th style="background-color:#EBE8D7;font-weight:normal;text-align:center;border-width:1px;border-style:solid;border-color:#dddddd;font-size:12px;" >B</th>
		<th style="background-color:#EBE8D7;font-weight:normal;text-align:center;border-width:1px;border-style:solid;border-color:#dddddd;font-size:12px;" >BC</th>
		<th style="background-color:#EBE8D7;font-weight:normal;text-align:center;border-width:1px;border-style:solid;border-color:#dddddd;font-size:12px;" >C</th>
		<th style="background-color:#EBE8D7;font-weight:normal;text-align:center;border-width:1px;border-style:solid;border-color:#dddddd;font-size:12px;" >J</th>
	</tr>
	<tr>
		<td<?php if($_POST['condition'] == "N"):?> bgcolor="#FFF766"<?php endif; ?> style="text-align:center;border:#dddddd solid 1px;">新<br>品</td>
		<td<?php if($_POST['condition'] == "NS"):?> bgcolor="#FFF766"<?php endif; ?> style="text-align:center;border:#dddddd solid 1px;">未<br>使<br>用<br>品</td>
		<td<?php if($_POST['condition'] == "S"):?> bgcolor="#FFF766"<?php endif; ?> style="text-align:center;border:#dddddd solid 1px;">新<br>品<br>同<br>様<br>品</td>
		<td<?php if($_POST['condition'] == "A"):?> bgcolor="#FFF766"<?php endif; ?> style="text-align:center;border:#dddddd solid 1px;">中<br>古<br>超<br>美<br>品</td>
		<td<?php if($_POST['condition'] == "AB"):?> bgcolor="#FFF766"<?php endif; ?> style="text-align:center;border:#dddddd solid 1px;">中<br>古<br>美<br>品</td>
		<td<?php if($_POST['condition'] == "B"):?> bgcolor="#FFF766"<?php endif; ?> style="text-align:center;border:#dddddd solid 1px;">中<br>古<br>良<br>品</td>
		<td<?php if($_POST['condition'] == "BC"):?> bgcolor="#FFF766"<?php endif; ?> style="text-align:center;border:#dddddd solid 1px;">強<br>い<br>使<br>用<br>感</td>
		<td<?php if($_POST['condition'] == "C"):?> bgcolor="#FFF766"<?php endif; ?> style="text-align:center;border:#dddddd solid 1px;">破<br>損<br>有</td>
		<td<?php if($_POST['condition'] == "J"):?> bgcolor="#FFF766"<?php endif; ?> style="text-align:center;border:#dddddd solid 1px;">要<br>修<br>理</td>
	</tr>
</table>
<?php if($_POST['condition'] == "N"): ?>
<br><br><img src="https://shopping.c.yimg.jp/lib/brand-across/newitem_notes.jpg" width="100%">
<?php endif; ?>
<?php if($_POST['condition'] == "NS"): ?>
<br><br><img src="https://shopping.c.yimg.jp/lib/brand-across/newitem_notes.jpg" width="100%">
<?php endif; ?>
<p>●ご注意●</p>
<p>※撮影は忠実な再現を心がけておりますが、モニターの発色具合によって実際のものと色が異なる場合がございます。</p>
<p>※店舗や他サイトでも平行して販売しております。在庫確認後のメールをもって、契約成立となります事をご了承ください。</p>

</CENTER>
