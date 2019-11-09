<?php

#Author: Ashu Singh (jrN00b)
#Company: AKESTECH INFOTECH PVT LTD

$array_one = ["‘",   "’",   "“",   "”",   "(",    ")",   "{",    "}",   "=", "।",  "?",  "-",  "µ", "॰", ",", ".", "् ", 
		"०",  "१",  "२",  "३",     "४",   "५",  "६",   "७",   "८",   "९", "x", 

		"फ़्",  "क़",  "ख़",  "ग़", "ज़्", "ज़",  "ड़",  "ढ़",   "फ़",  "य़",  "ऱ",  "ऩ",  
		"त्त्",   "त्त",     "क्त",  "दृ",  "कृ",

		"ह्न",  "ह्य",  "हृ",  "ह्म",  "ह्र",  "ह्",   "द्द",  "क्ष्", "क्ष", "त्र्", "त्र","ज्ञ",
		"छ्य",  "ट्य",  "ठ्य",  "ड्य",  "ढ्य", "द्य","द्व",
		"श्र",  "ट्र",    "ड्र",    "ढ्र",    "छ्र",   "क्र",  "फ्र",  "द्र",   "प्र",   "ग्र", "रु",  "रू",
		"्र",

		"ओ",  "औ",  "आ",   "अ",   "ई",   "इ",  "उ",   "ऊ",  "ऐ",  "ए", "ऋ",

		"क्",  "क",  "क्क",  "ख्",   "ख",    "ग्",   "ग",  "घ्",  "घ",    "ङ",
		"चै",   "च्",   "च",   "छ",  "ज्", "ज",   "झ्",  "झ",   "ञ",

		"ट्ट",   "ट्ठ",   "ट",   "ठ",   "ड्ड",   "ड्ढ",  "ड",   "ढ",  "ण्", "ण",  
		"त्",  "त",  "थ्", "थ",  "द्ध",  "द", "ध्", "ध",  "न्",  "न",  

		"प्",  "प",  "फ्", "फ",  "ब्",  "ब", "भ्",  "भ",  "म्",  "म",
		"य्",  "य",  "र",  "ल्", "ल",  "ळ",  "व्",  "व", 
		"श्", "श",  "ष्", "ष",  "स्",   "स",   "ह",     

		"ऑ",   "ॉ",  "ो",   "ौ",   "ा",   "ी",   "ु",   "ू",   "ृ",   "े",   "ै",
		"ं",   "ँ",   "ः",   "ॅ",    "ऽ",  "् ", "्" ];


$array_two = ["^", "*",  "Þ", "ß", "¼", "½", "¿", "À", "¾", "A", "\\", "&", "&", "Œ", "]","-","~ ", 
		"å",  "ƒ",  "„",   "…",   "†",   "‡",   "ˆ",   "‰",   "Š",   "‹","Û",

		"¶",   "d",    "[k",  "x",  "T",  "t",   "M+", "<+", "Q",  ";",    "j",   "u",
		"Ù",   "Ùk",   "Dr",    "–",   "—",       

		"à",   "á",    "â",   "ã",   "ºz",  "º",   "í", "{", "{k",  "«", "=","K", 
		"Nî",   "Vî",    "Bî",   "Mî",   "<î", "|","}",
		"J",   "Vª",   "Mª",  "<ªª",  "Nª",   "Ø",  "Ý",   "æ", "ç", "xz", "#", ":",
		"z",

		"vks",  "vkS",  "vk",    "v",   "bZ",  "b",  "m",  "Å",  ",s",  ",",   "_",

		"D",  "d",    "ô",     "[",     "[k",    "X",   "x",  "?",    "?k",   "³", 
		"pkS",  "P",    "p",  "N",   "T",    "t",   "÷",  ">",   "¥",

		"ê",      "ë",      "V",  "B",   "ì",       "ï",     "M",  "<",  ".", ".k",   
		"R",  "r",   "F", "Fk",  ")",    "n", "/",  "/k",  "U", "u",   

		"I",  "i",   "¶", "Q",   "C",  "c",  "H",  "Hk", "E",   "e",
		"¸",   ";",    "j",  "Y",   "y",  "G",  "O",  "o",
		"'", "'k",  "\"", "\"k", "L",   "l",   "g",      

		"v‚",    "‚",    "ks",   "kS",   "k",     "h",    "q",   "w",   "`",    "s",    "S",
		"a",    "¡",    "%",     "W",   "·",   "~ ", "~"];


	function UnicodeToKrutiDev($unicode_substring) {
		$array_one_length = count($GLOBALS['array_one']);
		$modified_substring = $unicode_substring;

		$position_of_quote = strpos($modified_substring,"'");
		if(empty($position_of_quote))
			$position_of_quote = -1;

		
		while ($position_of_quote >= 0){ 
			$modified_substring =  ReplaceFirstOccurrence($modified_substring,"'","^");
			$modified_substring =  ReplaceFirstOccurrence($modified_substring,"'","*");
			$position_of_quote  =  strpos($modified_substring,"'");
			if(empty($position_of_quote))
				$position_of_quote = -1;
		}

		$position_of_Dquote = strpos($modified_substring,"\"");
		if(empty($position_of_Dquote))
			$position_of_Dquote = -1;

		while ($position_of_Dquote >= 0){ 
			$modified_substring =  ReplaceFirstOccurrence($modified_substring,"\"","ß");
			$modified_substring =  ReplaceFirstOccurrence($modified_substring,"\"","Þ");
			$position_of_Dquote = strpos($modified_substring,"\"");
			if(empty($position_of_Dquote))
				$position_of_Dquote = -1;
		}

		// first Replace the two-byte nukta_varNa with corresponding one-byte nukta varNas.

		$modified_substring = str_replace("क़", "क़", $modified_substring); 
		$modified_substring = str_replace("ख़", "ख़", $modified_substring);
		$modified_substring = str_replace("ग़", "ग़", $modified_substring);
		$modified_substring = str_replace("ज़", "ज़", $modified_substring);
		$modified_substring = str_replace("ड़", "ड़", $modified_substring);
		$modified_substring = str_replace("ढ़", "ढ़", $modified_substring);
		$modified_substring = str_replace("ऩ", "ऩ", $modified_substring);
		$modified_substring = str_replace("फ़", "फ़", $modified_substring);
		$modified_substring = str_replace("य़", "य़", $modified_substring);
		$modified_substring = str_replace("ऱ", "ऱ", $modified_substring);

		// code for replacing "ि" (chhotee ee kii maatraa) with "f"  and correcting its position too.

		$position_of_f = strpos($modified_substring, "ि" );

		if(empty($position_of_f))
			$position_of_f = -1;

		while ( $position_of_f != -1 )  //while-02
		{
			$character_left_to_f = $modified_substring[$position_of_f - 1];
			$modified_substring = str_replace( $character_left_to_f."ि" ,  "f".$character_left_to_f, $modified_substring)  ;

			$position_of_f = $position_of_f - 1;

			while (( $position_of_f != 0  ) && ( $modified_substring[$position_of_f - 1] == '्' ) )
			{
				$string_to_be_Replaced = $modified_substring[$position_of_f - 2 ]."्"  ;
				$modified_substring = str_replace( $string_to_be_Replaced."f", "f".$string_to_be_Replaced, $modified_substring);

				$position_of_f = $position_of_f - 2  ;
			}
			$position_of_f = strpos($modified_substring, "ि", $position_of_f + 1 ) ; // search for f ahead of the current position.
			if(empty($position_of_f))
				$position_of_f = -1;

		} // end of while-02 loop

		//************************************************************     
		//     modified_substring = modified_substring.Replace( /fर्", "£"  )  ;
		//************************************************************     
		// Eliminating "र्" and putting  Z  at proper position for this.

		$set_of_matras = "ािीुूृेैोौं:ँॅ";
		$modified_substring .= "  ";  // add two spaces after the string to avoid UNDEFINED char in the following code.

		$position_of_half_R = strpos($modified_substring, "र्" );
		
		if(empty($position_of_half_R))
			$position_of_half_R = -1;

		while ( $position_of_half_R > 0  )  // while-04
		{
			// "र्"  is two bytes long
			$probable_position_of_Z = $position_of_half_R + 6   ;  

			$character_right_to_probable_position_of_Z = substr($modified_substring, $probable_position_of_Z + 3,3);

			// trying to find non-maatra position right to probable_position_of_Z .

			while ( !empty(strpos($set_of_matras, $character_right_to_probable_position_of_Z )) )  
			{
				$probable_position_of_Z = $probable_position_of_Z + 3 ;
				$character_right_to_probable_position_of_Z = $modified_substring[$probable_position_of_Z + 3];
			} // end of while-05


			$string_to_be_Replaced = substr($modified_substring, ($position_of_half_R + 6) , ( $probable_position_of_Z - $position_of_half_R - 3 ))  ;
			
			$modified_substring = str_replace( "र्".$string_to_be_Replaced  ,  $string_to_be_Replaced."Z", $modified_substring) ;
			$position_of_half_R = strpos($modified_substring, "र्" ) ;

			if(empty($position_of_half_R))
				$position_of_half_R = -1;

		} // end of while-04

		$modified_substring = substr($modified_substring, 0 , strlen($modified_substring) - 2 );

		//substitute array_two elements in place of corresponding array_one elements

		for( $input_symbol_idx = 0; $input_symbol_idx < $array_one_length; $input_symbol_idx++ ) {
			$idx = 0  ;  // index of the symbol being searched for Replacement

			while ($idx != -1 ) //whie-00
			{
				$modified_substring = str_replace($GLOBALS['array_one'][$input_symbol_idx], $GLOBALS['array_two'][$input_symbol_idx],$modified_substring);
				$idx = strpos($modified_substring, $GLOBALS['array_one'][$input_symbol_idx]);
				if(empty($idx))
					$idx = -1;
			} // end of while-00 loop
		} // end of for loop


		return $modified_substring;
	}




function ReplaceFirstOccurrence($Source,$Find,$Replace) {
		$Place = strpos($Source,$Find);
		if(empty($Place)){
			$Place = -1;
		}

		$result = substr($Source, $Place, strlen($Find));
		$result = substr_replace($Source, $Replace, $Place, 0);
		return $result;
}

//call example
// echo " ज".strlen("ज");
// echo " ब".strlen("ब");
// echo " र्".strlen("र्");
// echo " द".strlen("द");
// echo " स्".strlen("स्");
//echo " त".strlen("त");
//echo strlen("जबर्दस्त");
//UnicodeToKrutiDev("एक समय की बात है, करंटपुरा नामक कस्बे में दो दोस्त रहा करते थे।");

?>