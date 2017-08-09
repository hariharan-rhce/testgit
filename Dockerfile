FROM ncrepository/tapi
COPY * /var/www/html/
CMD ["/usr/local/apache/bin/apachectl", "-D", "FOREGROUND"]
EXPOSE 80
CMD ["mysqld_safe"
