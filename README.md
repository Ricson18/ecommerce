<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Backend with Vue frontend SPA(Single page Application)

This an ecommerce platform built with Laravel and VueJs. With Laravel as its Backend engine and vueJs as a single page appplication.

## Features
- Admin Dashboard to manage products, Categories and Orders
- User management with Role permissions
- Landing page, Shop page, Product page, cart page, Billing page and Payment


<!-- - [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting). -->


## Requirements
<pre>
<code>PHP >=7.3
MYSQL >=5.7</code>
</pre>

## Install
<pre><code>git clone https://github.com/Ricson18/ecommerce.git</code></pre>
<pre>
    <code>composer install</code>
</pre>
<pre>
    <code>npm install</code>
</pre>
<pre>
    <code>npm run dev</code>
</pre>


## Database Configuration
Go into .env file and change Database credentials.
<pre>
    <code>
        php artisan migrate
    </code>
</pre>
<pre>
    <code>
        php artisan key:generate
    </code>
</pre>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
