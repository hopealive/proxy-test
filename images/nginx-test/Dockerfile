FROM ubuntu:14.04

RUN apt-get update && apt-get install -y \
    wget \
    curl \
    systemd \
    nano \
    iputils-ping \
    mc \
    nginx

# GeoIP updater 
# RUN mkdir /opt/geoipupdate
# RUN curl -sL https://github.com/maxmind/geoipupdate/releases/download/v2.5.0/geoipupdate-2.5.0.tar.gz | tar -xzvf - --directory /opt/geoipupdate --strip-components=1
# RUN cd /opt/geoipupdate && ./configure && make && make install 
# ADD geoip/GeoIP.conf /usr/local/etc/
# RUN geoipupdate


WORKDIR /etc/nginx

CMD ["nginx", "-g", "daemon off;"]

