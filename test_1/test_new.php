<?php


$topContributors = [];

$output = 'Write the url of your git repository: ';

fwrite(STDOUT, $output);

$project = trim(fgets(STDIN));

$matches = array();

if (strpos($project, 'github.com') !== false)  {
    preg_match('*github.com/((.|\n)+/(.|\n)+)$*', $project, $matches);
    if(isset($matches[1])) {
        find_contributors($matches[1]);
    } else {
        echo "The format is not correct";
    }
    
} elseif (strpos($project, 'git@') !== false) {
    echo "The format of this git repository is not correct";
} elseif (strpos($project, 'https://') !== false) {
    echo "The url does not represent a repository";
} else {
    echo "The format is not correct";
}

function find_contributors($author_repo) {

    $url = "https://api.github.com/repos/" . $author_repo . "/contributors";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'PHP/' . PHP_VERSION);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_HEADER, false);

    
    $data = curl_exec($ch);

    curl_close($ch);

    if ($data === FALSE) {
        echo 'We are unable to retrieve any data by this call';
        die();
    }

    $data = json_decode($data, true);

    $data_length = count($data);

    for($i = 0; $i < $data_length; $i++) {
        $topContributors[] = $data[$i]['login'];
    }

    if(count($topContributors) > 0) {
        foreach ($topContributors as $user) {
            echo $user . PHP_EOL;
        }
    } else {
        echo "There are no contributors";
    }
}