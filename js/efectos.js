/*hcruz*/
$(document).ready(function () {

    $('#q').addClass('defaultTextActive');
    $('#q').val($('.defaultText')[0].title);

    $('#q').blur(function () {
        if ($(this).val() == '') {
            $(this).addClass('defaultTextActive');
            $(this).val($(this)[0].title);
        }
    });

    $('#q').focus(function () {
        if ($(this).val() == $(this)[0].title) {
            $(this).removeClass('defaultTextActive');
            $(this).val('');
        }
    });

    //try { $('#q').alphanumeric({ allow: ':., ' }); } catch (error) { }

    /*
    $('#q').keyup( function() {
    if($(this).val().length > 100)
    $(this).val($(this).val().substr(0, 100));      
    });
    */

//    try {
//        $('#email').addClass('defaultTextActive');
//        $('#email').val($('#email.defaultText')[0].title);

//        $('#email').blur(function () {
//            if ($(this).val() == '') {
//                $(this).addClass('defaultTextActive');
//                $(this).val($(this)[0].title);
//            }
//        });

//        $('#email').focus(function () {
//            if ($(this).val() == $(this)[0].title) {
//                $(this).removeClass('defaultTextActive');
//                $(this).val('');
//            }
//        });
//    } catch (error) { }

    try {
        $(".scrollable").scrollable({ circular: true }).navigator(".navi").autoscroll({ autoplay: true, interval: 6000 });
    } catch (error) { }

    try {
        $("#cat-scrollable").scrollable({ circular: true }).navigator(".navi").autoscroll({ autoplay: true, interval: 3000 });
    } catch (error) { }

//    try {
//        $('#frmnewsletter').validate();

//        $('#frmnewsletter').submit(function (event) {

//            event.preventDefault();

//            if (!$("#frmnewsletter").valid()) {
//                return false;
//            }

//            var $form = $(this), vemail = $form.find('input[name="email"]').val();

//            if (vemail.length > 0) {

//                var url = "/base/OceanoBase/AddUserToNewsLetter.aspx";
//                $.post(url, { email: vemail },
//                    function (data) {
//                        if (data > 0) {
//                            $('#frmnewsletter')[0].reset();
//                            $('#frmnewsletter').hide();
//                            $('#mensajesnewsletter').text('Gracias por suscribirse');
//                        }
//                        if (data == 0)
//                        { $('#mensajesnewsletter').text('E-mail registrado previamente'); }

//                        if (data == -1)
//                        { $('#mensajesnewsletter').text('Error al registrar, intentelo mas tarde'); }
//                    });
//            }
//            return true;
//        });
//    } catch (error) { }

    $("#loading").ajaxStart(function () {
        $("div#loading").text("Espere por favor...");
        $(this).show();
    }).ajaxStop(function () {
        $("div#loading").text("");
        $(this).hide();
    });

    try {
        $(".scrollableblogs").scrollable({ circular: true }).autoscroll({ autoplay: true, interval: 3000 });
    } catch (error) { }

//    try {
//        $("#frmbannerencuesta").validate({ rules: { "respuesta": { required: true} }, messages: { "respuesta": "Elija una opcion"} });

//        $('#frmbannerencuesta').submit(function (event) {

//            $('#msgsEncuesta').text('Espere por favor...');
//            $('#msgsEncuesta').show();

//            event.preventDefault();

//            if (!$("#frmbannerencuesta").valid()) {
//                return false;
//            }

//            var $form = $(this);
//            var eId = $form.find('input[name="eId"]').val();
//            var aId = $form.find('input[name="respuesta"]:checked').val();

//            if (eId && aId) {
//                var url = "/base/OceanoBase/RegistrarVotoEncuesta.aspx";
//                $.post(url, { eid: eId, aid: aId },
//                function (data) {
//                    if (data == 0)
//                    { $('#msgsEncuesta').text('No se encuentra la encuesta.'); }
//                    else if (data == -1)
//                    { $('#msgsEncuesta').text('Error al registrar su voto, intentelo mas tarde.'); }
//                    else {
//                        $('#frmbannerencuesta')[0].reset();

//                        var html = '<table>';
//                        $.each(data, function (key, value) {
//                            html += '<tr><td>' + value.Respuesta + '</td><td>' + value.Porcentaje + '%</td></tr>';
//                        });
//                        html += '</table>';
//                        $('#trEncuesta').html(html);

//                        $("#frmbannerencuesta").hide();
//                        $("#resultadosEncuesta").show();

//                    }
//                }, "json")
//                .complete(function () {
//                    $('#msgsEncuesta').text('');
//                    $('#msgsEncuesta').hide();
//                });
//            }
//            return true;
//        });
//    } catch (error) { }

    try {
        $('#ddlTemasBanner').change(function () {
            window.location = $(this).attr('value');
        });
    } catch (error) { }

    try {
        $('#ddlFondosDistribucion').change(function () {
            window.location = $(this).attr('value');
        });
    } catch (error) { }

    try {
        $('#ddlEstadosBanner').change(function () {
            window.location = "/donde-comprar.aspx?edo=" + $(this).attr('value');
        });
    } catch (error) { }

    $('#fichatecnica').live('click', function (ev) {
        var libro = $(this).attr('data-libro');
        window.open('/ficha-tecnica.aspx?id=' + libro, 'mywindow', 'location=0,status=0,scrollbars=1, resize=0, width=760,height=600');
        ev.preventDefault();
        ev.stopPropagation();
    });

    $('#fichatecnicaautor').live('click', function (ev) {
        var autor = $(this).attr('data-autor');
        window.open('/ficha-tecnica-autor.aspx?id=' + autor, 'mywindow', 'location=0,status=0,scrollbars=1, resize=0, width=760,height=600');
        ev.preventDefault();
        ev.stopPropagation();
    });

    try { $("a.verfichadewey[rel]").overlay({ mask: '#000' }); } catch (e) { }

    try { $("a.olmedia[rel]").overlay({ mask: '#000', fixed: false, top: '-20%', left: 'center' }); } catch (e) { }

    try {
        $('div.fondo').hover(function () {
            if ($(this).attr('data-logo').length == 0) { return; }
            var url = $(this).attr("data-logo");
            var wrap;
            if ($(this).attr("data-tipo") == "o") {
                wrap = $('#fondosoceano'); //.fadeTo("medium", 0.5);
            } else {
                wrap = $('#fondosdistribucion'); //.fadeTo("medium", 0.5);
            }
            //            var img = new Image();
            //            img.onload = function() {
            //                wrap.fadeTo("fast", 1);
            wrap.find("img").attr("src", url);
            //            };
            //img.src = url;
        }, function () {
            var url = "../img/pixel.png";
            var wrap;
            if ($(this).attr("data-tipo") == "o") {
                wrap = $('#fondosoceano'); //.fadeTo("medium", 0.5);
            } else {
                wrap = $('#fondosdistribucion'); //.fadeTo("medium", 0.5);
            }
            //            var img = new Image();
            //            img.onload = function () {
            //                wrap.fadeTo("fast", 1);
            wrap.find("img").attr("src", url);
            //            };
            //            img.src = url;
        });
    } catch (e) { }

    $('#triggerDeweyPrint').live('click', function (ev) {

        var urlDewey = '/ficha-dewey.aspx?id=' + $(this).attr('data-libro');

        var width = 700;
        var height = 380;
        var left = (screen.width - width) / 2;
        var top = (screen.height - height) / 2;
        var params = 'width=' + width + ', height=' + height;
        params += ', top=' + top + ', left=' + left;
        params += ', directories=no';
        params += ', location=no';
        params += ', menubar=no';
        params += ', resizable=no';
        params += ', scrollbars=no';
        params += ', status=no';
        params += ', toolbar=no';
        var newwin = window.open(urlDewey, 'windowDewey', params);
        if (window.focus) { newwin.focus(); }

        ev.preventDefault();
        ev.stopPropagation();
    });

    $('a.extracto').live('click', function (ev) {

        var params = 'width=' + screen.width;
        params += ', height=' + screen.height;
        params += ', top=0, left=0, fullscreen=yes';

        var newwin = window.open(this.href, 'issuWindow', params);

        if (window.focus) { newwin.focus(); }

        ev.preventDefault();
        ev.stopPropagation();
    });

    try {
        $('#asunto').change(function () {
            if ($(this).attr('value') == '2' || $(this).attr('value') == '3') {
                $('.titulocarga').removeClass('nodisplay');
                $('#cargaarchivo').removeClass('nodisplay');
            }
            else {
                $('.titulocarga').addClass('nodisplay');
                $('#cargaarchivo').addClass('nodisplay');
            }
        });
    } catch (error) { }

    //validar que si eligio archivo y no lo ha enviado avisar/enviarlo
    //    $('#frmContacto').submit(function (event) {
    //        event.preventDefault();
    //        if(($('#asunto').attr('value') == '2' || $('#asunto').attr('value') == '3') && $('#')) {
    //            return false;
    //        }
    //        return true;
    //    });

    try { $('a.prox').hover(function () { $('.prox-hdr').show(); }, function () { $('.prox-hdr').hide(); }); } catch (error) { }

    /*Banner Noticias (Slider)*/
    try {
        $("#navNotas").tabs("#scrollNotas.noticiasB > div", {
            effect: 'fade',
            fadeOutSpeed: "slow",
            rotate: true
        }).slideshow({
            next: '.nextNotas',
            prev: '.prevNotas',
            interval: 6000,
            autoplay: false,
            autopause: true
        });
    } catch (e) { }

    try {
        $("#navEventos").tabs("#scrollEventos.noticiasB > div", {
            effect: 'fade',
            fadeOutSpeed: "slow",
            rotate: true
        }).slideshow({
            next: '.nextEventos',
            prev: '.prevEventos',
            interval: 6000,
            autoplay: true,
            autopause: true
        });
    } catch (e) { }
});