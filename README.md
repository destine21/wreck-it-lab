# Wreck-it Lab
Wreck-it Lab is a vulnerable web application that contains 13 challenges about web application security. All these challenges are designed for beginner and also include some situation, hints, solutions, how to use tools (in Thai language).

![screenshot0](https://github.com/destine21/wreck-it-lab/blob/master/screenshots/ss0.png)
![screenshot0](https://github.com/destine21/wreck-it-lab/blob/master/screenshots/ss1.png)

## Activate Hardcore Mode
```sh
# On host
docker exec -it wreck-it-lab /bin/bash

# On container
curl https://raw.githubusercontent.com/destine21/wreck-it-lab/hardcore/hardcore.sh | bash
```

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
