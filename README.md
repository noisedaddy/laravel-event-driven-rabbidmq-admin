
## Admin part of the laravel application used as an example of event-driven architecture


- php artisan sail:install
- ./vendor/bin/sail up

- publish DockerFile:
- ./vendor/bin/sail artisan sail:publish
- start queue with ./vendor/bin/sail artisan queue:work
- Use *.http files to call api endpoints
