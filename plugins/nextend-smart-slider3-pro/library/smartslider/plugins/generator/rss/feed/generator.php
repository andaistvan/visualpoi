<?php

N2Loader::import('libraries.slider.generator.abstract', 'smartslider');

class N2GeneratorRSSFeed extends N2GeneratorAbstract
{

    protected function _getData($count, $startIndex) {
        $url     = $this->data->get('rssurl', '');
        $content = file_get_contents($url);
        $xml     = new SimpleXmlElement($content);
        $data    = array();
        $i       = 0;
        foreach ($xml->channel->item as $entry) {
            foreach ($entry AS $key => $value) {
                $data[$i][$key] = (string)$value;
            }
            $i++;
            if ($i == $count + $startIndex) break;
        }
        $data = array_slice($data, $startIndex, $count);
        return $data;
    }
}
