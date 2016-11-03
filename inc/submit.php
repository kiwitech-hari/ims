<?php


//registration form
//echo "Submit data by Harry";



// ADD NEW 	 ASset in you inventory

if (isset($_POST['Asset_sub'])) {
include_once 'config.php';	

$asset_new=$_POST['asset_new'];
$asset_brand=$_POST['asset_brand'];
$asset_modal=strtoupper($_POST['asset_modal']);
$asset_sn= strtoupper($_POST['asset_sn']);
$asset_pdate=$_POST['asset_pdate'];
$asset_note= ucwords($_POST['asset_remark']);
//$asign_status="No";

 $data="Asset: $asset_new ,Serial No:$asset_sn";

if (empty($asset_new) || empty($asset_brand) || empty($asset_modal) || empty($asset_sn)) {
		$msg= '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong> Field is Blank!</strong> All Fileld is Required.
				</div>';
				echo "$msg";
		
		}else{
			$sql="INSERT INTO `it_assets`(`category`, `brand`, `model_no`, `serial_no`, `purchase_date`, `other_info`, `asign_status`) VALUES ('$asset_new','$asset_brand','$asset_modal','$asset_sn','$asset_pdate','$asset_note','$asign')";
			//echo "$sql";
			$query=mysqli_query($conn,$sql);
			if ($query) {
				$msg= '<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Success!</strong> Record Inserted!'.$data.' 
						</div>';
				echo "$msg";
				
			}else{
				$msg= '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong> Failed!</strong> Data Not Inserted. Record Details
				</div>';
				echo "$msg";
				

			}
	}	
}


if (isset($_POST['btn_sub'])) {
	include_once 'config.php';
	
	$btn_sub=$_POST['btn_sub'];
	$user_name=$_POST['user_name'];
	$user_email=$_POST['user_email'];
	$user_id=$_POST['user_id'];
	//$req_dt=$_POST['req_dt'];
	$req_dt=$today;
	$serial=$_POST['req_type'];
	$req_desc=$_POST['req_desc'];
	$priority=$_POST['priority'];
	$subject=$_POST['subject'];

	if (empty($user_name) || empty($serial) || empty($req_desc) || empty($subject)) {
		$msg= '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong> Field is Blank!</strong> All Fileld is Required.
				</div>';
				echo "$msg";
		
			}else{

				$sql="INSERT INTO `itsupport`(`date`, `name`, `email`, `userid`, `sysid`, `probs`, `status`,`priority`,`subject`)
				 VALUES ('$req_dt','$user_name','$user_email','$user_id','$serial','$req_desc','$req_status','$priority','$subject')";
				// echo "$sql";
				$query=mysqli_query($conn,$sql);
				if ($query) {
					$msg= '<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Success!</strong> Your Request has been Submitt Successfully 
						</div>';
					echo "$msg";
				}
				else{
				 $msg='<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong> Failed!</strong> Something went wrong.
				</div>';
					echo "$msg";
					}
			}

}


?>

