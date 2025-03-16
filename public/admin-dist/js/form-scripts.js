$(document).ready(function () {
    $('body')
        .on('click', '.delete-item', function (e) {
            e.preventDefault();
            var action = $(this).attr('href');
            $.ajax({
                url: action,
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    alert(response.message);
                    location.reload();
                }
            })
        }).on('click', '.restore-item', function (e) {
            e.preventDefault();
            var action = $(this).attr('href');
            $.ajax({
                url: action,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    alert(response.message);
                    location.reload();
                }, error: function (response) {
                    response = response.responseJSON;
                    alert(response.message);
                }
            })
        });
})
