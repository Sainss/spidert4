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

When the option of user options is pressed,
1. For viewer

![viewer](https://cloud.githubusercontent.com/assets/19251508/16495488/535766d0-3f0b-11e6-9514-6c897517cedd.jpg)

2.For Editor

![editor](https://cloud.githubusercontent.com/assets/19251508/16495497/5f40ebce-3f0b-11e6-8453-fae9e1126e94.jpg)

3.For Admin

![admin](https://cloud.githubusercontent.com/assets/19251508/16495491/598f7024-3f0b-11e6-82b8-3c4cf6dcc9a6.jpg)

When the option of admin panel is pressed 
In this page, the admins can't be changed to oter levels but other users can be by clicking on their present level

![adminpanel](https://cloud.githubusercontent.com/assets/19251508/16495502/65d980fe-3f0b-11e6-8927-583ff774f0bc.jpg)


When a user is either editor or admin ,he gets an option to create new post on clicking the following page appears

![new](https://cloud.githubusercontent.com/assets/19251508/16495660/11e6291a-3f0c-11e6-909d-85e511e3274b.jpg)

After a new post is made,

![add](https://cloud.githubusercontent.com/assets/19251508/16495675/1d6b3bd6-3f0c-11e6-92b6-cc070267cd78.jpg)
