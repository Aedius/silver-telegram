

up:
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml up -d

ps:
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml ps


down:
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml down -v

flog:
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml logs -f

init: up
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml run --rm sentry-base sentry upgrade --noinput
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml exec php composer install
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml exec sentry-base sentry createuser --email vincent --password lemaire --superuser --no-input

sentry-test: cc
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml exec php php bin/console sentry:test

cc:
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml exec php php bin/console cache:clear