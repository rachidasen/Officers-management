 <?php
	// Here we load the header
	//  the content, and the footer
    $this->load->view('header.php');
	// We need to load the content file

	$this->load->view($page);  // This is the name we sent in $data['main_content']
	
	// Now we load the footer
	$this->load->view('footer.php');
?>
