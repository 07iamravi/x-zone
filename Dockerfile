FROM alpine:latest
LABEL MAINTAINER="https://github.com/07iamravi/x-zone"
WORKDIR /x-zone/
ADD . /x-zone
RUN apk add --no-cache bash ncurses curl unzip wget php 
CMD "./x-zone.sh"
