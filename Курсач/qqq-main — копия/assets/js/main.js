$(document).ready(function () {
    $('.search-button').click(function () {
        let word = $('.input-search').val();
        $.ajax({
            type: "POST",
            url: "/qqq-main/assets/php/search.php",
            data: { 'word': word },
        });
    })
})

// $(document).ready(function () {
//     $('.input-search').on('keyup', function () {
//         const word = $('.input-search').val();
//         console.log(word);
//     })
// })
