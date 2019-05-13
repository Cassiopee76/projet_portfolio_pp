DOCKER_FILE = Dockerfile
DOCKER_IMAGE = portfolio-pp
DOCKER_TAG = 1.0.0
DOCKER_CONTAINER = portfolio-pp
FULL_IMAGE_NAME = $(DOCKER_IMAGE)__colon__$(DOCKER_TAG)
TAR_NAME = $(DOCKER_IMAGE)-$(DOCKER_TAG).tar



default:build

clean:
	-docker rm -f $(DOCKER_CONTAINER)

clean-all: clean
	-docker rmi -f $(DOCKER_IMAGE):$(DOCKER_TAG)


build:
	docker build -t "$(DOCKER_IMAGE)":$(DOCKER_TAG) -f $(DOCKER_FILE) .

run:
	docker run -d -p 80:80 --name $(DOCKER_CONTAINER) $(DOCKER_IMAGE):$(DOCKER_TAG)

export:
	docker save -o $(TAR_NAME) $(subst __colon__,:,$(FULL_IMAGE_NAME))