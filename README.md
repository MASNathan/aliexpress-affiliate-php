# Aliexpress Affiliate Program API wrapper

## Usage

```php
<?php

$client = new \MASNathan\AliExpress\Client(12345);
$aliExpress = new MASNathan\AliExpress\AliExpress($client);

$request = new \MASNathan\AliExpress\Request\ListPromotionProductRequest();

$request
    ->setFields([
        'totalResults',
        'productId',
        'productTitle',
        'productUrl',
        'imageUrl',
        'originalPrice',
        'salePrice',
        //'discount',
        'evaluateScore',
        'commission',
        'commissionRate',
        '30daysCommission',
        'volume',
        'packageType',
        'lotNum',
        'validTime',
        'localPrice',
        //'allImageUrls',
    ])
    ->setKeywords('spinner')
    ->setPageSize(1)
    ->setHighQualityItems(true);

$result = $aliExpress->request($request);

dump($result['products'][0]);
```
