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

/* partials/blog-list-item.html.twig */
class __TwigTemplate_8bc733ee17e1db4b511dbe78fba5379c312e1c06ad1313483fa0a214890308d6 extends \Twig\Template
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
        echo "<div class=\"card\">
    ";
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 4
            echo "    <div class=\"card-image\">
        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 1200, 1 => 810], "method"), "html", []);
            echo "</a>
    </div>
    ";
        }
        // line 8
        echo "    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
    </div>
        <div class=\"card-title\">
        ";
        // line 12
        $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 12)->display(twig_array_merge($context, ["title_level" => "h3"]));
        // line 13
        echo "        </div>
    </div>
    <div class=\"subtitle-container\">
        <h4 class=\"subtitle\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
        echo "</h4>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  57 => 13,  55 => 12,  49 => 8,  41 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    {% set image = page.media.images|first %}
    {% if image %}
    <div class=\"card-image\">
        <a href=\"{{ page.url }}\">{{ image.cropZoom(1200,810).html|raw }}</a>
    </div>
    {% endif %}
    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
    </div>
        <div class=\"card-title\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h3'} %}
        </div>
    </div>
    <div class=\"subtitle-container\">
        <h4 class=\"subtitle\">{{ page.header.subtitle }}</h4>
    </div>
</div>
", "partials/blog-list-item.html.twig", "/Users/laurak/Documents/personal-website/grav-admin/user/themes/custom-quark/templates/partials/blog-list-item.html.twig");
    }
}
