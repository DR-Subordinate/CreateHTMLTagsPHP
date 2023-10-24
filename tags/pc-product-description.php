<img src="https://image.rakuten.co.jp/brandacross/cabinet/20220106_2.jpg" width="350" style="margin-bottom:10px;">
	
	<?php if($_POST['gift'] == "on"): ?>
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
<td><?php echo $_POST['kanri']; ?></td>
</tr>
<tr>
<th>ブランド</th>
<td><?php echo $_POST['brand']; ?></td>
</tr>
<tr>
<th>商品名</th>
<td><?php echo $_POST['name']; ?></td>
</tr>
<?php if(!empty($_POST['line'])): ?>
<tr>
<th>ライン</th>
<td><?php echo nl2br($_POST['line']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['sozai'])): ?>
<tr>
<th>素材</th>
<td><?php echo nl2br($_POST['sozai']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['kataban'])): ?>
<tr>
<th>型番</th>
<td><?php echo nl2br($_POST['kataban']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['seizou'])): ?>
<tr>
<th>製造番号</th>
<td><?php echo nl2br($_POST['seizou']); ?></td>
</tr>
<?php endif; ?>
<?php if($_POST['seizoukoku'] == "on"): ?>
<tr>
<th>製造国</th>
<td>フランス・スペイン・イタリアのいずれか<br>(※まれにUSAもございます)</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['color'])): ?>
<tr>
<th>カラー</th>
<td><?php echo nl2br($_POST['color']); ?></td>
</tr>
<?php endif; ?>
<?php if($_POST['color_he'] == "on"): ?>
<tr>
<th>カラーに関して</th>
<td>エルメスのカラーに関して、実際の色味を表現出来ますよう、撮影・加工に尽力しておりますが、ご覧頂く環境によって異なる場合がございます。 必ずご希望のカラー名の確認をお願い致します。</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['style'])): ?>
<tr>
<th>形状</th>
<td><?php echo nl2br($_POST['style']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['sex'])): ?>
<tr>
<th>性別</th>
<td><?php echo nl2br($_POST['sex']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['teika'])): ?>
<tr>
<th>参考定価</th>
<td><?php echo $_POST['teika']; ?>円<br>※参考定価は各ブランド直営店にて新品で販売中もしくは過去に販売されていた価格です。</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['size'])): ?>
<tr>
<th>サイズ</th>
<td><?php echo nl2br($_POST['size']); ?><?php if($_POST['yubiwa'] == "on"): ?>
<br><a href="https://item.rakuten.co.jp/brandacross/c/0000000166/"><font size="2">サイズ直し1サイズ無料詳しくはこちら</font></a>
<br>サイズ直しをした場合返品不可となります。
<?php endif; ?>

</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['omosa'])): ?>
<tr>
<th>重量</th>
<td><?php echo nl2br($_POST['omosa']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['kinou'])): ?>
<tr>
<th>機能</th>
<td><?php echo nl2br($_POST['kinou']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['syuunou'])): ?>
<tr>
<th>収納可能アイテム</th>
<td><?php echo nl2br($_POST['syuunou']); ?></td>
</tr>
<?php endif; ?>

<?php if(!empty($_POST['huzoku'])): ?>
<tr>
<th>付属品</th>
<td><?php echo nl2br($_POST['huzoku']); ?>
<?php if($_POST['neck'] == "on"): ?>
<br>※チェーンは付属致しません。<br>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000260/">ネックレスチェーンはこちら</a>
<?php endif; ?>
<?php if($_POST['neck2'] == "on"): ?>
<br>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000261/">ペンダントトップはこちら</a>
<?php endif; ?>
<br><br>写真・説明欄に表記されている付属品以外は付属しておりません。
</td>
</tr>
<?php elseif($_POST['neck'] == "on"): ?>
<tr>
<th>付属品</th>
<td>※チェーンは付属致しません。<br>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000260/">ネックレスチェーンはこちら</a>
</td>
</tr>
<?php elseif($_POST['neck2'] == "on"): ?>
<tr>
<th>付属品</th>
<td>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000261/">ペンダントトップはこちら</a>
</td>
</tr>
<?php endif; ?>




<?php if(!empty($_POST['staff'])): ?>
<tr>
<th>スタッフコメント</th>
<td><?php echo nl2br($_POST['staff']); ?>
</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free'])): ?>
<tr>
<th><?php echo $_POST['freetitle']; ?></th>
<td><?php echo nl2br($_POST['free']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free2'])): ?>
<tr>
<th><?php echo $_POST['freetitle2']; ?></th>
<td><?php echo $_POST['free2']; ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free3'])): ?>
<tr>
<th><?php echo $_POST['freetitle3']; ?></th>
<td><?php echo $_POST['free3']; ?></td>
</tr>
<?php endif; ?>

</table>
<br />
<img src="https://www.rakuten.ne.jp/gold/brandacross/images/bar/rank-1.png" alt="商品ランク">
<br />
<table class="tblitemrank">
<tr>
	<th style="font-size:24px;font-weight:bold;color:#bf0000;width:80px;"><?php echo $_POST['joutai']; ?></th>
	<td>
<?php 
switch ($_POST['joutai']) {
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
<?php if(!empty($_POST['soto'])): ?>
<tr>
<th>外側</th>
<td><?php echo nl2br($_POST['soto']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['uti'])): ?>
<tr>
<th>内側</th>
<td><?php echo nl2br($_POST['uti']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['zen'])): ?>
<tr>
<th>特記</th>
<td><?php echo nl2br($_POST['zen']); ?></td>
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
		<th>NS</th>
		<th>S</th>
		<th>A</th>
		<th>AB</th>
		<th>B</th>
		<th>BC</th>
		<th>C</th>
		<th>J</th>
	</tr>
	<tr>
		<td<?php if($_POST['joutai'] == "N"):?> bgcolor="#FFF766"<?php endif; ?>>新<br>品</td>
		<td<?php if($_POST['joutai'] == "NS"):?> bgcolor="#FFF766"<?php endif; ?>>未<br>使<br>用<br>品</td>
		<td<?php if($_POST['joutai'] == "S"):?> bgcolor="#FFF766"<?php endif; ?>>新<br>品<br>同<br>様<br>品</td>
		<td<?php if($_POST['joutai'] == "A"):?> bgcolor="#FFF766"<?php endif; ?>>中<br>古<br>超<br>美<br>品</td>
		<td<?php if($_POST['joutai'] == "AB"):?> bgcolor="#FFF766"<?php endif; ?>>中<br>古<br>美<br>品</td>
		<td<?php if($_POST['joutai'] == "B"):?> bgcolor="#FFF766"<?php endif; ?>>中<br>古<br>良<br>品</td>
		<td<?php if($_POST['joutai'] == "BC"):?> bgcolor="#FFF766"<?php endif; ?>>強<br>い<br>使<br>用<br>感</td>
		<td<?php if($_POST['joutai'] == "C"):?> bgcolor="#FFF766"<?php endif; ?>>破<br>損<br>有</td>
		<td<?php if($_POST['joutai'] == "J"):?> bgcolor="#FFF766"<?php endif; ?>>要<br>修<br>理</td>
	</tr>
</table>
<br>
<div class="monitoratten">※モニターの発色具合によって実際のものと色が異なる場合がございます。</div>
<br>
<div class="descBanner">
<?php if($_POST['yahooImg'] != "on"): ?>
<?php if(!empty($_POST['start'])): ?>
<div>
<a href="https://item.rakuten.co.jp/brandacross/<?php echo $_POST['bangou']; ?>/#syousai" style="display:block;"><img src="https://www.rakuten.ne.jp/gold/brandacross/images/bar/gazou_link.gif?d=2014051900" alt="詳細画像はこちら"></a>
</div>
<?php endif; ?>
<?php endif; ?>
<?php if($_POST['henpin'] == "on"): ?>
<div>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000196/"><img src="https://image.rakuten.co.jp/brandacross/cabinet/hepin_ok_3.jpg" alt="返品対象商品"></a>
</div>
<?php else: ?>
<div>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/hepin_gai_2.jpg" alt="返品対象外">
</div>
<?php endif; ?>
<?php if($_POST['asu'] == "on"): ?>
<div>
<a href="https://event.rakuten.co.jp/asuraku/about/anshin/" target="_blank"><img src="https://image.rakuten.co.jp/brandacross/cabinet/img62570276.jpg" alt="あす楽対応商品"></a>
</div>
<?php endif; ?>
<?php if($_POST['ship'] == "on"): ?>
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
<?php if($_POST['asu'] == "on"): ?>
<iframe src="https://www.rakuten.ne.jp/gold/brandacross/iframe/shipping_date/index.html" width="352" height="190" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" hspace="0" vspace="0">専用ブラウザでご覧下さい</iframe>
<?php endif; ?>


<?php if($_POST['orico'] == "on"): ?>
<iframe src="https://www.rakuten.ne.jp/gold/brandacross/orico/index.html" width="352" height="290" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" hspace="0" vspace="0">専用ブラウザでご覧下さい</iframe>
<?php endif; ?>
