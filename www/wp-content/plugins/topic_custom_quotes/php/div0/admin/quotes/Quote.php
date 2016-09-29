<?php

class Quote {
    private $id;
    private $parentPostId;
    private $parentPostTitle;
    private $quoteText;
    private $sentenceId;
    private $notesCollection;

    public function __construct($id, $parentPostId, $parentPostTitle, $quoteText, $sentenceId){

        $this->notesCollection = new Map('notes');
        
        $this->id = $id;
        $this->parentPostId = $parentPostId;
        $this->parentPostTitle = $parentPostTitle;
        $this->quoteText = $quoteText;
        $this->sentenceId = $sentenceId;
    }

    public function getId(){
        return $this->id;
    }

    public function getParentPostId(){
        return $this->parentPostId;
    }
    public function getText(){
        return $this->quoteText;
    }
    public function getSentenceId(){
        return $this->sentenceId;
    }
    
    public function getParentPostTitle(){
        return $this->parentPostTitle;
    }
    /*
    public function getNotes(){
        return $this->notesCollection;
    }
    */
} 