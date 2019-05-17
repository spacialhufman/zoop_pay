# ZOOP Laravel

Zoop-laravel is a package for **Laravel 5.6**, which consumes ZOOP payments api's.
## Requeriments

* Laravel 5.6
* PHP 7.1
* PHP ext-curl
* PHP ext-json
* PHP ext-mbstring


## Instalation
### 1 - Composer instalation
Use composer to install the package and automatically update `composer.json`, running:

~~~
composer require spacialhufman/zoop_pay
~~~

### 2 - Configuration
Update your application configuration to register the package in `config/app.php` adding the following line in `'providers'` section:

~~~
'providers' => [
    //...
    Zoop\ZoopServiceProvider::class,
    //...
],
~~~

### 3 - Update ZOOP Laravel configuration
Rename `config.example.php` to `config.php` in `zoop/src/resources/config/` and change the following lines:

~~~
'defaults'  => [
    //...
    'publishable_key'   => 'YOUR_PUBLISHABLE_KEY',
    'marketplace_id'    => 'YOUR_MARKETPLACE_ID',
    //...
]
~~~

...enjoy it :D.

## Usage
### 1 - Tokenizer Credit Card
**In your Controller**
```php
namespace App\Http\Controllers;
 
use Zoop\src\Facades\ZoopTokens;
 
class PaymentController extends Controller{
    $ccToken = ZoopTokens::tokenizeCard([
        'holder_name' => 'John Doe',
        'expiration_month' => "03",
        'expiration_year' => "2023",
        'security_code' => "123",
        'card_number' => "4556629972668582",
    ]);
}
```

### 3 - Creating a new Buyer
**In your Controller**
```php
namespace App\Http\Controllers;
 
use Zoop\src\Facades\ZoopBuyers;
 
class PaymentController extends Controller{
    $buyer = ZoopBuyers::create([
        'first_name'  => 'John',
        'last_name'   => 'Doe',
        'description' => 'Test buyer',
        'email'       => 'johndoe@example.com',
    ]);
}
```

### 4 - Card Not Present Transaction
**In your Controller**
```php
namespace App\Http\Controllers;
 
use Zoop\src\Facades\ZoopChargeCNP;
 
class PaymentController extends Controller{
    $charge = ZoopChargesCNP::create([
        'currency'     => 'BRL',
        'amount'       => '100',
        'payment_type' => 'credit',
        'description'  => 'For test purpose, only',
        'statement_descriptor' => 'Test description',
        'on_behalf_of' => 'bb2a51f1c22a4c30b6bf6819be87ac52',
        'installment_plan[mode]' => 'interest_free',
        'installment_plan[number_installments]' => '1',
        'customer' => 'bb2a51f1c22a4c30b6bf6819be87ac52', //buyer ud
    ]);
}
```

## ZOOP Api Reference

[https://pagzoop.com/api/docs/](https://pagzoop.com/api/docs/)
