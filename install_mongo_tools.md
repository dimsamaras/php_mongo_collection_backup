### Install Mongo CENTOS

```
1.  Create a /etc/yum.repos.d/mongodb-org-3.4.repo file so that you can install MongoDB directly, using yum.
2. [mongodb-org-3.4]
name=MongoDB Repository
baseurl=https://repo.mongodb.org/yum/redhat/7Server/mongodb-org/3.4/x86_64/
gpgcheck=1 
enabled=1
gpgkey=https://www.mongodb.org/static/pgp/server-3.4.asc
3.  sudo yum install -y mongodb-org
```
step 2: pay attention to baseurl, search repo for your relaease!

### Install Mongo UBUNTU
Official: https://docs.mongodb.com/v3.2/tutorial/install-mongodb-on-ubuntu/

```
1. sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv EA312927
2. echo "deb http://repo.mongodb.org/apt/ubuntu xenial/mongodb-org/3.2 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-3.2.list
3. sudo apt-get update
4. sudo apt-get install -y mongodb-org
```


### no need to start the mongo db (mongod), we only need the client


