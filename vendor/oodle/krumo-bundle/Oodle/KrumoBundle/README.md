KrumoBundle
===========

Hooks for using krumo within Symfony2

Krumo is basically a cascading visual var dump tool.  If you don't know what it is, you can peruse some documentation here: http://krumo.sourceforge.net/

##### NOTE - Built on this fork of krumo:
https://github.com/oodle/krumo

Usage:
------

### php
```php
krumo($something); // Dumps krumo output of that variable from that point
```

### twig
```twig
{{ someVar | krumo }} {# Dumps krumo output of someVar #}
{{ krumo(someVar) }} { # Dumps krumo output of someVar #}
{{ krumo(someVar, [2, 1, 2]) }} {# Dumps krumo output of someVar with collapse settings of [2, 1, 2]
```

Installation:
-------------
Add this line to your composer.json "require" section:

### composer.json
```json
    "require": {
       ...
       "oodle/krumo-bundle": "*"
```

Add this to your AppKernel.php (in the registerBundles() section):

### app/AppKernel.php
```php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        // ...
        new Oodle\KrumoBundle\OodleKrumoBundle()
    }
```

### app/config/routing.yml
```yaml
KrumoBundle:
    resource: "@OodleKrumoBundle/Resources/config/routing/routing.yml"
    prefix:   /
```	

Configuration:
--------------

### config.yml
```yaml
oodle_krumo:
    skin:
        selected: schabalon.com
    css:
        url: /krumo/
    display:
        show_version: true
        show_call_info: true
        cascade: [5,10]
```

#### Parameters

* skin
	* selected
		* (Skin to use for krumo)
* css
	* url
		* (URL for accessing the krumo assets.  Don't modify unless you know what you are doing)
* display
	* show_version
		* (Whether or not to show the krumo version and link at the bottom)
	* show_call_info
		* (Whether or not to show the line number / call info at the bottom)
	* cascade
		* Array of auto-expand options per level (don't use to keep things collapsed by default)
			* Each entry in the array represents a recursion level, at which if there are that number of nodes or less, then it will default to being expanded
		
