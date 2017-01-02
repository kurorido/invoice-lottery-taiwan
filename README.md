# invoice-lottery-taiwan

Taiwan Invoice Lottery API

# Installation

```
composer require roliroli/invoice-lottery-taiwan
```

# Example

```php
<?php

require_once './vendor/autoload.php';

use Roliroli\InvoiceLotteryTaiwan\InvoiceLotteryTaiwan;

echo json_encode(InvoiceLotteryTaiwan::query(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
```

# JSON Format

Format compatible with another <a href="https://github.com/zlargon/receipt-lottery-taiwan">Node.js implementation</a>

```json
{
    "new": {
        "super": {
            "name": "特別獎",
            "numbers": [
                "84568349"
            ],
            "description": "同期統一發票收執聯8位數號碼與上列號碼相同者獎金1,000萬元"
        },
        "special": {
            "name": "特獎",
            "numbers": [
                "89536536"
            ],
            "description": "同期統一發票收執聯8位數號碼與上列號碼相同者獎金200萬元"
        },
        "first": {
            "name": "頭獎",
            "numbers": [
                "32149197",
                "47672189",
                "33669493"
            ],
            "description": "同期統一發票收執聯8位數號碼與上列號碼相同者獎金20萬元"
        },
        "second": {
            "name": "二獎",
            "numbers": [],
            "description": "同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4 萬元"
        },
        "thrid": {
            "name": "三獎",
            "numbers": [],
            "description": "同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1 萬元"
        },
        "fourth": {
            "name": "四獎",
            "numbers": [],
            "description": "同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4 千元"
        },
        "fifth": {
            "name": "五獎",
            "numbers": [],
            "description": "同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金 1 千元"
        },
        "sixth": {
            "name": "六獎",
            "numbers": [],
            "description": "同期統一發票收執聯末3 位數號碼與頭獎中獎號碼末3 位相同者各得獎金 2 百元"
        },
        "addition": {
            "name": "增開六獎",
            "numbers": [
                "161",
                "539",
                "838",
                "037"
            ],
            "description": "同期統一發票收執聯末3 位數號碼與上列號碼相同者各得獎金 2 百元"
        }
    },
    "old": {
        "super": {
            "name": "特別獎",
            "numbers": [
                "91909013"
            ],
            "description": "同期統一發票收執聯8位數號碼與上列號碼相同者獎金1,000萬元"
        },
        "special": {
            "name": "特獎",
            "numbers": [
                "95976127"
            ],
            "description": "同期統一發票收執聯8位數號碼與上列號碼相同者獎金200萬元"
        },
        "first": {
            "name": "頭獎",
            "numbers": [
                "54845444",
                "41876525",
                "86331065"
            ],
            "description": "同期統一發票收執聯8位數號碼與上列號碼相同者獎金20萬元"
        },
        "second": {
            "name": "二獎",
            "numbers": [],
            "description": "同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4 萬元"
        },
        "thrid": {
            "name": "三獎",
            "numbers": [],
            "description": "同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1 萬元"
        },
        "fourth": {
            "name": "四獎",
            "numbers": [],
            "description": "同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4 千元"
        },
        "fifth": {
            "name": "五獎",
            "numbers": [],
            "description": "同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金 1 千元"
        },
        "sixth": {
            "name": "六獎",
            "numbers": [],
            "description": "同期統一發票收執聯末3 位數號碼與頭獎中獎號碼末3 位相同者各得獎金 2 百元"
        },
        "addition": {
            "name": "增開六獎",
            "numbers": [
                "352",
                "672",
                "731",
                "214"
            ],
            "description": "同期統一發票收執聯末3 位數號碼與上列號碼相同者各得獎金 2 百元"
        }
}
```

# License

MIT
