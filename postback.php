<?php

$clickid = $_GET['cnv_id'] ?? '';
$payout  = $_GET['payout'] ?? '';
$status  = $_GET['status'] ?? '';

$binomUrl = "https://YOUR-BINOM.COM/click.php?cnv_id={$clickid}&payout={$payout}&status={$status}";

$response = file_get_contents($binomUrl);
