<?=$cabecera?>
<a class="btn btn-info    " href="<?=base_url('crear')?>">crear un libro</a>
    <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($libros as $libro): ?>
                    <tr>
                        <td><?=$libro['id']?></td>
                        <td>
                        <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" 
                        width="100" alt=""></td>
                        <td><?php echo $libro['nombre'];?></td>
                        <td>
                            <a href="<?=base_url('editar/'.$libro['id']);?>" class="btn btn-info    " type="button">Editar</a>
                            <a href="<?=base_url('borrar/'.$libro['id']);?>" class="btn btn-primary" type="button">Borrar</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
<?=$pie?>