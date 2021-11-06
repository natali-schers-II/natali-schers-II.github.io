<?php include_once '../public/dependencias.php'?>

<link rel="stylesheet" type="text/css" href="../css/estilo.css">

<h2 class="text-center titulo">Cadastro de Clientes <i class="fa fa-user"></i></h2>

<form method="post" action="../controller/insert_costumer.php">
    <div class="container">
        <div class="form-row">
            <div class="col-md-6 espaco">
                Nome: <i class="fa fa-user"></i>
                <input class="form-control" type="text" name="nome" required autofocus>
            </div>
            <div class="col-md-6 espaco">
                E-Mail: <i class="fa fa-envelope"></i>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="col-md-4 espaco">
                CPF: <i class="fa fa-address-card"></i>
                <input class="form-control" type="text" name="cpf" required id="cpf">
            </div>
            <div class="col-md-4 espaco">
                Dt. de Nascimento: <i class="fa fa-calendar"></i>
                <input class="form-control" type="date" name="dtnascimento" required>
            </div>
            <div class="col-md-4 espaco">
                Telefone: <i class="fa fa-phone"></i>
                <input class="form-control" type="text" name="Telefone" required id="phone">
            </div>
            <div class="col-md-12 espaco">
                Endereço: <i class="fa fa-map"></i>
                <input class="form-control" type="text" name="Endereco" required><br>
            </div>
            <div class="col-md-4 espaco">
                <a class="btn btn-success btn-lg" href="../index.php">
                    Voltar <i class="fa fa-arrow-circle-left"></i>
                </a>
            </div>
            <div class="col-md-8 text-right">
                <button class="btn btn-primary btn-lg">
                    Inserir Cliente <i class="fa fa-user-plus"></i>
                </button>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (){
        $("#cpf").mask("000.000.000-00");
        $("#phone").mask("(00) 00000-0000");
    });
</script>