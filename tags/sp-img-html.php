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
<script src="./js/jquery.js"></script>
<!-- load Galleria -->
<script src="./js/galleria-1.3.6.min.js?121"></script>
</head>
<body>
<div style="font-size:14px; color:#333; margin:0; padding:10px 20px;">商品詳細写真</div>
<img src="head_img.jpg?11" width="100%">
<div id="galleria">


<?php if(!empty($_POST['start'])):
			$j = 1;
?>
<?php
$end = $_POST['end'] +1;
$start = $_POST['start'] ;
 for($i = $start; $i < $end; $i++): ?>
	<img src="https://image.rakuten.co.jp/brandacross/cabinet/across<?php echo $_POST['cabi']; ?>/<?php echo $_POST['pictKanri']; ?>_<?php echo $i ?>.jpg" data-link="https://image.rakuten.co.jp/brandacross/cabinet/across<?php echo $_POST['cabi']; ?>/<?php echo $_POST['pictKanri']; ?>_<?php echo $i ?>.jpg" />
<?php $j++; ?>
<?php endfor; ?>
<?php endif; ?>

</div>
<div style="font-size:12px; line-height:18px; color:#333; margin:0; padding:20px; clear:both;" >
■ 商品状態<br>
<?php if(!empty($_POST['soto'])): ?>
外側：<?php echo nl2br($_POST['soto']); ?><br>
<?php endif; ?>
<?php if(!empty($_POST['uti'])): ?>
内側：<?php echo nl2br($_POST['uti']); ?><br>
<?php endif; ?>
<?php if(!empty($_POST['zen'])): ?>
特記：<?php echo nl2br($_POST['zen']); ?><br>
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
