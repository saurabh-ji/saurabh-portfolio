# Use Apache official image
FROM httpd:2.4

# Copy your website files (HTML/CSS/JS) into Apache's root directory
COPY ./public-html/ /usr/local/apache2/htdocs/

# Optional: Suppress FQDN warning
RUN echo "ServerName localhost" >> /usr/local/apache2/conf/httpd.conf



