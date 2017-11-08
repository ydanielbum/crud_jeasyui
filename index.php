<?php
require 'templates/topo.php'

?>

<!-- TABLE -->
<h2>Veículos</h2>
<table id="table-infos" title="Veiculos" class="easyui-datagrid" style="width:700px;height:250px"
       url="dao/get_veiculos.php"
       toolbar="#toolbar"
       rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>

    <tr>
        <th field="nome" width="50">Nome</th>
        <th field="modelo" width="50">Modelo</th>
        <th field="ano" width="50">Ano</th>
    </tr>
    </thead>
</table>

<div id="toolbar">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="cadastrarVeiculo()">Cadastrar Veículo</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editarVeiculo()">Editar Veículo</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="excluirVeiculo()">Excluir Veículo</a>
</div>

<!-- FORMULARIO -->
<div id="formulario" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
     closed="true" buttons="#dlg-buttons">
    <div class="ftitle">Veículo Formulário</div>
    <form id="form" method="post" novalidate>
        <div class="fitem">
            <label>Nome:</label>
            <input name="nome" class="easyui-textbox" required="true">
        </div>
        <div class="fitem">
            <label>Modelo:</label>
            <input name="modelo" class="easyui-textbox">
        </div>
        <div class="fitem">
            <label>Ano:</label>
            <input name="ano" class="easyui-textbox">
        </div>
    </form>
</div>


<div id="dlg-buttons">
    <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="salvarVeiculo()" style="width:90px">Salvar</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
</div>



<?php
require 'templates/rodape.php';
?>