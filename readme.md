## Laravel 5.1 Docker

Create docker image

`docker build -t laravel-51-image .`

Run docker image

`docker run -p 8000:8000 laravel-51-image`

SSH into the container to run unittest

`docker container exec -it {container-id} bash`

then execute 

`vendor/bin/phpunit`

