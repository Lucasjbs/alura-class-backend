<?php

namespace Class\Streams\Model;

use php_user_filter;

class CustomStreamFilter extends php_user_filter
{
    public $stream;

    function onCreate(): bool
    {
        //Note that 'php://' can execute special resources, in this case, 'php://temp' will create a new temporary file.
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, $closing): int
    {
        $output = '';

        // Buckets are like small pieces of a file and don't have a predetermined size
        while ($bucket = stream_bucket_make_writeable($in)) {
            $lines = explode("\n", $bucket->data);

            // Filter every line that contains 'parte'
            foreach ($lines as $line) {
                if (stripos($line, 'parte') !== false) {
                    $output .= "$line\n";
                }
            }

            //Since the variable $out is a resource just like $in, the filtered string must be converted back to a resource.
            //For that, a temporary file was created to store the filtered data
            $outputBucket = stream_bucket_new($this->stream, $output);
            stream_bucket_append($out, $outputBucket);
        }
        return PSFS_PASS_ON;
    }
}
