<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>商品詳細写真</title>
<style>
#galleria{height:430px}
</style>
<!-- load jQuery -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!-- load Galleria -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.3.6/galleria.min.js"></script>
</head>
<body>
<div style="font-size:14px; color:#333; margin:0; padding:10px 20px;">商品詳細写真</div>
<img src="head_img.jpg?11" width="100%">
<div id="galleria">


<?php if(!empty($_POST['start-number'])):
			$j = 1;
?>
<?php
$end = $_POST['end-number'] +1;
$start = $_POST['start-number'] ;
 for($i = $start; $i < $end; $i++): ?>
	<img src="https://image.rakuten.co.jp/brandacross/cabinet/across<?php echo $_POST['cabinet-number']; ?>/<?php echo $_POST['img-management-number']; ?>_<?php echo $i ?>.jpg" data-link="https://image.rakuten.co.jp/brandacross/cabinet/across<?php echo $_POST['cabinet-number']; ?>/<?php echo $_POST['img-management-number']; ?>_<?php echo $i ?>.jpg" />
<?php $j++; ?>
<?php endfor; ?>
<?php endif; ?>

</div>
<div style="font-size:12px; line-height:18px; color:#333; margin:0; padding:20px; clear:both;" >
■ 商品状態<br>
<?php if(!empty($_POST['outside'])): ?>
外側：<?php echo nl2br($_POST['outside']); ?><br>
<?php endif; ?>
<?php if(!empty($_POST['inside'])): ?>
内側：<?php echo nl2br($_POST['inside']); ?><br>
<?php endif; ?>
<?php if(!empty($_POST['special-note'])): ?>
特記：<?php echo nl2br($_POST['special-note']); ?><br>
<?php endif; ?>
<?php if(!empty($_POST['syousai'])): ?>
詳細：<?php echo nl2br($_POST['syousai']); ?><br>
<?php endif; ?>
</div>

<p><a href="javascript:window.open('about:blank','_self').close();" id="closeButton">前のページに戻る</a></p>

<script>
// Load the classic theme
Galleria.loadTheme('galleria.classic.min.js');
Galleria.configure({
    popupLinks: false
});
// Initialize Galleria
Galleria.run('#galleria');
</script>
</body>
</html>
