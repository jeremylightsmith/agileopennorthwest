<p>Here's a list of folks who are planning to attend.</p>

<!-- Table Entries
Normal Participant:
<tr><td>&nbsp;</td><td>NAME</td><td>COMPANY</td><td>FROM</td></tr>
Sponsors:
<tr><th><a href="sponsors.php">S</a></th><td>NAME</td><td>COMPANY</td><td>FROM</td></tr>
Hosts:
<tr><th><a href="hosts.php">H</a></th><td>NAME</td><td>COMPANY</td><td>FROM</td></tr>
-->

<table class="table table-condensed table-striped participants">
  <tr>
    <th></th>
    <th>Name / Twitter</th>
    <th>Company / Role</th>
    <th>City</th>
  </tr>

<?php

  $file = fopen($page . "/attendees.csv", "r");
  if($file && !feof($file)) {
    $hdr = fgets($file);
    while(!feof($file)){
      $line = fgets($file);
      $tokens = explode('","', $line);
    
      if (count($tokens)>=5) {
        $lastName = substr($tokens[0], 1);
        $firstName = $tokens[1];
        $type = $tokens[2];
        $ipLocation = $tokens[3];
        $city = $tokens[4];
        $role = $tokens[5];
        $other = $tokens[6];
        $twitterHandle = $tokens[7];
        $dietaryRestrictions = $tokens[8];
        $company = substr($tokens[9],0,strlen($tokens[9])-2);


        $name = $firstName . "&nbsp;" . $lastName;

        if ($twitterHandle <> '') {
          if (substr($twitterHandle, 0, 1) == '@') {
            $twitterHandle = substr($twitterHandle, 1);
          }
          $twitterHandle = "<a href='http://twitter.com/$twitterHandle'>@$twitterHandle</a>";
        }
        if ($role == 'Other') $role = $other;
        if ($company == '') $company = '&nbsp;';
        
        echo "<tr valign='top'>";
        
        if ($type == 'Host')
          echo "<th><a href=\"hosts.php\">H</a></th>";
        elseif ($type == 'Sponsor')
          echo "<th><a href=\"sponsors.php\">S</a></th>";
        elseif ($type == 'Volunteer')
          echo "<th style=\"color: #339900\"><i>V</i></th>";
        else
          echo "<td>&nbsp;</td>";

        echo "<td>$name<br/>$twitterHandle</td>";
        echo "<td>$company<br/><i>$role</i></td>";
        echo "<td>$city</td>";
        echo "</tr>\n";
      }
    }
  }
?>
</table>

<p style="margin-left: 3.5em"><i>H</i> = Host, <i>S</i> = Sponsor, <i>V</i> = Volunteer
