#!/bin/bash
backupFile="CUSTOM"
date=`(date "+%Y.%m.%d-%H.%M.%S")`
cd data/backups/temp/
tar czf $backupFile-$date.tar.gz apps/
cd ../../../
`which java` -jar abe.jar pack data/backups/temp/$backupFile-$date.tar.gz data/backups/compressed/$backupFile-$date.ab
cd data/backups/
rm -rf temp/*