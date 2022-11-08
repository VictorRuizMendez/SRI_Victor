FROM nginx:latest

COPY ./conf/nginx.conf /etc/nginx.conf.d/default.conf
