
<p align="center">
<img src="https://efflux.com/images/efflux-icon-512.png" width="300">
</p>


## Efflux - Master

This repository contains the master Efflux Application and database migrations.


## Server Installation Guide...

*First update the server*
```bash
yum -y update
```

### Httpd
*Next install Apache Server*
```bash
yum install httpd
systemctl enable httpd
systemctl start httpd
systemctl status httpd
```

*Allow web traffic through the firewall*
```bash
firewall-cmd --permanent --zone=public --add-service=http 
firewall-cmd --permanent --zone=public --add-service=https
firewall-cmd --reload
```

*Disable selinux*
> Open the `/etc/selinux/config` file and set the SELINUX mod to disabled:
```bash
# This file controls the state of SELinux on the system.
# SELINUX= can take one of these three values:
#       enforcing - SELinux security policy is enforced.
#       permissive - SELinux prints warnings instead of enforcing.
#       disabled - No SELinux policy is loaded.
SELINUX=disabled
# SELINUXTYPE= can take one of these two values:
#       targeted - Targeted processes are protected,
#       mls - Multi Level Security protection.
SELINUXTYPE=targeted
```
> then reboot the server to take effect
```bash 
sudo shutdown -r now
```


### PHP & Stuff
*Install all the dependancies we will need*
> First ensure PHP is installed in your local system.
```bash
sudo dnf install @php
php -version
yum -y install unzip php-mysqlnd php-pdo php-gd php-mbstring php-bcmath php-xml php-cli php-zip
systemctl restart httpd 
```


### MySQL
*Install Mysql Database Server*
> Centos-8 comes with mariadb pre-installed!
```bash
yum install mariadb-server mariadb
systemctl enable mariadb
systemctl start mariadb
systemctl status mariadb
```

> Allow sql calls through the firewall
```bash
firewall-cmd --permanent --zone=public --add-service=mysql
firewall-cmd --reload
```

*Configure the mysql server*
> mysql password: `md5(hostname)` take off the TLD (.com)
```bash
mysql_secure_installation
```

*Create the database for Laravel*
```bash
mysql -uroot -ppf8b4790a636ae32626d6a61be49803c2

CREATE DATABASE `test4dough`;
```

### SSH Key
> Create both public and private keys
```bash
ssh-keygen -t rsa -b 4096 -f ~/.ssh/theKey

Generating public/private rsa key pair.
Enter file in which to save the key (~/.ssh/id_rsa): 
Enter passphrase (empty for no passphrase): 
Enter same passphrase again: 
Your identification has been saved in ~/.ssh/id_rsa.
Your public key has been saved in ~/.ssh/id_rsa.pub.
The key fingerprint is: (...)


mv ~/.ssh/theKey.pub ~/.ssh/authorized_keys
```
> Take the private key to use to connect remotely via ssh
> first be sure that sshd_config is allowing keys
```bash
vi /etc/ssh/sshd_config

# line 73: change to [no]
PasswordAuthentication no

systemctl restart sshd
 ```

### Composer
> Next is to download the Composer installer locally.
```bash
sudo dnf -y install wget
wget https://getcomposer.org/installer -O composer-installer.php
sudo php composer-installer.php --filename=composer --install-dir=/usr/local/bin 
composer --version
```

### Node/npm
```bash
dnf install npm
npm --version
```

### Laravel
> install the laravel installer and make the site
```bash
composer global require laravel/installer
cd /var/www/html/
laravel new $DOMAIN_NAME
```

### Virtual Hosts
> Add the domain to httpd configuration 
```bash
# create this file
vi /etc/httpd/conf.modules.d/$DOMAIN_NAME.conf

<VirtualHost *:80>
    DocumentRoot "/var/www/html/$DOMAIN_NAME/public"
    ServerName $DOMAIN_NAME
</VirtualHost>

#change httpd.conf like below
vi /etc/httpd/conf/httpd.conf

<Directory />
#    AllowOverride none
    AllowOverride All
    Require all denied
</Directory>

<Directory "/var/www/html">
#    AllowOverride None
    AllowOverride All
    Require all granted
</Directory>

systemctl restart httpd
```

### Certbot - SSL
> Install certbot-auto and all of its needs
```bash 
wget https://dl.eff.org/certbot-auto
sudo mv certbot-auto /usr/local/bin/certbot-auto
sudo chown root /usr/local/bin/certbot-auto
sudo chmod 0755 /usr/local/bin/certbot-auto
```
> run certbot-auto to make all domains ssl and redirect to https
```bash
sudo /usr/local/bin/certbot-auto --apache
```
> once done, set up auto renewal with crond
```bash 
echo "0 0,12 * * * root python3 -c 'import random; import time; time.sleep(random.random() * 3600)' && /usr/local/bin/certbot-auto renew" | sudo tee -a /etc/crontab > /dev/null
```

## Dependancies
- [Composer](https://getcomposer.org/)
- [NodeJs](https://nodejs.org/en/)

### Using Node Package Manager (npm install ...)
- axios : ^0.19
- cross-env : ^7.0
- laravel-mix : ^5.0.1
- lodash : ^4.17.13
- resolve-url-loader : ^3.1.0
- sass : ^1.15.2
- sass-loader : ^8.0.0
- vue-template-compiler : ^2.6.11
- animate.css : ^3.7.2
- bootstrap : ^4.4.1

## More About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

