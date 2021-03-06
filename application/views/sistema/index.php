

    <?php $this->load->view('layout/sidebar'); ?>

   

      <!-- Main Content -->
      <div id="content">

       <?php $this->load->view('layout/navibar'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            
            
         <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
           </ol>
         </nav>
            
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



        <?php if ($message = $this->session->flashdata('error')): ?>
            <div class="row">

                <div class="col-md-12">

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;<?php echo $message; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>

            </div>
        <?php endif; ?>

            

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
                
                <form class="user" method="POST" name="form_edit">
                    
                    <div class="mb-3 row">
                        
                        <div class="col-md-3">
                            <label>Raz??o social </label>
                            <input type="text" class="form-control" name="sistema_razao_social" placeholder="Raz??o social" value="<?php echo $sistema->sistema_razao_social; ?>">
                            <?php echo form_error('sistema_razao_social', '<div class="form-text text-danger">','</div>'); ?>
                        </div>

                        
                        
                        <div class="col-md-3">
                            <label>Nome fantasia</label>
                            <input type="text" class="form-control" name="sistema_nome_fantasia" placeholder="Nome fantasia" value="<?php echo $sistema->sistema_nome_fantasia; ?>">
                            <?php echo form_error('sistema_nome_fantasia', '<div class="form-text text-danger">','</div>'); ?>
                        </div>   
                        
                         <div class="col-md-3">
                             <label>CNPJ</label>
                             <input type="text" class="form-control cnpj" name="sistema_cnpj" placeholder="CNPJ" value="<?php echo $sistema->sistema_cnpj; ?>">
                            <?php echo form_error('sistema_cnpj', '<div class="form-text text-danger">','</div>'); ?>
                        </div>
                        
                         <div class="col-md-3">
                             <label>Inscri????o estadual</label>
                             <input type="text" class="form-control" name="sistema_ie" placeholder="Inscri????o estadual" value="<?php echo $sistema->sistema_ie; ?>">
                            <?php echo form_error('sistema_ie', '<div class="form-text text-danger">','</div>'); ?>
                        </div>

                    </div>
                    
                    <div class="mb-3 row">
                        
                        <div class="col-md-3">
                            <label>Telefone fixo</label>
                            <input type="text" class="form-control sp_celphones" name="sistema_telefone_fixo" placeholder="Telefone fixo" value="<?php echo $sistema->sistema_telefone_fixo; ?>">
                            <?php echo form_error('sistema_telefone_fixo', '<div class="form-text text-danger">','</div>'); ?>
                        </div>

                        
                        
                        <div class="col-md-3">
                            <label>Telefone m??vel</label>
                            <input type="text" class="form-control sp_celphones" name="sistema_telefone_movel" placeholder="Telefone m??vel" value="<?php echo $sistema->sistema_telefone_fixo; ?>">
                            <?php echo form_error('sistema_telefone_movel', '<div class="form-text text-danger">','</div>'); ?>
                        </div>   
                        
                         <div class="col-md-3">
                             <label>URL do site</label>
                             <input type="text" class="form-control" name="sistema_site_url" placeholder="URL do site" value="<?php echo $sistema->sistema_site_url; ?>">
                            <?php echo form_error('sistema_site_url', '<div class="form-text text-danger">','</div>'); ?>
                        </div>
                        
                         <div class="col-md-3">
                             <label>E-mail de contato</label>
                             <input type="text" class="form-control" name="sistema_email" placeholder="E-mail de contato" value="<?php echo $sistema->sistema_email; ?>">
                            <?php echo form_error('sistema_email', '<div class="form-text text-danger">','</div>'); ?>
                        </div>

                    </div>
                    
                    <div class="mb-3 row">
                        
                        <div class="col-md-4">
                            <label>Endere??o</label>
                            <input type="text" class="form-control" name="sistema_endereco" placeholder="Endere??o" value="<?php echo $sistema->sistema_endereco; ?>">
                            <?php echo form_error('sistema_endereco', '<div class="form-text text-danger">','</div>'); ?>
                        </div>

                        
                        
                        <div class="col-md-2">
                            <label>CEP</label>
                            <input type="text" class="form-control cep" name="sistema_cep" placeholder="CEP" value="<?php echo $sistema->sistema_cep; ?>">
                            <?php echo form_error('sistema_cep', '<div class="form-text text-danger">','</div>'); ?>
                        </div>   
                        
                         <div class="col-md-2">
                             <label>N??mero</label>
                             <input type="text" class="form-control" name="sistema_numero" placeholder="N??mero" value="<?php echo $sistema->sistema_numero; ?>">
                            <?php echo form_error('sistema_numero', '<div class="form-text text-danger">','</div>'); ?>
                        </div>
                        
                         <div class="col-md-2">
                             <label>Cidade</label>
                             <input type="text" class="form-control" name="sistema_cidade" placeholder="Cidade" value="<?php echo $sistema->sistema_cidade; ?>">
                            <?php echo form_error('sistema_cidade', '<div class="form-text text-danger">','</div>'); ?>
                        </div>
                        
                         <div class="col-md-2">
                             <label>UF</label>
                             <input type="text" class="form-control uf" name="sistema_estado" placeholder="UF" value="<?php echo $sistema->sistema_estado; ?>">
                            <?php echo form_error('sistema_estado', '<div class="form-text text-danger">','</div>'); ?>
                        </div>

                    </div>
                    
                    <div class="mb-3 row">
                        
                        <div class="col-md-12">
                            <label>Texto da ordem de servi??o e venda</label>
                            <textarea class="form-control" name="sistema_txt_ordem_servico" placeholder="Texto da ordem de servi??o e venda"><?php echo $sistema->sistema_txt_ordem_servico;?></textarea>
                            <?php echo form_error('value="<?php echo $sistema->sistema_txt_ordem_servico; ?>"', '<div class="form-text text-danger">','</div>'); ?>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary col-md-1">Salvar</button>
                  </form>
                
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
