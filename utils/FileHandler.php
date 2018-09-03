<?php
require_once 'include/Constants.php';

class FileHandler
{

    private $upload_file_path = 'uploads/';

    public function __construct()
    {}

    public function moveToUserFolder($mobileNo, $file_type, $file_string)
    {
        if (strcmp($file_type, PAN) == 0 || strcmp($file_type, AADHAR)) {
            if (file_exists('uploads/' . $mobileNo . '/ids')) {
                return $this->saveFile('uploads/' . $mobileNo . '/ids', $mobileNo, $file_type, $file_string);
            } else {
                if (mkdir('uploads/' . $mobileNo . '/ids', 0777, true)) {
                    return $this->saveFile('uploads/' . $mobileNo . '/ids', $mobileNo, $file_type, $file_string);
                } else {
                    return false;
                }
            }
        } else {
            if (file_exists('uploads/' . $mobileNo)) {
                return $this->saveFile('uploads/' . $mobileNo, $mobileNo, $file_type, $file_string);
            } else {
                if (mkdir('uploads/' . $mobileNo, 0777, true)) {
                    return $this->saveFile('uploads/' . $mobileNo, $mobileNo, $file_type, $file_string);
                } else {
                    return false;
                }
            }
        }
    }

    private function saveFile($path, $mobileNo, $file_type, $file_string)
    {
        try {
            date_default_timezone_set('Asia/Kolkata');
            $timeStamp = date('d_m_Y_his_a');
            $ifp = fopen($path . '/' . $mobileNo . '_' . $file_type . $timeStamp . '.png', 'w');
            fwrite($ifp, base64_decode($file_string));
            fclose($ifp);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function uploadFile($mobileNo, $file,$fileName)
    {
        $uploadDir = $this->upload_file_path . $mobileNo . '/others/';
        if ($this->dirValidate($uploadDir)) {
            return move_uploaded_file($file, $uploadDir.$fileName);
        } else {
            return false;
        }
    }

    private function dirValidate($filePath)
    {
        if (file_exists($filePath)) {
            return true;
        } else {
            return mkdir($filePath, 0777, true);
        }
    }
}

