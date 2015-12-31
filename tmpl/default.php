<?php
defined('_JEXEC') or die;
JHtml::stylesheet('modules/' . $module->module . '/assets/css/style.css');
if (!defined('SMART_JQUERY') && $params->get('include_jquery', 0) == "1") {
    JHtml::script('modules/' . $module->module . '/assets/js/jquery-1.8.2.min.js');
    JHtml::script('modules/' . $module->module . '/assets/js/jquery-noconflict.js');
    define('SMART_JQUERY', 1);
}
JHtml::script('modules/' . $module->module . '/assets/js/script.js');

$original_url_link = $params->get('youtube_video_url');
$arrayed_original_url_link = explode("?v=", $original_url_link);
$video_id = $arrayed_original_url_link[1];

$correct_video_url = 'http://www.youtube.com/embed/'.$video_id.'?autoplay=1';

?>
<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    <!-- <a href="#myModal" class="btn btn-lg btn-primary" data-toggle="modal">Launch Demo Modal</a> -->
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div> -->
                <div class="modal-body">
                    <iframe id="cartoonVideo" width="560" height="315" src="<?php echo $correct_video_url; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>