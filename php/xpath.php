<?php
    $url = "https://example.com/";
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
    $dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    // Find targeted elements using XPath
    $xpath_query = '//*[@class="singleSeries"]/*[@class="info"]/h1/a';
    $nodes = $xpath->query($xpath_query);
    $result = $nodes[0]->nodeValue;
    print_r($result);