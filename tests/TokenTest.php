<?php

namespace App\Tests;

use App\Entity\Token;

use PHPUnit\Framework\TestCase;

class TokenTest extends TestCase
{
    /** @test */
    public function token_builded_from_json(): void
    {
        $this->assertTrue(true);

        $jsonInput = "{status:0,body:{'
                .'userid:25727972,'
                .'access_token:d566fefcaee53846e442288da02a41bfb8c6f79a,'
                .'refresh_token:45527ccc3a4b06aee143a3c716270fc2b44199e5,'
                .'scope:user.metrics,'
                .'expires_in:10800,'
                .'token_type:Bearer}}";

        $token = new Token();
        
        $token->buildTokenFromJson($jsonInput);
        echo $jsonInput;

        $this->assertEquals('25727972', $token->getUserID());
    }
}
