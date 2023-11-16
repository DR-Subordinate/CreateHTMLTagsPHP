<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ブランドアクロス</title>
<link rel="stylesheet" type="text/css" href="./css/zoom.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.1.0/jquery.elevatezoom.min.js"></script>
<script type="text/javascript" >
$(document).ready(function () {
$("#img_01").elevateZoom({gallery:'galleryBox', cursor: 'pointer', galleryActiveClass: "active", imageCrossfade: true, loadingIcon: "https://www.elevateweb.co.uk/spinner.gif", easing : true, scrollZoom : true,
zoomWindowWidth:231,
zoomWindowHeight:372
}); 

$("#img_01").bind("click", function(e) {  
  var ez =   $('#img_01').data('elevateZoom');
  ez.closeAll(); //NEW: This function force hides the lens, tint and window	
	$.fancybox(ez.getGalleryList());
  return false;
}); 

}); 

</script>

</head>


<body>
<table width="630" id="headTitle">
<tr>
<td>▼マウスオンでズーム</td>
<td width="220">▼クリックで切替</td>
</tr>
</table>

<div id="galleryBox" class="clearfix">


<img id="img_01" src="https://thumbnail.image.rakuten.co.jp/@0_mall/brandacross/cabinet/across<?php echo $_POST['cabinet-number']; ?>/<?php echo $_POST['img-management-number']; ?>_<?php echo $_POST['start-number'] ; ?>.jpg?_ex=380x380&s=2&r=1" data-zoom-image="https://thumbnail.image.rakuten.co.jp/@0_mall/brandacross/cabinet/across<?php echo $_POST['cabinet-number']; ?>/<?php echo $_POST['img-management-number']; ?>_<?php echo $_POST['start-number'] ; ?>.jpg"/>
<div id="gal1">


<?php if(!empty($_POST['start-number'])):
			$j = 1;
?>
<?php
$end = $_POST['end-number'] +1;
$start = $_POST['start-number'] ;
 for($i = $start; $i < $end; $i++): ?>
<a href="#" data-image="https://thumbnail.image.rakuten.co.jp/@0_mall/brandacross/cabinet/across<?php echo $_POST['cabinet-number']; ?>/<?php echo $_POST['img-management-number']; ?>_<?php echo $i ?>.jpg?_ex=380x380&s=2&r=1" data-zoom-image="https://thumbnail.image.rakuten.co.jp/@0_mall/brandacross/cabinet/across<?php echo $_POST['cabinet-number']; ?>/<?php echo $_POST['img-management-number']; ?>_<?php echo $i ?>.jpg">
<img id="img_<?php echo $i ?>" src="https://thumbnail.image.rakuten.co.jp/@0_mall/brandacross/cabinet/across<?php echo $_POST['cabinet-number']; ?>/<?php echo $_POST['img-management-number']; ?>_<?php echo $i ?>.jpg?_ex=380x380&s=2&r=1" />
</a>

<?php $j++; ?>
<?php endfor; ?>
<?php endif; ?>



</div>
</div>


</body>
</html>
