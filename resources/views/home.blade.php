@extends('layout.app')
@section('content')
	<section class="section section-hero">
		<video poster="{{url('/')}}/video-background.jpg" class="video" playsinline autoplay muted loop>
			<source src="{{url('/')}}/background-video.mp4" type="video/mp4">
			</video>

			<div class="container text-xs-center">

			<!--
			<div class="text hidden-sm-down">
				Referência em todo o Brasil em sacolas plásticas, a Dokapack possui mais de 30 anos de experiência e uma estrutura de ponta para atender a demanda de grandes marcas e parceiros.
			</div>
		-->

		<a class="button-play" href="#" data-toggle="modal" data-target="#myModal">
			<img src="{{url('/')}}/images/img-video.jpg" class="rounded" width="200">
			<small>Confira nosso vídeo institucional e conheça mais sobre a Dokapack e sua equipe.</small>
		</a>
	</div>

	<div class="highlights">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 item">
					<img src="{{url('/')}}/images/infraestrutura.jpg" class="img-fluid rounded">
					<h3>Infraestrutura</h3>
					<p>Mais de 10.000 mt2 de área construída e tecnologia de última geração.</p>
				</div>

				<div class="col-lg-4 item">
					<img src="{{url('/')}}/images/tecnologia.jpg" class="img-fluid rounded">
					<h3>Tecnologia</h3>
					<p>Grande capacidade de produção garantindo entrega rápida e de qualidade.</p>
				</div>

				<div class="col-lg-4 item">
					<img src="{{url('/')}}/images/comprometimento.jpg" class="img-fluid rounded">
					<h3>Comprometimento</h3>
					<p>Dedicação, seriedade, compromisso com o cliente e com o meio ambiente.</p>
				</div>
			</div>
		</div>
	</div>
	
		<!-- <div id="video-wrap" style="display:none;">
			<video id="video-popup">
				<source src="{{url('/')}}/dokapack-institucional.webm" type="video/webm">
				<source src="{{url('/')}}/dokapack-institucional.mp4" type="video/mp4">
			</video>
		</div> -->
	</section>

	

	<section class="section section-about" id="nossa-empresa">
		<div class="container">
			<h2>
				<small>Referência nacional</small>
				Nossa Empresa
			</h2>

			<div class="row">
				<div class="col-lg-4">
					<img src="{{url('/')}}/images/tecnologia-maquinas.jpg" class="img-fluid" width="100%">
				</div>

				<div class="col-lg-8">
					<p>O resultado da experiência de 35 anos de nossos diretores quando iniciaram as atividades na cidade de Lajedo-PE, e visando atender à crescente demanda no Nordeste brasileiro por embalagens flexíveis para o segmento comercial e de serviços nasce em 2009, estrategicamente, em Caruaru no agreste pernambucano a DOKAPACK.</p>

					<p>Instalada num parque industrial de 10.000 mt2 com maquinário e tecnologia de ultima geração, enorme capacidade de produção, rapidez no atendimento ao cliente e na entrega dos produtos, associa a marca DOKAPACK um diferencial para o mercado chamado QUALIDADE.</p>

					<p>Nossos produtos atendem aos segmentos: varejistas, atacadista e de serviços, dentro do padrão de medida e espessura do mercado ou de acordo com a necessidade de cada cliente. Sua equipe de profissionais está capacitada a auxiliar no desenvolvimento de novos produtos, o que traz vantagens ilimitadas de negócios.</p>

					<p>Nossa dedicação, seriedade, compromisso com o cliente, fornecedores, colaboradores e com o meio ambiente, torna a DOKAPACK referência nacional no segmento de embalagens.</p>
					
					<div class="row">
						<div class="col-lg-6">
							<h3>Missão</h3>
							<p>Desenvolver e fabricar embalagens flexíveis com qualidade, preços competitivos e certeza de rapidez na entrega. Ter os fornecedores e colaboradores internos como parceiros e o respeito ao meio ambiente como obrigação.</p>
						</div>

						<div class="col-lg-6">
							<h3>Visão</h3>
							<p>Ser referência no Nordeste brasileiro no segmento de embalagens flexíveis, ter na qualidade dos produtos e na logística nosso maior compromisso, visando uma relação duradoura de fidelização com: fornecedores, colaboradores e clientes.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-quality" id="qualidade">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<h2>Excelência em atendimento e qualidade prêmium</h2>
					<p>Quando se propôs a fabricar embalagens flexíveis, a DOKAPACK colocou como prioridade a QUALIDADE dos produtos e a excelência no ATENDIMENTO. Por isso, só utiliza matéria prima, tanto nacionais quanto importadas de fornecedores credenciados, proporcionando um resultado PREMIUM que coloca seus produtos em condições de igualdade com os maiores fabricantes e a disposição dos clientes mais exigentes do país. Ao entrar em contanto com a DOKAPACK você vai encontrar uma equipe de profissionais capacitados para auxiliá-lo com um excelente atendimento personalizado, gerando rapidez e objetividade, inclusive, com conhecimento técnico capaz de auxiliar o cliente esclarecendo sobre os produtos atuais e o desenvolvimento de novos produtos.</p>
					
					<a href="#fale-conosco" class="btn btn-primary">
						Fale Conosco
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-products" id="produtos">
		<div class="container">
			<h2>Produtos</h2>

			<div class="list-products">
				<div class="item">
					<a href="#" data-target="#bobinas-fundo-reto">
						<img src="{{url('/')}}/images/bobinas-fundo-reto.jpg" class="img-fluid img-circle">
						<h4>Bobinas Fundo Reto</h4>
					</a>

					<div id="bobinas-fundo-reto" class="dimmer">
						Destinada ao acondicionamento de alimentos, são utilizadas pelos segmentos: hortifrúti, padarias, frios e açougues. Fabricadas com polietileno virgem, possibilitando contato com alimentos com total segurança, estão disponíveis em 5 tamanhos para suportar: 1kg, 2kg, 3kg, 4,5kg e 10kg.
					</div>
				</div>

				<div class="item">
					<a href="#" data-target="#bobinas-fundo-estrela">
						<img src="{{url('/')}}/images/bobinas-estrela.jpg" class="img-fluid img-circle">
						<h4>Bobinas Fundo Estrela</h4>
					</a>

					<div id="bobinas-fundo-estrela" class="dimmer">
						Além de contar com suporte bonito e resistente, é a melhor opção em praticidade, fabricadas com polietileno virgem, podem ser utilizadas para o contato com alimentos com total segurança, são amplamente utilizadas em: mercados, supermercados, feiras livres, açougues, bares, restaurantes, hortifrútis, residências, entre outros segmentos. Ideal para quem deseja conservar seus alimentos de forma adequada e com total proteção, estão disponíveis em 3 tamanhos para suportar : 3kg, 4,5kg e 6kg.
					</div>
				</div>

				<div class="item">
					<a href="#" data-target="#sacolas-vazadas">
						<img src="{{url('/')}}/images/sacola-alca-vazada.jpg" class="img-fluid img-circle">
						<h4>Sacolas Vazadas</h4>
					</a>

					<div id="sacolas-vazadas" class="dimmer">
						Sacola plástica em polietileno de baixa densidade muito resistente, feita com material que produz um efeito leitoso e brilhante, valorizando ainda mais a impressão. Pode ser utilizada nos mais diversos segmentos do varejo, sendo uma excelente opção para utilização como divulgador da empresa. Disponíveis nos tamanhos: 20x30, 30x40, 40x50 ou de acordo com a necessidade do cliente.
					</div>
				</div>

				<div class="item">
					<a href="#" data-target="#sacos-para-lixo">
						<img src="{{url('/')}}/images/saco-de-lixo.jpg" class="img-fluid img-circle">
						<h4>Sacos para Lixo</h4>
					</a>

					<div id="sacos-para-lixo" class="dimmer">
						Produzidos em polietileno de alta densidade o que proporciona maior resistência, elasticidade e capacidade de carga. Amplamente utilizados em: Condomínios, hotéis, indústrias, consultórios, clinicas médicas, restaurantes, shopping Centers, hospitais, faculdades, Escolas e etc. Disponíveis em varias cores e tamanhos, inclusive, sob encomenda de acordo com a necessidade do cliente.
					</div>
				</div>

				<div class="item">
					<a href="#" data-target="#sacolas-personalizadas">
						<img src="{{url('/')}}/images/sacolas-personalizadas.jpg" class="img-fluid img-circle">
						<h4>Sacolas Personalizadas</h4>
					</a>

					<div id="sacolas-personalizadas" class="dimmer">
						Amplamente utilizadas pelos diversos segmentos do varejo, utiliza a impressão personalizada para uma melhor divulgação da marca. Confeccionada de acordo com a necessidade do cliente, utiliza: cores, letras, tamanhos e desenhos específicos. A impressão utilizando alta tecnologia torna a sacola bonita e econômica tornando-se uma excelente ferramenta de propaganda.
					</div>
				</div>

				<div class="item">
					<a href="#" data-target="#sacos-para-lixo-em-rolo">
						<img src="{{url('/')}}/images/sacos-para-lixo-em-rolo.jpg" class="img-fluid img-circle">
						<h4>Sacos para lixo em rolo</h4>
					</a>

					<div id="sacos-para-lixo-em-rolo" class="dimmer">
						Produzido em polietileno de alta densidade o que proporciona maior resistência, elasticidade e capacidade de carga. Disponível em embalagem individual com capacidade de 15L, 30L, 50L e 100L. ideal para ser comercializado em gôndolas de supermercados, mercadinhos, lojas de descartáveis e condomínios.
					</div>
				</div>

				<div class="item">
					<a href="#" data-target="#saco-infectante">
						<img src="{{url('/')}}/images/saco-infectante.jpg" class="img-fluid img-circle">
						<h4>Saco Infectante</h4>
					</a>

					<div id="saco-infectante" class="dimmer">
						Produzido em polietileno de alta densidade o que proporciona maior resistência, elasticidade e capacidade de carga. Disponível em embalagem individual com capacidade de 15, 30, 50 e 100 lts, fabricado na cor branca com impressão específica para identificação do produtos. Sua comercialização é direcionada para: Clínicas médicas, Laboratório de análises, Hospitais e Postos de saúde.
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-photos" id="fotos">
		<div class="container">
			<h2 class="text-xs-center">Fotos</h2>
		</div>

		<div class="carousel-photos" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
			<div class="item"><img src="{{url('/')}}/images/photos/1.jpg" alt="" class="img-fluid" width="100%"></div>
			<div class="item"><img src="{{url('/')}}/images/photos/2.jpg" alt="" class="img-fluid" width="100%"></div>
			<div class="item"><img src="{{url('/')}}/images/photos/3.jpg" alt="" class="img-fluid" width="100%"></div>
			<div class="item"><img src="{{url('/')}}/images/photos/4.jpg" alt="" class="img-fluid" width="100%"></div>
			<div class="item"><img src="{{url('/')}}/images/photos/5.jpg" alt="" class="img-fluid" width="100%"></div>
			<div class="item"><img src="{{url('/')}}/images/photos/6.jpg" alt="" class="img-fluid" width="100%"></div>
			<div class="item"><img src="{{url('/')}}/images/photos/7.jpg" alt="" class="img-fluid" width="100%"></div>
			<div class="item"><img src="{{url('/')}}/images/photos/8.jpg" alt="" class="img-fluid" width="100%"></div>
			<div class="item"><img src="{{url('/')}}/images/photos/9.jpg" alt="" class="img-fluid" width="100%"></div>
			<div class="item"><img src="{{url('/')}}/images/photos/10.jpg" alt="" class="img-fluid" width="100%"></div>
			<div class="item"><img src="{{url('/')}}/images/photos/11.jpg" alt="" class="img-fluid" width="100%"></div>
			<div class="item"><img src="{{url('/')}}/images/photos/12.jpg" alt="" class="img-fluid" width="100%"></div>
		</div>
	</section>
</div>
@include('modal.modal-video-dokapack')
@endsection