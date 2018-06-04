<div class="modal fade" id="deletar-links" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form id="deleteForm" action="" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-header">
                <h1>Atenção</h1>
            </div>
            <div class="modal-body">
              <h3>Deseja deletar?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger btn-block mt-0">Excluir</a>
            </div>
          </form>
        </div>
    </div>
</div>
