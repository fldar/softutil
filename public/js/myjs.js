// $('#exampleModal').on('show.bs.modal', function (event) {
//   var button = $(event.relatedTarget) // Button that triggered the modal
//   var id = button.data('id') // Extract info from data-* attributes
//   var modal = $(this)
//   document.dele
// })


$('#deletar-links').on('show.bs.modal', function(e) {
    $(this).find('#deleteForm').attr('action', $(e.relatedTarget).data('href'));
});
