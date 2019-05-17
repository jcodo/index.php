<?php

$url = "https://api.giphy.com/v1/gifs/random?api_key=UjlbFDHmpWqQnC2Kyqd7ylHQz7Le7Ejf";
echo '<img src="' . json_decode(file_get_contents($url), true)['data']['image_original_url'] . '">';
