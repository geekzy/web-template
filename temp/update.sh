#!/bin/bash
# Script for updating component files for the template
# In GIT Bash prompt, type ./update to run
# Script based on techniques found here:
# To pull HTML5 Boilerplate files: http://thelucid.com/2011/10/16/pulling-changes-into-a-github-fork-from-the-original-repository/
# To add, update and pull submodules: http://chrisjean.com/2009/04/20/git-submodules-adding-using-removing-and-updating/
# 
# 
# 

cd ..
echo Updating HTML5 Boilerplate in root directory...
sleep 1
git remote add html5b https://github.com/h5bp/html5-boilerplate.git
git pull html5b master

echo Updating submodule: Twitter Bootstrap CSS - lib/css/bootstrap
sleep 1
cd lib/css/bootstrap
git checkout master
git status
git pull
cd ../../..
git add lib/css/bootstrap

echo Updating submodule: FontAwesome - lib/fonts/font-awesome
sleep 1
cd lib/fonts/font-awesome
git checkout master
git status
git pull
cd ../../..
git add lib/fonts/font-awesome

echo Updating submodule: Jquery UI - lib/js/jquery-ui
sleep 1
cd lib/js/jquery-ui
git checkout master
git status
git pull
cd ../../..
git add lib/js/jquery-ui

echo Checking status of updates...
sleep 1
git status

echo If you are making changes to the master template, run './publish' to publish the changes.