<?php 

/* namespace Pedronicpa\Joke;

use GuzzleHttp\Client;

class Joke
{
    public function get(): string
    {
        $client = new Client();
        $response = $client->request('GET', 'https://v2.jokeapi.dev/joke/Programming?type=single');


        
        $joke = json_decode($response->getBody()->getContents());
        return $joke->joke;
    }
}
 */



namespace Pedronicpa\Admindashtail;
use GuzzleHttp\Client;

class Joke
{
    public function getJoke()
    {

        $client = new Client([
            'verify' => false, // Ignorar verificación del certificado SSL
        ]);
        $response = $client->request('GET', 'https://v2.jokeapi.dev/joke/Programming?type=single');

        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Error al obtener la broma');
        }

        
        $joke = json_decode($response->getBody()->getContents());
        return $joke->joke;
        // Aquí podrías tener la lógica para obtener una broma
       // return "¿Por qué el pollo cruzó la carretera? ¡Para llegar al otro lado!";
    }
}
