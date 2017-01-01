;$(document).ready(function () {
    'use strict';
    $("#owl-carousel").owlCarousel({
        items: 5,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
        navigation: true,
        navigationText: [
            "<i class='fa fa-chevron-left icon-white'></i>",
            "<i class='fa fa-chevron-right icon-white'></i>"
        ],
        autoPlay: false,
        pagination: false
    });

    $("#slide_pan").owlCarousel({
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1],
        navigation: true,
        navigationText: [
            "<i class='fa fa-chevron-left icon-white'></i>",
            "<i class='fa fa-chevron-right icon-white'></i>"
        ],
        autoPlay: false,
        pagination: false
    });

    $(".testim_sec").owlCarousel({
        items: 2,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1],
        navigation: true,
        navigationText: [
            "<i class='fa fa-chevron-left icon-white'></i>",
            "<i class='fa fa-chevron-right icon-white'></i>"
        ],
        autoPlay: false,
        pagination: false
    });


    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false
    });

    $('#register-form').on('submit', function (event) {
        var param = {
            checkbox: 'Согласие с условиями обязательно для регистрации',
            string:['Укажите Фамилию','Укажите имя'],
        };
        if ( validateForm(event, param) ) {
            event.preventDefault();
        }
    })

    $('#register-form').on('reset', function () {
        $('#register-form').find(".text-error").remove();
        $('#register-form').find(".form-control").removeClass('error');
    })

    $('#repeat-form').on('submit', function (event) {
        if ( validateForm(event,{}) ) {
            event.preventDefault();
        }
    })


    function validateForm(event, param) {

        var formObj = event.currentTarget;
        var Err = false;
        var pass1 = null;
        var paramCheckbox = param.checkbox || 'Необходимо поставить галочку';
        var paramString = param.string || [0];

        $(".form-control").removeClass('error');
        $(".text-error").remove();

        for (var key in formObj){
            var formError = false;
            var thisObj = formObj[key];
            if(!isNaN(+key)){
                if ($(thisObj).attr('datavalid')){
                    if($(thisObj).attr('datavalid') == 'string'){
                        if ( $(thisObj).val().length == 0 ) {
                            formError = true;
                            var elem = paramString.shift() || 'Это поле не может быть пустым';
                            $(thisObj).after('<span class="text-error">' + elem + '</span>');
                        } else if ( $(thisObj).val().length < 4 ) {
                            formError = true;
                            $(thisObj).after('<span class="text-error">Поле должно содержать больше 3 символов</span>');
                        } else if ($(thisObj).val().length > 100){
                            formError = true;
                            $(thisObj).after('<span class="text-error">Поле не может модержать больше 100 символов</span>');
                        }
                    }

                    if ($(thisObj).attr('datavalid') == 'email'){
                        var reg     = /^\w+([\.-]?\w+)*@(((([a-z0-9]{2,})|([a-z0-9][-][a-z0-9]+))[\.][a-z0-9])|([a-z0-9]+[-]?))+[a-z0-9]+\.([a-z]{2}|(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum))$/i;

                        if ( $(thisObj).val().length == 0 ) {
                            formError = true;
                            $(thisObj).after('<span class="text-error">Поле e-mail обязательно к заполнению</span>');
                        } else if (!reg.test( $(thisObj).val() )){
                            formError = true;
                            $(thisObj).after('<span class="text-error">Вы указали недопустимый e-mail</span>');
                        }
                    }

                    if ($(thisObj).attr('datavalid') == 'pass'){
                        pass1 = $(thisObj).val();
                        if ( $(thisObj).val().length == 0 ) {
                            formError = true;
                            $(thisObj).after('<span class="text-error">Укажите пароль</span>');
                        } else if($(thisObj).val().length < 6){
                            formError = true;
                            $(thisObj).after('<span class="text-error">Пароль должен быть не менее 6 символов</span>');
                        }
                    }

                    if ($(thisObj).attr('datavalid') == 'pass_confirm'){
                        if ( $(thisObj).val().length == 0 ) {
                            formError = true;
                            $(thisObj).after('<span class="text-error">Укажите пароль для подтверждения</span>');
                        } else if($(thisObj).val().length < 6){
                            formError = true;
                            $(thisObj).after('<span class="text-error">Пароль должен быть не менее 6 символов</span>');
                        } else if($(thisObj).val() !== pass1){
                            formError = true;
                            $(thisObj).after('<span class="text-error">Указанные пароли не совпадают</span>');
                        }
                    }

                    if ($(thisObj).attr('datavalid') == 'checkbox' && !Err){
                        if ( !$(thisObj).prop('checked')) {
                            formError = true;
                            $(thisObj).after('<span class="text-error">' + paramCheckbox + '</span>');
                        }
                    }

                    if(formError){
                        $(thisObj).toggleClass('error', true );
                        Err = true;
                    }
                }
            }
        }

        return Err;
    }
});