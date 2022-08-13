FROM mysql:8
EXPOSE 3306:3306/tcp
COPY ./config/my.cnf /etc/my.cnf
COPY ./migrate/*.sql /docker-entrypoint-initdb.d
CMD ["mysqld"]