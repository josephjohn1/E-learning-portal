<?php 

$link=mysqli_connect("localhost","root","","samyuktha");
if($link===false)
		{
			echo "Sorry Connection Lost";

		}
else
		{				
		
						$sql="SELECT COUNT(id) as id FROM logo_management";
						$res=mysqli_query($link,$sql);
						$row=mysqli_fetch_array(($res));
						echo $id=$row['id'];
						if($id>0)
						{
							echo '<script type="text/javascript">'; 
							echo 'alert("Delete existing logo first.");';
							echo 'window.history.back();';
							echo '</script>';
						}
						
						else
					{
						$year=$_POST['year'];
						$uploaddir='C:/wamp64/www/SAMYUKTHA_2k19/ADMIN_MODULE/Logo_Management/uploads/';
						$upload=$uploaddir.basename($_FILES['image']['name']);
						$photo_name=$_FILES['image']['name'];
						move_uploaded_file($_FILES['image']['tmp_name'],$upload);			
					
						$upload1='http://localhost/SAMYUKTHA_2k19/ADMIN_MODULE/Logo_Management/uploads/'.$_FILES['image']['name'];
						$query = "insert into logo_management (year,photo_name,path) VALUES ('$year','$photo_name','$upload1')";
						
			
						if(mysqli_query($link, $query))
						{
							echo '<script type="text/javascript">'; 
							echo 'alert("Logo uploaded successfully.");';
							echo 'window.history.back();';
							echo '</script>';
											
						} 	
					}	
						
		}
					

?>
