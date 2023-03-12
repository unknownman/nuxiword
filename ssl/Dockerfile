FROM alpine:latest

RUN apk add openssl

COPY ./ssl.config /etc/ssl/
COPY ./openssl.conf /etc/ssl/

WORKDIR /etc/ssl

RUN openssl req -new -newkey rsa:4096 -days 365 -nodes -x509 \
    -subj "/C=US/ST=California/L=San Francisco/O=My Company/CN=mydomain.com" \
    -keyout /etc/ssl/private/nginx-selfsigned.key \
    -out /etc/ssl/certs/nginx-selfsigned.crt \
    -config openssl.conf
