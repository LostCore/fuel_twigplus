<?php
/**
 * Created by LostCore
 * Date: 21/03/13
 * Time: 11.29
 */

namespace TwigPlus;

use \Twig_Extension;
use \Twig_Function_Function;
use \Twig_Function_Method;

class TwigPlus extends \Twig_Extension{

    public function getName(){
   		return 'twigplus';
   	}

    public function getFunctions(){
        return array_merge(parent::getFunctions(),array(
           'anchor'             => new Twig_Function_Function('Html::anchor'),
           'get_flash'          => new Twig_Function_Function('Session::get_flash'),
           'write_flash'        => new Twig_Function_Method($this, 'write_flash'),
           'theme_asset_css'    => new Twig_Function_Function('Theme::instance()->asset->css'),
           'theme_asset_js'     => new Twig_Function_Function('Theme::instance()->asset->js'),
           'theme_asset_img'    => new Twig_Function_Function('Theme::instance()->asset->img'),
           'home'               => new Twig_Function_Method($this,'get_home'),
        ));
    }

    public function write_flash($flash){
        return implode('</p><p>', (array) Session::get_flash($flash));
    }

    public function get_home(){
        return \Uri::base(false);
    }
}