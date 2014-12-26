#!/bin/bash
DOCKER_RESULT=0
if [ "$DOCKER_RESULT" -eq "0" ]
then
  LABEL='<span class="label label-success">PASSED</span>'
  COLOR='green'
else
  LABEL='<span class="label label-important">FAILED</span>'
  COLOR='red'
fi
BUILD_NUMBER=1
COMMIT_ID=$(git log -1 --pretty='%h')
COMMIT_AUTHER=$(git log -1 --pretty='%cn')
COMMIT_COMMENT=$(git log -1 --pretty='%s')
COMMIT_BRANCH=$(git branch --contains $COMMIT_ID | sed 's/* //')
REMOTE_REPOSITORY=$(git-parser `git config --get remote.origin.url`)
printf "Build $REMOTE_REPOSITORY<a href="$JOB_URL" target="_blank">#$BUILD_NUMBER</a> ($COMMIT_BRANCH - $COMMIT_ID): $LABEL \n $COMMIT_AUTHER: $COMMIT_COMMENT" > message.txt

#cat /tmp/message | idobata-notify -t 4f18052e-28cb-447a-9704-c12cff0575d4
