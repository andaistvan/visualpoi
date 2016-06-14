<?php

N2Loader::import('libraries.slider.generator.N2SmartSliderGeneratorAbstract', 'smartslider');

class N2GeneratorPicasaImages extends N2GeneratorAbstract
{

    protected function _getData($count, $startIndex) {
        $album = $this->data->get('picasaalbums', '');
        if ($album != '') {
            $explode    = explode("/", $album);
            $user_id    = $explode[7];
            $album_id   = end($explode);
            $sxml_album = @simplexml_load_file($album);
            if ($sxml_album === false) {
                N2Message::error("No images were returned for this album.");
                return null;
            } else {
                $i    = 0;
                $from = array(
                    "T",
                    "Z"
                );
                $to   = array(
                    " ",
                    ""
                );
                foreach ($sxml_album->entry as $album_photo) {
                    $media                 = $album_photo->children('http://search.yahoo.com/mrss/');
                    $linkName              = (string)$media->group->content->attributes()->{'url'};
                    $data[$i]['image']     = $linkName . "?sz=0";
                    $data[$i]['thumbnail'] = $linkName;
                    $image_data            = get_object_vars($album_photo);

                    if (!is_object($image_data['summary'])) {
                        $data[$i]['title'] = $data[$i]['description'] = $image_data['summary'];
                    } else {
                        $data[$i]['title'] = $data[$i]['description'] = "";
                    }
                    $data[$i]['published'] = str_replace($from, $to, substr($image_data['published'], 0, -5));
                    $data[$i]['updated']   = str_replace($from, $to, substr($image_data['updated'], 0, -5));

                    $url                             = $image_data['link'][1]->attributes();
                    $data[$i]['url']                 = (string)$url['href'];
                    $imageUrl                        = $image_data['link'][2]->attributes();
                    $data[$i]['image_alternate_url'] = (string)$imageUrl['href'];
                    $albumUrl                        = explode('#', $url['href']);
                    $data[$i]['album_url']           = $albumUrl[0];

                    $albumID                           = explode("/", $album_photo->id);
                    $image_id                          = end($albumID);
                    $data[$i]['google_plus_url']       = "https://plus.google.com/photos/" . $user_id . "?pid=" . $image_id . "&oid=" . $user_id;
                    $data[$i]['google_plus_album_url'] = "https://plus.google.com/photos/" . $user_id . "/albums/" . $album_id;
                    $i++;
                }
            }
            $data = array_slice($data, $startIndex, $count);
            return $data;
        } else {
            N2Message::error("There isn't an album selected.");
            return null;
        }
    }
}
