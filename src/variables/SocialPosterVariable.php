<?php
namespace verbb\socialposter\variables;

use verbb\socialposter\SocialPoster;
// use verbb\socialposter\elements\db\NodeQuery;
// use verbb\socialposter\elements\Node as NodeElement;

use Craft;
use craft\web\View;

use yii\base\Behavior;

class SocialPosterVariable
{
    public function getPluginName()
    {
        return SocialPoster::$plugin->getPluginName();
    }
    
    // public function getPlugin()
    // {
    //     return craft()->plugins->getPlugin('socialPoster');
    // }

    // public function getPluginUrl()
    // {
    //     return $this->getPlugin()->getPluginUrl();
    // }

    // public function getPluginName()
    // {
    //     return $this->getPlugin()->getName();
    // }

    // public function getPluginVersion()
    // {
    //     return $this->getPlugin()->getVersion();
    // }

    // public function getAssetFieldOptions($entry = null)
    // {
    //     // Grab all our asset fields for the entry - used to easily select for post image.
    //     $imageOptions[] = array('label' => 'Select field', 'value' => '');

    //     if ($entry) {
    //         $fields = $entry->getFieldLayout()->getFields();

    //         foreach ($fields as $key) {
    //             $field = $key->field;

    //             if ($field->type == 'Assets') {
    //                 $imageOptions[] = array('label' => $field->name, 'value' => $field->handle);
    //             }
    //         }
    //     } else {
    //         $fields = craft()->fields->getAllFields();
            
    //         foreach ($fields as $field) {
    //             if ($field->type == 'Assets') {
    //                 $imageOptions[] = array('label' => $field->name, 'value' => $field->handle);
    //             }
    //         }
    //     }

    //     return $imageOptions;
    // }

    // public function posts($criteria)
    // {
    //     return craft()->socialPoster_posts->getAllByElementId($criteria['element']->id);
    // }

}