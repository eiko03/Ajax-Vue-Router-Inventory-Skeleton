# A Skeleton for your next SPA Inventory Management

## Prerequisites
```
composer Install
```
```
npm Install
```
```
php artisan key:generate
php artisan migrate
```
```
npm run dev
```

## Technology
* Vue
* Vue Router
* Bootstrap
* Ajax
* AdminLTE
* Laravel

## Dev Manual

### Creating A User

#### Using Tinker
``` <?PHP
php artisan tinker
admin=new App\User
$admin->name="AA"
$admin->email="A@A.com"
$admin->password=Hash::make('AA')
$admin->save()
exit
```

#### Using API
Route: GET /user
Route: POST /user (Basic AUTH Req)

#### Using Admin Panel
Route: /admin/users

### Adding New Sidebar
update 
> resources/views/layouts/admin/sidebar.blade.php

### Add new route for the new sidebar item
Update 
> resources/js/routes.js

 ### Add new temple view
 Add /js/views/something.vue
 Everything we do within the file will be injected where we specified the vue-router injection point ``` <router-view></router-view> ``` in
 >resources/views/layouts/admin/content.blade.php
