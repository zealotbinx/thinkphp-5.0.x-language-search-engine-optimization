<?php
namespace app\index\controller;

use think\Lang;

class Index extends \app\core\Controller
{
    public function index()
    {
        $lang = request()->route('lang');
        if(!empty($lang))
        {
            $lang = '/'.$lang;
        }
        else
        {
            $lang = '';
        }
        
        return $this->fetch('index',['lang'=>$lang]);
    }

    public function lang()
    {
        $lang = request()->route('lang');

        if(!empty($lang))
        {
            Lang::load(APP_PATH . 'lang\\'.$lang.'.php');
            $this->redirect('/'.$lang.'/index/index/index');
        }
        elseif(empty($lang))
        {
            Lang::load(APP_PATH . 'lang\en.php');
            $this->redirect('/index/index/index');
        }
    }
}
