<?php include 'header.php' ?>

<body class="adminbody">

<div id="main">

    <!-- top bar navigation -->
    <?php include 'topbar.php'?>
    <!-- End Navigation -->

    <?php include 'menu.php'?>

    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Painel</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Adicionar usuário</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>

                      

                    </div>
                </div>
               <!--Campos para mascaras-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3>Formulário de cadastro</h3>
                                    
                                </div>

                                <div class="card-body">

                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nome</label>
                                            <input type="text" class="form-control" placeholder="Nome completo" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">CPF</label>
                                            <input type="text" class="form-control" placeholder="CPF" id="cpf" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">End.:</label>
                                            <input type="text" class="form-control" placeholder="Endereço completo" required autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">CEP</label>
                                            <input type="text" class="form-control" placeholder="xxxxx-xxx" id="cep"  required autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cidade</label>
                                            <input type="text" class="form-control" placeholder="Sua cidade" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Município</label>
                                            <input type="text" class="form-control" placeholder="Município de origem" required autocomplete="off">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="email" class="form-control" placeholder="Seu e-mail" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Fone/Celular</label>
                                            <input type="text" class="form-control" id="telefone" aria-describedby="numberlHelp" placeholder="(xx) xxxxx-xxxx" required autocomplete="off">
                                        </div>
                                        <div class="" style="text-align: right">
                                            <button type="submit" class="btn btn-success">Enviar</button>
                                        </div>
                                        
                                    </form>

                                </div>
                            </div><!-- end card-->
                        </div>

            <script type= "text/javascript"> 
                $("#telefone").mask("(00) 0 0000-0000");

                $("#cep").mask("00000-000")

                $("#cpf").mask("000.000.000-00")
            </script>
               

            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

    </div>
    <!-- END content-page -->

<?php include 'footer.php' ?>