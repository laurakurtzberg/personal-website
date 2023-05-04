<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/blog-item.html.twig */
class __TwigTemplate_0fc081b6c2a8e9e9cd9e10d9f151b3c7b547895046cc9366cfafa01a9170fa79 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"content-item h-entry\">

";
        // line 3
        if ( !($context["hero_image_name"] ?? null)) {
            // line 4
            echo "    <div class=\"content-title text-center\">
        ";
            // line 5
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-item.html.twig", 5)->display(twig_array_merge($context, ["title_level" => "h3"]));
            // line 6
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
                // line 7
                echo "        <h3>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
                echo "</h3>
        ";
            }
            // line 9
            echo "        ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-item.html.twig", 9)->display($context);
            // line 10
            echo "    </div>
";
        }
        // line 12
        echo "    
    ";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "story_link", [])) {
            // line 14
            echo "        <p class=\"story-link text-center\">
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "story_link", []), "html", null, true);
            echo "\" class=\"btn\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.READ_STORY"), "html", null, true);
            echo "</a>
        </p>
    ";
        }
        // line 18
        echo "    <div class=\"e-content\">
        ";
        // line 19
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>

    ";
        // line 22
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", []))) {
            // line 23
            echo "        ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item.html.twig", 23)->display($context);
            // line 24
            echo "    ";
        }
        // line 25
        echo "</div>

<p class=\"prev-next text-center\">
     ";
        // line 28
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
            // line 29
            echo "        <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []), "html", null, true);
            echo "\">
            <i class=\"fa fa-angle-left\"></i>
            ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.NEXT_POST"), "html", null, true);
            echo " </a>
    ";
        }
        // line 33
        echo "    
    ";
        // line 34
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
            // line 35
            echo "            <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.PREV_POST"), "html", null, true);
            echo "
            <i class=\"fa fa-angle-right\"></i>
        </a>
    ";
        }
        // line 39
        echo "
   
</p>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  113 => 35,  111 => 34,  108 => 33,  103 => 31,  97 => 29,  95 => 28,  90 => 25,  87 => 24,  84 => 23,  82 => 22,  76 => 19,  73 => 18,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  53 => 10,  50 => 9,  44 => 7,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-item h-entry\">

{% if not hero_image_name %}
    <div class=\"content-title text-center\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h3'} %}
        {% if page.header.subtitle %}
        <h3>{{ page.header.subtitle }}</h3>
        {% endif %}
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
{% endif %}
    
    {% if page.header.story_link %}
        <p class=\"story-link text-center\">
            <a href=\"{{ page.header.story_link }}\" class=\"btn\">{{ 'THEME_QUARK.BLOG.ITEM.READ_STORY'|t }}</a>
        </p>
    {% endif %}
    <div class=\"e-content\">
        {{ page.content|raw }}
    </div>

    {% if page.header.continue_link is same as(true) and config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
    {% endif %}
</div>

<p class=\"prev-next text-center\">
     {% if not page.isFirst %}
        <a class=\"btn\" href=\"{{ page.nextSibling.url }}\">
            <i class=\"fa fa-angle-left\"></i>
            {{ 'THEME_QUARK.BLOG.ITEM.NEXT_POST'|t }} </a>
    {% endif %}
    
    {% if not page.isLast %}
            <a class=\"btn\" href=\"{{ page.prevSibling.url }}\"> {{ 'THEME_QUARK.BLOG.ITEM.PREV_POST'|t }}
            <i class=\"fa fa-angle-right\"></i>
        </a>
    {% endif %}

   
</p>
", "partials/blog-item.html.twig", "/Users/laurak/Documents/personal-website/grav-admin/user/themes/custom-quark/templates/partials/blog-item.html.twig");
    }
}
