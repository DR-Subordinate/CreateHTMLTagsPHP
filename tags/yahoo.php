<p>
<center>
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788396.jpg" width="800">
</center>
<?php if(!empty($_POST['img-url'])): ?>
<br><br><center>
<a href="https://brandacross.xsrv.jp/syousaigazou/<?php echo $_POST['img-url']; ?>.html">
<font size="6">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788753.jpg" border="0">
</font>
</a>
</center>
<?php endif; ?>
<br>
<?php if(!empty($_POST['video-url'])): ?>
<center>
<font size="6">
<a href="<?php echo $_POST['video-url']; ?>">
<img src="https://image.rakuten.co.jp/brandacross/cabinet/youtube.jpg" border="0">
</a>
</font>
</center>
<?php endif; ?>
<br>
<center>
<TABLE WIDTH=800 BGCOLOR=#888888 CELLSPACING=1 CELLPADDING=5>
<TR>
<TD BGCOLOR=#dddddd COLSPAN=4 ALIGN=center>
<B>
<font size="3">商品の詳細</font>
</B>
</TD>
</TR>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">管理番号</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['management-number']; ?>
</font>
</TD>
</TR>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">ブランド</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['brand']; ?>
</font>
</TD>
</TR>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">商品名</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['product-name']; ?>
</font>
</TD>
</TR>
<font size="3">
<?php if(!empty($_POST['line'])): ?>
</font>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">ライン</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['line']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['material'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">素材</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['material']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['model-number'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">型　番</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['model-number']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['serial-number'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">製造番号</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['serial-number']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['color'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">カラー</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['color']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['price'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">定　価</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['price']; ?>円</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['ackakaku'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">ACROSS通常価格</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['ackakaku']; ?>円</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['size'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">サイズ</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['size']); ?><br>
<?php if($_POST['change-ring-size'] == "true"): ?>
<a href="https://image.rakuten.co.jp/brandacross/cabinet/150714_ring2.jpg"><font size="2">サイズ直し1サイズ無料詳しくはこちら</font></a>
<?php endif; ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['weight'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">重量</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['weight']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['feature'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">機　能</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['feature']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['accessory'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">付属品</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['accessory']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['outside'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">外　側</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['outside']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['inside'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">内　側</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['inside']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['special-note'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">特　記</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['special-note']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['syousai'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">詳　細</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['syousai']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['staff-comment'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">スタッフコメント
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['staff-comment']); ?>
</font>
</TD>
</TR>
<?php endif; ?>

<?php if(!empty($_POST['free-text-content'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">
<?php echo $_POST['free-text']; ?>
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['free-text-content']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content-2'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">
<?php echo $_POST['free-text-2']; ?>
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['free-text-content-2']; ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['free-text-content-3'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">
<?php echo $_POST['free-text-3']; ?>
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['free-text-content-3']; ?>
</font>
</TD>
</TR>
<?php endif; ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">付属品について
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
写真に掲載のないもの、商品説明に表記されている付属品以外は付属しておりません。<br>商品説明・写真にてご確認の上、ご不明点がございましたらお気軽にお問い合わせ下さいませ。<br>
</font>
</TD>
</TR>


</TABLE>
</center>
<br>
<br>
<center>
<TABLE WIDTH=800 BGCOLOR=#000000 CELLSPACING=1 CELLPADDING=5>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=10%>
<B>
<font size="3">ランク</font>
</B>
</TD>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=45%>
<B>
<font size="3">総合ランク</font>
</B>
</TD>
</TR>
<TR>
<TD ALIGN=center BGCOLOR=#ffffff WIDTH=10%>
<B>
<FONT SIZE="7" color="#ff0000">
<?php echo $_POST['condition']; ?>
</font>
</B>
</TD>
<TD BGCOLOR=#ffffff WIDTH=45%>

<font size="2">【N】 ：新品、未使用品  製造から2年以内の商品<br>【NS】：新品、未使用品 製造から2年以上経過、又は製造年が不明な商品<br>【S】 ：新品同様品<br>【A】 ：数回使用程度の美品<br>【AB】 ：若干の小傷又はシミがあるが全体的には状態が良い<br>【B】 ：一般的な中古品で全体的に使用感がある<br>【BC】：全体的に強い使用感がある<br>【C】 ：強い使用感あり　劣化や大きい汚れなどがある<br>【D】 ：欠品、故障有り<br>

</TD>
</tr>
</TABLE>
</center>
<br>
<br>
<center>
<table border="0" cellpadding="10" width="800">
<tr>
<td align="center">
<a href="tel:0120858881">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788503.jpg" width="100%" border="0" vspace="10"/>
</a>
</td>
</tr>
<tr>
<td align="center">
<a href="mailto:info@brandacross.jp">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788368.jpg" width="100%" border="0"/>
</a><br>
</td>
</tr>
</table>
<table border="0" cellpadding="10" width="800">
<tr>
<td align="center">
<a href="https://brandacross.jp/contact3.php">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788398.jpg" width="100%" border="0" vspace="20"/>
</a><br>
</td>
<td align="center">
<a href="https://auctions.yahoo.co.jp/seller/black_kps">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788375.jpg" width="100%" border="0" vspace="20"/>
</a></td>
</tr>
</table>
<br>
<br>
</center>
<center>
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788397.jpg" width="800">
</center>
<br>
<br>
</center>
</p>
