<?php

namespace andyp\sidebarmenu\acf;

/**
 * Start ACF Initialisation
 */
class acf_init
{

    public function __construct(){
        $this->andyp_plugin_register();
        $this->acf_field_groups();
        $this->acf_admin_menu();
        $this->acf_field_filters();
        
    }

    public function andyp_plugin_register()
    {
        require __DIR__.'/andyp_plugin_register.php';
    }

    public function acf_field_groups()
    {
        require __DIR__.'/acf_field_groups.php';
    }

    public function acf_admin_menu()
    {
        new acf_admin_menu;
    }

    public function acf_field_filters()
    {
        new filters\populate_taxonomy_list;
        new filters\populate_menu_list;
    }

}