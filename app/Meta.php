<?php

namespace App;

class Meta
{
    protected static $meta = [];

    public static function addMeta($name, $content)
    {
        static::$meta[$name] = $content;
    }

    public static function render()
    {
        $html = '';
        foreach (static::$meta as $name => $content) {
            if ($name === 'title') {
                $html .= '<title>' . $content . '</title>' . PHP_EOL;
                continue;
            }

            $html .= '<meta name="' . $name . '" content="' . $content . '" />' . PHP_EOL;
        }
        return $html;
    }

    public static function cleanup()
    {
        static::$meta = [];
    }
}
