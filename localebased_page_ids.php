<?php
	function getLocalePageID($page){
		
		$id; 

		if(get_locale() == "es_MX" && function_exists('pll_get_post')){
			
			if($page == "rooms"){
				$id = pll_get_post(get_page_by_title( 'Rooms' )->ID, 'es_MX');	
			} elseif ($page == "amenities") {
				$id = pll_get_post(get_page_by_title( 'Amenities' )->ID, 'es_MX');	
			} elseif ($page == "transportation") {
				$id = pll_get_post(get_page_by_title( 'Transportation' )->ID, 'es_MX');	
			} elseif ($page == "activities") {
				$id = pll_get_post(get_page_by_title( 'Activities' )->ID, 'es_MX');	
			} elseif ($page == "dining") {
				$id = pll_get_post(get_page_by_title( 'Dining' )->ID, 'es_MX');	
			} elseif ($page == "spa") {
				$id = pll_get_post(get_page_by_title( 'Spa' )->ID, 'es_MX');	
			} elseif ($page == "weddings") {
				$id = pll_get_post(get_page_by_title( 'Weddings & Events' )->ID, 'es_MX');	
			} elseif ($page == "events") {
				$id = pll_get_post(get_page_by_title( 'Events' )->ID, 'es_MX');	
			} elseif ($page == "gallery") {
				$id = pll_get_post(get_page_by_title( 'Gallery' )->ID, 'es_MX');	
			} elseif ($page == "contact") {
				$id = pll_get_post(get_page_by_title( 'Contact' )->ID, 'es_MX');	
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
