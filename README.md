# PHP Simple API Client for CoinLore

Simple library for NodeJS to use coinlore crypto api [Coinlore.com API](https://www.coinlore.com/cryptocurrency-data-api)

[Coinlore](https://www.coinlore.com) provides original cryptocurrency data, coin prices calculated by own algorithm, market caps, trade volumes and more, information updated every minute or less.

## Installation

```sh
composer require coinlore/cruptocurrency-prices
OR
composer require "coinlore/cruptocurrency-prices @dev" 
```

## License
```php
 require_once __DIR__ . '/vendor/autoload.php';
 
 $client = new \Coinlore\Request();
 
 //Get Bitcoin Info 
 $coins = $client->getCoin(90); 
 
 //Get coins from 0 to 100
 $coins = $client->getCoins(0,100); 
 
 print_r($coins);

```

MIT license