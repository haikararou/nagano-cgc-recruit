$(function() {
    $('.hidden, .error').css('display', 'none');

    $("input[name='hensai_houhou']:radio").change( function() {
        var hensai_houhou = $("input[name='hensai_houhou']:checked").val();

        if (hensai_houhou == 1) {
            $('.hidden').css('display', 'none');
        } else if (hensai_houhou == 2) {
            $('.hidden').css('display', 'block');
        }
    });


    $('#btn_action').click(function() {
        var kariire = $('#kariire').val();
        kariire = kariire.replace(/,/g, '');
        var kariire_kikan = $('#kariire_kikan').val();
        var sueoki_kikan = $('#sueoki_kikan').val();
        var hensai_houhou = $("input[name='hensai_houhou']:checked").val();
        var hosyou = $('#hosyou').val();
        var result_yan = 0;
        var result_yan01 = 0;
        var result_yan02 = 0;
        var bunkatu_keisu = 0;
        var hensai_kaisu = 0;
        var base_price = 10000;
        var is_error = false;

        $('.error').css('display', 'none');

        if (kariire == '' || !$.isNumeric(kariire)) {
            $('.error01').css('display', 'block');
            is_error = true;
        }

        if (kariire_kikan == '' || !$.isNumeric(kariire_kikan)) {
            $('.error02').css('display', 'block');
            is_error = true;
        }

        if (hensai_houhou == '') {
            $('.error03').css('display', 'block');
            is_error = true;
        }

        if (hosyou == '' || !$.isNumeric(hosyou)) {
            $('.error04').css('display', 'block');
            is_error = true;
        }

        if (hensai_houhou == 1) {
            result_yan = kariire * base_price * kariire_kikan / 12 * hosyou / 100;
        } else if (hensai_houhou == 2) {
            hensai_kaisu = kariire_kikan - sueoki_kikan;
            //$('#hensai_kaisu').html(hensai_kaisu);

            if (hensai_kaisu <= 6) {
                bunkatu_keisu = 0.70;
            } else if (hensai_kaisu >= 7 && hensai_kaisu <= 12) {
                bunkatu_keisu = 0.65;
            } else if (hensai_kaisu >= 13 && hensai_kaisu <= 24) {
                bunkatu_keisu = 0.60;
            } else if (hensai_kaisu >= 25) {
                bunkatu_keisu = 0.55;
            }

            if (sueoki_kikan > 0) {
                result_yan01 = kariire * base_price * sueoki_kikan / 12 * hosyou / 100;
            }

            result_yan02 = kariire * base_price * hensai_kaisu / 12 * hosyou / 100 * bunkatu_keisu;
            result_yan = result_yan01 + result_yan02;

        }

        if (!is_error) {
            $('#yen').html(Math.floor(result_yan).toLocaleString() + '円');
        } else {
            $('#yen').html('-');
        }



    });

});