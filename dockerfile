FROM php:7.4-apache

# Install required packages and extensions
RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    zip \
    unzip && \
    docker-php-ext-install zip && \
    docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

# Copy the contents of the web app to the container
COPY . /var/www/html/

# Set the working directory to the web app folder
WORKDIR /var/www/html/

