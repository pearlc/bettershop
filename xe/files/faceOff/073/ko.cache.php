<?php if(!defined("__ZBXE__")) exit(); $layout_info->site_srl = "0";$layout_info->layout = "yoorim_m_v1";$layout_info->type = "";$layout_info->path = "./m.layouts/yoorim_m_v1/";$layout_info->title = "Yoorim 모바일 레이아웃 v1";$layout_info->description = "
        Yoorim 모바일 레이아웃입니다.
        Yi, Yoorim (yoorimyi@gmail.com)";$layout_info->version = "1.1.0";$layout_info->date = "20110221";$layout_info->homepage = "http://yoorim.me";$layout_info->layout_srl = $layout_srl;$layout_info->layout_title = $layout_title;$layout_info->license = "";$layout_info->license_link = "";$layout_info->layout_type = "M";$layout_info->author[0]->name = "이유림";$layout_info->author[0]->email_address = "yoorimyi@gmail.com";$layout_info->author[0]->homepage = "http://yoorim.me/";$layout_info->extra_var_count = "6";$layout_info->extra_var->colorset->group = "";$layout_info->extra_var->colorset->title = "컬러셋";$layout_info->extra_var->colorset->type = "select";$layout_info->extra_var->colorset->value = $vars->colorset;$layout_info->extra_var->colorset->description = "원하시는 컬러셋을 선택해주세요.";$layout_info->extra_var->colorset->options["wh"]->val = "흰색";$layout_info->extra_var->colorset->options["tq"]->val = "청녹색";$layout_info->extra_var->colorset->options["bu"]->val = "파란색";$layout_info->extra_var->colorset->options["pk"]->val = "분홍색";$layout_info->extra_var->index_title->group = "";$layout_info->extra_var->index_title->title = "홈페이지 Title";$layout_info->extra_var->index_title->type = "text";$layout_info->extra_var->index_title->value = $vars->index_title;$layout_info->extra_var->index_title->description = "";$layout_info->extra_var->logo_image->group = "";$layout_info->extra_var->logo_image->title = "로고이미지";$layout_info->extra_var->logo_image->type = "image";$layout_info->extra_var->logo_image->value = $vars->logo_image;$layout_info->extra_var->logo_image->description = "레이아웃의 상단에 표시될 로고이미지를 입력하세요. (세로길이가 28px인 투명 이미지가 가장 어울립니다)";$layout_info->extra_var->index_url->group = "";$layout_info->extra_var->index_url->title = "홈페이지 URL";$layout_info->extra_var->index_url->type = "text";$layout_info->extra_var->index_url->value = $vars->index_url;$layout_info->extra_var->index_url->description = "로고를 클릭시에 이동할 홈 페이지 URL을 입력해 주세요.";$layout_info->extra_var->copyright->group = "";$layout_info->extra_var->copyright->title = "저작권";$layout_info->extra_var->copyright->type = "text";$layout_info->extra_var->copyright->value = $vars->copyright;$layout_info->extra_var->copyright->description = "";$layout_info->extra_var->view_menu->group = "";$layout_info->extra_var->view_menu->title = "메뉴 보기";$layout_info->extra_var->view_menu->type = "select";$layout_info->extra_var->view_menu->value = $vars->view_menu;$layout_info->extra_var->view_menu->description = "현재 페이지에서 메뉴 레이어 열기 방식은 XE 설치 환경 등에 영향을 받아 오작동할 가능성이 있습니다. 먼저 테스트한 후에 사용해 주세요.";$layout_info->extra_var->view_menu->options["page"]->val = "메뉴 페이지로 이동(기본값)";$layout_info->extra_var->view_menu->options["layer"]->val = "현재 페이지에서 메뉴 레이어 열기";$layout_info->menu_count = "1";$layout_info->default_menu = "main_menu";$layout_info->menu->main_menu->name = "main_menu";$layout_info->menu->main_menu->title = "상단 메뉴";$layout_info->menu->main_menu->maxdepth = "3";$layout_info->menu->main_menu->menu_srl = $vars->main_menu;$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php"; ?>