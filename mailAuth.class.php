<?
class mailAuth {
	private $server = "";
	public $error ="";
	function __construct($domain = "localhost",$o = array("imap"),$i = "INBOX"){
		if (in_array("imap",$o)){
			if (in_array("ssl",$o)){
				$p = "993";
			} else {
				$p = "143";
			}	
		} else if (in_array("pop3",$o)){
                        if (in_array("ssl",$o)){
                                $p = "995";
                        } else {
                                $p = "110";
                        } 
		}
		$this->server = "{".$domain.":".$p."/" .implode("/",$o)."}".$i;
		echo $this->server;
	}
	public function auth($u,$p){
		if (imap_open($this->server,$u,$p,OP_HALFOPEN,1)){
			return true;
		} else {
			$this->error = imap_last_error();
			return false;
		}
	}
}
?>
