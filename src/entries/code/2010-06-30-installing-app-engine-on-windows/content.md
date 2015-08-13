The most difficult part of installing Google App Engine on Windows is the SSL module. But I've decided to compile a very simple guide for the whole process.

I am not going to cover any sort of usage guides. This is just a list to
installing everything required(on Windows) to deploy an App to the GAE
cloud.

 1. Download & Install [Python25)](http://www.python.org/download/releases/2.5)
 2. Download & Install [App Engine](http://code.google.com/appengine/downloads.html)
 3. Download & Install [Python25 SSL Installer](http://beautifulisbetterthanugly.com/s/uploads/python/ssl-1.15.win32-py2.5.exe)

The hardest part: Installing the SSL Module. Python25, unlike 26 and
newer, does not come with the SSL Module and must be installed. The normal
route of `python setup.py install` will produce errors. Something about
wrong compilers. There are [tutorials](
http://malei39.blogspot.com/2010/02/install-ssl-module-for-pyhon-254.html)
out there for installing all the dependencies manually. Luckily, someone has
created an installer exe. I have tested this on WindowsXP and Windows7 and
it works.

### 32bit Versus 64bit

Do not install the 64 bit version of Python on Windows. If you do you will
have to compile everything yourself. Including that installer, that
installer is 32bit only. I really don't know any benefit to installing the
64bit version of Python.

Unless I am forgetting something, that is all you need.