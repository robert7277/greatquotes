<?php
require_once("csv_utils.php");

function createCards($authors, $quotes) {
    foreach($quotes as $quote) {
        $author = read_some_csv($authors, $quote[1])
            ?>
        <div class="slider-item align-content-center">
            <a href="details.php?index=<?=$quote[1]?>">
            <div class="animation-card_content" >
                <figure>
                    <blockquote class="blockquote animation-card_content_description p-2 pt-1">
                        <p><i class="bx bxs-quote-alt-left quote-icon-left text-secondary pe-2"></i><?= $quote[0] ?><i
                                class="bx bxs-quote-alt-right quote-icon-right text-secondary ps-2"></i></p>
                    </blockquote>
                    <figcaption class="blockquote-footer text-end">
                        <cite title="Source Title"><?= $author[0] . " " . $author[1] ?></cite>
                    </figcaption>
                </figure>
            </div>
            </a>
        </div>
    <?php
    }
}

function findAuthor($authors, $author){
    $found_index = null;
    foreach($authors as $person) {
        if(strcasecmp($person[0],$author[0])==0&&strcasecmp($person[1],$author[1])==0){
            $found_index = $person[2];
        }
    }
    if($found_index==null){return uniqid();}
    else{return $found_index;}
}
