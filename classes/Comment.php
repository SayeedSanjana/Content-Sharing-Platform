<?php 
class Comment{
	private $con;

	public function __construct($con){
        
        $this->con = $con;


	}

	public function add_comments($post_id,$email,$body,$name){

		if(!empty($body)){
			$query=mysqli_query($this->con, "INSERT INTO comments(post_id,comment_id,comment_status,comment_content,comment_name,comment_email) VALUES($post_id,'','Approved','$body','$name','$email');");
		}
		if(!$query){
			die("Failed".mysqli_error($this->con));
		}



		else{
			return False;
		}

	}
}




?>