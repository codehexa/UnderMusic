<?php

class Configure
{
    var $pageLimit;
    var $storagePath;
    var $coverFilePath;
    var $albumFilePath;
    var $musicFilePath;
    function __construct(){
        $this->pageLimit = 10;
    }

    /**
     * @return int
     */
    public function getPageLimit()
    {
        return $this->pageLimit;
    }

    /**
     * @param int $pageLimit
     */
    public function setPageLimit($pageLimit)
    {
        $this->pageLimit = $pageLimit;
    }

    /**
     * @return mixed
     */
    public function getStoragePath()
    {
        return $this->storagePath;
    }

    /**
     * @param mixed $storagePath
     */
    public function setStoragePath($storagePath)
    {
        $this->storagePath = $storagePath;
    }

    /**
     * @return mixed
     */
    public function getCoverFilePath()
    {
        return $this->coverFilePath;
    }

    /**
     * @param mixed $coverFilePath
     */
    public function setCoverFilePath($coverFilePath)
    {
        $this->coverFilePath = $coverFilePath;
    }

    /**
     * @return mixed
     */
    public function getAlbumFilePath()
    {
        return $this->albumFilePath;
    }

    /**
     * @param mixed $albumFilePath
     */
    public function setAlbumFilePath($albumFilePath)
    {
        $this->albumFilePath = $albumFilePath;
    }

    /**
     * @return mixed
     */
    public function getMusicFilePath()
    {
        return $this->musicFilePath;
    }

    /**
     * @param mixed $musicFilePath
     */
    public function setMusicFilePath($musicFilePath)
    {
        $this->musicFilePath = $musicFilePath;
    }


}