<?php
$data['controller'] = "produto";
$this->load->view('header', $data);

if(isset($editar))
{
        ?> <script type='text/javascript' src=<?=base_url('application\views\assets\js\produto.js')?>></script> <?php 

        if ($editar == 2)
        {
                ?>
                <script>
                SwalSqlGravar('sucesso');
                </script>

                <?php 
        }

        else if ($editar == 3)
        {	
                ?>
                <script>
                SwalSqlGravar('erro');
                </script>

                <?php 
        }
}

?>
<!-- Aqui vai o conteúdo -->
<h2>Tela de Cadastro para Vacinas</h2>
<?php echo form_open_multipart('produto/vacinasgravar'); ?>
        <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" style="min-width:300px;" aria-describedby="nameHelp" placeholder="Digite nome da vacina">
        </div>
        <div class="form-group">
                <label for="nome">Unidade de Uso</label>
                <select class="browser-default custom-select" name="unidade" id='unidade'>
                        <option selected>Selecione uma Unidade</option>
                        <option value="ml">ML</option>
                        <option value="ds">DOSE</option>
                </select>
        </div>
        <div class="form-group">
                <label for="local">Local de Aplicação</label>
                <input type="text" class="form-control" id="local" name="local" aria-describedby="localHelp" placeholder="Digite o local da aplicação">
        </div>
        <div class="form-group">
                <label for="local">Fabricante</label>
                <input type="text" class="form-control" id="fabricante" name="fabricante" aria-describedby="fabriHelp" placeholder="Digite o fabricante">
        </div>
        <div class="form-group">
                <label for="data_validade">Data de Validade</label>
                <input type="date" class="form-control" id="data_validade" name="validade" aria-describedby="data_validadeHelp" placeholder="Selecione a Data de Validade">
        </div>
        <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
<?php echo form_close(); ?>

<?php $this->load->view('footer') ?>