<div class="row-fluid">
	<div class="span12">
		<div class="widget widget-simple widget-collapsible">
			<div class="widget-header">
				<h4>
					<i class="fontello-icon-window">
					</i>
					Acciones
					<small>
						significado
					</small>
				</h4>
				<div class="widget-tool">
					<a class="btn btn-glyph btn-link widget-toggle fontello-icon-publish" data-toggle="collapse" data-target="#demo1" href="javascript:void(0);"></a>
				</div>
			</div>
			<div id="demo1" class="widget-content collapse in">
				<div class="widget-body">
					<p>
						<?php echo $this->
							Html->image("edit.png", array( "title" => "Editar Usuario") ); ?> Edita la informacion del Usuario &nbsp;&nbsp;&nbsp;
							<?php echo $this->
								Html->image("elim.png", array( "title" => "Dar de baja" )); ?> &nbsp;&nbsp;&nbsp; Elimina la inforacion del Usuario
					</p>
				</div>
				<div class="widget-footer">
					<div class="btn-toolbar padding-side">
					</div>
				</div>
			</div>
		</div>
		<!-- // Widget -->
	</div>
</div>