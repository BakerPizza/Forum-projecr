$(document).ready(function(){
  $("#reg-form").submit(function(e){
    e.preventDefault();
    var nickname=$('#nick-reg').val();
    var login=$('#login-reg').val();
    var pass=$('#pass-reg').val();
    var mail=$('#mail-reg').val();


    $.ajax({
        url:$(this).attr('action'),
        type:$(this).attr('method'),
        data:{
            log:login,
            par:pass,
            email:mail,
            nick:nickname,

        }
    }).done(function(res){
        if(res=="errorlog"){
            alert("Логин или Никнейм занят")
        }
        if(res=="done"){
            alert("Вы зарегистрировались")
            document.location.href='/entrance.php';
        }
    })
   })

})
/*$(document).ready(function(){
    $("#post_add_form").submit(function(e){
      e.preventDefault();
      var title=$('#title_post').val();
      var text=$('#text_post').val();
      var file=$('#file_post').val();
  
  
      $.ajax({
          url:$(this).attr('action'),
          type:$(this).attr('method'),
          data:{
            title:title,
            text:text,
            img:file,
  
          }
      }).done(function(res2){
          if(res=="errorpost"){
              alert("Логин или Никнейм занят")
          }
          if(res2=="done"){
              alert("Вы зарегистрировались")
          }
      })
     })
  
  })*/
$('.open_popup_ava').click(function(e){
    e.preventDefault();
    $('.popup').fadeIn(200);
    $('html').addClass('noscroll');
});
$('.close_popup').click(function(e){
    e.preventDefault();
    $('.popup').fadeOut(200);
    $('html').removeClass('no__scroll');
});
$('.open_popup_post').click(function(e){
    e.preventDefault();
    $('.post_add').fadeIn(200);
    $('html').addClass('noscroll');
});
$('.open_popup_post_close').click(function(e){
    e.preventDefault();
    $('.post_add').fadeOut(200);
    $('html').removeClass('no__scroll');
});
$('.open_popup_pass').click(function(e){
    e.preventDefault();
    $('.popup2').fadeIn(200);
    $('html').addClass('noscroll');
});
$('.close_popup').click(function(e){
    e.preventDefault();
    $('.popup2').fadeOut(200);
    $('html').removeClass('no__scroll');
});


