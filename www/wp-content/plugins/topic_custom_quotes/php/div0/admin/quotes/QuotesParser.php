<?php


class QuotesParser
{
    private $quotes;
    private $quotesCollection;

    public function __construct($quotes)
    {
        $this->quotes = $quotes;
        $this->quotesCollection = new Map('quotes');
    }

    public function parse(){
        foreach($this->quotes as &$quoteData){

            $quoteId = $quoteData['id'];
            $postTitle = $quoteData['postTitle'];
            $quoteText = $quoteData['quote'];
            $sentenceId = $quoteData['sentenceId'];
            $postId = $quoteData['postId'];

            $quote = new Quote($quoteId, $postId, $postTitle, $quoteText, $sentenceId);
            $this->quotesCollection->add($quoteId, $quote);
        }

        return $this->quotesCollection;
    }
}