docker stop $(docker ps -aq)
docker rm $(docker ps -aq)
docker build -t nverbrug .
docker run -id --name web -p 80:80 -p 443:443 nverbrug
docker exec -ti web sh
