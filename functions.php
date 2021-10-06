<?php
require_once("csv_utils.php");

function createCards($authors, $quotes) {
    for ($i = 1; $i <= count($quotes); $i++) { ?>
        <div class="slider-item align-content-center">

            <div class="animation-card_content">
                <figure>
                    <blockquote class="blockquote animation-card_content_description p-2 pt-1">
                        <p><i class="bx bxs-quote-alt-left quote-icon-left text-secondary pe-2"></i><?= $quotes[$i]['quote'] ?><i
                                class="bx bxs-quote-alt-right quote-icon-right text-secondary ps-2"></i></p>
                    </blockquote>
                    <figcaption class="blockquote-footer text-end">
                        <cite title="Source Title"><?= $authors[$quotes[$i]['author_id']]['first_name'] . " " . $authors[$quotes[$i]['author_id']]['last_name'] ?></cite>
                    </figcaption>
                </figure>
            </div>
        </div>
    <?
    }
}

function findAuthor($authors, $author): int
{
    for ($i = 1; $i <= count($authors); $i++) {
        if ($authors[$i]['first_name'] . " " . $authors[$i]['last_name'] == $author) {
            return $i;
        }
    }
    return $i;
}