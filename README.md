# fromz-package
Package for Fromz

## Getting started

 - Clone this repo: 
```
git clone https://github.com/pkfrom/fromz-package.git
```

 - Add to composer.json

```json
"psr-4": {
	"App\\": "app/",
    "Fromz\\FromzPackage\\": "packages/fromz/fromz-package/src/"
        }
```
 - Add `providers` to `config/app.php`
 
```
Fromz\FromzPackage\FromzServiceProvider::class,
```
 - Run Composer

```
composer dump-autoload
```
