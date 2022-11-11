<?php
class FileWriter {

    private string $path;
    private int $id;
    
public function   __Construct(string $path){

$this->path=$path;

}

public function write(string $path){

    file_put_contents($this->path,data: $path.PHP_EOL,flags:FILE_APPEND);
}


}



?>