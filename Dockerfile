#use official Apache base image
FROM httpd:2.4

# Copy custom HTML/CSS/JS files into web root
COPY ./public-html/ /usr/local/apache2/htdocs/

# Optional: Copy custom config if you have one
# COPY ./my-httpd.conf /usr/local/apache2/conf/httpd.conf

# Suppress FQDN warning
RUN echo "ServerName localhost" >> /usr/local/apache2/conf/httpd.conf

