$(document).ready(function(){
	$('.loader').css('height', ($(document).height()-75)+'px');
	$("#noOfMembers").click(function(event){
		event.preventDefault();
		$("#noOfMembersForm").slideToggle(1000);
		$("#noOfMembers i").toggleClass("fa-minus");
		$("#monthlyReportBtn").show();
	});

	$("#addClubService").click(function(event){
		event.preventDefault();
		$("#clubServiceForm").slideToggle(1000);
		$("#addClubService i").toggleClass("fa-minus");
		$("#monthlyReportBtn").show();
	});

	$("#addProfessionalService").click(function(event){
		event.preventDefault();
		$("#professionalServiceForm").slideToggle(1000);
		$("#addProfessionalService i").toggleClass("fa-minus");
		$("#monthlyReportBtn").show();
	});	

	$("#addCommunityService").click(function(event){
		event.preventDefault();
		$("#communityServiceForm").slideToggle(1000);
		$("#addCommunityService i").toggleClass("fa-minus");
		$("#monthlyReportBtn").show();
	});	

	$("#addInternationalService").click(function(event){
		event.preventDefault();
		$("#internationalServiceForm").slideToggle(1000);
		$("#addInternationalService i").toggleClass("fa-minus");
		$("#monthlyReportBtn").show();
	});	

	$("#addOtherService").click(function(event){
		event.preventDefault();
		$("#otherServiceForm").slideToggle(1000);
		$("#addOtherService i").toggleClass("fa-minus");
		$("#monthlyReportBtn").show();
	});	

	$("#addClubDues").click(function(event){
		event.preventDefault();
		$("#clubDuesForm").slideToggle(1000);
		$("#addClubDues i").toggleClass("fa-minus");
		$("#monthlyReportBtn").show();
	});	

	$("#addBulletin").click(function(event){
		event.preventDefault();
		$("#BulletinData").slideToggle(1000);
		$("#addBulletin i").toggleClass("fa-minus");
		$("#monthlyReportBtn").show();
	});	

	$("#addGBM").click(function(event){
		event.preventDefault();
		$("#gbmForm").slideToggle(1000);
		$("#addGBM i").toggleClass("fa-minus");
		$("#monthlyReportBtn").show();
	});	

	$("#addBOD").click(function(event){
		event.preventDefault();
		$("#bodForm").slideToggle(1000);
		$("#addBOD i").toggleClass("fa-minus");
		$("#monthlyReportBtn").show();
	});	

	$("#SumbitReport").click(function(event){
		event.preventDefault();
		 $('.loader').show();
		var report 							= [];
		var meeting 						= [];
		var clubSreport 					= [];
		var fSreport 						= [];		
		var csreport 						= [];
		var isreport 						= [];
		var otherreport 					= [];
		var gbmMeeting 						= [];
		var bodMeeting  					= [];
		var clubDues 						= [];
		var clubMembers						= [];
		for(var i=1; i<=5; i++){

			// CLUB SERVICE PROJECT
			if($("#reportNameClubS"+i).val() !="" && $("#avenueClubS"+i).val() !="" && 
				$("#reportDateClubS"+i).val() !="" && $("#attendanceClubS"+i).val() !="" && 
				$("#reportDescriptionClubS"+i).val() !=""){
				var clubSreportData 				= {};
				clubSreportData.clubName  		 	= $("#clubName").val();
				clubSreportData.clubEmail      		= $("#clubEmail").val();
				clubSreportData.reportName 			= $("#reportNameClubS"+i).val();
				clubSreportData.avenue 				= $("#avenueClubS"+i).val();
				clubSreportData.reportDate 			= $("#reportDateClubS"+i).val();
				clubSreportData.attendance		 	= $("#attendanceClubS"+i).val();
				clubSreportData.reportDescription 	=  $("#reportDescriptionClubS"+i).val();
				clubSreport.push(clubSreportData);			
			}

			// PRODESSIONAL SERVICE PROJECT
			if($("#reportNameFS"+i).val() !="" && $("#avenueFS"+i).val() !="" && 
				$("#reportDateFS"+i).val() !="" && $("#attendanceFS"+i).val() !="" && 
				$("#reportDescriptionFS"+i).val() !=""){
				var fSreportData 				= {};
				fSreportData.clubName  		 	= $("#clubName").val();
				fSreportData.clubEmail      	= $("#clubEmail").val();
				fSreportData.reportName 		= $("#reportNameFS"+i).val();
				fSreportData.avenue 			= $("#avenueFS"+i).val();
				fSreportData.reportDate 		= $("#reportDateFS"+i).val();
				fSreportData.attendance		 	= $("#attendanceFS"+i).val();
				fSreportData.reportDescription 	=  $("#reportDescriptionFS"+i).val();
				fSreport.push(fSreportData);			
			}

			// COMMUNITY SERVICE PROJECT
			if($("#reportNameCS"+i).val() !="" && $("#avenueCS"+i).val() !="" && $("#reportDateCS"+i).val() !=""
				&& $("#attendanceCS"+i).val() !="" && $("#reportDescriptionCS"+i).val() !=""){
				var cSreportData 				= {};
				cSreportData.clubName  		 	= $("#clubName").val();
				cSreportData.clubEmail      	= $("#clubEmail").val();
				cSreportData.reportName 		= $("#reportNameCS"+i).val();
				cSreportData.avenue 			= $("#avenueCS"+i).val();
				cSreportData.reportDate 		= $("#reportDateCS"+i).val();
				cSreportData.attendance		 	= $("#attendanceCS"+i).val();
				cSreportData.reportDescription 	=  $("#reportDescriptionCS"+i).val();
				csreport.push(cSreportData);			
			}

			// INTERNATIONAL SERVICE PEOJECT
			if($("#reportNameIS"+i).val() !="" && $("#avenueIS"+i).val() !="" && $("#reportDateIS"+i).val() !=""
				&& $("#attendanceIS"+i).val() !="" && $("#reportDescriptionIS"+i).val() !=""){
				var iSreportData 				= {};
				iSreportData.clubName  		 	= $("#clubName").val();
				iSreportData.clubEmail      	= $("#clubEmail").val();
				iSreportData.reportName 		= $("#reportNameIS"+i).val();
				iSreportData.avenue 			= $("#avenueIS"+i).val();
				iSreportData.reportDate 		= $("#reportDateIS"+i).val();
				iSreportData.attendance		 	= $("#attendanceIS"+i).val();
				iSreportData.reportDescription 	=  $("#reportDescriptionIS"+i).val();
				isreport.push(iSreportData);
			}

			// OTHER SERVICE PEOJECT
			if($("#reportNameOther"+i).val() !="" && $("#avenueOther"+i).val() !="" && $("#reportDateOther"+i).val() !=""
				&& $("#attendanceOther"+i).val() !="" && $("#reportDescriptionOther"+i).val() !=""){
				var otherreportData 				= {};
				otherreportData.clubName  		 	= $("#clubName").val();
				otherreportData.clubEmail      		= $("#clubEmail").val();
				otherreportData.reportName 			= $("#reportNameOther"+i).val();
				otherreportData.avenue 				= $("#avenueOther"+i).val();
				otherreportData.reportDate 			= $("#reportDateOther"+i).val();
				otherreportData.attendance		 	= $("#attendanceOther"+i).val();
				otherreportData.reportDescription 	=  $("#reportDescriptionOther"+i).val();
				otherreport.push(otherreportData);
			}

			// GBM MEETING
			if($("#meetingNo"+i).val() !="" && $("#meetingDate"+i).val() !="" &&
			 $("#meetingAttendance"+i).val() !=""){
				var gbmMeetingData 				= {};
				gbmMeetingData.clubName  		 	= $("#clubName").val();
				gbmMeetingData.clubEmail      		= $("#clubEmail").val();
				gbmMeetingData.meetingNo 			= $("#meetingNo"+i).val();
				gbmMeetingData.meetingType			= $("#meetingType"+i).val();
				gbmMeetingData.MeetingDate 			= $("#meetingDate"+i).val();
				gbmMeetingData.meetingAttendance 	= $("#meetingAttendance"+i).val();
				gbmMeeting.push(gbmMeetingData);
			}

			// BOD MEETING
			if($("#BODmeetingNo"+i).val() !="" && $("#BODmeetingDate"+i).val() !="" &&
			 $("#BODmeetingAttendance"+i).val() !=""){
				var bodMeetingData 				= {};
				bodMeetingData.clubName  		 	= $("#clubName").val();
				bodMeetingData.clubEmail      		= $("#clubEmail").val();
				bodMeetingData.meetingNo 			= $("#BODmeetingNo"+i).val();
				bodMeetingData.meetingType			= $("#BODmeetingType"+i).val();
				bodMeetingData.MeetingDate 			= $("#BODmeetingDate"+i).val();
				bodMeetingData.meetingAttendance 	= $("#BODmeetingAttendance"+i).val();
				bodMeeting.push(bodMeetingData);
			}

		}

		// CLUB MEMBERS
		if($("#femaleMember").val() !="" && $("#maleMember").val() !="" &&
			 $("#prospectiveMember").val() !="" && $("#totalMember").val() !=""){
				var clubMembersData 				= {};
				clubMembersData.clubName  		 	= $("#clubName").val();
				clubMembersData.clubEmail      		= $("#clubEmail").val();
				clubMembersData.femaleMember 		= $("#femaleMember").val();
				clubMembersData.maleMember			= $("#maleMember").val();
				clubMembersData.prospectiveMember 	= $("#prospectiveMember").val();
				clubMembersData.totalMember 		= $("#totalMember").val();
				clubMembers.push(clubMembersData);
		}

		// CLUB DUES
		if($("#amountDistrictDuesPaid").val() !="" && $("#duesPaidInMonth").val() !="" &&
			 $("#newMemberDues").val() !=""){
				var clubDuesData 					= {};
				clubDuesData.clubName  		 		= $("#clubName").val();
				clubDuesData.clubEmail      		= $("#clubEmail").val();
				clubDuesData.amountDistrictDuesPaid = $("#amountDistrictDuesPaid").val();
				clubDuesData.duesPaidInMonth		= $("#duesPaidInMonth").val();
				clubDuesData.newMemberDues 			= $("#newMemberDues").val();
				clubDues.push(clubDuesData);
		}
		count = 0;
		// CLUBS MEMBERS DETAILS
		if(clubMembers.length != 0){
			var memberreport = new FormData();
	            memberreport.append("member", JSON.stringify(clubMembers));

	            $.ajax({
		            dataType: 'json',
		            type:'POST',
		            url: "monthlyreporting/ClubMemberReport",
		            data:memberreport,
		            contentType: false,      
		            cache: false,           
		            processData:false,
		      	}).done(function(data){
		            if(data){
		            	count++;
		            }

		      	});
		}	

		// MONTHLY REPORT DETAILS
		if(clubSreport.length != 0 || fSreport.length != 0 || csreport.length != 0 
			|| isreport.length != 0 || otherreport.length != 0){
			if(clubSreport.length != 0){
				report.push(clubSreport);
			}
			if(fSreport.length != 0){
				report.push(fSreport);
			}
			if(csreport.length != 0){
				report.push(csreport);
			}
			if(isreport.length != 0){
				report.push(isreport);
			}
			if(otherreport.length != 0){
				report.push(otherreport);
			}
			// var jsonString = JSON.stringify(report);
			var seviceReport = new FormData();
            seviceReport.append("report", JSON.stringify(report));

            $.ajax({
	            dataType: 'json',
	            type:'POST',
	            url: "monthlyreporting/ServiceReporting",
	            data:seviceReport,
	            contentType: false,      
	            cache: false,           
	            processData:false,
	      	}).done(function(data){
	            console.log(data)
	            if(data){
	            	count++;
	            }
	      	}); 
		}

		// GBM AND BOD MEETING DETAILS
		if(gbmMeeting.length != 0 || bodMeeting.length != 0){			
			if(gbmMeeting.length != 0){
				meeting.push(gbmMeeting);
			}
			if(bodMeeting.length != 0){
				meeting.push(bodMeeting);
			}
			if(meeting.length != 0){
				var meetingReport = new FormData();
	            meetingReport.append("meeting", JSON.stringify(meeting));

	            $.ajax({
		            dataType: 'json',
		            type:'POST',
		            url: "monthlyreporting/MeetingReporting",
		            data:meetingReport,
		            contentType: false,      
		            cache: false,           
		            processData:false,
		      	}).done(function(data){
		            if(data){
		            	count++;
		            }
		      	});
			}
		}	

		// CLUBS DUES DETAILS
		if(clubDues.length != 0){
			var clubDuesData = new FormData();
            clubDuesData.append("dues", JSON.stringify(clubDues));
            $.ajax({
	            dataType: 'json',
	            type:'POST',
	            url: "monthlyreporting/DuesReporting",
	            data:clubDuesData,
	            contentType: false,      
	            cache: false,           
	            processData:false,
	      	}).done(function(data){
	            if(data){
	            	count++;
	            }
	      	});
		}	

		/*BULLETIN DETAILS*/
		if($("#bulletinName").val() !="" && $("#bulletinDate").val() !="" 
			&& $("#bulletinFile").prop('files')[0] != undefined ){
			var bulletinDate = new FormData();
			bulletinDate.append("clubName", $("#clubName").val());
			bulletinDate.append("clubEmail", $("#clubEmail").val());
			bulletinDate.append("name", $("#bulletinName").val());
			bulletinDate.append("date", $("#bulletinDate").val());
			bulletinDate.append("bulletin", $("#bulletinFile").prop('files')[0]);

			$.ajax({
	            dataType: 'json',
	            type:'POST',
	            url: "monthlyreporting/BulletinReport",
	            data:bulletinDate,
	            contentType: false,      
	            cache: false,           
	            processData:false,
	      	}).done(function(data){
	            if(data){
	            	count++;
	            }
	      	});
		}
		setTimeout(function(){ 			
			$('.loader').hide();
		if(count > 0){
			alert("report Submit Successfully");
			document.location.href = "clubaccount";
		}else{
			alert("report Not Submit");
		}	
		}, 5000);	
	});
				
});