<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/laurak/Documents/personal-website/grav-admin/user/pages/01.home/blog.md',
    'modified' => 1658447027,
    'size' => 672,
    'data' => [
        'header' => [
            'title' => 'Home',
            'show_sidebar' => false,
            'show_pagination' => false,
            'content' => [
                'items' => '@self.children'
            ]
        ],
        'frontmatter' => 'title: Home
show_sidebar: false
show_pagination: false
content:
    items: \'@self.children\'',
        'markdown' => 'Laura Kurtzberg
===============

Welcome to my personal landing page! My name is Laura Kurtzberg, and lately I\'ve been interested in defining what I do in simple terms. I\'ve settled on the term "digital cartographer", to specify that I make maps for the internet. I\'m often looking to tell a story when I work on a mapping project, and I work closely with journalists and science communicators. I also do a lot of other things, like data visualization design, news app development, and teaching at Florida International University\'s School of Journalism & Communication.
'
    ]
];
