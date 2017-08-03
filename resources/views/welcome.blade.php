	    <!doctype html>
	    <html lang="{{ app()->getLocale() }}">
	    <head>
	    	<meta charset="utf-8">
	    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    	<meta name="viewport" content="width=device-width, initial-scale=1">

	    	<title>Laravel</title>

	    	<!-- Fonts -->
	    	<!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"-->
	    	<link href="https://fonts.googleapis.com/css?family=Raleway|Yanone+Kaffeesatz" rel="stylesheet">
	    	<link href="{{ URL::asset('css/app.css')}}" rel="stylesheet">
	    	<link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
	    	<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>


	    	<!-- Styles -->
	            <!--style>
	                html, body {
	                    background-color: #fff;
	                    color: #636b6f;
	                    font-family: 'Raleway', sans-serif;
	                    font-weight: 100;
	                    height: 100vh;
	                    margin: 0;
	                }

	                .full-height {
	                    height: 100vh;
	                }

	                .flex-center {
	                    align-items: center;
	                    display: flex;
	                    justify-content: center;
	                }

	                .position-ref {
	                    position: relative;
	                }

	                .top-right {
	                    position: absolute;
	                    right: 10px;
	                    top: 18px;
	                }

	                .content {
	                    text-align: center;
	                }

	                .title {
	                    font-size: 84px;
	                }

	                .links > a {
	                    color: #636b6f;
	                    padding: 0 25px;
	                    font-size: 12px;
	                    font-weight: 600;
	                    letter-spacing: .1rem;
	                    text-decoration: none;
	                    text-transform: uppercase;
	                }

	                .m-b-md {
	                    margin-bottom: 30px;
	                }
	            </style-->
	        </head>

	        <body>




<header>
   <div class="topo" id="topo">
      <div class="container">
         <div class="logo">
            <!-- só se usa quando quer dividir algo então não é preciso use uma ancora em vez falta a classe img responsive na logo -->
            <!-- <div class="col-md-4"> -->
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcST1o6gfe7mL9whE6K1cqpn-UufYazZso_pUCpgidRK3AX0XLzQEIv3AFk" class="img-responsive">
            <!-- </div> -->
         </div>
         <div class="opcao_menu">
            <nav style="margin-top: 10px;">
               <ul>
                  <li><a href="#topo">Início</a></li>
                  <li><a href="#sobre">Sobre</a></li>
                  <li><a href="#servicos">Serviços</a></li>
                  <li><a href="#contato">Contato</a></li>
               </ul>
            </nav>
         </div>
      </div>
</header>




	        	<!--header>
   

   <div class="topo" id="topo">
   <div class="container">
      <div class="logo img-responsive">
      
            <img src="{{ asset('img/logo.png') }}
              ">
       
      </div>
      <div class="opcao_menu">
         <nav>
            <ul>
               <li><a href="#topo">Início</a></li>
               <li><a href="#sobre">Sobre</a></li>
               <li><a href="#servicos">Serviços</a></li>
               <li><a href="#contato">Contato</a></li>
            </ul>
         </nav>
      </div>
   </div>
</header-->

	       <!--header>
               
                <div class="topo" id="topo">
 
 
                    <div class="container">
 
                        <div class="logo img-responsive">
                            <div class="col-md-4">
                               
                                <img src="{{ asset('img/logo.png') }}
">
 
                            </div>
                        </div>
 
                        <div class="opcao_menu">
                            <nav>
                            <ul>
                                <li><a href="#topo">Início</a></li>
                                <li><a href="#sobre">Sobre</a></li>
                                <li><a href="#servicos">Serviços</a></li>
                                <li><a href="#contato">Contato</a></li>
                            </ul>
                            </nav>
                        </div>
 
 
 
                    </div>
                    </header-->




	                   <!--a href="#home">Home</a>
	                    <a href="#news">News</a>
	                    <a href="#contact">Contact</a-->
	                    
	                            <!--div class="col-md-4">.col-md-4 - logo</div>
	                            <div class="col-md-2">Início</div></div>
	                            <div class="col-md-2">Sobre</div>
	                            <div class="col-md-2">Serviços</div>
	                            <div class="col-md-2">Contato</div-->
	                           

	                       




	                    </div>

	                    <main>
	                    	<div class="banner" >

	                    		<!--h1>banner com carrossel (não tem container)</h1-->
	                    		<div class="container">
	                    			<div class="col-md-6">

	                    				<div class="titulo_banner">Qualidade e Satisfação</div>
	                    				<div class="texto_banner">Resultados que geram oportunidades para o seu produto</div>

	                    			</div>

	                    		</div>

	                    	</div>


	                    	<div class="sobre" id="sobre">


	                    	<div class="sobre_titulo_fundo">

	                    					Sobre

	                    				</div>


	                    		<div class="container">

	                    			<div class="col-md-12">
	                    				<div class="sobre_titulo">

	                    					<h1>Sobre</h1>

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


	                    		<div class="servicos_titulo_fundo">

	                    					Serviços

	                    				</div>

	                    		<div class="container">

	                    			<h1>Serviços</h1>

	                    			<div class="row">
	                    				<div class="col-md-6">
	                    					<div class="servicos_sobre">Serviço 1</div>


	                    				</div>
	                    				<div class="col-md-6">

	                    					<div class="servicos_sobre">Serviço 2</div>

	                    				</div>
	                    			</div>

	                    			<div class="row">
	                    				<div class="col-md-6">

	                    					<div class="servicos_sobre">Serviço 3</div>

	                    				</div>
	                    				<div class="col-md-6">

	                    					<div class="servicos_sobre">Serviço 4</div>

	                    				</div>
	                    			</div>          

	                    		</div>


	                    	</div>

	                    	<div class="clientes">

	                    			<div class="clientes_titulo_fundo">

	                    					Clientes

	                    				</div>


	                    		<div class="container">

	                    			<h1>Clientes</h1>

	                    			<div class="row">
	                    				<div class="col-md-3">Cliente 1</div>
	                    				<div class="col-md-3">Cliente 2</div>
	                    				<div class="col-md-3">Cliente 3</div>
	                    				<div class="col-md-3">Cliente 4</div>
	                    			</div>

	                    		</div>

	                    	</div>


	                    </div>

	                    <div class="contato" id="contato">


	                    	<div class="container">
	                    		<div class="contato_titulo">
	                    			<h1>Contato</h1>
	                    		</div>
	                    		<div class="contato_texto">
	                    			<h2>Seu Contato é muito importante para nós! <br>Nos envie sua dúvida, deixe sua crítica ou elogios</h2>
	                    		</div>

	                    		<div class="container">
	                    		<div class="col-md-6">
	                    			<div class="campo_de_preenchimento">
	                    			<form>
	                    				<br>
	                    				<label>
	                    				<input type="text" name="seunome" value="Seu Nome"><br></label>
	                    				<br>
	                    				<label>
	                    				<input type="text" name="telefone" value="Telefone"><br></label>
	                    				<br>
	                    				<label>
	                    				<input type="text" name="assunto" value="Assunto"><br></label>
	                    				<br>
	                    				<label>
	                    				<input type="textarea" name="mensagem" value="Mensagem"><br></label>
	                    				</div>
	                    			</form>

<label><button class="button_contato">Enviar</button></label>

	                    		</div>
	                    		<div class="col-md-6">col-md-6 Google Maps</div>

	                    			<!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31597.684278653654!2d-34.91551263114035!3d-8.130923925396246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f0bc42e306d%3A0x2bf385bd7cec6239!2sPraia+de+Boa+Viagem!5e0!3m2!1spt-BR!2sbr!4v1501686981872" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe-->

	                    	</div>

	                    </div>





	                    </div>

	                </main>

	                <div class="rodape">


	                	<div class="container">

	                	<!--div class="texto_rodape">
	                		<ul>
	                			
	                			<li> Endereço da Mangue </li>
	                			<li> Botão </li>
	                			<li> Desenvolvido por mangue tecnologia</li>



	                		</ul>
	                	</div-->
	                		

	                			<div class="col-md-4">
	                			<div class="texto_rodape">Endereço da Mangue</div></div>
	                			<div class="col-md-4"><div class="texto_rodape">Botão de Voltar ao Topo</div></div>
	                			<div class="col-md-4"><div class="texto_rodape">Desenvolvido por Mangue Tecnologia</div></div>
	                		

	                	</div>

	                </div>


	            </body>

	        <!--body>
	            
	        


	            <div class="qualidade-e-satisfac">
	                
	                  Olá enfermeira

	            </div>

	            <div class="inicio">
	                
	                <div class="effect">

	                    <div class= "qualidade-e-satisfacao">
	                        
	                        Lorem Ipsum

	                    </div>

	                     


	                </div>

	            </div>
	            



	            <div class="sobre">
	                

	                    <div class="resultados-que-geram">
	                        
	                        trololololololo

	                    </div>

	            </div>
	            
	            <div class="serviços">
	                


	            </div>
	            
	            <div class="contato">
	                


	            </div>



	        </body-->

	        <!--body>
	            <div class="flex-center position-ref full-height">
	                @if (Route::has('login'))
	                    <div class="top-right links">
	                        @if (Auth::check())
	                            <a href="{{ url('/home') }}">Home</a>
	                        @else
	                            <a href="{{ url('/login') }}">Login</a>
	                            <a href="{{ url('/register') }}">Register</a>
	                        @endif
	                    </div>
	                @endif

	                <div class="content">
	                    <div class="title m-b-md">
	                        Laravel
	                    </div>

	                    <div class="links">
	                        <a href="https://laravel.com/docs">Documentation</a>
	                        <a href="https://laracasts.com">Laracasts</a>
	                        <a href="https://laravel-news.com">News</a>
	                        <a href="https://forge.laravel.com">Forge</a>
	                        <a href="https://github.com/laravel/laravel">GitHub</a>
	                    </div>
	                </div>
	            </div>
	        </body-->
	        </html>
