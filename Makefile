IMAGE := daindragon2/php-upload-app
build:
	docker build -t $(IMAGE) .

run: build
	docker run -p 4444:80 -it --rm --name my-php-upload-app -v /tmp/uploads:/var/www/html/uploads daindragon2/php-upload-app 

push:
	docker push $(IMAGE)