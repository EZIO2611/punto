<div class="modal" role="dialog" tabindex="-1" id="modal-delete-{{$mar->id_marca}}">
	{!!Form::open(array('action'=>array('MarcaController@destroy',$mar->id_marca),'method'=>'delete'))!!}

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="header">
				<button  type="button" class="close" data-dismiss="modal" aria-label="close">

					<span aria-hidden="true">x</span>
					
				</button>
				<h4 class="modal-title">Eliminar marca</h4>
			</div>

			<div class="modal-body">
				<p>¿Estas seguro de eliminar la marca?</p>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>

		</div>
	</div>

	{!!Form::close()!!}
	
</div>