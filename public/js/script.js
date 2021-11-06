$(document).ready(function() {
    $('body').on('click', '.lessons-block', function() {
        var dataId = $(this).data('id'),
            dataTitle = $(this).data('title');

        var lessonModal = $('#lesson-modal');

        lessonModal.find('#lesson-modal-header').eq(0).html(dataTitle);

        $.ajax('/lesson/' + dataId,   // request url
            {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data, status, xhr) {
                    lessonModal.find('#lesson-modal-body').eq(0).html(data);

                    var myModal = new bootstrap.Modal(document.getElementById('lesson-modal'), {
                        keyboard: false
                    });

                    myModal.show();
                }
            });
    });

    $('body').on('click', '.sign-up-btn', function() {
        $('#lesson-modal').modal('hide');
        $('#signup-modal').modal('show');
    });

    // Owl Carousel
    var owl = $("#reviews .owl-carousel");
    owl.owlCarousel({
        items: 2,
        margin: 10,
        loop: true,
    });

    // Owl Carousel
    var owl = $("#gallery .owl-carousel");
    owl.owlCarousel({
        items: 3,
        margin: 10,
        loop: true,
    });
});
