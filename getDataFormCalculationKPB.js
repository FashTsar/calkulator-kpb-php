jQuery(document).ready(function($) {

    $("#submit").on("click", function() {

        var widthBulk = $("#widthBulk").val(); // Получаем ширину наволочки
        var heightBulk = $("#heightBulk").val(); // Получаем высоту наволочки
        var pocketBulk = $("#pocketBulk").val(); // Получаем карман наволочки
        var countBulk = $("#countBulk").val(); // Получаем количество наволочек

        var widthDuvetCover = $("#widthDuvetCover").val(); // Получаем ширину подадеяльника
        var heightDuvetCover = $("#heightDuvetCover").val(); // Получаем высоту подадеяльника
        var countDuvetCover = $("#countDuvetCover").val(); // Получаем количество подадеяльников

        var widthSheet = $("#widthSheet").val(); // Получаем ширину простыни
        var heightSheet = $("#heightSheet").val(); // Получаем высоту простыни
        var countSheet = $("#countSheet").val(); // Получаем количество простыней

        var fabricWidth = $("#fabricWidth").val(); // Получаем ширину ткани
        var seam = $("#seam").val(); // Получаем шов


        $.ajax({

            url: "/dataDistribution.php", // Куда отправляем данные (обработчик)
            type: "post",

            data: {
                "widthBulk": widthBulk,
                "heightBulk": heightBulk,
                "pocketBulk": pocketBulk,
                "countBulk": countBulk,
                "widthDuvetCover": widthDuvetCover,
                "heightDuvetCover": heightDuvetCover,
                "countDuvetCover": countDuvetCover,
                "widthSheet": widthSheet,
                "heightSheet": heightSheet,
                "countSheet": countSheet,
                "fabricWidth": fabricWidth,
                "seam": seam
            },

            success: function(data) {
                $(".result").html(data); // Выводим результат
            }
        });
    });
});