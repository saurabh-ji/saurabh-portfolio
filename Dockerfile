# Use official Nginx image as the base
FROM httpd:2.4   
# Remove default nginx page


# Copy your HTML files into nginx's default public folder
COPY . .

# Expose port 80
EXPOSE 5000


