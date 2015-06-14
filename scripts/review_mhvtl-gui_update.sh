#!/bin/bash

VER=`cat ../version | cut -d "-" -f2`
cd ../
git log --graph --pretty=format:"%h %ad %d %s" --date=short $VER"..."
cd html
