#!/bin/bash

printf "\n\n### Setting Up Stuff... ###\n\n"
sudo apt install -y libssl1.0-dev
sudo apt-get install -y nodejs
sudo apt install -y node-gyp
sudo apt-get install -y npm
npm install
sudo apt-get install -y php
printf "\n\n### Finished Stuff... ###\n\n"