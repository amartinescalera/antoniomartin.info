#!/usr/bin/env bash
set -e

docker-compose -f aaDeploy/docker-compose.yml down
docker rmi aadeploy_wordpress
docker rmi aadeploy_mariadb