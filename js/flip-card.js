jQuery(document).ready(function($) {
    $('.flip-button').on('click', function() {
        var $card = $(this).closest('.card');
        $card.toggleClass('flipped');
    });
});
