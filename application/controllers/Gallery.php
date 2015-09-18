<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Controller for the gallery page
class Gallery extends Application {

	/**
	 * Index Page for this controller
	 */
	public function index()
	{
                //get all the images from our model
                $pix = $this->images->all();
                
                //build an array of formatted cells for them
                foreach($pix as $picture)
                    $cells[]=$this->parser->parse('_cell', (array) $picture, true);
                
                //prime the table class
                $this->load->library('table');
                $params = array(
                    'table_open' => '<table class="gallery">',
                    'cell_start' => '<td class="oneimage">',
                    'cell_alt_start' => '<td class="oneimage">'
                );
                
                $this->table->set_template($params);
                
                //generate the table
                $rows = $this->table->make_columns($cells, 3);
                $this->data['thetable']=$this->table->generate($rows);
                
		$this->data['pagebody'] = 'gallery';
                $this->render();
	}
}

