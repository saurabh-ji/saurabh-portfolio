# Use official Nginx image as the base
FROM nginx:alpine

# Remove default nginx page


# Copy your HTML files into nginx's default public folder
COPY . .

# Expose port 80
EXPOSE 5000


