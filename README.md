# Math Filter

## Requirements

[jlawrence/eos](https://packagist.org/packages/jlawrence/eos)

## Installation

There are a few ways

- Add the dependency

```
"require": {
    "jlawrence/eos": "3.*"
}
```
or simply type `composer require jlawrence/eos`

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
            "name": "kartagis/amazee",
            "version": "dev-master",
            "type":"drupal-custom-module",
            "source": {
                "url": "https://github.com/kartagis/amazee.git",
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
`composer require kartagis/amazee`.

To run this code on the website, please browse to https://8.webcinizim.com/user,
enter your credentials sent to you by e-mail, then click on Add Content > Basic
Page and enter an equation. You can also enter text.
