Composer create-project Laravel/Laravel Api “11.*”
Changes in .env file for Db connections
Php artisan migrate

using below command you can create api controller model migration
php artisan make:model Order -mcr --api

using below command you can create api controller model migration seeder factories
php artisan make:model Order -mcrfs --api
using below command you will be able to create api routes
php artisan api:install
Route::apiResource('orders', OrderController::class);


http://127.0.0.1:8000/api/orders/1 //get method
http://127.0.0.1:8000/api/orders //post method
this json inside body/json
{
  "name":"computer",
  "description":"generatio five",
  "price":1000,
  "quantity":5,
}

http://127.0.0.1:8000/api/orders/1 //put method
for update
{
  "name":"Rahu ketu",
  "description":"generatio five",
  "price":1025,
  "quantity":55
}
http://127.0.0.1:8000/api/orders/1 //delete method

