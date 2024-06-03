{
    "_readme": [
        "This file locks the dependencies of your project to a known state",
        "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies",
        "This file is @generated automatically"
    ],
    "content-hash": "de3e50fd5a8e8e3b57dbb726a73e1d97",
    "packages": [
        {
            "name": "arcanedev/log-viewer",
            "version": "11.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/ARCANEDEV/LogViewer.git",
                "reference": "806498da9792eb34e39df9350a7379a9018eaf5d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ARCANEDEV/LogViewer/zipball/806498da9792eb34e39df9350a7379a9018eaf5d",
                "reference": "806498da9792eb34e39df9350a7379a9018eaf5d",
                "shasum": ""
            },
            "require": {
                "arcanedev/support": "^11.0",
                "ext-json": "*",
                "php": "^8.2",
                "psr/log": "^1.0|^2.0|^3.0"
            },
            "require-dev": {
                "laravel/framework": "^11.0",
                "mockery/mockery": "^1.6",
                "orchestra/testbench-core": "^9.0",
                "phpunit/phpunit": "^10.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-develop": "11.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Arcanedev\\LogViewer\\LogViewerServiceProvider",
                        "Arcanedev\\LogViewer\\Providers\\DeferredServicesProvider"
                    ]
                }
            },
            "autoload": {
                "files": [
                    "helpers.php"
                ],
                "psr-4": {
                    "Arcanedev\\LogViewer\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "ARCANEDEV",
                    "email": "arcanedev.maroc@gmail.com",
                    "homepage": "https://github.com/arcanedev-maroc",
                    "role": "Developer"
                }
            ],
            "description": "Provides a Log Viewer for Laravel",
            "homepage": "https://github.com/ARCANEDEV/LogViewer",
            "keywords": [
                "arcanedev",
                "arcanesoft",
                "laravel",
                "log",
                "log viewer",
                "log-viewer",
                "logviewer"
            ],
            "support": {
                "issues": "https://github.com/ARCANEDEV/LogViewer/issues",
                "source": "https://github.com/ARCANEDEV/LogViewer/tree/11.0.1"
            },
            "time": "2024-03-18T22:50:40+00:00"
        },
        {
            "name": "arcanedev/support",
            "version": "11.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/ARCANEDEV/Support.git",
                "reference": "dcade384b54d540b63eac152bfdeebc155066524"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ARCANEDEV/Support/zipball/dcade384b54d540b63eac152bfdeebc155066524",
                "reference": "dcade384b54d540b63eac152bfdeebc155066524",
                "shasum": ""
            },
            "require": {
                "illuminate/contracts": "^11.0",
                "illuminate/support": "^11.0",
                "php": "^8.2"
            },
            "require-dev": {
                "laravel/framework": "^11.0",
                "orchestra/testbench-core": "^9.0",
                "phpunit/phpunit": "^10.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-develop": "11.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "helpers.php"
                ],
                "psr-4": {
                    "Arcanedev\\Support\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "ARCANEDEV",
                    "email": "arcanedev.maroc@gmail.com",
                    "homepage": "https://github.com/arcanedev-maroc"
                }
            ],
            "description": "ARCANEDEV Support Helpers",
            "homepage": "https://github.com/ARCANEDEV/Support",
            "keywords": [
                "arcanedev",
                "arcanesoft",
                "laravel",
                "support"
            ],
            "support": {
                "issues": "https://github.com/ARCANEDEV/Support/issues",
                "source": "https://github.com/ARCANEDEV/Support/tree/11.0.0"
            },
            "time": "2024-03-17T21:57:40+00:00"
        },
        {
            "name": "brick/math",
            "version": "0.12.1",
            "source": {
                "type": "git",
                "url": "https://github.com/brick/math.git",
                "reference": "f510c0a40911935b77b86859eb5223d58d660df1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/brick/math/zipball/f510c0a40911935b77b86859eb5223d58d660df1",
                "reference": "f510c0a40911935b77b86859eb5223d58d660df1",
                "shasum": ""
            },
            "require": {
                "php": "^8.1"
            },
            "require-dev": {
                "php-coveralls/php-coveralls": "^2.2",
                "phpunit/phpunit": "^10.1",
                "vimeo/psalm": "5.16.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Brick\\Math\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Arbitrary-precision arithmetic library",
            "keywords": [
                "Arbitrary-precision",
                "BigInteger",
                "BigRational",
                "arithmetic",
                "bigdecimal",
                "bignum",
                "bignumber",
                "brick",
                "decimal",
                "integer",
                "math",
                "mathematics",
                "rational"
            ],
            "support": {
                "issues": "https://github.com/brick/math/issues",
                "source": "https://github.com/brick/math/tree/0.12.1"
            },
            "funding": [
                {
                    "url": "https://github.com/BenMorel",
                    "type": "github"
                }
            ],
            "time": "2023-11-29T23:19:16+00:00"
        },
        {
            "name": "carbonphp/carbon-doctrine-types",
            "version": "3.2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/CarbonPHP/carbon-doctrine-types.git",
                "reference": "18ba5ddfec8976260ead6e866180bd5d2f71aa1d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/CarbonPHP/carbon-doctrine-types/zipball/18ba5ddfec8976260ead6e866180bd5d2f71aa1d",
                "reference": "18ba5ddfec8976260ead6e866180bd5d2f71aa1d",
                "shasum": ""
            },
            "require": {
                "php": "^8.1"
            },
            "conflict": {
                "doctrine/dbal": "<4.0.0 || >=5.0.0"
            },
            "require-dev": {
                "doctrine/dbal": "^4.0.0",
                "nesbot/carbon": "^2.71.0 || ^3.0.0",
                "phpunit/phpunit": "^10.3"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Carbon\\Doctrine\\": "src/Carbon/Doctrine/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "KyleKatarn",
                    "email": "kylekatarnls@gmail.com"
                }
            ],
            "description": "Types to use Carbon in Doctrine",
            "keywords": [
                "carbon",
                "date",
                "datetime",
                "doctrine",
                "time"
            ],
            "support": {
                "issues": "https://github.com/CarbonPHP/carbon-doctrine-types/issues",
                "source": "https://github.com/CarbonPHP/carbon-doctrine-types/tree/3.2.0"
            },
            "funding": [
                {
                    "url": "https://github.com/kylekatarnls",
                    "type": "github"
                },
                {
                    "url": "https://opencollective.com/Carbon",
                    "type": "open_collective"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/nesbot/carbon",
                    "type": "tidelift"
                }
            ],
            "time": "2024-02-09T16:56:22+00:00"
        },
        {
            "name": "dflydev/dot-access-data",
            "version": "v3.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/dflydev/dflydev-dot-access-data.git",
                "reference": "f41715465d65213d644d3141a6a93081be5d3549"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/dflydev/dflydev-dot-access-data/zipball/f41715465d65213d644d3141a6a93081be5d3549",
                "reference": "f41715465d65213d644d3141a6a93081be5d3549",
                "shasum": ""
            },
            "require": {
                "php": "^7.1 || ^8.0"
            },
            "require-dev": {
                "phpstan/phpstan": "^0.12.42",
                "phpunit/phpunit": "^7.5 || ^8.5 || ^9.3",
                "scrutinizer/ocular": "1.6.0",
                "squizlabs/php_codesniffer": "^3.5",
                "vimeo/psalm": "^4.0.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Dflydev\\DotAccessData\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Dragonfly Development Inc.",
                    "email": "info@dflydev.com",
                    "homepage": "http://dflydev.com"
                },
                {
                    "name": "Beau Simensen",
                    "email": "beau@dflydev.com",
                    "homepage": "http://beausimensen.com"
                },
                {
                    "name": "Carlos Frutos",
                    "email": "carlos@kiwing.it",
                    "homepage": "https://github.com/cfrutos"
                },
                {
                    "name": "Colin O'Dell",
                    "email": "colinodell@gmail.com",
                    "homepage": "https://www.colinodell.com"
                }
            ],
            "description": "Given a deep data structure, access data by dot notation.",
            "homepage": "https://github.com/dflydev/dflydev-dot-access-data",
            "keywords": [
                "access",
                "data",
                "dot",
                "notation"
            ],
            "support": {
                "issues": "https://github.com/dflydev/dflydev-dot-access-data/issues",
                "source": "https://github.com/dflydev/dflydev-dot-access-data/tree/v3.0.2"
            },
            "time": "2022-10-27T11:44:00+00:00"
        },
        {
            "name": "doctrine/inflector",
            "version": "2.0.10",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/inflector.git",
                "reference": "5817d0659c5b50c9b950feb9af7b9668e2c436bc"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/inflector/zipball/5817d0659c5b50c9b950feb9af7b9668e2c436bc",
                "reference": "5817d0659c5b50c9b950feb9af7b9668e2c436bc",
                "shasum": ""
            },
            "require": {
                "php": "^7.2 || ^8.0"
            },
            "require-dev": {
                "doctrine/coding-standard": "^11.0",
                "phpstan/phpstan": "^1.8",
                "phpstan/phpstan-phpunit": "^1.1",
                "phpstan/phpstan-strict-rules": "^1.3",
                "phpunit/phpunit": "^8.5 || ^9.5",
                "vimeo/psalm": "^4.25 || ^5.4"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Doctrine\\Inflector\\": "lib/Doctrine/Inflector"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Guilherme Blanco",
                    "email": "guilhermeblanco@gmail.com"
                },
                {
                    "name": "Roman Borschel",
                    "email": "roman@code-factory.org"
                },
                {
                    "name": "Benjamin Eberlei",
                    "email": "kontakt@beberlei.de"
                },
                {
                    "name": "Jonathan Wage",
                    "email": "jonwage@gmail.com"
                },
                {
                    "name": "Johannes Schmitt",
                    "email": "schmittjoh@gmail.com"
                }
            ],
            "description": "PHP Doctrine Inflector is a small library that can perform string manipulations with regard to upper/lowercase and singular/plural forms of words.",
            "homepage": "https://www.doctrine-project.org/projects/inflector.html",
            "keywords": [
                "inflection",
                "inflector",
                "lowercase",
                "manipulation",
                "php",
                "plural",
                "singular",
                "strings",
                "uppercase",
                "words"
            ],
            "support": {
                "issues": "https://github.com/doctrine/inflector/issues",
                "source": "https://github.com/doctrine/inflector/tree/2.0.10"
            },
            "funding": [
                {
                    "url": "https://www.doctrine-project.org/sponsorship.html",
                    "type": "custom"
                },
                {
                    "url": "https://www.patreon.com/phpdoctrine",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/doctrine%2Finflector",
                    "type": "tidelift"
                }
            ],
            "time": "2024-02-18T20:23:39+00:00"
        },
        {
            "name": "doctrine/lexer",
            "version": "3.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/lexer.git",
                "reference": "31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/lexer/zipball/31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd",
                "reference": "31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd",
                "shasum": ""
            },
            "require": {
                "php": "^8.1"
            },
            "require-dev": {
                "doctrine/coding-standard": "^12",
                "phpstan/phpstan": "^1.10",
                "phpunit/phpunit": "^10.5",
                "psalm/plugin-phpunit": "^0.18.3",
                "vimeo/psalm": "^5.21"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Doctrine\\Common\\Lexer\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Guilherme Blanco",
                    "email": "guilhermeblanco@gmail.com"
                },
                {
                    "name": "Roman Borschel",
                    "email": "roman@code-factory.org"
                },
                {
                    "name": "Johannes Schmitt",
                    "email": "schmittjoh@gmail.com"
                }
            ],
            "description": "PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.",
            "homepage": "https://www.doctrine-project.org/projects/lexer.html",
            "keywords": [
                "annotations",
                "docblock",
                "lexer",
                "parser",
                "php"
            ],
            "support": {
                "issues": "https://github.com/doctrine/lexer/issues",
                "source": "https://github.com/doctrine/lexer/tree/3.0.1"
            },
            "funding": [
                {
                    "url": "https://www.doctrine-project.org/sponsorship.html",
                    "type": "custom"
                },
                {
                    "url": "https://www.patreon.com/phpdoctrine",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/doctrine%2Flexer",
                    "type": "tidelift"
                }
            ],
            "time": "2024-02-05T11:56:58+00:00"
        },
        {
            "name": "dragonmantank/cron-expression",
            "version": "v3.3.3",
            "source": {
                "type": "git",
                "url": "https://github.com/dragonmantank/cron-expression.git",
                "reference": "adfb1f505deb6384dc8b39804c5065dd3c8c8c0a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/dragonmantank/cron-expression/zipball/adfb1f505deb6384dc8b39804c5065dd3c8c8c0a",
                "reference": "adfb1f505deb6384dc8b39804c5065dd3c8c8c0a",
                "shasum": ""
            },
            "require": {
                "php": "^7.2|^8.0",
                "webmozart/assert": "^1.0"
            },
            "replace": {
                "mtdowling/cron-expression": "^1.0"
            },
            "require-dev": {
                "phpstan/extension-installer": "^1.0",
                "phpstan/phpstan": "^1.0",
                "phpstan/phpstan-webmozart-assert": "^1.0",
                "phpunit/phpunit": "^7.0|^8.0|^9.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Cron\\": "src/Cron/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Chris Tankersley",
                    "email": "chris@ctankersley.com",
                    "homepage": "https://github.com/dragonmantank"
                }
            ],
            "description": "CRON for PHP: Calculate the next or previous run date and determine if a CRON expression is due",
            "keywords": [
                "cron",
                "schedule"
            ],
            "support": {
                "issues": "https://github.com/dragonmantank/cron-expression/issues",
                "source": "https://github.com/dragonmantank/cron-expression/tree/v3.3.3"
            },
            "funding": [
                {
                    "url": "https://github.com/dragonmantank",
                    "type": "github"
                }
            ],
            "time": "2023-08-10T19:36:49+00:00"
        },
        {
            "name": "egulias/email-validator",
            "version": "4.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/egulias/EmailValidator.git",
                "reference": "ebaaf5be6c0286928352e054f2d5125608e5405e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/egulias/EmailValidator/zipball/ebaaf5be6c0286928352e054f2d5125608e5405e",
                "reference": "ebaaf5be6c0286928352e054f2d5125608e5405e",
                "shasum": ""
            },
            "require": {
                "doctrine/lexer": "^2.0 || ^3.0",
                "php": ">=8.1",
                "symfony/polyfill-intl-idn": "^1.26"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.2",
                "vimeo/psalm": "^5.12"
            },
            "suggest": {
                "ext-intl": "PHP Internationalization Libraries are required to use the SpoofChecking validation"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Egulias\\EmailValidator\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Eduardo Gulias Davis"
                }
            ],
            "description": "A library for validating emails against several RFCs",
            "homepage": "https://github.com/egulias/EmailValidator",
            "keywords": [
                "email",
                "emailvalidation",
                "emailvalidator",
                "validation",
                "validator"
            ],
            "support": {
                "issues": "https://github.com/egulias/EmailValidator/issues",
                "source": "https://github.com/egulias/EmailValidator/tree/4.0.2"
            },
            "funding": [
                {
                    "url": "https://github.com/egulias",
                    "type": "github"
                }
            ],
            "time": "2023-10-06T06:47:41+00:00"
        },
        {
            "name": "firebase/php-jwt",
            "version": "v6.10.1",
            "source": {
                "type": "git",
                "url": "https://github.com/firebase/php-jwt.git",
                "reference": "500501c2ce893c824c801da135d02661199f60c5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/firebase/php-jwt/zipball/500501c2ce893c824c801da135d02661199f60c5",
                "reference": "500501c2ce893c824c801da135d02661199f60c5",
                "shasum": ""
            },
            "require": {
                "php": "^8.0"
            },
            "require-dev": {
                "guzzlehttp/guzzle": "^7.4",
                "phpspec/prophecy-phpunit": "^2.0",
                "phpunit/phpunit": "^9.5",
                "psr/cache": "^2.0||^3.0",
                "psr/http-client": "^1.0",
                "psr/http-factory": "^1.0"
            },
            "suggest": {
                "ext-sodium": "Support EdDSA (Ed25519) signatures",
                "paragonie/sodium_compat": "Support EdDSA (Ed25519) signatures when libsodium is not present"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Firebase\\JWT\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Neuman Vong",
                    "email": "neuman+pear@twilio.com",
                    "role": "Developer"
                },
                {
                    "name": "Anant Narayanan",
                    "email": "anant@php.net",
                    "role": "Developer"
                }
            ],
            "description": "A simple library to encode and decode JSON Web Tokens (JWT) in PHP. Should conform to the current spec.",
            "homepage": "https://github.com/firebase/php-jwt",
            "keywords": [
                "jwt",
                "php"
            ],
            "support": {
                "issues": "https://github.com/firebase/php-jwt/issues",
                "source": "https://github.com/firebase/php-jwt/tree/v6.10.1"
            },
            "time": "2024-05-18T18:05:11+00:00"
        },
        {
            "name": "fruitcake/php-cors",
            "version": "v1.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/fruitcake/php-cors.git",
                "reference": "3d158f36e7875e2f040f37bc0573956240a5a38b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/fruitcake/php-cors/zipball/3d158f36e7875e2f040f37bc0573956240a5a38b",
                "reference": "3d158f36e7875e2f040f37bc0573956240a5a38b",
                "shasum": ""
            },
            "require": {
                "php": "^7.4|^8.0",
                "symfony/http-foundation": "^4.4|^5.4|^6|^7"
            },
            "require-dev": {
                "phpstan/phpstan": "^1.4",
                "phpunit/phpunit": "^9",
                "squizlabs/php_codesniffer": "^3.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.2-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Fruitcake\\Cors\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fruitcake",
                    "homepage": "https://fruitcake.nl"
                },
                {
                    "name": "Barryvdh",
                    "email": "barryvdh@gmail.com"
                }
            ],
            "description": "Cross-origin resource sharing library for the Symfony HttpFoundation",
            "homepage": "https://github.com/fruitcake/php-cors",
            "keywords": [
                "cors",
                "laravel",
                "symfony"
            ],
            "support": {
                "issues": "https://github.com/fruitcake/php-cors/issues",
                "source": "https://github.com/fruitcake/php-cors/tree/v1.3.0"
            },
            "funding": [
                {
                    "url": "https://fruitcake.nl",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/barryvdh",
                    "type": "github"
                }
            ],
            "time": "2023-10-12T05:21:21+00:00"
        },
        {
            "name": "graham-campbell/result-type",
            "version": "v1.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/GrahamCampbell/Result-Type.git",
                "reference": "fbd48bce38f73f8a4ec8583362e732e4095e5862"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/GrahamCampbell/Result-Type/zipball/fbd48bce38f73f8a4ec8583362e732e4095e5862",
                "reference": "fbd48bce38f73f8a4ec8583362e732e4095e5862",
                "shasum": ""
            },
            "require": {
                "php": "^7.2.5 || ^8.0",
                "phpoption/phpoption": "^1.9.2"
            },
            "require-dev": {
                "phpunit/phpunit": "^8.5.34 || ^9.6.13 || ^10.4.2"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "GrahamCampbell\\ResultType\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                }
            ],
            "description": "An Implementation Of The Result Type",
            "keywords": [
                "Graham Campbell",
                "GrahamCampbell",
                "Result Type",
                "Result-Type",
                "result"
            ],
            "support": {
                "issues": "https://github.com/GrahamCampbell/Result-Type/issues",
                "source": "https://github.com/GrahamCampbell/Result-Type/tree/v1.1.2"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/graham-campbell/result-type",
                    "type": "tidelift"
                }
            ],
            "time": "2023-11-12T22:16:48+00:00"
        },
        {
            "name": "guzzlehttp/guzzle",
            "version": "7.8.1",
            "source": {
                "type": "git",
                "url": "https://github.com/guzzle/guzzle.git",
                "reference": "41042bc7ab002487b876a0683fc8dce04ddce104"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/guzzle/guzzle/zipball/41042bc7ab002487b876a0683fc8dce04ddce104",
                "reference": "41042bc7ab002487b876a0683fc8dce04ddce104",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "guzzlehttp/promises": "^1.5.3 || ^2.0.1",
                "guzzlehttp/psr7": "^1.9.1 || ^2.5.1",
                "php": "^7.2.5 || ^8.0",
                "psr/http-client": "^1.0",
                "symfony/deprecation-contracts": "^2.2 || ^3.0"
            },
            "provide": {
                "psr/http-client-implementation": "1.0"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.8.2",
                "ext-curl": "*",
                "php-http/client-integration-tests": "dev-master#2c025848417c1135031fdf9c728ee53d0a7ceaee as 3.0.999",
                "php-http/message-factory": "^1.1",
                "phpunit/phpunit": "^8.5.36 || ^9.6.15",
                "psr/log": "^1.1 || ^2.0 || ^3.0"
            },
            "suggest": {
                "ext-curl": "Required for CURL handler support",
                "ext-intl": "Required for Internationalized Domain Name (IDN) support",
                "psr/log": "Required for using the Log middleware"
            },
            "type": "library",
            "extra": {
                "bamarni-bin": {
                    "bin-links": true,
                    "forward-command": false
                }
            },
            "autoload": {
                "files": [
                    "src/functions_include.php"
                ],
                "psr-4": {
                    "GuzzleHttp\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                },
                {
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com",
                    "homepage": "https://github.com/mtdowling"
                },
                {
                    "name": "Jeremy Lindblom",
                    "email": "jeremeamia@gmail.com",
                    "homepage": "https://github.com/jeremeamia"
                },
                {
                    "name": "George Mponos",
                    "email": "gmponos@gmail.com",
                    "homepage": "https://github.com/gmponos"
                },
                {
                    "name": "Tobias Nyholm",
                    "email": "tobias.nyholm@gmail.com",
                    "homepage": "https://github.com/Nyholm"
                },
                {
                    "name": "Márk Sági-Kazár",
                    "email": "mark.sagikazar@gmail.com",
                    "homepage": "https://github.com/sagikazarmark"
                },
                {
                    "name": "Tobias Schultze",
                    "email": "webmaster@tubo-world.de",
                    "homepage": "https://github.com/Tobion"
                }
            ],
            "description": "Guzzle is a PHP HTTP client library",
            "keywords": [
                "client",
                "curl",
                "framework",
                "http",
                "http client",
                "psr-18",
                "psr-7",
                "rest",
                "web service"
            ],
            "support": {
                "issues": "https://github.com/guzzle/guzzle/issues",
                "source": "https://github.com/guzzle/guzzle/tree/7.8.1"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://github.com/Nyholm",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/guzzlehttp/guzzle",
                    "type": "tidelift"
                }
            ],
            "time": "2023-12-03T20:35:24+00:00"
        },
        {
            "name": "guzzlehttp/promises",
            "version": "2.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/guzzle/promises.git",
                "reference": "bbff78d96034045e58e13dedd6ad91b5d1253223"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/guzzle/promises/zipball/bbff78d96034045e58e13dedd6ad91b5d1253223",
                "reference": "bbff78d96034045e58e13dedd6ad91b5d1253223",
                "shasum": ""
            },
            "require": {
                "php": "^7.2.5 || ^8.0"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.8.2",
                "phpunit/phpunit": "^8.5.36 || ^9.6.15"
            },
            "type": "library",
            "extra": {
                "bamarni-bin": {
                    "bin-links": true,
                    "forward-command": false
                }
            },
            "autoload": {
                "psr-4": {
                    "GuzzleHttp\\Promise\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                },
                {
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com",
                    "homepage": "https://github.com/mtdowling"
                },
                {
                    "name": "Tobias Nyholm",
                    "email": "tobias.nyholm@gmail.com",
                    "homepage": "https://github.com/Nyholm"
                },
                {
                    "name": "Tobias Schultze",
                    "email": "webmaster@tubo-world.de",
                    "homepage": "https://github.com/Tobion"
                }
            ],
            "description": "Guzzle promises library",
            "keywords": [
                "promise"
            ],
            "support": {
                "issues": "https://github.com/guzzle/promises/issues",
                "source": "https://github.com/guzzle/promises/tree/2.0.2"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://github.com/Nyholm",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/guzzlehttp/promises",
                    "type": "tidelift"
                }
            ],
            "time": "2023-12-03T20:19:20+00:00"
        },
        {
            "name": "guzzlehttp/psr7",
            "version": "2.6.2",
            "source": {
                "type": "git",
                "url": "https://github.com/guzzle/psr7.git",
                "reference": "45b30f99ac27b5ca93cb4831afe16285f57b8221"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/guzzle/psr7/zipball/45b30f99ac27b5ca93cb4831afe16285f57b8221",
                "reference": "45b30f99ac27b5ca93cb4831afe16285f57b8221",
                "shasum": ""
            },
            "require": {
                "php": "^7.2.5 || ^8.0",
                "psr/http-factory": "^1.0",
                "psr/http-message": "^1.1 || ^2.0",
                "ralouphie/getallheaders": "^3.0"
            },
            "provide": {
                "psr/http-factory-implementation": "1.0",
                "psr/http-message-implementation": "1.0"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.8.2",
                "http-interop/http-factory-tests": "^0.9",
                "phpunit/phpunit": "^8.5.36 || ^9.6.15"
            },
            "suggest": {
                "laminas/laminas-httphandlerrunner": "Emit PSR-7 responses"
            },
            "type": "library",
            "extra": {
                "bamarni-bin": {
                    "bin-links": true,
                    "forward-command": false
                }
            },
            "autoload": {
                "psr-4": {
                    "GuzzleHttp\\Psr7\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                },
                {
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com",
                    "homepage": "https://github.com/mtdowling"
                },
                {
                    "name": "George Mponos",
                    "email": "gmponos@gmail.com",
                    "homepage": "https://github.com/gmponos"
                },
                {
                    "name": "Tobias Nyholm",
                    "email": "tobias.nyholm@gmail.com",
                    "homepage": "https://github.com/Nyholm"
                },
                {
                    "name": "Márk Sági-Kazár",
                    "email": "mark.sagikazar@gmail.com",
                    "homepage": "https://github.com/sagikazarmark"
                },
                {
                    "name": "Tobias Schultze",
                    "email": "webmaster@tubo-world.de",
                    "homepage": "https://github.com/Tobion"
                },
                {
                    "name": "Márk Sági-Kazár",
                    "email": "mark.sagikazar@gmail.com",
                    "homepage": "https://sagikazarmark.hu"
                }
            ],
            "description": "PSR-7 message implementation that also provides common utility methods",
            "keywords": [
                "http",
                "message",
                "psr-7",
                "request",
                "response",
                "stream",
                "uri",
                "url"
            ],
            "support": {
                "issues": "https://github.com/guzzle/psr7/issues",
                "source": "https://github.com/guzzle/psr7/tree/2.6.2"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://github.com/Nyholm",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/guzzlehttp/psr7",
                    "type": "tidelift"
                }
            ],
            "time": "2023-12-03T20:05:35+00:00"
        },
        {
            "name": "guzzlehttp/uri-template",
            "version": "v1.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/guzzle/uri-template.git",
                "reference": "ecea8feef63bd4fef1f037ecb288386999ecc11c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/guzzle/uri-template/zipball/ecea8feef63bd4fef1f037ecb288386999ecc11c",
                "reference": "ecea8feef63bd4fef1f037ecb288386999ecc11c",
                "shasum": ""
            },
            "require": {
                "php": "^7.2.5 || ^8.0",
                "symfony/polyfill-php80": "^1.24"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.8.2",
                "phpunit/phpunit": "^8.5.36 || ^9.6.15",
                "uri-template/tests": "1.0.0"
            },
            "type": "library",
            "extra": {
                "bamarni-bin": {
                    "bin-links": true,
                    "forward-command": false
                }
            },
            "autoload": {
                "psr-4": {
                    "GuzzleHttp\\UriTemplate\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                },
                {
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com",
                    "homepage": "https://github.com/mtdowling"
                },
                {
                    "name": "George Mponos",
                    "email": "gmponos@gmail.com",
                    "homepage": "https://github.com/gmponos"
                },
                {
                    "name": "Tobias Nyholm",
                    "email": "tobias.nyholm@gmail.com",
                    "homepage": "https://github.com/Nyholm"
                }
            ],
            "description": "A polyfill class for uri_template of PHP",
            "keywords": [
                "guzzlehttp",
                "uri-template"
            ],
            "support": {
                "issues": "https://github.com/guzzle/uri-template/issues",
                "source": "https://github.com/guzzle/uri-template/tree/v1.0.3"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://github.com/Nyholm",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/guzzlehttp/uri-template",
                    "type": "tidelift"
                }
            ],
            "time": "2023-12-03T19:50:20+00:00"
        },
        {
            "name": "hashids/hashids",
            "version": "5.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/vinkla/hashids.git",
                "reference": "197171016b77ddf14e259e186559152eb3f8cf33"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/vinkla/hashids/zipball/197171016b77ddf14e259e186559152eb3f8cf33",
                "reference": "197171016b77ddf14e259e186559152eb3f8cf33",
                "shasum": ""
            },
            "require": {
                "ext-mbstring": "*",
                "php": "^8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "suggest": {
                "ext-bcmath": "Required to use BC Math arbitrary precision mathematics (*).",
                "ext-gmp": "Required to use GNU multiple precision mathematics (*)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Hashids\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Ivan Akimov",
                    "email": "ivan@barreleye.com"
                },
                {
                    "name": "Vincent Klaiber",
                    "email": "hello@doubledip.se"
                }
            ],
            "description": "Generate short, unique, non-sequential ids (like YouTube and Bitly) from numbers",
            "homepage": "https://hashids.org/php",
            "keywords": [
                "bitly",
                "decode",
                "encode",
                "hash",
                "hashid",
                "hashids",
                "ids",
                "obfuscate",
                "youtube"
            ],
            "support": {
                "issues": "https://github.com/vinkla/hashids/issues",
                "source": "https://github.com/vinkla/hashids/tree/5.0.2"
            },
            "time": "2023-02-23T15:00:54+00:00"
        },
        {
            "name": "intervention/gif",
            "version": "4.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/Intervention/gif.git",
                "reference": "3a2b5f8a8856e8877cdab5c47e51aab2d4cb23a3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/Intervention/gif/zipball/3a2b5f8a8856e8877cdab5c47e51aab2d4cb23a3",
                "reference": "3a2b5f8a8856e8877cdab5c47e51aab2d4cb23a3",
                "shasum": ""
            },
            "require": {
                "php": "^8.1"
            },
            "require-dev": {
                "phpstan/phpstan": "^1",
                "phpunit/phpunit": "^10.0",
                "slevomat/coding-standard": "~8.0",
                "squizlabs/php_codesniffer": "^3.8"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Intervention\\Gif\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Oliver Vogel",
                    "email": "oliver@intervention.io",
                    "homepage": "https://intervention.io/"
                }
            ],
            "description": "Native PHP GIF Encoder/Decoder",
            "homepage": "https://github.com/intervention/gif",
            "keywords": [
                "animation",
                "gd",
                "gif",
                "image"
            ],
            "support": {
                "issues": "https://github.com/Intervention/gif/issues",
                "source": "https://github.com/Intervention/gif/tree/4.1.0"
            },
            "funding": [
                {
                    "url": "https://paypal.me/interventionio",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/Intervention",
                    "type": "github"
                }
            ],
            "time": "2024-03-26T17:23:47+00:00"
        },
        {
            "name": "intervention/image",
            "version": "3.6.4",
            "source": {
                "type": "git",
                "url": "https://github.com/Intervention/image.git",
                "reference": "193324ec88bc5ad4039e57ce9b926ae28dfde813"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/Intervention/image/zipball/193324ec88bc5ad4039e57ce9b926ae28dfde813",
                "reference": "193324ec88bc5ad4039e57ce9b926ae28dfde813",
                "shasum": ""
            },
            "require": {
                "ext-mbstring": "*",
                "intervention/gif": "^4.1",
                "php": "^8.1"
            },
            "require-dev": {
                "mockery/mockery": "^1.6",
                "phpstan/phpstan": "^1",
                "phpunit/phpunit": "^10.0",
                "slevomat/coding-standard": "~8.0",
                "squizlabs/php_codesniffer": "^3.8"
            },
            "suggest": {
                "ext-exif": "Recommended to be able to read EXIF data properly."
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Intervention\\Image\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Oliver Vogel",
                    "email": "oliver@intervention.io",
                    "homepage": "https://intervention.io/"
                }
            ],
            "description": "PHP image manipulation",
            "homepage": "https://image.intervention.io/",
            "keywords": [
                "gd",
                "image",
                "imagick",
                "resize",
                "thumbnail",
                "watermark"
            ],
            "support": {
                "issues": "https://github.com/Intervention/image/issues",
                "source": "https://github.com/Intervention/image/tree/3.6.4"
            },
            "funding": [
                {
                    "url": "https://paypal.me/interventionio",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/Intervention",
                    "type": "github"
                }
            ],
            "time": "2024-05-08T13:53:15+00:00"
        },
        {
            "name": "laracasts/flash",
            "version": "3.2.3",
            "source": {
                "type": "git",
                "url": "https://github.com/laracasts/flash.git",
                "reference": "c2c4be1132f1bec3a689e84417a1c5787e6c71fd"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laracasts/flash/zipball/c2c4be1132f1bec3a689e84417a1c5787e6c71fd",
                "reference": "c2c4be1132f1bec3a689e84417a1c5787e6c71fd",
                "shasum": ""
            },
            "require": {
                "illuminate/support": "~5.0|^6.0|^7.0|^8.0|^9.0|^10.0|^11.0",
                "php": ">=5.4.0"
            },
            "require-dev": {
                "mockery/mockery": "dev-master",
                "phpunit/phpunit": "^6.1|^9.5.10|^10.5"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Laracasts\\Flash\\FlashServiceProvider"
                    ],
                    "aliases": {
                        "Flash": "Laracasts\\Flash\\Flash"
                    }
                }
            },
            "autoload": {
                "files": [
                    "src/Laracasts/Flash/functions.php"
                ],
                "psr-0": {
                    "Laracasts\\Flash": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jeffrey Way",
                    "email": "jeffrey@laracasts.com"
                }
            ],
            "description": "Easy flash notifications",
            "support": {
                "source": "https://github.com/laracasts/flash/tree/3.2.3"
            },
            "time": "2024-03-03T16:51:25+00:00"
        },
        {
            "name": "laravel/framework",
            "version": "v11.9.1",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/framework.git",
                "reference": "60167ce91c59ed5eea2ad4f2a7b6d686fb103ba7"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/framework/zipball/60167ce91c59ed5eea2ad4f2a7b6d686fb103ba7",
                "reference": "60167ce91c59ed5eea2ad4f2a7b6d686fb103ba7",
                "shasum": ""
            },
            "require": {
                "brick/math": "^0.9.3|^0.10.2|^0.11|^0.12",
                "composer-runtime-api": "^2.2",
                "doctrine/inflector": "^2.0.5",
                "dragonmantank/cron-expression": "^3.3.2",
                "egulias/email-validator": "^3.2.1|^4.0",
                "ext-ctype": "*",
                "ext-filter": "*",
                "ext-hash": "*",
                "ext-mbstring": "*",
                "ext-openssl": "*",
                "ext-session": "*",
                "ext-tokenizer": "*",
                "fruitcake/php-cors": "^1.3",
                "guzzlehttp/guzzle": "^7.8",
                "guzzlehttp/uri-template": "^1.0",
                "laravel/prompts": "^0.1.18",
                "laravel/serializable-closure": "^1.3",
                "league/commonmark": "^2.2.1",
                "league/flysystem": "^3.8.0",
                "monolog/monolog": "^3.0",
                "nesbot/carbon": "^2.72.2|^3.0",
                "nunomaduro/termwind": "^2.0",
                "php": "^8.2",
                "psr/container": "^1.1.1|^2.0.1",
                "psr/log": "^1.0|^2.0|^3.0",
                "psr/simple-cache": "^1.0|^2.0|^3.0",
                "ramsey/uuid": "^4.7",
                "symfony/console": "^7.0",
                "symfony/error-handler": "^7.0",
                "symfony/finder": "^7.0",
                "symfony/http-foundation": "^7.0",
                "symfony/http-kernel": "^7.0",
                "symfony/mailer": "^7.0",
                "symfony/mime": "^7.0",
                "symfony/polyfill-php83": "^1.28",
                "symfony/process": "^7.0",
                "symfony/routing": "^7.0",
                "symfony/uid": "^7.0",
                "symfony/var-dumper": "^7.0",
                "tijsverkoyen/css-to-inline-styles": "^2.2.5",
                "vlucas/phpdotenv": "^5.4.1",
                "voku/portable-ascii": "^2.0"
            },
            "conflict": {
                "mockery/mockery": "1.6.8",
                "tightenco/collect": "<5.5.33"
            },
            "provide": {
                "psr/container-implementation": "1.1|2.0",
                "psr/simple-cache-implementation": "1.0|2.0|3.0"
            },
            "replace": {
                "illuminate/auth": "self.version",
                "illuminate/broadcasting": "self.version",
                "illuminate/bus": "self.version",
                "illuminate/cache": "self.version",
                "illuminate/collections": "self.version",
                "illuminate/conditionable": "self.version",
                "illuminate/config": "self.version",
                "illuminate/console": "self.version",
                "illuminate/container": "self.version",
                "illuminate/contracts": "self.version",
                "illuminate/cookie": "self.version",
                "illuminate/database": "self.version",
                "illuminate/encryption": "self.version",
                "illuminate/events": "self.version",
                "illuminate/filesystem": "self.version",
                "illuminate/hashing": "self.version",
                "illuminate/http": "self.version",
                "illuminate/log": "self.version",
                "illuminate/macroable": "self.version",
                "illuminate/mail": "self.version",
                "illuminate/notifications": "self.version",
                "illuminate/pagination": "self.version",
                "illuminate/pipeline": "self.version",
                "illuminate/process": "self.version",
                "illuminate/queue": "self.version",
                "illuminate/redis": "self.version",
                "illuminate/routing": "self.version",
                "illuminate/session": "self.version",
                "illuminate/support": "self.version",
                "illuminate/testing": "self.version",
                "illuminate/translation": "self.version",
                "illuminate/validation": "self.version",
                "illuminate/view": "self.version",
                "spatie/once": "*"
            },
            "require-dev": {
                "ably/ably-php": "^1.0",
                "aws/aws-sdk-php": "^3.235.5",
                "ext-gmp": "*",
                "fakerphp/faker": "^1.23",
                "league/flysystem-aws-s3-v3": "^3.0",
                "league/flysystem-ftp": "^3.0",
                "league/flysystem-path-prefixing": "^3.3",
                "league/flysystem-read-only": "^3.3",
                "league/flysystem-sftp-v3": "^3.0",
                "mockery/mockery": "^1.6",
                "nyholm/psr7": "^1.2",
                "orchestra/testbench-core": "^9.0.15",
                "pda/pheanstalk": "^5.0",
                "phpstan/phpstan": "^1.4.7",
                "phpunit/phpunit": "^10.5|^11.0",
                "predis/predis": "^2.0.2",
                "resend/resend-php": "^0.10.0",
                "symfony/cache": "^7.0",
                "symfony/http-client": "^7.0",
                "symfony/psr-http-message-bridge": "^7.0"
            },
            "suggest": {
                "ably/ably-php": "Required to use the Ably broadcast driver (^1.0).",
                "aws/aws-sdk-php": "Required to use the SQS queue driver, DynamoDb failed job storage, and SES mail driver (^3.235.5).",
                "brianium/paratest": "Required to run tests in parallel (^7.0|^8.0).",
                "ext-apcu": "Required to use the APC cache driver.",
                "ext-fileinfo": "Required to use the Filesystem class.",
                "ext-ftp": "Required to use the Flysystem FTP driver.",
                "ext-gd": "Required to use Illuminate\\Http\\Testing\\FileFactory::image().",
                "ext-memcached": "Required to use the memcache cache driver.",
                "ext-pcntl": "Required to use all features of the queue worker and console signal trapping.",
                "ext-pdo": "Required to use all database features.",
                "ext-posix": "Required to use all features of the queue worker.",
                "ext-redis": "Required to use the Redis cache and queue drivers (^4.0|^5.0|^6.0).",
                "fakerphp/faker": "Required to use the eloquent factory builder (^1.9.1).",
                "filp/whoops": "Required for friendly error pages in development (^2.14.3).",
                "laravel/tinker": "Required to use the tinker console command (^2.0).",
                "league/flysystem-aws-s3-v3": "Required to use the Flysystem S3 driver (^3.0).",
                "league/flysystem-ftp": "Required to use the Flysystem FTP driver (^3.0).",
                "league/flysystem-path-prefixing": "Required to use the scoped driver (^3.3).",
                "league/flysystem-read-only": "Required to use read-only disks (^3.3)",
                "league/flysystem-sftp-v3": "Required to use the Flysystem SFTP driver (^3.0).",
                "mockery/mockery": "Required to use mocking (^1.6).",
                "nyholm/psr7": "Required to use PSR-7 bridging features (^1.2).",
                "pda/pheanstalk": "Required to use the beanstalk queue driver (^5.0).",
                "phpunit/phpunit": "Required to use assertions and run tests (^10.5|^11.0).",
                "predis/predis": "Required to use the predis connector (^2.0.2).",
                "psr/http-message": "Required to allow Storage::put to accept a StreamInterface (^1.0).",
                "pusher/pusher-php-server": "Required to use the Pusher broadcast driver (^6.0|^7.0).",
                "resend/resend-php": "Required to enable support for the Resend mail transport (^0.10.0).",
                "symfony/cache": "Required to PSR-6 cache bridge (^7.0).",
                "symfony/filesystem": "Required to enable support for relative symbolic links (^7.0).",
                "symfony/http-client": "Required to enable support for the Symfony API mail transports (^7.0).",
                "symfony/mailgun-mailer": "Required to enable support for the Mailgun mail transport (^7.0).",
                "symfony/postmark-mailer": "Required to enable support for the Postmark mail transport (^7.0).",
                "symfony/psr-http-message-bridge": "Required to use PSR-7 bridging features (^7.0)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "11.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/Illuminate/Collections/helpers.php",
                    "src/Illuminate/Events/functions.php",
                    "src/Illuminate/Filesystem/functions.php",
                    "src/Illuminate/Foundation/helpers.php",
                    "src/Illuminate/Support/helpers.php"
                ],
                "psr-4": {
                    "Illuminate\\": "src/Illuminate/",
                    "Illuminate\\Support\\": [
                        "src/Illuminate/Macroable/",
                        "src/Illuminate/Collections/",
                        "src/Illuminate/Conditionable/"
                    ]
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Laravel Framework.",
            "homepage": "https://laravel.com",
            "keywords": [
                "framework",
                "laravel"
            ],
            "support": {
                "issues": "https://github.com/laravel/framework/issues",
                "source": "https://github.com/laravel/framework"
            },
            "time": "2024-05-28T18:16:41+00:00"
        },
        {
            "name": "laravel/prompts",
            "version": "v0.1.23",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/prompts.git",
                "reference": "9bc4df7c699b0452c6b815e64a2d84b6d7f99400"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/prompts/zipball/9bc4df7c699b0452c6b815e64a2d84b6d7f99400",
                "reference": "9bc4df7c699b0452c6b815e64a2d84b6d7f99400",
                "shasum": ""
            },
            "require": {
                "ext-mbstring": "*",
                "illuminate/collections": "^10.0|^11.0",
                "php": "^8.1",
                "symfony/console": "^6.2|^7.0"
            },
            "conflict": {
                "illuminate/console": ">=10.17.0 <10.25.0",
                "laravel/framework": ">=10.17.0 <10.25.0"
            },
            "require-dev": {
                "mockery/mockery": "^1.5",
                "pestphp/pest": "^2.3",
                "phpstan/phpstan": "^1.11",
                "phpstan/phpstan-mockery": "^1.1"
            },
            "suggest": {
                "ext-pcntl": "Required for the spinner to be animated."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "0.1.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/helpers.php"
                ],
                "psr-4": {
                    "Laravel\\Prompts\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Add beautiful and user-friendly forms to your command-line applications.",
            "support": {
                "issues": "https://github.com/laravel/prompts/issues",
                "source": "https://github.com/laravel/prompts/tree/v0.1.23"
            },
            "time": "2024-05-27T13:53:20+00:00"
        },
        {
            "name": "laravel/sanctum",
            "version": "v4.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/sanctum.git",
                "reference": "9cfc0ce80cabad5334efff73ec856339e8ec1ac1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/sanctum/zipball/9cfc0ce80cabad5334efff73ec856339e8ec1ac1",
                "reference": "9cfc0ce80cabad5334efff73ec856339e8ec1ac1",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "illuminate/console": "^11.0",
                "illuminate/contracts": "^11.0",
                "illuminate/database": "^11.0",
                "illuminate/support": "^11.0",
                "php": "^8.2",
                "symfony/console": "^7.0"
            },
            "require-dev": {
                "mockery/mockery": "^1.6",
                "orchestra/testbench": "^9.0",
                "phpstan/phpstan": "^1.10",
                "phpunit/phpunit": "^10.5"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Laravel\\Sanctum\\SanctumServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Sanctum\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "Laravel Sanctum provides a featherweight authentication system for SPAs and simple APIs.",
            "keywords": [
                "auth",
                "laravel",
                "sanctum"
            ],
            "support": {
                "issues": "https://github.com/laravel/sanctum/issues",
                "source": "https://github.com/laravel/sanctum"
            },
            "time": "2024-04-10T19:39:58+00:00"
        },
        {
            "name": "laravel/serializable-closure",
            "version": "v1.3.3",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/serializable-closure.git",
                "reference": "3dbf8a8e914634c48d389c1234552666b3d43754"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/serializable-closure/zipball/3dbf8a8e914634c48d389c1234552666b3d43754",
                "reference": "3dbf8a8e914634c48d389c1234552666b3d43754",
                "shasum": ""
            },
            "require": {
                "php": "^7.3|^8.0"
            },
            "require-dev": {
                "nesbot/carbon": "^2.61",
                "pestphp/pest": "^1.21.3",
                "phpstan/phpstan": "^1.8.2",
                "symfony/var-dumper": "^5.4.11"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\SerializableClosure\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                },
                {
                    "name": "Nuno Maduro",
                    "email": "nuno@laravel.com"
                }
            ],
            "description": "Laravel Serializable Closure provides an easy and secure way to serialize closures in PHP.",
            "keywords": [
                "closure",
                "laravel",
                "serializable"
            ],
            "support": {
                "issues": "https://github.com/laravel/serializable-closure/issues",
                "source": "https://github.com/laravel/serializable-closure"
            },
            "time": "2023-11-08T14:08:06+00:00"
        },
        {
            "name": "laravel/socialite",
            "version": "v5.14.0",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/socialite.git",
                "reference": "c7b0193a3753a29aff8ce80aa2f511917e6ed68a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/socialite/zipball/c7b0193a3753a29aff8ce80aa2f511917e6ed68a",
                "reference": "c7b0193a3753a29aff8ce80aa2f511917e6ed68a",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "firebase/php-jwt": "^6.4",
                "guzzlehttp/guzzle": "^6.0|^7.0",
                "illuminate/contracts": "^6.0|^7.0|^8.0|^9.0|^10.0|^11.0",
                "illuminate/http": "^6.0|^7.0|^8.0|^9.0|^10.0|^11.0",
                "illuminate/support": "^6.0|^7.0|^8.0|^9.0|^10.0|^11.0",
                "league/oauth1-client": "^1.10.1",
                "php": "^7.2|^8.0",
                "phpseclib/phpseclib": "^3.0"
            },
            "require-dev": {
                "mockery/mockery": "^1.0",
                "orchestra/testbench": "^4.0|^5.0|^6.0|^7.0|^8.0|^9.0",
                "phpstan/phpstan": "^1.10",
                "phpunit/phpunit": "^8.0|^9.3|^10.4"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Laravel\\Socialite\\SocialiteServiceProvider"
                    ],
                    "aliases": {
                        "Socialite": "Laravel\\Socialite\\Facades\\Socialite"
                    }
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Socialite\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "Laravel wrapper around OAuth 1 & OAuth 2 libraries.",
            "homepage": "https://laravel.com",
            "keywords": [
                "laravel",
                "oauth"
            ],
            "support": {
                "issues": "https://github.com/laravel/socialite/issues",
                "source": "https://github.com/laravel/socialite"
            },
            "time": "2024-05-03T20:31:38+00:00"
        },
        {
            "name": "laravel/tinker",
            "version": "v2.9.0",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/tinker.git",
                "reference": "502e0fe3f0415d06d5db1f83a472f0f3b754bafe"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/tinker/zipball/502e0fe3f0415d06d5db1f83a472f0f3b754bafe",
                "reference": "502e0fe3f0415d06d5db1f83a472f0f3b754bafe",
                "shasum": ""
            },
            "require": {
                "illuminate/console": "^6.0|^7.0|^8.0|^9.0|^10.0|^11.0",
                "illuminate/contracts": "^6.0|^7.0|^8.0|^9.0|^10.0|^11.0",
                "illuminate/support": "^6.0|^7.0|^8.0|^9.0|^10.0|^11.0",
                "php": "^7.2.5|^8.0",
                "psy/psysh": "^0.11.1|^0.12.0",
                "symfony/var-dumper": "^4.3.4|^5.0|^6.0|^7.0"
            },
            "require-dev": {
                "mockery/mockery": "~1.3.3|^1.4.2",
                "phpstan/phpstan": "^1.10",
                "phpunit/phpunit": "^8.5.8|^9.3.3"
            },
            "suggest": {
                "illuminate/database": "The Illuminate Database package (^6.0|^7.0|^8.0|^9.0|^10.0|^11.0)."
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Laravel\\Tinker\\TinkerServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Tinker\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "Powerful REPL for the Laravel framework.",
            "keywords": [
                "REPL",
                "Tinker",
                "laravel",
                "psysh"
            ],
            "support": {
                "issues": "https://github.com/laravel/tinker/issues",
                "source": "https://github.com/laravel/tinker/tree/v2.9.0"
            },
            "time": "2024-01-04T16:10:04+00:00"
        },
        {
            "name": "league/commonmark",
            "version": "2.4.2",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/commonmark.git",
                "reference": "91c24291965bd6d7c46c46a12ba7492f83b1cadf"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/commonmark/zipball/91c24291965bd6d7c46c46a12ba7492f83b1cadf",
                "reference": "91c24291965bd6d7c46c46a12ba7492f83b1cadf",
                "shasum": ""
            },
            "require": {
                "ext-mbstring": "*",
                "league/config": "^1.1.1",
                "php": "^7.4 || ^8.0",
                "psr/event-dispatcher": "^1.0",
                "symfony/deprecation-contracts": "^2.1 || ^3.0",
                "symfony/polyfill-php80": "^1.16"
            },
            "require-dev": {
                "cebe/markdown": "^1.0",
                "commonmark/cmark": "0.30.3",
                "commonmark/commonmark.js": "0.30.0",
                "composer/package-versions-deprecated": "^1.8",
                "embed/embed": "^4.4",
                "erusev/parsedown": "^1.0",
                "ext-json": "*",
                "github/gfm": "0.29.0",
                "michelf/php-markdown": "^1.4 || ^2.0",
                "nyholm/psr7": "^1.5",
                "phpstan/phpstan": "^1.8.2",
                "phpunit/phpunit": "^9.5.21 || ^10.5.9 || ^11.0.0",
                "scrutinizer/ocular": "^1.8.1",
                "symfony/finder": "^5.3 | ^6.0 || ^7.0",
                "symfony/yaml": "^2.3 | ^3.0 | ^4.0 | ^5.0 | ^6.0 || ^7.0",
                "unleashedtech/php-coding-standard": "^3.1.1",
                "vimeo/psalm": "^4.24.0 || ^5.0.0"
            },
            "suggest": {
                "symfony/yaml": "v2.3+ required if using the Front Matter extension"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "2.5-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "League\\CommonMark\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Colin O'Dell",
                    "email": "colinodell@gmail.com",
                    "homepage": "https://www.colinodell.com",
                    "role": "Lead Developer"
                }
            ],
            "description": "Highly-extensible PHP Markdown parser which fully supports the CommonMark spec and GitHub-Flavored Markdown (GFM)",
            "homepage": "https://commonmark.thephpleague.com",
            "keywords": [
                "commonmark",
                "flavored",
                "gfm",
                "github",
                "github-flavored",
                "markdown",
                "md",
                "parser"
            ],
            "support": {
                "docs": "https://commonmark.thephpleague.com/",
                "forum": "https://github.com/thephpleague/commonmark/discussions",
                "issues": "https://github.com/thephpleague/commonmark/issues",
                "rss": "https://github.com/thephpleague/commonmark/releases.atom",
                "source": "https://github.com/thephpleague/commonmark"
            },
            "funding": [
                {
                    "url": "https://www.colinodell.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://www.paypal.me/colinpodell/10.00",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/colinodell",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/league/commonmark",
                    "type": "tidelift"
                }
            ],
            "time": "2024-02-02T11:59:32+00:00"
        },
        {
            "name": "league/config",
            "version": "v1.2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/config.git",
                "reference": "754b3604fb2984c71f4af4a9cbe7b57f346ec1f3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/config/zipball/754b3604fb2984c71f4af4a9cbe7b57f346ec1f3",
                "reference": "754b3604fb2984c71f4af4a9cbe7b57f346ec1f3",
                "shasum": ""
            },
            "require": {
                "dflydev/dot-access-data": "^3.0.1",
                "nette/schema": "^1.2",
                "php": "^7.4 || ^8.0"
            },
            "require-dev": {
                "phpstan/phpstan": "^1.8.2",
                "phpunit/phpunit": "^9.5.5",
                "scrutinizer/ocular": "^1.8.1",
                "unleashedtech/php-coding-standard": "^3.1",
                "vimeo/psalm": "^4.7.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.2-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "League\\Config\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Colin O'Dell",
                    "email": "colinodell@gmail.com",
                    "homepage": "https://www.colinodell.com",
                    "role": "Lead Developer"
                }
            ],
            "description": "Define configuration arrays with strict schemas and access values with dot notation",
            "homepage": "https://config.thephpleague.com",
            "keywords": [
                "array",
                "config",
                "configuration",
                "dot",
                "dot-access",
                "nested",
                "schema"
            ],
            "support": {
                "docs": "https://config.thephpleague.com/",
                "issues": "https://github.com/thephpleague/config/issues",
                "rss": "https://github.com/thephpleague/config/releases.atom",
                "source": "https://github.com/thephpleague/config"
            },
            "funding": [
                {
                    "url": "https://www.colinodell.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://www.paypal.me/colinpodell/10.00",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/colinodell",
                    "type": "github"
                }
            ],
            "time": "2022-12-11T20:36:23+00:00"
        },
        {
            "name": "league/flysystem",
            "version": "3.28.0",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/flysystem.git",
                "reference": "e611adab2b1ae2e3072fa72d62c62f52c2bf1f0c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/flysystem/zipball/e611adab2b1ae2e3072fa72d62c62f52c2bf1f0c",
                "reference": "e611adab2b1ae2e3072fa72d62c62f52c2bf1f0c",
                "shasum": ""
            },
            "require": {
                "league/flysystem-local": "^3.0.0",
                "league/mime-type-detection": "^1.0.0",
                "php": "^8.0.2"
            },
            "conflict": {
                "async-aws/core": "<1.19.0",
                "async-aws/s3": "<1.14.0",
                "aws/aws-sdk-php": "3.209.31 || 3.210.0",
                "guzzlehttp/guzzle": "<7.0",
                "guzzlehttp/ringphp": "<1.1.1",
                "phpseclib/phpseclib": "3.0.15",
                "symfony/http-client": "<5.2"
            },
            "require-dev": {
                "async-aws/s3": "^1.5 || ^2.0",
                "async-aws/simple-s3": "^1.1 || ^2.0",
                "aws/aws-sdk-php": "^3.295.10",
                "composer/semver": "^3.0",
                "ext-fileinfo": "*",
                "ext-ftp": "*",
                "ext-mongodb": "^1.3",
                "ext-zip": "*",
                "friendsofphp/php-cs-fixer": "^3.5",
                "google/cloud-storage": "^1.23",
                "guzzlehttp/psr7": "^2.6",
                "microsoft/azure-storage-blob": "^1.1",
                "mongodb/mongodb": "^1.2",
                "phpseclib/phpseclib": "^3.0.36",
                "phpstan/phpstan": "^1.10",
                "phpunit/phpunit": "^9.5.11|^10.0",
                "sabre/dav": "^4.6.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "League\\Flysystem\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Frank de Jonge",
                    "email": "info@frankdejonge.nl"
                }
            ],
            "description": "File storage abstraction for PHP",
            "keywords": [
                "WebDAV",
                "aws",
                "cloud",
                "file",
                "files",
                "filesystem",
                "filesystems",
                "ftp",
                "s3",
                "sftp",
                "storage"
            ],
            "support": {
                "issues": "https://github.com/thephpleague/flysystem/issues",
                "source": "https://github.com/thephpleague/flysystem/tree/3.28.0"
            },
            "time": "2024-05-22T10:09:12+00:00"
        },
        {
            "name": "league/flysystem-local",
            "version": "3.28.0",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/flysystem-local.git",
                "reference": "13f22ea8be526ea58c2ddff9e158ef7c296e4f40"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/flysystem-local/zipball/13f22ea8be526ea58c2ddff9e158ef7c296e4f40",
                "reference": "13f22ea8be526ea58c2ddff9e158ef7c296e4f40",
                "shasum": ""
            },
            "require": {
                "ext-fileinfo": "*",
                "league/flysystem": "^3.0.0",
                "league/mime-type-detection": "^1.0.0",
                "php": "^8.0.2"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "League\\Flysystem\\Local\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Frank de Jonge",
                    "email": "info@frankdejonge.nl"
                }
            ],
            "description": "Local filesystem adapter for Flysystem.",
            "keywords": [
                "Flysystem",
                "file",
                "files",
                "filesystem",
                "local"
            ],
            "support": {
                "source": "https://github.com/thephpleague/flysystem-local/tree/3.28.0"
            },
            "time": "2024-05-06T20:05:52+00:00"
        },
        {
            "name": "league/mime-type-detection",
            "version": "1.15.0",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/mime-type-detection.git",
                "reference": "ce0f4d1e8a6f4eb0ddff33f57c69c50fd09f4301"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/mime-type-detection/zipball/ce0f4d1e8a6f4eb0ddff33f57c69c50fd09f4301",
                "reference": "ce0f4d1e8a6f4eb0ddff33f57c69c50fd09f4301",
                "shasum": ""
            },
            "require": {
                "ext-fileinfo": "*",
                "php": "^7.4 || ^8.0"
            },
            "require-dev": {
                "friendsofphp/php-cs-fixer": "^3.2",
                "phpstan/phpstan": "^0.12.68",
                "phpunit/phpunit": "^8.5.8 || ^9.3 || ^10.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "League\\MimeTypeDetection\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Frank de Jonge",
                    "email": "info@frankdejonge.nl"
                }
            ],
            "description": "Mime-type detection for Flysystem",
            "support": {
                "issues": "https://github.com/thephpleague/mime-type-detection/issues",
                "source": "https://github.com/thephpleague/mime-type-detection/tree/1.15.0"
            },
            "funding": [
                {
                    "url": "https://github.com/frankdejonge",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/league/flysystem",
                    "type": "tidelift"
                }
            ],
            "time": "2024-01-28T23:22:08+00:00"
        },
        {
            "name": "league/oauth1-client",
            "version": "v1.10.1",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/oauth1-client.git",
                "reference": "d6365b901b5c287dd41f143033315e2f777e1167"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/oauth1-client/zipball/d6365b901b5c287dd41f143033315e2f777e1167",
                "reference": "d6365b901b5c287dd41f143033315e2f777e1167",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "ext-openssl": "*",
                "guzzlehttp/guzzle": "^6.0|^7.0",
                "guzzlehttp/psr7": "^1.7|^2.0",
                "php": ">=7.1||>=8.0"
            },
            "require-dev": {
                "ext-simplexml": "*",
                "friendsofphp/php-cs-fixer": "^2.17",
                "mockery/mockery": "^1.3.3",
                "phpstan/phpstan": "^0.12.42",
                "phpunit/phpunit": "^7.5||9.5"
            },
            "suggest": {
                "ext-simplexml": "For decoding XML-based responses."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0-dev",
                    "dev-develop": "2.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "League\\OAuth1\\Client\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Ben Corlett",
                    "email": "bencorlett@me.com",
                    "homepage": "http://www.webcomm.com.au",
                    "role": "Developer"
                }
            ],
            "description": "OAuth 1.0 Client Library",
            "keywords": [
                "Authentication",
                "SSO",
                "authorization",
                "bitbucket",
                "identity",
                "idp",
                "oauth",
                "oauth1",
                "single sign on",
                "trello",
                "tumblr",
                "twitter"
            ],
            "support": {
                "issues": "https://github.com/thephpleague/oauth1-client/issues",
                "source": "https://github.com/thephpleague/oauth1-client/tree/v1.10.1"
            },
            "time": "2022-04-15T14:02:14+00:00"
        },
        {
            "name": "livewire/livewire",
            "version": "v3.5.0",
            "source": {
                "type": "git",
                "url": "https://github.com/livewire/livewire.git",
                "reference": "72e900825c560f0e4e620185b26c5441a8914435"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/livewire/livewire/zipball/72e900825c560f0e4e620185b26c5441a8914435",
                "reference": "72e900825c560f0e4e620185b26c5441a8914435",
                "shasum": ""
            },
            "require": {
                "illuminate/database": "^10.0|^11.0",
                "illuminate/routing": "^10.0|^11.0",
                "illuminate/support": "^10.0|^11.0",
                "illuminate/validation": "^10.0|^11.0",
                "league/mime-type-detection": "^1.9",
                "php": "^8.1",
                "symfony/console": "^6.0|^7.0",
                "symfony/http-kernel": "^6.2|^7.0"
            },
            "require-dev": {
                "calebporzio/sushi": "^2.1",
                "laravel/framework": "^10.15.0|^11.0",
                "laravel/prompts": "^0.1.6",
                "mockery/mockery": "^1.3.1",
                "orchestra/testbench": "^8.21.0|^9.0",
                "orchestra/testbench-dusk": "^8.24|^9.1",
                "phpunit/phpunit": "^10.4",
                "psy/psysh": "^0.11.22|^0.12"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Livewire\\LivewireServiceProvider"
                    ],
                    "aliases": {
                        "Livewire": "Livewire\\Livewire"
                    }
                }
            },
            "autoload": {
                "files": [
                    "src/helpers.php"
                ],
                "psr-4": {
                    "Livewire\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Caleb Porzio",
                    "email": "calebporzio@gmail.com"
                }
            ],
            "description": "A front-end framework for Laravel.",
            "support": {
                "issues": "https://github.com/livewire/livewire/issues",
                "source": "https://github.com/livewire/livewire/tree/v3.5.0"
            },
            "funding": [
                {
                    "url": "https://github.com/livewire",
                    "type": "github"
                }
            ],
            "time": "2024-05-21T13:39:04+00:00"
        },
        {
            "name": "maennchen/zipstream-php",
            "version": "3.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/maennchen/ZipStream-PHP.git",
                "reference": "b8174494eda667f7d13876b4a7bfef0f62a7c0d1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/maennchen/ZipStream-PHP/zipball/b8174494eda667f7d13876b4a7bfef0f62a7c0d1",
                "reference": "b8174494eda667f7d13876b4a7bfef0f62a7c0d1",
                "shasum": ""
            },
            "require": {
                "ext-mbstring": "*",
                "ext-zlib": "*",
                "php-64bit": "^8.1"
            },
            "require-dev": {
                "ext-zip": "*",
                "friendsofphp/php-cs-fixer": "^3.16",
                "guzzlehttp/guzzle": "^7.5",
                "mikey179/vfsstream": "^1.6",
                "php-coveralls/php-coveralls": "^2.5",
                "phpunit/phpunit": "^10.0",
                "vimeo/psalm": "^5.0"
            },
            "suggest": {
                "guzzlehttp/psr7": "^2.4",
                "psr/http-message": "^2.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "ZipStream\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Paul Duncan",
                    "email": "pabs@pablotron.org"
                },
                {
                    "name": "Jonatan Männchen",
                    "email": "jonatan@maennchen.ch"
                },
                {
                    "name": "Jesse Donat",
                    "email": "donatj@gmail.com"
                },
                {
                    "name": "András Kolesár",
                    "email": "kolesar@kolesar.hu"
                }
            ],
            "description": "ZipStream is a library for dynamically streaming dynamic zip files from PHP without writing to the disk at all on the server.",
            "keywords": [
                "stream",
                "zip"
            ],
            "support": {
                "issues": "https://github.com/maennchen/ZipStream-PHP/issues",
                "source": "https://github.com/maennchen/ZipStream-PHP/tree/3.1.0"
            },
            "funding": [
                {
                    "url": "https://github.com/maennchen",
                    "type": "github"
                },
                {
                    "url": "https://opencollective.com/zipstream",
                    "type": "open_collective"
                }
            ],
            "time": "2023-06-21T14:59:35+00:00"
        },
        {
            "name": "monolog/monolog",
            "version": "3.6.0",
            "source": {
                "type": "git",
                "url": "https://github.com/Seldaek/monolog.git",
                "reference": "4b18b21a5527a3d5ffdac2fd35d3ab25a9597654"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/Seldaek/monolog/zipball/4b18b21a5527a3d5ffdac2fd35d3ab25a9597654",
                "reference": "4b18b21a5527a3d5ffdac2fd35d3ab25a9597654",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1",
                "psr/log": "^2.0 || ^3.0"
            },
            "provide": {
                "psr/log-implementation": "3.0.0"
            },
            "require-dev": {
                "aws/aws-sdk-php": "^3.0",
                "doctrine/couchdb": "~1.0@dev",
                "elasticsearch/elasticsearch": "^7 || ^8",
                "ext-json": "*",
                "graylog2/gelf-php": "^1.4.2 || ^2.0",
                "guzzlehttp/guzzle": "^7.4.5",
                "guzzlehttp/psr7": "^2.2",
                "mongodb/mongodb": "^1.8",
                "php-amqplib/php-amqplib": "~2.4 || ^3",
                "phpstan/phpstan": "^1.9",
                "phpstan/phpstan-deprecation-rules": "^1.0",
                "phpstan/phpstan-strict-rules": "^1.4",
                "phpunit/phpunit": "^10.5.17",
                "predis/predis": "^1.1 || ^2",
                "ruflin/elastica": "^7",
                "symfony/mailer": "^5.4 || ^6",
                "symfony/mime": "^5.4 || ^6"
            },
            "suggest": {
                "aws/aws-sdk-php": "Allow sending log messages to AWS services like DynamoDB",
                "doctrine/couchdb": "Allow sending log messages to a CouchDB server",
                "elasticsearch/elasticsearch": "Allow sending log messages to an Elasticsearch server via official client",
                "ext-amqp": "Allow sending log messages to an AMQP server (1.0+ required)",
                "ext-curl": "Required to send log messages using the IFTTTHandler, the LogglyHandler, the SendGridHandler, the SlackWebhookHandler or the TelegramBotHandler",
                "ext-mbstring": "Allow to work properly with unicode symbols",
                "ext-mongodb": "Allow sending log messages to a MongoDB server (via driver)",
                "ext-openssl": "Required to send log messages using SSL",
                "ext-sockets": "Allow sending log messages to a Syslog server (via UDP driver)",
                "graylog2/gelf-php": "Allow sending log messages to a GrayLog2 server",
                "mongodb/mongodb": "Allow sending log messages to a MongoDB server (via library)",
                "php-amqplib/php-amqplib": "Allow sending log messages to an AMQP server using php-amqplib",
                "rollbar/rollbar": "Allow sending log messages to Rollbar",
                "ruflin/elastica": "Allow sending log messages to an Elastic Search server"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Monolog\\": "src/Monolog"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jordi Boggiano",
                    "email": "j.boggiano@seld.be",
                    "homepage": "https://seld.be"
                }
            ],
            "description": "Sends your logs to files, sockets, inboxes, databases and various web services",
            "homepage": "https://github.com/Seldaek/monolog",
            "keywords": [
                "log",
                "logging",
                "psr-3"
            ],
            "support": {
                "issues": "https://github.com/Seldaek/monolog/issues",
                "source": "https://github.com/Seldaek/monolog/tree/3.6.0"
            },
            "funding": [
                {
                    "url": "https://github.com/Seldaek",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/monolog/monolog",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-12T21:02:21+00:00"
        },
        {
            "name": "nasirkhan/module-manager",
            "version": "v2.7.0",
            "source": {
                "type": "git",
                "url": "https://github.com/nasirkhan/module-manager.git",
                "reference": "f2f4f5f1ba0cffb89740138d4ae19407dae7edb1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nasirkhan/module-manager/zipball/f2f4f5f1ba0cffb89740138d4ae19407dae7edb1",
                "reference": "f2f4f5f1ba0cffb89740138d4ae19407dae7edb1",
                "shasum": ""
            },
            "require": {
                "laravel/framework": "^v11.0",
                "php": "^8.1"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Nasirkhan\\ModuleManager\\ModuleManagerServiceProvider"
                    ],
                    "aliases": {
                        "ModuleManager": "Nasirkhan\\ModuleManager\\ModuleManagerFacade"
                    }
                }
            },
            "autoload": {
                "psr-4": {
                    "Nasirkhan\\ModuleManager\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nasir Khan",
                    "email": "nasir8891@gmail.com",
                    "role": "Developer"
                }
            ],
            "description": "Module Manager & Generator for Laravel Starter Kit (https://github.com/nasirkhan/laravel-starter)",
            "homepage": "https://github.com/nasirkhan/module-manager",
            "keywords": [
                "laravel-starter",
                "module-generator",
                "module-manager",
                "nasirkhan"
            ],
            "support": {
                "issues": "https://github.com/nasirkhan/module-manager/issues",
                "source": "https://github.com/nasirkhan/module-manager/tree/v2.7.0"
            },
            "time": "2024-05-04T06:48:40+00:00"
        },
        {
            "name": "nesbot/carbon",
            "version": "3.4.0",
            "source": {
                "type": "git",
                "url": "https://github.com/briannesbitt/Carbon.git",
                "reference": "8eab8983c83c30e0bacbef8d311e3f3b8172727f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/briannesbitt/Carbon/zipball/8eab8983c83c30e0bacbef8d311e3f3b8172727f",
                "reference": "8eab8983c83c30e0bacbef8d311e3f3b8172727f",
                "shasum": ""
            },
            "require": {
                "carbonphp/carbon-doctrine-types": "*",
                "ext-json": "*",
                "php": "^8.1",
                "psr/clock": "^1.0",
                "symfony/clock": "^6.3 || ^7.0",
                "symfony/polyfill-mbstring": "^1.0",
                "symfony/translation": "^4.4.18 || ^5.2.1|| ^6.0 || ^7.0"
            },
            "provide": {
                "psr/clock-implementation": "1.0"
            },
            "require-dev": {
                "doctrine/dbal": "^3.6.3 || ^4.0",
                "doctrine/orm": "^2.15.2 || ^3.0",
                "friendsofphp/php-cs-fixer": "^3.52.1",
                "kylekatarnls/multi-tester": "^2.5.3",
                "ondrejmirtes/better-reflection": "^6.25.0.4",
                "phpmd/phpmd": "^2.15.0",
                "phpstan/extension-installer": "^1.3.1",
                "phpstan/phpstan": "^1.10.65",
                "phpunit/phpunit": "^10.5.15",
                "squizlabs/php_codesniffer": "^3.9.0"
            },
            "bin": [
                "bin/carbon"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.x-dev",
                    "dev-2.x": "2.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Carbon\\Laravel\\ServiceProvider"
                    ]
                },
                "phpstan": {
                    "includes": [
                        "extension.neon"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Carbon\\": "src/Carbon/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Brian Nesbitt",
                    "email": "brian@nesbot.com",
                    "homepage": "https://markido.com"
                },
                {
                    "name": "kylekatarnls",
                    "homepage": "https://github.com/kylekatarnls"
                }
            ],
            "description": "An API extension for DateTime that supports 281 different languages.",
            "homepage": "https://carbon.nesbot.com",
            "keywords": [
                "date",
                "datetime",
                "time"
            ],
            "support": {
                "docs": "https://carbon.nesbot.com/docs",
                "issues": "https://github.com/briannesbitt/Carbon/issues",
                "source": "https://github.com/briannesbitt/Carbon"
            },
            "funding": [
                {
                    "url": "https://github.com/sponsors/kylekatarnls",
                    "type": "github"
                },
                {
                    "url": "https://opencollective.com/Carbon#sponsor",
                    "type": "opencollective"
                },
                {
                    "url": "https://tidelift.com/subscription/pkg/packagist-nesbot-carbon?utm_source=packagist-nesbot-carbon&utm_medium=referral&utm_campaign=readme",
                    "type": "tidelift"
                }
            ],
            "time": "2024-05-24T14:26:34+00:00"
        },
        {
            "name": "nette/schema",
            "version": "v1.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/nette/schema.git",
                "reference": "a6d3a6d1f545f01ef38e60f375d1cf1f4de98188"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nette/schema/zipball/a6d3a6d1f545f01ef38e60f375d1cf1f4de98188",
                "reference": "a6d3a6d1f545f01ef38e60f375d1cf1f4de98188",
                "shasum": ""
            },
            "require": {
                "nette/utils": "^4.0",
                "php": "8.1 - 8.3"
            },
            "require-dev": {
                "nette/tester": "^2.4",
                "phpstan/phpstan-nette": "^1.0",
                "tracy/tracy": "^2.8"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.3-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause",
                "GPL-2.0-only",
                "GPL-3.0-only"
            ],
            "authors": [
                {
                    "name": "David Grudl",
                    "homepage": "https://davidgrudl.com"
                },
                {
                    "name": "Nette Community",
                    "homepage": "https://nette.org/contributors"
                }
            ],
            "description": "📐 Nette Schema: validating data structures against a given Schema.",
            "homepage": "https://nette.org",
            "keywords": [
                "config",
                "nette"
            ],
            "support": {
                "issues": "https://github.com/nette/schema/issues",
                "source": "https://github.com/nette/schema/tree/v1.3.0"
            },
            "time": "2023-12-11T11:54:22+00:00"
        },
        {
            "name": "nette/utils",
            "version": "v4.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/nette/utils.git",
                "reference": "d3ad0aa3b9f934602cb3e3902ebccf10be34d218"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nette/utils/zipball/d3ad0aa3b9f934602cb3e3902ebccf10be34d218",
                "reference": "d3ad0aa3b9f934602cb3e3902ebccf10be34d218",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0 <8.4"
            },
            "conflict": {
                "nette/finder": "<3",
                "nette/schema": "<1.2.2"
            },
            "require-dev": {
                "jetbrains/phpstorm-attributes": "dev-master",
                "nette/tester": "^2.5",
                "phpstan/phpstan": "^1.0",
                "tracy/tracy": "^2.9"
            },
            "suggest": {
                "ext-gd": "to use Image",
                "ext-iconv": "to use Strings::webalize(), toAscii(), chr() and reverse()",
                "ext-intl": "to use Strings::webalize(), toAscii(), normalize() and compare()",
                "ext-json": "to use Nette\\Utils\\Json",
                "ext-mbstring": "to use Strings::lower() etc...",
                "ext-tokenizer": "to use Nette\\Utils\\Reflection::getUseStatements()"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause",
                "GPL-2.0-only",
                "GPL-3.0-only"
            ],
            "authors": [
                {
                    "name": "David Grudl",
                    "homepage": "https://davidgrudl.com"
                },
                {
                    "name": "Nette Community",
                    "homepage": "https://nette.org/contributors"
                }
            ],
            "description": "🛠  Nette Utils: lightweight utilities for string & array manipulation, image handling, safe JSON encoding/decoding, validation, slug or strong password generating etc.",
            "homepage": "https://nette.org",
            "keywords": [
                "array",
                "core",
                "datetime",
                "images",
                "json",
                "nette",
                "paginator",
                "password",
                "slugify",
                "string",
                "unicode",
                "utf-8",
                "utility",
                "validation"
            ],
            "support": {
                "issues": "https://github.com/nette/utils/issues",
                "source": "https://github.com/nette/utils/tree/v4.0.4"
            },
            "time": "2024-01-17T16:50:36+00:00"
        },
        {
            "name": "nikic/php-parser",
            "version": "v5.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/nikic/PHP-Parser.git",
                "reference": "139676794dc1e9231bf7bcd123cfc0c99182cb13"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nikic/PHP-Parser/zipball/139676794dc1e9231bf7bcd123cfc0c99182cb13",
                "reference": "139676794dc1e9231bf7bcd123cfc0c99182cb13",
                "shasum": ""
            },
            "require": {
                "ext-ctype": "*",
                "ext-json": "*",
                "ext-tokenizer": "*",
                "php": ">=7.4"
            },
            "require-dev": {
                "ircmaxell/php-yacc": "^0.0.7",
                "phpunit/phpunit": "^7.0 || ^8.0 || ^9.0"
            },
            "bin": [
                "bin/php-parse"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "PhpParser\\": "lib/PhpParser"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Nikita Popov"
                }
            ],
            "description": "A PHP parser written in PHP",
            "keywords": [
                "parser",
                "php"
            ],
            "support": {
                "issues": "https://github.com/nikic/PHP-Parser/issues",
                "source": "https://github.com/nikic/PHP-Parser/tree/v5.0.2"
            },
            "time": "2024-03-05T20:51:40+00:00"
        },
        {
            "name": "nunomaduro/termwind",
            "version": "v2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/nunomaduro/termwind.git",
                "reference": "58c4c58cf23df7f498daeb97092e34f5259feb6a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nunomaduro/termwind/zipball/58c4c58cf23df7f498daeb97092e34f5259feb6a",
                "reference": "58c4c58cf23df7f498daeb97092e34f5259feb6a",
                "shasum": ""
            },
            "require": {
                "ext-mbstring": "*",
                "php": "^8.2",
                "symfony/console": "^7.0.4"
            },
            "require-dev": {
                "ergebnis/phpstan-rules": "^2.2.0",
                "illuminate/console": "^11.0.0",
                "laravel/pint": "^1.14.0",
                "mockery/mockery": "^1.6.7",
                "pestphp/pest": "^2.34.1",
                "phpstan/phpstan": "^1.10.59",
                "phpstan/phpstan-strict-rules": "^1.5.2",
                "symfony/var-dumper": "^7.0.4",
                "thecodingmachine/phpstan-strict-rules": "^1.0.0"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Termwind\\Laravel\\TermwindServiceProvider"
                    ]
                },
                "branch-alias": {
                    "dev-2.x": "2.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/Functions.php"
                ],
                "psr-4": {
                    "Termwind\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nuno Maduro",
                    "email": "enunomaduro@gmail.com"
                }
            ],
            "description": "Its like Tailwind CSS, but for the console.",
            "keywords": [
                "cli",
                "console",
                "css",
                "package",
                "php",
                "style"
            ],
            "support": {
                "issues": "https://github.com/nunomaduro/termwind/issues",
                "source": "https://github.com/nunomaduro/termwind/tree/v2.0.1"
            },
            "funding": [
                {
                    "url": "https://www.paypal.com/paypalme/enunomaduro",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/nunomaduro",
                    "type": "github"
                },
                {
                    "url": "https://github.com/xiCO2k",
                    "type": "github"
                }
            ],
            "time": "2024-03-06T16:17:14+00:00"
        },
        {
            "name": "paragonie/constant_time_encoding",
            "version": "v2.7.0",
            "source": {
                "type": "git",
                "url": "https://github.com/paragonie/constant_time_encoding.git",
                "reference": "52a0d99e69f56b9ec27ace92ba56897fe6993105"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/paragonie/constant_time_encoding/zipball/52a0d99e69f56b9ec27ace92ba56897fe6993105",
                "reference": "52a0d99e69f56b9ec27ace92ba56897fe6993105",
                "shasum": ""
            },
            "require": {
                "php": "^7|^8"
            },
            "require-dev": {
                "phpunit/phpunit": "^6|^7|^8|^9",
                "vimeo/psalm": "^1|^2|^3|^4"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "ParagonIE\\ConstantTime\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Paragon Initiative Enterprises",
                    "email": "security@paragonie.com",
                    "homepage": "https://paragonie.com",
                    "role": "Maintainer"
                },
                {
                    "name": "Steve 'Sc00bz' Thomas",
                    "email": "steve@tobtu.com",
                    "homepage": "https://www.tobtu.com",
                    "role": "Original Developer"
                }
            ],
            "description": "Constant-time Implementations of RFC 4648 Encoding (Base-64, Base-32, Base-16)",
            "keywords": [
                "base16",
                "base32",
                "base32_decode",
                "base32_encode",
                "base64",
                "base64_decode",
                "base64_encode",
                "bin2hex",
                "encoding",
                "hex",
                "hex2bin",
                "rfc4648"
            ],
            "support": {
                "email": "info@paragonie.com",
                "issues": "https://github.com/paragonie/constant_time_encoding/issues",
                "source": "https://github.com/paragonie/constant_time_encoding"
            },
            "time": "2024-05-08T12:18:48+00:00"
        },
        {
            "name": "paragonie/random_compat",
            "version": "v9.99.100",
            "source": {
                "type": "git",
                "url": "https://github.com/paragonie/random_compat.git",
                "reference": "996434e5492cb4c3edcb9168db6fbb1359ef965a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/paragonie/random_compat/zipball/996434e5492cb4c3edcb9168db6fbb1359ef965a",
                "reference": "996434e5492cb4c3edcb9168db6fbb1359ef965a",
                "shasum": ""
            },
            "require": {
                "php": ">= 7"
            },
            "require-dev": {
                "phpunit/phpunit": "4.*|5.*",
                "vimeo/psalm": "^1"
            },
            "suggest": {
                "ext-libsodium": "Provides a modern crypto API that can be used to generate random bytes."
            },
            "type": "library",
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Paragon Initiative Enterprises",
                    "email": "security@paragonie.com",
                    "homepage": "https://paragonie.com"
                }
            ],
            "description": "PHP 5.x polyfill for random_bytes() and random_int() from PHP 7",
            "keywords": [
                "csprng",
                "polyfill",
                "pseudorandom",
                "random"
            ],
            "support": {
                "email": "info@paragonie.com",
                "issues": "https://github.com/paragonie/random_compat/issues",
                "source": "https://github.com/paragonie/random_compat"
            },
            "time": "2020-10-15T08:29:30+00:00"
        },
        {
            "name": "phpoption/phpoption",
            "version": "1.9.2",
            "source": {
                "type": "git",
                "url": "https://github.com/schmittjoh/php-option.git",
                "reference": "80735db690fe4fc5c76dfa7f9b770634285fa820"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/schmittjoh/php-option/zipball/80735db690fe4fc5c76dfa7f9b770634285fa820",
                "reference": "80735db690fe4fc5c76dfa7f9b770634285fa820",
                "shasum": ""
            },
            "require": {
                "php": "^7.2.5 || ^8.0"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.8.2",
                "phpunit/phpunit": "^8.5.34 || ^9.6.13 || ^10.4.2"
            },
            "type": "library",
            "extra": {
                "bamarni-bin": {
                    "bin-links": true,
                    "forward-command": true
                },
                "branch-alias": {
                    "dev-master": "1.9-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "PhpOption\\": "src/PhpOption/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "Apache-2.0"
            ],
            "authors": [
                {
                    "name": "Johannes M. Schmitt",
                    "email": "schmittjoh@gmail.com",
                    "homepage": "https://github.com/schmittjoh"
                },
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                }
            ],
            "description": "Option Type for PHP",
            "keywords": [
                "language",
                "option",
                "php",
                "type"
            ],
            "support": {
                "issues": "https://github.com/schmittjoh/php-option/issues",
                "source": "https://github.com/schmittjoh/php-option/tree/1.9.2"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/phpoption/phpoption",
                    "type": "tidelift"
                }
            ],
            "time": "2023-11-12T21:59:55+00:00"
        },
        {
            "name": "phpseclib/phpseclib",
            "version": "3.0.37",
            "source": {
                "type": "git",
                "url": "https://github.com/phpseclib/phpseclib.git",
                "reference": "cfa2013d0f68c062055180dd4328cc8b9d1f30b8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpseclib/phpseclib/zipball/cfa2013d0f68c062055180dd4328cc8b9d1f30b8",
                "reference": "cfa2013d0f68c062055180dd4328cc8b9d1f30b8",
                "shasum": ""
            },
            "require": {
                "paragonie/constant_time_encoding": "^1|^2",
                "paragonie/random_compat": "^1.4|^2.0|^9.99.99",
                "php": ">=5.6.1"
            },
            "require-dev": {
                "phpunit/phpunit": "*"
            },
            "suggest": {
                "ext-dom": "Install the DOM extension to load XML formatted public keys.",
                "ext-gmp": "Install the GMP (GNU Multiple Precision) extension in order to speed up arbitrary precision integer arithmetic operations.",
                "ext-libsodium": "SSH2/SFTP can make use of some algorithms provided by the libsodium-php extension.",
                "ext-mcrypt": "Install the Mcrypt extension in order to speed up a few other cryptographic operations.",
                "ext-openssl": "Install the OpenSSL extension in order to speed up a wide variety of cryptographic operations."
            },
            "type": "library",
            "autoload": {
                "files": [
                    "phpseclib/bootstrap.php"
                ],
                "psr-4": {
                    "phpseclib3\\": "phpseclib/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jim Wigginton",
                    "email": "terrafrost@php.net",
                    "role": "Lead Developer"
                },
                {
                    "name": "Patrick Monnerat",
                    "email": "pm@datasphere.ch",
                    "role": "Developer"
                },
                {
                    "name": "Andreas Fischer",
                    "email": "bantu@phpbb.com",
                    "role": "Developer"
                },
                {
                    "name": "Hans-Jürgen Petrich",
                    "email": "petrich@tronic-media.com",
                    "role": "Developer"
                },
                {
                    "name": "Graham Campbell",
                    "email": "graham@alt-three.com",
                    "role": "Developer"
                }
            ],
            "description": "PHP Secure Communications Library - Pure-PHP implementations of RSA, AES, SSH2, SFTP, X.509 etc.",
            "homepage": "http://phpseclib.sourceforge.net",
            "keywords": [
                "BigInteger",
                "aes",
                "asn.1",
                "asn1",
                "blowfish",
                "crypto",
                "cryptography",
                "encryption",
                "rsa",
                "security",
                "sftp",
                "signature",
                "signing",
                "ssh",
                "twofish",
                "x.509",
                "x509"
            ],
            "support": {
                "issues": "https://github.com/phpseclib/phpseclib/issues",
                "source": "https://github.com/phpseclib/phpseclib/tree/3.0.37"
            },
            "funding": [
                {
                    "url": "https://github.com/terrafrost",
                    "type": "github"
                },
                {
                    "url": "https://www.patreon.com/phpseclib",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/phpseclib/phpseclib",
                    "type": "tidelift"
                }
            ],
            "time": "2024-03-03T02:14:58+00:00"
        },
        {
            "name": "psr/clock",
            "version": "1.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/clock.git",
                "reference": "e41a24703d4560fd0acb709162f73b8adfc3aa0d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/clock/zipball/e41a24703d4560fd0acb709162f73b8adfc3aa0d",
                "reference": "e41a24703d4560fd0acb709162f73b8adfc3aa0d",
                "shasum": ""
            },
            "require": {
                "php": "^7.0 || ^8.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Psr\\Clock\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "https://www.php-fig.org/"
                }
            ],
            "description": "Common interface for reading the clock.",
            "homepage": "https://github.com/php-fig/clock",
            "keywords": [
                "clock",
                "now",
                "psr",
                "psr-20",
                "time"
            ],
            "support": {
                "issues": "https://github.com/php-fig/clock/issues",
                "source": "https://github.com/php-fig/clock/tree/1.0.0"
            },
            "time": "2022-11-25T14:36:26+00:00"
        },
        {
            "name": "psr/container",
            "version": "2.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/container.git",
                "reference": "c71ecc56dfe541dbd90c5360474fbc405f8d5963"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/container/zipball/c71ecc56dfe541dbd90c5360474fbc405f8d5963",
                "reference": "c71ecc56dfe541dbd90c5360474fbc405f8d5963",
                "shasum": ""
            },
            "require": {
                "php": ">=7.4.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Container\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "https://www.php-fig.org/"
                }
            ],
            "description": "Common Container Interface (PHP FIG PSR-11)",
            "homepage": "https://github.com/php-fig/container",
            "keywords": [
                "PSR-11",
                "container",
                "container-interface",
                "container-interop",
                "psr"
            ],
            "support": {
                "issues": "https://github.com/php-fig/container/issues",
                "source": "https://github.com/php-fig/container/tree/2.0.2"
            },
            "time": "2021-11-05T16:47:00+00:00"
        },
        {
            "name": "psr/event-dispatcher",
            "version": "1.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/event-dispatcher.git",
                "reference": "dbefd12671e8a14ec7f180cab83036ed26714bb0"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/event-dispatcher/zipball/dbefd12671e8a14ec7f180cab83036ed26714bb0",
                "reference": "dbefd12671e8a14ec7f180cab83036ed26714bb0",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\EventDispatcher\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "http://www.php-fig.org/"
                }
            ],
            "description": "Standard interfaces for event handling.",
            "keywords": [
                "events",
                "psr",
                "psr-14"
            ],
            "support": {
                "issues": "https://github.com/php-fig/event-dispatcher/issues",
                "source": "https://github.com/php-fig/event-dispatcher/tree/1.0.0"
            },
            "time": "2019-01-08T18:20:26+00:00"
        },
        {
            "name": "psr/http-client",
            "version": "1.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/http-client.git",
                "reference": "bb5906edc1c324c9a05aa0873d40117941e5fa90"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/http-client/zipball/bb5906edc1c324c9a05aa0873d40117941e5fa90",
                "reference": "bb5906edc1c324c9a05aa0873d40117941e5fa90",
                "shasum": ""
            },
            "require": {
                "php": "^7.0 || ^8.0",
                "psr/http-message": "^1.0 || ^2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Http\\Client\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "https://www.php-fig.org/"
                }
            ],
            "description": "Common interface for HTTP clients",
            "homepage": "https://github.com/php-fig/http-client",
            "keywords": [
                "http",
                "http-client",
                "psr",
                "psr-18"
            ],
            "support": {
                "source": "https://github.com/php-fig/http-client"
            },
            "time": "2023-09-23T14:17:50+00:00"
        },
        {
            "name": "psr/http-factory",
            "version": "1.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/http-factory.git",
                "reference": "2b4765fddfe3b508ac62f829e852b1501d3f6e8a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/http-factory/zipball/2b4765fddfe3b508ac62f829e852b1501d3f6e8a",
                "reference": "2b4765fddfe3b508ac62f829e852b1501d3f6e8a",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1",
                "psr/http-message": "^1.0 || ^2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Http\\Message\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "https://www.php-fig.org/"
                }
            ],
            "description": "PSR-17: Common interfaces for PSR-7 HTTP message factories",
            "keywords": [
                "factory",
                "http",
                "message",
                "psr",
                "psr-17",
                "psr-7",
                "request",
                "response"
            ],
            "support": {
                "source": "https://github.com/php-fig/http-factory"
            },
            "time": "2024-04-15T12:06:14+00:00"
        },
        {
            "name": "psr/http-message",
            "version": "2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/http-message.git",
                "reference": "402d35bcb92c70c026d1a6a9883f06b2ead23d71"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/http-message/zipball/402d35bcb92c70c026d1a6a9883f06b2ead23d71",
                "reference": "402d35bcb92c70c026d1a6a9883f06b2ead23d71",
                "shasum": ""
            },
            "require": {
                "php": "^7.2 || ^8.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Http\\Message\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "https://www.php-fig.org/"
                }
            ],
            "description": "Common interface for HTTP messages",
            "homepage": "https://github.com/php-fig/http-message",
            "keywords": [
                "http",
                "http-message",
                "psr",
                "psr-7",
                "request",
                "response"
            ],
            "support": {
                "source": "https://github.com/php-fig/http-message/tree/2.0"
            },
            "time": "2023-04-04T09:54:51+00:00"
        },
        {
            "name": "psr/log",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/log.git",
                "reference": "fe5ea303b0887d5caefd3d431c3e61ad47037001"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/log/zipball/fe5ea303b0887d5caefd3d431c3e61ad47037001",
                "reference": "fe5ea303b0887d5caefd3d431c3e61ad47037001",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Log\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "https://www.php-fig.org/"
                }
            ],
            "description": "Common interface for logging libraries",
            "homepage": "https://github.com/php-fig/log",
            "keywords": [
                "log",
                "psr",
                "psr-3"
            ],
            "support": {
                "source": "https://github.com/php-fig/log/tree/3.0.0"
            },
            "time": "2021-07-14T16:46:02+00:00"
        },
        {
            "name": "psr/simple-cache",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/simple-cache.git",
                "reference": "764e0b3939f5ca87cb904f570ef9be2d78a07865"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/simple-cache/zipball/764e0b3939f5ca87cb904f570ef9be2d78a07865",
                "reference": "764e0b3939f5ca87cb904f570ef9be2d78a07865",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\SimpleCache\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "https://www.php-fig.org/"
                }
            ],
            "description": "Common interfaces for simple caching",
            "keywords": [
                "cache",
                "caching",
                "psr",
                "psr-16",
                "simple-cache"
            ],
            "support": {
                "source": "https://github.com/php-fig/simple-cache/tree/3.0.0"
            },
            "time": "2021-10-29T13:26:27+00:00"
        },
        {
            "name": "psy/psysh",
            "version": "v0.12.3",
            "source": {
                "type": "git",
                "url": "https://github.com/bobthecow/psysh.git",
                "reference": "b6b6cce7d3ee8fbf31843edce5e8f5a72eff4a73"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/bobthecow/psysh/zipball/b6b6cce7d3ee8fbf31843edce5e8f5a72eff4a73",
                "reference": "b6b6cce7d3ee8fbf31843edce5e8f5a72eff4a73",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "ext-tokenizer": "*",
                "nikic/php-parser": "^5.0 || ^4.0",
                "php": "^8.0 || ^7.4",
                "symfony/console": "^7.0 || ^6.0 || ^5.0 || ^4.0 || ^3.4",
                "symfony/var-dumper": "^7.0 || ^6.0 || ^5.0 || ^4.0 || ^3.4"
            },
            "conflict": {
                "symfony/console": "4.4.37 || 5.3.14 || 5.3.15 || 5.4.3 || 5.4.4 || 6.0.3 || 6.0.4"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.2"
            },
            "suggest": {
                "ext-pcntl": "Enabling the PCNTL extension makes PsySH a lot happier :)",
                "ext-pdo-sqlite": "The doc command requires SQLite to work.",
                "ext-posix": "If you have PCNTL, you'll want the POSIX extension as well."
            },
            "bin": [
                "bin/psysh"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "0.12.x-dev"
                },
                "bamarni-bin": {
                    "bin-links": false,
                    "forward-command": false
                }
            },
            "autoload": {
                "files": [
                    "src/functions.php"
                ],
                "psr-4": {
                    "Psy\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Justin Hileman",
                    "email": "justin@justinhileman.info",
                    "homepage": "http://justinhileman.com"
                }
            ],
            "description": "An interactive shell for modern PHP.",
            "homepage": "http://psysh.org",
            "keywords": [
                "REPL",
                "console",
                "interactive",
                "shell"
            ],
            "support": {
                "issues": "https://github.com/bobthecow/psysh/issues",
                "source": "https://github.com/bobthecow/psysh/tree/v0.12.3"
            },
            "time": "2024-04-02T15:57:53+00:00"
        },
        {
            "name": "ralouphie/getallheaders",
            "version": "3.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/ralouphie/getallheaders.git",
                "reference": "120b605dfeb996808c31b6477290a714d356e822"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ralouphie/getallheaders/zipball/120b605dfeb996808c31b6477290a714d356e822",
                "reference": "120b605dfeb996808c31b6477290a714d356e822",
                "shasum": ""
            },
            "require": {
                "php": ">=5.6"
            },
            "require-dev": {
                "php-coveralls/php-coveralls": "^2.1",
                "phpunit/phpunit": "^5 || ^6.5"
            },
            "type": "library",
            "autoload": {
                "files": [
                    "src/getallheaders.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Ralph Khattar",
                    "email": "ralph.khattar@gmail.com"
                }
            ],
            "description": "A polyfill for getallheaders.",
            "support": {
                "issues": "https://github.com/ralouphie/getallheaders/issues",
                "source": "https://github.com/ralouphie/getallheaders/tree/develop"
            },
            "time": "2019-03-08T08:55:37+00:00"
        },
        {
            "name": "ramsey/collection",
            "version": "2.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/ramsey/collection.git",
                "reference": "a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ramsey/collection/zipball/a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5",
                "reference": "a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5",
                "shasum": ""
            },
            "require": {
                "php": "^8.1"
            },
            "require-dev": {
                "captainhook/plugin-composer": "^5.3",
                "ergebnis/composer-normalize": "^2.28.3",
                "fakerphp/faker": "^1.21",
                "hamcrest/hamcrest-php": "^2.0",
                "jangregor/phpstan-prophecy": "^1.0",
                "mockery/mockery": "^1.5",
                "php-parallel-lint/php-console-highlighter": "^1.0",
                "php-parallel-lint/php-parallel-lint": "^1.3",
                "phpcsstandards/phpcsutils": "^1.0.0-rc1",
                "phpspec/prophecy-phpunit": "^2.0",
                "phpstan/extension-installer": "^1.2",
                "phpstan/phpstan": "^1.9",
                "phpstan/phpstan-mockery": "^1.1",
                "phpstan/phpstan-phpunit": "^1.3",
                "phpunit/phpunit": "^9.5",
                "psalm/plugin-mockery": "^1.1",
                "psalm/plugin-phpunit": "^0.18.4",
                "ramsey/coding-standard": "^2.0.3",
                "ramsey/conventional-commits": "^1.3",
                "vimeo/psalm": "^5.4"
            },
            "type": "library",
            "extra": {
                "captainhook": {
                    "force-install": true
                },
                "ramsey/conventional-commits": {
                    "configFile": "conventional-commits.json"
                }
            },
            "autoload": {
                "psr-4": {
                    "Ramsey\\Collection\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Ben Ramsey",
                    "email": "ben@benramsey.com",
                    "homepage": "https://benramsey.com"
                }
            ],
            "description": "A PHP library for representing and manipulating collections.",
            "keywords": [
                "array",
                "collection",
                "hash",
                "map",
                "queue",
                "set"
            ],
            "support": {
                "issues": "https://github.com/ramsey/collection/issues",
                "source": "https://github.com/ramsey/collection/tree/2.0.0"
            },
            "funding": [
                {
                    "url": "https://github.com/ramsey",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/ramsey/collection",
                    "type": "tidelift"
                }
            ],
            "time": "2022-12-31T21:50:55+00:00"
        },
        {
            "name": "ramsey/uuid",
            "version": "4.7.6",
            "source": {
                "type": "git",
                "url": "https://github.com/ramsey/uuid.git",
                "reference": "91039bc1faa45ba123c4328958e620d382ec7088"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ramsey/uuid/zipball/91039bc1faa45ba123c4328958e620d382ec7088",
                "reference": "91039bc1faa45ba123c4328958e620d382ec7088",
                "shasum": ""
            },
            "require": {
                "brick/math": "^0.8.8 || ^0.9 || ^0.10 || ^0.11 || ^0.12",
                "ext-json": "*",
                "php": "^8.0",
                "ramsey/collection": "^1.2 || ^2.0"
            },
            "replace": {
                "rhumsaa/uuid": "self.version"
            },
            "require-dev": {
                "captainhook/captainhook": "^5.10",
                "captainhook/plugin-composer": "^5.3",
                "dealerdirect/phpcodesniffer-composer-installer": "^0.7.0",
                "doctrine/annotations": "^1.8",
                "ergebnis/composer-normalize": "^2.15",
                "mockery/mockery": "^1.3",
                "paragonie/random-lib": "^2",
                "php-mock/php-mock": "^2.2",
                "php-mock/php-mock-mockery": "^1.3",
                "php-parallel-lint/php-parallel-lint": "^1.1",
                "phpbench/phpbench": "^1.0",
                "phpstan/extension-installer": "^1.1",
                "phpstan/phpstan": "^1.8",
                "phpstan/phpstan-mockery": "^1.1",
                "phpstan/phpstan-phpunit": "^1.1",
                "phpunit/phpunit": "^8.5 || ^9",
                "ramsey/composer-repl": "^1.4",
                "slevomat/coding-standard": "^8.4",
                "squizlabs/php_codesniffer": "^3.5",
                "vimeo/psalm": "^4.9"
            },
            "suggest": {
                "ext-bcmath": "Enables faster math with arbitrary-precision integers using BCMath.",
                "ext-gmp": "Enables faster math with arbitrary-precision integers using GMP.",
                "ext-uuid": "Enables the use of PeclUuidTimeGenerator and PeclUuidRandomGenerator.",
                "paragonie/random-lib": "Provides RandomLib for use with the RandomLibAdapter",
                "ramsey/uuid-doctrine": "Allows the use of Ramsey\\Uuid\\Uuid as Doctrine field type."
            },
            "type": "library",
            "extra": {
                "captainhook": {
                    "force-install": true
                }
            },
            "autoload": {
                "files": [
                    "src/functions.php"
                ],
                "psr-4": {
                    "Ramsey\\Uuid\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "A PHP library for generating and working with universally unique identifiers (UUIDs).",
            "keywords": [
                "guid",
                "identifier",
                "uuid"
            ],
            "support": {
                "issues": "https://github.com/ramsey/uuid/issues",
                "source": "https://github.com/ramsey/uuid/tree/4.7.6"
            },
            "funding": [
                {
                    "url": "https://github.com/ramsey",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/ramsey/uuid",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-27T21:32:50+00:00"
        },
        {
            "name": "spatie/db-dumper",
            "version": "3.6.0",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/db-dumper.git",
                "reference": "faca5056830bccea04eadf07e8074669cb9e905e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/db-dumper/zipball/faca5056830bccea04eadf07e8074669cb9e905e",
                "reference": "faca5056830bccea04eadf07e8074669cb9e905e",
                "shasum": ""
            },
            "require": {
                "php": "^8.0",
                "symfony/process": "^5.0|^6.0|^7.0"
            },
            "require-dev": {
                "pestphp/pest": "^1.22"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Spatie\\DbDumper\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "Dump databases",
            "homepage": "https://github.com/spatie/db-dumper",
            "keywords": [
                "database",
                "db-dumper",
                "dump",
                "mysqldump",
                "spatie"
            ],
            "support": {
                "source": "https://github.com/spatie/db-dumper/tree/3.6.0"
            },
            "funding": [
                {
                    "url": "https://spatie.be/open-source/support-us",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2024-04-24T14:54:13+00:00"
        },
        {
            "name": "spatie/image",
            "version": "3.6.3",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/image.git",
                "reference": "1d4e9c536f1bf7b88e55555d0a1ae9eee6b76a99"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/image/zipball/1d4e9c536f1bf7b88e55555d0a1ae9eee6b76a99",
                "reference": "1d4e9c536f1bf7b88e55555d0a1ae9eee6b76a99",
                "shasum": ""
            },
            "require": {
                "ext-exif": "*",
                "ext-json": "*",
                "ext-mbstring": "*",
                "php": "^8.2",
                "spatie/image-optimizer": "^1.7.5",
                "spatie/temporary-directory": "^2.2",
                "symfony/process": "^6.4|^7.0"
            },
            "require-dev": {
                "ext-gd": "*",
                "ext-imagick": "*",
                "pestphp/pest": "^2.28",
                "phpstan/phpstan": "^1.10.50",
                "spatie/pest-plugin-snapshots": "^2.1",
                "spatie/pixelmatch-php": "^1.0",
                "spatie/ray": "^1.40.1",
                "symfony/var-dumper": "^6.4|7.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Spatie\\Image\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "Manipulate images with an expressive API",
            "homepage": "https://github.com/spatie/image",
            "keywords": [
                "image",
                "spatie"
            ],
            "support": {
                "source": "https://github.com/spatie/image/tree/3.6.3"
            },
            "funding": [
                {
                    "url": "https://spatie.be/open-source/support-us",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2024-05-24T14:08:59+00:00"
        },
        {
            "name": "spatie/image-optimizer",
            "version": "1.7.5",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/image-optimizer.git",
                "reference": "43aff6725cd87bb78ccd8532633cfa8bdc962505"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/image-optimizer/zipball/43aff6725cd87bb78ccd8532633cfa8bdc962505",
                "reference": "43aff6725cd87bb78ccd8532633cfa8bdc962505",
                "shasum": ""
            },
            "require": {
                "ext-fileinfo": "*",
                "php": "^7.3|^8.0",
                "psr/log": "^1.0 | ^2.0 | ^3.0",
                "symfony/process": "^4.2|^5.0|^6.0|^7.0"
            },
            "require-dev": {
                "pestphp/pest": "^1.21",
                "phpunit/phpunit": "^8.5.21|^9.4.4",
                "symfony/var-dumper": "^4.2|^5.0|^6.0|^7.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Spatie\\ImageOptimizer\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "Easily optimize images using PHP",
            "homepage": "https://github.com/spatie/image-optimizer",
            "keywords": [
                "image-optimizer",
                "spatie"
            ],
            "support": {
                "issues": "https://github.com/spatie/image-optimizer/issues",
                "source": "https://github.com/spatie/image-optimizer/tree/1.7.5"
            },
            "time": "2024-05-16T08:48:33+00:00"
        },
        {
            "name": "spatie/laravel-activitylog",
            "version": "4.8.0",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/laravel-activitylog.git",
                "reference": "eb6f37dd40af950ce10cf5280f0acfa3e08c3bff"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/laravel-activitylog/zipball/eb6f37dd40af950ce10cf5280f0acfa3e08c3bff",
                "reference": "eb6f37dd40af950ce10cf5280f0acfa3e08c3bff",
                "shasum": ""
            },
            "require": {
                "illuminate/config": "^8.0 || ^9.0 || ^10.0 || ^11.0",
                "illuminate/database": "^8.69 || ^9.27 || ^10.0 || ^11.0",
                "illuminate/support": "^8.0 || ^9.0 || ^10.0 || ^11.0",
                "php": "^8.1",
                "spatie/laravel-package-tools": "^1.6.3"
            },
            "require-dev": {
                "ext-json": "*",
                "orchestra/testbench": "^6.23 || ^7.0 || ^8.0 || ^9.0",
                "pestphp/pest": "^1.20 || ^2.0"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Spatie\\Activitylog\\ActivitylogServiceProvider"
                    ]
                }
            },
            "autoload": {
                "files": [
                    "src/helpers.php"
                ],
                "psr-4": {
                    "Spatie\\Activitylog\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian De Deyne",
                    "email": "sebastian@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                },
                {
                    "name": "Tom Witkowski",
                    "email": "dev.gummibeer@gmail.com",
                    "homepage": "https://gummibeer.de",
                    "role": "Developer"
                }
            ],
            "description": "A very simple activity logger to monitor the users of your website or application",
            "homepage": "https://github.com/spatie/activitylog",
            "keywords": [
                "activity",
                "laravel",
                "log",
                "spatie",
                "user"
            ],
            "support": {
                "issues": "https://github.com/spatie/laravel-activitylog/issues",
                "source": "https://github.com/spatie/laravel-activitylog/tree/4.8.0"
            },
            "funding": [
                {
                    "url": "https://spatie.be/open-source/support-us",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2024-03-08T22:28:17+00:00"
        },
        {
            "name": "spatie/laravel-backup",
            "version": "8.8.0",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/laravel-backup.git",
                "reference": "7e74431fc5c46319a27daa44897df1c7bf4afe5a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/laravel-backup/zipball/7e74431fc5c46319a27daa44897df1c7bf4afe5a",
                "reference": "7e74431fc5c46319a27daa44897df1c7bf4afe5a",
                "shasum": ""
            },
            "require": {
                "ext-zip": "^1.14.0",
                "illuminate/console": "^10.10.0|^11.0",
                "illuminate/contracts": "^10.10.0|^11.0",
                "illuminate/events": "^10.10.0|^11.0",
                "illuminate/filesystem": "^10.10.0|^11.0",
                "illuminate/notifications": "^10.10.0|^11.0",
                "illuminate/support": "^10.10.0|^11.0",
                "league/flysystem": "^3.0",
                "php": "^8.1",
                "spatie/db-dumper": "^3.0",
                "spatie/laravel-package-tools": "^1.6.2",
                "spatie/laravel-signal-aware-command": "^1.2|^2.0",
                "spatie/temporary-directory": "^2.0",
                "symfony/console": "^6.0|^7.0",
                "symfony/finder": "^6.0|^7.0"
            },
            "require-dev": {
                "composer-runtime-api": "^2.0",
                "ext-pcntl": "*",
                "larastan/larastan": "^2.7.0",
                "laravel/slack-notification-channel": "^2.5|^3.0",
                "league/flysystem-aws-s3-v3": "^2.0|^3.0",
                "mockery/mockery": "^1.4",
                "orchestra/testbench": "^8.0|^9.0",
                "pestphp/pest": "^1.20|^2.0",
                "phpstan/extension-installer": "^1.1",
                "phpstan/phpstan-deprecation-rules": "^1.0",
                "phpstan/phpstan-phpunit": "^1.1"
            },
            "suggest": {
                "laravel/slack-notification-channel": "Required for sending notifications via Slack"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Spatie\\Backup\\BackupServiceProvider"
                    ]
                }
            },
            "autoload": {
                "files": [
                    "src/Helpers/functions.php"
                ],
                "psr-4": {
                    "Spatie\\Backup\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "A Laravel package to backup your application",
            "homepage": "https://github.com/spatie/laravel-backup",
            "keywords": [
                "backup",
                "database",
                "laravel-backup",
                "spatie"
            ],
            "support": {
                "issues": "https://github.com/spatie/laravel-backup/issues",
                "source": "https://github.com/spatie/laravel-backup/tree/8.8.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sponsors/spatie",
                    "type": "github"
                },
                {
                    "url": "https://spatie.be/open-source/support-us",
                    "type": "other"
                }
            ],
            "time": "2024-05-02T13:09:01+00:00"
        },
        {
            "name": "spatie/laravel-html",
            "version": "3.9.0",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/laravel-html.git",
                "reference": "35802bd9b276ce08e1d9d15584b17fdef965063b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/laravel-html/zipball/35802bd9b276ce08e1d9d15584b17fdef965063b",
                "reference": "35802bd9b276ce08e1d9d15584b17fdef965063b",
                "shasum": ""
            },
            "require": {
                "illuminate/http": "^10.0|^11.0",
                "illuminate/support": "^10.0|^11.0",
                "php": "^8.2"
            },
            "require-dev": {
                "mockery/mockery": "^1.3",
                "orchestra/testbench": "^8.0|^9.0",
                "pestphp/pest": "^2.34"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Spatie\\Html\\HtmlServiceProvider"
                    ],
                    "aliases": {
                        "Html": "Spatie\\Html\\Facades\\Html"
                    }
                }
            },
            "autoload": {
                "files": [
                    "src/helpers.php"
                ],
                "psr-4": {
                    "Spatie\\Html\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Sebastian De Deyne",
                    "email": "sebastian@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                },
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "A fluent html builder",
            "homepage": "https://github.com/spatie/laravel-html",
            "keywords": [
                "html",
                "spatie"
            ],
            "support": {
                "source": "https://github.com/spatie/laravel-html/tree/3.9.0"
            },
            "funding": [
                {
                    "url": "https://spatie.be/open-source/support-us",
                    "type": "custom"
                }
            ],
            "time": "2024-04-25T08:07:39+00:00"
        },
        {
            "name": "spatie/laravel-medialibrary",
            "version": "11.5.2",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/laravel-medialibrary.git",
                "reference": "99760ad7865a418708474cf594e736a381b45c0e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/laravel-medialibrary/zipball/99760ad7865a418708474cf594e736a381b45c0e",
                "reference": "99760ad7865a418708474cf594e736a381b45c0e",
                "shasum": ""
            },
            "require": {
                "ext-exif": "*",
                "ext-fileinfo": "*",
                "ext-json": "*",
                "illuminate/bus": "^10.0|^11.0",
                "illuminate/conditionable": "^10.0|^11.0",
                "illuminate/console": "^10.0|^11.0",
                "illuminate/database": "^10.0|^11.0",
                "illuminate/pipeline": "^10.0|^11.0",
                "illuminate/support": "^10.0|^11.0",
                "maennchen/zipstream-php": "^3.1",
                "php": "^8.2",
                "spatie/image": "^3.3.2",
                "spatie/laravel-package-tools": "^1.16.1",
                "spatie/temporary-directory": "^2.2",
                "symfony/console": "^6.4.1|^7.0"
            },
            "conflict": {
                "php-ffmpeg/php-ffmpeg": "<0.6.1"
            },
            "require-dev": {
                "aws/aws-sdk-php": "^3.293.10",
                "ext-imagick": "*",
                "ext-pdo_sqlite": "*",
                "ext-zip": "*",
                "guzzlehttp/guzzle": "^7.8.1",
                "larastan/larastan": "^2.7",
                "league/flysystem-aws-s3-v3": "^3.22",
                "mockery/mockery": "^1.6.7",
                "orchestra/testbench": "^7.0|^8.17|^9.0",
                "pestphp/pest": "^2.28",
                "phpstan/extension-installer": "^1.3.1",
                "spatie/laravel-ray": "^1.33",
                "spatie/pdf-to-image": "^2.2",
                "spatie/pest-plugin-snapshots": "^2.1"
            },
            "suggest": {
                "league/flysystem-aws-s3-v3": "Required to use AWS S3 file storage",
                "php-ffmpeg/php-ffmpeg": "Required for generating video thumbnails",
                "spatie/pdf-to-image": "Required for generating thumbnails of PDFs and SVGs"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Spatie\\MediaLibrary\\MediaLibraryServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Spatie\\MediaLibrary\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "Associate files with Eloquent models",
            "homepage": "https://github.com/spatie/laravel-medialibrary",
            "keywords": [
                "cms",
                "conversion",
                "downloads",
                "images",
                "laravel",
                "laravel-medialibrary",
                "media",
                "spatie"
            ],
            "support": {
                "issues": "https://github.com/spatie/laravel-medialibrary/issues",
                "source": "https://github.com/spatie/laravel-medialibrary/tree/11.5.2"
            },
            "funding": [
                {
                    "url": "https://spatie.be/open-source/support-us",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2024-05-27T09:07:25+00:00"
        },
        {
            "name": "spatie/laravel-package-tools",
            "version": "1.16.4",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/laravel-package-tools.git",
                "reference": "ddf678e78d7f8b17e5cdd99c0c3413a4a6592e53"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/laravel-package-tools/zipball/ddf678e78d7f8b17e5cdd99c0c3413a4a6592e53",
                "reference": "ddf678e78d7f8b17e5cdd99c0c3413a4a6592e53",
                "shasum": ""
            },
            "require": {
                "illuminate/contracts": "^9.28|^10.0|^11.0",
                "php": "^8.0"
            },
            "require-dev": {
                "mockery/mockery": "^1.5",
                "orchestra/testbench": "^7.7|^8.0",
                "pestphp/pest": "^1.22",
                "phpunit/phpunit": "^9.5.24",
                "spatie/pest-plugin-test-time": "^1.1"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Spatie\\LaravelPackageTools\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "Tools for creating Laravel packages",
            "homepage": "https://github.com/spatie/laravel-package-tools",
            "keywords": [
                "laravel-package-tools",
                "spatie"
            ],
            "support": {
                "issues": "https://github.com/spatie/laravel-package-tools/issues",
                "source": "https://github.com/spatie/laravel-package-tools/tree/1.16.4"
            },
            "funding": [
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2024-03-20T07:29:11+00:00"
        },
        {
            "name": "spatie/laravel-permission",
            "version": "6.7.0",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/laravel-permission.git",
                "reference": "17607924aa0aa89bc0153c2ce45ed7c55083367b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/laravel-permission/zipball/17607924aa0aa89bc0153c2ce45ed7c55083367b",
                "reference": "17607924aa0aa89bc0153c2ce45ed7c55083367b",
                "shasum": ""
            },
            "require": {
                "illuminate/auth": "^8.12|^9.0|^10.0|^11.0",
                "illuminate/container": "^8.12|^9.0|^10.0|^11.0",
                "illuminate/contracts": "^8.12|^9.0|^10.0|^11.0",
                "illuminate/database": "^8.12|^9.0|^10.0|^11.0",
                "php": "^8.0"
            },
            "require-dev": {
                "laravel/passport": "^11.0|^12.0",
                "orchestra/testbench": "^6.23|^7.0|^8.0|^9.0",
                "phpunit/phpunit": "^9.4|^10.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "6.x-dev",
                    "dev-master": "6.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Spatie\\Permission\\PermissionServiceProvider"
                    ]
                }
            },
            "autoload": {
                "files": [
                    "src/helpers.php"
                ],
                "psr-4": {
                    "Spatie\\Permission\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "Permission handling for Laravel 8.0 and up",
            "homepage": "https://github.com/spatie/laravel-permission",
            "keywords": [
                "acl",
                "laravel",
                "permission",
                "permissions",
                "rbac",
                "roles",
                "security",
                "spatie"
            ],
            "support": {
                "issues": "https://github.com/spatie/laravel-permission/issues",
                "source": "https://github.com/spatie/laravel-permission/tree/6.7.0"
            },
            "funding": [
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2024-04-19T12:35:28+00:00"
        },
        {
            "name": "spatie/laravel-signal-aware-command",
            "version": "2.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/laravel-signal-aware-command.git",
                "reference": "49a5e671c3a3fd992187a777d01385fc6a84759d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/laravel-signal-aware-command/zipball/49a5e671c3a3fd992187a777d01385fc6a84759d",
                "reference": "49a5e671c3a3fd992187a777d01385fc6a84759d",
                "shasum": ""
            },
            "require": {
                "illuminate/contracts": "^11.0",
                "php": "^8.2",
                "spatie/laravel-package-tools": "^1.4.3",
                "symfony/console": "^7.0"
            },
            "require-dev": {
                "brianium/paratest": "^6.2|^7.0",
                "ext-pcntl": "*",
                "nunomaduro/collision": "^5.3|^6.0|^7.0|^8.0",
                "orchestra/testbench": "^9.0",
                "pestphp/pest-plugin-laravel": "^1.3|^2.0",
                "phpunit/phpunit": "^9.5|^10|^11",
                "spatie/laravel-ray": "^1.17"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Spatie\\SignalAwareCommand\\SignalAwareCommandServiceProvider"
                    ],
                    "aliases": {
                        "Signal": "Spatie\\SignalAwareCommand\\Facades\\Signal"
                    }
                }
            },
            "autoload": {
                "psr-4": {
                    "Spatie\\SignalAwareCommand\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "Handle signals in artisan commands",
            "homepage": "https://github.com/spatie/laravel-signal-aware-command",
            "keywords": [
                "laravel",
                "laravel-signal-aware-command",
                "spatie"
            ],
            "support": {
                "issues": "https://github.com/spatie/laravel-signal-aware-command/issues",
                "source": "https://github.com/spatie/laravel-signal-aware-command/tree/2.0.0"
            },
            "funding": [
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2024-02-05T13:37:25+00:00"
        },
        {
            "name": "spatie/laravel-sluggable",
            "version": "3.6.0",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/laravel-sluggable.git",
                "reference": "a44afe6f317959bcfdadcec3148486859fd5c1f5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/laravel-sluggable/zipball/a44afe6f317959bcfdadcec3148486859fd5c1f5",
                "reference": "a44afe6f317959bcfdadcec3148486859fd5c1f5",
                "shasum": ""
            },
            "require": {
                "illuminate/database": "^8.0|^9.0|^10.0|^11.0",
                "illuminate/support": "^8.0|^9.0|^10.0|^11.0",
                "php": "^8.0"
            },
            "require-dev": {
                "orchestra/testbench": "^6.23|^7.0|^8.0|^9.0",
                "pestphp/pest": "^1.20|^2.0",
                "spatie/laravel-translatable": "^5.0|^6.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Spatie\\Sluggable\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "Generate slugs when saving Eloquent models",
            "homepage": "https://github.com/spatie/laravel-sluggable",
            "keywords": [
                "laravel-sluggable",
                "spatie"
            ],
            "support": {
                "source": "https://github.com/spatie/laravel-sluggable/tree/3.6.0"
            },
            "funding": [
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2024-02-26T08:33:29+00:00"
        },
        {
            "name": "spatie/temporary-directory",
            "version": "2.2.1",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/temporary-directory.git",
                "reference": "76949fa18f8e1a7f663fd2eaa1d00e0bcea0752a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/temporary-directory/zipball/76949fa18f8e1a7f663fd2eaa1d00e0bcea0752a",
                "reference": "76949fa18f8e1a7f663fd2eaa1d00e0bcea0752a",
                "shasum": ""
            },
            "require": {
                "php": "^8.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.5"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Spatie\\TemporaryDirectory\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Alex Vanderbist",
                    "email": "alex@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "Easily create, use and destroy temporary directories",
            "homepage": "https://github.com/spatie/temporary-directory",
            "keywords": [
                "php",
                "spatie",
                "temporary-directory"
            ],
            "support": {
                "issues": "https://github.com/spatie/temporary-directory/issues",
                "source": "https://github.com/spatie/temporary-directory/tree/2.2.1"
            },
            "funding": [
                {
                    "url": "https://spatie.be/open-source/support-us",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2023-12-25T11:46:58+00:00"
        },
        {
            "name": "symfony/clock",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/clock.git",
                "reference": "2008671acb4a30b01c453de193cf9c80549ebda6"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/clock/zipball/2008671acb4a30b01c453de193cf9c80549ebda6",
                "reference": "2008671acb4a30b01c453de193cf9c80549ebda6",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "psr/clock": "^1.0",
                "symfony/polyfill-php83": "^1.28"
            },
            "provide": {
                "psr/clock-implementation": "1.0"
            },
            "type": "library",
            "autoload": {
                "files": [
                    "Resources/now.php"
                ],
                "psr-4": {
                    "Symfony\\Component\\Clock\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Decouples applications from the system clock",
            "homepage": "https://symfony.com",
            "keywords": [
                "clock",
                "psr20",
                "time"
            ],
            "support": {
                "source": "https://github.com/symfony/clock/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/console",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/console.git",
                "reference": "c981e0e9380ce9f146416bde3150c79197ce9986"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/console/zipball/c981e0e9380ce9f146416bde3150c79197ce9986",
                "reference": "c981e0e9380ce9f146416bde3150c79197ce9986",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/service-contracts": "^2.5|^3",
                "symfony/string": "^6.4|^7.0"
            },
            "conflict": {
                "symfony/dependency-injection": "<6.4",
                "symfony/dotenv": "<6.4",
                "symfony/event-dispatcher": "<6.4",
                "symfony/lock": "<6.4",
                "symfony/process": "<6.4"
            },
            "provide": {
                "psr/log-implementation": "1.0|2.0|3.0"
            },
            "require-dev": {
                "psr/log": "^1|^2|^3",
                "symfony/config": "^6.4|^7.0",
                "symfony/dependency-injection": "^6.4|^7.0",
                "symfony/event-dispatcher": "^6.4|^7.0",
                "symfony/http-foundation": "^6.4|^7.0",
                "symfony/http-kernel": "^6.4|^7.0",
                "symfony/lock": "^6.4|^7.0",
                "symfony/messenger": "^6.4|^7.0",
                "symfony/process": "^6.4|^7.0",
                "symfony/stopwatch": "^6.4|^7.0",
                "symfony/var-dumper": "^6.4|^7.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Console\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Eases the creation of beautiful and testable command line interfaces",
            "homepage": "https://symfony.com",
            "keywords": [
                "cli",
                "command-line",
                "console",
                "terminal"
            ],
            "support": {
                "source": "https://github.com/symfony/console/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/css-selector",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/css-selector.git",
                "reference": "b08a4ad89e84b29cec285b7b1f781a7ae51cf4bc"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/css-selector/zipball/b08a4ad89e84b29cec285b7b1f781a7ae51cf4bc",
                "reference": "b08a4ad89e84b29cec285b7b1f781a7ae51cf4bc",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\CssSelector\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Jean-François Simon",
                    "email": "jeanfrancois.simon@sensiolabs.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Converts CSS selectors to XPath expressions",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/css-selector/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/deprecation-contracts",
            "version": "v3.5.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/deprecation-contracts.git",
                "reference": "0e0d29ce1f20deffb4ab1b016a7257c4f1e789a1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/deprecation-contracts/zipball/0e0d29ce1f20deffb4ab1b016a7257c4f1e789a1",
                "reference": "0e0d29ce1f20deffb4ab1b016a7257c4f1e789a1",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.5-dev"
                },
                "thanks": {
                    "name": "symfony/contracts",
                    "url": "https://github.com/symfony/contracts"
                }
            },
            "autoload": {
                "files": [
                    "function.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "A generic function and convention to trigger deprecation notices",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/deprecation-contracts/tree/v3.5.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:32:20+00:00"
        },
        {
            "name": "symfony/error-handler",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/error-handler.git",
                "reference": "cf97429887e40480c847bfeb6c3991e1e2c086ab"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/error-handler/zipball/cf97429887e40480c847bfeb6c3991e1e2c086ab",
                "reference": "cf97429887e40480c847bfeb6c3991e1e2c086ab",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "psr/log": "^1|^2|^3",
                "symfony/var-dumper": "^6.4|^7.0"
            },
            "conflict": {
                "symfony/deprecation-contracts": "<2.5",
                "symfony/http-kernel": "<6.4"
            },
            "require-dev": {
                "symfony/deprecation-contracts": "^2.5|^3",
                "symfony/http-kernel": "^6.4|^7.0",
                "symfony/serializer": "^6.4|^7.0"
            },
            "bin": [
                "Resources/bin/patch-type-declarations"
            ],
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\ErrorHandler\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides tools to manage errors and ease debugging PHP code",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/error-handler/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/event-dispatcher",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/event-dispatcher.git",
                "reference": "db2a7fab994d67d92356bb39c367db115d9d30f9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/event-dispatcher/zipball/db2a7fab994d67d92356bb39c367db115d9d30f9",
                "reference": "db2a7fab994d67d92356bb39c367db115d9d30f9",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "symfony/event-dispatcher-contracts": "^2.5|^3"
            },
            "conflict": {
                "symfony/dependency-injection": "<6.4",
                "symfony/service-contracts": "<2.5"
            },
            "provide": {
                "psr/event-dispatcher-implementation": "1.0",
                "symfony/event-dispatcher-implementation": "2.0|3.0"
            },
            "require-dev": {
                "psr/log": "^1|^2|^3",
                "symfony/config": "^6.4|^7.0",
                "symfony/dependency-injection": "^6.4|^7.0",
                "symfony/error-handler": "^6.4|^7.0",
                "symfony/expression-language": "^6.4|^7.0",
                "symfony/http-foundation": "^6.4|^7.0",
                "symfony/service-contracts": "^2.5|^3",
                "symfony/stopwatch": "^6.4|^7.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\EventDispatcher\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides tools that allow your application components to communicate with each other by dispatching events and listening to them",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/event-dispatcher/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/event-dispatcher-contracts",
            "version": "v3.5.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/event-dispatcher-contracts.git",
                "reference": "8f93aec25d41b72493c6ddff14e916177c9efc50"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/8f93aec25d41b72493c6ddff14e916177c9efc50",
                "reference": "8f93aec25d41b72493c6ddff14e916177c9efc50",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1",
                "psr/event-dispatcher": "^1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.5-dev"
                },
                "thanks": {
                    "name": "symfony/contracts",
                    "url": "https://github.com/symfony/contracts"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\EventDispatcher\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to dispatching event",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "support": {
                "source": "https://github.com/symfony/event-dispatcher-contracts/tree/v3.5.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:32:20+00:00"
        },
        {
            "name": "symfony/finder",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/finder.git",
                "reference": "4d58f0f4fe95a30d7b538d71197135483560b97c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/finder/zipball/4d58f0f4fe95a30d7b538d71197135483560b97c",
                "reference": "4d58f0f4fe95a30d7b538d71197135483560b97c",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2"
            },
            "require-dev": {
                "symfony/filesystem": "^6.4|^7.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Finder\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Finds files and directories via an intuitive fluent interface",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/finder/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-28T11:44:19+00:00"
        },
        {
            "name": "symfony/http-foundation",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/http-foundation.git",
                "reference": "0194e064b8bdc29381462f790bab04e1cac8fdc8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/http-foundation/zipball/0194e064b8bdc29381462f790bab04e1cac8fdc8",
                "reference": "0194e064b8bdc29381462f790bab04e1cac8fdc8",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "symfony/polyfill-mbstring": "~1.1",
                "symfony/polyfill-php83": "^1.27"
            },
            "conflict": {
                "doctrine/dbal": "<3.6",
                "symfony/cache": "<6.4"
            },
            "require-dev": {
                "doctrine/dbal": "^3.6|^4",
                "predis/predis": "^1.1|^2.0",
                "symfony/cache": "^6.4|^7.0",
                "symfony/dependency-injection": "^6.4|^7.0",
                "symfony/expression-language": "^6.4|^7.0",
                "symfony/http-kernel": "^6.4|^7.0",
                "symfony/mime": "^6.4|^7.0",
                "symfony/rate-limiter": "^6.4|^7.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\HttpFoundation\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Defines an object-oriented layer for the HTTP specification",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/http-foundation/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/http-kernel",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/http-kernel.git",
                "reference": "e07bb9bd86e7cd8ba2d3d9c618eec9d1bbe06d25"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/http-kernel/zipball/e07bb9bd86e7cd8ba2d3d9c618eec9d1bbe06d25",
                "reference": "e07bb9bd86e7cd8ba2d3d9c618eec9d1bbe06d25",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "psr/log": "^1|^2|^3",
                "symfony/error-handler": "^6.4|^7.0",
                "symfony/event-dispatcher": "^6.4|^7.0",
                "symfony/http-foundation": "^6.4|^7.0",
                "symfony/polyfill-ctype": "^1.8"
            },
            "conflict": {
                "symfony/browser-kit": "<6.4",
                "symfony/cache": "<6.4",
                "symfony/config": "<6.4",
                "symfony/console": "<6.4",
                "symfony/dependency-injection": "<6.4",
                "symfony/doctrine-bridge": "<6.4",
                "symfony/form": "<6.4",
                "symfony/http-client": "<6.4",
                "symfony/http-client-contracts": "<2.5",
                "symfony/mailer": "<6.4",
                "symfony/messenger": "<6.4",
                "symfony/translation": "<6.4",
                "symfony/translation-contracts": "<2.5",
                "symfony/twig-bridge": "<6.4",
                "symfony/validator": "<6.4",
                "symfony/var-dumper": "<6.4",
                "twig/twig": "<3.0.4"
            },
            "provide": {
                "psr/log-implementation": "1.0|2.0|3.0"
            },
            "require-dev": {
                "psr/cache": "^1.0|^2.0|^3.0",
                "symfony/browser-kit": "^6.4|^7.0",
                "symfony/clock": "^6.4|^7.0",
                "symfony/config": "^6.4|^7.0",
                "symfony/console": "^6.4|^7.0",
                "symfony/css-selector": "^6.4|^7.0",
                "symfony/dependency-injection": "^6.4|^7.0",
                "symfony/dom-crawler": "^6.4|^7.0",
                "symfony/expression-language": "^6.4|^7.0",
                "symfony/finder": "^6.4|^7.0",
                "symfony/http-client-contracts": "^2.5|^3",
                "symfony/process": "^6.4|^7.0",
                "symfony/property-access": "^6.4|^7.0",
                "symfony/routing": "^6.4|^7.0",
                "symfony/serializer": "^6.4.4|^7.0.4",
                "symfony/stopwatch": "^6.4|^7.0",
                "symfony/translation": "^6.4|^7.0",
                "symfony/translation-contracts": "^2.5|^3",
                "symfony/uid": "^6.4|^7.0",
                "symfony/validator": "^6.4|^7.0",
                "symfony/var-dumper": "^6.4|^7.0",
                "symfony/var-exporter": "^6.4|^7.0",
                "twig/twig": "^3.0.4"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\HttpKernel\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides a structured process for converting a Request into a Response",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/http-kernel/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-29T12:20:25+00:00"
        },
        {
            "name": "symfony/mailer",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/mailer.git",
                "reference": "4ff41a7c7998a88cfdc31b5841ef64d9246fc56a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/mailer/zipball/4ff41a7c7998a88cfdc31b5841ef64d9246fc56a",
                "reference": "4ff41a7c7998a88cfdc31b5841ef64d9246fc56a",
                "shasum": ""
            },
            "require": {
                "egulias/email-validator": "^2.1.10|^3|^4",
                "php": ">=8.2",
                "psr/event-dispatcher": "^1",
                "psr/log": "^1|^2|^3",
                "symfony/event-dispatcher": "^6.4|^7.0",
                "symfony/mime": "^6.4|^7.0",
                "symfony/service-contracts": "^2.5|^3"
            },
            "conflict": {
                "symfony/http-client-contracts": "<2.5",
                "symfony/http-kernel": "<6.4",
                "symfony/messenger": "<6.4",
                "symfony/mime": "<6.4",
                "symfony/twig-bridge": "<6.4"
            },
            "require-dev": {
                "symfony/console": "^6.4|^7.0",
                "symfony/http-client": "^6.4|^7.0",
                "symfony/messenger": "^6.4|^7.0",
                "symfony/twig-bridge": "^6.4|^7.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Mailer\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Helps sending emails",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/mailer/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/mime",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/mime.git",
                "reference": "3adbf110c306546f6f00337f421d2edca0e8d3c0"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/mime/zipball/3adbf110c306546f6f00337f421d2edca0e8d3c0",
                "reference": "3adbf110c306546f6f00337f421d2edca0e8d3c0",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "symfony/polyfill-intl-idn": "^1.10",
                "symfony/polyfill-mbstring": "^1.0"
            },
            "conflict": {
                "egulias/email-validator": "~3.0.0",
                "phpdocumentor/reflection-docblock": "<3.2.2",
                "phpdocumentor/type-resolver": "<1.4.0",
                "symfony/mailer": "<6.4",
                "symfony/serializer": "<6.4"
            },
            "require-dev": {
                "egulias/email-validator": "^2.1.10|^3.1|^4",
                "league/html-to-markdown": "^5.0",
                "phpdocumentor/reflection-docblock": "^3.0|^4.0|^5.0",
                "symfony/dependency-injection": "^6.4|^7.0",
                "symfony/process": "^6.4|^7.0",
                "symfony/property-access": "^6.4|^7.0",
                "symfony/property-info": "^6.4|^7.0",
                "symfony/serializer": "^6.4|^7.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Mime\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Allows manipulating MIME messages",
            "homepage": "https://symfony.com",
            "keywords": [
                "mime",
                "mime-type"
            ],
            "support": {
                "source": "https://github.com/symfony/mime/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/polyfill-ctype",
            "version": "v1.29.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-ctype.git",
                "reference": "ef4d7e442ca910c4764bce785146269b30cb5fc4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-ctype/zipball/ef4d7e442ca910c4764bce785146269b30cb5fc4",
                "reference": "ef4d7e442ca910c4764bce785146269b30cb5fc4",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "provide": {
                "ext-ctype": "*"
            },
            "suggest": {
                "ext-ctype": "For best performance"
            },
            "type": "library",
            "extra": {
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Ctype\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Gert de Pagter",
                    "email": "BackEndTea@gmail.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for ctype functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "ctype",
                "polyfill",
                "portable"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-ctype/tree/v1.29.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-01-29T20:11:03+00:00"
        },
        {
            "name": "symfony/polyfill-intl-grapheme",
            "version": "v1.29.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-grapheme.git",
                "reference": "32a9da87d7b3245e09ac426c83d334ae9f06f80f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-grapheme/zipball/32a9da87d7b3245e09ac426c83d334ae9f06f80f",
                "reference": "32a9da87d7b3245e09ac426c83d334ae9f06f80f",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Grapheme\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's grapheme_* functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "grapheme",
                "intl",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-intl-grapheme/tree/v1.29.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-01-29T20:11:03+00:00"
        },
        {
            "name": "symfony/polyfill-intl-idn",
            "version": "v1.29.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-idn.git",
                "reference": "a287ed7475f85bf6f61890146edbc932c0fff919"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-idn/zipball/a287ed7475f85bf6f61890146edbc932c0fff919",
                "reference": "a287ed7475f85bf6f61890146edbc932c0fff919",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1",
                "symfony/polyfill-intl-normalizer": "^1.10",
                "symfony/polyfill-php72": "^1.10"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Idn\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Laurent Bassin",
                    "email": "laurent@bassin.info"
                },
                {
                    "name": "Trevor Rowbotham",
                    "email": "trevor.rowbotham@pm.me"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "idn",
                "intl",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-intl-idn/tree/v1.29.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-01-29T20:11:03+00:00"
        },
        {
            "name": "symfony/polyfill-intl-normalizer",
            "version": "v1.29.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-normalizer.git",
                "reference": "bc45c394692b948b4d383a08d7753968bed9a83d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-normalizer/zipball/bc45c394692b948b4d383a08d7753968bed9a83d",
                "reference": "bc45c394692b948b4d383a08d7753968bed9a83d",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Normalizer\\": ""
                },
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's Normalizer class and related functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "intl",
                "normalizer",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-intl-normalizer/tree/v1.29.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-01-29T20:11:03+00:00"
        },
        {
            "name": "symfony/polyfill-mbstring",
            "version": "v1.29.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-mbstring.git",
                "reference": "9773676c8a1bb1f8d4340a62efe641cf76eda7ec"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-mbstring/zipball/9773676c8a1bb1f8d4340a62efe641cf76eda7ec",
                "reference": "9773676c8a1bb1f8d4340a62efe641cf76eda7ec",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "provide": {
                "ext-mbstring": "*"
            },
            "suggest": {
                "ext-mbstring": "For best performance"
            },
            "type": "library",
            "extra": {
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Mbstring\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for the Mbstring extension",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "mbstring",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-mbstring/tree/v1.29.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-01-29T20:11:03+00:00"
        },
        {
            "name": "symfony/polyfill-php72",
            "version": "v1.29.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php72.git",
                "reference": "861391a8da9a04cbad2d232ddd9e4893220d6e25"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php72/zipball/861391a8da9a04cbad2d232ddd9e4893220d6e25",
                "reference": "861391a8da9a04cbad2d232ddd9e4893220d6e25",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "type": "library",
            "extra": {
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Php72\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 7.2+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-php72/tree/v1.29.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-01-29T20:11:03+00:00"
        },
        {
            "name": "symfony/polyfill-php80",
            "version": "v1.29.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php80.git",
                "reference": "87b68208d5c1188808dd7839ee1e6c8ec3b02f1b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php80/zipball/87b68208d5c1188808dd7839ee1e6c8ec3b02f1b",
                "reference": "87b68208d5c1188808dd7839ee1e6c8ec3b02f1b",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "type": "library",
            "extra": {
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Php80\\": ""
                },
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Ion Bazan",
                    "email": "ion.bazan@gmail.com"
                },
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 8.0+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-php80/tree/v1.29.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-01-29T20:11:03+00:00"
        },
        {
            "name": "symfony/polyfill-php83",
            "version": "v1.29.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php83.git",
                "reference": "86fcae159633351e5fd145d1c47de6c528f8caff"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php83/zipball/86fcae159633351e5fd145d1c47de6c528f8caff",
                "reference": "86fcae159633351e5fd145d1c47de6c528f8caff",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1",
                "symfony/polyfill-php80": "^1.14"
            },
            "type": "library",
            "extra": {
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Php83\\": ""
                },
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 8.3+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-php83/tree/v1.29.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-01-29T20:11:03+00:00"
        },
        {
            "name": "symfony/polyfill-uuid",
            "version": "v1.29.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-uuid.git",
                "reference": "3abdd21b0ceaa3000ee950097bc3cf9efc137853"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-uuid/zipball/3abdd21b0ceaa3000ee950097bc3cf9efc137853",
                "reference": "3abdd21b0ceaa3000ee950097bc3cf9efc137853",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "provide": {
                "ext-uuid": "*"
            },
            "suggest": {
                "ext-uuid": "For best performance"
            },
            "type": "library",
            "extra": {
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Uuid\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Grégoire Pineau",
                    "email": "lyrixx@lyrixx.info"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for uuid functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "uuid"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-uuid/tree/v1.29.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-01-29T20:11:03+00:00"
        },
        {
            "name": "symfony/process",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/process.git",
                "reference": "3839e56b94dd1dbd13235d27504e66baf23faba0"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/process/zipball/3839e56b94dd1dbd13235d27504e66baf23faba0",
                "reference": "3839e56b94dd1dbd13235d27504e66baf23faba0",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Process\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Executes commands in sub-processes",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/process/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/routing",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/routing.git",
                "reference": "9f82bf7766ccc9c22ab7aeb9bebb98351483fa5b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/routing/zipball/9f82bf7766ccc9c22ab7aeb9bebb98351483fa5b",
                "reference": "9f82bf7766ccc9c22ab7aeb9bebb98351483fa5b",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "symfony/deprecation-contracts": "^2.5|^3"
            },
            "conflict": {
                "symfony/config": "<6.4",
                "symfony/dependency-injection": "<6.4",
                "symfony/yaml": "<6.4"
            },
            "require-dev": {
                "psr/log": "^1|^2|^3",
                "symfony/config": "^6.4|^7.0",
                "symfony/dependency-injection": "^6.4|^7.0",
                "symfony/expression-language": "^6.4|^7.0",
                "symfony/http-foundation": "^6.4|^7.0",
                "symfony/yaml": "^6.4|^7.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Routing\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Maps an HTTP request to a set of configuration variables",
            "homepage": "https://symfony.com",
            "keywords": [
                "router",
                "routing",
                "uri",
                "url"
            ],
            "support": {
                "source": "https://github.com/symfony/routing/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/service-contracts",
            "version": "v3.5.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/service-contracts.git",
                "reference": "bd1d9e59a81d8fa4acdcea3f617c581f7475a80f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/service-contracts/zipball/bd1d9e59a81d8fa4acdcea3f617c581f7475a80f",
                "reference": "bd1d9e59a81d8fa4acdcea3f617c581f7475a80f",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1",
                "psr/container": "^1.1|^2.0",
                "symfony/deprecation-contracts": "^2.5|^3"
            },
            "conflict": {
                "ext-psr": "<1.1|>=2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.5-dev"
                },
                "thanks": {
                    "name": "symfony/contracts",
                    "url": "https://github.com/symfony/contracts"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\Service\\": ""
                },
                "exclude-from-classmap": [
                    "/Test/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to writing services",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "support": {
                "source": "https://github.com/symfony/service-contracts/tree/v3.5.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:32:20+00:00"
        },
        {
            "name": "symfony/string",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/string.git",
                "reference": "e405b5424dc2528e02e31ba26b83a79fd4eb8f63"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/string/zipball/e405b5424dc2528e02e31ba26b83a79fd4eb8f63",
                "reference": "e405b5424dc2528e02e31ba26b83a79fd4eb8f63",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "symfony/polyfill-ctype": "~1.8",
                "symfony/polyfill-intl-grapheme": "~1.0",
                "symfony/polyfill-intl-normalizer": "~1.0",
                "symfony/polyfill-mbstring": "~1.0"
            },
            "conflict": {
                "symfony/translation-contracts": "<2.5"
            },
            "require-dev": {
                "symfony/error-handler": "^6.4|^7.0",
                "symfony/http-client": "^6.4|^7.0",
                "symfony/intl": "^6.4|^7.0",
                "symfony/translation-contracts": "^2.5|^3.0",
                "symfony/var-exporter": "^6.4|^7.0"
            },
            "type": "library",
            "autoload": {
                "files": [
                    "Resources/functions.php"
                ],
                "psr-4": {
                    "Symfony\\Component\\String\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides an object-oriented API to strings and deals with bytes, UTF-8 code points and grapheme clusters in a unified way",
            "homepage": "https://symfony.com",
            "keywords": [
                "grapheme",
                "i18n",
                "string",
                "unicode",
                "utf-8",
                "utf8"
            ],
            "support": {
                "source": "https://github.com/symfony/string/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/translation",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/translation.git",
                "reference": "1515e03afaa93e6419aba5d5c9d209159317100b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/translation/zipball/1515e03afaa93e6419aba5d5c9d209159317100b",
                "reference": "1515e03afaa93e6419aba5d5c9d209159317100b",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/translation-contracts": "^2.5|^3.0"
            },
            "conflict": {
                "symfony/config": "<6.4",
                "symfony/console": "<6.4",
                "symfony/dependency-injection": "<6.4",
                "symfony/http-client-contracts": "<2.5",
                "symfony/http-kernel": "<6.4",
                "symfony/service-contracts": "<2.5",
                "symfony/twig-bundle": "<6.4",
                "symfony/yaml": "<6.4"
            },
            "provide": {
                "symfony/translation-implementation": "2.3|3.0"
            },
            "require-dev": {
                "nikic/php-parser": "^4.18|^5.0",
                "psr/log": "^1|^2|^3",
                "symfony/config": "^6.4|^7.0",
                "symfony/console": "^6.4|^7.0",
                "symfony/dependency-injection": "^6.4|^7.0",
                "symfony/finder": "^6.4|^7.0",
                "symfony/http-client-contracts": "^2.5|^3.0",
                "symfony/http-kernel": "^6.4|^7.0",
                "symfony/intl": "^6.4|^7.0",
                "symfony/polyfill-intl-icu": "^1.21",
                "symfony/routing": "^6.4|^7.0",
                "symfony/service-contracts": "^2.5|^3",
                "symfony/yaml": "^6.4|^7.0"
            },
            "type": "library",
            "autoload": {
                "files": [
                    "Resources/functions.php"
                ],
                "psr-4": {
                    "Symfony\\Component\\Translation\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides tools to internationalize your application",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/translation/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/translation-contracts",
            "version": "v3.5.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/translation-contracts.git",
                "reference": "b9d2189887bb6b2e0367a9fc7136c5239ab9b05a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/translation-contracts/zipball/b9d2189887bb6b2e0367a9fc7136c5239ab9b05a",
                "reference": "b9d2189887bb6b2e0367a9fc7136c5239ab9b05a",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.5-dev"
                },
                "thanks": {
                    "name": "symfony/contracts",
                    "url": "https://github.com/symfony/contracts"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\Translation\\": ""
                },
                "exclude-from-classmap": [
                    "/Test/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to translation",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "support": {
                "source": "https://github.com/symfony/translation-contracts/tree/v3.5.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:32:20+00:00"
        },
        {
            "name": "symfony/uid",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/uid.git",
                "reference": "4f3a5d181999e25918586c8369de09e7814e7be2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/uid/zipball/4f3a5d181999e25918586c8369de09e7814e7be2",
                "reference": "4f3a5d181999e25918586c8369de09e7814e7be2",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "symfony/polyfill-uuid": "^1.15"
            },
            "require-dev": {
                "symfony/console": "^6.4|^7.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Uid\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Grégoire Pineau",
                    "email": "lyrixx@lyrixx.info"
                },
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides an object-oriented API to generate and represent UIDs",
            "homepage": "https://symfony.com",
            "keywords": [
                "UID",
                "ulid",
                "uuid"
            ],
            "support": {
                "source": "https://github.com/symfony/uid/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "symfony/var-dumper",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/var-dumper.git",
                "reference": "d1627b66fd87c8b4d90cabe5671c29d575690924"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/var-dumper/zipball/d1627b66fd87c8b4d90cabe5671c29d575690924",
                "reference": "d1627b66fd87c8b4d90cabe5671c29d575690924",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "symfony/polyfill-mbstring": "~1.0"
            },
            "conflict": {
                "symfony/console": "<6.4"
            },
            "require-dev": {
                "ext-iconv": "*",
                "symfony/console": "^6.4|^7.0",
                "symfony/http-kernel": "^6.4|^7.0",
                "symfony/process": "^6.4|^7.0",
                "symfony/uid": "^6.4|^7.0",
                "twig/twig": "^3.0.4"
            },
            "bin": [
                "Resources/bin/var-dump-server"
            ],
            "type": "library",
            "autoload": {
                "files": [
                    "Resources/functions/dump.php"
                ],
                "psr-4": {
                    "Symfony\\Component\\VarDumper\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides mechanisms for walking through any arbitrary PHP variable",
            "homepage": "https://symfony.com",
            "keywords": [
                "debug",
                "dump"
            ],
            "support": {
                "source": "https://github.com/symfony/var-dumper/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-18T09:29:19+00:00"
        },
        {
            "name": "tijsverkoyen/css-to-inline-styles",
            "version": "v2.2.7",
            "source": {
                "type": "git",
                "url": "https://github.com/tijsverkoyen/CssToInlineStyles.git",
                "reference": "83ee6f38df0a63106a9e4536e3060458b74ccedb"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/tijsverkoyen/CssToInlineStyles/zipball/83ee6f38df0a63106a9e4536e3060458b74ccedb",
                "reference": "83ee6f38df0a63106a9e4536e3060458b74ccedb",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-libxml": "*",
                "php": "^5.5 || ^7.0 || ^8.0",
                "symfony/css-selector": "^2.7 || ^3.0 || ^4.0 || ^5.0 || ^6.0 || ^7.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^4.8.35 || ^5.7 || ^6.0 || ^7.5 || ^8.5.21 || ^9.5.10"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "TijsVerkoyen\\CssToInlineStyles\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Tijs Verkoyen",
                    "email": "css_to_inline_styles@verkoyen.eu",
                    "role": "Developer"
                }
            ],
            "description": "CssToInlineStyles is a class that enables you to convert HTML-pages/files into HTML-pages/files with inline styles. This is very useful when you're sending emails.",
            "homepage": "https://github.com/tijsverkoyen/CssToInlineStyles",
            "support": {
                "issues": "https://github.com/tijsverkoyen/CssToInlineStyles/issues",
                "source": "https://github.com/tijsverkoyen/CssToInlineStyles/tree/v2.2.7"
            },
            "time": "2023-12-08T13:03:43+00:00"
        },
        {
            "name": "unisharp/laravel-filemanager",
            "version": "v2.9.0",
            "source": {
                "type": "git",
                "url": "https://github.com/UniSharp/laravel-filemanager.git",
                "reference": "eecae14bc2d31e9d12472d4c4ec362da1387ba82"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/UniSharp/laravel-filemanager/zipball/eecae14bc2d31e9d12472d4c4ec362da1387ba82",
                "reference": "eecae14bc2d31e9d12472d4c4ec362da1387ba82",
                "shasum": ""
            },
            "require": {
                "ext-exif": "*",
                "ext-fileinfo": "*",
                "illuminate/config": "5.4.* || 5.5.* || 5.6.* || 5.7.* || 5.8.* || ^6.0 || ^7.0 || ^8.0 || ^9.0 || ^10.0 || ^11.0",
                "illuminate/container": "5.4.* || 5.5.* || 5.6.* || 5.7.* || 5.8.* || ^6.0 || ^7.0 || ^8.0 || ^9.0 || ^10.0 || ^11.0",
                "illuminate/filesystem": "5.4.* || 5.5.* || 5.6.* || 5.7.* || 5.8.* || ^6.0 || ^7.0 || ^8.0 || ^9.0 || ^10.0 || ^11.0",
                "illuminate/http": "5.4.* || 5.5.* || 5.6.* || 5.7.* || 5.8.* || ^6.0 || ^7.0 || ^8.0 || ^9.0 || ^10.0 || ^11.0",
                "illuminate/support": "5.4.* || 5.5.* || 5.6.* || 5.7.* || 5.8.* || ^6.0 || ^7.0 || ^8.0 || ^9.0 || ^10.0 || ^11.0",
                "intervention/image": ">=2.0.0",
                "league/flysystem": ">=2.0.0",
                "php": ">=7.2.0"
            },
            "require-dev": {
                "mockery/mockery": "~1.3.0",
                "phpunit/phpunit": "~8.0",
                "squizlabs/php_codesniffer": "^3.1"
            },
            "suggest": {
                "ext-gd": "to use GD library based image processing.",
                "ext-imagick": "to use Imagick based image processing."
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "UniSharp\\LaravelFilemanager\\LaravelFilemanagerServiceProvider"
                    ],
                    "aliases": []
                }
            },
            "autoload": {
                "psr-4": {
                    "UniSharp\\LaravelFilemanager\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Trevor Sawler",
                    "email": "trevor.sawler@gmail.com"
                },
                {
                    "name": "UniSharp Ltd.",
                    "email": "opensource@unisharp.com"
                }
            ],
            "description": "A file upload/editor intended for use with Laravel 5 to 10 and CKEditor / TinyMCE",
            "keywords": [
                "CKEditor",
                "file",
                "filemanager",
                "image",
                "laravel",
                "manager",
                "tinymce",
                "upload"
            ],
            "support": {
                "issues": "https://github.com/UniSharp/laravel-filemanager/issues",
                "source": "https://github.com/UniSharp/laravel-filemanager/tree/v2.9.0"
            },
            "time": "2024-04-08T06:24:32+00:00"
        },
        {
            "name": "vlucas/phpdotenv",
            "version": "v5.6.0",
            "source": {
                "type": "git",
                "url": "https://github.com/vlucas/phpdotenv.git",
                "reference": "2cf9fb6054c2bb1d59d1f3817706ecdb9d2934c4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/vlucas/phpdotenv/zipball/2cf9fb6054c2bb1d59d1f3817706ecdb9d2934c4",
                "reference": "2cf9fb6054c2bb1d59d1f3817706ecdb9d2934c4",
                "shasum": ""
            },
            "require": {
                "ext-pcre": "*",
                "graham-campbell/result-type": "^1.1.2",
                "php": "^7.2.5 || ^8.0",
                "phpoption/phpoption": "^1.9.2",
                "symfony/polyfill-ctype": "^1.24",
                "symfony/polyfill-mbstring": "^1.24",
                "symfony/polyfill-php80": "^1.24"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.8.2",
                "ext-filter": "*",
                "phpunit/phpunit": "^8.5.34 || ^9.6.13 || ^10.4.2"
            },
            "suggest": {
                "ext-filter": "Required to use the boolean validator."
            },
            "type": "library",
            "extra": {
                "bamarni-bin": {
                    "bin-links": true,
                    "forward-command": true
                },
                "branch-alias": {
                    "dev-master": "5.6-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Dotenv\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                },
                {
                    "name": "Vance Lucas",
                    "email": "vance@vancelucas.com",
                    "homepage": "https://github.com/vlucas"
                }
            ],
            "description": "Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.",
            "keywords": [
                "dotenv",
                "env",
                "environment"
            ],
            "support": {
                "issues": "https://github.com/vlucas/phpdotenv/issues",
                "source": "https://github.com/vlucas/phpdotenv/tree/v5.6.0"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/vlucas/phpdotenv",
                    "type": "tidelift"
                }
            ],
            "time": "2023-11-12T22:43:29+00:00"
        },
        {
            "name": "voku/portable-ascii",
            "version": "2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/voku/portable-ascii.git",
                "reference": "b56450eed252f6801410d810c8e1727224ae0743"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/voku/portable-ascii/zipball/b56450eed252f6801410d810c8e1727224ae0743",
                "reference": "b56450eed252f6801410d810c8e1727224ae0743",
                "shasum": ""
            },
            "require": {
                "php": ">=7.0.0"
            },
            "require-dev": {
                "phpunit/phpunit": "~6.0 || ~7.0 || ~9.0"
            },
            "suggest": {
                "ext-intl": "Use Intl for transliterator_transliterate() support"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "voku\\": "src/voku/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Lars Moelleken",
                    "homepage": "http://www.moelleken.org/"
                }
            ],
            "description": "Portable ASCII library - performance optimized (ascii) string functions for php.",
            "homepage": "https://github.com/voku/portable-ascii",
            "keywords": [
                "ascii",
                "clean",
                "php"
            ],
            "support": {
                "issues": "https://github.com/voku/portable-ascii/issues",
                "source": "https://github.com/voku/portable-ascii/tree/2.0.1"
            },
            "funding": [
                {
                    "url": "https://www.paypal.me/moelleken",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/voku",
                    "type": "github"
                },
                {
                    "url": "https://opencollective.com/portable-ascii",
                    "type": "open_collective"
                },
                {
                    "url": "https://www.patreon.com/voku",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/voku/portable-ascii",
                    "type": "tidelift"
                }
            ],
            "time": "2022-03-08T17:03:00+00:00"
        },
        {
            "name": "webmozart/assert",
            "version": "1.11.0",
            "source": {
                "type": "git",
                "url": "https://github.com/webmozarts/assert.git",
                "reference": "11cb2199493b2f8a3b53e7f19068fc6aac760991"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/webmozarts/assert/zipball/11cb2199493b2f8a3b53e7f19068fc6aac760991",
                "reference": "11cb2199493b2f8a3b53e7f19068fc6aac760991",
                "shasum": ""
            },
            "require": {
                "ext-ctype": "*",
                "php": "^7.2 || ^8.0"
            },
            "conflict": {
                "phpstan/phpstan": "<0.12.20",
                "vimeo/psalm": "<4.6.1 || 4.6.2"
            },
            "require-dev": {
                "phpunit/phpunit": "^8.5.13"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.10-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Webmozart\\Assert\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@gmail.com"
                }
            ],
            "description": "Assertions to validate method input/output with nice error messages.",
            "keywords": [
                "assert",
                "check",
                "validate"
            ],
            "support": {
                "issues": "https://github.com/webmozarts/assert/issues",
                "source": "https://github.com/webmozarts/assert/tree/1.11.0"
            },
            "time": "2022-06-03T18:03:27+00:00"
        },
        {
            "name": "yajra/laravel-datatables-oracle",
            "version": "v11.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/yajra/laravel-datatables.git",
                "reference": "74a1d060418a5dd269ed38ca62cadaaed19b7124"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/yajra/laravel-datatables/zipball/74a1d060418a5dd269ed38ca62cadaaed19b7124",
                "reference": "74a1d060418a5dd269ed38ca62cadaaed19b7124",
                "shasum": ""
            },
            "require": {
                "illuminate/database": "^11",
                "illuminate/filesystem": "^11",
                "illuminate/http": "^11",
                "illuminate/support": "^11",
                "illuminate/view": "^11",
                "php": "^8.2"
            },
            "require-dev": {
                "algolia/algoliasearch-client-php": "^3.4.1",
                "larastan/larastan": "^2.9.1",
                "laravel/pint": "^1.14",
                "laravel/scout": "^10.8.3",
                "meilisearch/meilisearch-php": "^1.6.1",
                "orchestra/testbench": "^9",
                "rector/rector": "^1.0"
            },
            "suggest": {
                "yajra/laravel-datatables-buttons": "Plugin for server-side exporting of dataTables.",
                "yajra/laravel-datatables-editor": "Plugin to use DataTables Editor (requires a license).",
                "yajra/laravel-datatables-export": "Plugin for server-side exporting using livewire and queue worker.",
                "yajra/laravel-datatables-fractal": "Plugin for server-side response using Fractal.",
                "yajra/laravel-datatables-html": "Plugin for server-side HTML builder of dataTables."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "11.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Yajra\\DataTables\\DataTablesServiceProvider"
                    ],
                    "aliases": {
                        "DataTables": "Yajra\\DataTables\\Facades\\DataTables"
                    }
                }
            },
            "autoload": {
                "files": [
                    "src/helper.php"
                ],
                "psr-4": {
                    "Yajra\\DataTables\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Arjay Angeles",
                    "email": "aqangeles@gmail.com"
                }
            ],
            "description": "jQuery DataTables API for Laravel",
            "keywords": [
                "datatables",
                "jquery",
                "laravel",
                "yajra"
            ],
            "support": {
                "issues": "https://github.com/yajra/laravel-datatables/issues",
                "source": "https://github.com/yajra/laravel-datatables/tree/v11.1.1"
            },
            "funding": [
                {
                    "url": "https://github.com/sponsors/yajra",
                    "type": "github"
                }
            ],
            "time": "2024-05-23T13:24:38+00:00"
        }
    ],
    "packages-dev": [
        {
            "name": "barryvdh/laravel-debugbar",
            "version": "v3.13.5",
            "source": {
                "type": "git",
                "url": "https://github.com/barryvdh/laravel-debugbar.git",
                "reference": "92d86be45ee54edff735e46856f64f14b6a8bb07"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/barryvdh/laravel-debugbar/zipball/92d86be45ee54edff735e46856f64f14b6a8bb07",
                "reference": "92d86be45ee54edff735e46856f64f14b6a8bb07",
                "shasum": ""
            },
            "require": {
                "illuminate/routing": "^9|^10|^11",
                "illuminate/session": "^9|^10|^11",
                "illuminate/support": "^9|^10|^11",
                "maximebf/debugbar": "~1.22.0",
                "php": "^8.0",
                "symfony/finder": "^6|^7"
            },
            "require-dev": {
                "mockery/mockery": "^1.3.3",
                "orchestra/testbench-dusk": "^5|^6|^7|^8|^9",
                "phpunit/phpunit": "^9.6|^10.5",
                "squizlabs/php_codesniffer": "^3.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.13-dev"
                },
                "laravel": {
                    "providers": [
                        "Barryvdh\\Debugbar\\ServiceProvider"
                    ],
                    "aliases": {
                        "Debugbar": "Barryvdh\\Debugbar\\Facades\\Debugbar"
                    }
                }
            },
            "autoload": {
                "files": [
                    "src/helpers.php"
                ],
                "psr-4": {
                    "Barryvdh\\Debugbar\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Barry vd. Heuvel",
                    "email": "barryvdh@gmail.com"
                }
            ],
            "description": "PHP Debugbar integration for Laravel",
            "keywords": [
                "debug",
                "debugbar",
                "laravel",
                "profiler",
                "webprofiler"
            ],
            "support": {
                "issues": "https://github.com/barryvdh/laravel-debugbar/issues",
                "source": "https://github.com/barryvdh/laravel-debugbar/tree/v3.13.5"
            },
            "funding": [
                {
                    "url": "https://fruitcake.nl",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/barryvdh",
                    "type": "github"
                }
            ],
            "time": "2024-04-12T11:20:37+00:00"
        },
        {
            "name": "fakerphp/faker",
            "version": "v1.23.1",
            "source": {
                "type": "git",
                "url": "https://github.com/FakerPHP/Faker.git",
                "reference": "bfb4fe148adbf78eff521199619b93a52ae3554b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/FakerPHP/Faker/zipball/bfb4fe148adbf78eff521199619b93a52ae3554b",
                "reference": "bfb4fe148adbf78eff521199619b93a52ae3554b",
                "shasum": ""
            },
            "require": {
                "php": "^7.4 || ^8.0",
                "psr/container": "^1.0 || ^2.0",
                "symfony/deprecation-contracts": "^2.2 || ^3.0"
            },
            "conflict": {
                "fzaninotto/faker": "*"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.4.1",
                "doctrine/persistence": "^1.3 || ^2.0",
                "ext-intl": "*",
                "phpunit/phpunit": "^9.5.26",
                "symfony/phpunit-bridge": "^5.4.16"
            },
            "suggest": {
                "doctrine/orm": "Required to use Faker\\ORM\\Doctrine",
                "ext-curl": "Required by Faker\\Provider\\Image to download images.",
                "ext-dom": "Required by Faker\\Provider\\HtmlLorem for generating random HTML.",
                "ext-iconv": "Required by Faker\\Provider\\ru_RU\\Text::realText() for generating real Russian text.",
                "ext-mbstring": "Required for multibyte Unicode string functionality."
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Faker\\": "src/Faker/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "François Zaninotto"
                }
            ],
            "description": "Faker is a PHP library that generates fake data for you.",
            "keywords": [
                "data",
                "faker",
                "fixtures"
            ],
            "support": {
                "issues": "https://github.com/FakerPHP/Faker/issues",
                "source": "https://github.com/FakerPHP/Faker/tree/v1.23.1"
            },
            "time": "2024-01-02T13:46:09+00:00"
        },
        {
            "name": "filp/whoops",
            "version": "2.15.4",
            "source": {
                "type": "git",
                "url": "https://github.com/filp/whoops.git",
                "reference": "a139776fa3f5985a50b509f2a02ff0f709d2a546"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/filp/whoops/zipball/a139776fa3f5985a50b509f2a02ff0f709d2a546",
                "reference": "a139776fa3f5985a50b509f2a02ff0f709d2a546",
                "shasum": ""
            },
            "require": {
                "php": "^5.5.9 || ^7.0 || ^8.0",
                "psr/log": "^1.0.1 || ^2.0 || ^3.0"
            },
            "require-dev": {
                "mockery/mockery": "^0.9 || ^1.0",
                "phpunit/phpunit": "^4.8.36 || ^5.7.27 || ^6.5.14 || ^7.5.20 || ^8.5.8 || ^9.3.3",
                "symfony/var-dumper": "^2.6 || ^3.0 || ^4.0 || ^5.0"
            },
            "suggest": {
                "symfony/var-dumper": "Pretty print complex values better with var-dumper available",
                "whoops/soap": "Formats errors as SOAP responses"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Whoops\\": "src/Whoops/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Filipe Dobreira",
                    "homepage": "https://github.com/filp",
                    "role": "Developer"
                }
            ],
            "description": "php error handling for cool kids",
            "homepage": "https://filp.github.io/whoops/",
            "keywords": [
                "error",
                "exception",
                "handling",
                "library",
                "throwable",
                "whoops"
            ],
            "support": {
                "issues": "https://github.com/filp/whoops/issues",
                "source": "https://github.com/filp/whoops/tree/2.15.4"
            },
            "funding": [
                {
                    "url": "https://github.com/denis-sokolov",
                    "type": "github"
                }
            ],
            "time": "2023-11-03T12:00:00+00:00"
        },
        {
            "name": "hamcrest/hamcrest-php",
            "version": "v2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/hamcrest/hamcrest-php.git",
                "reference": "8c3d0a3f6af734494ad8f6fbbee0ba92422859f3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/hamcrest/hamcrest-php/zipball/8c3d0a3f6af734494ad8f6fbbee0ba92422859f3",
                "reference": "8c3d0a3f6af734494ad8f6fbbee0ba92422859f3",
                "shasum": ""
            },
            "require": {
                "php": "^5.3|^7.0|^8.0"
            },
            "replace": {
                "cordoval/hamcrest-php": "*",
                "davedevelopment/hamcrest-php": "*",
                "kodova/hamcrest-php": "*"
            },
            "require-dev": {
                "phpunit/php-file-iterator": "^1.4 || ^2.0",
                "phpunit/phpunit": "^4.8.36 || ^5.7 || ^6.5 || ^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "hamcrest"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "description": "This is the PHP port of Hamcrest Matchers",
            "keywords": [
                "test"
            ],
            "support": {
                "issues": "https://github.com/hamcrest/hamcrest-php/issues",
                "source": "https://github.com/hamcrest/hamcrest-php/tree/v2.0.1"
            },
            "time": "2020-07-09T08:09:16+00:00"
        },
        {
            "name": "laravel/breeze",
            "version": "v2.0.5",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/breeze.git",
                "reference": "4b40708d13aab743a47251e52cc73989f68353bd"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/breeze/zipball/4b40708d13aab743a47251e52cc73989f68353bd",
                "reference": "4b40708d13aab743a47251e52cc73989f68353bd",
                "shasum": ""
            },
            "require": {
                "illuminate/console": "^11.0",
                "illuminate/filesystem": "^11.0",
                "illuminate/support": "^11.0",
                "illuminate/validation": "^11.0",
                "php": "^8.2.0",
                "symfony/console": "^7.0"
            },
            "require-dev": {
                "orchestra/testbench": "^9.0",
                "phpstan/phpstan": "^1.10"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Laravel\\Breeze\\BreezeServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Breeze\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "Minimal Laravel authentication scaffolding with Blade and Tailwind.",
            "keywords": [
                "auth",
                "laravel"
            ],
            "support": {
                "issues": "https://github.com/laravel/breeze/issues",
                "source": "https://github.com/laravel/breeze"
            },
            "time": "2024-05-28T15:37:59+00:00"
        },
        {
            "name": "laravel/pint",
            "version": "v1.16.0",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/pint.git",
                "reference": "1b3a3dc5bc6a81ff52828ba7277621f1d49d6d98"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/pint/zipball/1b3a3dc5bc6a81ff52828ba7277621f1d49d6d98",
                "reference": "1b3a3dc5bc6a81ff52828ba7277621f1d49d6d98",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "ext-mbstring": "*",
                "ext-tokenizer": "*",
                "ext-xml": "*",
                "php": "^8.1.0"
            },
            "require-dev": {
                "friendsofphp/php-cs-fixer": "^3.57.1",
                "illuminate/view": "^10.48.10",
                "larastan/larastan": "^2.9.6",
                "laravel-zero/framework": "^10.4.0",
                "mockery/mockery": "^1.6.12",
                "nunomaduro/termwind": "^1.15.1",
                "pestphp/pest": "^2.34.7"
            },
            "bin": [
                "builds/pint"
            ],
            "type": "project",
            "autoload": {
                "psr-4": {
                    "App\\": "app/",
                    "Database\\Seeders\\": "database/seeders/",
                    "Database\\Factories\\": "database/factories/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nuno Maduro",
                    "email": "enunomaduro@gmail.com"
                }
            ],
            "description": "An opinionated code formatter for PHP.",
            "homepage": "https://laravel.com",
            "keywords": [
                "format",
                "formatter",
                "lint",
                "linter",
                "php"
            ],
            "support": {
                "issues": "https://github.com/laravel/pint/issues",
                "source": "https://github.com/laravel/pint"
            },
            "time": "2024-05-21T18:08:25+00:00"
        },
        {
            "name": "laravel/sail",
            "version": "v1.29.2",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/sail.git",
                "reference": "a8e4e749735ba2f091856eafeb3f99db8cd6b621"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/sail/zipball/a8e4e749735ba2f091856eafeb3f99db8cd6b621",
                "reference": "a8e4e749735ba2f091856eafeb3f99db8cd6b621",
                "shasum": ""
            },
            "require": {
                "illuminate/console": "^9.52.16|^10.0|^11.0",
                "illuminate/contracts": "^9.52.16|^10.0|^11.0",
                "illuminate/support": "^9.52.16|^10.0|^11.0",
                "php": "^8.0",
                "symfony/console": "^6.0|^7.0",
                "symfony/yaml": "^6.0|^7.0"
            },
            "require-dev": {
                "orchestra/testbench": "^7.0|^8.0|^9.0",
                "phpstan/phpstan": "^1.10"
            },
            "bin": [
                "bin/sail"
            ],
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Laravel\\Sail\\SailServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Sail\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "Docker files for running a basic Laravel application.",
            "keywords": [
                "docker",
                "laravel"
            ],
            "support": {
                "issues": "https://github.com/laravel/sail/issues",
                "source": "https://github.com/laravel/sail"
            },
            "time": "2024-05-16T21:39:11+00:00"
        },
        {
            "name": "maximebf/debugbar",
            "version": "v1.22.3",
            "source": {
                "type": "git",
                "url": "https://github.com/maximebf/php-debugbar.git",
                "reference": "7aa9a27a0b1158ed5ad4e7175e8d3aee9a818b96"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/maximebf/php-debugbar/zipball/7aa9a27a0b1158ed5ad4e7175e8d3aee9a818b96",
                "reference": "7aa9a27a0b1158ed5ad4e7175e8d3aee9a818b96",
                "shasum": ""
            },
            "require": {
                "php": "^7.2|^8",
                "psr/log": "^1|^2|^3",
                "symfony/var-dumper": "^4|^5|^6|^7"
            },
            "require-dev": {
                "dbrekelmans/bdi": "^1",
                "phpunit/phpunit": "^8|^9",
                "symfony/panther": "^1|^2.1",
                "twig/twig": "^1.38|^2.7|^3.0"
            },
            "suggest": {
                "kriswallsmith/assetic": "The best way to manage assets",
                "monolog/monolog": "Log using Monolog",
                "predis/predis": "Redis storage"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.22-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "DebugBar\\": "src/DebugBar/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Maxime Bouroumeau-Fuseau",
                    "email": "maxime.bouroumeau@gmail.com",
                    "homepage": "http://maximebf.com"
                },
                {
                    "name": "Barry vd. Heuvel",
                    "email": "barryvdh@gmail.com"
                }
            ],
            "description": "Debug bar in the browser for php application",
            "homepage": "https://github.com/maximebf/php-debugbar",
            "keywords": [
                "debug",
                "debugbar"
            ],
            "support": {
                "issues": "https://github.com/maximebf/php-debugbar/issues",
                "source": "https://github.com/maximebf/php-debugbar/tree/v1.22.3"
            },
            "time": "2024-04-03T19:39:26+00:00"
        },
        {
            "name": "mockery/mockery",
            "version": "1.6.12",
            "source": {
                "type": "git",
                "url": "https://github.com/mockery/mockery.git",
                "reference": "1f4efdd7d3beafe9807b08156dfcb176d18f1699"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/mockery/mockery/zipball/1f4efdd7d3beafe9807b08156dfcb176d18f1699",
                "reference": "1f4efdd7d3beafe9807b08156dfcb176d18f1699",
                "shasum": ""
            },
            "require": {
                "hamcrest/hamcrest-php": "^2.0.1",
                "lib-pcre": ">=7.0",
                "php": ">=7.3"
            },
            "conflict": {
                "phpunit/phpunit": "<8.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^8.5 || ^9.6.17",
                "symplify/easy-coding-standard": "^12.1.14"
            },
            "type": "library",
            "autoload": {
                "files": [
                    "library/helpers.php",
                    "library/Mockery.php"
                ],
                "psr-4": {
                    "Mockery\\": "library/Mockery"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Pádraic Brady",
                    "email": "padraic.brady@gmail.com",
                    "homepage": "https://github.com/padraic",
                    "role": "Author"
                },
                {
                    "name": "Dave Marshall",
                    "email": "dave.marshall@atstsolutions.co.uk",
                    "homepage": "https://davedevelopment.co.uk",
                    "role": "Developer"
                },
                {
                    "name": "Nathanael Esayeas",
                    "email": "nathanael.esayeas@protonmail.com",
                    "homepage": "https://github.com/ghostwriter",
                    "role": "Lead Developer"
                }
            ],
            "description": "Mockery is a simple yet flexible PHP mock object framework",
            "homepage": "https://github.com/mockery/mockery",
            "keywords": [
                "BDD",
                "TDD",
                "library",
                "mock",
                "mock objects",
                "mockery",
                "stub",
                "test",
                "test double",
                "testing"
            ],
            "support": {
                "docs": "https://docs.mockery.io/",
                "issues": "https://github.com/mockery/mockery/issues",
                "rss": "https://github.com/mockery/mockery/releases.atom",
                "security": "https://github.com/mockery/mockery/security/advisories",
                "source": "https://github.com/mockery/mockery"
            },
            "time": "2024-05-16T03:13:13+00:00"
        },
        {
            "name": "myclabs/deep-copy",
            "version": "1.11.1",
            "source": {
                "type": "git",
                "url": "https://github.com/myclabs/DeepCopy.git",
                "reference": "7284c22080590fb39f2ffa3e9057f10a4ddd0e0c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/myclabs/DeepCopy/zipball/7284c22080590fb39f2ffa3e9057f10a4ddd0e0c",
                "reference": "7284c22080590fb39f2ffa3e9057f10a4ddd0e0c",
                "shasum": ""
            },
            "require": {
                "php": "^7.1 || ^8.0"
            },
            "conflict": {
                "doctrine/collections": "<1.6.8",
                "doctrine/common": "<2.13.3 || >=3,<3.2.2"
            },
            "require-dev": {
                "doctrine/collections": "^1.6.8",
                "doctrine/common": "^2.13.3 || ^3.2.2",
                "phpunit/phpunit": "^7.5.20 || ^8.5.23 || ^9.5.13"
            },
            "type": "library",
            "autoload": {
                "files": [
                    "src/DeepCopy/deep_copy.php"
                ],
                "psr-4": {
                    "DeepCopy\\": "src/DeepCopy/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Create deep copies (clones) of your objects",
            "keywords": [
                "clone",
                "copy",
                "duplicate",
                "object",
                "object graph"
            ],
            "support": {
                "issues": "https://github.com/myclabs/DeepCopy/issues",
                "source": "https://github.com/myclabs/DeepCopy/tree/1.11.1"
            },
            "funding": [
                {
                    "url": "https://tidelift.com/funding/github/packagist/myclabs/deep-copy",
                    "type": "tidelift"
                }
            ],
            "time": "2023-03-08T13:26:56+00:00"
        },
        {
            "name": "nunomaduro/collision",
            "version": "v8.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/nunomaduro/collision.git",
                "reference": "13e5d538b95a744d85f447a321ce10adb28e9af9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nunomaduro/collision/zipball/13e5d538b95a744d85f447a321ce10adb28e9af9",
                "reference": "13e5d538b95a744d85f447a321ce10adb28e9af9",
                "shasum": ""
            },
            "require": {
                "filp/whoops": "^2.15.4",
                "nunomaduro/termwind": "^2.0.1",
                "php": "^8.2.0",
                "symfony/console": "^7.0.4"
            },
            "conflict": {
                "laravel/framework": "<11.0.0 || >=12.0.0",
                "phpunit/phpunit": "<10.5.1 || >=12.0.0"
            },
            "require-dev": {
                "larastan/larastan": "^2.9.2",
                "laravel/framework": "^11.0.0",
                "laravel/pint": "^1.14.0",
                "laravel/sail": "^1.28.2",
                "laravel/sanctum": "^4.0.0",
                "laravel/tinker": "^2.9.0",
                "orchestra/testbench-core": "^9.0.0",
                "pestphp/pest": "^2.34.1 || ^3.0.0",
                "sebastian/environment": "^6.0.1 || ^7.0.0"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider"
                    ]
                },
                "branch-alias": {
                    "dev-8.x": "8.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "./src/Adapters/Phpunit/Autoload.php"
                ],
                "psr-4": {
                    "NunoMaduro\\Collision\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nuno Maduro",
                    "email": "enunomaduro@gmail.com"
                }
            ],
            "description": "Cli error handling for console/command-line PHP applications.",
            "keywords": [
                "artisan",
                "cli",
                "command-line",
                "console",
                "error",
                "handling",
                "laravel",
                "laravel-zero",
                "php",
                "symfony"
            ],
            "support": {
                "issues": "https://github.com/nunomaduro/collision/issues",
                "source": "https://github.com/nunomaduro/collision"
            },
            "funding": [
                {
                    "url": "https://www.paypal.com/paypalme/enunomaduro",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/nunomaduro",
                    "type": "github"
                },
                {
                    "url": "https://www.patreon.com/nunomaduro",
                    "type": "patreon"
                }
            ],
            "time": "2024-03-06T16:20:09+00:00"
        },
        {
            "name": "phar-io/manifest",
            "version": "2.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/phar-io/manifest.git",
                "reference": "54750ef60c58e43759730615a392c31c80e23176"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phar-io/manifest/zipball/54750ef60c58e43759730615a392c31c80e23176",
                "reference": "54750ef60c58e43759730615a392c31c80e23176",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-libxml": "*",
                "ext-phar": "*",
                "ext-xmlwriter": "*",
                "phar-io/version": "^3.0.1",
                "php": "^7.2 || ^8.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Arne Blankerts",
                    "email": "arne@blankerts.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Heuer",
                    "email": "sebastian@phpeople.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "Developer"
                }
            ],
            "description": "Component for reading phar.io manifest information from a PHP Archive (PHAR)",
            "support": {
                "issues": "https://github.com/phar-io/manifest/issues",
                "source": "https://github.com/phar-io/manifest/tree/2.0.4"
            },
            "funding": [
                {
                    "url": "https://github.com/theseer",
                    "type": "github"
                }
            ],
            "time": "2024-03-03T12:33:53+00:00"
        },
        {
            "name": "phar-io/version",
            "version": "3.2.1",
            "source": {
                "type": "git",
                "url": "https://github.com/phar-io/version.git",
                "reference": "4f7fd7836c6f332bb2933569e566a0d6c4cbed74"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phar-io/version/zipball/4f7fd7836c6f332bb2933569e566a0d6c4cbed74",
                "reference": "4f7fd7836c6f332bb2933569e566a0d6c4cbed74",
                "shasum": ""
            },
            "require": {
                "php": "^7.2 || ^8.0"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Arne Blankerts",
                    "email": "arne@blankerts.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Heuer",
                    "email": "sebastian@phpeople.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "Developer"
                }
            ],
            "description": "Library for handling version information and constraints",
            "support": {
                "issues": "https://github.com/phar-io/version/issues",
                "source": "https://github.com/phar-io/version/tree/3.2.1"
            },
            "time": "2022-02-21T01:04:05+00:00"
        },
        {
            "name": "phpunit/php-code-coverage",
            "version": "10.1.14",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-code-coverage.git",
                "reference": "e3f51450ebffe8e0efdf7346ae966a656f7d5e5b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/e3f51450ebffe8e0efdf7346ae966a656f7d5e5b",
                "reference": "e3f51450ebffe8e0efdf7346ae966a656f7d5e5b",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-libxml": "*",
                "ext-xmlwriter": "*",
                "nikic/php-parser": "^4.18 || ^5.0",
                "php": ">=8.1",
                "phpunit/php-file-iterator": "^4.0",
                "phpunit/php-text-template": "^3.0",
                "sebastian/code-unit-reverse-lookup": "^3.0",
                "sebastian/complexity": "^3.0",
                "sebastian/environment": "^6.0",
                "sebastian/lines-of-code": "^2.0",
                "sebastian/version": "^4.0",
                "theseer/tokenizer": "^1.2.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.1"
            },
            "suggest": {
                "ext-pcov": "PHP extension that provides line coverage",
                "ext-xdebug": "PHP extension that provides line coverage as well as branch and path coverage"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "10.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library that provides collection, processing, and rendering functionality for PHP code coverage information.",
            "homepage": "https://github.com/sebastianbergmann/php-code-coverage",
            "keywords": [
                "coverage",
                "testing",
                "xunit"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/php-code-coverage/issues",
                "security": "https://github.com/sebastianbergmann/php-code-coverage/security/policy",
                "source": "https://github.com/sebastianbergmann/php-code-coverage/tree/10.1.14"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2024-03-12T15:33:41+00:00"
        },
        {
            "name": "phpunit/php-file-iterator",
            "version": "4.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-file-iterator.git",
                "reference": "a95037b6d9e608ba092da1b23931e537cadc3c3c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/a95037b6d9e608ba092da1b23931e537cadc3c3c",
                "reference": "a95037b6d9e608ba092da1b23931e537cadc3c3c",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "4.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "FilterIterator implementation that filters files based on a list of suffixes.",
            "homepage": "https://github.com/sebastianbergmann/php-file-iterator/",
            "keywords": [
                "filesystem",
                "iterator"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/php-file-iterator/issues",
                "security": "https://github.com/sebastianbergmann/php-file-iterator/security/policy",
                "source": "https://github.com/sebastianbergmann/php-file-iterator/tree/4.1.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-08-31T06:24:48+00:00"
        },
        {
            "name": "phpunit/php-invoker",
            "version": "4.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-invoker.git",
                "reference": "f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-invoker/zipball/f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7",
                "reference": "f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "ext-pcntl": "*",
                "phpunit/phpunit": "^10.0"
            },
            "suggest": {
                "ext-pcntl": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "4.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Invoke callables with a timeout",
            "homepage": "https://github.com/sebastianbergmann/php-invoker/",
            "keywords": [
                "process"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/php-invoker/issues",
                "source": "https://github.com/sebastianbergmann/php-invoker/tree/4.0.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-02-03T06:56:09+00:00"
        },
        {
            "name": "phpunit/php-text-template",
            "version": "3.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-text-template.git",
                "reference": "0c7b06ff49e3d5072f057eb1fa59258bf287a748"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/0c7b06ff49e3d5072f057eb1fa59258bf287a748",
                "reference": "0c7b06ff49e3d5072f057eb1fa59258bf287a748",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Simple template engine.",
            "homepage": "https://github.com/sebastianbergmann/php-text-template/",
            "keywords": [
                "template"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/php-text-template/issues",
                "security": "https://github.com/sebastianbergmann/php-text-template/security/policy",
                "source": "https://github.com/sebastianbergmann/php-text-template/tree/3.0.1"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-08-31T14:07:24+00:00"
        },
        {
            "name": "phpunit/php-timer",
            "version": "6.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-timer.git",
                "reference": "e2a2d67966e740530f4a3343fe2e030ffdc1161d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-timer/zipball/e2a2d67966e740530f4a3343fe2e030ffdc1161d",
                "reference": "e2a2d67966e740530f4a3343fe2e030ffdc1161d",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "6.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Utility class for timing",
            "homepage": "https://github.com/sebastianbergmann/php-timer/",
            "keywords": [
                "timer"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/php-timer/issues",
                "source": "https://github.com/sebastianbergmann/php-timer/tree/6.0.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-02-03T06:57:52+00:00"
        },
        {
            "name": "phpunit/phpunit",
            "version": "10.5.20",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/phpunit.git",
                "reference": "547d314dc24ec1e177720d45c6263fb226cc2ae3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/phpunit/zipball/547d314dc24ec1e177720d45c6263fb226cc2ae3",
                "reference": "547d314dc24ec1e177720d45c6263fb226cc2ae3",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-json": "*",
                "ext-libxml": "*",
                "ext-mbstring": "*",
                "ext-xml": "*",
                "ext-xmlwriter": "*",
                "myclabs/deep-copy": "^1.10.1",
                "phar-io/manifest": "^2.0.3",
                "phar-io/version": "^3.0.2",
                "php": ">=8.1",
                "phpunit/php-code-coverage": "^10.1.5",
                "phpunit/php-file-iterator": "^4.0",
                "phpunit/php-invoker": "^4.0",
                "phpunit/php-text-template": "^3.0",
                "phpunit/php-timer": "^6.0",
                "sebastian/cli-parser": "^2.0",
                "sebastian/code-unit": "^2.0",
                "sebastian/comparator": "^5.0",
                "sebastian/diff": "^5.0",
                "sebastian/environment": "^6.0",
                "sebastian/exporter": "^5.1",
                "sebastian/global-state": "^6.0.1",
                "sebastian/object-enumerator": "^5.0",
                "sebastian/recursion-context": "^5.0",
                "sebastian/type": "^4.0",
                "sebastian/version": "^4.0"
            },
            "suggest": {
                "ext-soap": "To be able to generate mocks based on WSDL files"
            },
            "bin": [
                "phpunit"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "10.5-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/Framework/Assert/Functions.php"
                ],
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "The PHP Unit Testing framework.",
            "homepage": "https://phpunit.de/",
            "keywords": [
                "phpunit",
                "testing",
                "xunit"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/phpunit/issues",
                "security": "https://github.com/sebastianbergmann/phpunit/security/policy",
                "source": "https://github.com/sebastianbergmann/phpunit/tree/10.5.20"
            },
            "funding": [
                {
                    "url": "https://phpunit.de/sponsors.html",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/phpunit/phpunit",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-24T06:32:35+00:00"
        },
        {
            "name": "sebastian/cli-parser",
            "version": "2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/cli-parser.git",
                "reference": "c34583b87e7b7a8055bf6c450c2c77ce32a24084"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/cli-parser/zipball/c34583b87e7b7a8055bf6c450c2c77ce32a24084",
                "reference": "c34583b87e7b7a8055bf6c450c2c77ce32a24084",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "2.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library for parsing CLI options",
            "homepage": "https://github.com/sebastianbergmann/cli-parser",
            "support": {
                "issues": "https://github.com/sebastianbergmann/cli-parser/issues",
                "security": "https://github.com/sebastianbergmann/cli-parser/security/policy",
                "source": "https://github.com/sebastianbergmann/cli-parser/tree/2.0.1"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2024-03-02T07:12:49+00:00"
        },
        {
            "name": "sebastian/code-unit",
            "version": "2.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/code-unit.git",
                "reference": "a81fee9eef0b7a76af11d121767abc44c104e503"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/code-unit/zipball/a81fee9eef0b7a76af11d121767abc44c104e503",
                "reference": "a81fee9eef0b7a76af11d121767abc44c104e503",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "2.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Collection of value objects that represent the PHP code units",
            "homepage": "https://github.com/sebastianbergmann/code-unit",
            "support": {
                "issues": "https://github.com/sebastianbergmann/code-unit/issues",
                "source": "https://github.com/sebastianbergmann/code-unit/tree/2.0.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-02-03T06:58:43+00:00"
        },
        {
            "name": "sebastian/code-unit-reverse-lookup",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/code-unit-reverse-lookup.git",
                "reference": "5e3a687f7d8ae33fb362c5c0743794bbb2420a1d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/code-unit-reverse-lookup/zipball/5e3a687f7d8ae33fb362c5c0743794bbb2420a1d",
                "reference": "5e3a687f7d8ae33fb362c5c0743794bbb2420a1d",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Looks up which function or method a line of code belongs to",
            "homepage": "https://github.com/sebastianbergmann/code-unit-reverse-lookup/",
            "support": {
                "issues": "https://github.com/sebastianbergmann/code-unit-reverse-lookup/issues",
                "source": "https://github.com/sebastianbergmann/code-unit-reverse-lookup/tree/3.0.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-02-03T06:59:15+00:00"
        },
        {
            "name": "sebastian/comparator",
            "version": "5.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/comparator.git",
                "reference": "2db5010a484d53ebf536087a70b4a5423c102372"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/comparator/zipball/2db5010a484d53ebf536087a70b4a5423c102372",
                "reference": "2db5010a484d53ebf536087a70b4a5423c102372",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-mbstring": "*",
                "php": ">=8.1",
                "sebastian/diff": "^5.0",
                "sebastian/exporter": "^5.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "5.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Volker Dusch",
                    "email": "github@wallbash.com"
                },
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@2bepublished.at"
                }
            ],
            "description": "Provides the functionality to compare PHP values for equality",
            "homepage": "https://github.com/sebastianbergmann/comparator",
            "keywords": [
                "comparator",
                "compare",
                "equality"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/comparator/issues",
                "security": "https://github.com/sebastianbergmann/comparator/security/policy",
                "source": "https://github.com/sebastianbergmann/comparator/tree/5.0.1"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-08-14T13:18:12+00:00"
        },
        {
            "name": "sebastian/complexity",
            "version": "3.2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/complexity.git",
                "reference": "68ff824baeae169ec9f2137158ee529584553799"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/complexity/zipball/68ff824baeae169ec9f2137158ee529584553799",
                "reference": "68ff824baeae169ec9f2137158ee529584553799",
                "shasum": ""
            },
            "require": {
                "nikic/php-parser": "^4.18 || ^5.0",
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.2-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library for calculating the complexity of PHP code units",
            "homepage": "https://github.com/sebastianbergmann/complexity",
            "support": {
                "issues": "https://github.com/sebastianbergmann/complexity/issues",
                "security": "https://github.com/sebastianbergmann/complexity/security/policy",
                "source": "https://github.com/sebastianbergmann/complexity/tree/3.2.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-12-21T08:37:17+00:00"
        },
        {
            "name": "sebastian/diff",
            "version": "5.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/diff.git",
                "reference": "c41e007b4b62af48218231d6c2275e4c9b975b2e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/diff/zipball/c41e007b4b62af48218231d6c2275e4c9b975b2e",
                "reference": "c41e007b4b62af48218231d6c2275e4c9b975b2e",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0",
                "symfony/process": "^6.4"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "5.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Kore Nordmann",
                    "email": "mail@kore-nordmann.de"
                }
            ],
            "description": "Diff implementation",
            "homepage": "https://github.com/sebastianbergmann/diff",
            "keywords": [
                "diff",
                "udiff",
                "unidiff",
                "unified diff"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/diff/issues",
                "security": "https://github.com/sebastianbergmann/diff/security/policy",
                "source": "https://github.com/sebastianbergmann/diff/tree/5.1.1"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2024-03-02T07:15:17+00:00"
        },
        {
            "name": "sebastian/environment",
            "version": "6.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/environment.git",
                "reference": "8074dbcd93529b357029f5cc5058fd3e43666984"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/environment/zipball/8074dbcd93529b357029f5cc5058fd3e43666984",
                "reference": "8074dbcd93529b357029f5cc5058fd3e43666984",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "suggest": {
                "ext-posix": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "6.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Provides functionality to handle HHVM/PHP environments",
            "homepage": "https://github.com/sebastianbergmann/environment",
            "keywords": [
                "Xdebug",
                "environment",
                "hhvm"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/environment/issues",
                "security": "https://github.com/sebastianbergmann/environment/security/policy",
                "source": "https://github.com/sebastianbergmann/environment/tree/6.1.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2024-03-23T08:47:14+00:00"
        },
        {
            "name": "sebastian/exporter",
            "version": "5.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/exporter.git",
                "reference": "955288482d97c19a372d3f31006ab3f37da47adf"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/exporter/zipball/955288482d97c19a372d3f31006ab3f37da47adf",
                "reference": "955288482d97c19a372d3f31006ab3f37da47adf",
                "shasum": ""
            },
            "require": {
                "ext-mbstring": "*",
                "php": ">=8.1",
                "sebastian/recursion-context": "^5.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "5.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Volker Dusch",
                    "email": "github@wallbash.com"
                },
                {
                    "name": "Adam Harvey",
                    "email": "aharvey@php.net"
                },
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@gmail.com"
                }
            ],
            "description": "Provides the functionality to export PHP variables for visualization",
            "homepage": "https://www.github.com/sebastianbergmann/exporter",
            "keywords": [
                "export",
                "exporter"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/exporter/issues",
                "security": "https://github.com/sebastianbergmann/exporter/security/policy",
                "source": "https://github.com/sebastianbergmann/exporter/tree/5.1.2"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2024-03-02T07:17:12+00:00"
        },
        {
            "name": "sebastian/global-state",
            "version": "6.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/global-state.git",
                "reference": "987bafff24ecc4c9ac418cab1145b96dd6e9cbd9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/global-state/zipball/987bafff24ecc4c9ac418cab1145b96dd6e9cbd9",
                "reference": "987bafff24ecc4c9ac418cab1145b96dd6e9cbd9",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1",
                "sebastian/object-reflector": "^3.0",
                "sebastian/recursion-context": "^5.0"
            },
            "require-dev": {
                "ext-dom": "*",
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "6.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Snapshotting of global state",
            "homepage": "https://www.github.com/sebastianbergmann/global-state",
            "keywords": [
                "global state"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/global-state/issues",
                "security": "https://github.com/sebastianbergmann/global-state/security/policy",
                "source": "https://github.com/sebastianbergmann/global-state/tree/6.0.2"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2024-03-02T07:19:19+00:00"
        },
        {
            "name": "sebastian/lines-of-code",
            "version": "2.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/lines-of-code.git",
                "reference": "856e7f6a75a84e339195d48c556f23be2ebf75d0"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/lines-of-code/zipball/856e7f6a75a84e339195d48c556f23be2ebf75d0",
                "reference": "856e7f6a75a84e339195d48c556f23be2ebf75d0",
                "shasum": ""
            },
            "require": {
                "nikic/php-parser": "^4.18 || ^5.0",
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "2.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library for counting the lines of code in PHP source code",
            "homepage": "https://github.com/sebastianbergmann/lines-of-code",
            "support": {
                "issues": "https://github.com/sebastianbergmann/lines-of-code/issues",
                "security": "https://github.com/sebastianbergmann/lines-of-code/security/policy",
                "source": "https://github.com/sebastianbergmann/lines-of-code/tree/2.0.2"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-12-21T08:38:20+00:00"
        },
        {
            "name": "sebastian/object-enumerator",
            "version": "5.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/object-enumerator.git",
                "reference": "202d0e344a580d7f7d04b3fafce6933e59dae906"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/object-enumerator/zipball/202d0e344a580d7f7d04b3fafce6933e59dae906",
                "reference": "202d0e344a580d7f7d04b3fafce6933e59dae906",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1",
                "sebastian/object-reflector": "^3.0",
                "sebastian/recursion-context": "^5.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "5.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Traverses array structures and object graphs to enumerate all referenced objects",
            "homepage": "https://github.com/sebastianbergmann/object-enumerator/",
            "support": {
                "issues": "https://github.com/sebastianbergmann/object-enumerator/issues",
                "source": "https://github.com/sebastianbergmann/object-enumerator/tree/5.0.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-02-03T07:08:32+00:00"
        },
        {
            "name": "sebastian/object-reflector",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/object-reflector.git",
                "reference": "24ed13d98130f0e7122df55d06c5c4942a577957"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/object-reflector/zipball/24ed13d98130f0e7122df55d06c5c4942a577957",
                "reference": "24ed13d98130f0e7122df55d06c5c4942a577957",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Allows reflection of object attributes, including inherited and non-public ones",
            "homepage": "https://github.com/sebastianbergmann/object-reflector/",
            "support": {
                "issues": "https://github.com/sebastianbergmann/object-reflector/issues",
                "source": "https://github.com/sebastianbergmann/object-reflector/tree/3.0.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-02-03T07:06:18+00:00"
        },
        {
            "name": "sebastian/recursion-context",
            "version": "5.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/recursion-context.git",
                "reference": "05909fb5bc7df4c52992396d0116aed689f93712"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/recursion-context/zipball/05909fb5bc7df4c52992396d0116aed689f93712",
                "reference": "05909fb5bc7df4c52992396d0116aed689f93712",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "5.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Adam Harvey",
                    "email": "aharvey@php.net"
                }
            ],
            "description": "Provides functionality to recursively process PHP variables",
            "homepage": "https://github.com/sebastianbergmann/recursion-context",
            "support": {
                "issues": "https://github.com/sebastianbergmann/recursion-context/issues",
                "source": "https://github.com/sebastianbergmann/recursion-context/tree/5.0.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-02-03T07:05:40+00:00"
        },
        {
            "name": "sebastian/type",
            "version": "4.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/type.git",
                "reference": "462699a16464c3944eefc02ebdd77882bd3925bf"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/type/zipball/462699a16464c3944eefc02ebdd77882bd3925bf",
                "reference": "462699a16464c3944eefc02ebdd77882bd3925bf",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^10.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "4.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Collection of value objects that represent the types of the PHP type system",
            "homepage": "https://github.com/sebastianbergmann/type",
            "support": {
                "issues": "https://github.com/sebastianbergmann/type/issues",
                "source": "https://github.com/sebastianbergmann/type/tree/4.0.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-02-03T07:10:45+00:00"
        },
        {
            "name": "sebastian/version",
            "version": "4.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/version.git",
                "reference": "c51fa83a5d8f43f1402e3f32a005e6262244ef17"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/version/zipball/c51fa83a5d8f43f1402e3f32a005e6262244ef17",
                "reference": "c51fa83a5d8f43f1402e3f32a005e6262244ef17",
                "shasum": ""
            },
            "require": {
                "php": ">=8.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "4.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library that helps with managing the version number of Git-hosted PHP projects",
            "homepage": "https://github.com/sebastianbergmann/version",
            "support": {
                "issues": "https://github.com/sebastianbergmann/version/issues",
                "source": "https://github.com/sebastianbergmann/version/tree/4.0.1"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2023-02-07T11:34:05+00:00"
        },
        {
            "name": "spatie/backtrace",
            "version": "1.6.1",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/backtrace.git",
                "reference": "8373b9d51638292e3bfd736a9c19a654111b4a23"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/backtrace/zipball/8373b9d51638292e3bfd736a9c19a654111b4a23",
                "reference": "8373b9d51638292e3bfd736a9c19a654111b4a23",
                "shasum": ""
            },
            "require": {
                "php": "^7.3|^8.0"
            },
            "require-dev": {
                "ext-json": "*",
                "laravel/serializable-closure": "^1.3",
                "phpunit/phpunit": "^9.3",
                "spatie/phpunit-snapshot-assertions": "^4.2",
                "symfony/var-dumper": "^5.1"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Spatie\\Backtrace\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van de Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "A better backtrace",
            "homepage": "https://github.com/spatie/backtrace",
            "keywords": [
                "Backtrace",
                "spatie"
            ],
            "support": {
                "source": "https://github.com/spatie/backtrace/tree/1.6.1"
            },
            "funding": [
                {
                    "url": "https://github.com/sponsors/spatie",
                    "type": "github"
                },
                {
                    "url": "https://spatie.be/open-source/support-us",
                    "type": "other"
                }
            ],
            "time": "2024-04-24T13:22:11+00:00"
        },
        {
            "name": "spatie/flare-client-php",
            "version": "1.6.0",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/flare-client-php.git",
                "reference": "220a7c8745e9fa427d54099f47147c4b97fe6462"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/flare-client-php/zipball/220a7c8745e9fa427d54099f47147c4b97fe6462",
                "reference": "220a7c8745e9fa427d54099f47147c4b97fe6462",
                "shasum": ""
            },
            "require": {
                "illuminate/pipeline": "^8.0|^9.0|^10.0|^11.0",
                "php": "^8.0",
                "spatie/backtrace": "^1.5.2",
                "symfony/http-foundation": "^5.2|^6.0|^7.0",
                "symfony/mime": "^5.2|^6.0|^7.0",
                "symfony/process": "^5.2|^6.0|^7.0",
                "symfony/var-dumper": "^5.2|^6.0|^7.0"
            },
            "require-dev": {
                "dms/phpunit-arraysubset-asserts": "^0.5.0",
                "pestphp/pest": "^1.20|^2.0",
                "phpstan/extension-installer": "^1.1",
                "phpstan/phpstan-deprecation-rules": "^1.0",
                "phpstan/phpstan-phpunit": "^1.0",
                "spatie/phpunit-snapshot-assertions": "^4.0|^5.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.3.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/helpers.php"
                ],
                "psr-4": {
                    "Spatie\\FlareClient\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Send PHP errors to Flare",
            "homepage": "https://github.com/spatie/flare-client-php",
            "keywords": [
                "exception",
                "flare",
                "reporting",
                "spatie"
            ],
            "support": {
                "issues": "https://github.com/spatie/flare-client-php/issues",
                "source": "https://github.com/spatie/flare-client-php/tree/1.6.0"
            },
            "funding": [
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2024-05-22T09:45:39+00:00"
        },
        {
            "name": "spatie/ignition",
            "version": "1.14.2",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/ignition.git",
                "reference": "5e11c11f675bb5251f061491a493e04a1a571532"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/ignition/zipball/5e11c11f675bb5251f061491a493e04a1a571532",
                "reference": "5e11c11f675bb5251f061491a493e04a1a571532",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "ext-mbstring": "*",
                "php": "^8.0",
                "spatie/backtrace": "^1.5.3",
                "spatie/flare-client-php": "^1.4.0",
                "symfony/console": "^5.4|^6.0|^7.0",
                "symfony/var-dumper": "^5.4|^6.0|^7.0"
            },
            "require-dev": {
                "illuminate/cache": "^9.52|^10.0|^11.0",
                "mockery/mockery": "^1.4",
                "pestphp/pest": "^1.20|^2.0",
                "phpstan/extension-installer": "^1.1",
                "phpstan/phpstan-deprecation-rules": "^1.0",
                "phpstan/phpstan-phpunit": "^1.0",
                "psr/simple-cache-implementation": "*",
                "symfony/cache": "^5.4|^6.0|^7.0",
                "symfony/process": "^5.4|^6.0|^7.0",
                "vlucas/phpdotenv": "^5.5"
            },
            "suggest": {
                "openai-php/client": "Require get solutions from OpenAI",
                "simple-cache-implementation": "To cache solutions from OpenAI"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.5.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Spatie\\Ignition\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Spatie",
                    "email": "info@spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "A beautiful error page for PHP applications.",
            "homepage": "https://flareapp.io/ignition",
            "keywords": [
                "error",
                "flare",
                "laravel",
                "page"
            ],
            "support": {
                "docs": "https://flareapp.io/docs/ignition-for-laravel/introduction",
                "forum": "https://twitter.com/flareappio",
                "issues": "https://github.com/spatie/ignition/issues",
                "source": "https://github.com/spatie/ignition"
            },
            "funding": [
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2024-05-29T08:10:20+00:00"
        },
        {
            "name": "spatie/laravel-ignition",
            "version": "2.7.0",
            "source": {
                "type": "git",
                "url": "https://github.com/spatie/laravel-ignition.git",
                "reference": "f52124d50122611e8a40f628cef5c19ff6cc5b57"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/spatie/laravel-ignition/zipball/f52124d50122611e8a40f628cef5c19ff6cc5b57",
                "reference": "f52124d50122611e8a40f628cef5c19ff6cc5b57",
                "shasum": ""
            },
            "require": {
                "ext-curl": "*",
                "ext-json": "*",
                "ext-mbstring": "*",
                "illuminate/support": "^10.0|^11.0",
                "php": "^8.1",
                "spatie/flare-client-php": "^1.5",
                "spatie/ignition": "^1.14",
                "symfony/console": "^6.2.3|^7.0",
                "symfony/var-dumper": "^6.2.3|^7.0"
            },
            "require-dev": {
                "livewire/livewire": "^2.11|^3.3.5",
                "mockery/mockery": "^1.5.1",
                "openai-php/client": "^0.8.1",
                "orchestra/testbench": "8.22.3|^9.0",
                "pestphp/pest": "^2.34",
                "phpstan/extension-installer": "^1.3.1",
                "phpstan/phpstan-deprecation-rules": "^1.1.1",
                "phpstan/phpstan-phpunit": "^1.3.16",
                "vlucas/phpdotenv": "^5.5"
            },
            "suggest": {
                "openai-php/client": "Require get solutions from OpenAI",
                "psr/simple-cache-implementation": "Needed to cache solutions from OpenAI"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Spatie\\LaravelIgnition\\IgnitionServiceProvider"
                    ],
                    "aliases": {
                        "Flare": "Spatie\\LaravelIgnition\\Facades\\Flare"
                    }
                }
            },
            "autoload": {
                "files": [
                    "src/helpers.php"
                ],
                "psr-4": {
                    "Spatie\\LaravelIgnition\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Spatie",
                    "email": "info@spatie.be",
                    "role": "Developer"
                }
            ],
            "description": "A beautiful error page for Laravel applications.",
            "homepage": "https://flareapp.io/ignition",
            "keywords": [
                "error",
                "flare",
                "laravel",
                "page"
            ],
            "support": {
                "docs": "https://flareapp.io/docs/ignition-for-laravel/introduction",
                "forum": "https://twitter.com/flareappio",
                "issues": "https://github.com/spatie/laravel-ignition/issues",
                "source": "https://github.com/spatie/laravel-ignition"
            },
            "funding": [
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2024-05-02T13:42:49+00:00"
        },
        {
            "name": "symfony/yaml",
            "version": "v7.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/yaml.git",
                "reference": "0d3916ae69ea28b59d94b60c4f2b50f4e25adb5c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/yaml/zipball/0d3916ae69ea28b59d94b60c4f2b50f4e25adb5c",
                "reference": "0d3916ae69ea28b59d94b60c4f2b50f4e25adb5c",
                "shasum": ""
            },
            "require": {
                "php": ">=8.2",
                "symfony/polyfill-ctype": "^1.8"
            },
            "conflict": {
                "symfony/console": "<6.4"
            },
            "require-dev": {
                "symfony/console": "^6.4|^7.0"
            },
            "bin": [
                "Resources/bin/yaml-lint"
            ],
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Yaml\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Loads and dumps YAML files",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/yaml/tree/v7.0.7"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2024-04-28T11:44:19+00:00"
        },
        {
            "name": "theseer/tokenizer",
            "version": "1.2.3",
            "source": {
                "type": "git",
                "url": "https://github.com/theseer/tokenizer.git",
                "reference": "737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/theseer/tokenizer/zipball/737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2",
                "reference": "737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-tokenizer": "*",
                "ext-xmlwriter": "*",
                "php": "^7.2 || ^8.0"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Arne Blankerts",
                    "email": "arne@blankerts.de",
                    "role": "Developer"
                }
            ],
            "description": "A small library for converting tokenized PHP source code into XML and potentially other formats",
            "support": {
                "issues": "https://github.com/theseer/tokenizer/issues",
                "source": "https://github.com/theseer/tokenizer/tree/1.2.3"
            },
            "funding": [
                {
                    "url": "https://github.com/theseer",
                    "type": "github"
                }
            ],
            "time": "2024-03-03T12:36:25+00:00"
        }
    ],
    "aliases": [],
    "minimum-stability": "stable",
    "stability-flags": [],
    "prefer-stable": true,
    "prefer-lowest": false,
    "platform": {
        "php": "^8.2"
    },
    "platform-dev": [],
    "plugin-api-version": "2.6.0"
}
