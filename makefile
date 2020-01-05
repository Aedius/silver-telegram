

up:
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml up -d

ps:
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml ps


down:
	docker-compose -f docker-compose.yml -f sentry/docker-compose.yml down
