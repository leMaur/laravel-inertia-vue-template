# Laravel Inertia Vue Template
A template to start using Inertia.js with Laravel, Vue.js and Tailwindcss!

## How to install

Start by cloning the repo
```
$ git clone git@github.com:leMaur/laravel-inertia-vue-template.git
```

Copy the environment file (can be different in your OS)
```
$ cp .env.example .env
```

Install php dependencies
```
$ composer install
```

Generate the encryption key for Laravel
```
$ php artisan key:generate
```

Install node dependencies
```
$ yarn install

// OR

$ npm install
```

And now... start building something amazing!

## Battery included

The template also include some goodies to help you stay on track with your project.

### Debugbar
[more info](https://github.com/barryvdh/laravel-debugbar#usage)

With the new model feature by [Jonathan Reinink](https://reinink.ca/articles/viewing-model-counts-in-the-laravel-debugbar)

### Php CS Fixer
[more info](https://github.com/stechstudio/Laravel-PHP-CS-Fixer#usage)
```
$ php artisan fixer:fix
```

### Larastan
[more info](https://github.com/nunomaduro/larastan#usage-in-laravel-applications)
```
$ php artisan code:analyse
```

### Php Insights
[more info](https://github.com/nunomaduro/phpinsights#-quick-start)
```
$ php artisan insights
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
