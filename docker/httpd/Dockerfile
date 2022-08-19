FROM ubuntu:18.04

# パッケージのアップデート
RUN apt-get update -y
# Timezoneの設定のため
RUN apt-get install -y tzdata

# # 開発用
# RUN apt-get install -y man\
#     vim

# 必要モジュールのインストール
RUN apt-get install -y apache2 \
    php \
    php-mysql\
    php-pdo\
    mysql-client-core-5.7\
    curl

RUN mkdir -p /etc/httpd/conf/
RUN touch /etc/httpd/conf/httpd.conf
#ファイルのコピー
COPY ./public/ /var/www/html


# wordpress
ARG WORDPRESS_VERSION="6.0.1"
ARG ENDPOINT=blog
RUN set -ex; \
	curl -o wordpress.tar.gz -fSL "https://wordpress.org/wordpress-${WORDPRESS_VERSION}.tar.gz"; \
    mkdir /var/www/html/${ENDPOINT} && tar -xzf wordpress.tar.gz -C /var/www/html/${ENDPOINT}/ --strip-components 1; \
	rm wordpress.tar.gz; \
	chown -R www-data:www-data /var/www/html/

COPY ./wp-config.php /var/www/html/${ENDPOINT}/wp-config.php

CMD ["apachectl", "-D", "FOREGROUND"]