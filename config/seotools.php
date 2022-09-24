<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => env('APP_NAME', 'ছদাহা ডিজিটাল লাইব্রেরি'), // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'ছদাহা ডিজিটাল লাইব্রেরি বইকে জনসাধারণের কাছে সহজলভ্য করে সমাজে পাঠক সৃষ্টি এবং নিয়মিত পাঠককে বইয়ের সংস্পর্শে থাকার সুযোগ করে দিয়ে মানসিক ইতিবাচক পরিবর্তনে বিশেষ ভূমিকা রাখবে। প্রকল্পটি কোন নির্দিষ্ট শ্রেণী, ধর্ম, বর্ণ কিংবা গোষ্ঠীর জন্য গৃহীত হয়নি, বরঞ্চ সর্বসাধারণের মাঝে বই পড়ার সুযোগ সৃষ্টি ও উদ্দীপনা ছড়িয়ে দেওয়ার প্রয়াস চালিয়ে যাবে। বই পাঠকের কাছে পৌঁছে দেওয়ার পাশাপাশি স্থায়ী ও বিশেষ পাঠাগারের মাধ্যমে জ্ঞান বিতরণের কাজকে এগিয়ে নিতে বিশেষ ভূমিকা রাখবে ছদাহা ডিজিটাল লাইব্রেরি।', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [
                'ছদাহা ডিজিটাল লাইব্রেরি', 'বই', 'ছদাহা', 'ডিজিটাল লাইব্রেরি', 'ছদাহা লাইব্রেরি', 'ছদাহা.CoM', 'Chadaha', 'Chadaha Library', 'Chadaha Online Library', 'Digital Library', 'Rabiul Hassan', 'rabiulhassandev',
            ],
            'canonical'    => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => 'a-Xr6Dur7lfvJHXO3XtU-ufgUVosHLkcqh9xqJaJ4Yw',
            'bing'      => '0769EA1BE7114D8AD839FC2AA5C35303',
            'alexa'     => null,
            'pinterest' => '2f6a1f0b7ca951c6f9009e0d48e86998',
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => env('APP_NAME', 'Laravel Project'), // set false to total remove
            'description' => 'ছদাহা ডিজিটাল লাইব্রেরি বইকে জনসাধারণের কাছে সহজলভ্য করে সমাজে পাঠক সৃষ্টি এবং নিয়মিত পাঠককে বইয়ের সংস্পর্শে থাকার সুযোগ করে দিয়ে মানসিক ইতিবাচক পরিবর্তনে বিশেষ ভূমিকা রাখবে। প্রকল্পটি কোন নির্দিষ্ট শ্রেণী, ধর্ম, বর্ণ কিংবা গোষ্ঠীর জন্য গৃহীত হয়নি, বরঞ্চ সর্বসাধারণের মাঝে বই পড়ার সুযোগ সৃষ্টি ও উদ্দীপনা ছড়িয়ে দেওয়ার প্রয়াস চালিয়ে যাবে। বই পাঠকের কাছে পৌঁছে দেওয়ার পাশাপাশি স্থায়ী ও বিশেষ পাঠাগারের মাধ্যমে জ্ঞান বিতরণের কাজকে এগিয়ে নিতে বিশেষ ভূমিকা রাখবে ছদাহা ডিজিটাল লাইব্রেরি।', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'Portfolio',
            'site_name'   => env('APP_NAME', 'Laravel Project'),
            'images'      => [
                env('APP_URL') . 'front-assets/images/logo.png',
            ],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => env('APP_NAME', 'Laravel Project'), // set false to total remove
            'description' => 'ছদাহা ডিজিটাল লাইব্রেরি বইকে জনসাধারণের কাছে সহজলভ্য করে সমাজে পাঠক সৃষ্টি এবং নিয়মিত পাঠককে বইয়ের সংস্পর্শে থাকার সুযোগ করে দিয়ে মানসিক ইতিবাচক পরিবর্তনে বিশেষ ভূমিকা রাখবে। প্রকল্পটি কোন নির্দিষ্ট শ্রেণী, ধর্ম, বর্ণ কিংবা গোষ্ঠীর জন্য গৃহীত হয়নি, বরঞ্চ সর্বসাধারণের মাঝে বই পড়ার সুযোগ সৃষ্টি ও উদ্দীপনা ছড়িয়ে দেওয়ার প্রয়াস চালিয়ে যাবে। বই পাঠকের কাছে পৌঁছে দেওয়ার পাশাপাশি স্থায়ী ও বিশেষ পাঠাগারের মাধ্যমে জ্ঞান বিতরণের কাজকে এগিয়ে নিতে বিশেষ ভূমিকা রাখবে ছদাহা ডিজিটাল লাইব্রেরি।', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [
                env('APP_URL') . 'front-assets/images/logo.png',
            ],
        ],
    ],
];
