# Docker PHP upload image
A small Docker php web application to upload remote files.



## How to run
```
docker run -p 4444:80 -it --rm --name my-php-upload-app -v /tmp/uploads:/var/www/html/uploads daindragon2/php-upload-app 
```

The web app will run on port `4444`. 

