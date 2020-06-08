<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Produto</th>
        <th scope="col">Marca</th>
        <th scope="col">Preço</th>
        <th scope="col"> </th>
        </tr>
    </thead>
    <tbody>
   
    <?php foreach($produtos as $p) { ?>
        <tr>
        
        <td><?php echo $p->produto ?></td>
        <td><?php echo $p->marca ?></td>
        <td><?php echo $p->preco ?></td>
        <td><a href="produtos_edit?id=<?php echo $p->_id ?>" class="bnt"><img src="assets/svg/editar.svg" style="width:1em;height:auto"></a></td>
        </tr>
<?php }?>
    </tbody>
    </table>
    <div class="float-right"><a href="produtos_add"><img src="assets/svg/adicionar.svg" style="width:4em;height:auto"> </a></div>
</div>