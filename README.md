Warning
---------------------------
SecretChan is **not production ready**

Fuck, it doesn't even work.

Overhaul Time
---------------------------
It's not uncommon for me to crack the shits and recode stuff. I had forgotten about this repo and started recoding this from scratch to use a MySQL database. Originally I wanted to avoid that, however it's much more economical in the long run to do so, as it'll solve a shit tonne of issues if it ever needs to be sharded. 

Anyway, it's all basic shit for now. Login system should be easy to code :) 

About "SecretChan"
-----------------------------
I had absolutely no idea what to call this little "project". The background here is that I wanted a project to learn a templating system. Smarty was my choice as I found it really easy to pick up during those quiet moments at work. 

This is a "complicated" chan. "complexchan" might have been a better name!  Originally it was designed to for username/password security so I could hide my private chan from works prying eyes. After experimenting with .htpasswd I decided a more elegant solution was required. 

Here we have the basis of SecretChan.

Things I need to do
---------------------------

1. Write functions for posting to a board
2. Write function for retrieving posts
3. ~~Figure out recursion in Smarty~~
4. ~~Figure out what I'm doing visa vi filenames~~
5. ~~Figure out how to do a  "global template" ~~
6. Code the login system
7. Steal some sort of ACL schema off the internet
8. Steal a fancy login form from the internet
9. Hack that farm login form into a fancy posting form
