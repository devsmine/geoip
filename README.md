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
    "devsmine/geoip": "dev-master",
]

```
Then
```sh
rm -fr vendor/devsmine
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
    "devsmine/geoip": "1.0",
]

```
Then
```sh
rm -fr vendor/devsmine
php composer.phar require devsmine/geoip "1.0"
```

