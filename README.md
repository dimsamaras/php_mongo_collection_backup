# php_mongo_collection_backup
A small script to help me update dev mongo collections from the production db.

The class is based on https://github.com/KerryRitter/MongoDumper/

# MongoDumper 
This class allows you to copy any mongoDB collection from one db to another, utilizing shell command to do so. If there is an error, please verify that the backup folder has the correct permissions and this script has execute permissions. 
The script executes mongodump and optionally zips the dump contents and deletes the original dump folder to conserve disk space. After the dump and compresion the restoration is performed to the destination db.

# Backup script
This script uses the MongoDumper class above on scenarios (i.e. set of collections). This is to facilitate my operations and since MongoDumper currently holds db endpont and user credentials should be kept safely and only accessed with restrictions and ACLs.

## Examples 
$dumper = new MongoDumper("/tmp/db-backups/mongo");
$dumper->run("collection name", true); // 'true' shows debug info


## Install mongo on centos:
https://github.com/dimsamaras/php_mongo_collection_backup/blob/master/install_mongo_tools.md

