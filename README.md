
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

Documentation of the BLOC RPC API and more PHP examples for this package can be found at [bloc-developer.com](https://bloc-developer.com)

## License

MIT License

Copyright (c) 2018 TurtleCoin
Copyright (c) 2018-2019, The BLOC.MONEY Developers

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
