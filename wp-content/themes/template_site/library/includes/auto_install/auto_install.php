<?php if(get_option('ptthemes_auto_install')=='Não' || get_option('ptthemes_auto_install')=='')

{

	function autoinstall_admin_header()

	{

		global $wpdb;

		if(strstr($_SERVER['REQUEST_URI'],'themes.php') && $_REQUEST['template']=='' && $_GET['page']=='') 

		{

			//update_option("ptthemes_alt_stylesheet",'Padrão');

			if($_REQUEST['dummy']=='del')

			{

				delete_dummy_data();	

				$dummy_deleted = '<p><b>Todos os dados de exemplo foram removidos com sucesso!</b></p>';

			}

			if($_REQUEST['dummy_insert'])

			{

				include_once (TT_INCLUDES_FOLDER_PATH . 'auto_install/auto_install_data.php'); // auto install data file

			}

			if($_REQUEST['activated']=='true')

			{

				$theme_actived_success = '<p class="message">Tema ativado com sucesso.</p>';	

			}

			$post_counts = $wpdb->get_var("select count(post_id) from $wpdb->postmeta where (meta_key='pt_dummy_content' || meta_key='tl_dummy_content') and meta_value=1");

			if($post_counts>0)

			{

				$dummy_data_msg = '<p> <b>Dados de exemplo foram inseridos em seu site. Gostaria de remover os dados de exemplo?</b> <br />  <a class="button_delete" href="'.get_option('siteurl').'/wp-admin/themes.php?dummy=del">Sim, remova por favor.</a><p>';

			}else

			{

				$dummy_data_msg = '<p> <b>Gostaria de auto-instalar este tema e inserir dados de exemplo no seu site? Podem ser necessários para que o site exiba corretamente.</b> <br />  <a class="button_insert" href="'.get_option('siteurl').'/wp-admin/themes.php?dummy_insert=1&dump=1">Sim, insira dados de exemplo por favor.</a></p>';

			}

	

	

			define('THEME_ACTIVE_MESSAGE','

		<style>

		.highlight { width:60% !important; background:#FFFFE0 !important; overflow:hidden; display:table; border:2px solid #558e23 !important; padding:15px 20px 0px 20px !important; -moz-border-radius:11px  !important;  -webkit-border-radius:11px  !important; } 

		.highlight p { color:#444 !important; font:15px Arial, Helvetica, sans-serif !important; text-align:center;  } 

		.highlight p.message { font-size:13px !important; }

		.highlight p a { color:#ff7e00; text-decoration:none !important; } 

		.highlight p a:hover { color:#000; }

		.highlight p a.button_insert 

			{ display:block; width:230px; margin:10px auto 0 auto;  background:#5aa145; padding:10px 15px; color:#fff; border:1px solid #4c9a35; -moz-border-radius:5px;  -webkit-border-radius:5px;  } 

		.highlight p a:hover.button_insert { background:#347c1e; color:#fff; border:1px solid #4c9a35;   } 

		.highlight p a.button_delete 

			{ display:block; width:140px; margin:10px auto 0 auto; background:#dd4401; padding:10px 15px; color:#fff; border:1px solid #9e3000; -moz-border-radius:5px;  -webkit-border-radius:5px;  } 

		.highlight p a:hover.button_delete { background:#c43e03; color:#fff; border:1px solid #9e3000;   } 

		#message0 { display:none !important;  }

		</style>

		

		<div class="updated highlight fade"> '.$theme_actived_success.$dummy_deleted.$dummy_data_msg.'</div>');

			echo THEME_ACTIVE_MESSAGE;

			

		}

	}

	

	add_action("admin_head", "autoinstall_admin_header"); // please comment this line if you wish to DEACTIVE SAMPLE DATA INSERT.



	function delete_dummy_data()

	{

		global $wpdb;

		delete_option('sidebars_widgets'); //delete widgets

		$productArray = array();

		$pids_sql = "select p.ID from $wpdb->posts p join $wpdb->postmeta pm on pm.post_id=p.ID where (meta_key='pt_dummy_content' || meta_key='tl_dummy_content') and meta_value=1";

		$pids_info = $wpdb->get_results($pids_sql);

		foreach($pids_info as $pids_info_obj)

		{

			wp_delete_post($pids_info_obj->ID);

		}

	}

}?>