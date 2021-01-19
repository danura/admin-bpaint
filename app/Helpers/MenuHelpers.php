<?php 


namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class MenuHelpers{
    public static function Mainmenu(){
        $main_menu  = DB::table('menu_roles')->join('menus','menus.m_id','=','menu_roles.r_menu_id')
        ->select('menus.*')
        ->where('menu_roles.r_roles_id','1')
        ->where('menus.m_parent_id','0')
        ->orderBy('menus.m_order', 'ASC')->get();
        return $main_menu;
    }

    public static function Submenu(){
        $sub_menu  = DB::table('menu_roles')->join('menus','menus.m_id','=','menu_roles.r_menu_id')
        ->select('menus.*')
        ->where('menu_roles.r_roles_id','1')
        ->where('menus.m_parent_id','!=','0')
        ->orderBy('menus.m_order', 'ASC')->get();
        return $sub_menu;
    }
}


