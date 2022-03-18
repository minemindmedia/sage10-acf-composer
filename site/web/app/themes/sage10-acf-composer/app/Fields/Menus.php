<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Menus extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $menus = new FieldsBuilder('menus');

        $menus
            ->setLocation('nav_menu_item', '==', 'all');

        $menus
            ->addText('subtext', [
                'label' => 'Sub-text'
            ]);

        $menus
            ->addImage('nav_thumb', [
                'label' => 'Thumbnail',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ]);

        return $menus->build();
    }
}
