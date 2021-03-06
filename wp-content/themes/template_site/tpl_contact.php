<?php

/*

Template Name: Page - Contact Us

*/

?>

<?php get_header(); ?>

<div class="breadcrumb_box clearfix">

     <?php templ_page_title_above(); //page title above action hook?>

     <div class="content-title">

      <?php echo templ_page_title_filter(get_the_title()); //page tilte filter?>

     </div>

      <?php templ_page_title_below(); //page title below action hook?>

</div>

 <div class="shadowbox"></div>

<?php

$file = TT_TPL_ROOT_PATH."tpl_contact_page.php";

$arg=array('default'=>'Página com 2 colunas - Sidebar à esquerda');

templ_the_content($file,$arg);

?>

<?php get_footer(); ?>