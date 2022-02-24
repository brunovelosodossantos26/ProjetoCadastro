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

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="far fa-user"></i> Detalhes do perfil</h3>
                                </div>

                                <div class="card-body">


                                    <form action="#" method="post" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>E-mail</label>
                                                    <input class="form-control" name="mail" type="email" value="<?php echo $mailHeader ?>" required />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input class="form-control" name="name" type="text" required />
                                                    <input class="form-control" name="name" value="<?php echo $id ?>" type="number" style='display:none' />
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
                                            <div class="col-lg-12">
                                                <hr>
                                                <button type="button" class="btn btn-primary btn-block">Edit perfil</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->



                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="far fa-file-image"></i> Avatar</h3>
                                </div>

                                <div class="card-body text-center">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <img alt="avatar" class="img-fluid" src="assets/images/avatars/avatar.png">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-info btn-block mt-3">Change avatar</button>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-danger btn-block mt-3">Delete avatar</button>
                                        </div>
                                    </div>

                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->


                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="far fa-user"></i> Redefinir senha</h3>
                                </div>

                                <div class="card-body">


                                    <form action="#" method="post" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Nova senha</label>
                                                    <input class="form-control" name="password" type="password"/>
                                                    <input class="form-control" name="name" value="<?php echo $id ?>" type="number" style='display:none' />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Repetir senha</label>
                                                    <input class="form-control" name="password2" type="password"/>
                                                </div>
                                            </div>
                                        </div>                                     

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <hr>
                                                <button type="button" class="btn btn-danger btn-block">Editar senha</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->



                    <script type="text/javascript">
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