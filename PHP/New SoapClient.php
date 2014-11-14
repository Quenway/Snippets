    $client = new SoapClient('http://crm-dev/Elearning/service.asmx?WSDL');
      $params->MembershipNumber = $USER->username;
      try {

          $allresponse = $client->GetMemberDetail($params);
          $response = ($allresponse->GetMemberDetailResult);
          $member_details = simplexml_load_string($response->any);

          //push response into vars
          $first_name = $member_details->first_name;
          $last_name = $member_details->last_name;
          $membership_status = $member_details->membership_status;

      }
      catch (Exception $e){
          printf($e);
      }

      foreach($member_details->Awards->Award as $award){

        if(!empty($award->award_level)){

          $award_text = "Name: ".$award->award_name."<br />Level: ".$award->award_level."<br />Type: ".$award->award_type."<br />Discipline: ".$award->award_discipline."<br />Date: ".$award->award_date;
        
        } else {

          $award_text = "Name: ".$award->award_name."<br />Type: ".$award->award_type."<br />Discipline: ".$award->award_discipline."<br />Date: ".$award->award_date;
        
        }
        
      }
