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

/* blog.html.twig */
class __TwigTemplate_bf6ac741b957042407191e89248500f151a0029da28f6a8b63c7e8f1f6fb9819 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        echo "    <section id=\"body-wrapper\" class=\"section blog-listing\">

    ";
        // line 20
        $this->displayBlock('aboutmesidebar', $context, $blocks);
        // line 23
        echo "
        <section class=\"blog-items container ";
        // line 24
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">

        ";
        // line 26
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 26, "817844458")->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 38
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
        $this->loadTemplate("partials/aboutmesidebar.html.twig", "blog.html.twig", 21)->display(twig_array_merge($context, ["content" => $this->getAttribute(($context["page"] ?? null), "content", [])]));
        // line 22
        echo "    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 22,  109 => 21,  106 => 20,  96 => 38,  94 => 26,  89 => 24,  86 => 23,  84 => 20,  80 => 18,  77 => 17,  72 => 14,  70 => 13,  65 => 12,  62 => 11,  55 => 8,  52 => 7,  49 => 6,  44 => 1,  42 => 4,  40 => 3,  38 => 2,  32 => 1,);
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
    <section id=\"body-wrapper\" class=\"section blog-listing\">

    {% block aboutmesidebar %}
      {% include 'partials/aboutmesidebar.html.twig' with {content: page.content} %}
    {% endblock %}

        <section class=\"blog-items container {{ grid_size }}\">

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                </div>

            {% endblock %}

        {% endembed %}
        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}
", "blog.html.twig", "/Users/laurak/Documents/personal-website/grav-admin/user/themes/custom-quark/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_bf6ac741b957042407191e89248500f151a0029da28f6a8b63c7e8f1f6fb9819___817844458 extends \Twig\Template
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
        // line 26
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "blog.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_item($context, array $blocks = [])
    {
        // line 28
        echo "
                <div class=\"bricklayer\">
                ";
        // line 30
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
            // line 31
            echo "                    ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 31)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 32
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
        // line 33
        echo "                </div>

            ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 33,  241 => 32,  238 => 31,  221 => 30,  217 => 28,  214 => 27,  204 => 26,  112 => 22,  109 => 21,  106 => 20,  96 => 38,  94 => 26,  89 => 24,  86 => 23,  84 => 20,  80 => 18,  77 => 17,  72 => 14,  70 => 13,  65 => 12,  62 => 11,  55 => 8,  52 => 7,  49 => 6,  44 => 1,  42 => 4,  40 => 3,  38 => 2,  32 => 1,);
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
    <section id=\"body-wrapper\" class=\"section blog-listing\">

    {% block aboutmesidebar %}
      {% include 'partials/aboutmesidebar.html.twig' with {content: page.content} %}
    {% endblock %}

        <section class=\"blog-items container {{ grid_size }}\">

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                </div>

            {% endblock %}

        {% endembed %}
        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}
", "blog.html.twig", "/Users/laurak/Documents/personal-website/grav-admin/user/themes/custom-quark/templates/blog.html.twig");
    }
}
