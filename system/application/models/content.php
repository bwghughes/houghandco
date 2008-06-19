<?php   

class Content extends Model {

    function Content()
    {
        parent::Model();
        //$this->output->enable_profiler(TRUE); 
    }
    
    
    // This gets content depending on context of link.
    // For example a link of professional-services/building-surveys 
    // would search for the content with that url in the database.
    // Its horribly brittle, but its what we gotta do in 4 days.
    function get_content_for_url()
    {
        //get the URI Segements
        $segs = $this->uri->segment_array();
        $size = $this->uri->total_segments();
        $content = "";
        $item_link = "";
        
        
        log_message( 'debug' , "Querying database for content...");
        log_message( 'debug' , "Got Segment :".$this->uri->segment(1));
        
        foreach($this->uri->segment_array() as $segment)
        {
                
        }
        
        
        // If we're at the top of the tree, we we will 
        // only have one URL segment to deal with.
        log_message( 'debug' , "Checking ".$size." segments...");
        if($size == 0){
          $item_link = "/";
        }else{
          //Otherwise we need to look at them and add a /....
          foreach($segs as $seg)
            if($item_link == "")
            {
                $item_link = $seg;
            }else{
                $item_link = $item_link."/".$seg;
            }
        }
            // HACK: Remove first slash - need to do a cleaner method than this...
            //$item_link = substr($item_link, 1);
            log_message( 'debug' , $item_link);
        
        
        log_message( 'debug' , "Looking in the db for content with URL ".$item_link);
        //query for data
        $query = $this->db->get_where('content', array('url' => $item_link));
        
        // log our results
        log_message( 'debug' , $this->db->last_query() );
        log_message( 'debug' , "Got ".strval($query->num_rows())." results..." );

        
        return $query->row();
        

    }
    
    // This gets content depending on context of link.
    function get_all_content()
    {
        log_message( 'debug' , "Querying database for content...");
        
        //query for data
        $query = $this->db->get('content');
        
        foreach ($query->result() as $row)
        {
            log_message( 'debug', $row->url ) ;
        }
        
        // log our results
        log_message( 'debug' , $this->db->last_query() );
        log_message( 'debug' , "Got ".strval($query->num_rows())." results..." );

        return $query->result_array();
        

    }
    
    // This gets content depending on context of link.
    function get_content_by_id($id)
    {
        log_message( 'debug' , "Querying database for content...");
        
        //query for data
        $query = $this->db->get_where('content', array('id' => $id));
        
        foreach ($query->result() as $row)
        {
            log_message( 'debug', $row->content ) ;
        }
        
        // log our results
        log_message( 'debug' , $this->db->last_query() );
        log_message( 'debug' , "Got ".strval($query->num_rows())." results..." );

        return $query->row_array();
        

    }
    
    
    
    
}

?>
