<?php   

class Property extends Model {

    function Property()
    {
        parent::Model();
        //$this->output->enable_profiler(TRUE); 
    }
    
    
    function get_unauctioned_property($property_offset)
    {
       log_message( 'debug' , "Querying database for properties using offset ".$property_offset."...");
       $this->db->select('*')->from('properties')->where('result', '')->or_where('result', null)->limit(1, $property_offset);
       $query = $this->db->get();
       
       log_message( 'debug' , "Got ".strval($query->num_rows())." properties by calling ".$this->db->last_query() );
       return $query;
    }
    
    function get_sold_property($property_offset)
    {
       log_message( 'debug' , "Querying database for sold properties using offset ".$property_offset."...");
       $this->db->select('*')->from('properties')->where('result !=','')->limit(1, $property_offset);
       $query = $this->db->get();

       log_message( 'debug' , "Got ".strval($query->num_rows())." properties by calling ".$this->db->last_query() );
       return $query;
    }
    
}
?>
