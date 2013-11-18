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

if ( ! defined('BASEPATH'))
    exit('No direct script access allowed');

class                           Main_page extends CI_Controller
{

    public function             index()
    {
        $this->tools->views('header');
        $this->_body();
        $this->tools->view('footer');
    }
    
    
    private function            _body()
    {
        $module_folder_list = opendir(_MDL_MODULE_DIR_);
        $module_code = array();
        
        while ($module_folder = readdir($module_folder_list))
        {
            if ($module_folder === '.' || $module_folder === '..')
                continue;
            
            if (file_exists(_MDL_MODULE_DIR_ . $module_folder . '/' . $module_folder . '.php'))
            {
                include_once _MDL_MODULE_DIR_ . $module_folder . '/' . $module_folder . '.php';
                if (class_exists($module_folder, false) )
                {
                    /* Si la methode de la zone existe on lance */
                    if (method_exists($module_folder, 'toString'))
                    {
                        $module = new $module_folder();
                        $module_code[] = $module->toString();
                    }
                }
            }            
        }

        $this->tools->smarty->assign(
            array(
                'module_zone' => $module_code
            )
        );

        $this->tools->views('main_page');
    }
    
}