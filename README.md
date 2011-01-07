#  wolf-elFinder [http://github.com/devi/wolf-elFinder](http://github.com/devi/wolf-elFinder)

[elFinder](http://elrte.org/elfinder) plugin for [Wolf CMS](http://wolfcms.org).

## Intergration with other plugins

### [tinyMCE plugin](https://github.com/mvdkleijn/tinymce)

add this script into tiny_init.php:
        
    file_browser_callback : function(field_name, url, type, win) {      
       var w = window.open("http://your.domain/elfinder/tinymce", null, "width=750,height=530");
       w.tinymceFileField = field_name;
       w.tinymceFileWin = win;
    }

## Changelog:

### v.1.0.0 : January 8th, 2010 - Initial release

## License:

Major components:

* Wolf CMS: GPLv3 license
* elFinder: 3-clauses BSD license
* jQuery: MIT/GPL license
* jQuery-UI: MIT/GPL license

Everything else:

* [The Unlicense](http://unlicense.org) (aka: public domain)
