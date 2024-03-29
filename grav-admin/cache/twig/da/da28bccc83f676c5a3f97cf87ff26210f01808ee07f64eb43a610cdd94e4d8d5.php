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
class __TwigTemplate_89510e0fc9dbf62df9b24bb912b54737b46bce4a6cf4a2f9850dfb981201f00e extends \Twig\Template
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
          <p class=\"creative-link\">
              <a href=\"https://observablehq.com/@laurakurtzberg\">Observable</a>
          </p>
          <p class=\"creative-link\">
              <a href=\"https://glitch.com/@laura.kurtzberg\">Glitch</a>
          </p>
          <p class=\"creative-link\">
              <a href=\"https://github.com/laurakurtzberg\">Github</a>
          </p>
          <p class=\"creative-link\">
              <a href=\"https://twitter.com/laurakurtzberg\">Twitter</a>
          </p>
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
          <p class=\"creative-link\">
              <a href=\"https://observablehq.com/@laurakurtzberg\">Observable</a>
          </p>
          <p class=\"creative-link\">
              <a href=\"https://glitch.com/@laura.kurtzberg\">Glitch</a>
          </p>
          <p class=\"creative-link\">
              <a href=\"https://github.com/laurakurtzberg\">Github</a>
          </p>
          <p class=\"creative-link\">
              <a href=\"https://twitter.com/laurakurtzberg\">Twitter</a>
          </p>
        </div>
</section>
", "partials/footer.html.twig", "/Users/laurak/Documents/personal-website/grav-admin/user/themes/custom-quark/templates/partials/footer.html.twig");
    }
}
