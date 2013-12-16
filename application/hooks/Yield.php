<?php
// Credits to http://codeigniter.com/forums/viewthread/57902/
/**
 * Yield
 *
 * Adds layout support :: Similar to RoR <%= yield =>
 *
 * Just output the variable $yield in your layout file which should
 * be located in application/views/layouts/
 *
 * By default if no layout is specified 'default.php' will be used.
 * You can specify a layout by setting $this->layout = 'file.php' in
 * your controller. If you don't want to use the layout then set it to
 * FALSE.
 *
 * If you need to populate the layout with other variables then set
 * $this->layout_data to an array.
 *
 * To enable put this in a "hooks" directory in under an "application"
 * directory. Then add the following to your hooks config file:
 *
 * $hook['display_override'][] = array(
 *  'class'    => 'Yield',
 *  'function' => 'run',
 *  'filename' => 'Yield.php',
 *  'filepath' => 'hooks'
 * );
 *
 * Finally make sure to enable hooks in your config.
 */
class Yield
{
    function run()
    {

        global $OUT;

        $CI =& get_instance();
        $view = $output = $CI->output->get_output();
        $default = APPPATH.'views/layouts/default.php';
        $layout = (isset($CI->layout))?$CI->layout:'default';

        if ($layout !== false){
            $layout .= (!preg_match('/(.+).php$/', $layout))?'.php':'';
            $requested = APPPATH.'views/layouts/' . $layout;
            if (file_exists($requested)){
                $layout_output = $CI->load->file($requested, true);
                $view = str_replace("{yield}", $output, $layout_output);
            }
        }

        $OUT->_display($view);
    }
}

