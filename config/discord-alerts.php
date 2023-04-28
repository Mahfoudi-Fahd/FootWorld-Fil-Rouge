<?php

return [
    /*
     * The webhook URLs that we'll use to send a message to Discord.
     */
    'webhook_urls' => [
        'default' => 'https://discord.com/api/webhooks/1100711155682525254/7mfmDs1BVIzMtaQ6RJ8BTyYZELxRFO2gI1O--doY-lZP8rHe_n1jHVZdogR5Wvp8lpfj',
    ],

    /*
     * This job will send the message to Discord. You can extend this
     * job to set timeouts, retries, etc...
     */
    'job' => Spatie\DiscordAlerts\Jobs\SendToDiscordChannelJob::class,
];
