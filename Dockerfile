# Use PHP 8.2 com Apache
FROM php:8.2-apache

# Atualizar pacotes e instalar extensões necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    libpq-dev \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql gd mbstring exif pcntl bcmath xml zip intl opcache \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Habilitar módulos do Apache
RUN a2enmod rewrite

# Criar o diretório de trabalho
WORKDIR /var/www/html

# Copiar os arquivos do projeto para o contêiner
COPY . .

# Configurar permissões
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Configurar o Virtual Host para o Laravel
RUN echo "<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
    ErrorLog /var/log/apache2/error.log\n\
    CustomLog /var/log/apache2/access.log combined\n\
</VirtualHost>" > /etc/apache2/sites-available/000-default.conf

# Instalar o Composer versão 2.6
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.6.0

# Limpar cache do Composer e instalar dependências do Laravel
RUN composer clear-cache \
    && composer install --no-dev --optimize-autoloader

# Adicionar script para corrigir permissões e iniciar o Apache
RUN echo "#!/bin/bash\n\
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache\n\
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache\n\
exec apache2-foreground" > /start.sh \
    && chmod +x /start.sh

# Expõe a porta padrão do Apache
EXPOSE 80

# Comando padrão para rodar o script e iniciar o Apache
CMD ["/start.sh"]
