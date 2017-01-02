<?php

require_once './vendor/autoload.php';

use Roliroli\InvoiceLotteryTaiwan\InvoiceLotteryTaiwan;

echo json_encode(InvoiceLotteryTaiwan::query(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);