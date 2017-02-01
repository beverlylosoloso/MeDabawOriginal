<?php 



return array(
    
    'presets' => array(
        'mypreset' => array(
            'bgcolor' => '#f00', // Set the background color red
            'filetype' => 'jpg', // Output as jpeg.
            'quality' => 75,
            'actions' => array(
                array('crop_resize', 200, 200),
                array('watermark', '$1'), // Note the $1 is a variable.
                array('output', 'png')
            )
        )
    )
);