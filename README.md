Warning
---------------------------
SecretChan is **not production ready**

Fuck, it doesn't even work.

About "SecretChan"
-----------------------------
I had absolutely no idea what to call this little "project". The background here is that I wanted a project to learn a templating system. Smarty was my choice as I found it really easy to pick up during those quiet moments at work. 

This is a "complicated" chan. "complexchan" might have been a better name!  Originally it was designed to for username/password security so I could hide my private chan from works prying eyes. After experimenting with .htpasswd I decided a more elegant solution was required. 

Here we have the basis of SecretChan.

I originally coded this from scratch but it took too long so I started using TinyBoard. This sufficed until I realized my web traffic was being monitored. I hacked a login system into TinyIB by forcing imgboard.php to create an index.php instead of index.html, then added a simple check for a php session and a login box to create the session. This would keep people away from the php side but not the image side. 

Here we have the birth of SecretChans final form.

I have been playing with Bootstrap lately, so I used Smarty to serve a bootstrap template which will serve as the core of the website. All sections of the website will be handled by PHP, including images. This opens the avenue for using imagemagik to fuck with images but it also means increasd processing times for image load. The flip side is that I can set a password for each board so we can prevent prying eyes from seeing what we have hosted.  I consider this a TinyIB rewrite as I've based it off the TinyIB database however I have not used it's code. Everything here has been drunkenly rewritten myself.

Things I need to do
---------------------------

1. A lot.
2. Login system based on database
3. Trip functions
4. Image processing - thumbnail generation and file upload
5. Full bootstrap display
