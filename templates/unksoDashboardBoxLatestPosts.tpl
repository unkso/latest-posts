{hascontent}
    <ul class="sidebarBoxList">
        {content}
            {include file='threadList' application='wbb' showAnnouncementsSeparately=false objects=$sortedPostsList["today"] enableEditMode=false}
        {/content}
    </ul>
    <ul class="sidebarBoxList">
        {content}
            {include file='threadList' application='wbb' showAnnouncementsSeparately=false objects=$sortedPostsList["yesterday"] enableEditMode=false}
        {/content}
    </ul>
    <ul class="sidebarBoxList">
        {content}
            {include file='threadList' application='wbb' showAnnouncementsSeparately=false objects=$sortedPostsList["earlier"] enableEditMode=false}
        {/content}
    </ul>
{/hascontent}
