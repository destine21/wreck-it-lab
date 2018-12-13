# Wreck-it Lab

## Installation (0.1 alpha version)
1. Install [Docker](https://www.docker.com/get-started)
2. Run following command in terminal
```
docker run -it -p 80:80 --name wreck-it-lab destine21/wreck-it-lab-alpha
```
3. After a few seconds go to [localhost](http://localhost)

## Stop wreck-it-lab container
You can stop the container with this command
```
docker stop wreck-it-lab
```
## Start an existing wreck-it-lab container
You can resume your challenge with 
```
docker start -i wreck-it-lab
```