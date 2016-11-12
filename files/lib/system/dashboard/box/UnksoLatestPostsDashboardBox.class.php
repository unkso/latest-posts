<?php namespace wbb\system\dashboard\box;

use wcf\system\WCF;

class UnksoLatestPostsDashboardBox extends LatestPostsDashboardBox
{
    protected function render()
    {
        if (!count($this->latestPostsList)) return '';

        WCF::getTPL()->assign(array(
            'latestPostsList' => $this->latestPostsList
        ));

        return WCF::getTPL()->fetch('unksoDashboardBoxLatestPosts', 'wbb');
    }
}