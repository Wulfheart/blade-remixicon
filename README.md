# Blade Remixicon 

A package to easily make use of [Remixicon](https://remixicon.com/) in your Laravel Blade views. 

For a full list of available icons see the [the project's website](https://remixicon.com/).

## Requirements 

- PHP 7.2 or higher 
- Laravel 7.14 or higher 

## Install 

Via composer: 

```
$ composer require wulfheart/blade-remixicon
```

## Usage 

Icons can be used a self-closing blade components which will be compiled to SVG icons.

```
<x-ri-home-6-fill/>
<x-ri-home-6-line/>
```

You can also pass classes to your icon components: 

```
<x-ri-user-smile-line class="w-6 h-6 text-gray-600"/>
```

And even use inline styles: 

```
<x-ri-aliens-line style="color: #555"/>
```

## Raw SVG icons 

If you want to use the raw SVG icons as assets, you can publish them using: 

```
$ php artisan vendor:publish --tag=blade-remixicon --force
```

Then use them in your views like: 

```
<img src="{{ asset('vendor/blade-remixicon/door-fill.svg') }}" width="10" height="10"/>
```

### Blade icons 

Blade Github octicons uses blade icons under the hood. Please refer to [the Blade icons readme](https://github.com/driesvints/blade-icons/blob/master/README.md) for additional
functionality.

## Testing 

```
$  ./vendor/bin/phpunit
```

## Contributing 

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details. 

## Security 

If you discover any security issues, please email [me](mailto:alexfwulf@gmail.com) instead of using the issue tracker. 

## Credits 

- [wulfheart](https://github.com/wulfheart) 
- [All contributors](https://)

## License 

The MIT license (MIT). Please see [License file](LICENSE.md) for more information. 
