// Baseurl

// function
// Photoshop Modal
$('#addVideo').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var title = button.data('title')
    var btn = button.data('button')

    var id = button.data('id')
    var judul = button.data('judul')
    var link = button.data('link')
    var kelas = button.data('kelas')
    var deskripsi = button.data('deskripsi')

    var modal = $(this)
    modal.find('.modal-title').text(title);
    modal.find('.action').text(btn);

    modal.find('#id').val(id);
    modal.find('#judul').val(judul);
    modal.find('#link').val(link);
    modal.find('#kelas').val(kelas);
    modal.find('#deskripsi').val(deskripsi);

    if (btn == 'Add') {
        $('.modal-content form').attr('action', "video")
        modal.find('#id').val("");
        modal.find('#judul').val("");
        modal.find('#link').val("");
        $("select#kelas").prop('selectedIndex', 0);
        modal.find('#deskripsi').val("");
    } else {
        $('.modal-content form').attr('action', "video/editVideo")
    }
})

// Ilustrator Modal
$('#addIlustrator').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var title = button.data('title')
    var btn = button.data('button')

    var id = button.data('id')
    var judul = button.data('judul')
    var link = button.data('link')
    var kelas = button.data('kelas')
    var deskripsi = button.data('deskripsi')

    var modal = $(this)
    modal.find('.modal-title').text(title);
    modal.find('.action').text(btn);

    modal.find('#id').val(id);
    modal.find('#judul').val(judul);
    modal.find('#link').val(link);
    modal.find('#kelas').val(kelas);
    modal.find('#deskripsi').val(deskripsi);

    if (btn == 'Add') {
        $('.modal-content form').attr('action', "ilustrator")
        modal.find('#id').val("");
        modal.find('#judul').val("");
        modal.find('#link').val("");
        $("select#kelas").prop('selectedIndex', 0);
        modal.find('#deskripsi').val("");
    } else {
        $('.modal-content form').attr('action', "editIlustrator")
    }
})

//  Edit User Acces Modal
$('#editUserModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var title = button.data('title')

    var id = button.data('id')
    var name = button.data('name')
    var email = button.data('email')
    var role = button.data('role')

    var modal = $(this)
    modal.find('.modal-title').text(title);

    modal.find('#id').val(id);
    modal.find('#name').val(name);
    modal.find('#email').val(email);
    modal.find('#role').val(role);
    console.log(role);

    // if (btn == 'Add') {
    //     $('.modal-content form').attr('action', "ilustrator")
    //     modal.find('#id').val("");
    //     modal.find('#judul').val("");
    //     modal.find('#link').val("");
    //     $("select#kelas").prop('selectedIndex', 0);
    //     modal.find('#deskripsi').val("");
    // } else {
    //     $('.modal-content form').attr('action', "editIlustrator")
    // }
})