<!-- Container -->
<div id="container">
    <div class="shell">		       
        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>	            
            <!-- Content -->
            <div id="content">				
                <!-- Box -->
                <div class="boxa">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">BODEGA</h2>
                        <div class="right">					
                        </div>
                    </div>
                    <!-- End Box Head -->	
                    <!-- Table -->
                    <div class="table">
                        <?php echo $this->element('tablagrid'); ?>
                        <table id="grid" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nombre</th>     
                                    <th>Existencias</th>        
                                </tr>  
                            </thead>
                            <tbody> 
                                <?php foreach ($bodega as $b): ?>
                                    <tr>
                                        <td>
                                            <?php $id = $b['Insumo']['id']; ?>            
                                            <?php echo $b['Insumo']['nombre']; ?>
                                        </td>        

                                        <td>
                                            <?php echo $b['Bodega']['total']; ?>
                                        </td>     
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Table -->

        </div>
        <!-- End Box -->


    </div>
    <!-- End Content -->			
    <!-- Sidebar -->
    <?php echo $this->element('menualmacenes') ?>
    <!-- End Sidebar -->

    <div class="cl">&nbsp;</div>			
</div>
<!-- Main -->
</div>