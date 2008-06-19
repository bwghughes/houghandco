<?php   

class Auction extends Model {

    function Auction()
    {
        parent::Model();
        //$this->output->enable_profiler(TRUE); 
    }
    
    
    function get_all_auction_dates()
    {
       log_message( 'debug' , "Querying database for auctions...");
       $this->db->select('*')->from('auctions')->where('open', 1); 
       $query = $this->db->get();
       log_message( 'debug' , "Got ".strval($query->num_rows())." properties..." );
       return $query;
    }
    
    
    
    
}

?>
