<?php

require_once("includes/header.php");
require_once("includes/classes/VideoUploadData.php");
require_once("includes/classes/VideoProcessor.php");

class VideoProcessor
{
    private $con;

    private $sizeLimit = 500000000;

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
//        echo $tempFilePath;
    }

    private function processData($videoData, $filePath)
    {
        $videoType = pathinfo($filePath, PATHINFO_EXTENSION);
        if (! $this->isValidSize($videoData)) {
            echo "File Too Large. Can't more be than" . $this->sizeLimit."bytes.";

            return false;
        }
        echo $videoType;
    }

    private function isValidSize($data)
    {
        return $data["size"] < $this->sizeLimit;
    }
}

?>