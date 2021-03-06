#!/bin/bash
# Script for starting a new template based on the default template
# Clones the repository based on the master then follows step 3 onward: https://help.github.com/articles/fork-a-repo

cd ..
echo -n "What name do you want to assign to the project folder?"; read project
sleep 1
cd ..
mkdir $project
echo "Cloning..."
sleep 1
git clone --recursive https://github.com/daydreamgfx/web-template.git $project
echo "Adding remote repo..."
sleep 1
cd $project
git remote add upstream https://github.com/daydreamgfx/web-template.git
echo "Fetch from upstream (default-template repo)..."
sleep 1
git fetch upstream
echo "Fetching submodules from parent repo..."
# http://stackoverflow.com/questions/3796927/how-to-git-clone-including-submodules for more information
 sleep 1
 git submodule update --init

