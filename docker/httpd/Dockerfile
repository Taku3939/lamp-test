FROM ubuntu:18.04

# パッケージのアップデート
RUN apt-get update -y
# Timezoneの設定のため
RUN apt-get install -y tzdata



# 開発用
RUN apt-get install -y curl\
    man\
    vim

# apacheとphpのインストール
RUN apt-get install -y apache2 \
    php \
    php-mysql\
    php-pdo

RUN mkdir -p /etc/httpd/conf/
RUN touch /etc/httpd/conf/httpd.conf
RUN echo "ServerName db.local:3306" >> /etc/httpd/conf/httpd.conf
# RUN echo "ServerName db" >> /etc/httpd/conf/httpd.conf
#ファイルのコピー
COPY ./public/ /var/www/html

CMD ["apachectl", "-D", "FOREGROUND"]