#!/bin/bash
# Script for publishing master template files to the github server
# In GIT Bash prompt, type ./publish to run
# Based on the diagram found at: http://gitready.com/beginner/2009/01/21/pushing-and-pulling.html

cd ..
echo Adding all changed files...
sleep 1
git add .

echo Committing files...
sleep 1
git commit

echo Pushing files...
sleep 1
git push

echo Done.