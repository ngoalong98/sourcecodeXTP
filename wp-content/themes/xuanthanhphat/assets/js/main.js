function openNav() {
    document.getElementById("mySidenav").style.width = "320px";
    document.getElementById("myCanvasNav").style.width = "100%";
    document.getElementById("myCanvasNav").style.opacity = "0.8";
    document.getElementById("rockthemes-inline-nav").style.display = "none";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeOffcanvas() {
    document.getElementById("mySidenav").style.width = "0%";
    document.body.style.backgroundColor = "white";
    document.getElementById("myCanvasNav").style.width = "0%";
    document.getElementById("myCanvasNav").style.opacity = "0";
    document.getElementById("rockthemes-inline-nav").style.display = "block";
}
function animateNumber(finalNumber, delay, startNumber = 0, callback) {
    let currentNumber = startNumber
    const interval = window.setInterval(updateNumber, delay)
    function updateNumber() {
        if (currentNumber >= finalNumber) {
            clearInterval(interval)
        } else {
            currentNumber++
            callback(currentNumber)
        }
    }
}
window.homepagecheck = function () {
    var check = false;
    if (document.location.pathname === "/") {
        check = true;
    }
    return check;
}
if (window.homepagecheck()) {

    document.addEventListener('DOMContentLoaded', function () {
        animateNumber(4000, 10, 0, function (number) {
            const formattedNumber = number.toLocaleString();
            document.getElementById('data_start-1').innerText = formattedNumber;
        })

        animateNumber(98, 10, 0, function (number) {
            const formattedNumber = number.toLocaleString();
            document.getElementById('data_start-2').innerText = formattedNumber;
        })

        animateNumber(1500, 10, 0, function (number) {
            const formattedNumber = number.toLocaleString();
            document.getElementById('data_start-3').innerText = formattedNumber;
        })
    })
} else {

}


$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    var $anchor = $(this);
    if (this.hash !== "") {
        var offset2 = -80;
        $('html, body').animate({
            scrollTop: $($anchor.attr('href')).offset().top + offset2
        }, 1000);
    }
});





$(document).ready(function () {

    var wC = document.documentElement.scrollTop;
    if (wC > 60) {
        $('.navbar').addClass('fixed-top');
    } else {
        $('.navbar').removeClass('fixed-top');
    }
    let view = 0;
    $(window).scroll(function () {
        var scroll = Math.floor($(window).scrollTop());
        if (scroll > 60) {
            $('.navbar').addClass('fixed-top');
            $('.navbar-nav-pc>li>a').css({ 'height': '60px', 'line-height': '60px', 'transition': 'height 1s' })
            $('.navbar-search>a').css({ 'height': '60px', 'line-height': '60px', 'transition': 'height 1s' })
        } else {
            $('.navbar').removeClass('fixed-top');
            $('.navbar-nav-pc>li>a').css({ 'height': '98px', 'line-height': '98px', 'transition': 'height 1s' })
            $('.navbar-search>a').css({ 'height': '98px', 'line-height': '98px', 'transition': 'height 1s' })
        }
        if (window.homepagecheck()) {


            if ($('#partner').offset().top >= $(window).scrollTop()) {

            }
            else {

                if (view == 0) {
                    animateNumber(95, 10, 40, function (number) {
                        const formattedNumber = number.toLocaleString()
                        document.getElementById('team-1').style.width = formattedNumber + '%'
                    })
                    animateNumber(90, 10, 40, function (number) {
                        const formattedNumber = number.toLocaleString()
                        document.getElementById('team-2').style.width = formattedNumber + '%'
                    })
                    animateNumber(99, 10, 40, function (number) {
                        const formattedNumber = number.toLocaleString()
                        document.getElementById('team-3').style.width = formattedNumber + '%'
                    })
                }
                view = 1;
            }
        }

        // $("#rockthemes-inline-nav ul li").click(function() {
        //   $("#rockthemes-inline-nav ul li").removeClass("active");
        //   $(this).addClass("active");
        // })
    });


    $(".icon-search").on("click", function () {
        $(".form-search").css({ "display": "flex" });
        $('.navbar-nav-pc, .navbar-search').hide();
    });
    $(".icon-hide").on("click", function () {
        $(".form-search").css({ "display": "none" });
        $('.navbar-nav-pc, .navbar-search').show();
    })

});

if (!window.homepagecheck()) {

    if (document.location.pathname === '/dich-vu/thiet-ke-mobile-app/') {

        document.addEventListener('DOMContentLoaded', function () {
            animateNumber(100, 10, 0, function (number) {
                const formattedNumber = number.toLocaleString();
                document.getElementById('mobile_start-1').innerText = formattedNumber;
            })

            animateNumber(200, 10, 0, function (number) {
                const formattedNumber = number.toLocaleString();
                document.getElementById('mobile_start-2').innerText = formattedNumber;
            })

            animateNumber(500, 10, 0, function (number) {
                const formattedNumber = number.toLocaleString();
                document.getElementById('mobile_start-3').innerText = formattedNumber;
            })

            animateNumber(24, 10, 0, function (number) {
                const formattedNumber = number.toLocaleString();
                document.getElementById('mobile_start-4').innerText = formattedNumber;
            })
        })
    // }else{
    //     var mq = window.matchMedia('(min-width: 1030px)'); // Kích thước màn hình tối thiểu script hoạt động

    //     if (mq.matches) {

    //         function sticky_scroll() {

    //             var a = $('.widget-sticky').outerWidth();// Tính độ rộng của widget cần cố định

    //             var b = $('.widget-nosticky').outerHeight(); // Tính độ cao của widget nằm trên

    //             var c = a + 'px'; // Đặt độ rộng bằng px của widget cần cố định

    //             var d = $('#menu').outerHeight(); // Tính độ cao của thanh menu cố định nằm trên, nếu menu không cố định đặt d = 0

    //             var e = $(window).scrollTop();

    //             var f = $('#footer').offset().top;

    //             var g = $('.widget-nosticky').offset().top + b;

    //             var h = $('.widget-sticky').height(); // Độ cao của widget cần cố định

    //             var i = 20; // Đặt độ cao tính từ footer tới chân widget quảng cáo để cố định 20 không cần thay đổi

    //             if (e + h > f - i)

    //                 $('.widget-sticky').css({

    //                     'top': (e + h - f + i) * -1,

    //                     'z-index': 0
    //                 });


    //             else if (e > g) {

    //                 $('.widget-sticky').css('position', 'fixed').css('top', d).css('width', c);
    //             } else {

    //                 $('.widget-sticky').css('position', '').css('top', '').css('width', '');

    //             }

    //         }

    //         $(function () {

    //             $(window).scroll(sticky_scroll)

    //             sticky_scroll();

    //             window.addEventListener('resize', function () {

    //                 if (this.matchMedia('(max-width:860px)').matches) $('.widget-sticky').hide()

    //                 else $('.widget-sticky').show()

    //             })
    //         });
    //     }
    }
    
}

