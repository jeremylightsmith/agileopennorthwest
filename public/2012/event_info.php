<?php
  /* Set the event year */
  $event_year = 2012;
  
  /* The regonline event id for this event */
  $event_id = "1035574";
  
  /* Set the maximum number of paying attendees */
  $event_limit = 125;
  
  /* Set the status of the event here in order to control which
     of the four registration panels is displayed. Options are
	   coming = registration not yet open
	   open   = you may now register
	   full   = we are at capacity - registration closed
	   past   = the event has already taken place 
     If event is 'open', it will automatically set to 'full' 
     when the event limit has been reached. */
  $event_status = 'past';

  /* Set this to TRUE once we have sponsors. When set to TRUE,
     the home page displays as designed. When FALSE, the
     'Sponsors' link goes to the info about sponsorship
     and the sponsor logos and links at the bottom of
     of the home page are eliminated. */
  $show_sponsors = TRUE;

  /* Set to TRUE to allow sponsors to register even when the
     event is full. Set to FALSE to hide this option */
  $allow_sponsor_registration = FALSE;

  /* Set the status of the wiki Session Notes. Options are
         coming = The wiki is not yet open
         offline = The wiki is unavailble due to maintenance
         online  = The wiki is available
     Any other value is also treated as coming */
  $wiki_status = 'online';

/****************************************************/
/* From this point on, values are set automatically */
/****************************************************/

  /* Wiki Session Notes Page */
  $session_notes = "Agile_Open_Northwest_" . $event_year . "_Session_Notes";
  
  /* Only show the participants page if we have a list 
     of participants */
  $show_participants = file_exists("participants.txt");

  /* The value of $places_remaining is calculated from
     the contents of participants.txt, if it exists.
     We calculate it in all cases, but only use
     it currently while the event is open. */
  $places_remaining = $event_limit;

  if ($show_participants) {
    $file = fopen("participants.txt", "r");
    if($file && !feof($file)) {
      $hdr = fgets($file);
      while(!feof($file)){
	  $line = fgets($file);
          $tokens = explode('","', $line);
	  
	  if (count($tokens)>=4) {
	    $type = substr($tokens[3],0,1);
	    if ($type != 'H' && $type != 'S' && $type != 'V')
		  $places_remaining--;
	  }
        }
    }

    if ($places_remaining <= 0 && $event_status == 'open')
      $event_status = 'full';
  }
?>


