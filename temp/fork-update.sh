#!/bin/bash
# Updates the repository with changes from the default template repo
# Based on "Pull in upstream changes": https://help.github.com/articles/fork-a-repo

cd ..
echo "Fetching upstream changes..."
sleep 1
git fetch upstream
echo "Merging changes..."
sleep 1
git merge upstream/master
echo "Fetching updates / new additions to submodules..."
sleep 1
git submodule update --init