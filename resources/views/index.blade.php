<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/0a6bbf369c.js" crossorigin="anonymous"></script>
<body>
	<div class="navbar navbar-expand lg d-flex justify-content-around bg-primary">
		<img src="{{ URL('images/logo_branca.jpeg')}}" width="220">
		<p class="h3 text-light">Sistema de Ouvidoria Absam</p>
	</div>

	<section class="d-flex justify-content-center" style="margin-top: 50px;">
		<p class="h1 text-secondary">Qual tipo de manifestação você deseja fazer?</p>
	</section>
	<hr width="70%" style="border: 1px solid lightgray;">

	<style type="text/css">
		.container{
			color: grey;
			margin-top: 100px;
		}

		.icone-li{
			border-radius: 20px;
			width: fit-content;
			padding: 40px;
		}

		.icone-li i{
			font-size: 100px;
			cursor: pointer; 
			color: #fff;
		}
	</style>

	<div class="container" >
		<div class="row">
			<div class="col-lg-3">
				<div class="icone-li elogio bg-success">
					<i class="fas fa-thumbs-up" style="font-size: 100px; cursor: pointer; color: #fff; "></i>	
				</div>
				<spam style="font-size: 25px;">Elogio</spam>
				<hr width="100%" style="border: 1px solid lightgray;">
			</div>
			<div class="col-lg-3">
				<div class="icone-li sugestao bg-primary">
					<i class="fas fa-comment"></i>
				</div>
				<spam style="font-size: 25px;">Sugestão</spam>
				<hr width="100%" style="border: 1px solid lightgray;">
			</div>
			<div class="col-lg-3">
				<div class="icone-li denuncia bg-danger">
					<i class="fas fa-volume-up"></i>
				</div>
				<spam style="font-size: 25px;">Denúncia</spam>
				<hr width="100%" style="border: 1px solid lightgray;">
			</div>
			<div class="col-lg-3">
				<div class="icone-li reclamacao bg-warning">
					<i class="fas fa-thumbs-down"></i>
				</div>
				<spam style="font-size: 25px;">Reclamação</spam>
				<hr width="100%" style="border: 1px solid lightgray;">
			</div>
		</div>
	</div>

	<div class="container con-form">
		<p class="h2 text-center p-form">Deixe sua mensagem! :)</p>
		<form action="{{ route('post.store') }}" method="post">
			@csrf
			<div class="form-group">
				<label for="nome">Seu nome:</label>
				<input type="text" class="form-control" name="nome" id="nome" value="">
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" class="form-control" name="email" id="email" value="">
			</div>

			<div class="form-group">
				<label for="dep">Departamento</label>
				<select name="dep" id="dep" class="custom-select" value="">
					<option value="Atendimento Comercial">Atendimento Comercial</option>
					<option value="Suporte Técnico">Suporte Técnico</option>
					<option value="Financeiro">Financeiro</option>
					<option value="Outros">Outros</option>
				</select>
			</div>

			<div class="form-group">
				<p>Mensagem:</p>
				<textarea name="mani" id="mani" cols="70" rows="5" value=""></textarea>
			</div>
			<button class="btn btn-success">Enviar</button>
		</form>
	</div>

	<style>
		.con-form{
			background-color: #afb6b8;
			padding: 20px;
			border-radius: 20px;
		}

		.form-group, .p-form{
			color: #fff;
		}
	</style>

	<div class="div-footer">
		<div class="text-img">
			<img class="imagem-footer" src="{{ URL('images/img_footer.jpeg') }}">
			<p>© 2020 All rights reserved.</p>
		</div>

		<div class="div-empresa">
			<h5>Empresa</h5>
			<spam><a target="blank" href="https://absam.io/sobre-a-absam">Sobre a Absam</a></spam><br>
			<spam><a target="blank" href="https://blog.absam.io/">Blog</a></spam><br>
			<spam><a target="blank" href="https://absam.io/legal/termos">Legal</a></spam><br>
		</div>

		<div class="div-contato">
			<h5>Contato</h5>
			<spam><a target="blank" href="https://dashboard.absam.io/login">Login</a></spam><br>
			<spam><a target="blank" href="https://absam.io/contato">Comercial</a></spam><br>
			<spam><a target="blank" href="https://dashboard.absam.io/login">Suporte</a></spam><br>
		</div>
	</div>

	<footer>
		<div class="termos">
			<spam><a href="#">Termos e Condições de Uso</a></spam>
		</div>

		<div class="social-medias">
			<a target="blank" href="https://www.instagram.com/absam.io/"><i class="fab fa-instagram"></i></a>
			<a target="blank" href="https://pt-br.facebook.com/absam.io/"><i class="fab fa-facebook-square"></i></a>
		</div>
	</footer>

	<style>
		.div-footer{
			display: flex;
			justify-content: space-around;
			padding-top: 50px;
			padding-bottom: 20px;
			margin-top: 70px;
			background-color: #1C1C1C;
		}

		h5{
	color: #fff;
}

.text-img{
	display: flex;
	flex-direction: column;
	align-items: center;
}

.text-img p{
	color: #fff;
}

.div-empresa a{
	text-decoration: none;
	color: grey;
	font-weight: bold;
}

.div-empresa a:hover{
	color: #fff;
}

.div-contato a{
	text-decoration: none;
	color: grey;
	font-weight: bold;
}

.div-contato a:hover{
	color: #fff;
}

.imagem-footer{
	height: 60px;
}

footer{
	display: flex;
	justify-content: space-around;
	align-items: center;
	font-family: 'Roboto', sans-serif;
	font-weight: bold;
	font-size: 25px;
	background-color: #363636;
	padding: 15px;
}

footer spam{
	font-size: 15px;
}

footer spam a:hover{
	color: #fff;
}

footer spam a{
	color: grey;
}

footer a i{
	color: #fff;
	padding-right: 10px;
}

footer a{
	text-decoration: none;
	
}
	</style>
</body>
</html>