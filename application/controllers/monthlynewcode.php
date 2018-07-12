<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monthlyreporting extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
		$this->load->model('savereport');
	}

	public function index()
	{
		if($this->session->userdata['clubData']['logged_in']){
			$this->load->view('templates/header');
			$this->load->view('pages/monthlyreporting');
			$this->load->view('templates/footer');
		}else{
			redirect(base_url());
		}
	}

	public function ServiceReporting(){
		$report 	= json_decode($this->input->post('report'));
		$reporting 	= array();
		$mailing 	= array();
		$ISD 		= array();
		$CMD 		= array();
		$CSD 		= array();
		$PSD 		= array();
		$OSD 		= array();
		for ($i=0; $i < count($report); $i++) { 
			for ($j=0; $j < count($report[$i]); $j++) { 
				$postData = array(
	                'clubName' 		=> $report[$i][$j]->clubName,
	                'eventName' 	=> $report[$i][$j]->reportName,
	                'eventDate' 	=> $report[$i][$j]->reportDate,
	                'avenue' 		=> $report[$i][$j]->avenue,
	                'attendace' 	=> $report[$i][$j]->attendance,
	                'description' 	=> $report[$i][$j]->reportDescription
	            );
	            $mailData = array(
	                'clubName' 		=> $report[$i][$j]->clubName,
	                'email' 		=> $report[$i][$j]->clubEmail,
	                'eventName' 	=> $report[$i][$j]->reportName,
	                'eventDate' 	=> $report[$i][$j]->reportDate,
	                'avenue' 		=> $report[$i][$j]->avenue,
	                'attendace' 	=> $report[$i][$j]->attendance,
	                'description' 	=> $report[$i][$j]->reportDescription
	            );
	            array_push($reporting,$postData);
	            array_push($mailing,$mailData);
	            if ($report[$i][$j]->avenue == "International Service") {
	            	$isdData = array(
		                'clubName' 		=> $report[$i][$j]->clubName,
		                'email' 		=> $report[$i][$j]->clubEmail,
		                'eventName' 	=> $report[$i][$j]->reportName,
		                'eventDate' 	=> $report[$i][$j]->reportDate,
		                'avenue' 		=> $report[$i][$j]->avenue,
		                'attendace' 	=> $report[$i][$j]->attendance,
		                'description' 	=> $report[$i][$j]->reportDescription
		            );
	            	array_push($ISD,$isdData);
	            }else if($report[$i][$j]->avenue == "Community Service"){
	            	$cmdData = array(
		                'clubName' 		=> $report[$i][$j]->clubName,
		                'email' 		=> $report[$i][$j]->clubEmail,
		                'eventName' 	=> $report[$i][$j]->reportName,
		                'eventDate' 	=> $report[$i][$j]->reportDate,
		                'avenue' 		=> $report[$i][$j]->avenue,
		                'attendace' 	=> $report[$i][$j]->attendance,
		                'description' 	=> $report[$i][$j]->reportDescription
		            );
	            	array_push($CMD,$cmdData);
	            }else if($report[$i][$j]->avenue == "Club Service"){
	            	$csdData = array(
		                'clubName' 		=> $report[$i][$j]->clubName,
		                'email' 		=> $report[$i][$j]->clubEmail,
		                'eventName' 	=> $report[$i][$j]->reportName,
		                'eventDate' 	=> $report[$i][$j]->reportDate,
		                'avenue' 		=> $report[$i][$j]->avenue,
		                'attendace' 	=> $report[$i][$j]->attendance,
		                'description' 	=> $report[$i][$j]->reportDescription
		            );
	            	array_push($CSD,$csdData);
	            }else if($report[$i][$j]->avenue == "Professional Service"){
	            	$psdData = array(
		                'clubName' 		=> $report[$i][$j]->clubName,
		                'email' 		=> $report[$i][$j]->clubEmail,
		                'eventName' 	=> $report[$i][$j]->reportName,
		                'eventDate' 	=> $report[$i][$j]->reportDate,
		                'avenue' 		=> $report[$i][$j]->avenue,
		                'attendace' 	=> $report[$i][$j]->attendance,
		                'description' 	=> $report[$i][$j]->reportDescription
		            );
	            	array_push($PSD,$psdData);
	            }else{
	            	$osdData = array(
		                'clubName' 		=> $report[$i][$j]->clubName,
		                'email' 		=> $report[$i][$j]->clubEmail,
		                'eventName' 	=> $report[$i][$j]->reportName,
		                'eventDate' 	=> $report[$i][$j]->reportDate,
		                'avenue' 		=> $report[$i][$j]->avenue,
		                'attendace' 	=> $report[$i][$j]->attendance,
		                'description' 	=> $report[$i][$j]->reportDescription
		            );
	            	array_push($OSD,$osdData);
	            }
			}		
		}
		if (!empty($reporting)) {
			$insertReturn = $this->savereport->SaveServiceReport($reporting);
			if($insertReturn){
				$reportCnt = 0;
				$zoneNo = $this->savereport->GetClubZoneNo($mailing[0]['clubName']);
				if ($zoneNo[0]['zoneNo'] == 1) {
					$dzr = "dzr1@rotaract3131.org.in";
				}else if ($zoneNo[0]['zoneNo'] == 2) {
					$dzr = "dzr2@rotaract3131.org.in";
				}else if ($zoneNo[0]['zoneNo'] == 3) {
					$dzr = "dzr3@rotaract3131.org.in";
				}else if ($zoneNo[0]['zoneNo'] == 4) {
					$dzr = "dzr4@rotaract3131.org.in";
				}else if ($zoneNo[0]['zoneNo'] == 5) {
					$dzr = "dzr5@rotaract3131.org.in";
				}
				$data['mail'] = $mailing;
				$from_email = $mailing[0]['email']; 
		        $to_email = "reporting@rotaract3131.org.in, adminsecretary@rotaract3131.org.in, ".$dzr.
		        ", ".$mailing[0]['email']; 
		        $subject = $mailing[0]['clubName'] ." MONTHLY REPORT";
		        // $this->load->view('emails/reportmail', $data);
				$mailBody = $this->load->view('emails/reportmail', $data, true);
		         //Load email library
		        $config=array(
	                'charset'=>'utf-8',
	                'wordwrap'=> TRUE,
	                'mailtype' => 'html'
	            );
	                
	            $this->email->initialize($config);
		   
		        $this->email->from($from_email, $mailing[0]['clubName']); 
		        $this->email->to($to_email);
		        $this->email->subject($subject);
		        $this->email->message($mailBody);
		        //Send mail 
		        if($this->email->send()){
		            echo true;
		        }else{
		        	echo false;
		        } 
		        /*if (!empty($ISD)){
		        	$data['data'] = $ISD;
		        	$from_email = $ISD[0]['email']; 
			        $to_email = "isd@rotaract3131.org.in"; 
			        $subject = $ISD[0]['clubName'] ." MONTHLY REPORT";
					$mailBody = $this->load->view('emails/servicemail', $data, true);
			         //Load email library
			        $config=array(
		                'charset'=>'utf-8',
		                'wordwrap'=> TRUE,
		                'mailtype' => 'html'
		            );		                
		            $this->email->initialize($config);			   
			        $this->email->from($from_email, $ISD[0]['clubName']); 
			        $this->email->to($to_email);
			        $this->email->subject($subject);
			        $this->email->message($mailBody);
			        $this->email->send();
		        }
		        if (!empty($CMD)){
		        	$data['data'] = $CMD;
		        	$from_email = $CMD[0]['email']; 
			        $to_email = "cmd@rotaract3131.org.in"; 
			        $subject = $CMD[0]['clubName'] ." MONTHLY REPORT";
					$mailBody = $this->load->view('emails/servicemail', $data, true);
			         //Load email library
			        $config=array(
		                'charset'=>'utf-8',
		                'wordwrap'=> TRUE,
		                'mailtype' => 'html'
		            );		                
		            $this->email->initialize($config);			   
			        $this->email->from($from_email, $CMD[0]['clubName']); 
			        $this->email->to($to_email);
			        $this->email->subject($subject);
			        $this->email->message($mailBody);
			        $this->email->send();
		        }
		        if (!empty($CSD)){
		        	$data['data'] = $CSD;
		        	$from_email = $CSD[0]['email']; 
			        $to_email = "csd@rotaract3131.org.in"; 
			        $subject = $CSD[0]['clubName'] ." MONTHLY REPORT";
					$mailBody = $this->load->view('emails/servicemail', $data, true);
			         //Load email library
			        $config=array(
		                'charset'=>'utf-8',
		                'wordwrap'=> TRUE,
		                'mailtype' => 'html'
		            );		                
		            $this->email->initialize($config);			   
			        $this->email->from($from_email, $CSD[0]['clubName']); 
			        $this->email->to($to_email);
			        $this->email->subject($subject);
			        $this->email->message($mailBody);
			        $this->email->send();
		        }
		        if (!empty($PSD)){
		        	$data['data'] = $PSD;
		        	$from_email = $PSD[0]['email']; 
			        $to_email = "pdd@rotaract3131.org.in"; 
			        $subject = $PSD[0]['clubName'] ." MONTHLY REPORT";
					$mailBody = $this->load->view('emails/servicemail', $data, true);
			         //Load email library
			        $config=array(
		                'charset'=>'utf-8',
		                'wordwrap'=> TRUE,
		                'mailtype' => 'html'
		            );		                
		            $this->email->initialize($config);			   
			        $this->email->from($from_email, $PSD[0]['clubName']); 
			        $this->email->to($to_email);
			        $this->email->subject($subject);
			        $this->email->message($mailBody);
			        $this->email->send();
		        }*/
			}	
		}
	}

	public function MeetingReporting(){
		$report 		= json_decode($this->input->post('meeting'));
		$meetingGBM 	= array();
		$meetingBOD 	= array();
		$meeting 	 	= array();
		$cnt 			= 0;
		for ($i=0; $i < count($report); $i++) {
			for ($j=0; $j < count($report[$i]); $j++) {				
				$postData = array(
	                'clubName' 			=> $report[$i][$j]->clubName,
	                'meetingNo' 		=> $report[$i][$j]->meetingNo,
	                'meetingDate' 		=> $report[$i][$j]->MeetingDate,
	                'meetingAttendance' => $report[$i][$j]->meetingAttendance
	            );
				if($report[$i][$j]->meetingType == "GBM"){
					array_push($meetingGBM,$postData);
				}else if($report[$i][$j]->meetingType == "BOD"){
					array_push($meetingBOD,$postData);
				}
				$postData['type'] = $report[$i][$j]->meetingType; 
				$postData['email'] = $report[$i][$j]->clubEmail; 
	            array_push($meeting,$postData);
			}
		}
		if (!empty($meetingGBM)) {
			$insertReturn = $this->savereport->SaveGBMMeetimg($meetingGBM);
			if($insertReturn){
				$cnt++;
			}
		}
		if (!empty($meetingBOD)) {
			$insertReturn = $this->savereport->SaveBODMeetimg($meetingBOD);
			if($insertReturn){
				$cnt++;
			}	
		}
		if (!empty($meeting) && $cnt > 0) {
			$data['meetings'] = $meeting;
			$from_email = $meeting[0]['email']; 
	        $to_email = "reporting@rotaract3131.org.in, adminsecretary@rotaract3131.org.in, ".$meeting[0]['email']; 
	        $subject = $meeting[0]['clubName'] ." MEETING DETAILS";
	        // $this->load->view('emails/meetingmail', $data);
			$mailBody = $this->load->view('emails/meetingmail', $data, true);
	         //Load email library
	        $config=array(
                'charset'=>'utf-8',
                'wordwrap'=> TRUE,
                'mailtype' => 'html'
            );
                
            $this->email->initialize($config);
	   
	        $this->email->from($from_email, $meeting[0]['clubName']); 
	        $this->email->to($to_email);
	        $this->email->subject($subject);
	        $this->email->message($mailBody);
	        //Send mail 
	        if($this->email->send()){
	            echo true;
	        }else{
	        	echo false;
	        } 
		}

	}

	public function DuesReporting(){
		$report 		= json_decode($this->input->post('dues'));
		$duesData 	= array();
		for ($i=0; $i < count($report); $i++) { 
			$duesData = array(
                'clubName' 					=> $report[$i]->clubName,
                'amountDistrictDuesPaid' 	=> $report[$i]->amountDistrictDuesPaid,
                'duesPaidInMonth' 			=> $report[$i]->duesPaidInMonth,
                'newMemberDues' 			=> $report[$i]->newMemberDues
            );
		}
		if (!empty($duesData)) {
			$insertReturn = $this->savereport->SaveClubDues($duesData);
			$duesData['email'] =  $report[0]->clubEmail;
			$from_email = $duesData['email']; 
	        $to_email = "reporting@rotaract3131.org.in, adminsecretary@rotaract3131.org.in, ".$duesData['email']; 
	        $subject = $duesData['clubName'] ." DUES DETAILS";
	        // $this->load->view('emails/duesmail', $duesData);
			$mailBody = $this->load->view('emails/duesmail', $duesData, true);
	         //Load email library
	        $config=array(
                'charset'=>'utf-8',
                'wordwrap'=> TRUE,
                'mailtype' => 'html'
            );
                
            $this->email->initialize($config);
	   
	        $this->email->from($from_email, $duesData['clubName']); 
	        $this->email->to($to_email);
	        $this->email->subject($subject);
	        $this->email->message($mailBody);
	        //Send mail 
	        if($this->email->send()){
	            echo true;
	        }else{
	        	echo false;
	        } 
		}
	}

	public function ClubMemberReport(){
		$report 		= json_decode($this->input->post('member'));
		$memberData 	= array();
		for ($i=0; $i < count($report); $i++) { 
			$memberData = array(
                'clubName' 			=> $report[$i]->clubName,
                'femaleMember' 		=> $report[$i]->femaleMember,
                'maleMember' 		=> $report[$i]->maleMember,
                'prospectiveMember' => $report[$i]->prospectiveMember,
                'totalMember' 		=> $report[$i]->totalMember
            );
		}
		if (!empty($memberData)) {
			$insertReturn = $this->savereport->SaveClubMember($memberData);
			if($insertReturn){
				$memberData['email'] =  $report[0]->clubEmail;
				$from_email = $memberData['email']; 
		        $to_email = "reporting@rotaract3131.org.in, adminsecretary@rotaract3131.org.in, ".$memberData['email']; 
		        $subject = $memberData['clubName'] ." MEMBER DETAILS";
		        // $this->load->view('emails/membermail', $memberData);
				$mailBody = $this->load->view('emails/membermail', $memberData, true);
		         //Load email library
		        $config=array(
                    'charset'=>'utf-8',
                    'wordwrap'=> TRUE,
                    'mailtype' => 'html'
                );
                    
                $this->email->initialize($config);
		   
		        $this->email->from($from_email, $memberData['clubName']); 
		        $this->email->to($to_email);
		        $this->email->subject($subject);
		        $this->email->message($mailBody);
		        //Send mail 
		        if($this->email->send()){
		            echo true;
		        }else{
		        	echo false;
		        } 
			}
		}
	}

	public function BulletinReport(){
		$bulletinData 					= array();
		$insert 						= array();
		$config['upload_path']          = './img/bulletin';
        $config['allowed_types']        = 'pdf';
        $config['file_ext_tolower']     = TRUE;
        $config['overwrite']        	= TRUE;
        $config['max_size']             = 5000;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('bulletin'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $insert = $this->upload->data();
        } 
		$bulletinData = array(
            'clubName' 		=> $this->input->post('clubName'),
            'bulletinName' 	=> $this->input->post('name'),
            'bulletinDate' 	=> $this->input->post('date'),
            'bulletinPath' 	=> $insert["full_path"]
        );
		if (!empty($bulletinData)) {
			$insertReturn = $this->savereport->SaveBulletin($bulletinData);
			// echo $insertReturn;	
			if($insertReturn){
				$bulletinData['email'] = $this->input->post('clubEmail');

				$from_email = $bulletinData['email']; 
		        $to_email = "reporting@rotaract3131.org.in, adminsecretary@rotaract3131.org.in, ".$bulletinData['email']; 
		        $subject = $bulletinData['clubName'] ." BULLETIN";
				$mailBody = $this->load->view('emails/bulletinmail', $bulletinData, true);
		         //Load email library
		        $config=array(
                    'charset'=>'utf-8',
                    'wordwrap'=> TRUE,
                    'mailtype' => 'html'
                );
                    
                $this->email->initialize($config);
		   
		        $this->email->from($from_email, $bulletinData['clubName']); 
		        $this->email->to($to_email);
		        $this->email->subject($subject);
		        $this->email->message($mailBody); 
		        $this->email->attach($bulletinData['bulletinPath']);
		        //Send mail 
		        if($this->email->send()){
		            echo true;
		        }else{
		        	echo false;
		        } 
			}
		}
	}
}