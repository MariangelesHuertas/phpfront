git clone https://github.com/chupino/phpfront.git php
cd php
docker build -t php .
if [ $? -eq 0 ]; then
    echo "contruida"
else
    echo "mal"
    exit 1
fi

docker run -dp 7000:80 php
