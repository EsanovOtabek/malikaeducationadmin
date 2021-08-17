<?php 

/**
 * Bazadan id orqali o'chiradi
 */ 

class Delet
{
	public function __construct($name,$id)
	{
		require_once 'config.php';
		$sql="DELETE FROM ". $name." WHERE id=".$id;
		$res=mysqli_query($db,$sql);
		return $res;
	}
}

/**
 * Bazadan id orqali topadi
 */

class Find
{
	public function id($tname,$id)
	{
		require_once 'config.php';
		$sql="SELECT * FROM ".$tname." WHERE id=".$id;
		$res=mysqli_query($db,$sql);
		if($res){
			return mysqli_fetch_assoc($res);
		}
		return null;
	}
}


/**
 * Ma'lumotlarni qo'shadi
 */
class Insert
{
	public $db;

	public function __construct()
	{
		require_once 'config.php';
		$this->db=$db;
	}

	public function news($data,$file=null){

		foreach ($data as $key => $value) {
			$$key=mysqli_real_escape_string($this->db,trim($value));
		}

		if($file['size']<4000000&&$file['error']==0){
			
			$fname=$file['name'];
			$rnd=time();
			$rasm=md5($rnd).$fname;// bazaga shu nom saqlaymiz
			$filename="images/".$rasm;//fayl tushadigan joyga 
			$tmp_name=$file['tmp_name'];

			move_uploaded_file($tmp_name, $filename);

		}

		$sql="INSERT INTO news(name,title,text,rasm,tur,isslide,ilova) VALUES ('$name','$title','$content','$rasm','$tur',$slider,'$btn_link')";
		$res=mysqli_query($this->db,$sql);
		return $res;
	}

	public function galereya($data,$file=null){

		foreach ($data as $key => $value) {
			$$key=mysqli_real_escape_string($this->db,trim($value));
		}

		if($file['size']<4000000&&$file['error']==0){
			
			$fname=$file['name'];
			$rnd=time();
			$rasm=md5($rnd).$fname;// bazaga shu nom saqlaymiz
			$filename="fayl/".$rasm;//fayl tushadigan joyga 
			$tmp_name=$file['tmp_name'];

			move_uploaded_file($tmp_name, $filename);

		}

		$sql="INSERT INTO galereya(name,rasm) VALUES ('$name','$rasm')";
		$res=mysqli_query($this->db,$sql);
		return $res;

	}
}

/**
 * Ma'lumotlarni qo'shadi
 */
class Edit
{
	public $db;

	public function __construct()
	{
		require_once 'config.php';
		$this->db=$db;
	}

	public function news($data,$file=null){

		foreach ($data as $key => $value) {
			$$key=mysqli_real_escape_string($this->db,trim($value));
		}

		if($file['size']<4000000&&$file['error']==0){
			
			$fname=$file['name'];
			$rnd=time();
			$rasm=md5($rnd).$fname;// bazaga shu nom saqlaymiz
			$filename="images/".$rasm;//fayl tushadigan joyga 
			$tmp_name=$file['tmp_name'];

			move_uploaded_file($tmp_name, $filename);
			$sql="UPDATE  news SET name='$name',title='$title',text='$content',rasm='$rasm',tur='$tur',isslide=$slider,ilova='$btn_link' WHERE id=$edit_id";
		}else{
			$sql="UPDATE  news SET name='$name',title='$title',text='$content',tur='$tur',isslide=$slider,ilova='$btn_link' WHERE id=$edit_id";
		}
		$res=mysqli_query($this->db,$sql);
		return $res;
	}

	public function galereya($data,$file=null){

		foreach ($data as $key => $value) {
			$$key=mysqli_real_escape_string($this->db,trim($value));
		}

		if($file['size']<4000000&&$file['error']==0){
			
			$fname=$file['name'];
			$rnd=time();
			$rasm=md5($rnd).$fname;// bazaga shu nom saqlaymiz
			$filename="fayl/".$rasm;//fayl tushadigan joyga 
			$tmp_name=$file['tmp_name'];

			move_uploaded_file($tmp_name, $filename);
			$sql="UPDATE  galereya SET name='$name',rasm='$rasm' WHERE id=$edit_id";
		}else{
			$sql="UPDATE  galereya SET name='$name' WHERE id=$edit_id";
		}
		$res=mysqli_query($this->db,$sql);
		return $res;
	}
}
