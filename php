#!/bin/sh

docker run \
    --rm \
    -it \
    --pid=host \
    --network=host \
    --sig-proxy=true \
    -u $(id -u):$(id -g) \
    -v ${HOME}:${HOME} \
    -v ${HOME}:/root \
    -v /tmp:/tmp \
    -v ${PWD}:${PWD} \
    -e HOME=${HOME} \
    -w ${PWD} \
    php:7-alpine \
    php $@

return $?