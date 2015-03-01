Tyler Kemme
tpkemme@gmail.com

You will need:
• The VMware Player:
http://www.vmware.com/products/player/
• The project image:
http://www.cs.utexas.edu/~shmat/courses/cs361s/cs361s-proj1.tgz
1. Download both the VMware Player and the project tarball. Uncompress the tarball
and run the vm with VMware Player.
2. If VMware Player asks whether you moved or copied the image, say that you copied
it.
3. The machine has two accounts: root/root and user/user. You will do your work as
user, but feel free to explore as root.
The vm is configured to use NAT for networking. From the vm, you can type ifconfig
as root to see the IP address of the vm. It should be listed in the field inet addr: under
eth0.
The vm also has an SSH server. You can SSH into the vm from your machine, using the
IP address produced by ifconfig (see above) as the destination. You can also use this to
transfer files into the vm using scp. Alternatively, inside the vm, you can fetch files directly
from the Web using wget.
Some attacks will require an email to be sent to user on the system. You will need a
server-side script to automatically email information captured by your client-side JavaScript.
We have provided this script for you at http://hackmail.org/sendmail.php (open this
URL from within the vm for more instructions) and use that URL in your attack scripts to
send emails. Any mail the user receives will appear in /var/mail/user.

cookietheft README:
A user named victim has logged into the UT Payroll server. Creates a URL that looks like
this (with EVILMAGIC replaced by the exploit):
http://payroll.utexas.edu/account.php?eid=EVILMAGIC
When the logged in victim visits this URL, the victim’s UT Payroll cookie should get
sent by email to user.
The user should notice no difference in the behavior or appearance of the web page
compared to simply typing a username into the text box on http://payroll.utexas.edu/
account.php and hitting Enter. The source of the page can be arbitrarily different, but it
should look and feel exactly the same.
passwordtheft README:
Creates a malicious HTML page that works as follows. Assume your victim is not
logged in. Upon visiting the page, the victim is redirected to http://payroll.
utexas.edu/. When the victim enters a username and password and hits “Log in”, an email
should be sent to user containing the username and password entered by the victim.
Assuming a valid username/password pair was entered, the next page should
look as if the victim did indeed log into UT Payroll.