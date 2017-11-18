<?php
namespace AppBundle\EventListener;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Service\File\FileUploader;
use AppBundle\Entity\Image;

class FilesUploadListener
{
    private $uploader;

    const IMAGE_CLASS = Image::class;





    public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
    }





    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->loadFile($entity);
    }

    public function postRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->deleteFile($entity);
    }



    private function uploadFile($entity)
    {
        // upload only works for Image entities
        if ( get_class($entity) === self::IMAGE_CLASS ) {
	        $file = $entity->getFile();

	        // only upload new files
	        if ( $file instanceof UploadedFile ) {
	            
	        	$fileName = $this->uploader->uploadImage($file);

	            $entity->setFileName($fileName);
	        }
        }
    }

    private function loadFile($entity)
    {
        // load action only needed for Image entities
        if ( get_class($entity) === self::IMAGE_CLASS ) {
	        //set name property from string to full file
	        if ($fileName = $entity->getFileName()) {
	            
	            $file = new File( $this->uploader->getImagesTargetDir().'/'.$fileName );

	            $entity->setFile($file);
	            	
	        }
        }
    }

    private function deleteFile($entity)
    {
        // delete only works for Image entities
        if ( get_class($entity) === self::IMAGE_CLASS ) {
            $fileName = $entity->getFileName();

            $filePath = $this->uploader->getImagesTargetDir().'/'.$fileName;

            if ( file_exists($filePath) ) {
                // delete the file
                unlink($filePath);
            }
        }
    }
}
