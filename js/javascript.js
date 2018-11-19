(function($){
  $(function(){
   
    $('.button-collapse').sideNav();
    
  

    $(".side-link a").click(function(e) {
        e.preventDefault();
        $(".side-link a").removeClass('active-side-link');
        $(this).addClass('active-side-link');

        var elemToScroll = $(e.target).attr('link');
        $('html, body').animate({
            scrollTop: $(elemToScroll).offset().top
        }, 500);
    });
    
    
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.scrollspy');
    var instances = M.ScrollSpy.init(elems, options);
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });
    $("#contact_form_submit").click(function(e){
        e.preventDefault();
        var name = $("#contact_name").val();
        var email = $("#contact_email").val();
        var msg = $("#contact_message").val();

        $.ajax({
          type: "POST",
          url: "contact.php",
          data: {
            'name':name,
            'email':email,
            'message':msg,
          },
          success: function(data){
            $("#contact_name").val("");
            $("#contact_email").val("");
            $("#contact_message").val("");
            $("#contact-success").openModal();
          },
        });
    });
    


  }); 
})(jQuery); 
