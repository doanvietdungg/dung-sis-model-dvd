all: build run

build:
	docker-compose -f ci/docker/docker-compose.yml build --no-cache --build-arg hostUID=1000 --build-arg hostGID=1000 web

start: run

run:
	docker-compose -f ci/docker/docker-compose.yml -p sis-model up -d web

stop:
	docker-compose -f ci/docker/docker-compose.yml -p sis-model kill

destroy:
	docker-compose -f ci/docker/docker-compose.yml -p sis-model down

logs:
	docker-compose -f ci/docker/docker-compose.yml -p sis-model logs -f web

shell:
	docker-compose -f ci/docker/docker-compose.yml -p sis-model exec --user nginx web bash

root:
	docker-compose -f ci/docker/docker-compose.yml -p sis-model exec web bash

ip:
	docker inspect sis-model-web | grep \"IPAddress\"

