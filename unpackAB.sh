#!/bin/bash
backupFile=$1
cd data/backups/temp/
rm -rf apps/
cd ../../../
`which java` -jar abe.jar unpack data/backups/compressed/$backupFile.ab data/backups/temp/$backupFile.tar
cd data/backups/temp/
tar xf $backupFile.tar
rm $backupFile.tar