$(document).ready(function () {

    $('body').on('click', '.btn-remover', function () {

        var id = $(this).data('id');

        var modal = `
            <!-- Modal -->
            <div class="modal fade" id="modal-confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><span class="mdi mdi-trash-can-outline"></span> Confirmar Remoção</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Deseja realmente remover esse registro?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                    <a href="" class="btn btn-primary">Sim</a>
                  </div>
                </div>
              </div>
            </div>        
        `;

        $('.modal-confirm').empty();
        $('.modal-confirm').append(modal);

        $('#modal-confirm').modal('show');
    });

});