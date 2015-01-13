// Replace .scroll with a class of your own or use .scroll.
// Whatever class you use must be applied to the anchor which
// is going to be clicked. #target sets the destination.
// Use your own id or use #target. #target must be applied
// to the destination. The number is the time taken for the animation
// to complete in milliseconds; change it to whatever you want.

$(function () {
    $(".scroll").click(function () {
        $("html,body").animate({
            scrollTop: $("#target").offset().top
        }, "500");
        return false
    })
})


