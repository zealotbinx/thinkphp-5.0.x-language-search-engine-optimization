<?php
namespace app\core;

use think\Lang;

class Controller extends \think\Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $lang = request()->route('lang');
        if(!empty($lang))
        {
            Lang::load(APP_PATH . 'lang\\'.$lang.'.php');
            
        }
        elseif(empty($lang))
        {
            Lang::load(APP_PATH . 'lang\en.php');
        }
    }
}
?>