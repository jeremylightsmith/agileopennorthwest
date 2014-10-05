# Agile Open Northwest.com

## Setting up development

### Prereqs

- Install grunt
- Add this line to your /etc/hosts
  ```
  127.0.0.1 aonw
  ```
- Setup apache to serve this

### Steps

- Start Grunt
  ```
  grunt
  ```
- Pull DB
  - do a sql dump from phpmyadmin (add drop table commands from advanced options)
    ```
    mysql -u perch -pbird perch < ~/Downloads/agile963_perch.sql
    ```
- Start Apache
  ```
  sudo apachectl start
  ```

## Deploy

something like

    sftp 
    rsync...

## Push DB

    mysqldump -u perch -pbird perch > perch.dump

* then go to http://svr8.acornhost.com/cpanel + phpmyadmin

## Grab participant list from eventbrite

something like

    bin/grab.rb

