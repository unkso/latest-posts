<?php namespace wbb\system\dashboard\box;

use wcf\system\WCF;

class UnksoLatestPostsDashboardBox extends LatestPostsDashboardBox
{
    protected function render()
    {
        if (!count($this->latestPostsList)) return '';

        $sortedPostsList = array();

        $today = new DateTime("now");
        $yesterday = new DateTime();
        $yesterday->sub(new DateInterval("P1D"));

        for ($i=0; $i<count($this->latestPostsList); $i++) {
            $thisPost = $this->latestPostsList[$i];

            if ($thisPost["date"] > $yesterday)
                $sortedPostsList["today"][] = $thisPost;

            else if ($thisPost["date"] == $yesterday)
                $sortedPostsList["yesterday"][] = $thisPost;

            else
                $sortedPostsList["earlier"][] = $thisPost;
        }
        
        WCF::getTPL()->assign(array(
            'latestPostsList' => $sortedPostsList
        ));

        return WCF::getTPL()->fetch('unksoDashboardBoxLatestPosts', 'wbb');
    }
}
