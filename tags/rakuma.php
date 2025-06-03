管理番号　<?php echo $_POST['management-number']; ?>

ブランド　<?php echo $_POST['brand']; ?>

商品名　　<?php echo $_POST['product-name']; ?>

<?php if(!empty($_POST['line'])): ?>
ライン　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['line']); ?>

<?php endif; ?>
<?php if(!empty($_POST['material'])): ?>
素　材　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['material']); ?>

<?php endif; ?>
<?php if(!empty($_POST['model-number'])): ?>
型　番　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['model-number']); ?>

<?php endif; ?>
<?php if(!empty($_POST['serial-number'])): ?>
製造番号　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['serial-number']); ?>

<?php endif; ?>
<?php if(!empty($_POST['color'])): ?>
カラー　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['color']); ?>

<?php endif; ?>
<?php if(!empty($_POST['shape'])): ?>
形　状　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['shape']); ?>

<?php endif; ?>
<?php if(!empty($_POST['sex'])): ?>
性　別　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['sex']); ?>

<?php endif; ?>
<?php if(!empty($_POST['price'])): ?>
参考定価　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['price']); ?>円
<?php endif; ?>
<?php if(!empty($_POST['size'])): ?>
サイズ　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['size']); ?>

<?php endif; ?>
<?php if(!empty($_POST['weight'])): ?>
重　量　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['weight']); ?>

<?php endif; ?>
<?php if(!empty($_POST['feature'])): ?>
機　能　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['feature']); ?>

<?php endif; ?>
<?php if(!empty($_POST['containable-item'])): ?>
収納可能アイテム　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['containable-item']); ?>

<?php endif; ?>
<?php if(!empty($_POST['accessory'])): ?>
付属品　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['accessory']); ?>



写真・説明欄に表記されている付属品以外は付属しておりません。
<?php endif; ?>
<?php if(!empty($_POST['outside'])): ?>
外　側　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['outside']); ?>

<?php endif; ?>
<?php if(!empty($_POST['inside'])): ?>
内　側　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['inside']); ?>

<?php endif; ?>
<?php if(!empty($_POST['special-note'])): ?>
特　記　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['special-note']); ?>

<?php endif; ?>
<?php if(!empty($_POST['syousai'])): ?>
詳　細　　<?php echo $_POST['syousai']; ?>

<?php endif; ?>
<?php if(!empty($_POST['free-text-content'])): ?>
<?php echo $_POST['free-text']; ?>　<?php echo $_POST['free-text-content']; ?>

<?php endif; ?>
<?php if(!empty($_POST['free-text-2'])): ?>
<?php echo $_POST['free-text-2']; ?>　<?php echo $_POST['free-text-content-2']; ?>

<?php endif; ?>
<?php if(!empty($_POST['free-text-3'])): ?>
<?php echo $_POST['free-text-3']; ?>　<?php echo $_POST['free-text-content-3']; ?>

<?php endif; ?>
<?php if(!empty($_POST['condition'])): ?>
商品ランク　　<?php echo $_POST['condition']; ?>　　<?php endif; ?>
<?php 

switch ($_POST['condition']) {
    case "N":
        echo "（新品※輸送・検品の際にどうしてもついてしまう僅かなスレ・押し跡等がある場合がございます。）";
        break;
    case "S":
        echo "（未使用品（展示品またはアウトレット商品含む） 未使用品だが長期保管や展示により明確なダメージ等がある商品。アウトレット商品も含まれます。）";
        break;
    case "SA":
        echo "（超美品 細かなあまり目立たないダメージがある程度の新品同様に奇麗なUSED商品）";
        break;
    case "A":
        echo "（中古美品 多少の使用感・ダメージ等はあるが、比較的奇麗な商品）";
        break;
    case "AB":
        echo "（中古良品 使用感・多少のキズや汚れ等があるが、全体的には状態が良い商品）";
        break;
    case "B":
        echo "（中古品 日常的な使用感・一見してキズや汚れが目立つが、使用には差支えのない状態の商品）";
        break;
    case "BC":
        echo "（全体的に強い使用感がある）";
        break;
    case "C":
        echo "（強い使用感あり　劣化や大きい汚れなどがある）";
        break;
}
?>


<?php if(!empty($_POST['staff-comment'])): ?>
スタッフコメント
<?php echo $_POST['staff-comment']; ?>

<?php endif; ?>

<?php if(!empty($_POST['related-word'])): ?>
関連ワード　<?php echo $_POST['related-word']; ?>
<?php endif; ?>
