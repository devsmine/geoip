# Development environment

Add the following to the main `composer.json`

```json
"repositories": [
    {
        "type": "path",
        "version": "dev-master",
        "url": "/home/dev/devsmin-geoip"
    }
],
"require": [
    "devsmin/geoip": "dev-master",
]

```
Then
```sh
rm -fr vendor/devsmin
php composer.phar require devsmin/geoip "dev-master"
```

# Production environment

Add the following to the main `composer.json`

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/devsmine/geoip"
    }
],
"require": [
    "devsmin/geoip": "1.0",
]

```
Then
```sh
rm -fr vendor/lawepham
php composer.phar require lawepham/geoip "1.0"
```

