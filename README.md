
## Admin part of the laravel application used as an example of event-driven architecture


- php artisan sail:install
- ./vendor/bin/sail up
- add to .env RABBITMQ credentials
- RABBITMQ_HOST=
- RABBITMQ_PORT=5672
-  RABBITMQ_USER=
-  RABBITMQ_PASSWORD=
-  RABBITMQ_VHOST=
-  RABBITMQ_QUEUE=main_queue
- publish DockerFile:
- ./vendor/bin/sail artisan sail:publish
- start queue with ./vendor/bin/sail artisan queue:work
- Use *.http files to call api endpoints
