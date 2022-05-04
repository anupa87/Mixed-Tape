<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SongController extends AbstractController {

    #[Route('/api/songs/{id<\d+>}',methods:['GET'],name:'api_songs_get_one')]
    public function getSong(int $id,LoggerInterface $logger): Response 
    {
        // dd($id);

        $song = [
            'id'=>$id,
            'name'=>'Waterfalls',
            'url'=> 'https://file-examples.com/storage/fed7f5feae62719de971a0c/2017/11/file_example_MP3_700KB.mp3',
        ];
        $logger-> info ('Return API response for song {song}', [
            'song'=>$id,
        ]);
        // return new JsonResponse($song);
        return $this ->json($song);
    }
}