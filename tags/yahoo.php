<p>
<CENTER>
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788396.jpg" width="800">
</CENTER>
<?php if(!empty($_POST['imageurl'])): ?>
<BR><BR><CENTER>
<a href="https://brandacross.xsrv.jp/syousaigazou/<?php echo $_POST['imageurl']; ?>.html">
<font size="6">
<img src="https://auctions.c.yimg.jp/images.auctions.yahoo.co.jp/image/dr001/snavi0/ez4ai2mjspd322phnvvsooaa5m/2095788753.jpg" border="0">
</font>
</a>
</CENTER>
<?php endif; ?>
<BR>
<?php if(!empty($_POST['dougaurl'])): ?>
<CENTER>
<font size="6">
<a href="<?php echo $_POST['dougaurl']; ?>">
<img src="https://image.rakuten.co.jp/brandacross/cabinet/youtube.jpg" border="0">
</a>
</font>
</CENTER>
<?php endif; ?>
<BR>
<CENTER>
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
<?php echo $_POST['kanri']; ?>
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
<?php echo $_POST['name']; ?>
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
<?php if(!empty($_POST['sozai'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">素材</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['sozai']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['kataban'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">型　番</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['kataban']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['seizou'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">製造番号</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['seizou']); ?>
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
<?php if(!empty($_POST['teika'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">定　価</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['teika']; ?>円</font>
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
<?php if($_POST['yubiwa'] == "on"): ?>
<a href="https://image.rakuten.co.jp/brandacross/cabinet/150714_ring2.jpg"><font size="2">サイズ直し1サイズ無料詳しくはこちら</font></a>
<?php endif; ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['omosa'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">重量</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['omosa']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['kinou'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">機　能</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['kinou']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['huzoku'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">付属品</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['huzoku']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['soto'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">外　側</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['soto']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['uti'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">内　側</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['uti']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['zen'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">全　体</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['zen']); ?>
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
<?php if(!empty($_POST['staff'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">スタッフコメント
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['staff']); ?>
</font>
</TD>
</TR>
<?php endif; ?>

<?php if(!empty($_POST['free'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">
<?php echo $_POST['freetitle']; ?>
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo nl2br($_POST['free']); ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['free2'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">
<?php echo $_POST['freetitle2']; ?>
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['free2']; ?>
</font>
</TD>
</TR>
<?php endif; ?>
<?php if(!empty($_POST['free3'])): ?>
<TR>
<TD BGCOLOR=#dddddd ALIGN=center WIDTH=15%>
<font size="3">
<?php echo $_POST['freetitle3']; ?>
</font>
</TD>
<TD BGCOLOR=#ffffff>
<font size="3">
<?php echo $_POST['free3']; ?>
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
</CENTER>
<br>
<br>
<CENTER>
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
<?php echo $_POST['joutai']; ?>
</font>
</B>
</TD>
<TD BGCOLOR=#ffffff WIDTH=45%>

<font size="2">【N】 ：新品、未使用品  製造から2年以内の商品<br>【NS】：新品、未使用品 製造から2年以上経過、又は製造年が不明な商品<br>【S】 ：新品同様品<br>【A】 ：数回使用程度の美品<br>【AB】 ：若干の小傷又はシミがあるが全体的には状態が良い<br>【B】 ：一般的な中古品で全体的に使用感がある<br>【BC】：全体的に強い使用感がある<br>【C】 ：強い使用感あり　劣化や大きい汚れなどがある<br>【D】 ：欠品、故障有り<br>

</TD>
</tr>
</TABLE>
</center>
<BR>
<BR>
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
<BR>
<BR>
</CENTER>
</p>
