$(document).ready(function(){
    var pathname = window.location.pathname;
    console.log(pathname);
    
    
    if(pathname == '/nuitdelinfo/'){
            var request = $.ajax({
                url : 'assets/views/home.php',
                method : 'GET',
                data : '',
                dataType : 'html'
            });

            request.done(function( msg ) {
                $('.content').html('');
                $('.content').html(msg);
            });
    }
    
    else if(pathname == '/nuitdelinfo/#home'){
        var request = $.ajax({
                url : 'assets/views/home.php',
                method : 'GET',
                data : '',
                dataType : 'html'
            });

            request.done(function( msg ) {
                $('.content').html('');
                $('.content').html(msg);
            });
    }
    
    else if(pathname == '/nuitdelinfo/#add_post'){
        var request = $.ajax({
                url : 'assets/views/add_post.php',
                method : 'GET',
                data : '',
                dataType : 'html'
            });

            request.done(function( msg ) {
                $('.content').html('');
                $('.content').html(msg);
            });
    }
    
    else if(pathname == '/nuitdelinfo/#display_posts'){
        var request = $.ajax({
                url : 'assets/views/display_posts.php',
                method : 'GET',
                data : '',
                dataType : 'html'
            });

            request.done(function( msg ) {
                $('.content').html('');
                $('.content').html(msg);
            });
    }
    
    $('.content').on('click', '#home', function(){
        console.log('add post');
        
        var request = $.ajax({
                url : 'assets/views/home.php',
                method : 'GET',
                data : '',
                dataType : 'html'
            });

            request.done(function( msg ) {
                $('.content').html('');
                $('.content').html(msg);
            });
        
            window.location.hash = '#home';
    });    
    
    $('.content').on('click', '#add_post', function(){
        console.log('add post');
        
        var request = $.ajax({
                url : 'assets/views/add_post.php',
                method : 'GET',
                data : '',
                dataType : 'html'
            });

            request.done(function( msg ){
                $('.content').html('');
                $('.content').html(msg);
                
                window.location.hash = '#add_post';
            });
    });    
    
    $('.content').on('click', '#display_posts', function(){
        console.log('add post');
        
        var request = $.ajax({
                url : 'assets/views/display_posts.php',
                method : 'GET',
                data : '',
                dataType : 'html'
            });

            request.done(function( msg ) {
                $('.content').html('');
                $('.content').html(msg);
                
                window.location.hash = '#display_posts';
            });
    });
});