$(function(){
    $("#form-register").validate({
        rules: {
            password : {
                required : true,
            },
            confirm_password: {
                equalTo: "#password"
            }
        },
        messages: {
            username: {
                required: "Please provide an username"
            },
            email: {
                required: "Please provide an email"
            },
            password: {
                required: "Please provide a password"
            },
            confirm_password: {
                required: "Please provide a password",
                equalTo: "Please enter the same password"
            }
        }
    });
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        // enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Back',
            next : '<i class="zmdi zmdi-arrow-right"></i>',
            finish : '<i class="zmdi zmdi-arrow-right"></i>',
            current : ''
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            var model = $('#model').val();
            var kendaraan = $('#kendaraan').val();
            var tahun = $('#tahun').val();
            var no_polisi = $('#no_polisi').val();
            var alamat = $('#alamat').val();
            var no_telfon = $('#no_telfon').val();
            var km = $('#km').val();
            var oli = $('#oli').val();

            $('#model-val').text(model);
            $('#kendaraan-val').text(kendaraan);
            $('#tahun-val').text(tahun);
            $('#no_polisi-val').text(no_polisi);
            $('#alamat-val').text(alamat);
            $('#no_telfon-val').text(no_telfon);
            $('#km-val').text(km);
            $('#oli-val').text(oli);

            $("#form-register").validate().settings.ignore = ":disabled,:hidden";
            return $("#form-register").valid();
        }
    });
});
