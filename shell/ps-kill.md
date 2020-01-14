# 如何关闭 php-fpm ，如何杀死进程

shutdown php-fpm

## 首先查找进程id

```shell
#ps -ef|grep php-fpm
root      5296     1  0 May14 ?        00:00:05 php-fpm: master process (/usr/local/php/etc/php-fpm.conf)
www       5297  5296  0 May14 ?        00:00:01 php-fpm: pool www          
www       5298  5296  0 May14 ?        00:00:01 php-fpm: pool www 
```

php-fpm master 进程id为`5296`

## 杀死进程id

```shell
# kill -USR2 5296

# ps -ef|grep php-fpm
root     10228     1  0 09:09 ?        00:00:00 php-fpm: master process (/usr/local/php/etc/php-fpm.conf)
www      10229 10228  0 09:09 ?        00:00:00 php-fpm: pool www          
www      10230 10228  0 09:09 ?        00:00:00 php-fpm: pool www          
root     10232  6015  0 09:09 pts/0    00:00:00 grep php-fpm
```
