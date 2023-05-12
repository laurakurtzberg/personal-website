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

/* partials/aboutmesidebar.html.twig */
class __TwigTemplate_3274731f7849e95a8fb13ce1d385ec89648cada2f1e5fd80350a41f21ae0139c extends \Twig\Template
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
        echo "<section class=\"aboutme\">
  <div class=\"mypic-container\"></div>
  <div class=\"my bio\">
    ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/aboutmesidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"aboutme\">
  <div class=\"mypic-container\"></div>
  <div class=\"my bio\">
    {{ content|raw }}
  </div>
</section>
", "partials/aboutmesidebar.html.twig", "/Users/laurak/Documents/personal-website/grav-admin/user/themes/custom-quark/templates/partials/aboutmesidebar.html.twig");
    }
}
