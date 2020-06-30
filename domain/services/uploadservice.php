<?php

  class UploadService {
    private $targetFile = __DIR__ . "/../../images/";
    public function upload($temp, $name) {
      if (move_uploaded_file($temp, $this->targetFile . $name)) {
        var_dump("uploaded", $temp, $this->targetFile);
        return true;
      }
      var_dump("not uploaded", $temp, $this->targetFile . $name);
      return false;
    }
  }

?>
