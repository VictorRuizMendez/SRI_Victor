FROM nginx:latest

COPY ./conf/nginx/nginx.conf /etc/nginx.conf.d/default.conf
