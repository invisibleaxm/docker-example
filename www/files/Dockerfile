FROM centos

MAINTAINER Alex Campos (alex@invisibleaxm.com)

RUN rpm --import http://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7
RUN yum update -y && yum install httpd php php-pear php-devel php-mysql -y

ENV APACHE_LOG_DIR /var/log/httpd/

EXPOSE 80
ADD apache-config.conf /etc/httpd/conf.d/default.conf
ADD www /var/www/mysite/
#ENTRYPOINT ["/usr/sbin/httpd"]
#CMD ["-D", "FOREGROUND"]
CMD /usr/sbin/httpd -D FOREGROUND

