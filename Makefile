.PHONY: up down refresh composer

up:
	docker-compose up -d

down:
	docker-compose down

refresh:
	docker-compose down && docker-compose up -d --build

CMD="--version"
composer:
	docker-compose run composer $(CMD)