FROM ubuntu:14.04

RUN apt-get update && apt-get install -y \
    wget \
    curl \
    systemd \
    nano \
    iputils-ping \
    mc \
    nginx


WORKDIR /etc/nginx

CMD ["nginx", "-g", "daemon off;"]

