$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 1){
            $('.navbars').addClass("sticky");
			$('.In').addClass("sticky");
			$('.Up').addClass("sticky");
			$('.breadcrumb.breadcrumb').addClass("sticky");
			
        }else{
            $('.navbars').removeClass("sticky");
			$('.navbars.InUp').removeClass("sticky");
			$('.Up').removeClass("sticky");
			$('.breadcrumb').removeClass("sticky");
        }
    })
    
    $('.menu_btn').click(function(){
        $('.navbarss.menu').toggleClass("active")
        $('.menu_btn i').toggleClass("active")
    })
})

