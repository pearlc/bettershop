<?php if(!defined("__ZBXE__")) exit(); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = &getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); Context::set('site_module_info',$site_module_info);$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y" || $site_admin) $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } ; $_menu_names[4265] = array("en"=>"menu1","ko"=>"menu1","zh-CN"=>"menu1","jp"=>"menu1","es"=>"menu1","ru"=>"menu1","fr"=>"menu1","zh-TW"=>"menu1","vi"=>"menu1","mn"=>"menu1","tr"=>"menu1",); $_menu_names[4266] = array("en"=>"menu1-1","ko"=>"menu1-1","zh-CN"=>"menu1-1","jp"=>"menu1-1","es"=>"menu1-1","ru"=>"menu1-1","fr"=>"menu1-1","zh-TW"=>"menu1-1","vi"=>"menu1-1","mn"=>"menu1-1","tr"=>"menu1-1",); ; $menu->list = array(4265=>array("node_srl"=>"4265","parent_srl"=>"0","text"=>(true?$_menu_names[4265][$lang_type]:""),"href"=>(true?"":""),"url"=>(true?"":""),"open_window"=>"","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("welcome_page")&&in_array(Context::get("mid"),array("welcome_page"))?1:0),"expand"=>"", "list"=>array(4266=>array("node_srl"=>"4266","parent_srl"=>"4265","text"=>(true?$_menu_names[4266][$lang_type]:""),"href"=>(true?"/bettershop/xe/index.php?mid=welcome_page":""),"url"=>(true?"welcome_page":""),"open_window"=>"","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("welcome_page")&&in_array(Context::get("mid"),array("welcome_page"))?1:0),"expand"=>"", "list"=>array(),  "link"=>(true? ( array("welcome_page")&&in_array(Context::get("mid"),array("welcome_page")) ?$_menu_names[4266][$lang_type]:$_menu_names[4266][$lang_type]):""),),),  "link"=>(true? ( array("welcome_page")&&in_array(Context::get("mid"),array("welcome_page")) ?$_menu_names[4265][$lang_type]:$_menu_names[4265][$lang_type]):""),),); ?>