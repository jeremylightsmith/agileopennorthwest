<?php
  $event_year = 2014;
  $event_dates = "February 5 to 7, 2014";
  $event_limit = 125; /* Set the maximum number of paying attendees */
  $event_cost = '$225'; /* "$125" or "TBD" */
  $event_theme = "Agile for REAL";
  $whats_included = "a continental breakfast, lunch each day, and dinner on the first night";
  // $whats_included = "a continental breakfast and lunch each day";
  
  /* Set the status of the event here in order to control which
     of the four registration panels is displayed. Options are
	   coming = registration not yet open
	   open   = you may now register
	   full   = we are at capacity - registration closed
	   past   = the event has already taken place 
     If event is 'open', it will automatically set to 'full' 
     when the event limit has been reached. */
  $event_status = 'open';
  
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
  $registration_url = "https://www.eventbrite.com/e/agile-open-northwest-2014-tickets-9367507467";

/****************************************************/
/* From this point on, values are set automatically */
/****************************************************/

  /* Wiki Session Notes Page */
  $session_notes = "Agile_Open_Northwest_" . $event_year . "_Session_Notes";
  
  /* Only show the participants page if we have a list 
     of participants */
  $show_participants = file_exists("participants.txt");

?>


