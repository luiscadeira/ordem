

<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navibar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"></h1>

        <?php if ($message = $this->session->flashdata('sucesso')): ?>
            <div class="row">

                <div class="col-md-12">

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="far fa-smile-wink"></i>&nbsp;&nbsp;<?php echo $message; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>

            </div>

        <?php endif; ?>

        <?php if ($message = $this->session->flashdata('info')): ?>
            <div class="row">

                <div class="col-md-12">

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;<?php echo $message; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>

            </div>
        <?php endif; ?>

        <?php if ($this->ion_auth->is_admin()): ?>

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total de vendas</div>
                                    <div class="h5 mb-0 font-weight-bold text-success"><?php echo 'R$&nbsp;' . ($somas_vendas->venda_valor_total == NULL ? '0,00' : $somas_vendas->venda_valor_total); ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-shopping-cart fa-3x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary border-bottom-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">total de servi??os</div>
                                    <div class="h5 mb-0 font-weight-bold text-primary"><?php echo 'R$&nbsp;' . ($somas_ordem_servicos->ordem_servico_valor_total == NULL ? '0,00' : $somas_ordem_servicos->ordem_servico_valor_total); ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-laptop fa-3x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger border-bottom-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total a pagar</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-danger"><?php echo 'R$&nbsp;' . ($total_pagar->conta_pagar_valor == NULL ? '0,00' : $total_pagar->conta_pagar_valor); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-piggy-bank fa-3x text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning border-bottom-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Contas a receber</div>
                                    <div class="h5 mb-0 font-weight-bold text-warning"><?php echo 'R$&nbsp;' . ($total_receber->conta_receber_valor == NULL ? '0,00' : $total_receber->conta_receber_valor); ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-hand-holding-usd fa-3x text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <?php endif; ?>

        <div class="row">

            <div class="col-lg-6 mb-4">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">TOP 3 produtos mais vendidos</h6>
                    </div>
                    <div class="card-body border-bottom-success">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?php echo base_url('public/img/produtos_vendidos.svg'); ?>" alt="">
                        </div>

                        <div class="table-responsive">

                            <table class="table table-striped table-borderless">

                                <thead>
                                    <tr>
                                        <th>Nome produto</th>
                                        <th class="text-center">Vendidos</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($produtos_mais_vendidos as $produto): ?>

                                        <tr>
                                            <td><?php echo $produto->produto_descricao ?></td>
                                            <td class="text-center"><?php echo '<span class="badge badge-success">' . $produto->quantidade_vendidos . '</span>' ?></td>
                                        </tr>


                                    <?php endforeach; ?>

                                </tbody>

                            </table>


                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">TOP 3 servi??os mais vendidos</h6>
                    </div>
                    <div class="card-body border-bottom-primary">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 16.3rem;" src="<?php echo base_url('public/img/servicos_vendidos_2.svg'); ?>" alt="">
                        </div>

                        <div class="table-responsive">

                            <table class="table table-striped table-borderless">

                                <thead>
                                    <tr>
                                        <th>Nome servi??o</th>
                                        <th class="text-center">Vendidos</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($servicos_mais_vendidos as $servico): ?>

                                        <tr>
                                            <td><?php echo $servico->servico_nome ?></td>
                                            <td class="text-center"><?php echo '<span class="badge badge-primary">' . $servico->quantidade_vendidos . '</span>' ?></td>
                                        </tr>


                                    <?php endforeach; ?>

                                </tbody>

                            </table>


                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


