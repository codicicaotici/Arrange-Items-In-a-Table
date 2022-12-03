<?php
/*
table creation to show items arranged in columns and staves
===========================================================
codicicaotici@gmal.com
*/
function divide($dividend, $divisor) {
  if($divisor == 0) {
    return 1;
  }
  return $dividend / $divisor;
}

$pageName  	= 'table creation to show items arranged in columns and staves';
$Title		= 'element title';
$text		= 'Nisl id erat maecenas. Nulla lectus in volutpat enim sit nisi leo fusce ac ut. Sem metus sodales ullamcorper in ligula id ultricies ultricies vestibulum elit volutpat vitae egestas vel sed.';
$br			= '<br><br>';

$index[1]="1";
$index[2]="2";
$index[3]="3";
$index[4]="4";
$index[5]="5";
$index[6]="6";
$index[7]="7";
$index[8]="8";
$index[9]="9";
$index[10]="10";
$index[11]="11";
$index[12]="12";
$index[13]="13";
$index[14]="14";
$index[15]="15";
$index[16]="16";
$index[17]="17";
$index[18]="18";
$index[19]="19";
$index[20]="20";

//external values ​​to assign
//=========================
$num_rec=10;
$num_columns=5;
	//random
	$num_rec = rand(1,20);
	$num_columns = rand(1,9);
	
	
//page
print '<h2>'.$pageName.'</h2>'.$br;	




//Start --------------------------------------------------------------------
if ($num_columns>$num_rec) $num_columns=$num_rec; //corregge 	

//calcolo valori per costruire la tabella
$valueWidth=0; 
	
$valueWidth=floor(divide(100,$num_columns));
$countRows[]='';	
$round=0;
$num_rows=1;
$num_rows = ceil(divide($num_rec,$num_columns)); 
//checks to avoid errors
	if ($num_rows<1) $num_rows=1;
	if ($valueWidth<1) $valueWidth=1;
	
	//make control index to create a new row
	for ($round;$round<($num_rec+1);$round=$round+$num_columns){
		$countRows[$round]=$round;
	}	

$tbl_open	='<table width="100%" border="1" cellspacing="0" cellpadding="0"><tbody><tr><td valign="top" align="center" width="'.$valueWidth.'%">';
$tbl_close	='</td></tr></tbody></table>';
$tbl_newrow	='</td></tr><tr><td>';
$tbl_newclmn='</td><td valign="top" align="center" width="'.$valueWidth.'%">';

print 'number of records <b>'.$num_rec.'</b><br>';
print 'to be arranged in <b>'.$num_columns.'</b> columns<br><br>';


print $tbl_open;
$tour=1;$roundRec=1;$countRec=1;

for ($roundRec;$roundRec<($num_rec+1);$roundRec++){
	
	/* your record data ---------------------------------------------------------------- */
	
	print '<br>'.$Title.' '.$index[$roundRec];
	print $br;
	print $text;
	print $br;

	/* your record data ---------------------------------------------------------------- */
	
		//check if it should change lines
		if (@$countRows[$roundRec]==$roundRec){
			//change lines
			$tour=$tour+1;
			$countRec=1;
			if ($tour==($num_rows+1)) {
			} else print $tbl_newrow;
		} else {
			//continue with a new column
			if ($roundRec==$num_rec) {
			} else print $tbl_newclmn;
			$countRec=$countRec+1;
		}		
}//for

	//rest of the columns to add
	if (($num_rows*$num_columns)!=$num_rec){
			$resto=$num_columns-$countRec;
		$round=1;
		print $tbl_newclmn;
		for ($round;$round<($resto+1);$round++){
			print $tbl_newclmn;
		}	
	}
print $tbl_close;
//end --------------------------------------------------------------------

print 'codicicaotici@gmal.com';

?>
