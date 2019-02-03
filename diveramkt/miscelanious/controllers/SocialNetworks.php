<?php namespace Diveramkt\Miscelanious\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class SocialNetworks extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
  
    public $requiredPermissions = [
        'manage_social' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Diveramkt.Miscelanious', 'miscelanious', 'menu-social');
    }
}