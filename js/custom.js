$(document).ready(function(){
	$("#demo-1").css("height", $(window).height());
	$("#home").css("height", $(window).height());

	$( "#clubsLocator" ).click(function() {
	     document.location.href ='clubslocator';
	});

      $( "#districtEvent" ).click(function() {
           document.location.href ='districtcalender';
      });

      $( "#AddDistrictEvent" ).click(function() {
           document.location.href ='addevent';
      });

      $( "#AddDistrictMember" ).click(function() {
           document.location.href ='addmember';
      });

      $( "#MonthlyReport" ).click(function() {
           document.location.href ='monthlyreporting';
      });

      $( "#upcomingEvent" ).click(function() {
           $("#CountDown").fadeToggle(1000);
      });

      $( ".fa-times" ).click(function() {
           $("#CountDown").fadeOut(1000);
      });

      $("#loginSubmit").click(function(event){
            event.preventDefault();
            var loginData = new FormData();
            loginData.append("userName", $("#clubLoginId").val());
            loginData.append("password", $("#clubPassword").val());
            $.ajax({
                  dataType: 'json',
                  type:'POST',
                  url: 'clublogin/ClubLogin',
                  data:loginData,
                  contentType: false,      
                  cache: false,           
                  processData:false,
            }).done(function(data){
                  if(data['logged_in'] == true){
                        document.location.href =data['url'];
                        $(".alert").css("display", "block");
                        $(".alert").addClass("alert-success");
                        $(".alert").html("Login Successfully!!");
                        setTimeout(function(){ 
                              $(".alert-success").hide(); 
                              $(".alert").removeClass("alert-success");
                        }, 5000);
                  }else{
                        $(".alert").css("display", "block");
                        $(".alert").addClass("alert-danger");
                        $(".alert").html("Incorrect Username Or Password !!!");
                        setTimeout(function(){
                              $(".alert-danger").hide(); 
                              $(".alert").removeClass("alert-danger");
                        }, 5000);
                        // document.location.href =data['url'];
                  }
            });
            /*$.ajax({
                  type: "POST",
                  dataType: "json",
                  url: "php/ClubLogin.php",
                  data: loginData,
                  success: function(data) {    
                        console.log(data)                          
                        if(data[0]==true){
                              document.location.href ='DistrictClub.php';
                              $(".alert").css("display", "block");
                              $(".alert").addClass("alert-success");
                              $(".alert").html("Login Successfully!!");
                              setTimeout(function(){ 
                                    $(".alert-success").hide(); 
                                    $(".alert").removeClass("alert-success");
                              }, 5000);
                        }else{
                              $(".alert").css("display", "block");
                              $(".alert").addClass("alert-danger");
                              $(".alert").html("Incorrect Username Or Password !!!");
                              setTimeout(function(){
                                    $(".alert-danger").hide(); 
                                    $(".alert").removeClass("alert-danger");
                              }, 5000);
                        }
                  }
            });*/
      });

      $("#getInTouchbtn").click(function(event){
            event.preventDefault();
            var getintouch ={};
            getintouch.name = $("#getInTouchname").val();
            getintouch.email = $("#getInTouchemail").val();
            getintouch.subject = $("#getInTouchsubject").val();
            getintouch.msg = $("#getInTouchmsg").val();

            if(getintouch.name =="" || getintouch.email =="" || getintouch.subject == "" 
                  || getintouch.msg == ""){
                  $("#ErrorMessage").slideDown("slow");
                              $("#ErrorMessage").html("Fill All Fields");
                              $("#email").focus();
                              setTimeout(function(){
                                    $("#ErrorMessage").slideUp("slow");
                                    $("#ErrorMessage").html("");
                              }, 2000);
                              
                  return false;
           }else{
                  var atposition=getintouch.email.indexOf("@");  
                  var dotposition=getintouch.email.lastIndexOf(".");  
                        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=getintouch.email.length){  
                              $("#ErrorMessage").slideDown("slow");
                              $("#ErrorMessage").html("Invalid Eamil");
                              $("#email").focus();
                              setTimeout(function(){
                                    $("#ErrorMessage").slideUp("slow");
                                    $("#ErrorMessage").html("");
                              }, 2000);
                        }else{
                              var getInTouchData = new FormData();
                              getInTouchData.append("name", getintouch.name);
                              getInTouchData.append("email", getintouch.email);
                              getInTouchData.append("subject", getintouch.subject);
                              getInTouchData.append("message", getintouch.msg);
                              getInTouchData.append("type", "insert");
                              $.ajax({
                                    dataType: 'json',
                                    type:'POST',
                                    url: "main/getInTouch",
                                    data:getInTouchData,
                                    contentType: false,      
                                    cache: false,           
                                    processData:false,
                              }).done(function(data){
                                    console.log(data)
                                    if(data > 0){
                                          $("#SuccessMessage").slideDown("slow");
                                          $("#SuccessMessage").html("Get back to you soon");
                                          setTimeout(function(){
                                                $("#SuccessMessage").slideUp("slow");
                                                $("#SuccessMessage").html("");
                                          }, 2000);
                                          $("#getInTouchname").val("");
                                          $("#getInTouchemail").val("");
                                          $("#getInTouchsubject").val("");
                                          $("#getInTouchmsg").val("");
                                    }else{
                                          $("#ErrorMessage").slideDown("slow");
                                          $("#ErrorMessage").html("Error... Please try again");
                                          $("#email").focus();
                                          setTimeout(function(){
                                                $("#ErrorMessage").slideUp("slow");
                                                $("#ErrorMessage").html("");
                                          }, 2000);
                                    }
                              });
                        }
                  }     
      });
      
      $("#changePassword").click(function(event){
            event.preventDefault();
            $('#changePasswordModal').modal({
                show: 'true'
            });

      });
      $("#changePasswordBtn").click(function(event){
            var changePassword ={};
            // console.log(Math.floor(100000 + Math.random() * 900000));
            changePassword.changePasswordUsername   = $("#changePasswordEmail").val();
            changePassword.randomNumber             = Math.floor(100000 + Math.random() * 900000);
            $.ajax({
                  type: "POST",
                  dataType: "json",
                  url: "php/ChangePasswordModal.php",
                  data: changePassword,
                  success: function(data) {  
                            
                        if(data[0]==true){
                             alert(data[1]);                             
                             document.location.href ='changePassword.html?val='+
                             $("#changePasswordEmail").val();
                        }
                        else{
                             alert("Username not found...!!!");
                        }
                  }
            });
      });
      $("#CPSubmitBtn").click(function(event){
            event.preventDefault();
            var cpwd          = {};
            cpwd.username     = $("#CPusername").val();
            cpwd.password     = $("#CPpassword").val();
            cpwd.cpassword    = $("#CONFIRMCPpassword").val();
            cpwd.uniqno       = $("#CPuniqno").val();
            if(cpwd.username !="" && cpwd.password !="" && cpwd.cpassword !="" && cpwd.uniqno !=""){
                  if (cpwd.password == cpwd.cpassword) {
                       $.ajax({
                              type: "POST",
                              dataType: "json",
                              url: "php/ChangePassword.php",
                              data: cpwd,
                              success: function(data) { 
                                    console.log(data);
                                    alert(data[1]);
                                    if(data[0]==true){
                                         document.location.href ='clubLogin.html';
                                    }
                              }
                        }); 
                 }else{
                        $("#ErrorMessage").slideDown("slow");
                        $("#ErrorMessage").html("Password Not Match");
                        setTimeout(function(){
                              $("#ErrorMessage").slideUp("slow");
                              $("#ErrorMessage").html("");
                        }, 2000);
                 }
            }else{
                  $("#ErrorMessage").slideDown("slow");
                  $("#ErrorMessage").html("Fill All Fields!!!");
                  setTimeout(function(){
                        $("#ErrorMessage").slideUp("slow");
                        $("#ErrorMessage").html("");
                  }, 2000);
            }
            
      });

      $("#addEvent").click(function(event){
            event.preventDefault();
            var eventData = new FormData();
            eventData.append("type",  "insert");
            eventData.append("title", $("#eventTitle").val());
            eventData.append("eventdate",  $("#eventDatetime").val());
            eventData.append("description",  $("#eventDescription").val());
            eventData.append("clubName",  $("#clubName").val());
            $.ajax({
                  dataType: 'json',
                  type:'POST',
                  url: 'addevent/Addevents',
                  data:eventData,
                  contentType: false,      
                  cache: false,           
                  processData:false,
            }).done(function(data){
                  console.log(data)
                  if(data > 0){
                        document.location.href ='clubaccount';
                  }else{
                        $("#ErrorMessage").fadeIn();
                        $("#ErrorMessage").html("Fill All Fields");
                        $("#email").focus();
                        setTimeout(function(){
                              $("#ErrorMessage").fadeOut();
                              $("#ErrorMessage").html("");
                        }, 2000);
                  }
            });
       });

      $("#SubmitRegistration").click(function(event){
            event.preventDefault();
            var member = {};
            var userName            = $("#email").val().split("@");
            member.name             = "Rtr. "+$("#firstName").val()+" "+$("#lastName").val();
            member.contact          = $("#contact").val();
            member.email            = $("#email").val();
            member.userName         = userName[0];
            member.bloodGroup       = $("#bloodGroup").val();
            member.clubName         = $("#clubName").val();
            member.clubEmail         = $("#clubEmail").val();
            member.designation      = $("#designation").val();
            member.zoneNo           = $("#zoneNo").val();
            member.type             = "insert";
            if(member.designation == "President"){
                  member.priority = 1;
            }else if(member.designation == "Secretary"){
                  member.priority = 2;
            }else if(member.designation == "Vice-President"){
                  member.priority = 3;
            }else if(member.designation == "President-Elect"){
                  member.priority = 4;
            }else if(member.designation == "IP-President"){
                  member.priority = 5;
            }else if(member.designation == "Treasurer"){
                  member.priority = 6;
            }else if(member.designation == "International-Service" || member.designation == "Community-Service" 
                  || member.designation == "Club-Service" || member.designation == "Professional-Development"
                  || member.designation == "Womens-Representive" || member.designation == "Joint-Secretary"
                  || member.designation == "Sergeant-at-Arms" || member.designation == "Finance"
                  || member.designation == "PRO" || member.designation == "Editor" || member.designation == "Snapper"
                  || member.designation == "Joint-Editor" || member.designation == "Other-BOD"){
                        member.priority = 7;
            }else if(member.designation == "Member"){
                  member.priority = 8;
            }
            if(member.name !="" && member.contact !="" && member.email !="" &&
             member.userName !="" && member.bloodGroup !="" && member.designation != "" &&
              member.zoneNo !=""){                  
                  if(member.contact.length == 10 && !isNaN(parseInt(member.contact))){
                        var atposition=member.email.indexOf("@");  
                        var dotposition=member.email.lastIndexOf(".");  
                        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=member.email.length){  
                              $("#ErrorMessage").fadeIn();
                              $("#ErrorMessage").html("Invalid Eamil");
                              $("#email").focus();
                              setTimeout(function(){
                                    $("#ErrorMessage").fadeOut();
                                    $("#ErrorMessage").html("");
                              }, 2000); 
                        }else{
                              var memberData = new FormData();
                              memberData.append("Name", member.name);
                              memberData.append("contact", member.contact);
                              memberData.append("email", member.email);
                              memberData.append("username", member.userName);
                              memberData.append("bloodGroup", member.bloodGroup);
                              memberData.append("clubName", member.clubName);
                              memberData.append("designation", member.designation);
                              memberData.append("zone", member.zoneNo);
                              memberData.append("priority", member.priority);
                              memberData.append("type", "insert");
                              $.ajax({
                                    dataType: 'json',
                                    type:'POST',
                                    url: "addmember/Addmember",
                                    data:memberData,
                                    contentType: false,      
                                    cache: false,           
                                    processData:false,
                              }).done(function(data){
                                    console.log(data)
                                    if(data > 0){
                                          document.location.href ='clubaccount';
                                    }else{
                                          $("#ErrorMessage").fadeIn();
                                          $("#ErrorMessage").html("Data Not Inserted Try Again!!");
                                          $("#email").focus();
                                          setTimeout(function(){
                                                $("#ErrorMessage").fadeOut();
                                                $("#ErrorMessage").html("");
                                          }, 2000);
                                    }                                    
                              });  
                        }  
                  }else{
                        $("#ErrorMessage").fadeIn();
                        $("#ErrorMessage").html("Invalid Number");
                        $("#contact").focus();
                        setTimeout(function(){
                              $("#ErrorMessage").fadeOut();
                              $("#ErrorMessage").html("");
                        }, 2000);
                  }

            }else{
                  $("#ErrorMessage").fadeIn();
                  $("#ErrorMessage").html("Fill All Fields!!!");
                  setTimeout(function(){
                        $("#ErrorMessage").fadeOut();
                        $("#ErrorMessage").html("");
                  }, 2000);
            }

            
      });

      $("#UpdateRegistration").click(function(event){
            event.preventDefault();
            var member = {};
            var userName            = $("#email").val().split("@");
            member.id               = $("#updateMember").val();
            member.name             = "Rtr. "+$("#firstName").val()+" "+$("#lastName").val();
            member.contact          = $("#contact").val();
            member.email            = $("#email").val();
            member.userName         = userName[0];
            member.bloodGroup       = $("#bloodGroup").val();
            member.clubName         = $("#clubName").val();
            member.clubEmail         = $("#clubEmail").val();
            member.designation      = $("#designation").val();
            member.zoneNo           = $("#zoneNo").val();
            member.type             = "update";
            if(member.designation == "President"){
                  member.priority = 1;
            }else if(member.designation == "Secretary"){
                  member.priority = 2;
            }else if(member.designation == "Vice-President"){
                  member.priority = 3;
            }else if(member.designation == "President-Elect"){
                  member.priority = 4;
            }else if(member.designation == "IP-President"){
                  member.priority = 5;
            }else if(member.designation == "Treasurer"){
                  member.priority = 6;
            }else if(member.designation == "International-Service" || member.designation == "Community-Service" 
                  || member.designation == "Club-Service" || member.designation == "Professional-Development"
                  || member.designation == "Womens-Representive" || member.designation == "Joint-Secretary"
                  || member.designation == "Sergeant-at-Arms" || member.designation == "Finance"
                  || member.designation == "PRO" || member.designation == "Editor" || member.designation == "Snapper"
                  || member.designation == "Joint-Editor" || member.designation == "Other-BOD"){
                        member.priority = 7;
            }else if(member.designation == "Member"){
                  member.priority = 8;
            }

            if(member.name !="" && member.contact !="" && member.email !="" &&
             member.userName !="" && member.bloodGroup !="" && member.designation != "" &&
              member.zoneNo !=""){                  
                  if(member.contact.length == 10 && !isNaN(parseInt(member.contact))){
                        var atposition=member.email.indexOf("@");  
                        var dotposition=member.email.lastIndexOf(".");  
                        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=member.email.length){  
                              $("#ErrorMessage").fadeIn();
                              $("#ErrorMessage").html("Invalid Eamil");
                              $("#email").focus();
                              setTimeout(function(){
                                    $("#ErrorMessage").fadeOut();
                                    $("#ErrorMessage").html("");
                              }, 2000); 
                        }else{
                              var memberData = new FormData();
                              memberData.append("id", member.id);
                              memberData.append("Name", member.name);
                              memberData.append("contact", member.contact);
                              memberData.append("email", member.email);
                              memberData.append("username", member.userName);
                              memberData.append("bloodGroup", member.bloodGroup);
                              memberData.append("clubName", member.clubName);
                              memberData.append("designation", member.designation);
                              memberData.append("zone", member.zoneNo);
                              memberData.append("priority", member.priority);
                              memberData.append("type", "update");
                              $.ajax({
                                    dataType: 'json',
                                    type:'POST',
                                    url: "addmember/UpdateMemberData",
                                    data:memberData,
                                    contentType: false,      
                                    cache: false,           
                                    processData:false,
                              }).done(function(data){
                                    console.log(data)
                                    if(data > 0){
                                          document.location.href ='clubaccount';
                                    }else{
                                          $("#ErrorMessage").fadeIn();
                                          $("#ErrorMessage").html("Data Not Inserted Try Again!!");
                                          $("#email").focus();
                                          setTimeout(function(){
                                                $("#ErrorMessage").fadeOut();
                                                $("#ErrorMessage").html("");
                                          }, 2000);
                                    }                                    
                              });   
                        }  
                  }else{
                        $("#ErrorMessage").fadeIn();
                        $("#ErrorMessage").html("Invalid Number");
                        $("#contact").focus();
                        setTimeout(function(){
                              $("#ErrorMessage").fadeOut();
                              $("#ErrorMessage").html("");
                        }, 2000);
                  }

            }else{
                  $("#ErrorMessage").fadeIn();
                  $("#ErrorMessage").html("Fill All Fields!!!");
                  setTimeout(function(){
                        $("#ErrorMessage").fadeOut();
                        $("#ErrorMessage").html("");
                  }, 2000);
            }
      });

      // President image upload
      $("#uploadPresidentImg").click(function(e){
            e.preventDefault();
            var PresidentImg = new FormData();
            PresidentImg.append("clubName", $("#presidentClubName").val().split(" ").join("_"));
            PresidentImg.append("presidentImg", $("#PresidentImg").prop('files')[0]);
            $.ajax({
                  dataType: 'json',
                  type:'POST',
                  url: 'imageupload/PresidentImgUpload',
                  data:PresidentImg,
                  contentType: false,      
                  cache: false,           
                  processData:false,
            }).done(function(data){
                  console.log(data)
                  if(data > 0){
                        location.reload();
                  }else{
                        alert("not inserted !!");
                  }
            });
      });
      // -- President image upload done
      // Secretary image upload

      $("#uploadSecretaryImg").click(function(e){
            e.preventDefault();
            var SecretaryImg = new FormData();
            SecretaryImg.append("clubName", $("#secretaryClubName").val().split(" ").join("_"));
            SecretaryImg.append("secretaryImg", $("#SecretaryImg").prop('files')[0]);
            $.ajax({
                  dataType: 'json',
                  type:'POST',
                  url: 'imageupload/SecretaryImgUpload',
                  data:SecretaryImg,
                  contentType: false,      
                  cache: false,           
                  processData:false,
            }).done(function(data){
                  if(data > 0){
                        location.reload();
                  }else{
                        alert("not inserted !!");
                  }
            });
      });

      // -- Secretary image upload done
      // Gallery image upload

      $("#uploadGalleryImg").click(function(e){
            e.preventDefault();
            var GalleryImg = new FormData();
            GalleryImg.append("clubName", $("#galleryClubName").val().split(" ").join("_"));
            GalleryImg.append("galleryImg", $("#GalleryImg").prop('files')[0]);
            $.ajax({
                  dataType: 'json',
                  type:'POST',
                  url: 'imageupload/GalleryImgUpload',
                  data:GalleryImg,
                  contentType: false,      
                  cache: false,           
                  processData:false,
            }).done(function(data){
                  if(data > 0){
                        location.reload();
                  }else{
                        alert("not inserted !!");
                  }
            });
      });

      // -- Gallery image upload done


});
function clubName(clubName){
      var clubData = new FormData();
      clubData.append("clubName", clubName);
      $.ajax({
            dataType: 'json',
            type:'POST',
            url: "districtclubs/FindClubData",
            data:clubData,
            contentType: false,      
            cache: false,           
            processData:false,
      }).done(function(data){
            if(data){
                  document.location.href ='districtclub';
            }
      }); 
}

function ClubRecord(clubName){
      var clubData = new FormData();
      clubData.append("clubName", clubName);
      $.ajax({
            dataType: 'json',
            type:'POST',
            url: "districtclub/GetClubMemberData",
            data:clubData,
            contentType: false,      
            cache: false,           
            processData:false,
      }).done(function(data){
            if(data){
                  $("#ClubName").html(data[0]['clubName']);
                  for( x in data){
                        if (data[x]['designation'] ==="President") {
                           $("#clubPresident").html(data[x]['Name']);
                           $("#clubPresidentAvenue").html(data[x]['designation']);
                           $("#clubPresidentEmail").html(data[x]['email']);            
                        }
                        if (data[x]['designation'] ==="Secretary") {
                                 $("#clubSecretary").html(data[x]['Name']);
                                 $("#clubSecretaryAvenue").html(data[x]['designation']);
                                 $("#clubSecretaryEmail").html(data[x]['email']);
                        }
                        if (data[x]['designation'] !="Secretary" && data[x]['designation'] !="President" &&
                        data[x]['designation'] !="Member") {
                              $('#clubBODList').append('<tr>'+
                                                      '<td>'+data[x]['Name']+'</td>'+
                                                      '<td class="BODEmail">'+data[x]['designation']+'</td>'+
                                                      '<td>'+data[x]['email']+'</td>'+
                                                      '</tr>');
                        }
                  }
            }
      }); 
}

function PresidentImage(clubName){
      var clubData = new FormData();
      clubData.append("clubName", clubName);
      $.ajax({
            dataType: 'json',
            type:'POST',
            url: "imageupload/ReadPresidentImg",
            data:clubData,
            contentType: false,      
            cache: false,           
            processData:false,
      }).done(function(data){
            if(data){ 
                  for(x in data){ 
                        if(data[x]['clubName'] == clubName){  
                        $('#presidentImg').append('<img class="img-responsive BOD" src="'+data[x]['paths']+'" alt="">');
                        }     
                  }           
            }
      });
}

function SecretaryImage(clubName){
      var clubData = new FormData();
      clubData.append("clubName", clubName);
      $.ajax({
            dataType: 'json',
            type:'POST',
            url: "imageupload/ReadSecretaryImg",
            data:clubData,
            contentType: false,      
            cache: false,           
            processData:false,
      }).done(function(data){
            if(data){ 
                  for(x in data){ 
                        if(data[x]['clubName'] == clubName){  
                        $('#secretaryImg').append('<img class="img-responsive BOD" src="'+data[x]['paths']+'" alt="">');
                        }     
                  }           
            }
      });
}

function ClubSocialMedia(clubName) {
      var clubData = new FormData();
      clubData.append("clubName", clubName);
      $.ajax({
            dataType: 'json',
            type:'POST',
            url: "districtclub/GetClubSocialMedia",
            data:clubData,
            contentType: false,      
            cache: false,           
            processData:false,
      }).done(function(data){
            if(data){  
                  for(x in data){
                        $("#facebookLink").attr("href", data[x]['facebookLink']);
                        $("#instagramLink").attr("href", data[x]['instagramLink']);    
                  }     
            }
      });
}

function NextEvent(){
      var obj     = {};
      var d       = new Date();
      var month   = d.getMonth()+1;
      var day     = d.getDate();
      var output  = d.getFullYear() + '-' +
      ((''+month).length<2 ? '0' : '') + month + '-' +
      ((''+day).length<2 ? '0' : '') + day;
      obj.action  = "next";
      obj.today   = output;
      var today = new FormData();
      today.append("today", output);
      $.ajax({
            dataType: 'json',
            type:'POST',
            url: "main/NextEvent",
            data:today,
            contentType: false,      
            cache: false,           
            processData:false,
      }).done(function(data){
            var _day          = 86400000;
            var today         = new Date();
            var eventDate     = new Date(data[0]['eventdate']);
            var distance      = eventDate - today;
            var days          = Math.floor(distance / _day)+1; 
            $("#eventTitle").html(data[0]['title']);
            $("#eventHost").html("Hosted By "+data[0]['clubName']);
            if(days == 0){
                  $("#EventDay").html("TODAY");
                  $("#EventDay").css("paddingTop", "15%");
                  $("#EventDay").css("fontSize", "45px");
                  $("#EventDayTitle").hide();
            }else{
                  $("#EventDay").html(days);
            }
            if(days <= 10){
                  for( x in data){                              
                        setTimeout(function(){ $("#CountDown").fadeIn(3000); }, 1000);                              
                  }
            }
      }); 
}

function ClubMembers(clubName){
      $.ajax({
            type: "GET",
            dataType: "json",
            url: "clubaccount/getClubData/"+clubName.split(" ").join("_"),
            success: function(data) {
                  for(i in data){                        
                        if(data[i]['designation'] =="Member"){
                              $('#clubMembersData').append('<tr>'+
                              '<td>'+data[i]['Name']+'</td>'+
                              '<td>'+data[i]['contact']+'</td>'+
                              '<td class="mobileView">'+data[i]['email']+'</td>'+
                              '<td>'+data[i]['bloodGroup']+'</td>'+
                              '<td class="mobileView">'+data[i]['designation']+'</td>'+
                              '<td><a href="#" onclick="FindClubMember('+data[i]['id']+
                              ');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>'+
                              ' / <a href="#" onclick="DeleteMember('+data[i]['id']+
                              ');"><i class="fa fa-trash" aria-hidden="true"></i></a></td>'+
                              '</tr>');
                        } /*<a href="" onclick="DeleteClubMember('+data[i]['id']+
                              ');"><i class="fa fa-trash" aria-hidden="true"></i></a>*/
                        if(data[i]['designation'] !="Member"){
                              $('#clubBODData').append('<tr>'+
                              '<td>'+data[i]['Name']+'</td>'+
                              '<td>'+data[i]['contact']+'</td>'+
                              '<td class="mobileView">'+data[i]['email']+'</td>'+
                              '<td>'+data[i]['bloodGroup']+'</td>'+
                              '<td class="mobileView">'+data[i]['designation']+'</td>'+
                              '<td><a href="#" onclick="FindClubMember('+data[i]['id']+
                              ');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>'+
                              ' / <a href="#" onclick="DeleteMember('+data[i]['id']+
                              ');"><i class="fa fa-trash" aria-hidden="true"></i></a></td>'+
                              '</tr>');
                        }
                  }
            }
      });
      
}

function DeleteMember(MemberId){
      var memberData = new FormData();
      memberData.append("memberId", MemberId);
      $.ajax({
            dataType: 'json',
            type:'POST',
            url: "addmember/DeleteMemberData",
            data:memberData,
            contentType: false,      
            cache: false,           
            processData:false,
      }).done(function(data){
            if(data){
                  location.reload();
            }
      }); 
}

function FindClubMember(MemberId){
      var memberData = new FormData();
      memberData.append("memberId", MemberId);
      $.ajax({
            dataType: 'json',
            type:'POST',
            url: "addmember/FindMemberData",
            data:memberData,
            contentType: false,      
            cache: false,           
            processData:false,
      }).done(function(data){
            console.log(data[0]['id'])
            if(data[0]['id'] != ""){
                  document.location.href = "addmember";
            }
      }); 
}

function SelectClubMember(MemberId){
      var memberData = new FormData();
      memberData.append("memberId", MemberId);
      $.ajax({
            dataType: 'json',
            type:'POST',
            url: "addmember/FindMemberData",
            data:memberData,
            contentType: false,      
            cache: false,           
            processData:false,
      }).done(function(data){
            if(data[0]['id'] != ""){
                  console.log(data[0]);
                  var name = data[0]['Name'].split(" ");
                  $("#updateMember").val(data[0]['id']);
                  $("#firstName").val(name[1]);
                  $("#lastName").val(name[2]);
                  $("#contact").val(data[0]['contact']);
                  $("#email").val(data[0]['email']);
                  $("#bloodGroup").val(data[0]['bloodGroup']);
                  $("#designation").val(data[0]['designation']);
                  $("#zoneNo").val(data[0]['zone']);
            }
      }); 
}