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

/* coursepage.html.twig */
class __TwigTemplate_ad95ed781daa5da95bdc80734b0eb570fabe4c61afb59b77be0785a3f8e7c5fe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'aboutmesidebar' => [$this, 'block_aboutmesidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "blog_url"), $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "blog-page"))], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "coursepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bricklayer.css"], "method");
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 13
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/bricklayer.min.js"], "method");
        // line 14
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scopedQuerySelectorShim.min.js"], "method");
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        // line 18
        echo "    <section id=\"second-body-wrapper\"> 
        
    ";
        // line 20
        $this->displayBlock('aboutmesidebar', $context, $blocks);
        // line 23
        echo "    <section class=\"flex-fix\">
        <div class=\"full-width\">
            <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</h1>
            <p class=\"special-subtitle\">
                ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "pageheading", []), "html", null, true);
        echo "
            </p>  
        </div>

        ";
        // line 31
        $this->loadTemplate("coursepage.html.twig", "coursepage.html.twig", 31, "369859926")->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 41
        echo "        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
";
    }

    // line 20
    public function block_aboutmesidebar($context, array $blocks = [])
    {
        // line 21
        echo "      ";
        $this->loadTemplate("partials/aboutmesidebar.html.twig", "coursepage.html.twig", 21)->display(twig_array_merge($context, ["content" => $this->getAttribute(($context["page"] ?? null), "content", [])]));
        // line 22
        echo "    ";
    }

    public function getTemplateName()
    {
        return "coursepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 22,  117 => 21,  114 => 20,  104 => 41,  102 => 31,  95 => 27,  90 => 25,  86 => 23,  84 => 20,  80 => 18,  77 => 17,  72 => 14,  70 => 13,  65 => 12,  62 => 11,  55 => 8,  52 => 7,  49 => 6,  44 => 1,  42 => 4,  40 => 3,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
    {% do assets.add('theme://js/scopedQuerySelectorShim.min.js') %}
{% endblock %}

{% block body %}
    <section id=\"second-body-wrapper\"> 
        
    {% block aboutmesidebar %}
      {% include 'partials/aboutmesidebar.html.twig' with {content: page.content} %}
    {% endblock %}
    <section class=\"flex-fix\">
        <div class=\"full-width\">
            <h1>{{ page.header.title }}</h1>
            <p class=\"special-subtitle\">
                {{ page.header.pageheading }}
            </p>  
        </div>

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                
            {% endblock %}

        {% endembed %}
        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}
", "coursepage.html.twig", "/Users/laurak/Documents/personal-website/grav-admin/user/themes/custom-quark/templates/coursepage.html.twig");
    }
}


/* coursepage.html.twig */
class __TwigTemplate_ad95ed781daa5da95bdc80734b0eb570fabe4c61afb59b77be0785a3f8e7c5fe___369859926 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'item' => [$this, 'block_item'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 31
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "coursepage.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_item($context, array $blocks = [])
    {
        // line 33
        echo "
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 35
            echo "                    ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "coursepage.html.twig", 35)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 36
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                
            ";
    }

    public function getTemplateName()
    {
        return "coursepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 37,  251 => 36,  248 => 35,  231 => 34,  228 => 33,  225 => 32,  215 => 31,  120 => 22,  117 => 21,  114 => 20,  104 => 41,  102 => 31,  95 => 27,  90 => 25,  86 => 23,  84 => 20,  80 => 18,  77 => 17,  72 => 14,  70 => 13,  65 => 12,  62 => 11,  55 => 8,  52 => 7,  49 => 6,  44 => 1,  42 => 4,  40 => 3,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
    {% do assets.add('theme://js/scopedQuerySelectorShim.min.js') %}
{% endblock %}

{% block body %}
    <section id=\"second-body-wrapper\"> 
        
    {% block aboutmesidebar %}
      {% include 'partials/aboutmesidebar.html.twig' with {content: page.content} %}
    {% endblock %}
    <section class=\"flex-fix\">
        <div class=\"full-width\">
            <h1>{{ page.header.title }}</h1>
            <p class=\"special-subtitle\">
                {{ page.header.pageheading }}
            </p>  
        </div>

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                
            {% endblock %}

        {% endembed %}
        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}
", "coursepage.html.twig", "/Users/laurak/Documents/personal-website/grav-admin/user/themes/custom-quark/templates/coursepage.html.twig");
    }
}
