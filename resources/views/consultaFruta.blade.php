
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
                                <a class="nav-link" href='{{route("site.index")}}'>Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Seja Colaborador</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Fale Conosco</a>
                            </li>

                        </ul>
                    </div>
                </nav>
			</header>

			<section id='escolha'>  <!-- Seleção de Ingredientes -->

                <div class="gradiente d-flex justify-content-center align-items-center flex-column text-center text-white">

                    <form method="POST" action="{{route('escolheFruta')}}">

                        @csrf

                        <input name='fruta' id='fruta' type="text">




                                <h1 class="text-white">fruta</h1>




                        <button type="submitt">enviar</button>

                    </form>

                </div>

			</section>

			<footer id="rodape" class="container-fluid row col-12" > <!-- rodape -->

                <div class="row align-items-center  py-4 text-center topo-rodape">

                    <div class=" d-none d-md-block col-md-4 col-12   text-light">
                            <h4>Menu</h4>
                            <ul class="navbar-nav nav-rodape flex-row justify-content-center text-white-50">
                                    <li class="nav-item text-center px-2">
                                        <a class="nav-link rolagem" href='{{route("site.index")}}'>Home</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a class="nav-link rolagem px-2" href="#">Seja Colaborador</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a class="nav-link rolagem px-2" href="#">Fale Conosco</a>
                                    </li>
                            </ul>
                    </div>

                    <div class="d-none d-md-block col-md-4 col-10 offset-1 offset-md-0 text-white mt-2">

                            <h4>Sobre</h4>

                            <p class='text-white-50 p-2'>
                                Web Service criado para ajudar amantes de drinks
                            </p>

                    </div>

                    <div class="col-md-2 offset-md-1 col-6 offset-3 ">
                            <img src='imagens/logo.png' class="img-fluid">
                    </div>
                </div>

                <div  class='row justify-content-center' style='border-top: 1px double darkgray'>

                    <div id='legenda-rodape' class="ml-2 mt-3 col-md-6 col-10  pt-3 text-light text-center" >

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

