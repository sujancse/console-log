<?php


namespace Sujan\Logger;


abstract class Console
{
    /**
     * @param $data
     */
    public static function log($data)
    {
        $data = json_encode($data);

        $script = <<<JSCODE
            <script>
                console.log(JSON.parse('$data'));
            </script>
        JSCODE;

        echo $script;
    }
}
