#!/bin/bash
#Script for merging changes from HTML5BP's index file updates with the index-daydream-master.html file.

cd ..
echo Merging index.html and index-daydream-master.html...
sleep 1
sdiff -l -o index-template.html index-daydream-master.html index.html