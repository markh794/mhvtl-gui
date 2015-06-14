#!/bin/bash

VER=`vtlcmd -V| cut -d "-" -f3`
cd ../mhvtl.git
git log --graph --pretty=format:"%h %ad %d %s" --date=short $VER"..."
cd ../html
