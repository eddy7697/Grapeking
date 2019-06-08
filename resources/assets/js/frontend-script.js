$(function () {
    let btnClick = false

    $('.mega-btn').on('click', function(e) {
        let btn = $(this)
        let parent = $('.mega-nav')
        let target = btn.attr('data-menu-target')
        let megamenu = $('#site-mega-menu')
        let mask = $('.site-mega-menu-overlay')

        megamenu.addClass('showup').addClass('fadeInDown animated faster').delay(500).addClass('opened')
        mask.addClass('show').addClass('fadeIn animated faster')
        parent.find('.mega-nav-item').not('#' + target).removeClass('active')
        parent.find('.mega-nav-item#' + target).addClass('active')

        setTimeout(() => {
            btnClick = true
        }, 500);
    })

    $('.site-mega-menu-overlay').on('click', function () {
        hideMegamenu()
    })
    $('.site-header').on('click', function (e) {
        if (!$(e.target).hasClass('mega-btn') && !$(e.target).hasClass('mega-arrow')) {
            hideMegamenu()
        }
    })

    function hideMegamenu() {
        let menu = $('.site-mega-menu')
        let mask = $('.site-mega-menu-overlay')

        if (btnClick) {
            if (menu.hasClass('showup')) {
                menu.addClass('fadeOutUp animated faster', function () {
                    setTimeout(() => {
                        $(this).removeClass('showup opened fadeOutUp animated faster fadeInDown')
                        $('.mega-btn').removeClass('active')
                        btnClick = false
                    }, 500);
                })
            }
            
            if (mask.hasClass('show')) {
                mask.addClass('fadeOut animated faster', function () {
                    setTimeout(() => {
                        $(this).removeClass('show opened fadeOut animated faster fadeIn')
                        btnClick = false
                    }, 500);
                })
            }
        }
    }
    $('#toogle-search-form').on('click', function() {
        $('#search-section').fadeToggle('fast');

        if ($('#search-section')[0].className === "open") {
            $(this).html('<i class="fa fa-search" aria-hidden="true"></i>');
            $('#search-section').removeClass('open');
        } else {
            if (document.getElementById('search-section').style.display === 'block') {
                $(this).html('<i class="fa fa-times" aria-hidden="true"></i>');
                $('#search-section').addClass('open');
            }
        }

    });

    //Check to see if the window is top if not then display button
    // scrollupBtn();
	// $(window).scroll(function(){
    //     scrollupBtn();
	// });

	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
    });

    $('#scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
    });
    
    function showMenu(btn) {
        $('body').css('overflow', 'hidden');
        btn.addClass('active');
        $('.mobile-site-menu').removeClass('hide').addClass('fadeInLeft animated');
    }

    function closeMenu(btn) {
        $('body').css('overflow', 'initial');
        btn.removeClass('active');
        $('.mobile-site-menu').removeClass('fadeInLeft animated')
                          .addClass('fadeOutLeft animated')
                          .fadeOut(500, function () {
                            $('.mobile-site-menu').removeClass('fadeOutLeft animated')
                            .addClass('hide')
                            .removeAttr('style');
                          });

        btn.css('margin-left', '0px');
    }

    $('#menu-btn').on('click', function() {
        // showMenu($(this));
        if ($(this).hasClass('active')) {
            closeMenu($(this));
        } else {
            showMenu($(this));
        }
    }),

    

    function scrollupBtn() {
        if ($(window).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
    }

    function addSingleProduct(guid) {

        $('.add-btn').hide();
        $('.add-loading').show();
        $.ajax({
            url: '/cart/add/single/' + guid,
            type: 'GET',
            dataType: 'json',
        })
        .done(function(response) {
            console.log(response);
            toastr["success"]("成功加入購物車");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            $('.add-btn').show();
            $('.add-loading').hide();
            console.log("complete");
        });
    }
});



