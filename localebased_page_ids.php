<?php
	function getLocalePageID($page){
		
		$id; 

		if(get_locale() == "es_MX"){
			
			if($page == "rooms"){
				$id = get_page_by_title( 'Rooms2' )->ID;	
			} elseif ($page == "amenities") {
				$id = get_page_by_title( 'Amenities2' )->ID;	
			} elseif ($page == "transportation") {
				$id = get_page_by_title( 'Transportation2' )->ID;	
			} elseif ($page == "activities") {
				$id = get_page_by_title( 'Activities2' )->ID;	
			} elseif ($page == "dining") {
				$id = get_page_by_title( 'Dining2' )->ID;	
			} elseif ($page == "spa") {
				$id = get_page_by_title( 'Spa2' )->ID;	
			} elseif ($page == "weddings") {
				$id = get_page_by_title( 'Weddings & Events2' )->ID;	
			} elseif ($page == "events") {
				$id = get_page_by_title( 'Events2' )->ID;	
			} elseif ($page == "gallery") {
				$id = get_page_by_title( 'Gallery2' )->ID;	
			} elseif ($page == "contact") {
				$id = get_page_by_title( 'Contact2' )->ID;	
			} else {
				echo "improper page parameter in getLocalePageID()";
			}	

		} else {
			
			if($page == "rooms"){
				$id = get_page_by_title( 'Rooms' )->ID;	
			} elseif ($page == "amenities") {
				$id = get_page_by_title( 'Amenities' )->ID;	
			} elseif ($page == "transportation") {
				$id = get_page_by_title( 'Transportation' )->ID;	
			} elseif ($page == "activities") {
				$id = get_page_by_title( 'Activities' )->ID;	
			} elseif ($page == "dining") {
				$id = get_page_by_title( 'Dining' )->ID;	
			} elseif ($page == "spa") {
				$id = get_page_by_title( 'Spa' )->ID;	
			} elseif ($page == "weddings") {
				$id = get_page_by_title( 'Weddings & Events' )->ID;	
			} elseif ($page == "events") {
				$id = get_page_by_title( 'Events' )->ID;	
			} elseif ($page == "gallery") {
				$id = get_page_by_title( 'Gallery' )->ID;	
			} elseif ($page == "contact") {
				$id = get_page_by_title( 'Contact' )->ID;	
			} else {
				echo "improper page parameter in getLocalePageID()";
			}
			
		}	

		return $id;

	}
	
?>
