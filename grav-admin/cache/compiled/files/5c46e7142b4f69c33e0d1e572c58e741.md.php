<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/laurak/Documents/personal-website/grav-admin/user/pages/01.home/aves/item.md',
    'modified' => 1683757351,
    'size' => 1264,
    'data' => [
        'header' => [
            'title' => 'Aves',
            'story_link' => 'http://laurajael.com/RAS-prototypes/Fichas/fichas.html',
            'subtitle' => 'Interactive Cards to explore bird species and their reponse to forest degradation.',
            'tools' => 'D3.js'
        ],
        'frontmatter' => 'title: Aves
story_link: \'http://laurajael.com/RAS-prototypes/Fichas/fichas.html\'
subtitle: \'Interactive Cards to explore bird species and their reponse to forest degradation.\'
tools: D3.js',
        'markdown' => 'I made these interactive cards using D3.js as part of the [Silent Forest](florestasilenciosa.ambiental.media/pb) story by Ambiental Media. This story came out after a research paper published in Nature demonstrated the importance of degradation, and not just deforestation, for the biodiversity of the Amazon.

That paper was titled ["Anthropogenic disturbance in tropical forests can double biodiversity loss from deforestation"](http://www.nature.com/nature/journal/v535/n7610/abs/nature18326.html), and it included an analysis of the impact of degradation on various species, also called "sensitivity to disturbance". 

For the "Aves" cards, I focused on birds, specifically. The line charts plot the odds of detection of that particular bird species by the percentage of the forest cover that is degraded. Values near 0 indicate resistance to change, which values near -1 or +1 indicate larger odds of being detected at an extreme. An illustation of the bird and a recording of its birdsong is included on each card.  

![birds-aves](birds-aves.png "birds-aves")'
    ]
];
