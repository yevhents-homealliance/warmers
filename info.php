<?php
ini_set('display_errors', 'Off');
error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', '/path/to/your/php-error.log'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $base = $_SERVER['HTTP_HOST'];
    
    $full_name = $_POST['name'] ?? 'NO_NAME';
    $phone = $_POST['phone'] ?? 'NO_PHONE';
    $handwarmer_count = (int) $_POST['handwarmer__count'] ?? 0;
    $toewarmer_count = (int) $_POST['toewarmer__count'] ?? 0;
    $bodywarmer_count = (int) $_POST['bodywarmer__count'] ?? 0;
    $total_price = $_POST['total_price'] ?? 0;
    $orderDate =  $_POST['orderDate'] = date('d.m.Y H:i');
    $orderNumber =  $_POST['orderNumber'] = date('dmYHi');
    $orderInfo = "Грілки";
    $orderDetails = "Грілки для рук: $handwarmer_count шт., для ніг: $toewarmer_count шт., для тіла: $bodywarmer_count шт.";
    $total_items = $handwarmer_count + $toewarmer_count + $bodywarmer_count;

    $clickid = $_GET['clickid'] ?? $_GET['click_id'] ?? $_GET['subid'] ?? 'NO_CLICKID';
    $from = $_GET['from'] ?? 'UNKNOWN_SOURCE';

    $campaign_id = $_GET['campaign_id'] ?? 'UNKNOWN_SOURCE';
    $campaign_name = $_GET['campaign_name'] ?? 'UNKNOWN_CAMPNAME';
    $ad_name = $_GET['ad_name'] ?? 'UNKNOWN_ADNAME';


    // --------------------------
    // SEND TO GOOGLE SHEETS (GAS)
    // --------------------------
    $gas_url = "https://script.google.com/macros/s/AKfycbz0fR8pyzs1OT9ZWrKnp26x99yx_9iTIvpOmG-46gvAWgG-AMoTkMtxryr--kZco-qO/exec";

    $data = [
        "date" => $orderDate,
        "order_number" => $orderNumber,
        "order_info" => $orderInfo,
        "total_price" => (string) $total_price,
        "name" => $full_name,
        "phone" => (string) $phone,
        "order_details" => $orderDetails,
        "delivery" => "NO_DATA",
        "clickid" => $clickid,
    ];

    $ch = curl_init($gas_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);


    // --------------------------
    // SEND TO TELEGRAM
    // --------------------------

    $token = "";
    $chat_id = "";

    $keyboard = [
        'inline_keyboard' => [
            [
                [
                    'text' => "✅ ПРОДАЖА",
                    'url' => "{$base}/postback.php?cnv_id={$clickid}&payout=3&status=SALE"
                ]
            ],
            [
                [
                    'text' => "⛔️ ОТМЕНА",
                    'url' => "{$base}/postback.php?cnv_id={$clickid}&payout=0&status=REJECT"
                ]
            ]
        ]
    ];

    $replyMarkup = json_encode($keyboard);
    $text = "
        #НОВЕ ЗАМОВЛЕННЯ!\n
        №G{$orderNumber}\n
        \n\n
        Замовлення з 👉: {$from}\n
        CAMP NAME: {$campaign_name} (ID: {$campaign_id})\n
        ADS NAME: {$ad_name}\n
        \n\n
        Ім'я: {$full_name}\n
        Телефон: {$phone}\n
        Кількість (всі позиції): {$total_items}\n
        Деталі: {$orderDetails}\n
        Сума: {$total_price} грн\n
        ClickID: {$clickid}
    ";

    $url = "https://api.telegram.org/bot{$token}/sendMessage";

    file_get_contents($url . "?" . http_build_query([
        'chat_id' => $chat_id,
        'text' => $text,
        'reply_markup' => $replyMarkup
    ]));

    if (!empty($subid)) {
        $binom_url = "https://YOUR_BINOM_DOMAIN.com/postback?subid=$subid&status=lead";
        file_get_contents($binom_url);
    }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Замовлення успішно створене</title>
    <link rel="stylesheet" href="style/orders.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="orders">
        <div class="container">
            <div class="order__block">
                <a href="/" class="montserrat__logo">
                    <img class="order__logo-img" src="img/logo.png" alt="">
                    DROPSTORM
                </a>
                <p class="order__text">Ваше замовлення було успішно створене. Наш менеджер зв'яжеться з вами найближчим часом для підтвердження деталей.</p>
                <p class="order__text">Гарного дня та теплих покупок! 🧡</p>
                <div class="order__receipt">
                    <hr class="order__cut-here"/>
                    <h2 class="order__receipt-title">Деталі замовлення</h2>
                    <p class="order__receipt-text"><strong>Ім'я:</strong> <?php echo $full_name; ?></p>
                    <p class="order__receipt-text"><strong>Телефон:</strong> <?php echo $phone; ?></p>
                    <p class="order__receipt-text"><strong>Дата замовлення:</strong> <?php echo date("d.m.Y H:i"); ?></p>
                    <hr class="order__cut-here"/>
                </div>
                <a href="/" class="order__btn">Повернутися на головну</a>
            </div>
        </div>
    </section>
</body>
</html>