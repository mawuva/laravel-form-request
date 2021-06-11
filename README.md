# Laravel Form Request adaptation for Lumen Framework

This package is a Laravel Form Request adaptation for Lumen Framework.
You can use it in Laravel also but, it's not necessary.

## Installation

You can install the package via composer:

```bash
composer require mawuekom/laravel-form-request
```

#### Make some configs

- Add the service provider in `bootstrap/app.php`

```php
$app->register(Mawuekom\FormRequest\FormRequestServiceProvider::class);
```

Next step is create your FormRequest and extends from `Mawuekom/FormRequest/Http/FormRequest`

## Usage

```php
<?php

namespace App\Http\Requests;

use Mawuekom\FormRequest\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'name' => 'required|string',
			'email' => 'required|string|email',
		];
	}
}

```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
