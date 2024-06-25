# Youtube Clone

Features
================

 - Login and Registration
 - Email confirmation
 - Upload videos
 - Provide thumbnail, title, description, tags
 - Status of the video: Published or Unlisted
 - Dashboard with analitics: 
    - Latest video
    - Number of total views
    - Number of total subscribers
    - Latest subscribers
 - View videos
 - Leave a like/dislike
 - Find similar videos
 - Channel page
 - View videos only for specific channel
 - Subscribe on channel or unsubscribe
 - Sending email when user subscribes to channel
 - Global search to search videos by title, description or tags
 - History page


Installation
============

## Requirements

The minimum requirement by this project template is that your Web server supports PHP 5.6.0.

## Installing using Composer

##### Clone the repository from github.

    git clone git@github.com:RadinaAvramova/Youtube-Clone_.git [YourDirectoryName]
    
The command installs the project in a directory named `YourDirectoryName`. You can choose a different
directory name if you want.

##### Install dependencies

For this we need composer to be installed on our operating system. 
If you do not have [Composer](http://getcomposer.org/), follow the instructions in the
[Installing Yii](https://github.com/yiisoft/yii2/blob/master/docs/guide/start-installation.md#installing-via-composer) section of the definitive guide to install it.

With Composer installed, navigate to the project folder from command line and run

    composer install


## Preparing application

Follow the steps from [yii2 advanced template](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/start-installation.md#preparing-application)
to prepare installation.

After doing all the steps from [yii2 advanced template](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/start-installation.md#preparing-application)
open `common/config/params-local.php` and add your frontend domain on key `frontendUrl`. 
Example:

```php
return [
    'frontendUrl' => 'http://frontend.test/'
];
```
