All original content (c) Chris Drabsch. All rights reserved.

Use the .sh scripts in the parent directory to perform various tasks, and should be run from the root directory:

WHEN UPDATING TEMPLATE FILES FOR ALL PROJECTS + FUTURE PROJECT DEVELOPMENT
- "./update.sh" is run on the web-template folder, and will update all submodules connected to the project. Run ./publish.sh first to commit and backup any recent changes prior to the update.
- "./publish.sh" will publish those changes/updates plus any modifications to the web-template folder for future use.

WHEN CREATING A NEW PROJECT FROM WEB-TEMPLATE
- "./fork.sh" allows you to make a clean client project based on the web-template folder.

WHEN UPDATING A PROJECT INDIVIDUALLY
- "./fork-update.sh" will pull in any new updates from web-template to the client's project folder

INFO ABOUT VARIOUS FILES:
- index.html: The standard HTML5 Boilerplate index file. This will have code that will change as HTML5BP updates.

GO TO TEMP/NEW-TEMPLATE-CODE.TXT to insert custom DD template code into index.html.



