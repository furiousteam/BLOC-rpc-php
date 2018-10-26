
# BLOC RPC PHP

BLOC RPC PHP is a PHP wrapper for the BLOC JSON-RPC interfaces.

---

1) [Install BLOC RPC PHP](#install-bloc-rpc-php)
1) [Examples](#examples)
1) [Docs](#docs)
1) [License](#license)

---

## Install BLOC RPC PHP

This package requires PHP >=7.1.3. Require this package with composer:

```
composer require bloc/bloc-rpc-php
```

## Examples

```php
use BLOC\BLOCd;

$config = [
    'rpcHost' => 'http://127.0.0.1',
    'rpcPort' => 2086,
];

$blocd = new BLOCd($config);
echo $blocd->getBlockCount();

> {"id":2,"jsonrpc":"2.0","result":{"count":784547,"status":"OK"}}
``` 

```php
use BLOC\BlocService;

$config = [
    'rpcHost'     => 'http://127.0.0.1',
    'rpcPort'     => 8070,
    'rpcPassword' => 'test',
];

$blocService = new BlocService($config);
echo $blocService->getBalance($walletAddress);

> {"id":0,"jsonrpc":"2.0","result":["availableBalance":100,"lockedAmount":50]}
``` 

Optionally, you may access details about the response:

```php
$response = $blocService->getBalance($walletAddress);

// The result field from the RPC response
$response->result();

// RPC response as JSON string
$response->toJson();

// RPC response as an array
$response->toArray();

// Or other response details
$response->getStatusCode();
$response->getProtocolVersion();
$response->getHeaders();
$response->hasHeader($header);
$response->getHeader($header);
$response->getHeaderLine($header);
$response->getBody();
``` 

## Docs

Documentation of the BLOC RPC API and more PHP examples for this package can be found at [bloc-developer.com](https://bloc-developer.com).

## License

// Copyright (c) 2018, The TurtleCoin Developers
// Copyright (c) 2018-2019, The BLOC.MONEY Developers
//
// Please see the included LICENSE file for more information.
// 
// BLOC is free software: you can redistribute it and/or modify
// it under the terms of the GNU Lesser General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
// 
// BLOC is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Lesser General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with BLOC. If not, see <http://www.gnu.org/licenses/>.
