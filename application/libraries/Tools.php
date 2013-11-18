<?php

/* NOTICE OF LICENSE
 *
 * This source file is subject to a commercial license from DNH Web
 * Use, copy, modification or distribution of this source file without written
 * license agreement from DNH Web is strictly forbidden.
 * In order to obtain a license, please contact us: alexandre@dnhweb.fr
 * ...........................................................................
 * INFORMATION SUR LA LICENCE D'UTILISATION
 *
 * L'utilisation de ce fichier source est soumise a une licence commerciale
 * concedee par la societe DNH Web.
 * Toute utilisation, reproduction, modification ou distribution du present
 * fichier source sans contrat de licence ecrit de la part de DNH Web est
 * expressement interdite.
 * Pour obtenir une licence, veuillez contacter la SARL SMC a l'adresse: 
 *                  alexandre@dnhweb.fr
 * ...........................................................................
 * @copyright  Copyright(c) 2013 DNH Web - http://www.dnhweb.fr
 * @author     Debusschere A.
 * @license    Commercial license
 * Contact by Email :  alexandre@dnhweb.fr
 */

include(tools_url() . 'Smarty/Smarty.class.php');

class                       Tools
{
    private                 $var = array();
    private                 $js_header = array();
    private                 $js_footer = array();
    private                 $css = array();
    public                  $smarty;
    
    public function         __construct()
    {
        // Smarty
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(APPPATH . 'cache/templates');
        $this->smarty->setCompileDir(APPPATH . 'cache/templates_c');
        $this->smarty->setCacheDir(APPPATH . 'cache/cache');
        $this->smarty->setConfigDir(APPPATH . 'cache/configs');
        
        $this->var['output'] = '';
        
        // Main components
        $this->css[] = css_url('bootstrap.css');
        $this->css[] = css_url('modern-business.css');
        $this->css[] = css_url('global.css');
        $this->css[] = font_awesome_url('css/font-awesome.min.css');
        
        
        $this->js_footer[] = js_url('jquery.js');
        $this->js_footer[] = js_url('bootstrap.js');
        $this->js_footer[] = js_url('modern-business.js');
        
        $this->smarty->assign(array(
            'css_url' => $this->css,
            'js_footer_url' => $this->js_footer,
            'base_url' => base_url(),
            'img_dir' => base_url() . 'assets/img/'
        ));
    }
    
    
    private function        _getExtension($file)
    {
        $extension = strrchr($file, '.');
        $extension = substr($extension, 1);
        
        return ($extension);
    }


    public function         view($file = null)
    {
        if ($file)
        {
            if (!$this->_getExtension($file))
                $this->var['output'] .= $this->smarty->fetch(APPPATH . 'views/' . $file . '.tpl');
            else
                $this->var['output'] .= $this->smarty->fetch(APPPATH . 'views/' . $file);
            echo $this->var['output'];
        }
        else
            return (false);
    }
    
    
    public function         views($file = null)
    {
        if ($file)
        {
            if (!$this->_getExtension($file))
                $this->var['output'] .= $this->smarty->fetch(APPPATH . 'views/' . $file . '.tpl');
            else
                $this->var['output'] .= $this->smarty->fetch(APPPATH . 'views/' . $file);
        }
        else
            return (false);
    }
    
}