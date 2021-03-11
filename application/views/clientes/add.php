

<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navibar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('clientes'); ?>">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>



        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a title="Cadastrar novo cliente" href="<?php echo base_url('clientes/'); ?>" class="btn btn-success col-md-1 float-right"><i class="fas fa-chevron-circle-left"></i>&nbsp;Voltar</a>   
            </div>
            <div class="card-body">

                <form class="user" method="POST" name="form_add">

                    <div class="custom-control custom-radio custom-control-inline mt-2">
                        <input type="radio" id="pessoa_fisica" name="cliente_tipo" class="custom-control-input" value="1" <?php echo set_checkbox('cliente_tipo', '1') ?> checked="">
                        <label class="custom-control-label pt-1" for="pessoa_fisica">Pessoa física</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="pessoa_juridica" name="cliente_tipo" class="custom-control-input" value="2" <?php echo set_checkbox('cliente_tipo', '2') ?> >
                        <label class="custom-control-label pt-1" for="pessoa_juridica">Pessoa jurídica</label>
                    </div>


                    <fieldset class="mt-5 border p-2">

                        <legend class="font-small" ><i class="fas fa-user-tie"></i>&nbsp;Dados pessoais</legend>

                        <div class="mb-4 row">

                            <div class="col-md-4">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="cliente_nome" placeholder="Nome do cliente" value="<?php echo set_value('cliente_nome'); ?>">
                                <?php echo form_error('cliente_nome', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>



                            <div class="col-md-5">
                                <label>Sobrenome</label>
                                <input type="text" class="form-control" name="cliente_sobrenome" placeholder="Sobrenome do cliente" value="<?php echo set_value('cliente_sobrenome'); ?>">
                                <?php echo form_error('cliente_sobrenome', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>

                            <div class="col-md-3">
                                <label>Data de nascimento</label>
                                <input type="date" class="form-control " name="cliente_data_nascimento" value="<?php echo set_value('cliente_cliente_data_nascimento'); ?>">
                                <?php echo form_error('cliente_data_nascimento', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>  



                        </div>

                        <div class="mb-3 row">



                            <div class="col-md-3">

                                <div class="pessoa_fisica">

                                    <label>CPF</label>
                                    <input type="text" class="form-control  cpf" name="cliente_cpf" placeholder="CPF do cliente" value="<?php echo set_value('cliente_cpf'); ?>">
                                    <?php echo form_error('cliente_cpf', '<div class="form-text text-danger">', '</div>'); ?>

                                </div>

                                <div class="pessoa_juridica">

                                    <label>CNPJ</label>
                                    <input type="text" class="form-control  cnpj" name="cliente_cnpj" placeholder="CNPJ do cliente" value="<?php echo set_value('cliente_cnpj'); ?>">
                                    <?php echo form_error('cliente_cnpj', '<div class="form-text text-danger">', '</div>'); ?>

                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="pessoa_fisica">RG</label>
                                <label class="pessoa_juridica">Inscrição estadual</label>
                                <input type="text" class="form-control " name="cliente_rg_ie" value="<?php echo set_value('cliente_rg_ie'); ?>">
                                <?php echo form_error('cliente_rg_ie', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>

                            <div class="col-md-6">
                                <label>E-mail</label>
                                <input type="email" class="form-control " name="cliente_email" placeholder="Email do cliente" value="<?php echo set_value('cliente_email'); ?>">
                                <?php echo form_error('cliente_email', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>

                        </div>

                        <div class="mb-3 row">

                            <div class="col-md-6">
                                <label>Telefone fixo</label>
                                <input type="text" class="form-control  sp_celphones" name="cliente_telefone" placeholder="Telefone do cliente" value="<?php echo set_value('cliente_telefone'); ?>">
                                <?php echo form_error('cliente_telefone', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>

                            <div class="col-md-6">
                                <label>Telefone celular</label>
                                <input type="text" class="form-control  sp_celphones" name="cliente_celular" placeholder="Celular do cliente" value="<?php echo set_value('cliente_celular'); ?>">
                                <?php echo form_error('cliente_celular', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>

                        </div>

                    </fieldset>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small" ><i class="fas fa-map-marker-alt"></i>&nbsp;Dados de endereço</legend>

                        <div class="mb-3 row">

                            <div class="col-md-6">
                                <label>Endereço</label>
                                <input type="text" class="form-control "  placeholder="Endereço" name="cliente_endereco" value="<?php echo set_value('cliente_endereco'); ?>">
                                <?php echo form_error('cliente_endereco', '<div class="form-text text-danger">', '</div>'); ?>
                            </div> 

                            <div class="col-md-2">
                                <label>Número</label>
                                <input type="text" class="form-control "  placeholder="Número" name="cliente_numero_endereco" value="<?php echo set_value('cliente_numero_endereco'); ?>">
                                <?php echo form_error('cliente_numero_endereco', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Complemento</label>
                                <input type="text" class="form-control "  placeholder="Complemento" name="cliente_complemento" value="<?php echo set_value('cliente_complemento'); ?>">
                                <?php echo form_error('cliente_complemento', '<div class="form-text text-danger">', '</div>'); ?>
                            </div> 

                        </div>

                        <div class="mb-3 row">

                            <div class="col-md-4">
                                <label>Bairro</label>
                                <input type="text" class="form-control "  placeholder="Bairro" name="cliente_bairro" value="<?php echo set_value('cliente_bairro'); ?>">
                                <?php echo form_error('cliente_bairro', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>

                            <div class="col-md-2">
                                <label>CEP</label>
                                <input type="text" class="form-control  cep"  placeholder="CEP" name="cliente_cep" value="<?php echo set_value('cliente_cep'); ?>">
                                <?php echo form_error('cliente_cep', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>  

                            <div class="col-md-5">
                                <label>Cidade</label>
                                <input type="text" class="form-control "  placeholder="Cidade" name="cliente_cidade" value="<?php echo set_value('cliente_cidade'); ?>">
                                <?php echo form_error('cliente_cidade', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>  

                            <div class="col-md-1">
                                <label>UF</label>
                                <input type="text" class="form-control  uf"  placeholder="UF" name="cliente_estado" value="<?php echo set_value('cliente_estado'); ?>">
                                <?php echo form_error('cliente_estado', '<div class="form-text text-danger">', '</div>'); ?>
                            </div> 

                        </div>

                    </fieldset>


                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small" ><i class="fas fa-tools"></i>&nbsp;Configurações</legend>

                        <div class="form-group row">

                            <div class="col-md-4">
                                <label>Cliente ativo</label>
                                <select class="custom-select " name="cliente_ativo">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>                              
                            </div> 

                            <div class="col-md-8">
                                <label>Observações</label>
                                <textarea class="form-control "  placeholder="Obs" name="cliente_obs"></textarea>
                                <?php echo form_error('cliente_obs', '<div class="form-text text-danger">', '</div>'); ?>
                            </div>

                        </div>

                    </fieldset>


                    <button type="submit" class="btn btn-primary mt-3 col-md-1">Salvar</button>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


