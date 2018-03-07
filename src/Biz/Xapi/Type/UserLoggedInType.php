<?php

namespace Biz\Xapi\Type;

class SearchKeywordType extends Type
{
    const TYPE = 'logged-in_keyword';

    public function package($statement)
    {
        //
    }

    public function packages($statements)
    {
        if (empty($statements)) {
            return array();
        }

        $pushStatements = array();
        $sdk = $this->createXAPIService();
        foreach ($statements as $statement) {
            try {
                $actor = $this->getActor($statement['user_id']);
                $pushStatements[] = $sdk->logged($actor, array(), array(), $statement['uuid'], $statement['occur_time'], false);
            } catch (\Exception $e) {
                $this->biz['logger']->error($e->getMessage());
            }
        }

        return $pushStatements;
    }
}
