<?php
namespace Danny\Frontenduploader\Controller;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Core\Resource\StorageRepository;
use Danny\Frontenduploader\Domain\Model\FileReference;

/**
 * Created by PhpStorm.
 * User: danny
 * Date: 13.05.2019
 * Time: 21:25
 */

class UploaderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    protected $entryRepository;

    /**
     * @param \Danny\Frontenduploader\Domain\Repository\EntryRepository $entryRepository
     */
    public function injectEntryRepository(\Danny\Frontenduploader\Domain\Repository\EntryRepository $entryRepository)
    {
        $this->entryRepository = $entryRepository;
    }

    public function addAction()
    {

    }

    /**
     * @param \Danny\Frontenduploader\Domain\Model\Entry $entry
     */
    public function storeAction(\Danny\Frontenduploader\Domain\Model\Entry $entry)
    {
        $arguments = $this->request->getArguments();

        if ($arguments['image1']['name'])
        {
            $this->registerFileAndReference($arguments['image1'], $entry, null, 'image1', 'entry');
        }

        $this->entryRepository->add($entry);

        DebuggerUtility::var_dump($arguments);

        $this->view->assign('entry', $entry);
    }


    protected function registerFileAndReference($uploadedFile, $modelObject, $uid = null, $propertyName = 'image1')
    {

        /**
         * @var StorageRepository $storageRepository
         */
        $storageRepository = $this->objectManager->get(StorageRepository::class);

        // uid = 1: fileadmin
        $storage = $storageRepository->findByUid('1');
        $folder = 'images';

        if ($storage->hasFolder($folder))
        {
            $targetFolder = $storage->getFolder($folder);
        }
        else
        {
            $targetFolder = $storage->createFolder($folder);
        }

        $originalFilePath = $uploadedFile['tmp_name'];
        $newFileName = $uploadedFile['name'];

        if(file_exists($originalFilePath))
        {
            $movedNewFile = $storage->addFile($originalFilePath, $targetFolder, $newFileName);
            $newFileReference = $this->objectManager->get(FileReference::class);
            $newFileReference->setFile($movedNewFile);
            // call setter-method of given propertyname ($propertyName) and register FileReference
            $method = 'set' . ucfirst($propertyName);
            $modelObject->{$method}($newFileReference);
        }
    }
}