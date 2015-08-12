<?php
	      $sql=mysqli_query($conn,"SELECT birthday FROM meminfo WHERE username='".$uname."'");
          $row=mysqli_fetch_row($sql);
		  $year=$row[0][0].$row[0][1].$row[0][2].$row[0][3];
		  if($row[0][5]>0){
			  $mon=$row[0][5].$row[0][6];
		  }
		  else {
			  $mon=$row[0][6];
		  }
		  if($row[0][8]>0){
			  $day=$row[0][8].$row[0][9];
		  }
		  else {
			  $day=$row[0][9];
		  }
		  $zero="";
		  $y1951="";
		  $y1952="";
		  $y1953="";
		  $y1954="";
		  $y1955="";
		  $y1956="";
		  $y1957="";
		  $y1958="";
		  $y1959="";
		  $y1960="";
		  $y1961="";
		  $y1962="";
		  $y1963="";
		  $y1964="";
		  $y1965="";
		  $y1966="";
		  $y1967="";
		  $y1968="";
		  $y1969="";
		  $y1970="";
		  $y1971="";
		  $y1972="";
		  $y1973="";
		  $y1974="";
		  $y1975="";
		  $y1976="";
		  $y1977="";
		  $y1978="";
		  $y1979="";
		  $y1980="";
		  $y1981="";
		  $y1982="";
		  $y1983="";
		  $y1984="";
		  $y1985="";
		  $y1986="";
		  $y1987="";
		  $y1988="";
		  $y1989="";
		  $y1990="";
		  $y1991="";
		  $y1992="";
		  $y1993="";
		  $y1994="";
		  $y1995="";
		  $y1996="";
		  $y1997="";
		  $y1998="";
		  $y1999="";
		  $y2000="";
		  $y2001="";
		  $y2002="";
		  $y2003="";
		  $y2004="";
		  $y2005="";
		  $y2006="";
		  $y2007="";
		  $y2008="";
		  $y2009="";
		  $y2010="";
		  $y2011="";
		  $y2012="";
		  $y2012="";
		  $y2013="";
		  $y2014="";
		  $y2015="";
		  $m0="";
		  $m1="";
		  $m2="";
		  $m3="";
		  $m4="";
		  $m5="";
		  $m6="";
		  $m7="";
		  $m8="";
		  $m9="";
		  $m10="";
		  $m11="";
		  $m12="";
		  $d0="";
		  $d1="";
		  $d2="";
		  $d3="";
		  $d4="";
		  $d5="";
		  $d6="";
		  $d7="";
		  $d8="";
		  $d9="";
		  $d10="";
		  $d11="";
		  $d12="";
		  $d13="";
		  $d14="";
		  $d15="";
		  $d16="";
		  $d17="";
		  $d18="";
		  $d19="";
		  $d20="";
		  $d21="";
		  $d22="";
		  $d23="";
		  $d24="";
		  $d25="";
		  $d26="";
		  $d27="";
		  $d28="";
		  $d29="";
		  $d30="";
		  $d31="";
		  
		  switch($year){
		  case 1951 :
		      $y1951="selected";break;
		  case 1952 :
		      $y1952="selected";break;
		  case 1953 :
		      $y1953="selected";break;
		  case 1954 :
		  $y1954="selected";break;
		  case 1955 :
		  $y1955="selected";break;
		  case 1956 :
		  $y1956="selected";break;
		  case 1957 :
		  $y1957="selected";break;
		  case 1958 :
		  $y1958="selected";break;
		  case 1959 :
		  $y1959="selected";break;
		  case 1960 :
		  $y1960="selected";break;
		  case 1961 :
		  $y1961="selected";break;
		  case 1962 :
		  $y1962="selected";break;
		  case 1963 :
		  $y1963="selected";break;
		  case 1964 :
		  $y1964="selected";break;
		  case 1965 :
		  $y1965="selected";break;
		  case 1966 :
		  $y1966="selected";break;
		  case 1967 :
		  $y1967="selected";break;
		  case 1968 :
		  $y1968="selected";break;
		  case 1969 :
		  $y1969="selected";break;
		  case 1970 :
		  $y1970="selected";break;
		  case 1971 :
		  $y1971="selected";break;
		  case 1972 :
		  $y1972="selected";break;
		  case 1973 :
		  $y1973="selected";break;
		  case 1974 :
		  $y1974="selected";break;
		  case 1975 :
		  $y1975="selected";break;
		  case 1976 :
		  $y1976="selected";break;
		  case 1977 :
		  $y1977="selected";break;
		  case 1978 :
		  $y1978="selected";break;
		  case 1979 :
		  $y1979="selected";break;
		  case 1980 :
		  $y1980="selected";break;
		  case 1981 :
		  $y1981="selected";break;
		  case 1982 :
		  $y1982="selected";break;
		  case 1983 :
		  $y1983="selected";break;
		  case 1984 :
		  $y1984="selected";break;
		  case 1985 :
		  $y1985="selected";break;
		  case 1986 :
		  $y1986="selected";break;
		  case 1987 :
		  $y1987="selected";break;
		  case 1988 :
		  $y1988="selected";break;
		  case 1989 :
		  $y1989="selected";break;
		  case 1990 :
		  $y1990="selected";break;
		  case 1991 :
		  $y1991="selected";break;
		  case 1992 :
		  $y1992="selected";break;
		  case 1993 :
		  $y1993="selected";break;
		  case 1994 :
		  $y1994="selected";break;
		  case 1995 :
		  $y1995="selected";break;
		  case 1996 :
		  $y1996="selected";break;
		  case 1997 :
		  $y1997="selected";break;
		  case 1998 :
		  $y1998="selected";break;
		  case 1999 :
		  $y1999="selected";break;
		  case 2000 :
		  $y2000="selected";break;
		  case 2001 :
		  $y2001="selected";break;
		  case 2002 :
		  $y2002="selected";break;
		  case 2003 :
		  $y2003="selected";break;
		  case 2004 :
		  $y2004="selected";break;
		  case 2005 :
		  $y2005="selected";break;
		  case 2006 :
		  $y2006="selected";break;
		  case 2007 :
		  $y2007="selected";break;
		  case 2008 :
		  $y2008="selected";break;
		  case 2009 :
		  $y2009="selected";break;
		  case 2010 :
		  $y2010="selected";break;
		  case 2011 :
		  $y2011="selected";break;
		  case 2012 :
		  $y2012="selected";break;
		  case 2013 :
		  $y2013="selected";break;
		  case 2014 :
		  $y2014="selected";break;
		  case 2015 :
		  $y2015="selected";break;
		  
		  default:
		       $zero="selected";
		  }
		  switch($mon){
			  case 1 :
		  $m1="selected";break;
		  case 2 :
		  $m2="selected";break;
		  case 3 :
		  $m3="selected";break;
		  case 4 :
		  $m4="selected";break;
		  case 5 :
		  $m5="selected";break;
		  case 6 :
		  $m6="selected";break;
		  case 7 :
		  $m7="selected";break;
		  case 8 :
		  $m8="selected";break;
		  case 9 :
		  $m9="selected";break;
		  case 10 :
		  $m10="selected";break;
		  case 11 :
		  $m11="selected";break;
		  case 12 :
		  $m12="selected";break;
		  default :
		  $m0="selected";
		  }
		  switch ($day){
			  case 1 :
			  $d1="selected";break;
			  case 2 :
		  $d2="selected";break;
		  case 3 :
		  $d3="selected";break;
		  case 4 :
		  $d4="selected";break;
		  case 5 :
		  $d5="selected";break;
		  case 6 :
		  $d6="selected";break;
		  case 7 :
		  $d7="selected";break;
		  case 8 :
		  $d8="selected";break;
		  case 9 :
		  $d9="selected";break;
		  case 10 :
		  $d10="selected";break;
		  case 11 :
		  $d11="selected";break;
		  case 12 :
		  $d12="selected";break;
		  case 13 :
		  $d13="selected";break;
		  case 14 :
		  $d14="selected";break;
		  case 15 :
		  $d15="selected";break;
		  case 16 :
		  $d16="selected";break;
		  case 17 :
		  $d17="selected";break;
		  case 18 :
		  $d18="selected";break;
		  case 19 :
		  $d19="selected";break;
		  case 20 :
		  $d20="selected";break;
		  case 21 :
		  $d21="selected";break;
		  case 22 :
		  $d22="selected";break;
		  case 23 :
		  $d23="selected";break;
		  case 24 :
		  $d24="selected";break;
		  case 25 :
		  $d25="selected";break;
		  case 26 :
		  $d26="selected";break;
		  case 27 :
		  $d27="selected";break;
		  case 28 :
		  $d28="selected";break;
		  case 29 :
		  $d29="selected";break;
		  case 30 :
		  $d30="selected";break;
		  case 31 :
		  $d31="selected";break;
		  default :
		  $d0="selected";
		  }
			  
?>