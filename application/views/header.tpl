{*
* NOTICE OF LICENSE
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
*}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Modulo">
        <meta name="author" content="DNH Web">
        <title>Modulo</title>
        <!-- CSS -->
        {foreach $css_url as $css}
            <link href="{$css}" rel="stylesheet">
        {/foreach}
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{$base_url}">Modulo</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href=""><img src="{$img_dir}information.png" alt="info"> About</a></li>
                        <li><a href=""><img src="{$img_dir}help.png" alt="help"> Help</a></li>
                        <li>
                            <a href="">
                                <input type="button" value="Connection" class="btn-primary">
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>