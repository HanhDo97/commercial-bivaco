Run application: 
+ docker-compose up
+ cp .env.example
+ Config .env file
Inside Container:
+ php artisan key:generate
+ php artisan migrate --seed (Create data sample)
+ php artisan config:cache

Database structure: Image in public folder