<?php

class VideoDetailsFormProvider
{
    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function createUploadForm()
    {
        $fileInput = $this->createFileInput();
        $titleInput = $this->createTitleInput();
        $descriptionInput = $this->createDescriptionInput();
        $privacyInput = $this->createPrivacyInput();
        $categoriesInput = $this->createCategoriesInput();
        $uploadButton = $this->createUploadButton();

        return "<form action='processing.php' method='POST'>
                    $fileInput
                    $titleInput
                    $descriptionInput
                    $privacyInput
                    $categoriesInput
                    $uploadButton
                </form>";
    }

    private function createFileInput()
    {
        return "<div class='form-group'>
                    <label for='FileInput'>Your file</label>
                    <input type='file' name='fileInput' class='form-control-file' id='fileInput' required>
                </div>";
    }

    private function createTitleInput()
    {
        return "<div class='form-group'>
                    <input type='text' name='titleInput' class='form-control' placeholder='Title' >
                </div>";
    }

    private function createDescriptionInput()
    {
        return "<div class='form-group'>
                    <textarea class='form-control' name='descriptionInput' rows='3' placeholder='Description' ></textarea>
                </div>";
    }

    private function createPrivacyInput()
    {
        return "<div class='form-group'>
                    <select name='privacyInput' class='form-control'>
                        <option value='0'>public</option>
                        <option value='1'>private</option>
                    </select>
                </div>";
    }

    private function createCategoriesInput()
    {
        $query = $this->con->prepare("SELECT * FROM categories");
        $query->execute();

        $html = "<div class='form-group'>
                    <select name='categoryInput' class='form-control'>";

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $id = $row["id"];
            $name = $row["name"];
            $html .= " <option value='$id'>$name</option>";
        }

        $html .= "</select></div>";

        return $html;
    }

    private function createUploadButton(){
        return "<button type='submit' class='btn btn-primary' name='uploadButton'>Upload</button>";
    }
}

?>