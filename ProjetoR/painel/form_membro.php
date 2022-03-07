<?php include 'header.php' ?>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <?php include 'topbar.php' ?>
        <!-- End Navigation -->

        <?php include 'menu.php' ?>

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

                </div>

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-user"></i> Novo membro</h3>
                        </div>

                        <div class="card-body">
                            <?php
                            if (isset($_GET['msg'])) { ?>
                                <div class="alert alert-success" role="alert">
                                    Inserido com sucesso
                                </div>
                            <?php } ?>

                            <form action="_insert_pessoa.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" name="mail" type="email" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input class="form-control" name="name" type="text" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input class="form-control" name="tel" type="text" id="telefone" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>CPF</label>
                                            <input class="form-control" name="cpf" type="text" id="cpf" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <input class="form-control" name="senha" type="password" id="password" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Confirmar senha</label>
                                            <input class="form-control" type="password" required id="confirm_password" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Nível</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="nivel">

                                        <?php

                                        $sql = "SELECT * FROM nivel";
                                        $search = mysqli_query($conexao, $sql);

                                        while ($dados = mysqli_fetch_array($search)) {
                                            $value = $dados['value_nivel'];
                                            $name_nivel =  utf8_encode($dados['name_nivel']); ?>


                                            <option value="<?php echo $value ?>"><?php echo $name_nivel; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <hr>
                                        <button type="submit" class="btn btn-primary btn-block">Edit perfil</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>


                </div><!-- end card-->
            </div>

            <script type="text/javascript">
                $("#telefone").mask("(00) 0 0000-0000");

                $("#cep").mask("00000-000")

                $("#cpf").mask("000.000.000-00")

                var password = document.getElementById("password"),
                    confirm_password = document.getElementById("confirm_password");

                function validatePassword() {
                    if (password.value != confirm_password.value) {
                        confirm_password.setCustomValidity("Senhas diferentes!");
                    } else {
                        confirm_password.setCustomValidity('');
                    }
                }

                password.onchange = validatePassword;
                confirm_password.onkeyup = validatePassword;
            </script>


        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->


    <!-- END content-page -->

    <?php include 'footer.php' ?>