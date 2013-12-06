<?php
  /* Set the event year */
  $event_year = 2014;
  
  /* Set the dates */
  $event_dates = "February 5 to 7, 2014";
  
  /* Set the maximum number of paying attendees */
  $event_limit = 150;
  
  /* Set the cost to attend */
  $event_cost = '$200';

  $event_theme = "Agile for REAL";
  
  /* Set the status of the event here in order to control which
     of the four registration panels is displayed. Options are
	   coming = registration not yet open
	   open   = you may now register
	   full   = we are at capacity - registration closed
	   past   = the event has already taken place 
     If event is 'open', it will automatically set to 'full' 
     when the event limit has been reached. */
  $event_status = 'coming';
  
  /* when registration opens
        "on December 11, 2013 at 12:00pm PST"
        or
        "soon" */
  $event_registration_start_time = "on December 11, 2013 at 12:00pm PST";

  /* Set this to TRUE once we have sponsors. When set to TRUE,
     the home page displays as designed. When FALSE, the
     'Sponsors' link goes to the info about sponsorship
     and the sponsor logos and links at the bottom of
     of the home page are eliminated. */
  $show_sponsors = FALSE;

  /* Set the status of the wiki Session Notes. Options are
         coming = The wiki is not yet open
         offline = The wiki is unavailble due to maintenance
         online  = The wiki is available
     Any other value is also treated as coming */
  $wiki_status = 'coming';
  $show_session_graphics = FALSE;
  
  $session_notes_url = "http://aonw2014.posterous.com";
  $registration_url = "http://aonw2014.eventbrite.com";

/****************************************************/
/* From this point on, values are set automatically */
/****************************************************/

  /* Wiki Session Notes Page */
  $session_notes = "Agile_Open_Northwest_" . $event_year . "_Session_Notes";
  
  /* Only show the participants page if we have a list 
     of participants */
  $show_participants = file_exists("participants.txt");

?>

