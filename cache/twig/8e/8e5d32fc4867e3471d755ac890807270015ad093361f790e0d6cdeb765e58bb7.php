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

/* modular/features.html.twig */
class __TwigTemplate_64a874bfd63e8cbf580a529008f066242de3f0280a3042f3b2cb5de30797995c extends \Twig\Template
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
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 2
        $context["columns"] = ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []) == "small")) ? ("col-3 col-md-4 col-sm-6") : ("col-4 col-md-6 col-sm-12"));
        // line 3
        echo "<section class=\"section modular-features ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
        <section class=\"container ";
        // line 4
        echo ($context["grid_size"] ?? null);
        echo "\">
            <div class=\"frame-box\">

                ";
        // line 7
        echo ($context["content"] ?? null);
        echo "

                <div class=\"columns\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 11
            echo "                   <div class=\"column ";
            echo ($context["columns"] ?? null);
            echo "\">
                      ";
            // line 12
            if ($this->getAttribute($context["feature"], "url", [])) {
                echo "<a href=\"";
                echo $this->getAttribute($context["feature"], "url", []);
                echo "\">";
            }
            // line 13
            echo "                      <div class=\"feature-icon\">
                         <i class=\"fa fa-fw ";
            // line 14
            echo $this->getAttribute($context["feature"], "icon", []);
            echo "\"></i>
                         ";
            // line 15
            if ($this->getAttribute($context["feature"], "header", [])) {
                // line 16
                echo "                            <h6>";
                echo $this->getAttribute($context["feature"], "header", []);
                echo "</h6>
                         ";
            }
            // line 18
            echo "                      </div>
                      ";
            // line 19
            if ($this->getAttribute($context["feature"], "url", [])) {
                echo "</a>";
            }
            // line 20
            echo "                      <div class=\"feature-content\">
                         ";
            // line 21
            if ($this->getAttribute($context["feature"], "text", [])) {
                // line 22
                echo "                         <p>";
                echo $this->getAttribute($context["feature"], "text", []);
                echo "</p>
                         ";
            }
            // line 24
            echo "                      </div>
                   </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </div>
            </div>
        </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  99 => 24,  93 => 22,  91 => 21,  88 => 20,  84 => 19,  81 => 18,  75 => 16,  73 => 15,  69 => 14,  66 => 13,  60 => 12,  55 => 11,  51 => 10,  45 => 7,  39 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_size = theme_var('grid-size') %}
{% set columns = page.header.class == 'small' ? 'col-3 col-md-4 col-sm-6' : 'col-4 col-md-6 col-sm-12'  %}
<section class=\"section modular-features {{ page.header.class}}\">
        <section class=\"container {{ grid_size }}\">
            <div class=\"frame-box\">

                {{ content|raw }}

                <div class=\"columns\">
                {% for feature in page.header.features %}
                   <div class=\"column {{ columns }}\">
                      {% if feature.url %}<a href=\"{{feature.url}}\">{% endif %}
                      <div class=\"feature-icon\">
                         <i class=\"fa fa-fw {{ feature.icon }}\"></i>
                         {% if feature.header %}
                            <h6>{{ feature.header }}</h6>
                         {% endif %}
                      </div>
                      {% if feature.url %}</a>{% endif %}
                      <div class=\"feature-content\">
                         {% if feature.text %}
                         <p>{{ feature.text }}</p>
                         {% endif %}
                      </div>
                   </div>
                {% endfor %}
                </div>
            </div>
        </section>
</section>
", "modular/features.html.twig", "/home/teal/dev/grav/grav-skeleton-onepage-site/user/themes/quark/templates/modular/features.html.twig");
    }
}
