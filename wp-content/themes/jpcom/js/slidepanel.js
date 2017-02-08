(function($) {
$('#toggle').toggle( 
    function() {
        
        $("span:nth-child(1)").addClass('rotate_top');
        $("span:nth-child(2)").addClass('rotate_middle');
        $("span:nth-child(3)").addClass('rotate_bottom');
        $('#popout').animate({ left: 0 }, 'slow' );
    }, 
    function() {
        
        $("span:nth-child(1)").removeClass('rotate_top');
        $("span:nth-child(2)").removeClass('rotate_middle');
        $("span:nth-child(3)").removeClass('rotate_bottom');
        $('#popout').animate({ left: -250 }, 'slow' );
    }
);
})(jQuery);


        
