# CodeigniterThemeLayout

# Copy all the files in Application folder to your codeigniter application folder.

@ config/autoload.php add this libraries
# $autoload['libraries'] = array("template");

@ libraries folder add the file Template.php
# libraries/Template.php

# Develop your theme or layout master file 
@ view/layout/template.php 


# In controller how the template will be called 
		// page title
		$this->template->write('title', 'Welcome to Codeigniter Template Library');
    
    // content is the layout {content} region and the "home" is the view that will be loaded into the master layout {conten} area.
		$this->template->write_view('content', 'home', $data);
    $this->template->render();
    
for further information contact with me at kernelroni@gmail.com    



