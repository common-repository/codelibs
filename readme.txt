=== CodeLibs ===
Contributors: agnelwaghela
Donate link: 
Tags: agnelwaghela, codelibs, code libraries, filer, Geo location javascript, impress, javascript, js, jQuery, jQueryui, dojo, ext-core, modernizr, mootools, prototype, scriptaculous, swfobject, uri, webfontloader, yui
Requires at least: 3.2.1
Tested up to: 3.3.1
Stable tag: 1.3

A simple plugin to add javascripts to your plugin or the theme. Useful for development work!

== Description ==

Most people either download or use google hosted js.
But now you have all js. Add any js to your plugin or theme as per your requirements.
Just two lines of code and add any version of any js. This plugin has all the version of the following :-

*  ChromeFrame
*  Dojo
*  Ext-Core
*  jQuery
*  jQueryUI
*  MooTools
*  ProtoType
*  Scriptaculous
*  SWFObject
*  WebFontLoader
*  YUI(only version 3.3.0)

**Latest Additions to this plugin:-**

* **[Form2JS](https://github.com/maxatwork/form2js)**
* **[Geo Location](http://code.google.com/p/geo-location-javascript)**
* **[Modernizr.js](http://www.modernizr.com)**
* **[URI.js](https://github.com/medialize/URI.js)**
* **[Impress.js](https://github.com/bartaz/impress.js)**
* **[Filer.js](https://github.com/ebidel/filer.js)**

*None of the js will be added even after the plugin is activated. You'll have to do this manually. Check the [Installation](http://wordpress.org/extend/plugins/codelibs/installation/) if you dont understand what i mean!*

**Many More scripts will be added to this plugin in the later versions**

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `codelibs` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php include(ABSPATH."/wp-content/plugins/codelibs/func.php");
				CodeLibs('scriptname', 'version'); ?>` in your templates.
				


**List of Keywords i.e scriptnames that you can use it(in any case viz lowercase or uppercase) to call CodeLibs()**

* Script               - keyword
* ChromeFrame          - chromeframe
* Dojo                 - dojo
* Ext-core             - ext-core
* Filer                - filer
* Form2JS              - form2js
* Geo Location         - geo
* Impress              - impress
* jQuery               - jquery
* jQueryUI             - jqueryui
* Modernizr            - modernizr
* MooTools             - mootools
* ProtoType            - prototype
* Script.aculo.us      - scriptaculous
* SWFOject             - swfobject
* URI                  - uri
* WebFontLoader        - webfontloader
* YUI                  - yui


*MarkUp to add scripts:-*

CodeLibs is a collection of all the necessary js required for development purposes.
With this plugin in your blog you can use any js framework for development.
And whenever you feel like you can just copy that js to your theme's or plugin's js folder.
If Your plugin or theme is completely dependent on this plugin then you can ask your theme or plugin user to download this plugin as well.
This plugin is created for meeting the development needs.

CodeLibs() is a Function Located in func.php file in the codelibs plugin.
We are just including it and calling as many times as we want. 
Once you have included you can just call CodeLibs() any number of times with valid parameters.

* just do this -

`<?php include(ABSPATH."/wp-content/plugins/codelibs/func.php");
CodeLibs('scriptname', 'version'); ?>`
				
* or if you dont know the latest version no. just do this -

`<?php include(ABSPATH."/wp-content/plugins/codelibs/func.php");
CodeLibs('scriptname', 'latest'); ?>`


* For Example, For your project if you want latest version of jQuery then do this - 

`<?php include(ABSPATH."/wp-content/plugins/codelibs/func.php");
CodeLibs('jQuery', '1.7.1'); ?>`

OR

`<?php include(ABSPATH."/wp-content/plugins/codelibs/func.php");
CodeLibs('jQuery', 'latest'); ?>`

* To Add more than one library use this simply as - 

`<?php include(ABSPATH."/wp-content/plugins/codelibs/func.php"); // just once
CodeLibs('jQuery', 'latest');
...
...
CodeLibs('jQueryUI','latest');
...
...
CodeLibs('URI','latest');`

* Any question, then contact me at [AgnelWaghela](http://twitter.com/agnel_waghela)

== Frequently Asked Questions ==

= No Question? =

Because, Its the 1st release.

== Changelog ==


= 1.3 =
* Added [Form2JS](https://github.com/maxatwork/form2js)

= 1.2 =
* Added [Geo Location Javascript](http://code.google.com/p/geo-location-javascript)

= 1.1 =
* Added the Best frameworks.

**Latest Additions to this plugin:-**

* [Modernizr.js](http://www.modernizr.com)
* [URI.js](https://github.com/medialize/URI.js)
* [Impress.js](https://github.com/bartaz/impress.js)
* [Filer.js](https://github.com/ebidel/filer.js)

= 1.0 =
* 1st Release.

== Arbitrary section ==

**Latest Additions to this plugin:-**

* **[Form2JS](https://github.com/maxatwork/form2js)**
* **[Geo Location](http://code.google.com/p/geo-location-javascript)**
* **[Modernizr.js](http://www.modernizr.com)**
* **[URI.js](https://github.com/medialize/URI.js)**
* **[Impress.js](https://github.com/bartaz/impress.js)**
* **[Filer.js](https://github.com/ebidel/filer.js)**

MarkUp to add scripts:-

**List of Keywords i.e scriptnames that you can use it(in any case viz lowercase or uppercase) to call CodeLibs()**

* Script               - keyword
* ChromeFrame          - chromeframe
* Dojo                 - dojo
* Ext-core             - ext-core
* Filer                - filer
* Form2JS              - form2js
* Geo Location         - geo
* Impress              - impress
* jQuery               - jquery
* jQueryUI             - jqueryui
* Modernizr            - modernizr
* MooTools             - mootools
* ProtoType            - prototype
* Script.aculo.us      - scriptaculous
* SWFOject             - swfobject
* URI                  - uri
* WebFontLoader        - webfontloader
* YUI                  - yui

* just do this -

`<?php include(ABSPATH."/wp-content/plugins/codelibs/func.php");
CodeLibs('scriptname', 'version'); ?>`
				
* or if you dont know the latest version no. just do this -

`<?php include(ABSPATH."/wp-content/plugins/codelibs/func.php");
CodeLibs('scriptname', 'latest'); ?>`

* For Example, For your project if you want latest version of jQuery then do this - 

`<?php include(ABSPATH."/wp-content/plugins/codelibs/func.php");
CodeLibs('jQuery', '1.7.1'); ?>`

OR

`<?php include(ABSPATH."/wp-content/plugins/codelibs/func.php");
CodeLibs('jQuery', 'latest'); ?>`

* To Add more than one library use this simply as - 

`<?php include(ABSPATH."/wp-content/plugins/codelibs/func.php"); // just once
CodeLibs('jQuery', 'latest');
...
...
CodeLibs('jQueryUI','latest');
...
...
CodeLibs('URI','latest');`

* Any question, then contact me at [AgnelWaghela](http://twitter.com/agnel_waghela)