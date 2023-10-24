管理番号　<?php echo $_POST['kanri']; ?>

ブランド　<?php echo $_POST['brand']; ?>

商品名　　<?php echo $_POST['name']; ?>

<?php if(!empty($_POST['line'])): ?>
ライン　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['line']); ?>

<?php endif; ?>
<?php if(!empty($_POST['sozai'])): ?>
素　材　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['sozai']); ?>

<?php endif; ?>
<?php if(!empty($_POST['kataban'])): ?>
型　番　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['kataban']); ?>

<?php endif; ?>
<?php if(!empty($_POST['seizou'])): ?>
製造番号　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['seizou']); ?>

<?php endif; ?>
<?php if(!empty($_POST['color'])): ?>
カラー　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['color']); ?>

<?php endif; ?>
<?php if(!empty($_POST['style'])): ?>
形　状　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['style']); ?>

<?php endif; ?>
<?php if(!empty($_POST['sex'])): ?>
性　別　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['sex']); ?>

<?php endif; ?>
<?php if(!empty($_POST['teika'])): ?>
参考定価　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['teika']); ?>円
<?php endif; ?>
<?php if(!empty($_POST['size'])): ?>
サイズ　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['size']); ?>

<?php endif; ?>
<?php if(!empty($_POST['omosa'])): ?>
重　量　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['omosa']); ?>

<?php endif; ?>
<?php if(!empty($_POST['kinou'])): ?>
機　能　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['kinou']); ?>

<?php endif; ?>
<?php if(!empty($_POST['syuunou'])): ?>
収納可能アイテム　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['syuunou']); ?>

<?php endif; ?>
<?php if(!empty($_POST['huzoku'])): ?>
付属品　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['huzoku']); ?>

<?php endif; ?>
<?php if(!empty($_POST['soto'])): ?>
外　側　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['soto']); ?>

<?php endif; ?>
<?php if(!empty($_POST['uti'])): ?>
内　側　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['uti']); ?>

<?php endif; ?>
<?php if(!empty($_POST['zen'])): ?>
特　記　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['zen']); ?>

<?php endif; ?>
<?php if(!empty($_POST['syousai'])): ?>
詳　細　　<?php echo $_POST['syousai']; ?>

<?php endif; ?>
<?php if(!empty($_POST['free'])): ?>
<?php echo $_POST['freetitle']; ?>　<?php echo $_POST['free']; ?>

<?php endif; ?>
<?php if(!empty($_POST['freetitle2'])): ?>
<?php echo $_POST['freetitle2']; ?>　<?php echo $_POST['free2']; ?>

<?php endif; ?>
<?php if(!empty($_POST['freetitle3'])): ?>
<?php echo $_POST['freetitle3']; ?>　<?php echo $_POST['free3']; ?>

<?php endif; ?>
<?php if(!empty($_POST['joutai'])): ?>
商品ランク　　<?php echo $_POST['joutai']; ?>　　<?php endif; ?>
<?php 

switch ($_POST['joutai']) {
    case "N":
        echo "（新品、未使用品  製造から2年以内の商品）";
        break;
    case "NS":
        echo "（新品、未使用品 製造から2年以上経過、又は製造年が不明な商品）";
        break;
    case "S":
        echo "（新品同様品）";
        break;
    case "A":
        echo "（数回使用程度の美品）";
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
    case "D":
        echo "（欠品、故障有り）";
        break;
}
?>


<?php if(!empty($_POST['staff'])): ?>
スタッフコメント
<?php echo $_POST['staff']; ?>

<?php endif; ?>
付属品について
写真に掲載のないもの、商品説明に表記されている付属品以外は付属しておりません。
商品説明・写真にてご確認の上、ご不明点がございましたらお気軽にお問い合わせ下さいませ。

<?php if(!empty($_POST['kanren'])): ?>
関連ワード　<?php echo $_POST['kanren']; ?>
<?php endif; ?>
