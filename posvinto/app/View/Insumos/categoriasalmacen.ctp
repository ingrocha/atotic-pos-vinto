<?php //debug($catalmacen);exit;  ?>
<div id="main-content" class="main-content container-fluid">
    <?php echo $this->
            element('sidebar/almacen');
    ?>
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3>
                    <i class="aweso-icon-table opaci35">
                    </i>
                    Categor&iacute;as de almacen
                    <small>
                        listado
                    </small>
                </h3>
                <p>
                    Despliega la lista de todos las categor&iacute;as del almacen
                </p>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <!--contenedor de la tabla-->
                    <div class="widget widget-simple widget-table">
                        <table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
                            <caption>
                                Categor&iacute;as
                                <span>
                                </span>
                            </caption>
                            <thead>
                            <th scope="col">
                                Nro.
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                                Nombre
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                                Descripci&oacute;n
                                <span class="column-sorter">
                                </span>
                            </th>

                            <th scope="col">
                                Estado
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                                Acciones
                                <span class="column-sorter">
                                </span>
                            </th>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                <?php foreach ($catalmacen as $c): ?>
                                <?php $id = $c['Tipo']['id']; ?>
                                    <tr>
                                        <td>
                                             <?php echo $i; $i++; ?>
                                        </td>
                                        <td>
                                            <?php echo $c['Tipo']['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $c['Tipo']['descripcion']; ?>
                                        </td>
                                        <td>
                                            <?php if ($c['Tipo']['estado'] == 1): ?>
                                                Alta
                                            <?php else: ?>
                                                Baja
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->image("edit.png", array("title" => "Editar", 'url' => array('action' => 'editarcategoria', $id))); ?>
                                            <?php //echo $this->Html->image("elim.png", array( "title" => "Eliminar Insumo", 'url' => array('action' => 'descat', $id) )); ?>
                                            <?php echo $this->Html->link($this->Html->image("iconos/elim.png", array("alt" => 'Eliminar', 'title' => 'Eliminar Categoria de Almacen')), array('action' => 'descat', $c['Tipo']['id']), array('escape' => false), ("Desea eliminar realmente??")); ?>

                                        </td>
                                    </tr>
<?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>