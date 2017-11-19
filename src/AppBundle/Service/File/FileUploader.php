<?php
namespace AppBundle\Service\File;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $imagesTargetDir;

    private $tinypngSecretKey;





    public function __construct($imagesTargetDir, $tinypngSecretKey)
    {
        $this->imagesTargetDir = $imagesTargetDir;

        $this->tinypngSecretKey = $tinypngSecretKey;
    }





    public function uploadImage(UploadedFile $file)
    {
        $targetDir = $this->getImagesTargetDir();

        //generate a new unique name to stock the file
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        //and move it to the right folder
        $file->move($targetDir, $fileName);

        //use TinyPNG API to compress the file and replace it in upload folder
        //if errors OR compression count > max quota, we just abort compress and continue without compressing the file
        try {
            \Tinify\setKey($this->tinypngSecretKey);

            $source = \Tinify\fromFile($targetDir.'/'.$fileName);
            $source->toFile($targetDir.'/'.$fileName);
        // API key and account limit
        } catch(\Tinify\AccountException $e) {
            return $fileName;
        // Source image or request options
        } catch(\Tinify\ClientException $e) {
            return $fileName;
        // Temporary issue with the Tinify API
        } catch(\Tinify\ServerException $e) {
            return $fileName;
        // Network connection error
        } catch(\Tinify\ConnectionException $e) {
            return $fileName;
        // Other errors
        } catch(Exception $e) {
            return $fileName;
        }

        return $fileName;
    }





    public function getImagesTargetDir()
    {
        return $this->imagesTargetDir;
    }
}
