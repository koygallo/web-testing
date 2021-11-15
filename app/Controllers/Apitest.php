<?php

namespace App\Controllers;

class Apitest extends BaseController{

    public function getFortuneAPI(){
        $fortunes = array(
            "It is certain.", "It is decidedly so.", "Without a doubt",
            "Yes, definitely.", "You may rely on it.", "As I see it, yes.",
            "Most likely", "Outlook good", "Yes", "Signs point to yes",
            "Reply hazy, try again later", "Ask again later", "Better not tell you now",
            "Cannot predict now", "Concentrate and ask again", "Don't count on it",
            "My reply is no", "My sources say no", "Outlook not so good", "Very doubtful" 
        );

        $reply = array('fortune'=> $fortunes[mt_rand(1, count($fortunes))-1]);

        return $this->response->setHeader('Access-Control-Allow-Origin', '*')
        ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
        ->setHeader('Access-Control-Allow-Content', 'Content-Type, Content-Length, Accept-Encoding')
        ->setJSON($reply);
    } 

}//end of class