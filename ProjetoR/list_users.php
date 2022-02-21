<?php include 'header.php' ?>

<script>
    $(function() {
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var recipient = button.data('id')
            var recipient2 = button.data('name')
            var recipient3 = button.data('cpf')
            var recipient4 = button.data('endereco')
            var recipient5 = button.data('cep')
            var recipient6 = button.data('cidade')
            var recipient7 = button.data('estado')
            var recipient8 = button.data('email')
            var recipient9 = button.data('fone')
            var modal = $(this)
            modal.find('.modal-title').text('Editar cadastro ')
            modal.find('#recipient-id').val(recipient)
            modal.find('#recipient-name').val(recipient2)
            modal.find('#recipient-cpf').val(recipient3)
            modal.find('#recipient-endereco').val(recipient4)
            modal.find('#recipient-cep').val(recipient5)
            modal.find('#recipient-cidade').val(recipient6)
            modal.find('#recipient-estado').val(recipient7)
            modal.find('#recipient-email').val(recipient8)
            modal.find('#recipient-fone').val(recipient9)
        });
    });
</script>

<script>
    $(function() {
        $('#deleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var recipient = button.data('id-delete')
            var recipient2 = button.data('name-delete')
            var modal = $(this)
            modal.find('.modal-title').text('Deletar ' + recipient2 + ' ?')
            modal.find('#recipient-id-delete').val(recipient)
            modal.find('#recipient-name-delete').val(recipient2)
        });
    });
</script>

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
                                    <li class="breadcrumb-item active">Listar usuário</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>



                        </div>
                    </div>
                    <!--Campos para mascaras-->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">

                        <?php 
                        if(isset($_GET['msg'])){
                            if($_GET['msg']== 1 ){?>
                            <div class="alert alert-success" role="alert">
                                Alterado com sucesso!
                            </div>
                        <?php } else {?>
                                <div class="alert alert-warning" role="alert">
                                    Excluído com sucesso!
                                </div>
                           <?php }   
                        }?>

                        <div class="card mb-3">
                            <div class="card-header">
                                <h3>Lista de usuários</h3>

                            </div>

                            <div class="card-body">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example" class="table table-bordered table-hover display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Nome</th>
                                                            <th>CPF</th>
                                                            <th>E-mail</th>
                                                            <th>Fone/Celular</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include 'conexao.php';
                                                        $sql = "SELECT * FROM users";
                                                        $search = mysqli_query($conexao, $sql);

                                                        while ($array = mysqli_fetch_array($search)) {
                                                            $id = $array['id_user'];
                                                            $name = $array['nome'];
                                                            $cpf = $array['cpf'];
                                                            $endereco = $array['endereco'];
                                                            $cep = $array['cep'];
                                                            $cidade = $array['cidade'];
                                                            $estado = $array['estado'];
                                                            $email = $array['email'];
                                                            $fone = $array['fone'];
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $name; ?></td>
                                                                <td><?php echo $cpf; ?></td>
                                                                <td><?php echo $email; ?></td>
                                                                <td><?php echo $fone; ?></td>
                                                                <td>
                                                                    <button type="button" class="btn btn-warning" title="Editar" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $id ?>  " data-name="<?php echo $name ?>  " data-cpf="<?php echo $cpf ?>" data-email="<?php echo $email ?>  " data-fone="<?php echo $fone ?>  " data-endereco="<?php echo $endereco ?>  " data-cep="<?php echo $cep ?>  " data-cidade="<?php echo $cidade ?>" data-estado="<?php echo $estado ?>"><i class="fas fa-user-edit"></i></button>
                                                                    <button type="button" class="btn btn-danger" title="Apagar" data-toggle="modal" data-target="#deleteModal" data-id-delete="<?php echo $id ?>  " data-name-delete="<?php echo $name ?>  "><i class="fas fa-user-minus"></i></button>
                                                                </td>
                                                            </tr>


                                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="edit_user.php" method="post">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="recipient-id" style="display:none" name="id_user">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="col-form-label">Nome</label>
                                                                                    <input type="text" class="form-control" id="recipient-name" name="name">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="col-form-label">CPF</label>
                                                                                    <input type="text" class="form-control cpf" id="recipient-cpf" name="cpf">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="col-form-label">Endereço</label>
                                                                                    <input type="text" class="form-control" id="recipient-endereco" name="endereco">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="col-form-label">CEP</label>
                                                                                    <input type="text" class="form-control cep" id="recipient-cep" name="cep">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="col-form-label">Cidade</label>
                                                                                    <input type="text" class="form-control" id="recipient-cidade" name="cidade">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="col-form-label">Estado</label>
                                                                                    <input type="text" class="form-control" id="recipient-estado" name="estado">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="col-form-label">Email</label>
                                                                                    <input type="text" class="form-control" id="recipient-email" name="email">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="col-form-label">Telefone/Celular</label>
                                                                                    <input type="text" class="form-control telefone" id="recipient-fone" name="fone">
                                                                                </div>



                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                            <button type="submit" class="btn btn-primary">Confirmar</button>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        <!--Modal Deletar-->

                                                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="delete_user.php" method="post">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="recipient-id-delete" style="display:none" name="id_user">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="col-form-label"  >Nome</label>
                                                                                    <input type="text" class="form-control" id="recipient-name-delete" readonly name="name">
                                                                                </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                            <button type="submit" class="btn btn-danger">Apagar</button>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive-->

                                        </div>
                                        <!-- end card-body-->

                                    </div>
                                    <!-- end card-->

                                </div>


                            </div>
                        </div><!-- end card-->
                    </div>


                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        <script type="text/javascript">
            $(".telefone").mask("(00) 0 0000-0000");

            $(".cep").mask("00000-000")

            $(".cpf").mask("000.000.000-00")
        </script>

        <?php include 'footer.php' ?>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                    }
                });
            });
        </script>
        <script type="https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"></script>