For Image of Mysql/PHPMYADMIN/PHP Image visit www.hub.docker.com


notes for docker-compose.yml

here you can write the service  for example check the docker-compose.yml file
mention the service with name,build is for the location,volumes to link location,and ports.

written inside dockerfile is 

From languagename:version

WORKDIR /server/paths/

RUN apt-get update -y && apt-get install -y librabryname-dev

RUN docker-language-extension-install database

and run the cmd: docker-compose up
till the time