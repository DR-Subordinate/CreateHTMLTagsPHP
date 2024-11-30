<?php if(!empty($_POST['brand'])): ?>
【ブランド】
<?php echo $_POST['brand']; ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['product-name'])): ?>
【商品名】
<?php echo $_POST['product-name']; ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['line'])): ?>
【ライン】
<?php echo str_replace(array("\n"), '', $_POST['line']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['model-number'])): ?>
【型　番】
<?php echo str_replace(array("\n"), '', $_POST['model-number']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['serial-number'])): ?>
【製造番号】
<?php echo str_replace(array("\n"), '', $_POST['serial-number']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['country-of-manufacture'])): ?>
【製造国】
<?php
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

------------------------
<?php endif; ?>
<?php if(!empty($_POST['color'])): ?>
【カラー】
<?php echo str_replace(array("\n"), '
', $_POST['color']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['material'])): ?>
【素　材】
<?php echo str_replace(array("\n"), '
', $_POST['material']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['size'])): ?>
【サイズ】
<?php echo str_replace(array("\n"), '
', $_POST['size']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['weight'])): ?>
【重　量】
<?php echo str_replace(array("\n"), '
', $_POST['weight']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['feature'])): ?>
【機　能】
<?php echo str_replace(array("\n"), '
', $_POST['feature']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['containable-item'])): ?>
【収納可能アイテム】
<?php echo str_replace(array("\n"), '
', $_POST['containable-item']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['accessory'])): ?>
【付属品】
<?php echo str_replace(array("\n"), '
', $_POST['accessory']); ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['condition'])): ?>
商品ランク　【<?php echo $_POST['condition']; ?>】　<?php endif; ?>
<?php 

switch ($_POST['condition']) {
    case "N":
        echo "（新品※金具部分など輸送・検品の際にどうしてもついてしまう僅かなスレ傷がある場合がございます。）";
        break;
    case "S":
        echo "（未使用品（展示品またはアウトレット商品含む） 未使用品だが長期保管や展示により明確なダメージ等がある商品。アウトレット商品も含まれます。※詳細は下記説明をご覧ください）";
        break;
    case "SA":
        echo "（新品同様品 細かなあまり目立たないダメージがある程度の新品同様に奇麗なUSED商品）";
        break;
    case "A":
        echo "（中古品の中でも美品）";
        break;
    case "AB":
        echo "（若干の小傷又はシミがあるが全体的には状態が良い）";
        break;
    case "B":
        echo "（一般的な中古品で全体的に使用感がある）";
        break;
    case "BC":
        echo "（全体的に強い使用感がある）";
        break;
    case "C":
        echo "（強い使用感あり　劣化や大きい汚れなどがある）";
        break;
}
?>


<?php if(!empty($_POST['outside'])): ?>
【外　側】
<?php echo str_replace(array("\n"), '
', $_POST['outside']); ?>


<?php endif; ?>
<?php if(!empty($_POST['inside'])): ?>
【内　側】
<?php echo str_replace(array("\n"), '
', $_POST['inside']); ?>


<?php endif; ?>
<?php if(!empty($_POST['special-note'])): ?>
【特　記】
<?php echo str_replace(array("\n"), '
', $_POST['special-note']); ?>


<?php endif; ?>
------------------------
<?php if(!empty($_POST['syousai'])): ?>
【詳　細】
<?php echo $_POST['syousai']; ?>

------------------------
<?php endif; ?>
<?php if(!empty($_POST['staff-comment'])): ?>
【スタッフコメント】
<?php echo $_POST['staff-comment']; ?>

------------------------
<?php endif; ?>
管理番号：<?php echo $_POST['management-number']; ?>


<?php if(!empty($_POST['related-word'])): ?>
<?php echo $_POST['related-word']; ?>
<?php endif; ?>
