<?php
/*
	This code is released under the MIT License.
	http://opensource.org/licenses/MIT

	Copyright (c) 2025 Marc Robledo, https://www.marcrobledo.com

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in
	all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	THE SOFTWARE.
*/

/* set your sender according to your domain */
$FROM="no-reply@yourdomain.com";
/* optional: set a BCC recipient */
$SEND_COPY_TO=false;
//$SEND_COPY_TO="your.name@yourdomain.com";
/* optional: email text */
$EMAIL_TEXT=false;
//$EMAIL_TEXT="Here are your screenshots";


$success=false;
$errors=array();


if (!preg_match("/Nintendo WiiU/", $_SERVER["HTTP_USER_AGENT"] ?? "")) {
	$errors[]="Invalid User-Agent";

}else if ($_SERVER["REQUEST_METHOD"] !== "POST") {
	$errors[]="Invalid request";

}else if (!($to = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL))) {
	$errors[]="Invalid email address.";

}else{
	$filesToUpload=array();
	foreach(["screenshot0", "screenshot1"] as $fileId){
		if(!isset($_FILES[$fileId])){
			continue;
		}

		$file=$_FILES[$fileId];
		if($file["error"]===UPLOAD_ERR_NO_FILE || !$file["size"] || !$file["tmp_name"]){
			continue;
		}else if($file["error"]!==UPLOAD_ERR_OK){
			$errors[]=$fileId.": error uploading (".$file["error"].")";
		}else if($file["type"]!=="image/jpeg"){
			$errors[]=$fileId.": invalid format (".$file["type"].")";
		}else if(!in_array((getimagesize($file["tmp_name"]))[1], [240, 480, 720, 1080])){
			$errors[]=$fileId.": invalid image height (".(getimagesize($file["tmp_name"]))[1].")";
		}else if($file["size"] > 1572864){
			$errors[]=$fileId.": image is too big";
		}else{
			$filesToUpload[]=$file;
		}
	}

	if(empty($filesToUpload)){
		$errors[]="No valid files to upload.";
	}

	if(empty($errors)){
		$boundary = "boundary_value";

		$subject = $_POST["subject"]?? "Wii U screenshots";

		$headers = "From: {$FROM}\r\n";
		if($SEND_COPY_TO){
			$headers .= "Bcc: {$SEND_COPY_TO}\r\n";
		}
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

		if($EMAIL_TEXT){
			$msg = "--$boundary\r\n";
			$msg .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
			$msg .= $EMAIL_TEXT."\r\n\r\n";
		}else{
			$msg = "";
		}

		$fileNameSuffix = date("YmdHi");
		foreach($filesToUpload as $file){
			$fileContent = file_get_contents($file["tmp_name"]);
			$fileName = basename($file["name"]);
			$matches;
			if(preg_match("/WiiU_screenshot_(TV|GamePad)_([0-9A-F]{5}).jpg/", $fileName, $matches)){
				include("game_ids.inc.php");
				$gameId=$matches[2];
				if(isset(GAME_IDS[$gameId])){
					$fileName=str_replace($matches[2], GAME_IDS[$gameId]."_".$fileNameSuffix, $fileName);
				}else{
					$fileName=str_replace($matches[2], $matches[2]."_".$fileNameSuffix, $fileName);
				}
			}
			$msg .= "--$boundary\r\n";
			$msg .= "Content-Type: {$file['type']}; name=\"$fileName\"\r\n";
			$msg .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n";
			$msg .= "Content-Transfer-Encoding: base64\r\n\r\n";
			$msg .= chunk_split(base64_encode($fileContent));
		}

		$msg .= "--$boundary--\r\n";

		//$success=true;
		$success=mail($to, $subject, $msg, $headers);
		if(!$success){
			$errors[]="Failed while sending email";
			$errors[]=$to;
			$errors[]=$subject;
		}
	}

}

header("Content-type: application/json");
echo json_encode(array(
	"success" => $success,
	"errors" => $errors
));
exit;

?>