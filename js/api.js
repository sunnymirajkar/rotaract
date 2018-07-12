(function($) {
  $.fn.SocialCounter = function(options) {
    var settings = $.extend({
      // These are the defaults.
      instagram_user:'',
      instagram_user_sandbox:'',
      instagram_token:''
    }, options);

    
    
    function instagram(){
      $.ajax({
        url: 'https://api.instagram.com/v1/users/self/',
        dataType: 'jsonp',
        type: 'GET',
        data: {
          access_token: settings.instagram_token
        },
        success: function(data) {
          var followers = parseInt(data.data.counts.followed_by);
          var k = kFormatter(followers);
          $('.instagramCnt').append(k);
          $('#wrapper .item.instagram').attr('href','https://instagram.com/'+settings.instagram_user);
          getTotal(followers); 
        }
      });
    }
    function instagram_sandbox(){
       $.ajax({
         url: 'https://api.instagram.com/v1/users/search?q='+settings.instagram_user_sandbox,
         dataType: 'jsonp',
         type: 'GET',
         data: {
           access_token: settings.instagram_token
         },
         success: function(data) {
           $.each(data.data, function(i, item) {
             if(settings.instagram_user_sandbox == item.username){
               $.ajax({
                 url: "https://api.instagram.com/v1/users/" + item.id,
                 dataType: 'jsonp',          
                 type: 'GET',
                 data: {
                   access_token: settings.instagram_token
                 },
                 success: function(data) {
                   var followers = parseInt(data.data.counts.followed_by);
                   var k = kFormatter(followers);
                   $('#wrapper .instagram_sandbox .count').append(k);
                   $('#wrapper .item.instagram_sandbox').attr('href','https://instagram.com/'+settings.instagram_user_sandbox);
                   getTotal(followers); 
                 }
               });
             } 
           });
         }
       });
     }
    //Function to add commas to the thousandths
    $.fn.digits = function(){ 
      return this.each(function(){ 
        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
      })
    }
    //Function to add K to thousands
    function kFormatter(num) {
      return num > 999 ? (num/1000).toFixed(1) + 'k' : num;
    }
    //Function to add K to thousands
    function mFormatter(num) {
      return num > 999999 ? (num/1000000).toFixed(1) + 'm' : num;
    }
    //Total Counter
    var total = 0;
    //Get an integer paramenter from each ajax call
    function getTotal(data) {
      total = total + data;
      $("#total").html(total).digits();
      $("#total_k").html(kFormatter(total));
    }

    function linkClick(){
      $('#wrapper .item').attr('target','_blank');
    }
    linkClick();

    //Call Functions
    if(settings.instagram_user!='' && settings.instagram_token!=''){ 
      instagram();
    } if(settings.instagram_user_sandbox!='' && settings.instagram_token!=''){ 
      instagram_sandbox();
    }
  };
}(jQuery));
