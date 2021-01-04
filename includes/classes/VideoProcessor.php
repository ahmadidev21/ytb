<?php

require_once("includes/header.php");
require_once("includes/classes/VideoUploadData.php");
require_once("includes/classes/VideoProcessor.php");

class VideoProcessor
{
    private $con;

    private $sizeLimit = 500000000;

    private $allowedTypes = ["mp4", "flv", "webm", "mkv", "vob", "ogv", "ogg", "avi", "wmv", "mov", "mpeg", "mpg",];

    public function __construct($con)
    {

        $this->con = $con;
    }

    public function upload($videoUploadData)
    {
        $targetDir = "uploads/videos/";
        $videoData = $videoUploadData->videoDataArray;

        $tempFilePath = $targetDir . uniqid() . basename($videoData["name"]);

        $tempFilePath = str_replace(" ", "_", $tempFilePath);

        $isValidData = $this->processData($videoData, $tempFilePath);

        if(!$isValidData){
            return false;
        }

        if(move_uploaded_file($videoData["tmp_name"], $tempFilePath)){
            echo "file moved successfully";
        }

    }

    private function processData($videoData, $filePath)
    {
        $videoType = pathinfo($filePath, PATHINFO_EXTENSION);
        if (! $this->isValidSize($videoData)) {
            echo "File Too Large. Can't more be than" . $this->sizeLimit . "bytes.";
            return false;
        } elseif (! $this->isValidType($videoType)) {
            echo "Invalid file type";
            return false;
        }elseif($this->hasError($videoData)){
            echo "Video Error is ". $videoData["error"];
            return false;
        }

        return true;
    }

    private function isValidSize($data)
    {
        return $data["size"] < $this->sizeLimit;
    }

    private function isValidType($videoType)
    {
        $lowercaded = strtolower($videoType);

        return in_array($lowercaded, $this->allowedTypes);
    }

    private function hasError($videoData)
    {
        return $videoData["error"] != 0;
    }
}

?>