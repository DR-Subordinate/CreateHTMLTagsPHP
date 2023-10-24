<?php if($_POST['yahooImg'] != "on"): ?>
<?php if(!empty($_POST['start'])): ?>

<a href="https://www.rakuten.ne.jp/gold/brandacross/item_pict/<?php echo $_POST['bangou']; ?>.html" target="_blank"><img src="https://image.rakuten.co.jp/brandacross/cabinet/pict_link.jpg" width="100%"></a>
<br>
<?php endif; ?>
<?php endif; ?>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/20220107_300_7.jpg" width="100%"><br>
	
		<?php if($_POST['gift'] == "on"): ?>
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
<td bgcolor="#FFF"><?php echo $_POST['kanri']; ?></td>
</tr>
<tr>
<td bgcolor="#EEE"><b>ブランド</b></td>
<td bgcolor="#FFF"><?php echo $_POST['brand']; ?></td>
</tr>
<tr>
<td bgcolor="#EEE"><b>商品名</b></td>
<td bgcolor="#FFF"><?php echo $_POST['name']; ?></td>
</tr>
<?php if(!empty($_POST['line'])): ?>
<tr>
<td bgcolor="#EEE"><b>ライン</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['line']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['sozai'])): ?>
<tr>
<td bgcolor="#EEE"><b>素材</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['sozai']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['kataban'])): ?>
<tr>
<td bgcolor="#EEE"><b>型番</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['kataban']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['seizou'])): ?>
<tr>
<td bgcolor="#EEE"><b>製造番号</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['seizou']); ?></td>
</tr>
<?php endif; ?>
<?php if($_POST['seizoukoku'] == "on"): ?>
<tr>
<td bgcolor="#EEE"><b>製造国</b></td>
<td bgcolor="#FFF">フランス・スペイン・イタリアのいずれか<br>(※まれにUSAもございます)</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['color'])): ?>
<tr>
<td bgcolor="#EEE"><b>カラー</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['color']); ?></td>
</tr>
<?php endif; ?>
<?php if($_POST['color_he'] == "on"): ?>
<tr>
<td bgcolor="#EEE"><b>カラーに関して</b></td>
<td bgcolor="#FFF">エルメスのカラーに関して、実際の色味を表現出来ますよう、撮影・加工に尽力しておりますが、ご覧頂く環境によって異なる場合がございます。 必ずご希望のカラー名の確認をお願い致します。</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['style'])): ?>
<tr>
<td bgcolor="#EEE"><b>形状</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['style']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['sex'])): ?>
<tr>
<td bgcolor="#EEE"><b>性別</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['sex']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['teika'])): ?>
<tr>
<td bgcolor="#EEE"><b>参考定価</b></td>
<td bgcolor="#FFF"><?php echo $_POST['teika']; ?>円<br>※参考定価は各ブランド直営店にて新品で販売中もしくは過去に販売されていた価格です。</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['size'])): ?>
<tr>
<td bgcolor="#EEE"><b>サイズ</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['size']); ?><?php if($_POST['yubiwa'] == "on"): ?>
<br><a href="https://item.rakuten.co.jp/brandacross/c/0000000166/">サイズ直し1サイズ無料詳しくはこちら</a>
<br>サイズ直しをした場合返品不可となります。
<?php endif; ?>
</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['omosa'])): ?>
<tr>
<td bgcolor="#EEE"><b>重量</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['omosa']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['kinou'])): ?>
<tr>
<td bgcolor="#EEE"><b>機能</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['kinou']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['syuunou'])): ?>
<tr>
<td bgcolor="#EEE"><b>収納可能アイテム</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['syuunou']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['huzoku'])): ?>
<tr>
<td bgcolor="#EEE"><b>付属品</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['huzoku']); ?>
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
<td bgcolor="#EEE"><b>付属品</b></td>
<td bgcolor="#FFF">
<?php if($_POST['neck'] == "on"): ?>
※チェーンは付属致しません。<br>
<a href="https://item.rakuten.co.jp/brandacross/c/0000000260/">ネックレスチェーンはこちら</a>
<?php endif; ?>
</td>
</tr>
<?php elseif($_POST['neck2'] == "on"): ?>
<tr>
<td bgcolor="#EEE"><b>付属品</b></td>
<td bgcolor="#FFF">
<a href="https://item.rakuten.co.jp/brandacross/c/0000000261/">ペンダントトップはこちら</a>
</td>
</tr>
<?php endif; ?>




<?php if(!empty($_POST['staff'])): ?>
<tr>
<td bgcolor="#EEE"><b>スタッフコメント</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['staff']); ?>
</td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free2'])): ?>
<tr>
<td bgcolor="#EEE"><b><?php echo $_POST['freetitle2']; ?></b></td>
<td bgcolor="#FFF"><?php echo $_POST['free2']; ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['free3'])): ?>
<tr>
<td bgcolor="#EEE"><b><?php echo $_POST['freetitle3']; ?></b></td>
<td bgcolor="#FFF"><?php echo $_POST['free3']; ?></td>
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
	<td align="center" width="11%"<?php if($_POST['joutai'] == "N"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>N</td>
	<td align="center" width="11%"<?php if($_POST['joutai'] == "NS"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>NS</td>
	<td align="center" width="11%"<?php if($_POST['joutai'] == "S"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>S</td>
	<td align="center" width="11%"<?php if($_POST['joutai'] == "A"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>A</td>
	<td align="center" width="11%"<?php if($_POST['joutai'] == "AB"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>AB</td>
	<td align="center" width="11%"<?php if($_POST['joutai'] == "B"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>B</td>
	<td align="center" width="11%"<?php if($_POST['joutai'] == "BC"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>BC</td>
	<td align="center" width="11%"<?php if($_POST['joutai'] == "C"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>C</td>
	<td align="center" width="11%"<?php if($_POST['joutai'] == "J"):?> bgcolor="#FFF766"<?php else:?> bgcolor="#fff"<?php endif; ?>>D</td>
</table>
</td>
</tr>
<tr>
<td bgcolor="#EEE" width="80"><center><font size="7" color="#F00"><?php echo $_POST['joutai']; ?></font></center></td>
<td>
<font size="1">
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
 ?>
</font>

	</td>
</tr>
<?php if(!empty($_POST['soto'])): ?>
<tr>
<td bgcolor="#EEE"><b>外側</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['soto']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['uti'])): ?>
<tr>
<td bgcolor="#EEE"><b>内側</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['uti']); ?></td>
</tr>
<?php endif; ?>
<?php if(!empty($_POST['zen'])): ?>
<tr>
<td bgcolor="#EEE"><b>特記</b></td>
<td bgcolor="#FFF"><?php echo nl2br($_POST['zen']); ?></td>
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

<?php if($_POST['henpin'] == "on"): ?>
<a href="https://www.rakuten.ne.jp/gold/brandacross/tokusetu/anshin.html"><img src="https://image.rakuten.co.jp/brandacross/cabinet/hepin_ok_sp.jpg" width="100%"></a><br>
<?php else: ?>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/hepin_gai_sp_2.jpg"width="100%"><br>
<?php endif; ?>
<?php if($_POST['asu'] == "on"): ?>
<a href="https://event.rakuten.co.jp/asuraku/about/anshin/" target="_blank"><img src="https://image.rakuten.co.jp/brandacross/cabinet/asuraku-sample_sp.jpg"width="100%"></a><br>
<?php endif; ?>
<?php if($_POST['ship'] == "on"): ?>
<img src="https://image.rakuten.co.jp/brandacross/cabinet/150608_shipping.jpg"width="100%" alt="2～3営業日以内に出荷致します。"><br>
<?php endif; ?>


<?php if(!empty($_POST['linkA1'])): ?>
<table border="1" cellspacing="0" cellpadding="3" width="100%" bordercolor="#999">
<tr>
<td colspan="2" bgcolor="#EEE"><center>■ 関連商品 ■</center></td>
</tr>
<tr>
<td>
<a href="<?php echo strip_tags($_POST['linkA1'] , '<br><font>'); ?>"><img src="https://image.rakuten.co.jp/brandacross/cabinet/item_etc_link.jpg" width="100%"></a>
</td>
<td>
<a href="<?php echo strip_tags($_POST['linkA2'] , '<br><font>'); ?>"><img src="https://image.rakuten.co.jp/brandacross/cabinet/item_link_<?php echo $_POST['linkN2'] ;?>.jpg" width="100%"></a>
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
<?php if($_POST['orico'] == "on"): ?>
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
	<?php if($_POST['new_note'] == "on"): ?>
<br><img src="https://image.rakuten.co.jp/brandacross/cabinet/newitem_notes.jpg" width="100%">
<?php endif; ?>
	
