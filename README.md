#Framework for Analyzing Malicious Android Applications

##Project:
*	Develop an application that will allow a user to asynchronously backup their data and applications, analyze for malicious content, and then return a back up with malicious content removed. \n
##Objectives:
*	Allow a user to create backups
*	Allow a user to revert back to previous back ups
*	Allow a user to customize back ups by prioritizing trusted and untrusted apps
*	Create backups wirelessly
##Road Blocks:
*	ADB required USB connection for backups, can not accomplish wirelessly
*	3rd party malicious software detection required license fees in order to incorporate into the application.
*	The application must be hosted locally since it needs communication with the computer drives, so it can be a web based software.
##Lessons Learned: 
*	The Android platform is a very powerful tool, but being open source makes the infrastructure very vulnerable to security threats. Open source allows perpetrators to analyze how the OS works in order to maliciously attack users with faulty apps and downloads. The Google Play Store does not partake in an application review like Apple App Store does in order to be featured within the store. This allows for attackers to flood the Play Store with Trojan apps that are convincing to users to download and steal information from the device.
Further Research and Development:
*	Developing a compare tool that will allow users to select 2 backups and see what data has changed within the apps.
*	Incorporating malicious detecting software to automate the task of removing unwanted apps.
*	Currently this application cannot create Custom back ups from backups that were created with encryption. For this, I will have to further research on how to unpack the files using the adb encryption.
##Tools Used:
*	MAMP
*	Android SDK
*	ADB (Android Developer Bridge)
*	Android Backup Extractor 
⋅⋅*	https://github.com/nelenkov/android-backup-extractor
*	Shell Scripting
*	PHP
*	Javascript/AJAX/jQuery

##Installation:
1.	Create a local apache server (Install MAMP, WAMP, or LAMP)
2.	Start server
3.	Download the zip https://www.dropbox.com/s/ghfjh9y21nlgxpr/independent_study.zip?dl=0
4.	Unzip
5.	Add folder to index directory of your server
##Using Application:
1.	Connect android to local machine using USB
2.	Open a browser
3.	Go to the index link of the server (localhost)
4.	Click the independent_study link
5.	Click "New Backup"
6.	Follow on screen instructions
7.	**Backup created**
8.	Click "View All BackUps"
9.	**Here are all local backups**
10.	Customize back ups by clicking "Customize", this allows you to remove applications that may have malicious content, while keeping others in current state
11.	Apply to phone 


