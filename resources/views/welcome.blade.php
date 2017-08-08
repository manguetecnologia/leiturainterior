	<!doctype html>
	<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Leitura Interior</title>
		<link href="https://fonts.googleapis.com/css?family=Raleway|Yanone+Kaffeesatz" rel="stylesheet">
		<link href="{{ URL::asset('css/app.css')}}" rel="stylesheet">
		<script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
		rel="stylesheet">

	</head>

	<body>

		<header>
			<div class="topo" id="topo">
				<div class="container">
					<div class="logo">

						<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcST1o6gfe7mL9whE6K1cqpn-UufYazZso_pUCpgidRK3AX0XLzQEIv3AFk" class="img-responsive">
					</div>
					<div class="opcao_menu">
						<nav style="margin-top: 10px;">
							<ul>
								<li><a href="#banner">Início</a></li>
								<li><a href="#sobre">Sobre</a></li>
								<li><a href="#servicos">Serviços</a></li>
								<li><a href="#contato">Contato</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

		</div>

		<main>
			<div class="banner" id="banner" >
				<div class="container">
					<div class="col-md-6">
						<div class="titulo_banner">Qualidade e Satisfação</div>
						<div class="texto_banner">Resultados que geram oportunidades para o seu produto</div>
					</div>
				</div>
			</div>

			<div class="sobre" id="sobre">
				<div class="sobre_titulo_fundo">Sobre</div>
				<div class="container">
					<div class="col-md-12">
						<div id="sobre_header">
							<h1 class="sobre_titulo">Sobre</h1>
						</div>
					</div>
					<div class="col-md-6 sobre_texto"><p>A Leitura Interior Consultores Associados é uma empresa de recrutamento e coordenação de pesquisas qualitativas e quantitativas que atua nas regiões Norte e Nordeste.</p>

						<p>Com sede no Recife, atua, desde 2003, sob a direção de Fernanda Correia e Lúcia Correia, profissionais com ampla expertise no setor.</p>

						<p>Com atendimento especializado, a Leitura oferece suporte técnico e de pesquisa com vistas à obtenção de resultados que possam gerar novas oportunidades para os clientes. Tudo isso, por meio de uma metodologia inovadora que alia estratégias arrojadas e conhecimento do mercado. </p>
					</div>
					<div class="col-md-6">.col-md-6 carrossel lateral</div>
				</div>
			</div>

			<div class="servicos" id="servicos">
				<div class="servicos_titulo_fundo">Serviços</div>

				<div class="container">
					<div id="servicos_titulo_header"><h1 class="servicos_titulo">Serviços</h1></div>
					<div class="row">
						<div class="col-md-6">
							<div class="servicos_folder_up">
								<div class="servicos_titulo_do_servico">RECRUTAMENTO QUALITATIVO
									<div class="servico_texto">Para discussões em grupo, entrevistas em profundidade, estudos etnográficos (com visita in home) e de moderação, assim como cliente oculto;
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="servicos_folder_up">
								<div class="servicos_titulo_do_servico">PESQUISA QUALITATIVA

									<div class="servico_texto">A pesquisa qualitativa tem caráter exploratório: estimulando entrevistados a pensar e falar livremente sobre alguns temas, objetos ou conceitos.</div>

								</div>

							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="servicos_folder_down">
								<div class="servicos_titulo_do_servico">EQUIPE DE ENTREVISTADORES

									<div class="servico_texto">Prioriza apontar numericamente a frequência e a intensidade de comportamentos dos indivíduos de um determinado grupo ou população).</div>

								</div>
							</div>
						</div>
						<div class="col-md-6">	
							<div class="servicos_folder_down">
								<div class="servicos_titulo_do_servico">LOCAÇÃO DE SALAS

									<div class="servico_texto">Serviço disponibiliza gravação áudio e vídeo e transmissão via TV Link. Estrutura grande para realizações das pesquisas de Focus Group, com duas salas de espelhos podendo fazer grupos simultâneos, transmissão via TV link, transmissão via Focus Vision.
									</div>

								</div>
							</div>
						</div>
					</div>          
				</div>
			</div>

			<div class="clientes">
				<div class="clientes_titulo_fundo">Clientes</div>
				<div class="container">
					<h1 class="clientes_titulo">Clientes</h1>

					<script type="text/javascript">
						$(document).ready(function(){
							$('.owl-carousel').owlCarousel({

								loop:true,
								margin:150,
								items: 4,
								nav:true,
								center: false,
								dots:false,
								navText: [
								"<div class='arrow'><div class='arrow-circulo'><i class='material-icons'>arrow_back</i></div></div>",
								"<div class='arrow'><div class='arrow-circulo'><i class='material-icons'>arrow_forward</i></div></div>"
								],
								responsive:{

									0:{

										items: 1
									},

									600:{

										items: 2

									},

									1000:{

										items: 4

									}


								}




							})


						});

					</script>

					<div class="galeria_clientes">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<img src="{{ URL::asset('img/dbzlogo.gif')}}">
								<div class="overlay">
									<div class="text_banner_cliente"><button onclick="chama_function()">Visitar</button></div>
								</div>
							</div>
							<div class="item">
								<img src="{{ URL::asset('img/dbzlogo.gif')}}">
								<div class="overlay">
									<div class="text_banner_cliente">Visitar</div>
								</div>
							</div>
							<div class="item">
								<img src="{{ URL::asset('img/dbzlogo.gif')}}">
								<div class="overlay">
									<div class="text_banner_cliente">Visitar</div>
								</div>
							</div>
							<div class="item">
								<img src="{{ URL::asset('img/dbzlogo.gif')}}">
								<div class="overlay">
									<div class="text_banner_cliente">Visitar</div>
								</div>
							</div>
							<div class="item">
								<img src="{{ URL::asset('img/dbzlogo.gif')}}">
								<div class="overlay">
									<div class="text_banner_cliente">Visitar</div>
								</div>
							</div>
							<div class="item">
								<img src="{{ URL::asset('img/dbzlogo.gif')}}">
								<div class="overlay">
									<div class="text_banner_cliente">Visitar</div>
								</div>
							</div>
							<div class="item">
								<img src="{{ URL::asset('img/dbzlogo.gif')}}">
								<div class="overlay">
									<div class="text_banner_cliente">Visitar</div>
								</div>
							</div>
							<div class="item">
								<img src="{{ URL::asset('img/dbzlogo.gif')}}">
								<div class="overlay">
									<div class="text_banner_cliente">Visitar</div>
								</div>
							</div>
							<div class="item">
								<img src="{{ URL::asset('img/dbzlogo.gif')}}">
								<div class="overlay">
									<div class="text_banner_cliente">Visitar</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contato" id="contato">
		<div class="container">
			<div id="titulo_contato">
				<h1 class="contato_titulo">Contato</h1>
			</div>
			<div class="contato_texto">
				<h2>Seu Contato é muito importante para nós! <br>Nos envie sua dúvida, deixe sua crítica ou elogios</h2>
			</div>

			<div class="contato_atendimento">
				<p>Atendimento: Segunda a sexta, das 09:00 às 18:00h.</p>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="campo_de_preenchimento">
						<form>
							<label>
								<input type="text" name="seunome" placeholder="Seu Nome"><br>
							</label>
							<label>
								<input type="text" name="telefone" placeholder="Telefone"><br>
							</label>
							<label>
								<input type="text" name="assunto" placeholder="Assunto"><br>
							</label>
							<label>
								<textarea id="mensagem" placeholder="Mensagem"></textarea></label>
								<label>
									<button type="submit" class="button_contato">Enviar</button>
								</label>
							</form>
						</div>

					</div>
					<div class="col-md-6">
						<style type="text/css">iframe{ margin-left: 100px; margin-top: 80px; }</style>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31597.684278653654!2d-34.91551263114035!3d-8.130923925396246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f0bc42e306d%3A0x2bf385bd7cec6239!2sPraia+de+Boa+Viagem!5e0!3m2!1spt-BR!2sbr!4v1501686981872" width="550" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>

					</div>
				</div>
			</div>
		</div>

	</main>

	<div class="rodape">
		<div class="container">

			<div class="row">
				<div class="col-md-4">	<div class="texto_rodape_endereco"><p>Rua Luiz Barbalho, 149 | Boa Vista - Recife / PE | 50070-120 +55 (81) 3421.3732 | contato@leiturainterior.com.br</p></div></div>
				<div class="col-md-4">	<div class="seta_rodape">

					<a href="#banner"><i class="material-icons">keyboard_arrow_up</i></a>

				</div></div>
				<div class="col-md-4">	<div class="texto_rodape_desenvolvedora">Desenvolvido pela <b>Mangue Tecnologia</b></div></div>

			</div>

		</div>
	</div>
</body>
</html>
