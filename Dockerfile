# Use Apache official image
FROM httpd:2.4

# Copy website files to Apache's default web root
COPY . /usr/local/apache2/htdocs/

# Suppress FQDN warning
RUN echo "ServerName localhost" >> /usr/local/apache2/conf/httpd.conf



