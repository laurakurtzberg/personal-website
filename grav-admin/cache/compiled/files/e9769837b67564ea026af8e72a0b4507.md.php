<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/laurak/Documents/personal-website/grav-admin/user/pages/01.home/blog.md',
    'modified' => 1682632796,
    'size' => 771,
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

Hi, I\'m an **information designer** and **cartographer**. I make interactive maps, data visualizations, and web applications
for news and storytelling. I often work closely with journalists and scientists to create stories with an environmental
focus. My work has been published on [Ambiental Media](https://ambiental.media/en/15627-2/), [InfoAmazonia](https://infoamazonia.org/), and [Mongabay](https://www.mongabay.com/).

I am also a Professor of Practice at Florida International University\'s [School of Journalism & Media](https://carta.fiu.edu/journalism/) in Miami, FL,
where I teach courses on data visualization and technology.
'
    ]
];
