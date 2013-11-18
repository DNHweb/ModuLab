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

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('css_url'))
{
    function        css_url($name)
    {
        return (base_url() . 'assets/css/' . $name);
    }

}

if (!function_exists('js_url'))
{
    function        js_url($name)
    {
        return (base_url() . 'assets/js/' . $name);
    }

}

if (!function_exists('font_awesome_url'))
{
    function        font_awesome_url($name)
    {
        return (base_url() . 'assets/font-awesome/' . $name);
    }

}

if (!function_exists('tools_url'))
{
    function        tools_url()
    {
        return (realpath(null) . '/assets/tools/');
    }

}

if (!function_exists('img_url'))
{

    function        img_url($name)
    {
        return (base_url() . 'assets/img/' . $name);
    }

}

if (!function_exists('img'))
{
    function        img($name, $alt = '')
    {
        return ('<img src="' . img_url($name) . '" alt="' . $alt . '" />');
    }

}