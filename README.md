# Spider Task 4 -Authorization and authentication


#Overview of the task
---------------------------------
This task is about the authorization and authentication of users in a particular server.

The list of server routes are as follows

login.php->index.php->[1.Home->login.php]
                      [2.User options->profile.php->Admin panel->admin.php and create new post->newpost.php [Dependding on userlevel]
                      [3.Logout->login.php[You have to again enter the username and password to login but in hoe you don't have to]]

#Build Instructions
----------------------------------
1. Download PHP, Apache and MySQL for your system
      1.Link to download XAMPP for windows. [XAMPP](https://sourceforge.net/projects/xampp/?source=directory)
      2.For linux [LAMP](https://bitnami.com/stack/lamp/installer)
2.Clone the github repo ''git clone https://github.com/Sainss/spidert4.git''

The main page of the website

![login](https://cloud.githubusercontent.com/assets/19251508/16494981/1a065d84-3f09-11e6-9cb9-b2c5b6222e72.jpg)

The registration page

![register](https://cloud.githubusercontent.com/assets/19251508/16494990/1f830488-3f09-11e6-8d22-2c8f55eb6e4b.jpg)

When a admin user logs into the bulletin board

![adminuser](https://cloud.githubusercontent.com/assets/19251508/16495183/e720d1d2-3f09-11e6-8da4-6ddbcd615e1b.jpg)

When a user who is not an admin logs into the bulletin board
![otheruser](https://cloud.githubusercontent.com/assets/19251508/16495185/ea482234-3f09-11e6-9c63-cb75848a5a6f.jpg)

The user data is stored here which is used for registration and login purposes

![reg](https://cloud.githubusercontent.com/assets/19251508/16495303/7043bb50-3f0a-11e6-9dd7-06b8b95b9832.jpg)

Here the names of the userlevels are stored that is when a new account is made ,then it is registered as userlevel 3 which corresponds to Viewer

![ul](https://cloud.githubusercontent.com/assets/19251508/16495310/79b816d6-3f0a-11e6-9e59-25534434036b.jpg)

Here the posts are stored

![post](https://cloud.githubusercontent.com/assets/19251508/16495312/7ee194ac-3f0a-11e6-8cba-f39cc264f66f.jpg)

