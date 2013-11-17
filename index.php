<?php

define('_IK_MODULE_DIR_', 'modules/');

$module_folder_list = opendir(_IK_MODULE_DIR_);
while ($module_folder = readdir($module_folder_list))
{
    if ($module_folder == '.' || $module_folder == '..')
        continue;
    
    if (file_exists(_IK_MODULE_DIR_ . $module_folder . '/' . $module_folder . '.php'))
    {
        include_once _IK_MODULE_DIR_ . $module_folder . '/' . $module_folder . '.php';
        if (class_exists($module_folder, false))
        {
            $module = new $module_folder();
            $module->toString();
        }
    }
}