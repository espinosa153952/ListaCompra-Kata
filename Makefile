.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t lista-compra-kata .

build-container:
	docker run -dt --name lista-compra-kata -v .:/ListaCompra lista-compra-kata
	docker exec lista-compra-kata composer install

start:
	docker start lista-compra-kata

test: start
	docker exec lista-compra-kata ./vendor/bin/phpunit tests/*

shell: start
	docker exec -it lista-compra-kata /bin/bash

stop:
	docker stop lista-compra-kata

clean: stop
	docker rm lista-compra-kata
	rm -rf vendor
