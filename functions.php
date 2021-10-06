<?php
require_once("csv_utils.php");

function createCards($authors, $quotes) {
    foreach($quotes as $quote) {
        if($quote == null){continue;}
            ?>
        <div class="slider-item align-content-center">

            <div class="animation-card_content">
                <figure>
                    <blockquote class="blockquote animation-card_content_description p-2 pt-1">
                        <p><i class="bx bxs-quote-alt-left quote-icon-left text-secondary pe-2"></i><?= $quote[0] ?><i
                                class="bx bxs-quote-alt-right quote-icon-right text-secondary ps-2"></i></p>
                    </blockquote>
                    <figcaption class="blockquote-footer text-end">
                        <cite title="Source Title"><?= $authors[$quote[1]][0] . " " . $authors[$quote[1]][1] ?></cite>
                    </figcaption>
                </figure>
            </div>
        </div>
    <?php
    }
}

function findAuthor($authors, $author): int{
    foreach($authors as $person) {
    }
}
