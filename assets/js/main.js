$(document).ready(function(){
    var pathname = window.location.pathname;
    console.log(pathname);
    if(link_id == 'back-home'){
            var request = $.ajax({
                url : 'home.php',
                method : 'GET',
                data : '',
                dataType : 'html'
            });

            request.done(function( msg ) {
                $('.mdl-layout__content').html('');
                $('.mdl-layout__content').html(msg);

                $('.menu-tab').removeClass('is-active');
                $(".menu-tab[href='#scroll-tab-3']").addClass('is-active');
                initPageHome();
            });

            request.fail(function( jqXHR, textStatus ) {

            });
        }
})