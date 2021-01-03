<?php
require_once("includes/header.php");
require_once("includes/classes/VideoUploadData.php");
require_once("includes/classes/VideoProcessor.php");


class VideoProcessor
{
    private $con;

    public function __construct($con)
    {

        $this->con = $con;
    }

    public function upload($videoUploadData)
    {
        $targetDir = "uploads/videos/";
        $videoData = $videoUploadData->videoDataArray;
        
        $tempFilePath = $targetDir. uniqid() . basename($videoData["name"]);

        $tempFilePath = str_replace(" ", "_", $tempFilePath);

        echo $tempFilePath;
    }
}
?>