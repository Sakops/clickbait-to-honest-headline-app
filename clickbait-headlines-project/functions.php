<?php

    function clickBaitReplacer(){
        if(isset($_POST["submit-btn"])){
            $clickbait = strtolower($_POST["clickbait-headline"]);

            $clickbaitWords = [
                "unbelievable",
                "weird", 
                "shocking", 
                "believe", 
                "huge",  
                "experts",
                "doctors", 
                "researchers", 
                "scientists", 
                "shocked", 
                "hate"
            ];
            $replacementWords = [
                "completely normal", 
                "ordinary", 
                "something you won't be surprised by", 
                "you won't care",
                "relatively big", 
                "so-called experts", 
                "so-called doctors",
                "so-called researchers", 
                "so-called scientists",
                "surprised", 
                "don't care about"
            ];
            $honestHeadline = str_replace($clickbaitWords, $replacementWords, $clickbait);
        }
    }