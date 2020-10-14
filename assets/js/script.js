$('#newMenuModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var title = button.data('title')
    var btn = button.data('button')
    var oldMenu = button.data('menu')
    var idMenu = button.data('idmenu')
    var modal = $(this)
    modal.find('.modal-title').text(title);
    modal.find('.action').text(btn);
    if (oldMenu) {
        modal.find('#idMenu').val(idMenu)
        modal.find('#menu').val(oldMenu)
    }
    if (btn == 'Add') {
        $('.modal-content form').attr('action', "menu")
        modal.find('#idMenu').val("")
        modal.find('#menu').val("")
    } else {
        $('.modal-content form').attr('action', "menu/edit")
    }
})


$('#newSubMenuModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var title = button.data('title')
    var btn = button.data('button')

    var id = button.data('id')
    var name = button.data('name')
    var menu = button.data('menu')
    var url = button.data('url')
    var icon = button.data('icon')
    var isActive = button.data('is_active')

    var modal = $(this)
    modal.find('.modal-title').text(title);
    modal.find('.action').text(btn);
    if (id) {
        modal.find('#idmenu').val(id)
        modal.find('#menu_id option[value="' + menu + '"]').prop('selected', true)
        modal.find('#title').val(name)
        modal.find('#url').val(url)
        modal.find('#icon').val(icon)
        modal.find('#is_active').val(isActive)
    }
    if (btn == 'Add') {
        $('.modal-content form').attr('action', "submenu")
        modal.find('#idmenu').val("")
        modal.find('#menu_id option:eq(0)').prop('selected', true)
        modal.find('#title').val("")
        modal.find('#url').val("")
        modal.find('#icon').val("")
        modal.find('#is_active').val(1)
    } else {
        $('.modal-content form').attr('action', "editSubMenu")
    }
})