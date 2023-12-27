
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<title>Encontre seu drink !</title>
		<link rel="icon" href="imagens/favicon.png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script> <!-- Icones -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

		<script>


		</script>

	</head>



	<body>

		<main class="container-fluid " style='padding: 0 !important'>

			<header id='cabeçalho' class="col-12">	 <!-- Navegação -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark container row">

                    <a class=" col-6 row navbar-brand " href="#"><img class=' col-5 img-fluid' src='imagens/logo.png'></a>

                    <button class="col-2 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="col-6 collapse navbar-collapse  text-white" id="navbarNavDropdown">
                        <ul class="navbar-nav" style='margin-left: auto;'>

                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>

                        </ul>
                    </div>
                </nav>
			</header>

			<section id='Banner'>  <!-- Banner Slide -->

                <div id="carouselExample" class="carousel slide">

                    <div class="carousel-inner">

                            <div id='banner01' class="carousel-item active">
                                <h1>Teste</h1>
                            </div>

                            <div id='banner02' class="carousel-item">
                                <h1>Teste</h1>
                            </div>

                    </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                </div>

			</section>

			<section id="conteudo_procura" class=" topo container row	 py-5 "> <!-- busca -->


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

			<footer id="rodape" class="container row"> <!-- rodape -->

                <div class="row align-items-center  py-4 text-center topo-rodape">

                    <div class=" d-none d-md-block col-md-4 col-12   text-light">
                            <h4>Menu</h4>
                            <ul class="navbar-nav nav-rodape flex-row justify-content-center text-white-50">
                                    <li class="nav-item text-center px-2">
                                        <a class="nav-link rolagem" href="">{{ __('Projetos') }}</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a class="nav-link rolagem px-2" href="">{{ __('NKW') }}</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a class="nav-link rolagem px-2" href="">{{ __('Celleta') }}</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link px-2" href="">{{ __('Curriculo') }}</a>
                                    </li>
                            </ul>
                    </div>

                    <div class="d-none d-md-block col-md-4 col-10 offset-1 offset-md-0 text-white mt-2">

                            <h4>Sobre Mim</h4>

                            <p class='text-white-50 p-2'>
                                Sou disciplinado e focado para me tornar melhor a cada dia, seja na vida profissional ou pessoal.
                            </p>

                    </div>

                    <div class="col-md-2 offset-md-1 col-6 offset-3 ">
                            <img src="Assets/Img/logo.png" class="img-fluid">
                    </div>
                </div>

                <div  class='row justify-content-center'>

                    <div id='legenda-rodape' class="ml-2 mt-3 col-md-6 col-10  pt-3 text-light text-center">

                        <p class='p-rodape'>Copyright (c) 2023 Wilmar Filho -  Todos os direitos reservados <a href='https://www.instagram.com/wilmar.filho1511/' class=' mx-2 btn btn-light'><i class="fa-brands fa-instagram"></i></a>
                            </p>


                    </div>

                </div>

			</footer>

		</main>


		<!-- Optional JavaScript -->
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

   		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	</body>


</html>


