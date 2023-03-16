#!/bin/bash

# Stop the running Docker Compose
docker-compose down

# Start the Docker Compose for the dev environment
docker-compose -f docker-compose-dev.yml up