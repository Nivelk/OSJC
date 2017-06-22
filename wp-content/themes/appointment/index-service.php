<?php 
$appointment_options=theme_setup_data(); 
$service_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if($service_setting['service_section_enabled'] == 0 ) { ?>
<div class="Service-section">
	<div class="container">
	<!-- Atividades 2017 -->
		<div class="row">
			<div class="col-md-12">
			
				<div class="section-heading-title">
					<h1>Agenda das Atividades 2017</h1>
				</div>
			</div>
		</div>
		
        <div class="row">
            <div class="col-md-12" style="border-bottom:solid 1px #eeeeee;margin-bottom:30px;">
                
				<div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>Fevereiro</h3>
                                <p>Início das atividades, <b>Interno</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>Fevereiro</h3>
                                <p>Festa de Canaval, <b>Interno</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>08 / Março</h3>
                                <p>Dia internacional da Mulher, <b>Interno</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>Março</h3>
                                <p>Reunião de pais CEIs Estrela da manhã, Monsenhor, CCA, <b>Sede OSJC</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>20 / Março</h3>
                                <p>Chá beneficiente, <b>Terraço Itália</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>13 / Abril</h3>
                                <p>Trade Pascal, <b>Sede OSJC</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>A combinar</h3>
                                <p>Batizado & Troca de cordade capoeira, <b>CEU Parque Bristol</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>28 / Abril</h3>
                                <p>Dia da Panqueca, <b>Sede OSJC</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>05 / Maio</h3>
                                <p>Avaliação dia da panqueca, <b>Diretoras</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>12 / Maio</h3>
                                <p>Festa da família comemoração dia das mães, <b>CEU parque Bristol</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>06 / Junho</h3>
                                <p>Festa Junina, <b>Sede OSJC</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>14 / Junho</h3>
                                <p>Reunião de avaliação da festa junina, <b>Sede OSJC</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>A combinar</h3>
                                <p>Missa sagrado coração de jesus, <b>Igreja</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>Julho</h3>
                                <p>Programação de férias / Recesso 08 a 23 / Julho CEIs , <b>Interno</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>11 / Agosto</h3>
                                <p>Festa da Família, <b>Interno</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>23 / Setembro</h3>
                                <p>Festa da Nações, <b>Sede OSJC</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>Outubro</h3>
                                <p>Passeio à aparecida da norte, <b>Externo</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>Novembro</h3>
                                <p>Ensaios e preparação da festa natalina, <b>Interno</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>24 / Novembro</h3>
                                <p>Evento: Nhoque da sorte, <b>Sede OSJC</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>09 / Dezembro</h3>
                                <p>Festa do Wilson, <b>Sede OSJC</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>15 / Dezembro</h3>
                                <p>Sacolinhas de natal, <b>Interno</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>15 / Dezembro</h3>
                                <p>Apresentação de natal das Crianças e Adolescentes, <b>CEU parque Bristol</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="service-area">
                        <div class="media">
                            <div class="service-icon">
                               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>20 / Dezembro</h3>
                                <p>Confraternização Buffet - CCA e CEIs, <b>Externo</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!--fim atividade-->
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
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- /HomePage Service Section -->
<?php } ?>