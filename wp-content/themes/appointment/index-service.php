<?php 
$appointment_options=theme_setup_data(); 
$service_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if($service_setting['service_section_enabled'] == 0 ) { ?>
<div class="Service-section">
	<div class="container">
        <div class="row">
			<div class="col-md-12">
			
				<div class="section-heading-title">
					<h1> <?php echo $service_setting['service_title']; ?></h1>
					<p><?php echo $service_setting['service_description']; ?> </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_one_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_one_title']; ?></h3>
							<p><?php echo $service_setting['service_one_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_two_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_two_title']; ?></h3>
							<p><?php echo $service_setting['service_two_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_three_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_three_title']; ?></h3>
							<p><?php echo $service_setting['service_three_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_four_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_four_title']; ?></h3>
							<p><?php echo $service_setting['service_four_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_five_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_five_title']; ?></h3>
							<p><?php echo $service_setting['service_five_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa <?php echo $service_setting['service_six_icon']; ?>"></i>
						</div>
						<div class="media-body">
							<h3><?php echo $service_setting['service_six_title']; ?></h3>
							<p><?php echo $service_setting['service_six_description']; ?></p>
						</div>
					</div>
				</div>
			</div>
            <!-- Atividades 2017 -->
		<div class="row">
			<div class="col-md-12" style="border-top:solid 1px #eeeeee;">
			
				<div class="section-heading-title">
					<h1 style="margin-top:30px;">Agenda das Atividades 2017</h1>
				</div>
			</div>
		</div>
		
        <div class="row">
            <div class="col-md-12">
                <?php
                    $dia  = date('d');    
                    $mes  = date('m');
    
                    if($mes == '01'){
                       $agendaMes = 'JANEIRO'; 
                    }elseif($mes == '02'){
                        $agendaMes = 'FEVEREIRO';
                    }elseif($mes == '03'){
                        $agendaMes = 'MARÇO';
                    }elseif($mes == '04'){
                        $agendaMes = 'ABRIL';
                    }elseif($mes == '05'){
                        $agendaMes = 'MAIO';
                    }elseif($mes == '06'){
                        $agendaMes = 'JUNHO';
                    }elseif($mes == '07'){
                        $agendaMes = 'FEVEREIRO';
                    }elseif($mes == '08'){
                        $agendaMes = 'FEVEREIRO';
                    }elseif($mes == '09'){
                        $agendaMes = 'FEVEREIRO';
                    }elseif($mes == '10'){
                        $agendaMes = 'FEVEREIRO';
                    }elseif($mes == '11'){
                        $agendaMes = 'FEVEREIRO';
                    }else{
                        $agendaMes = 'FEVEREIRO';
                    }    
                ?>
                <div class="col-md-12">
                    <?php?>
                    <div class="col-md-2">
                        <svg style="height:160px;">
                            <style type="text/css">
                                .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#000058;}
                                .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#FDFDFD;}
                                .st2{fill:#000058;}
                                .st3{font-family:'Arial-BoldMT';}
                                .st4{font-size:19.6214px;}
	                           .st5{font-size:49.7006px;}
                            </style>
                                <path class="st0" d="M26.9,27.4h2.5c0,1,0,1.9,0,2.7c0,7.4-0.2,15.9,8.4,15.5c8.6-0.4,7.7-8.7,7.7-16.3c0-0.6,0-1.3,0-1.8h72.6
                                        c0,1,0,1.9,0,2.7c0,7.4-0.2,15.9,8.4,15.5c8.6-0.4,7.7-8.7,7.7-16.3c0-0.6,0-1.2,0-1.8c8.9,0.8,16,8.3,16,17.4v89.7
                                c0,9.6-7.9,17.5-17.5,17.5h-106c-9.6,0-17.5-7.9-17.5-17.5V44.9C9.4,35.3,17.3,27.4,26.9,27.4z"/>
                            <path class="st1" d="M142.2,58l-125-0.2c-0.4,8.3-0.6,69.1,0.3,73.6c2.4,11.6,11.4,12.9,24,12.9l75.4,0c12.9,0,21.8-0.7,24.7-12.2
                                C143.6,124.5,142.6,69.5,142.2,58z"/>
                            <path class="st0" d="M39.4,10.8h-3.7c-2.5,2.1-4.1,2.3-4.7,6.7c-0.4,2.9-0.1,8.4-0.1,11.6c0,7.4-0.2,15.9,7,15.5
                                c7.1-0.4,6.4-8.7,6.4-16.3C44.2,17,45.7,16.2,39.4,10.8z"/>
                            <path class="st0" d="M128.1,10.6c-3.9,0-7.4,0.9-8.2,6.7c-0.4,2.9-0.1,8.4-0.1,11.6c0,7.4-0.2,15.9,6.8,15.5
                                c6.9-0.4,6.2-8.7,6.2-16.3C132.8,16.8,134.2,16,128.1,10.6z"/>
                            <text transform="matrix(0.9989 0 0 1 36.9385 88.8438)"><tspan x="0" y="0" class="st2 st3 st4"><?php echo $agendaMes;?></tspan></text>
                            <text transform="matrix(0.9989 0 0 1 52.4746 134.7251)"><tspan x="0" y="0" class="st2 st3 st5"><?php echo $dia;?></text>
                        </svg>
                    </div>
                    <div class="col-md-9" style="padding-top:40px;">
                        <p>Início das atividades, <b>Interno</b></p>
                        <a href="#" class="slide-btn-sm">Saiba mais </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!--fim atividade-->
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- /HomePage Service Section -->
<?php } ?>