jQuery(function($) {
    $('form').on('submit', function(e) {
        e.preventDefault();
        let formData = $(this).serialize();
        console.log(formData);
        $.ajax({
            url:'/server.php',
            method:'POST',
            data:formData,
            success: function(){
                alert('Успешно');
            },
            processData: false, //запрещают преобразовывать отправляемые данные
            contentType: false, // и сервер получает их в том виде в каком они есть
        })
    })
});