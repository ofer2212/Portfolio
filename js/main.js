(function ($) {
    $('.port-item').on("click",function () {
        $('.collapse').collapse('hide');
    });


    $('[data-toggle="lightbox"]').on( 'click', function (event) {
        event.preventDefault();
        return $(this).ekkoLightbox({
            onShow: function (ev) {
                var toAppend = projectFooterGenerator($(event.target))
                setTimeout(function () {
                    var el = $(ev.currentTarget).find(".modal-footer");
                    $(el).append(toAppend)
                }, 1000);
            },
        });
    });

    function projectFooterGenerator(el){
        var link = el.data("link")
        var name = el.data("name")
        var desc = el.data("desc")

        return  $(`<article class="project-footer"> <section><h3>${name}</h3> 
                    <p>${desc}</p></section> <a href="${link}" target="_blank">
                    Link to Code&nbsp;<i class="fab fa-github"></a> </article>`)
    }
})(jQuery);
