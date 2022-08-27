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

/* partials/footer.html.twig */
class __TwigTemplate_a237b53a06151017366b685bd59610c50f7a33f0a7a1cc0f81ba55c99f445e7a extends \Twig\Template
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
        echo "<section id=\"footer\" class=\"section\">
        <p class=\"copyright\">&copy; Laura Kurtzberg 2022</p>

        <div class=\"creative-links-container\">
          <p class=\"creative-link\">Observable</p>
          <p class=\"creative-link\">Glitch</p>
          <p class=\"creative-link\">Github</p>
          <p class=\"creative-link\">Twitter</p>
        </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"section\">
        <p class=\"copyright\">&copy; Laura Kurtzberg 2022</p>

        <div class=\"creative-links-container\">
          <p class=\"creative-link\">Observable</p>
          <p class=\"creative-link\">Glitch</p>
          <p class=\"creative-link\">Github</p>
          <p class=\"creative-link\">Twitter</p>
        </div>
</section>
", "partials/footer.html.twig", "/Users/laurak/Documents/personal-website/grav-admin/user/themes/custom-quark/templates/partials/footer.html.twig");
    }
}
