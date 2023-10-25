<div id="syousai" style="margin-bottom:60px"></div><br><br><br>

<?php if($_POST['show-yahoo-img'] != "true"): ?>
<?php if(!empty($_POST['start-number'])): ?>
<iframe src="https://www.rakuten.ne.jp/gold/brandacross/item_pict_pc/<?php echo $_POST['product-url']; ?>.html" width="630" height="450" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" hspace="0" vspace="0"></iframe>
<?php endif; ?>
<?php endif; ?>

<img src="https://www.rakuten.ne.jp/gold/brandacross/images/body/kantei-1.jpg" alt="真贋について"><br><br>

<iframe src="https://www.rakuten.ne.jp/gold/brandacross/iframe/desc/index.html" width="630" height="570" frameborder="0" scrolling="no" name="main" marginwidth="0" marginheight="0" hspace="0" vspace="0">専用ブラウザでご覧下さい</iframe>

<img src="https://www.rakuten.ne.jp/gold/brandacross/images/bar/pickup.png" alt="おすすめ商品">
<style>
div.hanbaiWrap img {
border:none;
}

div.hanbaiWrap {
width:630px;
}

h3.hanbaiBar {
background-color:#000000;
padding:5px 10px;
color:#ffffff;
font-size:13px;
font-weight:bold;
}

.hanbaiImage {
width:620px;
}

.hanbaiImage a {
float:left;
border:solid 4px #dddddd;
display:block;
margin:0 15px 15px 0;
}

.hanbaiImage a:hover {
border:solid 4px #999999;
}


</style>



<?php 
	switch($_POST['product-category']) {
	case "hermes":
		$pcCatName = "helmes";
		break;
	case "louis-vuitton":
		$pcCatName = "lv";
		break;
	case "chanel":
		$pcCatName = "chanel";
		break;
	case "bag":
		$pcCatName = "bag";
		break;
	case "wallet":
		$pcCatName = "wallet";
		break;
	case "jewelry":
		$pcCatName = "jewelry";
		break;
	case "watch":
		$pcCatName = "watch";
		break;
	case "none":
		$pcCatName = "none";
		break;
	default:
		$pcCatName = "none";
		break;
	}
?>
<?php if($pcCatName != "none"): ?>
<iframe src="https://www.rakuten.ne.jp/gold/brandacross/iframe/item_bottom/<?php echo $pcCatName; ?>.html" style="margin-top:30px;" width="630" height="1300" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" hspace="0" vspace="0">専用ブラウザでご覧下さい</iframe>
<?php endif; ?>
