<h1>Cadastrar Modelo</h1>
<form action="?page=salvar_modelo" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label>Marca do carro</label>
        <select name="marca_id_marca" class="form-control">
            <option value="">--Escolha a Marca--</option>
            <?php 
                $sqs = "SELECT * FROM marca";
                $res = $conn->query($sqs);
                while($row = $res->fetch_object()){
                    echo '<option value="'.$row->id_marca.'">'.$row->nome_marca.'</option>';
                }
            ?>  
        </select>
    </div>
    <div class="mb-3">
        <label>Nome do Modelo</label>
        <input type="text" name="nome_modelo" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor_modelo" class="form-control">
    </div>

    <div class="mb-3">
        <label>Ano</label>
        <input type="number" name="ano_modelo" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tipo (Ex: Sedan, Hatch)</label>
        <input type="text" name="tipo_modelo" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>