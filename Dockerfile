FROM php:5.6-apache

# ssh
ENV SSH_PASSWD "root:Docker!"
RUN apt-get update \
        && apt-get install -y --no-install-recommends dialog \
        && apt-get update \
    && apt-get install -y --no-install-recommends openssh-server \
    && echo "$SSH_PASSWD" | chpasswd 

WORKDIR /home/site/wwwroot/
COPY . /home/site/wwwroot/

RUN  cd /var/www/    && find html -delete 

RUN  cd /var/www/ &&ls -la

RUN   ln -s /home/site/wwwroot /var/www/html

RUN chmod u+x init.sh
RUN mv sshd_config /etc/ssh/
RUN mv init.sh /usr/local/bin/
RUN sed -i -e 's/\r$//' /usr/local/bin/init.sh

EXPOSE 2222
EXPOSE 80



CMD [ "init.sh" ]
