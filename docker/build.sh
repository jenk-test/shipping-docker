#!/usr/bin/env bash

docker build -f app/Dockerfile -t stevepop.com/app:latest ./app
docker build -f node/Dockerfile -t stevepop.com/node:latest ./node
