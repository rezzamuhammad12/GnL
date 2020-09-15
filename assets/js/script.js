$('#editMenuModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var menu = button.data('menu')
    var id = button.data('id')

    var modal = $(this);

    modal.find('#id').val(id);
    modal.find('#menu').val(menu);
})