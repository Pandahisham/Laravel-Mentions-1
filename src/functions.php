<?php

if (!function_exists('mention')) {
    /**
     * Return an instance of the Mention FormBuilder.
     *
     * @return \DraperStudio\Mentions\Builder\MentionBuilder
     */
    function mention()
    {
        return app('mentionBuilder');
    }
}
