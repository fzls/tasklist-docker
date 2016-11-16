#!/bin/bash
# test if git will make file permission changed
docker-compose -f docker-compose-common.yml -f docker-compose-dev.yml $@
