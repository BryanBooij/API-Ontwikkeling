<?php
class JsonConversie
{

    public $url = "";
    public $title = "";
    public $data = "";

    function __construct($title)
    {
        $this->title = $title;
    }


    function setAPIUrl($url)
    {
        $this->url = $url;
    }

    function Conversie($url, $title)
    {
        $json = file_get_contents($url ."" . $title);

        $this->data = json_decode($json,true);
    }

    function getMovieInfo($whichInfo)
    {
        return $this->data[$whichInfo];
    }
}
?>