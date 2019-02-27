<?php

namespace App\Repositories;

use App\Publication;

class DbPublicationRepository implements PublicationRepository
{
    public function getNewsTopnews(int $list_id)
    {
        return [$list_id];

        /*
        SELECT PUB.id,
       PUB.type,
       PUB.office,
       PUB.status,
       PUB.dtpub,
       PUB.dtend,
       PUB.rubric_id,
       PUB.region_id,
       PUB.story_id,
       PUB.ukrnet_id,
       PUB.slug,
       PUB.bold,
       PUB.color,
       PUB.exclusive,
       PUB.has_photo,
       PUB.has_video,
       PUB.maindomain,
       PUB.webpush,
       PUB.webpush_sended,
       PUB.image,
       PUB.extra,
       PUB.tags,
       PUB.readalso,
       PUB.authors,
       PUB.editor_id,
       PUB.corrector_id,
       PUB.locked,
       PUB.created_at,
       PUB.updated_at
FROM publications_top AS POS
  INNER JOIN publications AS PUB ON PUB.id = POS.publication_id
WHERE POS.list_id = 1000000 AND POS.`position` < 10
  ORDER BY POS.`position` ASC



        */
    }
}


