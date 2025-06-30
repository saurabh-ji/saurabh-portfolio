# Use official Nginx image as the base
FROM nginx:alpine

# Remove default nginx page
RUN rm -rf /usr/share/nginx/html/*

# Copy your HTML files into nginx's default public folder
COPY . /usr/share/nginx/html

# Expose port 80
EXPOSE 5000


