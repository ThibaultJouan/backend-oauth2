<?php

namespace App\Controller;

use App\Entity\Token;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MesureController extends AbstractController
{
    #[Route('/getmesures', name: 'get_mesures')]
    public function getMesures(Token $token): JsonResponse
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $_ENV['API_URL_MESURES']);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.$token->getAccessToken()
        ]);

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([ 
            'action' => 'getmeas',
            'meastype' => 1,
            'category' => 1
        ]));

        $rsp = curl_exec($ch);

        curl_close($ch);

        return new JsonResponse($rsp);
    }
}
