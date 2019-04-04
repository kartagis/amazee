# Math Filter

## Requirements

[jlawrence/eos](https://packagist.org/packages/jlawrence/eos)

## Installation

There are a few ways

- Add the dependency

Type `composer require jlawrence/eos` in your Drupal installation directory.

- Insert the below block into your main `composer.json` just below the
`repositories` block, so that your `composer.json` looks like this:

```
"repositories": [
    {
        "type": "composer",
        "url": "https://packages.drupal.org/8"
    },
    {
        "type": "package",
        "package": {
            "name": "kartagis/math_filter",
            "version": "dev-master",
            "type":"drupal-custom-module",
            "source": {
                "url": "https://github.com/kartagis/math_filter.git",
                "type": "git",
                "reference": "master"
            },
            "require": {
              "jlawrence/eos": "3.*"
            }
        }
    }
]
```
and then you can download the module and the dependency by simply doing
`composer require kartagis/amazee`

- Insert the following block

```
"require": [
    "modules/custom/math_filter/composer.json"
],
```
in your top-most composer.json so that it looks like below:

```
"extra": {
    "_readme": [
        "By default Drupal loads the autoloader from ./vendor/autoload.php.",
        "To change the autoloader you can edit ./autoload.php.",
        "This file specifies the packages.drupal.org repository.",
        "You can read more about this composer repository at:",
        "https://www.drupal.org/node/2718229"
    ],
    "merge-plugin": {
        "include": [
            "core/composer.json"
        ],
        "require": [
            "modules/custom/math_filter/composer.json"
        ],
        "recurse": true,
        "replace": false,
        "merge-extra": false
    },
    "installer-paths": {
        "core": ["type:drupal-core"],
        "modules/contrib/{$name}": ["type:drupal-module"],
        "profiles/contrib/{$name}": ["type:drupal-profile"],
        "themes/contrib/{$name}": ["type:drupal-theme"],
        "drush/contrib/{$name}": ["type:drupal-drush"],
        "modules/custom/{$name}": ["type:drupal-custom-module"],
        "themes/custom/{$name}": ["type:drupal-custom-theme"]
    }
},
```

Then type `composer update` in your Drupal installation.

To run this code on the website, please browse to https://8.webcinizim.com/user,
enter your credentials sent to you by e-mail, then click on Add Content > Basic
Page and enter an equation. You can also enter text. An example is as follows:

`A total of 10+3 brown lazy dogs jumped over a flock of 5+8 cows.`

which has already been made as a sample.
