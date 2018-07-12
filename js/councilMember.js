$(document).ready(function(){
	var councilDetails         = {};
      councilDetails.type        = "read";
	$.ajax({
      	type: "POST",
      	dataType: "json",
      	url: "districtcouncilmember/getcouncildata",
      	data: councilDetails,
      	success: function(data) { 
      		for(i in data){
      			if(data[i]['priority'] == 1){
      				$("#drrImg").attr("src", data[i]['imagePath']);
      				$("#drrName").html(data[i]['name'])
      				$("#drrPost").html(data[i]['designation'])
      				$("#drrEmail").html(data[i]['email'])
      				$("#drrFacebookLink").attr("href", data[i]['facebookLink']);
      				$("#drrInstaframLink").attr("href", data[i]['instagramLink']);
      			}
      			if(data[i]['priority'] == 2){
      				$("#secretaryImg").attr("src", data[i]['imagePath']);
      				$("#secretaryName").html(data[i]['name'])
      				$("#secretaryPost").html(data[i]['designation'])
      				$("#secretaryEmail").html(data[i]['email'])
      				$("#secretaryFacebookLink").attr("href", data[i]['facebookLink']);
      				$("#secretaryInstaframLink").attr("href", data[i]['instagramLink']);
      			}
                        if(data[i]['priority'] == 3){
                              $("#adminSecretaryImg").attr("src", data[i]['imagePath']);
                              $("#adminSecretaryName").html(data[i]['name'])
                              $("#adminSecretaryPost").html(data[i]['designation'])
                              $("#adminSecretaryEmail").html(data[i]['email'])
                              $("#adminSecretaryFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#adminSecretaryInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 4){
                              $("#enpSecretaryImg").attr("src", data[i]['imagePath']);
                              $("#enpSecretaryName").html(data[i]['name'])
                              $("#enpSecretaryPost").html(data[i]['designation'])
                              $("#enpSecretaryEmail").html(data[i]['email'])
                              $("#enpSecretaryFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#enpSecretaryInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 5){
                              $("#clubAdvisorImg").attr("src", data[i]['imagePath']);
                              $("#clubAdvisorName").html(data[i]['name'])
                              $("#clubAdvisorPost").html(data[i]['designation'])
                              $("#clubAdvisorEmail").html(data[i]['email'])
                              $("#clubAdvisorFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#clubAdvisorInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 6){
                              $("#reportingsecretary1Img").attr("src", data[i]['imagePath']);
                              $("#reportingsecretary1Name").html(data[i]['name'])
                              $("#reportingsecretary1Post").html(data[i]['designation'])
                              $("#reportingsecretary1Email").html(data[i]['email'])
                              $("#reportingsecretary1FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#reportingsecretary1InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 7){
                              $("#reportingsecretary2Img").attr("src", data[i]['imagePath']);
                              $("#reportingsecretary2Name").html(data[i]['name'])
                              $("#reportingsecretary2Post").html(data[i]['designation'])
                              $("#reportingsecretary2Email").html(data[i]['email'])
                              $("#reportingsecretary2FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#reportingsecretary2InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 8){
                              $("#treasurerImg").attr("src", data[i]['imagePath']);
                              $("#treasurerName").html(data[i]['name'])
                              $("#treasurerPost").html(data[i]['designation'])
                              $("#treasurerEmail").html(data[i]['email'])
                              $("#treasurerFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#treasurerInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 9){
                              $("#dzr1Img").attr("src", data[i]['imagePath']);
                              $("#dzr1Name").html(data[i]['name'])
                              $("#dzr1Post").html(data[i]['designation'])
                              $("#dzr1Email").html(data[i]['email'])
                              $("#dzr1FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#dzr1InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 10){
                              $("#dzr2Img").attr("src", data[i]['imagePath']);
                              $("#dzr2Name").html(data[i]['name'])
                              $("#dzr2Post").html(data[i]['designation'])
                              $("#dzr2Email").html(data[i]['email'])
                              $("#dzr2FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#dzr2InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 11){
                              $("#dzr3Img").attr("src", data[i]['imagePath']);
                              $("#dzr3Name").html(data[i]['name'])
                              $("#dzr3Post").html(data[i]['designation'])
                              $("#dzr3Email").html(data[i]['email'])
                              $("#dzr3FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#dzr3InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 12){
                              $("#dzr4Img").attr("src", data[i]['imagePath']);
                              $("#dzr4Name").html(data[i]['name'])
                              $("#dzr4Post").html(data[i]['designation'])
                              $("#dzr4Email").html(data[i]['email'])
                              $("#dzr4FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#dzr4InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 13){
                              $("#azr1Img").attr("src", data[i]['imagePath']);
                              $("#azr1Name").html(data[i]['name'])
                              $("#azr1Post").html(data[i]['designation'])
                              $("#azr1Email").html(data[i]['email'])
                              $("#azr1FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#azr1InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 14){
                              $("#azr2Img").attr("src", data[i]['imagePath']);
                              $("#azr2Name").html(data[i]['name'])
                              $("#azr2Post").html(data[i]['designation'])
                              $("#azr2Email").html(data[i]['email'])
                              $("#azr2FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#azr2InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 15){
                              $("#azr3Img").attr("src", data[i]['imagePath']);
                              $("#azr3Name").html(data[i]['name'])
                              $("#azr3Post").html(data[i]['designation'])
                              $("#azr3Email").html(data[i]['email'])
                              $("#azr3FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#azr3InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 16){
                              $("#azr4Img").attr("src", data[i]['imagePath']);
                              $("#azr4Name").html(data[i]['name'])
                              $("#azr4Post").html(data[i]['designation'])
                              $("#azr4Email").html(data[i]['email'])
                              $("#azr4FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#azr4InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 17){
                              $("#PDDImg").attr("src", data[i]['imagePath']);
                              $("#PDDName").html(data[i]['name'])
                              $("#PDDPost").html(data[i]['designation'])
                              $("#PDDEmail").html(data[i]['email'])
                              $("#PDDFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#PDDInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 18){
                              $("#CMDImg").attr("src", data[i]['imagePath']);
                              $("#CMDName").html(data[i]['name'])
                              $("#CMDPost").html(data[i]['designation'])
                              $("#CMDEmail").html(data[i]['email'])
                              $("#CMDFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#CMDInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 19){
                              $("#CSDImg").attr("src", data[i]['imagePath']);
                              $("#CSDName").html(data[i]['name'])
                              $("#CSDPost").html(data[i]['designation'])
                              $("#CSDEmail").html(data[i]['email'])
                              $("#CSDFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#CSDInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 20){
                              $("#ISDImg").attr("src", data[i]['imagePath']);
                              $("#ISDName").html(data[i]['name'])
                              $("#ISDPost").html(data[i]['designation'])
                              $("#ISDEmail").html(data[i]['email'])
                              $("#ISDFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#ISDInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 21){
                              $("#Communication1Img").attr("src", data[i]['imagePath']);
                              $("#Communication1Name").html(data[i]['name'])
                              $("#Communication1Post").html(data[i]['designation'])
                              $("#Communication1Email").html(data[i]['email'])
                              $("#Communication1FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#Communication1InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 22){
                              $("#Communication2Img").attr("src", data[i]['imagePath']);
                              $("#Communication2Name").html(data[i]['name'])
                              $("#Communication2Post").html(data[i]['designation'])
                              $("#Communication2Email").html(data[i]['email'])
                              $("#Communication2FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#Communication2InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 23){
                              $("#SAAImg").attr("src", data[i]['imagePath']);
                              $("#SAAName").html(data[i]['name'])
                              $("#SAAPost").html(data[i]['designation'])
                              $("#SAAEmail").html(data[i]['email'])
                              $("#SAAFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#SAAInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 24){
                              $("#PROImg").attr("src", data[i]['imagePath']);
                              $("#PROName").html(data[i]['name'])
                              $("#PROPost").html(data[i]['designation'])
                              $("#PROEmail").html(data[i]['email'])
                              $("#PROFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#PROInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 25){
                              $("#DWRImg").attr("src", data[i]['imagePath']);
                              $("#DWRName").html(data[i]['name'])
                              $("#DWRPost").html(data[i]['designation'])
                              $("#DWREmail").html(data[i]['email'])
                              $("#DWRFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#DWRInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 26){
                              $("#technicalImg").attr("src", data[i]['imagePath']);
                              $("#technicalName").html(data[i]['name'])
                              $("#technicalPost").html(data[i]['designation'])
                              $("#technicalEmail").html(data[i]['email'])
                              $("#technicalFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#technicalInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 27){
                              $("#editor1Img").attr("src", data[i]['imagePath']);
                              $("#editor1Name").html(data[i]['name'])
                              $("#editor1Post").html(data[i]['designation'])
                              $("#editor1Email").html(data[i]['email'])
                              $("#editor1FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#editor1InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 28){
                              $("#editor2Img").attr("src", data[i]['imagePath']);
                              $("#editor2Name").html(data[i]['name'])
                              $("#editor2Post").html(data[i]['designation'])
                              $("#editor2Email").html(data[i]['email'])
                              $("#editor2FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#editor2InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 29){
                              $("#sportsImg").attr("src", data[i]['imagePath']);
                              $("#sportsName").html(data[i]['name'])
                              $("#sportsPost").html(data[i]['designation'])
                              $("#sportsEmail").html(data[i]['email'])
                              $("#sportsFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#sportsInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 30){
                              $("#RRROImg").attr("src", data[i]['imagePath']);
                              $("#RRROName").html(data[i]['name'])
                              $("#RRROPost").html(data[i]['designation'])
                              $("#RRROEmail").html(data[i]['email'])
                              $("#RRROFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#RRROInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 31){
                              $("#WRWImg").attr("src", data[i]['imagePath']);
                              $("#WRWName").html(data[i]['name'])
                              $("#WRWPost").html(data[i]['designation'])
                              $("#WRWEmail").html(data[i]['email'])
                              $("#WRWFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#WRWInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 32){
                              $("#snapperImg").attr("src", data[i]['imagePath']);
                              $("#snapperName").html(data[i]['name'])
                              $("#snapperPost").html(data[i]['designation'])
                              $("#snapperEmail").html(data[i]['email'])
                              $("#snapperFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#snapperInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 33){
                              $("#cordinatorImg").attr("src", data[i]['imagePath']);
                              $("#cordinatorName").html(data[i]['name'])
                              $("#cordinatorPost").html(data[i]['designation'])
                              $("#cordinatorEmail").html(data[i]['email'])
                              $("#cordinatorFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#cordinatorInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 34){
                              $("#copsPresidentImg").attr("src", data[i]['imagePath']);
                              $("#copsPresidentName").html(data[i]['name'])
                              $("#copsPresidentPost").html(data[i]['designation'])
                              $("#copsPresidentEmail").html(data[i]['email'])
                              $("#copsPresidentFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#copsPresidentInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 35){
                              $("#copsSecretaryImg").attr("src", data[i]['imagePath']);
                              $("#copsSecretaryName").html(data[i]['name'])
                              $("#copsSecretaryPost").html(data[i]['designation'])
                              $("#copsSecretaryEmail").html(data[i]['email'])
                              $("#copsSecretaryFacebookLink").attr("href", data[i]['facebookLink']);
                              $("#copsSecretaryInstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 36){
                              $("#Portfolio1Img").attr("src", data[i]['imagePath']);
                              $("#Portfolio1Name").html(data[i]['name'])
                              $("#Portfolio1Post").html(data[i]['designation'])
                              $("#Portfolio1Email").html(data[i]['email'])
                              $("#Portfolio1FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#Portfolio1InstaframLink").attr("href", data[i]['instagramLink']);
                        }
                        if(data[i]['priority'] == 37){
                              $("#Portfolio2Img").attr("src", data[i]['imagePath']);
                              $("#Portfolio2Name").html(data[i]['name'])
                              $("#Portfolio2Post").html(data[i]['designation'])
                              $("#Portfolio2Email").html(data[i]['email'])
                              $("#Portfolio2FacebookLink").attr("href", data[i]['facebookLink']);
                              $("#Portfolio2InstaframLink").attr("href", data[i]['instagramLink']);
                        }
      		}
      	}
      });
});