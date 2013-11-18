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

<!-- CAROUSEL -->
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-color: #CCCCCC;"></div>
            <div class="carousel-caption">
                <h1>
                    <img src="{$img_dir}chrome.png" alt="chrome"> <strong>Important reminder :</strong><br>
                    <br>
                    It is recommanded to use the Google Chrome browser to access Modulo.
                </h1>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-color: #CCCCCC;"></div>
            <div class="carousel-caption">
                <h1>
                    Here we should write some information about Modulo features.<br>
                    <br>
                    Note : What would be good too is to save all of this in the database !
                </h1>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</div>
                
<div id="wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 style="color: red;">Test Loading Module</h1>
                <div id="test_load_module">
                    {foreach $module_zone as $module}
                        {$module}<br>
                    {/foreach}
                </div>
            </div>
        </div>
                
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Welcome !</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <p>
                    Modulo is a common Collaboration and Learning Environment (CLE) in which teachers and students can interact with one another.<br>
                    The main purpose of this CLE is to provide institutions with a powerful and lightweight teaching environment. Moreover, Modulo is Responsive ! Wherever you are, you can keep on working on your stuff with your phone or tablet.<br>
                    Thanks to your web browser, you canc choose among different tools to guide you in building a customized web site.
                </p>
                <p>
                    Teachers can publish courses, create projects and homeworks, set a web page in which student can collaborate to an associative work, ...<br>
                    Students can read courses in which they are registered, upload their projects or homeworks, ...<br>
                    Both can create club page, share timetable, personal note and so on !
                </p>
                <p>
                    Modulo is developped by DNHweb (www.dnhweb.fr).
                </p>
            </div>
        </div>
    </div>
</div>
