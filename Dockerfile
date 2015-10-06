FROM centos

MAINTAINER Alex Campos (alex@invisibleaxm.com)

RUN rpm --import http://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7
RUN rpm -Uvh https://www.softwarecollections.org/en/scls/rhscl/python33/epel-7-x86_64/download/rhscl-python33-epel-7-x86_64.noarch.rpm
RUN yum update -y &&  yum -y install scl-utils git wget epel-release vim python33 python-pip
ADD ./config/enablepython33.sh /etc/profile.d/
#RUN wget -P /etc/profile.d http://129.113.29.76/enablepython33.sh
RUN yum clean all
RUN scl enable python33 'easy_install pip' && scl enable python33 'pip install django'
CMD scl enable python33 'django-admin --version'

