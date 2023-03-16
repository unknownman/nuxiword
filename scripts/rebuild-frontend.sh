#!/bin/bash

# Rebuild the frontend service
docker-compose build frontend

# Stop and remove the frontend and proxy services
docker-compose stop frontend proxy
docker-compose rm -f frontend proxy

# Start the remaining services
docker-compose up -d --no-recreate