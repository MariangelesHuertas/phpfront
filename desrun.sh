rm -rf php
docker rm -f $(docker ps -lq)
docker rmi -f php