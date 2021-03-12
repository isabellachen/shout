<?php

/**
 * This is an example module with only the basic
 * setup necessary to get it working.
 *
 * @class SHOUTMissionModule
 */
class SHOUTMissionModule extends FLBuilderModule {

    /** 
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */  
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Shout Mission', 'fl-builder'),
            'description'   => __('Shout Mission Module', 'fl-builder'),
            'category'		=> __('SHOUT Modules', 'fl-builder'),
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));

        $this->add_css( 'mission', $this->url . 'css/frontend.css' );
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('SHOUTMissionModule', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Mission Block', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                  'mission_icon' => array(
                    'type'          => 'icon',
                    'label'         => __( 'Icon', 'fl-builder' ),
                    'preview' => array(
							        'type' => 'none',
                      'selector' => '.fl-mission-icon',
						        ),
                  ),
                  'mission_icon_size'  => array(
                    'type'       => 'unit',
                    'label'      => __( 'Size', 'fl-builder' ),
                    'default'    => '30',
                    'sanitize'   => 'floatval',
                    'responsive' => true,
                    'units'      => array( 'px', 'em', 'rem' ),
                    'slider'     => true,
                    'preview'    => array(
                      'type' => 'css',
                      'selector' => '.fl-mission-icon',
                      'property' => 'font-size',
                    ),
                  ),
                  'mission_link'    => array(
                    'type'          => 'link',
                    'label'         => __( 'Link', 'fl-builder' ),
                    'show_target'   => true,
                    'show_nofollow' => true,
                    'connections'   => array( 'url' ),
					        ),
                  'mission_header' => array(
                      'type'          => 'text',
                      'label'         => __( 'Heading', 'fl-builder' ),
                      'default'       => '',
                      'preview'         => array(
                        'type'             => 'text',
                        'selector'         => '.fl-mission-header'  
                      )
                  ),
                  'mission_html' => array(
                    'type'        => 'code',
                    'editor'      => 'html',
                    'label'       => '',
                    'rows'        => '18',
                    'preview'     => array(
                      'type'     => 'text',
                      'selector' => '.fl-mission-html',
                    ),
                    'connections' => array( 'html', 'string', 'url' ),
                  ),
                )
            )
        )
    )
));