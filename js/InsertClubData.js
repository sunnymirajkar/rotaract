$(document).ready(function(){
	
	$("#ClubDataInsert").click(function(e) {
        e.preventDefault();
        var cLubData = {};
        cLubData.clubName 	= $("#ClubName").val().toUpperCase();
        cLubData.charterDay = $("#CharterDay").val();
        cLubData.meeting 	= $("#Meeting").val();
        cLubData.facebook 	= $("#facebookLink").val();
        cLubData.instagram 	= $("#instagramLink").val();
        cLubData.email 		= $("#email").val();
        cLubData.userName 	= $("#userName").val();
        cLubData.password 	= $("#password").val();
        cLubData.zoneNo 	= $("#zoneNo").val();
        cLubData.uniqNo     = Math.floor(100000 + Math.random() * 900000);
        cLubData.type 		= "insert";
        console.log(new FormData(this));
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "php/InsertClubData.php",
            data: cLubData,
            success: function(data) {
                console.log(data)  
                if (data[0]==true) {
                	alert("inserted Successfully !!!!");
                    document.location.href ='DisplayClubData.html';
                    $("#ClubName").val("");
                    $("#CharterDay").val("");
                    $("#Meeting").val("");
                    $("#facebookLink").val("");
                    $("#instagramLink").val("");
                    $("#email").val("");
                    $("#userName").val("");
                    $("#password").val("");
                    $("#zoneNo").val("");
                }                      
            }
      	});    
    });

    $("#ClubDataUpdate").click(function(e) {
        e.preventDefault();
        var cLubData = {};
        cLubData.clubID     = $("#ClubID").val();
        cLubData.clubName   = $("#ClubName").val().toUpperCase();
        console.log(cLubData.clubName)
        cLubData.charterDay = $("#CharterDay").val();
        cLubData.meeting    = $("#Meeting").val();
        cLubData.facebook   = $("#facebookLink").val();
        cLubData.instagram  = $("#instagramLink").val();
        cLubData.email      = $("#email").val();
        cLubData.userName   = $("#userName").val();
        cLubData.password   = $("#password").val();
        cLubData.zoneNo     = $("#zoneNo").val();
        cLubData.uniqNo     = Math.floor(100000 + Math.random() * 900000);
        cLubData.type       = "update";
        console.log(new FormData(this));
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "php/InsertClubData.php",
            data: cLubData,
            success: function(data) {
                console.log(data)  
                if (data[0]==true) {
                    alert(data[1]);
                    document.location.href ='DisplayClubData.html';
                    $("#ClubName").val("");
                    $("#CharterDay").val("");
                    $("#Meeting").val("");
                    $("#facebookLink").val("");
                    $("#instagramLink").val("");
                    $("#email").val("");
                    $("#userName").val("");
                    $("#password").val("");
                    $("#zoneNo").val("");
                }                      
            }
        });    
    });

    var clubId = document.location.toString().split("=");
    if(clubId[1] != undefined){
        $("#ClubDataInsert").hide();
        $("#ClubDataUpdate").show();
        var clubData = {}
        clubData.ID = clubId[1];
        clubData.type = "select";
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "php/InsertClubData.php",
            data: clubData,
            success: function(data) {
                console.log(data)  
                $("#ClubID").val(data[0][0]);
                $("#ClubName").val(data[0][1]);
                $("#CharterDay").val(data[0][3]);
                $("#Meeting").val(data[0][4]);                
                $("#zoneNo").val(data[0][5]);   
                $("#facebookLink").val(data[0][6]);
                $("#instagramLink").val(data[0][7]);
                $("#email").val(data[0][8]);
                $("#userName").val(data[0][9]);
                $("#password").val(data[0][10]);                  
            }
        });   
    }else{
        $("#ClubDataInsert").show();
        $("#ClubDataUpdate").hide();
        $("#ClubName").val("");
        $("#CharterDay").val("");
        $("#Meeting").val("");
        $("#facebookLink").val("");
        $("#instagramLink").val("");
        $("#email").val("");
        $("#userName").val("");
        $("#password").val("");
        $("#zoneNo").val("");
    }
});