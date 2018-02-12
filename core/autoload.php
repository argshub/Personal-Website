<?php

require_once "config.php";


spl_autoload_register(function($calss_name){
   require_once(ROOT.DS."classes".DS.$calss_name.CLS.EXT);
});


set_include_path(implode(PATH_SEPARATOR, [
    realpath(ROOT.DS.CLASSES_DIR),
    realpath(ROOT.DS.CORE_DIR),
    realpath(ROOT.DS.PUBLIC_DIR),
    realpath(ROOT.DS.STYLE_DIR),
    realpath(ROOT.DS.TEMPLATE_DIR),
    realpath(ROOT.DS.MEDIA_DIR),
    get_include_path()
]));



