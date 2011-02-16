[![Support Toolkit](http://www.phpbb.com/theme/images/support/support_toolkit_logo_small.png)](http://www.phpbb.com/support/stk/ "Support Toolkit")

The Support Toolkit (STK) provides a second "Administration Control Panel" that can be used to recover various part of a corrupted phpBB 3.1.x installation or to solve commonly encountered problems with the software. 

http://www.phpbb.com/support/stk/

## Installation
See install.txt for installation instructions.

## Patches
Do you have an improvement? Did you fix a bug? Fork our GitHub repo, make your changes in a separate branch and send a pull request.

## Translations
Have a translation and want to be awesome? See the "Patches".

## Bug Tracker
If you find a bug, please submit it to the [Support Team Tools](http://www.phpbb.com/bugs/supportteamtools/ "Supprt Team Tools") bug tracker. Please make sure that your ticket clearly states that it involves `stk/ascraeus`.

## Git branches
The Support Toolkit is developed in multiple branches although main development is kept in the `stk/ascraeus` branch

## Initialise repository
The Support Toolkit needs copies of phpBB files that it relies on, these files are stored inside the `stk/lib` directory. These files however aren't in the STK repository but are fetched from the official phpBB repositories. Therefore make sure that you run the `update_vendor.sh` script inside the `build/` directory to make sure that all required files are included.

## LICENSE
[GNU General Public License v2](http://opensource.org/licenses/gpl-2.0.php)