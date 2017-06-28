<?php
   require_once "vendor/autoload.php";
    $calendario = new Osjc\classes\Agenda(date('d'),date('m'));
   
?>
<div class="col-md-2">             
    <svg style="height:170px;">
    <style type="text/css">
        .st0{fill:#FFFFFF;stroke:#EDEEF0;stroke-miterlimit:10;}
        .st1{fill:#FF3F5B;stroke:#FF3366;stroke-miterlimit:10;}
        .st2{fill:#FFFFFF;stroke:#FF3366;stroke-miterlimit:10;}
        .st3{fill:#EDEEF0;stroke:#EDEEF0;stroke-miterlimit:10;}
        .st4{fill:#444242;}
        .st5{font-family:'MyriadPro-Regular';}
        .st6{font-size:91.0038px;}
        .st7{font-size:25.0606px;}
    </style>
    <path class="st0" d="M148.1,162H15.9c-7,0-12.7-5.7-12.7-12.7V48.6h157.7v100.7C160.8,156.3,155.1,162,148.1,162z"/>
    <g>
        <path class="st1" d="M155.4,6.4H8.5c-3,0-5.4,2.4-5.4,5.4v36.7h157.7V11.9C160.8,8.9,158.4,6.4,155.4,6.4z M30.7,34.2
            c-4.1,0-7.4-3.3-7.4-7.4s3.3-7.4,7.4-7.4s7.4,3.3,7.4,7.4S34.8,34.2,30.7,34.2z M130.9,34.9c-4.1,0-7.4-3.3-7.4-7.4
            c0-4.1,3.3-7.4,7.4-7.4c4.1,0,7.4,3.3,7.4,7.4C138.3,31.6,135,34.9,130.9,34.9z"/>
        <circle class="st2" cx="30.7" cy="26.8" r="7.4"/>
        <circle class="st2" cx="130.9" cy="27.5" r="7.4"/>
    </g>
    <rect x="3.1" y="48.6" class="st3" width="157.7" height="53.8"/>
    <text transform="matrix(1 0 0 1 33.356 150.1333)" class="st4 st5 st6"><?php echo $calendario->dia; ?></text>
    <text transform="matrix(1 0 0 1 38.1396 75.439)" class="st4 st5 st7"><?php  $calendario->Mes(); ?></text>
    </svg>
</div>
<div class="col-md-5" style="padding-top:30px;">
    <?php $calendario->Agendamento();?>
    <a href="#" class="slide-btn-sm">Saiba mais </a>
</div>
<div class="col-md-5">
    <img src="<?php echo get_template_directory_uri() . '/images/agenda-imagens/imagen.jpg'; ?>" />
</div>