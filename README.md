### Rytis Klimavicius - Rytiskli@gmail.com
# Recipes Website (**Under development**)

This is a personal project that I will personally use every day to manage my recipes. It is built in Laravel along with Vue.js to help with UI functionality. For the design I've purchased a template that is written in Bootstrap 4 and adapted it to fit my needs. This is not an SPA, Vue.js is only used to help in several pages. For example sort,filter and search for recipes without refreshing the page, pagination without refreshing page and so on. 

### To-do list
- [x] View and filter recipes without re-freshing the page.
- [x] Add recipe to the database. Vue.js for extra functionality
- [ ] Edit/delete recipes using admin->manage area.
- [x] Login/Register to be moved to modal
- [ ] Protect POST,GET and DELETE api using Laravel Passport/Sanctum. Will require additional work in Vue components.
- [ ] Caching and api authorization in Vue.js
- [ ] API Unit tests
- [x] Login/Register to be moved to modals.
- [ ] Project clean-up. Unused HTML files, Postman requests, commented out code, optimizations.
- [ ] API improvements. Request validations, logic moved elsewhere, well strctured/consistent APIs.




Requirements:
* XAMPP (MySQL)
* PHP ^ 7.4.10
* NPM ^ 6.14.8
* Node ^ 12.19.0
* Composer ^ 2.0.7

## Running Project on local

Clone project from Github repository:
```sh
$ git clone {projectURL}
```

Install packages and dependancies:
```sh
$ composer install
$ npm install
```

Create .env file (Windows):
```sh
$ copy .env.example .env
```
Create .env file (Mac OS):
```sh
$ cp .env.example .env
```

Generate encryption key (used for cookies, password and more):
```sh
$ php artisan key:generate
```

Create Database tables:
```sh
$ php artisan migrate:fresh
# Optional: insert dummy data
$ php artisan db:Seed
```

Run project:
```sh
$ php artisan serve
# Optional: instant effect changes to Vue.js components
$ npm run watch
```

Local project URL
```sh
127.0.0.1:8000
```
