# 使用官方 PHP 镜像
FROM php:8.1-apache

# 将本地文件复制到容器中
COPY . /var/www/html/

# 开启 rewrite 模块（如果有使用 URL 重写）
RUN a2enmod rewrite

# 设置工作目录
WORKDIR /var/www/html

# 设置文件权限（可选）
RUN chown -R www-data:www-data /var/www/html
