Project 	- CMSGears (https://www.cmsgears.org)

Template  	- Community

License 	- GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

Description - The community template requires below listed modules, plugins, themes and widgets freely provided by CMSGears.

Modules
------------------------------------------
1. Core Module to manage site users, galleries, newsletters, roles and permissions.
2. Forms Module to accept forms in both ajax and regular way.
3. CMS Module to manage page, post, blocks, menus, sidebars and widgets.
4. Community Module to manage groups, group members, group messages, friends.

Plugins
------------------------------------------
1. File Manager Plugin provide default component to accept uploaded files and File Uploader Widget to uploads files.
2. Social Meta Plugin provides options to customise pages and posts on facebook and twitter wall.

Widgets
------------------------------------------
1. CLEditor Widget can be used to edit content using CLEditor WYSIWYG editor.
2. Block Widget can be used to form pages using Blocks.
3. Nav Widget can be used to form navigation menus.
3. Login Widget can be used to login or register on site using Ajax.
4. Gallery Widget can be used to show Image Galleries.
6. Newsletter Widget can be used to allow site users to register for news and updates from site.
7. Form Widget can be used to display forms stored in database using yii way.
8. Ajax Form Widget can be used to display forms stored in database. These can be submitted using Ajax.
9. Blog Widget can be used to show blog posts.

Themes
------------------------------------------
1. Admin Theme provide layouts to manage Core, Forms and CMS modules. It also provide options to configure modules and plugins.
2. Community Theme for frontend. It provide layouts and views for Core, Forms and CMS modules.

Template Details
=========================================
The Community Template is a group of directories and configuration files used to manage the backend and frontend applications.

It also provide DB configuration having required test data. The uploads directory is uploaded by default files required for demonstration purpose.

Template Demo
=========================================
1. Frontend - https://demo.cmsgears.com/templates/community (demouser@cmsgears.com, test#123)
2. Admin - https://demo.cmsgears.com/templates/community/admin (demomaster@cmsgears.com, test#123)

Template Installation
=========================================

The Community Template can be installed via composer using the below mentioned command. To install composer, please refer to their official site https://getcomposer.org.

We can install release and pre-release i.e. alpha, beta versions using composer as mentioned below.

```
// Release Versions

php composer.phar create-project --prefer-dist --stability=stable cmsgears/template-community cmgdemocommunity

or

composer create-project --prefer-dist --stability=stable cmsgears/template-community cmgdemocommunity
```

We can also use below mentioned commands to access the pre release code
```
// Pre-release Versions

php composer.phar create-project --prefer-dist --stability=<alpha or beta or RC> cmsgears/template-community cmgdemocommunity

or

composer create-project --prefer-dist --stability=<alpha or beta or RC> cmsgears/template-community cmgdemocommunity
```

We can also install the template for latest code by cloning Community Template for the pre-release branch i.e. alpha, beta. In this case, we need to install composer.json file to initialise vendor directory.

Server Details
=========================================
1. Apache - If we are using Apache web server, we need to run either of the above mentioned command under Apache web root directory. More details can be found at http://www.cmsgears.org. The modules rewrite and headers must be enabled for apache.

Template Configuration - New
=========================================

1. Create the database, database user and update both the environments config - environments/dev/common/config/config-env.php, environments/prod/common/config/config-env.php. The default database and database user are cmgdemobasic.
2. To trigger real-time mails in production environment, remove the config param 'useFileTransport' from the environments/prod/common/config/config-env.php.
3. Install the DB using all-in-one-d.sql provided within the console/migrations directory. We might need to change database name if it's different than cmgdemobasic.
4. Run the php script init.php to initialize the application for the predefined environments. The script will ask to choose environemnt among prod or dev.
5. Update htaccess located under template root based on your web server needs. More details about live application settings can be found at http://www.cmsgears.org.
6. Download the Admin, Mutisite and Blog Themes and place them under <template root>/themes/admin, <template root>/themes/community and <template root>/themes/blog directories respectively.
7. Now we can run the template using our preferred browser. Example links are as mentioned below.
8. Login to admin and update file upload url in case project name is different.
9. By default all the files uploaded by users will be stored in uploads directory.

```
Frontend - http://localhost/cmgdemocommunity/frontend/web
Admin - http://localhost/cmgdemocommunity/frontend/web
```

Template Configuration - Update
=========================================

We can update the dependencies using composer.json file located at the root of template. Once done the standard composer command can be used to update dependencies.

Default Pages
=========================================

The Blog Theme installed for Community Template provide views for default system pages as listed below.

Public Pages
----------------------------
1. Landing - Site index page.
2. Login - Login page allows users to login.
3. Register - Register page allows users to sign up.
4. Confirm Account - Users can confirm account by following the link sent to their email while submitting Register form.
5. Forgot Password - It can be used to generate password reset link.
6. Reset Password - Users can reset password by following the link sent to their email while submitting Forgot Password form.
7. Activate Account - User accounts added by site admin can be activated using this page.
8. Blog - The blog page shows most recent posts published on site.

Private Pages
----------------------------
1. User Home - Page displayed on login.
2. User Profile - User profile page allows users to configure their profile details.
3. User Settings - Settings page allows users to configure settings icluding account, notifications, reminders.

CMS
----------------------------
1. CMS Page - The published pages can be accessed by site url followed by page slug.
2. CMS Post - The published posts can be accessed by site url followed by post/(post slug).
