<?php
    namespace PQRST;
    use Jenssegers\Blade\Blade;
          
    class RolesController
    {
    
        public function __construct()
        {
    
        }
        public static function index()
        {
            $blade = new Blade(plugin_dir_path( __DIR__ ).'resources/views', plugin_dir_path(__DIR__ ).'storage/cache');
            $roles =  get_editable_roles() ;
            echo $blade->render('roles',compact('roles'));
        } 
    }