<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class MixedTapeController extends AbstractController {

    #[Route('/')]

    public function homepage(): Response 
    {

        $tracks = [
            ['song'=>'Gangsta\'s Paradise', 'artist'=>'Coolio'],
            ['song'=>'Waterfalls', 'artist'=> 'TLC'],
            ['song'=>'Creep ', 'artist'=> 'Radiohead'],
            ['song'=>'Kiss from a Rose', 'artist'=> 'Seal'],
            ['song'=>'On Bended Knee', 'artist'=>' Boyz II Men'],
            ['song'=>'Fantasy', 'artist'=> 'Mariah Carey'],
           
        ];

        // //dd($tracks);
        // dump($tracks);

        return $this->render ('mixed/homepage.html.twig',[
            'title' =>'Mixed 90s music',
            'tracks'=> $tracks,
        ]);

        // return new Response("Pink Floyd --- Another Brick In the wall");
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug=null): Response 
    {
        $genre = $slug ? u(str_replace('-','',$slug))->title(true):null;
        return $this->render('mixed/browse.html.twig',[
            'genre'=> $genre
        ]);
      

        // return new Response("Breakup mixed-tape? Angsty 90s rock? Browse the collection!");
    }
}
