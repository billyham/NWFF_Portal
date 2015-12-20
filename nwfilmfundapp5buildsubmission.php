<?php

if ($submitted === "1"){

    if (!file_exists("files/filmfund12/$key_id.txt")){
    
        $fh = fopen("files/filmfund12/$key_id.txt", 'w') or die("Failed to create file");
        $text = <<<_END

        first name: $applicant_fname
        last name: $applicant_lname
        title: $title
        time of submission: $completion_timestamp
        
        short description: $shortdesc

        email: $applicant_email
        address: $address
        city: $city
        state: $state
        zip: $zip
        phone: $phone
        director first name: $director_fname
        director last name: $director_lname
        additional directors: $additional_directors
        producers: $additional_producers

        synopsis: $synopsis

        production description: $prod_desc
        production timeline: $timeline
        
        artist statement: $artist_statement


        bio 1 $bio_1

        bio 2 $bio_2

        bio 3 $bio_3
        
        bio 4: $bio_4


        funding narrative: $funding_plan
        
        funds secured: $funds_secured

        distribution plan: $distribution
        
        budget: $budget



        work sample 1 title: $worksamp_1_title
        trt: $worksamp_1_trt
        description: $worksamp_1_desc
        link: $worksamp_1_link
        work sample provided on DVD? $worksamp_1_dvd

        work sample 2 title: $worksamp_2_title
        trt: $worksamp_2_trt
        description: $worksamp_2_desc
        link: $worksamp_2_link
        work sample provided on DVD? $worksamp_2_dvd

        work sample 3 title: $worksamp_3_title
        trt: $worksamp_3_trt
        description: $worksamp_3_desc
        link: $worksamp_3_link
        work sample provided on DVD? $worksamp_3_dvd







_END;
        fwrite($fh, $text) or die("Could not write file");
        fclose($fh);
        
        
     //send email to recipient   
        
    $to = "$email";         
    $subject = 'Film Fund application confirmation for '."$first_name".' '."$last_name";

    $message = file_get_contents("files/filmfund12/$key_id.txt");


    $additionalHeaders = "From: NWFF Artist Support<dave@hamagain.com>\r\n";
    $additionalHeaders .= 'Reply-To: dave@hamagain.com'."\r\n";
    $additionalHeaders .= 'Bcc: dave@shenaniganpictures.com';

    $OK = mail($to, $subject, $message, $additionalHeaders);


        
    }
        
    
}

?>