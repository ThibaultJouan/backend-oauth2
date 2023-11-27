<?php

namespace App\Controller;

use App\Entity\Token;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TokenController extends AbstractController
{
    #[Route('/token', name: 'redirect_get_token', methods: ['GET'])]
    public function redirectGetToken(Request $request): Response
    {
        $code = $request->query->get('code');

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $_ENV["API_URL"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([ 
            'action' => 'requesttoken',
            'grant_type' => 'authorization_code',
            'client_id' => $_ENV["CLIENT_ID"],
            'client_secret' => $_ENV["CLIENT_SECRET"],
            'code' => $code,
            'redirect_uri' => $_ENV["REDIRECT_CODE_URL"],
            'mode' => 'demo'
        ]));

        $rsp = curl_exec($ch);
        curl_close($ch);
       
        $token = new Token();
        $token->buildTokenFromJson($rsp);
        
        $response =$this->forward('App\Controller\MesureController::getMesures', [
            'token' => $token
        ]);

        return $this->json($response);
    }
}
