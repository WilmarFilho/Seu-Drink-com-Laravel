
<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<title>Encontre seu drink !</title>
		<link rel="icon" href="imagens/favicon1.png">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Bootstrap4 -->
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script> <!-- Icones -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

		<script>
		
			$(document).ready(function() {
			    $('.meu-select').select2({
			    	placeholder: "Selecione oque voce tem!",
    				allowClear: true
			    });
			    
			    if(!!document.getElementById('conteudo_drinks')) {
					
					targetOffset = $('#conteudo_drinks').offset().top;

				    $('html, body').animate({
				    	scrollTop: targetOffset -100
				    }, 600);

				}

			});

		</script>
		
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	</head>

	
	
	<body>

		<main class="container-fluid">

			<header id='cabeçalho'>	 <!-- cabecalho -->
				<article class="navegacao row fixed-top">
					
					<div class="mx-auto col-md-6 col-9 d-flex justify-content-center">
						<a href="{{route("site.index")}}"><img src="imagens/logo.png"  class="img-fluid "></a>
					</div>

				</article>
			</header>

			<section id='capa' class='d-md-block d-none'>  <!-- capa -->

				<h1 class='capa text-center' >Descubra o Drink <br>ideal pra você !</h1>
	
			</section>

			<section id="conteudo_procura" class=" topo row	 py-5 "> <!-- busca -->

				
				
					<div class="col-xl-6 col-12 text-center row animacao mx-auto" >
						<div class="texto col-12 mx-auto ">
							<h2 class='mb-3 h2-procura'>Selecione oque você tem !</h2>
							<div class='p-procura'>
								<p>- Preencha com todas bebidas, sucos, frutas ou ingredientes que você tem. </p>
								<p>- Preencha pelo menos um campo ! </p>
							</div>
						</div>
						
						<div class="col-10 mx-auto form">
							<form method="get" action="{{route('site.drink')}}">

								@csrf

							

								<div class="form-row">
									
									<div class="col-md-6 col-12">
										<label>Bebida</label>
										<select class="form-control meu-select " name="bebida">
											<option></option>
											@foreach($options as $key => $option)
												<option>{{ $option->bebida }}</option>
											@endforeach										
										</select>
									</div>

									
									<div class="col-md-6 col-12">
										<label>Suco ou Fruta</label>
										<select class="form-control meu-select" name="suco_fruta">
											<option></option>
											@foreach($options as $key => $option)
											<option>{{ $option->suco_fruta }}</option>
											@endforeach		
										</select>
									</div>

									

									<div class="col-md-6 col-12 mx-auto">
										<label>Ingrediente</label>
										<select class="form-control meu-select" name="ingrediente">
											<option></option>
											@foreach($options as $key => $option)
											<option>{{ $option->ingrediente }}</option>
											@endforeach	
										</select>
									</div>

									

									

								</div>

								

							
								

								<button type="submit"  class="btn btn-danger mt-5 btn-lg btn-block btn-custom">Procurar</button>
								
							</form>
						</div>
					</div>

					<div class="col-xl-6 col-12 animacao mt-5">
						<img src="imagens/d5.jpg" class="img-fluid img">
					</div>

				

			</section>

			@isset($drinks)  <!-- resultado da busca -->

				@if($drinks->isEmpty() != 1)
					<section id="conteudo_drinks" class="row my-5 py-5 justify-content-center">

						<div class='col-10 text-center mb-3'>
							<h2 class="titulo_conteudo">Drinks que você pode fazer !</h2>
						</div>
						
						
						<?php foreach ($drinks as $indice => $drink) { ?>
							
							<?php 

								$preparo = explode('*', $drink->preparo) ;
								
								$preparo[1] =  isset($preparo[1]) ? $preparo[1] : '' ;
								$preparo[2] =  isset($preparo[2]) ? $preparo[2] : '' ;
								$preparo[3] =  isset($preparo[3]) ? $preparo[3] : '' ;
								$preparo[4] =  isset($preparo[4]) ? $preparo[4] : '' ;
								$preparo[5] =  isset($preparo[5]) ? $preparo[5] : '' ;
								$preparo[6] =  isset($preparo[6]) ? $preparo[6] : '' ;
								
							?>

							<div class="card col-md-5 mx-2 col-5 card-custom mt-4">
								
									
									
									<img src="<?=$drink->img?>" class="img-fluid card-img-top">
									

								

								<div class="card-body">
									<h2 class="text-capitalize text-center card-title h2-drink"><?=$drink->nome?></h2>

									<div class="card-text row justify-content-center">

										<div class="col-md-6 mt-3">
											<h3 class="text-center h3-drink">Ingredientes:</h3>

											<ul class="list-group text-first ul-drink">

												<?php if($drink->bebida !== 'ND') { ?>
													<li class="list-group-item"><?=$drink->bebida?></li>
												<?php } ?>

												<?php if($drink->bebida_adicional !== 'ND') { ?>
													<li class="list-group-item"><?=$drink->bebida_adicional?></li>
												<?php } ?>

												<?php if($drink->suco_fruta !== 'ND') { ?>
													<li class="list-group-item"><?=$drink->suco_fruta?></li>
												<?php } ?>

												<?php if($drink->suco_fruta_adicional !== 'ND') { ?>
													<li class="list-group-item"><?=$drink->suco_fruta_adicional?></li>
												<?php } ?>

												<?php if($drink->ingrediente !== 'ND') { ?>
													<li class="list-group-item"><?=$drink->ingrediente?></li>
												<?php } ?>

												<?php if($drink->ingrediente_adicional_1 !== 'ND') { ?>
													<li class="list-group-item"><?=$drink->ingrediente_adicional_1?></li>
												<?php } ?>

												<?php if($drink->ingrediente_adicional_2 !== 'ND') { ?>
													<li class="list-group-item"><?=$drink->ingrediente_adicional_2?></li>
												<?php } ?>

											</ul>
										</div>

										<div class="col-md-6 mt-3">

											<h3 class="text-center h3-drink">Como fazer:</h3>
											<ol class="list-group ul-drink">

												<?php if($preparo[0] !== '') { ?>
													<li class="list-group-item"><?=$preparo[0]?></li>
												<?php } ?>
												
												<?php if($preparo[1] !== '') { ?>
													<li class="list-group-item"><?=$preparo[1]?></li>
												<?php } ?>


												<?php if($preparo[2] !== '') { ?>
													<li class="list-group-item"><?=$preparo[2]?></li>
												<?php } ?>

												<?php if($preparo[3] !== '') { ?>
													<li class="list-group-item"><?=$preparo[3]?></li>
												<?php } ?>

												<?php if($preparo[4] !== '') { ?>
													<li class="list-group-item"><?=$preparo[4]?></li>
												<?php } ?>

												<?php if($preparo[5] !== '') { ?>
													<li class="list-group-item"><?=$preparo[5]?></li>
												<?php } ?>

												<?php if($preparo[6] !== '') { ?>
													<li class="list-group-item"><?=$preparo[6]?></li>
												<?php } ?>

											</ol>

										</div>

									</div>

								</div>
							</div>

						<?php } ?>
						
						<div class='col-12 d-flex justify-content-center mt-5'>
							
								{{$drinks->links('pagination.pagination') }}
							
						</div>

					</section>

				@endif

			@endisset  

			@isset($drinks) 

				@if($drinks->isEmpty() == 1)
					<section id="conteudo_drinks" class="row my-5 py-5">

						<h1 class='col-12 text-center alert'>Infelizmente, no momento não temos drinks com essa combinação cadastrados!</h1>
						<button class="btn btn-outline-warning mx-auto" onclick="window.location.href='index.php'">Procurar de novo</button>

					</section>
				@endif

			@endisset

			
			<!--<section id="conteudo_carrousel" class="sugestao row mt-5 mb-5  py-5"> 
				
				
					
					<div class="col-12 text-center ">
						<h2 class="h2-sugestao">Nossas sugestões</h2>
					</div>

					<div class="col-10 mx-auto mt-4 d-none d-md-block" >

						<div id="carousel" class="carousel slide " data-ride="carousel">
							
							<div class="carousel-inner">
								
								<div class="carousel-item active">
									<div class="row">
										<div class="col-4" style="padding: 0px">
											
											<img src="imagens/drinks/pinacolada.png" class="img-drink" height="400" width="100%">
										</div>
										<div class="col-4" style="padding: 0px">
											<img src="imagens/drinks/caipirinhadelimao.jpg" height="400" width="100%" >
										</div>
										<div class="col-4" style="padding: 0px">
											<img src="imagens/drinks/margarida.jpg" height="400" width="100%">
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<div class="row">
										<div class="col-4" style="padding: 0px">
											
											<img src="imagens/drinks/sangria.jpg" class="img-drink" height="400" width="100%">
										</div>
										<div class="col-4" style="padding: 0px">
											<img src="imagens/drinks/gintonica.jpg" height="400" width="100%" >
										</div>
										<div class="col-4" style="padding: 0px">
											<img src="imagens/drinks/caipirinhademorango.jpg" height="400" width="100%">
										</div>
									</div>
								</div>

								

							</div>

							<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
							    <span><i class="fa-solid fa-angles-left fa-2x text-dark"></i></span>
							    <span class="sr-only">Previous</span>
						    </a>
						  	<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
							    <span><i class="fa-solid fa-angles-right fa-2x text-dark"></i></span>
							    <span class="sr-only">Next</span>
						  	</a>


						</div>

					</div>

					<div class="col-10 mx-auto mt-4 d-md-none d-block" >

						<div id="carousel" class="carousel slide " data-ride="carousel">
							
							<div class="carousel-inner">
								
								<div class="carousel-item active">
									<div class="row">
										<div class="col-6" style="padding: 0px">
											
											<img src="imagens/drinks/pinacolada.png" class="img-drink" height="400" width="100%">
										</div>
										<div class="col-6" style="padding: 0px">
											<img src="imagens/drinks/caipirinhadelimao.jpg" height="400" width="100%" >
										</div>
										
									</div>
								</div>

								<div class="carousel-item">
									<div class="row">
										<div class="col-6" style="padding: 0px">
											
											<img src="imagens/drinks/sangria.jpg" class="img-drink" height="400" width="100%">
										</div>
										<div class="col-6" style="padding: 0px">
											<img src="imagens/drinks/gintonica.jpg" height="400" width="100%" >
										</div>
										
									</div>
								</div>

								

							</div>

							<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
							    <span><i class="fa-solid fa-angles-left  text-dark"></i></span>
							    <span class="sr-only">Previous</span>
						    </a>
						  	<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
							    <span><i class="fa-solid fa-angles-right  text-dark"></i></span>
							    <span class="sr-only">Next</span>
						  	</a>


						</div>

					</div>

				

			</section>-->

			<footer id="rodape" class="row"> <!-- rodape -->
				<article class="col-12 row align-items-center ">
					<div class="col-md-4 col-12 text-center mr-auto">
						<h2>Sobre:</h2>
						<p class='text-black-50 font-italic'>Web service criado e desenvolvido de forma autonoma por Wilmar Filho</p>		
					</div>
					
					<div class="col-md-4 col-12 text-center">
						<h2>Parceiros</h2>
						<ul class="nav justify-content-center">
							<li class="nav-item"><a class="nav-link" href="https:/www.produtosdotiao.com"><img src="imagens/parceiro.png" width="300"></li></a>
						</ul>
					</div>			
				</article>
			</footer>

		</main>


		<!-- Optional JavaScript -->
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
   		
   		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>

</html>