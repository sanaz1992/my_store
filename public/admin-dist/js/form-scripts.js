$(document).ready(function () {
    $('body').on('click', '.delete-item', function (e) {
        e.preventDefault();
        var action = $(this).attr('href');
        $.ajax({
            url: action,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                alert('اطلاعات با موفقیت حذف شد.');
                location.reload();
            }
        })
    });
})
