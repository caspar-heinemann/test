Weg Website (DE)
===========

This repository contains the code for the mobileeventguide.de (not .com) website.

Prerequisites for local development
=============
- Install PHP (the server runs 5.3.10)
- Install MySQL

Install
=======
1. Get someone from the backend team to submit your ssh-key to the runner user @wordpress.event.gd.
2. Get someone to to add you to the meg-designers github group, also make sure to have your ssh-key added
on Github.
2. checkout the repository accessible by your web server:

        git@github.com:mobileeventguide/meg-website-de.git

3. Change wp-config.php and add appropriate db-credentials for your local machine. To get a dump of the production database do:

      mysqldump --host=88.198.235.204 -u wordpress -pCwCN83tnHBMErYEp wordpress > wordpress_de.sql

Dont wonder, its the same db for both en and de, just using a different table prefix for each version.
Now now import the wordpress_de.sql-file into your database. For local development make sure, that
http-adresses in the wp-options-table point to your local development.

Deployment
==========
The website uses two git branches for the deployment:

*master (default)
*staging

master is used for the live website, so please do all your work in staging:

        git checkout staging


If you are done editing your site, stage your changes in git:

        git add -A

Then, commit your changes:

        git commit -m "your commit message"

Push your changes to Github:

        git push origin staging

To see your changes on staging website (staging.mobileeventguide.de), deploy your changes (this logs on to the server, gits the latest changes from git)

        cap staging deploy
        
If everything goes well and your changes look good, merge your changes to the master branch:

        git checkout master
        git merge staging
        git push origin master
        
Then deploy the master branch to the production (live) system:
        
        cap production deploy

You should then see your changes at www.mobileeventguide.de

If you prefer a GUI for using git you can easily do that. However for the deployment
you need the command line.

If Questions, ask Kristian.
