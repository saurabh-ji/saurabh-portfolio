# clone the repository 
$$ git clone https://github.com/saurabh-ji/gym-website-template.git

# update the terminal 

$ apt-get update

# create docker image
$ docker build -t gym-web:latest .

# see the docker image

$ docker images 

# run images in container 
$ docker run -d -p 80:80 <yourimage>

# now your application running in container 
$ http://localhost:80
