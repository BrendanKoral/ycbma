#!/bin/bash

CYAN='\033[0;36m'
GREEN='\033[1;32m'
NC='\033[0m'

echo "Running deploy"

after_success:
    "curl --ftp-create-dirs -T uploadfilename -u $FTP_USER:$FTP_PASSWORD ftp://youcanbemyangel.com/wp-content/testdir"