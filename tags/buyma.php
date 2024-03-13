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
<?php if(!empty($_POST['accessory'])): ?>
付属品　　<?php echo str_replace(array("\n"), '
　　　　　', $_POST['accessory']); ?>

<?php endif; ?>
<?php if(!empty($_POST['condition'])): ?>
状態　　<?php echo $_POST['condition']; ?>　　<?php endif; ?>
<?php 

switch ($_POST['condition']) {
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


<?php if(!empty($_POST['staff-comment'])): ?>
スタッフコメント
<?php echo $_POST['staff-comment']; ?>

<?php endif; ?>

<?php if(!empty($_POST['related-word'])): ?>
関連ワード　<?php echo $_POST['related-word']; ?>
<?php endif; ?>
	
。°+°。°+　°。°。°+°。°+　°。°。°+°。

【発送について】
14時までのご注文（決済確認済）は当日発送、14時以降のご注文は翌営業日に発送いたします。（土祝は10時まで）

【付属品について】
写真に掲載のないもの、商品説明に表記されている付属品以外は付属しておりません。

【返品・交換について】
お客様都合による商品の返品および交換は承っておりません。

商品説明の記載と明らかに異なる状態の商品、又はご注文と異なる商品が到着した場合は受取り後3日以内にご連絡下さいませ。

ただし、以下の理由による返品・返金・交換は一切お受け出来ません。

※一度でもご使用になられた商品
※商品発送時の状態と明らかに異なる商品
※商品到着後3日以上経過している商品
(到着後は直ちに開封し、商品をご確認ください)
※お客様都合により商品がご不要になった場合等


【在庫について】
当店の商品は店頭・その他サイトでも販売しており、また基本的に1点物となります。
随時在庫の管理を行っておりますが、反映までの時間に若干の誤差が発生する場合がございますので、 万が一売り切れの場合は、誠に申し訳ございませんが、何卒ご了承下さいます様お願い申し上げます。

【販売証明書について】
当店では少しでもお客様へご安心頂く為、当店で販売した旨を証明する販売証明書を付属しております。
※鑑定書ではございません。

スタッフの名刺も同封致しますので、お困りごとがございましたら、お気軽にご連絡下さいませ。

。°+°。°+　°。°。°+°。°+　°。°。°+°。

